<?php
namespace App\Table;

use Core\Table\Table;

class FattureTable extends Table{

    protected $table = "fatture";

    public function all(){
        return $this->query("
            SELECT fatture.id, fatture.oggetto, clienti.denominazione as denominazione
            FROM fatture
            LEFT JOIN clienti ON cliente_id = clienti.id
            ");
    }
}