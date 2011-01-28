<?php
$this->pageTitle=Yii::app()->name . ' - Lab Management';
$this->breadcrumbs=array(
	'Lab Activity',
);
?>

<h1>Lab Activity Entry Form</h1>

<?php if(Yii::app()->user->hasFlash('labactivity')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('labactivity'); ?>
</div>

<?php else: ?>

<p>
Fill the form below to schedule for activity.
</p>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lab--activity-labactivity-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date'); ?>
		<?php echo $form->textField($model,'Date'); ?>
		<?php echo $form->error($model,'Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Duration'); ?>
		<?php echo $form->textField($model,'Duration'); ?>
		<?php echo $form->error($model,'Duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php endif; ?>