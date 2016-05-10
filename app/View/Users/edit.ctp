<h3>Редактирование пользователей</h3>
<?php echo $this->element('menu') ?>
<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('role', array(
    'options' => array('user' => 'Пользователь', 'admin' => 'Администратор')
));
echo $this->Form->end('Изменить');
?>

<p></p><a class="btn" href="/articles">В таблицу</a></p>