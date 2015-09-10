<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo $this->pageTitle?></title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

    <!--CSS Theme and Custom Code-->
		<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/theme.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/custom.css" rel="stylesheet">
	</head>
	<body>

<div class="navbar navbar-static-top alt" data-spy="affix" data-offset-top="1000">
  <div class="container">
    <div class="navbar-header">
      <!--<a href="#" class="navbar-brand">SEMMIO</a>-->
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <?php $this->widget('zii.widgets.CMenu',array(
        'htmlOptions'=> array("class"=>"nav navbar-nav"),
        'items'=>array(
          array('label'=>'Home', 'url'=>array('/site/index')),
          array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
          array('label'=>'Contact', 'url'=>array('/site/contact')),
          array('label'=>'Countries', 'url'=>array('/countries/index')),
          array('label'=>'Users', 'url'=>array('/users/index')),
          array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
          array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
        ),
      )); ?>
    </div>
   </div>
</div>


<?php if(($msgs=Yii::app()->user->getFlashes()) !== null): ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php foreach ($msgs as $type => $value):?>
          <div class="alert alert-<?php echo $type;?>" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong><?php echo $type?>!</strong> <?php echo $value; ?>.
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<?php endif; ?>


<?php if(isset($this->breadcrumbs) && $this->breadcrumbs!==array()):?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
          'links'=>$this->breadcrumbs,
        )); ?>

      </div>
    </div>
  </div>
 <?php endif;?>
  



<?php echo $content;?>



<footer>
  <div class="container">
    <div class="row">
      <hr>
      <div class="col-md-6 col-md-offset-3 text-center">
        <ul class="list-inline">
          <li><i class="icon-facebook icon-2x"></i></li>
          <li><i class="icon-twitter icon-2x"></i></li>
          <li><i class="icon-google-plus icon-2x"></i></li>
          <li><i class="icon-pinterest icon-2x"></i></li>
        </ul>
        <hr>
        <p>Built with <i class="icon-heart-empty"></i> at <a href="http://www.bootply.com">Bootply</a>.<br>Company ©2014</p>
      </div>
    </div>
  </div>
</footer>

<ul class="nav pull-right scroll-down">
  <li><a href="#" title="Scroll down"><i class="icon-chevron-down icon-3x"></i></a></li>
</ul>
<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="icon-chevron-up icon-3x"></i></a></li>
</ul>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/scripts.js"></script>
	</body>
</html>