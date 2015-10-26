<?php

class UsersController extends AppController{

    public function index(){

       /* $goods = $this->User->find('count', array(
           // 'conditions' => array('id >' => 1)
           // 'conditions' => array('NOT' => array('username' => array('admin')))
           // 'conditions' => array('username LIKE' => '%%')
        ));*/

        $goods = $this->User->find('first');
        debug($goods);




    }

}