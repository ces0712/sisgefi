<?php
/* @var $this PptoController */
/* @var $model Ppto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ppto'); ?>
		<?php echo $form->textField($model,'id_ppto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_ppto'); ?>
		<?php echo $form->textField($model,'co_ppto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_ceco'); ?>
		<?php echo $form->textField($model,'nb_ceco',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_tpo_ppto'); ?>
		<?php echo $form->textField($model,'nb_tpo_ppto',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_cls_remo'); ?>
		<?php echo $form->textField($model,'nb_cls_remo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_cls_csto'); ?>
		<?php echo $form->textField($model,'nb_cls_csto',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_actvd'); ?>
		<?php echo $form->textField($model,'nb_actvd',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mpp_onpe'); ?>
		<?php echo $form->textField($model,'mpp_onpe',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frma_pago'); ?>
		<?php echo $form->textField($model,'frma_pago',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mneda_ppto'); ?>
		<?php echo $form->textField($model,'mneda_ppto',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mneda_pago'); ?>
		<?php echo $form->textField($model,'mneda_pago',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dscpcion'); ?>
		<?php echo $form->textField($model,'dscpcion',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priodd'); ?>
		<?php echo $form->textField($model,'priodd',array('size'=>5,'maxlength'=>5)); ?>
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