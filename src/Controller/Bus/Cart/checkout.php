<?php
use Cake\Core\Configure;

$session = $session = $this->getRequest()->getSession();
$cart = array();

$sessionKey = Configure::read('Config.cartSessionKey');
if ($session->check($sessionKey)) {
    $cart = $session->read($sessionKey);
}
if (empty($cart)) {
    return $this->redirect($this->BASE_URL);
}

