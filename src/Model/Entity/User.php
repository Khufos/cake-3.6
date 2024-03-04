<?php

use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        'id' => true,
        'nome' => true,
        'email' => true,
        'created' => true,  // Corrigido de 'cretead' para 'created'
        'modified' => true, // Corrigido de 'modifield' para 'modified'
    ];
}
