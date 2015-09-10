<?php 
	$this->breadcrumbs=array(
		'Countries'=>array('index'),
		" ".$model->id => array('view','id'=>$model->id),
		'View',
	);
?>


<h1>View Country</h1>
<br>

<div class="row">
	<div class="col-md-4">
		<table class="table table-hover">
			<tr>
				<td><strong>ID</strong></td>
				<td><?php echo $model->id;?></td>
			</tr>
			<tr>
				<td><strong>Name</strong></td>
				<td><?php echo $model->name;?></td>
			</tr>
			<tr>
				<td><strong>Status</strong></td>
				<td><span class="label label-<?php echo $model->status==1 ? "success":"warning";?>"><?php echo $model->status?"Enable":"Disable";?></span></td>
			</tr>
		</table>
	</div>
</div>