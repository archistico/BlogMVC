<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class UsersController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
    }

    public function index(){
        $items = $this->User->all();
        $this->render('admin.users.index', compact('items'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->User->create([
                'username' => $_POST['username'],
                'password' => sha1($_POST['password']),
            ]);
            return $this->index();
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.users.edit', compact('form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->User->update($_GET['id'], [
                'username' => $_POST['username'],
                'password' => sha1($_POST['password']),
            ]);
            return $this->index();
        }
        $user = $this->User->find($_GET['id']);
        $form = new BootstrapForm($user);
        $this->render('admin.users.edit', compact('form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->User->delete($_POST['id']);
            return $this->index();
        }
    }

}