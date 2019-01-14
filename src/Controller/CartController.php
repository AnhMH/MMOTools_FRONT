<?php
namespace App\Controller;

use Cake\Event\Event;

class CartController extends AppController
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
        include ('Bus/Cart/index.php');
    }
    
    public function checkout() {
        include ('Bus/Cart/checkout.php');
    }
    
    public function complete() {
        include ('Bus/Cart/complete.php');
    }
}
