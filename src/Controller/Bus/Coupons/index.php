<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();
$limit = Configure::read('Config.PageSize');
$merchants = Configure::read('Config.couponMerchants');
$limitData = Configure::read('Config.searchPageSize');
$pageImage = '';
$pageTitle = '';
$pageDescription = '';
$pageKeyword = '';
$param = $this->getParams(array(
    'limit' => $limit
));
$data = Api::call(Configure::read('API.url_coupons_list'), $param);
$total = !empty($data['total']) ? $data['total'] : 0;
$coupons = !empty($data['data']) ? $data['data'] : array();
$pageImage = $this->BASE_URL.'/img/khuyen-mai.png';
$pageTitle = 'Săn hàng khuyến mãi';
$pageDescription = 'Tổng hợp các khuyến mãi từ các sàn thương mại điện tử tại Việt Nam';
$limit = $param['limit'];
$this->set(compact(
        'data',
        'limit',
        'total',
        'coupons',
        'param',
        'pageTitle',
        'pageImage',
        'pageDescription',
        'limitData',
        'merchants'
    ));