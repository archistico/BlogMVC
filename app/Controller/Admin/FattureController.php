<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class FattureController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Fatture');
    }

    public function index(){
        $items = $this->Fatture->all();
        $this->render('admin.fatture.index', compact('items'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Fatture->create([
                'oggetto' => $_POST['oggetto'],
                'cliente_id' => $_POST['cliente_id'],
            ]);
            return $this->index();
        }
        $this->loadModel('Clienti');
        $clienti = $this->Clienti->extract('id', 'denominazione');

        $form = new BootstrapForm($_POST);
        $this->render('admin.fatture.edit', compact('clienti','form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Fatture->update($_GET['id'], [
                'oggetto' => $_POST['oggetto'],
                'cliente_id' => $_POST['cliente_id'],
            ]);
            return $this->index();
        }
        $fattura = $this->Fatture->find($_GET['id']);
        $this->loadModel('Clienti');
        $clienti = $this->Clienti->extract('id', 'denominazione');

        $form = new BootstrapForm($fattura);
        $this->render('admin.fatture.edit', compact('clienti', 'form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Fatture->delete($_POST['id']);
            return $this->index();
        }
    }

}