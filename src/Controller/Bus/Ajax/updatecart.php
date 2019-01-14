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
if (!empty($data['qty'])) {
    $cart[$id]['qty'] = $data['qty'];
} else {
    unset($cart[$id]);
}
$total = 0;
foreach ($cart as $v) {
    $total += $v['qty'];
}
$cart['total'] = $total;
$session->write($sessionKey, $cart);
