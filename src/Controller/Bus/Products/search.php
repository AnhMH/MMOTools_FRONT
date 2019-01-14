<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();
$limit = Configure::read('Config.PageSize');
$sortBy = Configure::read('Config.sortBy');
$limitData = Configure::read('Config.searchPageSize');
$param = $this->getParams(array(
    'limit' => $limit,
    'disable' => 0
));
if (!empty($param['keyword'])) {
    $data = Api::call(Configure::read('API.url_products_list'), $param);
}
$total = !empty($data['total']) ? $data['total'] : 0;
$products = !empty($data['data']) ? $data['data'] : array();
$limit = $param['limit'];
unset($param['disable']);
$this->set(compact(
        'data',
        'limit',
        'total',
        'products',
        'sortBy',
        'limitData',
        'param',
        'url'
    ));