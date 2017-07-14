<?php
namespace App\Entity;

use Core\Entity\Entity;

class ClientiEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=clienti&id=' . $this->id;
    }

}