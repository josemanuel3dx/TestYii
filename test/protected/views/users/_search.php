<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="row">
	<div class="col-md-3">
		

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

		<div class="form-group">
			<?php echo $form->label($model,'id'); ?>
			<?php echo $form->textField($model,'id',array('class'=>'form-control')); ?>
		</div>

		<div class="form-group">
			<?php echo $form->label($model,'username'); ?>
			<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
		</div>

		<div class="form-group">
			<?php echo $form->label($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
		</div>

		<div class="buttons">
			<?php echo CHtml::submitButton('Search',array('class'=>"btn btn-primary btn-lg")); ?>
		</div>

	<?php $this->endWidget(); ?>

	</div>

</div><!-- search-form -->