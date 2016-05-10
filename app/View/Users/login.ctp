<h3>Авторизация</h3>

<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');

echo $this->Form->end('Войти');
?>

<p></p><a class="btn" href="/articles">В таблицу</a></p>
