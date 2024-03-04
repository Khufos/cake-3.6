<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body style="background-color: gray;">
    <h3><?php echo "Usuarios" ?></h3>
    <div class="row">
    <aside class="column">
            <div class="side-nav  ">
               
                <?= $this->Form->create(null,[
                    'url'=>[
                        'action' =>'search'
                        
                    ]]);?>
                <?= $this->Form->control('search'); ?>
                <?= $this->Form->submit('search'); ?>
                <?= $this->Form->end(); ?>
            </div>
         
        </aside>
    </div>
    <table id="tblExpedientePje" class="table table-bordered table-striped" style="margin-bottom: 0px;">
        <thead style="background-color: #4BB246; color: white; height: 20px; max-height: 50px; ">
            <tr>
                <th scope="col" style="vertical-align: middle; text-align: center;">
                    <?php echo $this->Paginator->sort('id', __('DATA CADASTRO')); ?>
                </th>
                <th style="vertical-align: middle; text-align: center;">NOME DO DEFENSOR</th>
                <th style="vertical-align: middle; text-align: center;">COMARCA</th>
                <th style="vertical-align: middle; text-align: center;">UNIDADE</th>
                <th style="vertical-align: middle; text-align: center;">TIPO DE AFASTAMENTO</th>
                <th style="vertical-align: middle; text-align: center;">DATA INICIAL</th>
                <th style="vertical-align: middle; text-align: center;">DATA FINAL</th>
                <th style="vertical-align: middle; text-align: center;">OBS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuarios) : ?>
                <tr>
                    <td>
                        <p><?php echo $usuarios->id ?></p>
                    </td>
                    <td>
                        <p><?php echo $usuarios->nome ?></p>
                    </td>
                    <td>
                        <p><?php echo $usuarios->email ?></p>
                    </td>
                    <td>
                        <p>Nome da Unidade</p>
                    </td>
                    <td>
                        <p>Tipo de Afastamento</p>
                    </td>
                    <td>
                        <p>Data Inicial Formatada</p>
                    </td>
                    <td>
                        <p>Data Final Formatada</p>
                    </td>
                    <td>
                        <button type="button" data-toggle="modal" data-target="#Student_AddModal" class="glyphicon glyphicon-eye-open" onclick='exibirDetalhes("Observação aqui")'></button>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    echo $this->Html->link(('Cadastrar Usuário'),['controller' => 'users','action'=>'add']);
    ?>
    <div class="paginator">
        <ul class="pagination">
            <?php echo $this->Paginator->first('<<' . __('Primeira')); ?>
            <?php echo $this->Paginator->prev('<' . __('Anterir')); ?>
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next(__('Próximo') . ' >'); ?>
            <?php echo $this->Paginator->last('<<' . __('Ultima')); ?>
        </ul>
        <p>
            <?php echo $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}} , mostrado {{current}} registro(s) do total de {{count}} ')]) ?>
        </p>
    </div>

</body>

</html>






<!-- <style>
    table p {
        text-align: center;
        padding: 0;
        margin: 0;
    }

    tr td button {
        width: 80%;
        position: absolute;
        left: -8%;
    }

    tr {

        font-size: 14px;
    }

    table thead {
        height: 10px;
        font-size: 14px;
        padding: 0;
        max-height: 50px;
        flex-wrap: nowrap;
    }

    th {
        padding: 0;
    }

    tr td {
        height: 30px;
    }

    tr td:nth-child(1) {
        width: auto;
        text-align: center;
        /* Centraliza o conteúdo horizontalmente */

        font-size: 12px;
    }

    tr td:nth-child(2) {
        width: auto;
        text-align: center;
        /* Centraliza o conteúdo horizontalmente */

        font-size: 12px;
    }

    tr td:nth-child(3) {
        width: auto;
        text-align: center;
        /* Centraliza o conteúdo horizontalmente */

        font-size: 12px;
    }

    tr td:nth-child(4) {
        width: auto;
        text-align: center;
        /* Centraliza o conteúdo horizontalmente */

        font-size: 12px;
    }

    tr td:nth-child(5) {
        width: auto;
        text-align: center;
        /* Centraliza o conteúdo horizontalmente */

        font-size: 12px;
    }

    tr td:nth-child(6) {
        width: auto;
        text-align: center;
        /* Centraliza o conteúdo horizontalmente */
        font-size: 12px;
    }

    tr td:nth-child(7) {
        width: auto;

        /* Centraliza o conteúdo horizontalmente */
        font-size: 12px;
    }

    tr td:nth-child(8) {
        width: auto;
        align-items: center;
        /* Centraliza o conteúdo horizontalmente */
        vertical-align: middle;
        font-size: 12px;
    }

    .margen_texto {
        padding: 10px;
    }

    .modal {
        max-height: 700px;
        overflow-y: hidden;
    }

   
    .mensagem-nao-encontrado td p {
        color: #878787;  /* Cor de fundo vermelha para indicar que não foram encontrados resultados */
        text-align: center;
        font-weight: bold;
       
    }


</style> -->