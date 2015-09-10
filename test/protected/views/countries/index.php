<?php 
	$this->breadcrumbs=array(
		'Countries',
	);
?>

<h1>Countries</h1>

<?php 
	$this->widget('zii.widgets.CMenu', array(
		'items'=>array(
			array('label'=>'Crear', 'url'=>array('create')),
			/*array('label'=>'Eliminar', 'url'=>array('delete')),*/
		),
		'htmlOptions'=>array('class'=>'nav nav-pills'),
	));
?>

<?php /*echo CHtml::link('Crear', array("create")); */?>

<?php foreach ($countries as $data):?>
	<h4>
		<?php echo $data->name;?>
		<a href="<?php echo $this->createUrl("statusToggle",array("id"=>$data->id));?>">
			<small>
				<span class="label label-<?php echo $data->status==1 ? "success":"warning";?>"> 
					<?php echo $data->status==1 ? "Enable":"Disable";?>
				</span>
			</small>
		</a>
	</h4>
	<span class="label label-info"><?php echo $data->id;?></span>
	<?php echo CHtml::link("Actualizar", array("update","id"=>$data->id)); ?> | 
	<?php echo CHtml::link("Eliminar", array("delete","id"=>$data->id)); ?> | 
	<?php echo CHtml::link("Ver", array("view","id"=>$data->id)); ?>
	<br><br>

<?php endforeach;?>