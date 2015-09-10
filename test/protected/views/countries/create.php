<?php 
	$this->breadcrumbs=array(
		'Countries'=>array('index'),
		'Create',
	);
?>


<h1>Create Countries</h1>


<div class="row">
	<div class="col-md-4">


		<?php $form=$this->beginWidget('CActiveForm', array()); ?>

			<p class="note">Fields with <span class="required">*</span> are required.</p>

			<div class="form-group">	
				<?php echo $form->labelEx($model,'name'); ?>
				<?php echo $form->textField($model,'name',array("class"=>"form-control")); ?>
				<?php echo $form->error($model,'name'); ?>
			 </div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'status'); ?>
				<?php echo $form->textField($model,'status',array("class"=>"form-control")); ?>
				<?php echo $form->error($model,'status'); ?>
			</div>

			<div class="buttons">
				<?php echo CHtml::submitButton('Submit', array("class" => "btn btn-primary btn-lg")); ?>
			</div>

		<?php $this->endWidget(); ?>

	</div><!-- form -->

</div>