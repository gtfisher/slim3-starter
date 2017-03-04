<?php
namespace App\Controllers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

final class NewTicketController
{
    private $view;
    private $logger;

    public function __construct(Twig $view, LoggerInterface $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $this->logger->info("Home page action dispatched");

      $file = __FILE__;
      $args['file'] = $file;
      $this->logger->info("Home page->", $args);
        
        $this->view->render($response, 'tickets.twig', $args );
        return $response;
    }
}
