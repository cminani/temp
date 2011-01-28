<?php
$this->breadcrumbs=array(
	'Lab  Activities',
);

$this->menu=array(
	array('label'=>'Add Lab Activity', 'url'=>array('create')),
	array('label'=>'Manage Lab Activity', 'url'=>array('admin')),
);
?>

<h1>Lab  Activities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
