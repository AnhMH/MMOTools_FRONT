<?php

use App\Lib\Api;
use Cake\Core\Configure;

//$this->Flash->error("error");

if ($this->request->is('post')) {
    // Trim data
    $data = $this->request->getData();
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
    }
    $user = Api::call(Configure::read('API.url_customers_login'), $data);
    if (Api::getError() || empty($user)) {
        $this->Flash->error('Lỗi! Đăng nhập không thành công');
    } else {
        // Auth
        unset($user['password']);
        $this->Auth->setUser($user);
        return $this->redirect($this->BASE_URL);
    }
}
