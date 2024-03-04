<?php

namespace App\Model\Table;


use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->setTable('users');
        $this->addBehavior('Timestamp');
    }



    public function validationDefault(Validator $validator)
    {
        $validator
        ->integer('id')
        ->allowEmpty('id', 'create'); // Modificado para allowEmptyString se for CakePHP 3.6 ou superior
    
        $validator
            ->scalar('nome')
            ->maxLength('nome', 220)
           // ->requirePresence('nome', 'create') // Descomentado
            ->notEmpty('nome');
    
        $validator
            ->scalar('email')
            ->maxLength('email', 200)
            //->requirePresence('email', 'create') // Descomentado
            ->notEmpty('email')
            ->email('email'); // Adicionado
    
        return $validator;
     }
    }





