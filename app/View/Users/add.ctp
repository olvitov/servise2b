<h3>Регистрация</h3>
<?php echo $this->element('menu') ?>


<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');



if ((in_array('user', $logged_user)) && (!isset($logged_user))) {

    echo $this->Form->end('Зарегистрироваться');
} else {
        echo $this->Form->input('role', array(
            'options' => array('user' => 'Пользователь', 'admin' => 'Администратор')

        ));
    echo $this->Form->end('Зарегистрироваться');
    }

// echo $this->Form->end('Зарегистрироваться');
?>

<p></p><a class="btn" href="/articles">В таблицу</a></p>
