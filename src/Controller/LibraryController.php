<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{JsonResponse, Request};
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    /**
     * @Route("library/list",name="library_list")
     */

    public function list(Request $request, LoggerInterface $logger) //We get the request params with this
    {
        $title = $request->get('title'); // Getting out title params off from library/list?title="A book's name"
        $logger->info('List action called');
        $response = new JsonResponse();
        $response->setData([
            'success' => true,
            'data' => [[
                'id' => 1,
                'title' => 'Un libro muy buenooo'
            ], [
                'id' => 2,
                'title' => 'Un libro muy buenissimo'
            ], [
                'id' => 3,
                'title' => $title
            ]]
        ]);
        return $response;
    }
}
