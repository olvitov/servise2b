<h3>Список пользователей</h3>
<?php echo $this->element('menu') ?>


    <table class="table table-bordered table-striped table-hover table-condensed">
        <tr>
            <th>Id</th>
            <th>Логин</th>
            <th>Редактировать</th>
            <th>Роль</th>

        </tr>
        <?php foreach($users as $user) : ?>

            <tr>
                <td> <?php echo $user['User']['id']?></td>
                <td><?=  h($user['User']['username']);?></td>
                <td><?php
                echo $this->Html->link(
                    'Изменить',
                    array('action' => 'edit', $user['User']['id'])
                );
            ?> <?php
                echo $this->Form->postLink(
                    'Удалить',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Удалить?')
                );
            ?></td>
                <td><?=  $user['User']['role'] ?></td>

            </tr>
        <?php  endforeach; ?>

    </table>

<p>
    <a class="btn" href="/articles">В таблицу</a>
    
</p>































