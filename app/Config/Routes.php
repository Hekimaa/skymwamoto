<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/users', 'UsersController::index',['filter' =>'auth']);
$routes->get('/dashboard', 'UsersController::dashboard',['filter' =>'auth']);
$routes->get('/enquire', 'Enquire::index',['filter' =>'auth']);
$routes->get('/login', 'UsersController::logins');
$routes->get('/save', 'Admin::save');
$routes->get('/admin', 'Admin::index',['filter' =>'auth']);
$routes->get('/aboutus', 'AboutUs::index');
$routes->get('/contacts', 'Contacts::index');
$routes->post('/save', 'Contacts::save');
$routes->get('/destinations', 'Destinations::index',['filter' =>'auth']);
$routes->get('/tours-and-safaris', 'Tours_and_Safaris::index',['filter' =>'auth']);
$routes->get('/tours-and-safaris-routes', 'ToursSafariRoute::index',['filter' =>'auth']);
$routes->get('/hotels', 'Hotels::index',['filter' =>'auth']);
$routes->get('/mountains', 'MountainTrekking::index',['filter' =>'auth']);
$routes->get('/mountainsroute', 'MountainTrekkingRoute::index',['filter' =>'auth']);
$routes->get('/volunteering', 'Volunteering::index',['filter' =>'auth']);
$routes->get('/volunteerings', 'Volunteering::all');
$routes->get('/tours-and-safari', 'Tours_and_Safaris::all_tours_and_safaris');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
