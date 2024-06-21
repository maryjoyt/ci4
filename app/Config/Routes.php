<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//$routes->setAutoRoute(true);
$routes->get('/', 'Admin::login');
$routes->get('admin/login', 'Admin::login');
$routes->post('admin/login', 'Admin::login');
$routes->get('admin/logout', 'Admin::logout');


$routes->group('', ['filter' => 'AuthAdmin'], static function ($routes) {
    $routes->get('Item/index','Item::index');
    $routes->get('item/index','Item::index');
    $routes->get('item/add', 'Item::add');
    $routes->post('item/add', 'Item::add');
    $routes->get('item/view/(:num)', 'Item::view/$1');
    $routes->get('item/edit/(:num)', 'Item::edit/$1');
    $routes->post('item/edit/(:num)', 'Item::edit/$1');
    $routes->get('item/delete/(:num)', 'Item::delete/$1');
    $routes->post('item/delete/(:num)', 'Item::delete/$1');
});
