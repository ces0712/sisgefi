<?php
/* @var $this CtrtoController */
/* @var $model Ctrto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ctrto'); ?>
		<?php echo $form->textField($model,'id_ctrto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_ctrto'); ?>
		<?php echo $form->textField($model,'co_ctrto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_ctrto'); ?>
		<?php echo $form->textField($model,'nro_ctrto',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_socd'); ?>
		<?php echo $form->textField($model,'nb_socd',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'por_incrto'); ?>
		<?php echo $form->textField($model,'por_incrto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fcia_aumto'); ?>
		<?php echo $form->textField($model,'fcia_aumto',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto'); ?>
		<?php echo $form->textField($model,'mnto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_inicio'); ?>
		<?php echo $form->textField($model,'fe_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_fin'); ?>
		<?php echo $form->textField($model,'fe_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_stat_ctrto'); ?>
		<?php echo $form->textField($model,'in_stat_ctrto',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frma_pago'); ?>
		<?php echo $form->textField($model,'frma_pago',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mneda_pago'); ?>
		<?php echo $form->textField($model,'mneda_pago',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mnto_pago'); ?>
		<?php echo $form->textField($model,'mnto_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fgra_jrdca'); ?>
		<?php echo $form->textField($model,'fgra_jrdca',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rzon_scial'); ?>
		<?php echo $form->textField($model,'rzon_scial',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>30,'maxlength'=>30)); ?>
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