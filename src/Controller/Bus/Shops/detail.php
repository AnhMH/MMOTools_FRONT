<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();
$limit = 8;
$total = 0;
$pageImage = '';
$pageTitle = '';
$pageDescription = '';
$pageKeyword = '';
$param = $this->getParams(array(
    'limit' => $limit
));

if (!empty($url)) {
    $param['url'] = $url;
    $data = Api::call(Configure::read('API.url_admins_getdetailforfront'), $param);
    $total = !empty($data['products']['total']) ? $data['products']['total'] : 0;
    $pageImage = !empty($data['shop']['avatar']) ? $data['shop']['avatar'] : '';
    $pageTitle = !empty($data['shop']['name']) ? 'Cửa hàng '.$data['shop']['name'] : '';
    $pageDescription = !empty($data['shop']['description']) ? $data['shop']['description'] : '';
}
$this->set(compact(
    'data',
    'limit',
    'total',
    'pageTitle',
    'pageDescription',
    'pageImage'
));