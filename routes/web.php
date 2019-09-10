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
        'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=https%3A%2F%2Fdoctordong.vn%2F%3Fpartner_token%3DBq7OGnaSE-nrzepIjzrKeUszWQFY0YM49EHU5LLo6g8&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
    ];

    $cashwagonLinks = [
        'https://go.cityclub.finance/click-GQMZE5SR-NJFQCLD4?bt=25&tl=1&sa='  . config('app.site_name') .  '&sa2=' . config('app.sub2', 'sub2'),
        'http://tovpotok.com/ghpV?sub1=' . config('app.site_name') . '&sub2=' . config('app.sub2', 'sub2')
    ];

    $easycreditLinks = [
        'https://go.cityclub.finance/click-AQNF3J0G-KHEQCL7E?bt=25&tl=1&sa='  . config('app.site_name') .  '&sa2=' . config('app.sub2', 'sub2'),
        'http://tovpotok.com/ehpV?sub1=' . config('app.site_name') . '&sub2=' . config('app.sub2', 'sub2')
    ];

    $robocashLinks = [
        'https://go.cityclub.finance/click-IQOHIH3G-KGCQCM28?bt=25&tl=1&sa='  . config('app.site_name') .  '&sa2=' . config('app.sub2', 'sub2'),
        'http://tovpotok.com/OhpV?sub1=' . config('app.site_name') . '&sub2=' . config('app.sub2', 'sub2')
    ];

    $links = [
        'doctor' => [
            'link' => $doctorDongLinks[array_rand($doctorDongLinks)],
            'image' => 'dong144.png',
            'loan_size' => 'lên tới 10 tr VND',
            'percent' => 'từ 0.4% mỗi ngày',
            'age' => 'từ 20 đến 60 năm',
            'period' => 'từ 30 ngày',
        ],
        /*
        'vietmoney' => [
            'link' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=https%3A%2F%2Fcamdo.vietmoney.vn%2F&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
            'image' => 'vitmoney144.png',
            'loan_size' => 'lên tới 10 tr VND',
            'percent' => 'từ 0.5% mỗi ngày',
            'age' => 'từ 20 đến 60 năm',
            'period' => 'từ 60 ngày',
        ],
        'avay' => [
            'link' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=https%3A%2F%2Favay.vn%2F&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
            'image' => 'avay144.png',
            'loan_size' => 'lên tới 80 tr VND',
            'percent' => 'từ 0.05% ngày',
            'age' => 'từ 20 đến 60 năm',
            'period' => 'từ 90 ngày',
        ],
        'comb' => [
            'link' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=https%3A%2F%2Fsaleonline.com-b.vn%2F&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
            'image' => 'com-b144.png',
            'loan_size' => 'lên tới 100 tr',
            'percent' => 'từ 0.05% ngày',
            'age' => 'từ 20 đến 60 năm',
            'period' => 'từ 180 ngày',
        ],
        'shb' => [
            'link' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=http%3A%2F%2Fwww.vaytienmat.shbfinance.com.vn%2F%3Futm_source%3DACT%26utm_medium%3DAllifiliate%26utm_campaign%3DACT&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
            'image' => 'shb144.png',
            'loan_size' => 'lên tới 100 tr',
            'percent' => 'từ 0.05% ngày',
            'age' => 'từ 20 đến 60 năm',
            'period' => 'từ 30 ngày',
        ],
        'f88' => [
            'link' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=http%3A%2F%2Fvaynongoto.f88.vn%2F&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
            'image' => 'f88144.png',
            'loan_size' => 'lên tới 10 tr VND',
            'percent' => 'từ 0.6% mỗi ngày',
            'age' => 'từ 20 đến 60 năm',
            'period' => 'từ 80 ngày',
        ],
        'vpbank' => [
            'link' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=https%3A%2F%2Fcards.vpbank.com.vn%2F&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
            'image' => 'vpbank.png',
            'loan_size' => 'lên tới 10 tr VND',
            'percent' => 'từ 0.1% mỗi ngày',
            'age' => 'từ 22 đến 60 năm',
            'period' => 'từ 30 ngày',
        ],
        'citibank' => [
            'link' => 'https://fast.accesstrade.com.vn/deep_link/5060554555587958166?url=http%3A%2F%2Fcitibank.vnfiba.com%2F%3Futm_source%3Daccesstrade%26aff_sid%3D%7Bclickid%7D&utm_campaign=' . config('app.site_name') . '&utm_source=' . config('app.sub2', 'sub2'),
            'image' => 'city.png',
            'loan_size' => 'lên tới 10 tr VND',
            'percent' => 'từ 0.1% mỗi ngày',
            'age' => 'từ 21 đến 60 năm',
            'period' => 'từ 30 ngày',
        ],*/
        'cashwagon' => [
            'link' => $cashwagonLinks[array_rand($cashwagonLinks)],
            'image' => 'cashwagon.png',
            'loan_size' => 'lên tới 10 tr VND',
            'percent' => 'từ 0% mỗi ngày',
            'age' => 'từ 22 đến 60 năm',
            'period' => 'từ 90 ngày',
        ],

        'robocash' => [
            'link' => $robocashLinks[array_rand($robocashLinks)],
            'image' => 'robocash.png',
            'loan_size' => 'lên tới 10 tr VND',
            'percent' => 'từ 0.5% mỗi ngày',
            'age' => 'từ 22 đến 60 năm',
            'period' => 'từ 30 ngày',
        ],

        'oneclick' => [
            'link' => 'http://tovpotok.com/dhpV?sub1=' . config('app.site_name') . '&sub2=' . config('app.sub2', 'sub2'),
            'image' => 'oneclick.png',
            'loan_size' => 'lên tới 10 tr VND',
            'percent' => 'từ 0.1% mỗi ngày',
            'age' => 'từ 22 đến 60 năm',
            'period' => 'từ 28 ngày',
        ],
        'easycredit' => [
            'link' => $easycreditLinks[array_rand($easycreditLinks)],
            'image' => 'easycredit.png',
            'loan_size' => 'lên tới 50 tr VND',
            'percent' => 'từ 0.1% mỗi ngày',
            'age' => 'từ 22 đến 60 năm',
            'period' => 'từ 180 ngày',
        ],
    ];

    $offers = [];

    $offers[] = $links['cashwagon'];
   // $offers[] = $links['easycredit'];
    $offers[] = $links['doctor'];
    $offers[] = $links['robocash'];
    $offers[] = $links['cashwagon'];

    $offers[] = $links['oneclick'];
    $offers[] = $links['doctor'];
    $offers[] = $links['oneclick'];
  //  $offers[] = $links['easycredit'];
    $offers[] = $links['cashwagon'];
    $offers[] = $links['doctor'];
    $offers[] = $links['robocash'];



    /*    if (!empty($geo) && $geo['city']['name_en'] === 'Ho Chi Minh City') {
            $offers[] = $links['vpbank'];
            $offers[] = $links['vietmoney'];
        } else {
            $offers[] = $links['vpbank'];
            $offers[] = $links['citibank'];
        }
        $offers[] = $links['doctor'];
        $offers[] = $links['f88'];
        $offers[] = $links['vpbank'];
        $offers[] = $links['avay'];
        $offers[] = $links['comb'];
        $offers[] = $links['shb'];*/


    $actions = [
        'Điều kiện trung thành',
        'Phê duyệt tốt nhất',
        'Phê duyệt mọi người',
        'Giải pháp tức thì',
        'Tiền ngay lập tức',
        'Vay cho bạn!',
        'Phê duyệt tốt nhất',
        'Giải pháp tức thì',
        'Giải pháp ngay lập tức',
        'Phê duyệt khẩn cấp',
    ];
    shuffle($actions);
    
    return view('main', ['city' => $city, 'offers' => $offers, 'actions' => $actions, 'links' => $links, 'notificationLink' => $links['cashwagon']]);
});
