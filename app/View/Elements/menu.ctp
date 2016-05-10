<?php if($logged_user): ?>
<p>Добро пожаловать, <?php echo $logged_user['username'] ?></p>
    <?php echo $this->Html->link('Выход', '/users/logout') ?>

<?php else: ?>
   <p> <?php echo $this->Html->link('Вход', '/users/login') ?></p>
<?php endif; ?>


<ul>

    <?php if(!isset($logged_user)) : ?>
       <p>Выполните вход для редактирования записей</p>

    <?php else: ?>
       <?php echo $this->Html->link('Новый пользователь', '/users/add');?>

    <?php endif; ?>

</ul>

