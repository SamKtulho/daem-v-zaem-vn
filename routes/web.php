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
    
    $links = [
        'doctor' => [
            'link' => $doctorDongLinks[array_rand($doctorDongLinks)],
            'image' => 'dong144.png',
            'loan_size' => 'lên tới 10 tr VND',
            'percent' => 'từ 0.4% mỗi ngày',
            'age' => 'từ 20 đến 60 năm',
            'period' => 'từ 30 ngày',
        ],
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
        ],
    ];

    $offers = [];

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
    if (!empty($geo) && $geo['city']['name_en'] === 'Ho Chi Minh City') {
        $offers[] = $links['vietmoney'];
        $offers[] = $links['vpbank'];
    } else {
        $offers[] = $links['vpbank'];
        $offers[] = $links['citibank'];
    }

    $offers[] = $links['doctor'];
    $offers[] = $links['f88'];
    $offers[] = $links['vpbank'];
    $offers[] = $links['comb'];
    $offers[] = $links['avay'];
    $offers[] = $links['avay'];
    shuffle($offers);
    shuffle($actions);
    array_unshift($offers, $links['doctor']);
    $offers[] = $links['shb'];

/*    $links = [
        'doctor' => 'https://camdo.vietmoney.vn/?aff_sid=jNcXRPTXrnTG9s8xVdL1xbZZey86vggCCss0pq48RZAyHLw8',
        'vietmoney' => 'https://camdo.vietmoney.vn/?aff_sid=jNcXRPTXrnTG9s8xVdL1xbZZey86vggCCss0pq48RZAyHLw8',
        'avay' => 'https://avay.vn/?utm_source=accesstrade&aff_sid=6flehhsWeyeIyt6UbhSXNxzUGyAnTpzLUHpcZGedswUiTZnr',
        'comb' => 'https://saleonline.com-b.vn/?utm_source=accesstrade&aff_sid=poLjHuWKIBBya4c1jSDD8h5Ch3Ohy1AJadTGUD7WcKeNYsOH',
        'shb' => 'http://www.vaytienmat.shbfinance.com.vn/?utm_campaign=ACT&utm_medium=Allifiliate&utm_source=ACT&aff_sid=vrBPGV7219Noj1U7QjfHny0XdhQOnJWLbavzdJK0gKR9pBzw',
        'f88' => 'https://vaynongoto.f88.vn/?utm_source=accesstrade&aff_sid=GKPFNla0M8dU8oWC3NySOsKhyOMm3rtpML6uZauEqDFZRR1J',
    ];*/
    
    return view('main', ['city' => $city, 'offers' => $offers, 'actions' => $actions, 'links' => $links]);
});
