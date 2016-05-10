<h3>ТД и параметры</h3>
<?php echo $this->element('menu') ?>
<p class="bold_link"><?php echo $this->Html->link(
    'Добавить запись',
    array('controller' => 'articles', 'action' => 'add' )
); ?></p>

<?php

if(is_array($articles)) : ?>
<table class="table table-bordered table-striped table-hover table-condensed">
    <tr>
        <th>id</th>
        <th>edit</th>
        <th>apmac</th>
        <th>apname</th>
        <th>ssid</th>
        <th></span>url</th>
        <th></span> sessions_count</th>
        <th></span>authtime</th>
        <th>text_sms</th>
        <th>banners_url</th>
        <th>banners_delay</th>
        <th>сlient_name</th>
    </tr>
    <?php foreach($articles as $article) : ?>

            <tr>
                <td><?=$this->Html->link( h($article['Article']['id']), array(
                        'controller' => 'articles',
                        'action' => 'view','full_base' =>true,
                        $article['Article']['id']
                    ));?></td>

                <td>
                    <?php
                    echo $this->Html->link(
                    'Изменить',
                    array('action' => 'edit', $article['Article']['id'])
                );
            ?> <?php
                echo $this->Form->postLink(
                    'Удалить',
                    array('action' => 'delete', $article['Article']['id']),
                    array('confirm' => 'Удалить?')
                );
            ?>
        </td>
                 <td><?=  h($article['Article']['apmac']) ?></td>
                 <td><?= h($article['Article']['apname']) ?></td>
                <td><?= h($article['Article']['ssid']) ?></td>
                <td><?=  h($article['Article']['url']) ?></td>
                <td><?= h($article['Article']['sessions_count']) ?></td>
                <td><?= h($article['Article']['authtime']) ?></td>
                <td><?=  h($article['Article']['text_sms']) ?></td>
                <td><?= h($article['Article']['banners_url']) ?></td>
                <td><?= h($article['Article']['banners_delay']) ?></td>
                <td><?= h($article['Article']['client_name']) ?></td>
    </tr>

        <?php  endforeach; ?>

</table>

<?php else : ?>
<?php echo $articles; ?>
<?php endif; ?>




<div class="pagination pagination-large">
    <ul>
        <?php
        echo $this->Paginator->prev(__('prev'), array('tag' => 'li'),
            null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
        echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a',
            'currentClass' => 'active','tag' => 'li','first' => 1,'modulus' =>2));
        echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'),
            null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
        ?>
    </ul>
</div>
<!--Pagination -->

<div class="row">
    <div class="span10 offset1">
       <h5> Поиск</h5>
        <form class="well form-search"    action="/articles/search/">
            <input type="text" name="art"  class="input-medium search-query">
            <button type="submit" class="btn">Поиск</button>
        </form>






















