<?php

namespace AppBundle\Command;

use AppBundle\Entity\Task;
use AppBundle\Google\Drive;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class ImageProcessorCommand extends ContainerAwareCommand
{
    /** @var OutputInterface */
    protected $output;

    protected function configure()
    {
        $this->setName('islamkosh:process-image')
            ->setDescription('Processes all pending images by running them through Google Drive OCR engine.')
            ->addArgument('task_id')
            ->addArgument('token')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;

        $client = $this->getContainer()->get('app.google.client');
        $client->setAccessToken($input->getArgument('token'));

        $drive = new Drive($client);

        /** @var Task $task */
        $task = $this->getContainer()->get('app.repository.task')->find($input->getArgument('task_id'));

        $this->println('Processing images for task: [' . $task->getId() . '] ' . $task->getTitle());
        $success = $this->getContainer()->get('app.repository.image')->fetchImageContents($task, $drive);

        $this->println("Total $success images processed for the task.");

    }

    protected function println($content, $level = OutputInterface::VERBOSITY_NORMAL)
    {
        if ($this->output->getVerbosity() >= $level) {
            $this->output->writeln(date('[Y-m-d H:i:s] ') . $content);
        }
    }
}
