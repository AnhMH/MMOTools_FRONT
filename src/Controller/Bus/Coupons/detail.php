<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();
$pageImage = '';
$pageTitle = '';
$pageDescription = '';
$pageKeyword = '';

if (!empty($id)) {
    $data = Api::call(Configure::read('API.url_coupons_getdetailforfront'), array('id' => $id));
    $pageImage = !empty($data['coupon']['image']) ? $data['coupon']['image'] : '';
    $pageTitle = !empty($data['coupon']['name']) ? $data['coupon']['name'] : '';
    $pageDescription = !empty($data['coupon']['content']) ? $data['coupon']['content'] : '';
    $pageKeyword = !empty($data['coupon']['seo_keyword']) ? $data['coupon']['seo_keyword'] : '';
}
$this->set(compact(
        'data',
        'pageImage',
        'pageTitle',
        'pageDescription',
        'pageKeyword'
    ));