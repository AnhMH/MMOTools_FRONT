<?php

use App\Lib\Api;
use Cake\Core\Configure;

//$this->Flash->error("error");

if ($this->request->is('post')) {
    // Trim data
    $error = false;
    $data = $this->request->getData();
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
    }
    if ($data['password'] != $data['re_password']) {
        $this->Flash->error('Mật khẩu và xác nhận mật khẩu không giống nhau');
    }
    if (!$error) {
        $data['get_login'] = 1;
        $user = Api::call(Configure::read('API.url_customers_addupdate'), $data);
        if (Api::getError() || empty($user)) {
            $this->Flash->error('Lỗi! Đăng ký không thành công');
        } else {
            // Auth
            unset($user['password']);
            $this->Auth->setUser($user);
            return $this->redirect($this->BASE_URL);
        }
    }
}
