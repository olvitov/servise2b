<li >
<a href="#"><?php echo $link['Link']['title']; ?></a>
</li>

<?php if($link['children']) :?>
<ul>
	<?php echo $this->_catMenuHtml($link['children']); ?>
</ul>
<?php endif; ?>

</li>