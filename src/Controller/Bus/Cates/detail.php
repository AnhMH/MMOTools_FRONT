<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();
$limit = Configure::read('Config.PageSize');
$sortBy = Configure::read('Config.sortBy');
$limitData = Configure::read('Config.searchPageSize');
$pageImage = '';
$pageTitle = '';
$pageDescription = '';
$pageKeyword = '';
$param = $this->getParams(array(
    'limit' => $limit,
    'disable' => 0
));
if (!empty($url)) {
    $param['url'] = $url;
    $data = Api::call(Configure::read('API.url_cates_getdetailforfront'), $param);
}
$total = !empty($data['products']['total']) ? $data['products']['total'] : 0;
$products = !empty($data['products']['data']) ? $data['products']['data'] : array();
$cate = !empty($data['cate']) ? $data['cate'] : array();
$pageImage = !empty($cate['image']) ? $cate['image'] : '';
$pageTitle = !empty($cate['name']) ? $cate['name'] : '';
$pageDescription = !empty($cate['description']) ? $cate['description'] : '';
$limit = $param['limit'];
unset($param['disable']);
unset($param['url']);
$this->set(compact(
        'data',
        'limit',
        'total',
        'products',
        'cate',
        'sortBy',
        'limitData',
        'param',
        'url',
        'pageTitle',
        'pageName',
        'pageDescription'
    ));