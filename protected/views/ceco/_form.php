<?php
/* @var $this CecoController */
/* @var $model Ceco */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ceco-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'co_ceco'); ?>
		<?php echo $form->textField($model,'co_ceco'); ?>
		<?php echo $form->error($model,'co_ceco'); ?>
	</div>
        */ ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'nb_ceco'); ?>
		<?php echo $form->textField($model,'nb_ceco',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nb_ceco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gcia_1nvl'); ?>
		<?php echo $form->textField($model,'gcia_1nvl',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'gcia_1nvl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gcia_2nvl'); ?>
		<?php echo $form->textField($model,'gcia_2nvl',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'gcia_2nvl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edo'); ?>
		<?php echo $form->textField($model,'edo',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'edo'); ?>
	</div>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
		<?php echo $form->error($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fe_modf'); ?>
		<?php echo $form->textField($model,'fe_modf'); ?>
		<?php echo $form->error($model,'fe_modf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_crea'); ?>
		<?php echo $form->textField($model,'usr_crea',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usr_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usr_modf'); ?>
		<?php echo $form->textField($model,'usr_modf',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usr_modf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'in_stat'); ?>
	</div>
        */ ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'tx_desc'); ?>
		<?php echo $form->textField($model,'tx_desc',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tx_desc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->