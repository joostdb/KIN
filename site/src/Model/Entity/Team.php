<?php
// src/Model/Entity/Team.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Team extends Entity
{
    protected $_accessible = [
        'photo' => true,
        'photo_dir' => true
    ];
}
