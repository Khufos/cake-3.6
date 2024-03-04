<h3>Cadastrar Usuarios</h3>

<?php
echo $this->Form->create($user);
echo $this->Form->control('nome', ['label' => 'Nome']);
echo $this->Form->control('email', ['label' => 'E-mail']);
echo $this->Form->year('yr');
echo $this->Form->button(__('Cadastrar'));
echo $this->Form->end();
?>