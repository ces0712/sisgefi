<?php
/* @var $this PptoMmPlfdoController */
/* @var $model PptoMmPlfdo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ppto_mm_plfdo'); ?>
		<?php echo $form->textField($model,'id_ppto_mm_plfdo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_ppto_mm_plfdo'); ?>
		<?php echo $form->textField($model,'co_ppto_mm_plfdo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_ppto'); ?>
		<?php echo $form->textField($model,'co_ppto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_1'); ?>
		<?php echo $form->textField($model,'mnto_1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_2'); ?>
		<?php echo $form->textField($model,'mnto_2',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_3'); ?>
		<?php echo $form->textField($model,'mnto_3',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_4'); ?>
		<?php echo $form->textField($model,'mnto_4',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_5'); ?>
		<?php echo $form->textField($model,'mnto_5',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_6'); ?>
		<?php echo $form->textField($model,'mnto_6',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_7'); ?>
		<?php echo $form->textField($model,'mnto_7',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_8'); ?>
		<?php echo $form->textField($model,'mnto_8',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_9'); ?>
		<?php echo $form->textField($model,'mnto_9',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_10'); ?>
		<?php echo $form->textField($model,'mnto_10',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_11'); ?>
		<?php echo $form->textField($model,'mnto_11',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_12'); ?>
		<?php echo $form->textField($model,'mnto_12',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_ttl'); ?>
		<?php echo $form->textField($model,'mnto_ttl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vrsn'); ?>
		<?php echo $form->textField($model,'vrsn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_modf'); ?>
		<?php echo $form->textField($model,'fe_modf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usr_crea'); ?>
		<?php echo $form->textField($model,'usr_crea',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usr_modf'); ?>
		<?php echo $form->textField($model,'usr_modf',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_desc'); ?>
		<?php echo $form->textField($model,'tx_desc',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->