<h3>Результаты поиска</h3>


<p class="bold_link"><?php echo $this->Html->link(
        'Добавить запись',
        array('controller' => 'articles', 'action' => 'add' )
    ); ?></p>

<?php if(!is_array($search_res)) : ?>
    <h3><?php echo $search_res; ?></h3>
    <?php elseif(!empty($search_res)): ?>
<?php endif; ?>



<?php

if(is_array($search_res)) : ?>
<table class="table table-bordered table-striped table-hover table-condensed">
    <tr>
        <th></span> id</th>
        <th></span> edit</th>
        <th></span> apmac</th>
        <th></span> apname</th>
        <th></span> ssid</th>
        <th></span> url</th>
        <th>sessions_count</th>
        <th> authtime</th>
        <th> text_sms</th>
        <th> banners_url</th>
        <th>banners_delay</th>
        <th> client_name</th>
    </tr>
    <?php foreach($search_res as $article) : ?>

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
        <td><?=  $article['Article']['apmac'] ?></td>
        <td><?= $article['Article']['apname'] ?></td>
        <td><?= $article['Article']['ssid'] ?></td>
        <td><?= $article['Article']['url'] ?></td>
        <td><?= $article['Article']['sessions_count'] ?></td>
        <td><?= $article['Article']['authtime'] ?></td>
        <td><?= $article['Article']['text_sms'] ?></td>
        <td><?= $article['Article']['banners_url'] ?></td>
        <td><?= $article['Article']['banners_delay'] ?></td>
        <td><?= $article['Article']['client_name']?></td>

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




        <!--Pagination -->






















