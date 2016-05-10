<h3>Добавление записи</h3>


<?php
echo $this->Form->create('Article');
echo $this->Form->input('apmac', array('label' => 'MAC адрес точки доступа'));
echo $this->Form->input('apname', array(
	'rows' => '2', 'label' => 'Название точки доступа'));
echo $this->Form->input('ssid', array('label' => 'Название SSID, используемого на ТД'));
echo $this->Form->input('url', array('rows' => '2', 'label' => 'Адрес сайта для редиректа после авторизации'));
echo $this->Form->input('sessions_count', array('rows' => '1','label' => 'Количество сессий в сутки'), array('error' => false));
echo $this->Form->input('authtime', array('rows' => '1','label' => 'Время одной сессии'));
echo $this->Form->input('text_sms', array('rows' => '4', 'label' => 'Текст смс'));
echo $this->Form->input('banners_url', array('rows' => '1', 'label' => 'Путь к каталогу для подстановки.'));

echo $this->Form->input('banners_delay', array('rows' => '1', 'label' => 'Время ротации баннеров'));
echo $this->Form->input('client_name', array('rows' => '1', 'label' => 'Наименование клиента'));
echo $this->Form->end('Сохранить');


?>

<p></p><a class="btn" href="/articles">В таблицу</a></p>
