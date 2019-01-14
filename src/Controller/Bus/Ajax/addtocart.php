<?php

use App\Lib\Api;
use Cake\Core\Configure;

$session = $session = $this->getRequest()->getSession();
$cart = array();
$data = $this->request->getData();

$sessionKey = Configure::read('Config.cartSessionKey');
if ($session->check($sessionKey)) {
    $cart = $session->read($sessionKey);
}
$id = $data['product_id'];
$qty = !empty($cart[$id]['qty']) ? $cart[$id]['qty'] + $data['qty'] : $data['qty'];
if (!empty($cart[$id])) {
    $cart[$data['product_id']]['qty'] = $qty;
} else {
    $product = Api::call(Configure::read('API.url_products_detail'), array('id' => $id));
    $cart[$id] = array(
        'id' => $id,
        'url' => !empty($product['product']['url']) ? $product['product']['url'] : '',
        'image' => !empty($product['product']['image']) ? $product['product']['image'] : '',
        'name' => !empty($product['product']['name']) ? $product['product']['name'] : '',
        'price' => !empty($product['product']['sell_price']) ? $product['product']['sell_price'] : 0,
        'qty' => $qty
    );
}
$total = 0;
foreach ($cart as $v) {
    $total += $v['qty'];
}
$cart['total'] = $total;
$session->write($sessionKey, $cart);
echo $total;
exit();
