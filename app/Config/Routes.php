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
$routes->add('/auth', 'Auth::auth');
$routes->add('/logout', 'Auth::logout');

//Rutas de Controlador Dashboard
$routes->add('/dashboard', 'Dashboard::index');
$routes->add('/menu', 'Dashboard::menu');
$routes->add('/datesite', 'Dashboard::Datesite');
$routes->add('/empresarial', 'Dashboard::empresarial');
$routes->add('/publications', 'Dashboard::Publications');
$routes->add('/newpublication', 'Dashboard::NewPublication');

//menu y submenu
$routes->get('/menu/(:any)', 'Dashboard::showMenu/$1');
$routes->post('/delmenu', 'Dashboard::borraMenu');
$routes->post('/updateMenu', 'Dashboard::updateMenu');
$routes->post('/addSubmenu', 'Dashboard::addSubmenu');

//submenu
$routes->get('/submenu/(:any)', 'Dashboard::showSubmenu/$2');
$routes->post('/updateBasemenu', 'Dashboard::updateBasemenu');
$routes->post('/delSubmenu', 'Dashboard::delSubmenu');

//basemenu
$routes->post('/newBasemenu', 'Dashboard::newBasemenu');
$routes->post('/updatesSubmenu', 'Dashboard::updatesSubmenu');
$routes->post('/delBasemenu', 'Dashboard::delBasemenu');

//datesite
$routes->post('/saveIcono', 'Dashboard::saveIcono');
$routes->post('/saveDatesite', 'Dashboard::saveDatesite');

//departamento
$routes->add('/Departamento', 'Dashboard::Departamento');
$routes->post('/addDepto', 'Dashboard::addDepto');
$routes->post('/updateDepto', 'Dashboard::updateDepto');
$routes->post('/delDepto', 'Dashboard::delDepto');

//rol de usuarios
$routes->add('/role', 'Dashboard::Role');
$routes->post('/addRolgral', 'Dashboard::addRolgral');
$routes->post('/updateRole', 'Dashboard::updateRole');

$routes->post('/borrRolgral', 'Dashboard::borrRolgral');
$routes->get('/role/(:any)', 'Dashboard::showRole/$1');

//cargo
$routes->post('/addCargo', 'Dashboard::addCargo');
$routes->post('/updateCargo', 'Dashboard::updateCargo');
$routes->post('/delCargo', 'Dashboard::delCargo');


//Giro empresarial
$routes->post('/addEmpre', 'Dashboard::addEmpre');
$routes->post('/updateGiroemp', 'Dashboard::updateGiroemp');
$routes->post('/delGiroemp', 'Dashboard::delGiroemp');


//PERSONAL USUARIOS
$routes->get('/personal', 'Personal::index');
$routes->get('/personal/(:any)', 'Personal::personal/$1');
$routes->post('/llenaPuesto', 'Personal::getPuesto');
$routes->post('/getUser', 'Personal::getUser');
$routes->post('/getEmail', 'Personal::getEmail');
$routes->post('/addPersonal', 'Personal::addPersonal');
//rutas para envio de datos por post y get 
// $routes->get('/obtenerNombre/(:any)', 'Crud::obtenerNombre/$1');

//rolcargo
$routes->post('/llenarolcargo', 'Personal::getRolcargo');
$routes->post('/savePersonal', 'Personal::savePersonal');

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
