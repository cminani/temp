<?php
$this->breadcrumbs=array(
	'Lab  Activities'=>array('index'),
	$model->name=>array('view','id'=>$model->activity_id),
	'Update',
);

$this->menu=array(
	array('label'=>'view Lab Activity', 'url'=>array('index')),
	array('label'=>'Add Lab Activity', 'url'=>array('create')),
	array('label'=>'View Lab Activity', 'url'=>array('view', 'id'=>$model->activity_id)),
	array('label'=>'Manage Lab Activity', 'url'=>array('admin')),
);
?>

<h1>Update Lab Activity <?php echo $model->activity_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>