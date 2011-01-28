<?php
$this->breadcrumbs=array(
	'Lab  Activities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'View Lab Activity', 'url'=>array('index')),
	array('label'=>'Manage Lab Activity', 'url'=>array('admin')),
);
?>

<h1>Create Lab Activity</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>