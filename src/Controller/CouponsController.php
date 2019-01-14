<?php
namespace App\Controller;

use Cake\Event\Event;

class CouponsController extends AppController
{
     /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    public function index() {
        include ('Bus/Coupons/index.php');
    }
    
    public function detail($id = '') {
        include ('Bus/Coupons/detail.php');
    }
}
