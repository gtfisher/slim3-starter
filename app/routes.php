<?php
// Routes

$app->get('/', App\Action\HomeAction::class)
    ->setName('homepage');



$app->get('/t/[{name}]', \App\Controllers\NewTicketController::class)
  ->setName('tickets');



//$app->get('/t', App\Controllers\TicketController::class)
//  -> setName('tickets');