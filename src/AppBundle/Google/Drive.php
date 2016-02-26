<?php

namespace AppBundle\Google;

use GuzzleHttp\Psr7\Request;

class Drive
{
    /** @var Client */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getDocumentText($path)
    {
        $client  = $this->client->getInstance();
        $service = new \Google_Service_Drive($client);

        $file = new \Google_Service_Drive_DriveFile();
        $file->setTitle('Image' . rand(10000, 20000));
        $file->setMimeType('image/jpg');

        $createdFile = $service->files->insert($file, [
            'data'       => file_get_contents(urldecode($path)),
            'ocr'        => true,
            'mimeType'   => $file->getMimeType(),
            'uploadType' => 'multipart'
        ]);

        $exportLinks  = $createdFile->getExportLinks();
        $plainTextUrl = $exportLinks['text/plain'];

        $httpClient = $client->authorize();
        $request    = new Request('GET', $plainTextUrl);
        $response   = $httpClient->send($request);

        if ($response) {
            $service->files->delete($createdFile->getId());
            return $response->getBody()->getContents();
        }

        return false;
    }
}
