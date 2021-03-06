<?php
namespace App\Controller;

use Cake\Event\Event;

class ShopsController extends AppController
{
    /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    public function detail($url = '') {
        include ('Bus/Shops/detail.php');
    }
}
