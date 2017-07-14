<?php
namespace App\Entity;

use Core\Entity\Entity;

class FattureEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=fatture.show&id=' . $this->id;
    }

}