<?php
$this->breadcrumbs=array(
	'Lab  Activities'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'View Lab Activity', 'url'=>array('index')),
	array('label'=>'Add Lab Activity', 'url'=>array('create')),
	array('label'=>'Update Lab Activity', 'url'=>array('update', 'id'=>$model->activity_id)),
	array('label'=>'Delete Lab Activity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->activity_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lab Activity', 'url'=>array('admin')),
);
?>

<h1>View Lab Activity #<?php echo $model->activity_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'activity_id',
		'name',
		'date',
		'start_time',
		'end_time',
		'description',
	),
)); ?>
