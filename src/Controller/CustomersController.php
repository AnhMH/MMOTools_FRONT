<?php
namespace App\Controller;

use Cake\Event\Event;

class CustomersController extends AppController
{
     /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    public function login() {
        if ($this->isAuthorized()) {
            return $this->redirect($this->BASE_URL);
        }
        include ('Bus/Customers/login.php');
    }
    
    public function register() {
        if ($this->isAuthorized()) {
            return $this->redirect($this->BASE_URL);
        }
        include ('Bus/Customers/register.php');
    }
    
    public function logout() {
        include ('Bus/Customers/logout.php');
    }
}
