<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();
$pageImage = '';
$pageTitle = '';
$pageDescription = '';
$pageKeyword = '';

if (!empty($url)) {
    $data = Api::call(Configure::read('API.url_products_getdetailforfront'), array('url' => $url));
    $pageImage = !empty($data['product']['image']) ? $data['product']['image'] : '';
    $pageTitle = !empty($data['product']['name']) ? $data['product']['name'] : '';
    $pageDescription = !empty($data['product']['seo_description']) ? $data['product']['seo_description'] : '';
    $pageKeyword = !empty($data['product']['seo_keyword']) ? $data['product']['seo_keyword'] : '';
}
$this->set(compact(
        'data',
        'pageImage',
        'pageTitle',
        'pageDescription',
        'pageKeyword'
    ));