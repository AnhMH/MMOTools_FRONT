<?php

use App\Lib\Api;
use Cake\Core\Configure;

$session = $session = $this->getRequest()->getSession();
$cart = array();
$data = $this->request->getData();
$productData = array();
$message = 'Đặt hàng thành công';
$status = 'OK';

$sessionKey = Configure::read('Config.cartSessionKey');
if ($session->check($sessionKey)) {
    $cart = $session->read($sessionKey);
}
unset($cart['total']);
$data['detail_order'] = json_encode($cart);
$data['customer_id'] = !empty($this->AppUI['id']) ? $this->AppUI['id'] : 0;
$result = Api::call(Configure::read('API.url_orders_addupdate'), $data);
$error = Api::getError();
if (!empty($error) || empty($result)) {
    $message = Api::parseErrorMess($error);
    $status = 'ERROR';
} else {
    $session->delete($sessionKey);
}
echo json_encode(array(
    'status' => $status,
    'message' => $message
));
exit();
