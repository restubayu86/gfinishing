<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Templates::index');

$routes->group('api', static function ($routes) {
    $routes->group('master', static function ($routes) {
        $routes->resource('kimia', ['controller' => 'Api\Master\Kimia']);
    });
});

$routes->group('master', static function ($routes) {
    $routes->get('item', 'Master\Item::index');
    $routes->get('umum', 'Master\Umum::index');
});
$routes->group('stok', static function ($routes) {
    $routes->get('alur', 'Stok\Alur::index');
    $routes->get('transfer', 'Stok\Transfer::index');
    $routes->get('penyesuaian', 'Stok\Penyesuaian::index');
    $routes->get('opname', 'Stok\Opname::index');
    $routes->get('stokawal', 'Stok\Stok_Awal::index');
});
