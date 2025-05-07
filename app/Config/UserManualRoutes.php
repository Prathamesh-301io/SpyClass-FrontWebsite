<?php
namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

class UserManualRoutes extends BaseConfig
{
    public function initRoutes($routes)
    {
        $routes->get('usermanual', 'UserManual\ManualController::index');
        $routes->get('usermanual/(:segment)', 'UserManual\ManualController::showManual/$1');
        $routes->get('usermanual/(:segment)/(:segment)', 'UserManual\ManualController::showManual/$1/$2');
    }
}
