<?php
use App\Lib\Api;
use Cake\Core\Configure;

//$this->Flash->error("error");

if ($this->request->is('post')) {
    // Trim data
    $data = $this->request->data();
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
    }
    $contact = Api::call(Configure::read('API.url_contact_addupdate'), $data);
    $this->Flash->success("Cảm ơn bạn đã liên hệ, chúng tôi sẽ trả lời tin nhắn sớm nhất có thể.");
    return $this->redirect("{$this->BASE_URL}/lien-he");
}
