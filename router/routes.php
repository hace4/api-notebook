<?php
// list of rotes, 
use modules\Router;

/** Router::page($uri, $page_name);*/
Router::page('POST', "POST");
Router::page('GET', "GET");
Router::page('DELETE', "DELETE");
Router::page('PATCH', "PATCH");



Router::enable();
