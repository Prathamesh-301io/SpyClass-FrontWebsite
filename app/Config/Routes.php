<?php

use CodeIgniter\Router\RouteCollection;

// authentication module
$routes->setDefaultNamespace("App\Controllers");
$routes->setDefaultController("Home");
$routes->setDefaultMethod("index");
/*$routes->setTranslateURIDashes(false);*/
$routes->set404Override();
/*$routes->setAutoRoute(true);*/
 $routes->get("/", "Home::index");
 $routes->get('about-us', 'Home::aboutus');
 $routes->get('faq', 'Home::faq');
 $routes->get('terms-and-conditions', 'Home::termsc');
 $routes->get('privacy-policy', 'Home::privacypolicy');

// authentication module
$routes->get('home/submitForm', 'Home::submitForm');
$routes->post('home/submitForm', 'Home::submitForm');
 
$manualRoutes = new \Config\UserManualRoutes();
$manualRoutes->initRoutes($routes);