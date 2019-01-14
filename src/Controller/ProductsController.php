<?php
namespace App\Controller;

use Cake\Event\Event;

class ProductsController extends AppController
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
        include ('Bus/Products/detail.php');
    }
    
    public function search() {
        include ('Bus/Products/search.php');
    }
}
