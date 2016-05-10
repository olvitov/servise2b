<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $this->Html->charset(); ?>

    <title>ТД</title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');

    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mini and minimalist.">
    <meta name="author" content="Thomas Park">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php echo $this->HTML->css(array('bootstrap', 'bootstrap.min', 'bootswatch', 
'bootstrap-theme', 'bootstrap-theme.min', 'style.css','bootstrap3_2','jquery-ui-1.10.4.custom', 'telezon')) ?>
    <?php echo $this->Html->script(array('application', 'bootstrap.min',
        'bootswatch', 'bsa', 'jquery-1.12.0.min','jquery-ui-1.10.4.custom','myscripts'), array('block' => 'scriptBottom')); ?>




</head>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">



<!-- Navbar
  ================================================== -->
<?php  echo $this->element('navigation')?>


<div class="container">


    <!-- Masthead
    ================================================== -->
    <header class="jumbotron subhead" id="overview">
        <div class="row">
            <div class="span6">


            </div>
            <div class="span6">
                <div class="bsa well">
                    <div id="bsap_1277971" class="bsarocks bsap_c466df00a3cd5ee8568b5c4983b6bb19"><img src="/app/webroot/img/communication.jpg"></div>
                </div>
            </div>
        </div>

    <?php echo $this->Flash->render(); ?>
        <?php echo  $this->Session->flash('good'); ?>
        <?php echo $this->Session->flash('auth'); ?>
    <?php  echo $this->fetch('content'); ?>
   

   
    <!-- Typography
    ================================================== -->


    <br><br><br><br>

    <!-- Footer
     ================================================== -->
    <hr>

    <footer id="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <div class="links">


        </div>
       <?php echo '&copy'. date('Y') ?>
    </footer>

</div><!-- /container -->



<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<?php echo $this->fetch('scriptBottom'); ?>


</body>
</html>
