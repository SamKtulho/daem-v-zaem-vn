<?php

include("SxGeo.php");
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $SxGeo = new SxGeo(database_path('sypexgeo/SxGeoCity.dat'));
    $city = 'thành phố của bạn';

    if (($ip = $_SERVER['REMOTE_ADDR']) && ($geo = $SxGeo->get($ip))) {
        $city = isset($geo['city']['name_en']) ? 'thị trấn ' . $geo['city']['name_en'] : $city;
    }

    $doctorDongLinks = [
        'http://umllb.com/click-FQK9KV6W-NJFQCHGS?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),

    ];
    
    $links = [
        'doctordong' => 'http://umllb.com/click-FQK9KV6W-NJFQCHGS?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'ekapusta' => 'https://go.cityclub.finance/click-CQK9KTJI-NKHQBV00?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'webbankir' => 'https://go.cityclub.finance/click-HQK9KV7D-NJFQCHA1?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'lime' => 'https://go.cityclub.finance/click-AQK9KSTA-NJFQB9GU?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'vivus' => 'https://go.cityclub.finance/click-CQK9KS2H-HFDQBB10?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'moneza' => 'https://go.cityclub.finance/click-EQK9KUL7-RMIQCCFL?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'creditplus' => 'https://go.cityclub.finance/click-FQK9KTWS-NKHQCFVE?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'moneyman' => 'https://go.cityclub.finance/click-FQK9KTWP-HFDQCB8G?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'payps' => 'https://go.cityclub.finance/click-FQK9KVOR-KIGQCFXV?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'greenmoney' => 'https://go.cityclub.finance/click-DQK9KWBX-NLJQCHRG?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'zaymer' => 'https://go.cityclub.finance/click-HQK9KTCD-KIGQBUSV?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'ezaem' => 'http://google.com',
        'creditpomojet' => 'http://google.com',
        'smart' => 'https://go.cityclub.finance/click-CQK9KVKV-KGCQCFM2?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'joymoney' => 'https://go.cityclub.finance/click-CQK9KTJI-NKHQBV00?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
        'oneclick' => 'https://go.cityclub.finance/click-EQK9KS2V-NLJQB86J?bt=25&tl=1&sa=' . config('app.site_name') . '&sa2=' . config('app.sub2', 'sub2'),
    ];
    
    
    
    
    return view('main', ['city' => $city, 'links' => $links]);
});
