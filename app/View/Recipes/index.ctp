<?php
echo $paginator->prev('<< Previous ', null, null, array('class' => 'disabled'));
echo $paginator->next(' Next >>', null, null, array('class' => 'disabled'));
?>

    <!—выводит X из Y, где X – текущая страница, а Y – их общее количество. -->
<?php echo $paginator->counter() ?>