<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

/**
 * Worker Command
 *
 * Beanstalk worker that atches for any task in "default" pipe and executes using registered task runners.
 *
 * @author Anis Uddin Ahmad <anis.programmer@gmail.com>
 */
class WorkerCommand extends ContainerAwareCommand
{
    /** @var string */
    protected $tube = 'default';

    /** @var array The list of tasks and associated service */
    public static $tasks = [];

    /** @var OutputInterface */
    protected $output;

    protected function configure()
    {
        $this
            ->setName('islamkosh:worker')
            ->setDescription('Watch for all (default) jobs and performs using appropriate command')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;

        $pheanstalk = $this->getContainer()->get("leezy.pheanstalk");

        if ($output->getVerbosity() >= OutputInterface::VERBOSITY_VERBOSE) {
            $this->println("Registered tasks: " . count(static::$tasks));
            foreach (static::$tasks as $name => $service) {
                $this->println('TASK : ' . $name . ' => ' . $service);
            }
        }

        $this->println('Waiting for job...');

        while ($job = $pheanstalk->watch($this->tube)->reserve()) {

            $rawPayload = $job->getData();
            $payload    = json_decode($rawPayload, true);

            $this->println($payload['task'] . ': Received job with payload: ' . $rawPayload, OutputInterface::VERBOSITY_VERBOSE);

            if (null === $payload) {
                $this->println('Payload is not valid JSON: ' . $rawPayload);
                $this->println('Deleting Job.');
            } else {
                if (array_key_exists($payload['task'], static::$tasks)) {
                    $params = isset($payload['params']) ? $payload['params'] : [];
                    $this->runTask(static::$tasks[$payload['task']], $params);
                } else {
                    $this->println($payload['task'] . ': No task registered with this name!');
                }
            }

            $pheanstalk->delete($job);
            $this->println($payload['task'] . ': Completed job with payload: ' . $rawPayload, OutputInterface::VERBOSITY_VERBOSE);

            $this->println('Waiting for job...');
        }

        return 0;
    }

    public function addTask($task, $serviceId)
    {
        static::$tasks[$task] = $serviceId;
    }

    protected function runTask($serviceId, array $input)
    {
        $task = $this->getContainer()->get($serviceId);
        $input['command'] = $task->getName();

        $task->run(new ArrayInput($input), $this->output);
    }

    protected function println($content, $level = OutputInterface::VERBOSITY_NORMAL)
    {
        if ($this->output->getVerbosity() >= $level) {
            $this->output->writeln(date('[Y-m-d H:i:s] ') . $content);
        }
    }
}