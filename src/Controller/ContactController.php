<?php
namespace App\Controller;

use Cake\Event\Event;

class ContactController extends AppController
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
        include ('Bus/Contact/index.php');
    }
}
