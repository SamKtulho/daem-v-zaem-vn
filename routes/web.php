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
        'doctor' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=https%3A%2F%2Fcamdo.vietmoney.vn%2F&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
        'vietmoney' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=https%3A%2F%2Fcamdo.vietmoney.vn%2F&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
        'avay' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=https%3A%2F%2Favay.vn%2F&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
        'comb' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=https%3A%2F%2Fsaleonline.com-b.vn%2F&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
        'shb' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=http%3A%2F%2Fwww.vaytienmat.shbfinance.com.vn%2F%3Futm_source%3DACT%26utm_medium%3DAllifiliate%26utm_campaign%3DACT&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
        'f88' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=http%3A%2F%2Fvaynongoto.f88.vn%2F&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
    ];

    $links = [
        'doctor' => 'https://camdo.vietmoney.vn/?aff_sid=jNcXRPTXrnTG9s8xVdL1xbZZey86vggCCss0pq48RZAyHLw8',
        'vietmoney' => 'https://camdo.vietmoney.vn/?aff_sid=jNcXRPTXrnTG9s8xVdL1xbZZey86vggCCss0pq48RZAyHLw8',
        'avay' => 'https://avay.vn/?utm_source=accesstrade&aff_sid=6flehhsWeyeIyt6UbhSXNxzUGyAnTpzLUHpcZGedswUiTZnr',
        'comb' => 'https://saleonline.com-b.vn/?utm_source=accesstrade&aff_sid=poLjHuWKIBBya4c1jSDD8h5Ch3Ohy1AJadTGUD7WcKeNYsOH',
        'shb' => 'http://www.vaytienmat.shbfinance.com.vn/?utm_campaign=ACT&utm_medium=Allifiliate&utm_source=ACT&aff_sid=vrBPGV7219Noj1U7QjfHny0XdhQOnJWLbavzdJK0gKR9pBzw',
        'f88' => 'https://vaynongoto.f88.vn/?utm_source=accesstrade&aff_sid=GKPFNla0M8dU8oWC3NySOsKhyOMm3rtpML6uZauEqDFZRR1J',
    ];
    
    return view('main', ['city' => $city, 'links' => $links]);
});
