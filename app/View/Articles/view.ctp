<h3>Просмотр:</h3>

<?php echo $this->element('menu') ?>
<div class="order">
<h4>apmac:  <?php echo h($article['Article']['apmac']) ?></h4>
<p>apname: <?php echo h($article['Article']['apname']) ?></p>
<p>ssid: <?php echo $article['Article']['ssid'] ?></p>
<p>url: <?php echo $article['Article']['url'] ?></p>
<p>sessions_count: <?php echo $article['Article']['sessions_count'] ?></p>
<p>authtime: <?php echo $article['Article']['authtime'] ?></p>
<p>text_sms: <?php echo $article['Article']['text_sms'] ?></p>
<p>banners_url: <?php echo $article['Article']['banners_url'] ?></p>
<p>banners_delay: <?php echo $article['Article']['banners_delay'] ?></p>
<p>сlient_name: <?php echo $article['Article']['client_name'] ?></p>
</div>
<p></p><a class="btn" href="/articles">В таблицу</a></p>