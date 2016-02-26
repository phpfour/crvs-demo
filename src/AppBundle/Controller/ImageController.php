<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sylius\Bundle\ResourceBundle\Controller\ResourceController;

class ImageController extends Controller
{
    public function updateTaskImagesAction(Request $request)
    {
        $fields = $request->request->all();
        $this->get('app.repository.image')->updateImageContents($fields);

        return $this->redirectToRoute('my_task_index');
    }
}
