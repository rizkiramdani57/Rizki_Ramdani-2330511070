<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// CV Page Route - HARUS didefinisikan sebelum route group
$routes->get('cv', 'Home::cv');

// Halaman-halaman CV
$routes->get('education', 'Home::education');
$routes->get('experience', 'Home::experience');
$routes->get('skills', 'Home::skills');

// CV Admin Routes - route group akan menambahkan prefix 'cv/' 
// jadi 'cv/profile' bukan 'cv' saja
$routes->group('cv', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('profile', 'CvController::profile');
    $routes->post('profile/save', 'CvController::saveProfile');
    
    $routes->get('education', 'CvController::education');
    $routes->post('education/save', 'CvController::saveEducation');
    $routes->get('education/delete/(:num)', 'CvController::deleteEducation/$1');
    
    $routes->get('experience', 'CvController::experience');
    $routes->post('experience/save', 'CvController::saveExperience');
    $routes->get('experience/delete/(:num)', 'CvController::deleteExperience/$1');
    
    $routes->get('skills', 'CvController::skills');
    $routes->post('skills/save', 'CvController::saveSkill');
    $routes->get('skills/delete/(:num)', 'CvController::deleteSkill/$1');
});
