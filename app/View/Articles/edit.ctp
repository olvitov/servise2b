<h3>Редактирование записи</h3>

<?php
echo $this->Form->create('Article');
echo $this->Form->input('apmac', array('label' => 'apmac'));
echo $this->Form->input('apname', array('rows' => '1', 'label' => 'apname'));
echo $this->Form->input('ssid', array('label' => 'ssid'));
echo $this->Form->input('url', array('rows' => '1', 'label' => 'url'));
echo $this->Form->input('sessions_count', array('rows' => '1','label' => 'sessions_count'));
echo $this->Form->input('authtime', array('rows' => '1', 'label' => 'authtime'));
echo $this->Form->input('text_sms', array('rows' => '3','label' => 'text_sms'));
echo $this->Form->input('banners_url', array('label' => 'banners_url'));
echo $this->Form->input('banners_delay', array('rows' => '1', 'label' => 'banners_delay'));
echo $this->Form->input('client_name', array('rows' => '1', 'label' => 'client_name'));
echo $this->Form->end('Сохранить');
?>

<p></p><a class="btn" href="/articles">В таблицу</a></p>
