<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<?php
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'nav nav-pills'),
				));
			?>

			<?php echo $content; ?>

		</div>
	</div>


</div>


<?php $this->endContent(); ?>