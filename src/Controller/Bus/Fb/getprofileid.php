<?php
use Cake\Core\Configure;
use App\Lib\Api;

if ($this->request->is('post')) {
    // Trim data
    $data = $this->request->data();
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
    }
    $uid = Api::call(Configure::read('API.url_fbaccounts_getuidfromurl'), $data);
    $error = Api::getError();
    if (!empty($error) || empty($uid)) {
        return $this->redirect("{$this->BASE_URL}/fb/result");
    } else {
        return $this->redirect("{$this->BASE_URL}/fb/result/{$uid}");
    }
}
