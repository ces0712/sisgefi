<?php
/* @var $this TpoPptoController */
/* @var $model TpoPpto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tpo_ppto'); ?>
		<?php echo $form->textField($model,'id_tpo_ppto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_tpo_ppto'); ?>
		<?php echo $form->textField($model,'nb_tpo_ppto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_tpo_ppto'); ?>
		<?php echo $form->textField($model,'nb_tpo_ppto',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ds_tpo_ppto'); ?>
		<?php echo $form->textField($model,'ds_tpo_ppto',array('size'=>60,'maxlength'=>60)); ?>
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