<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class ClientiController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Clienti');
    }

    public function index(){
        $items = $this->Clienti->all();
        $this->render('admin.clienti.index', compact('items'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Clienti->create([
                'denominazione' => $_POST['denominazione'],
                'indirizzo' => $_POST['indirizzo'],
                'email' => $_POST['email'],
                'telefono' => $_POST['telefono'],
                'piva' => $_POST['piva'],
                'cf' => $_POST['cf'],
            ]);
            return $this->index();
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.clienti.edit', compact('form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Clienti->update($_GET['id'], [
                'denominazione' => $_POST['denominazione'],
                'indirizzo' => $_POST['indirizzo'],
                'email' => $_POST['email'],
                'telefono' => $_POST['telefono'],
                'piva' => $_POST['piva'],
                'cf' => $_POST['cf'],
            ]);
            return $this->index();
        }
        $user = $this->Clienti->find($_GET['id']);
        $form = new BootstrapForm($user);
        $this->render('admin.clienti.edit', compact('form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Clienti->delete($_POST['id']);
            return $this->index();
        }
    }

}