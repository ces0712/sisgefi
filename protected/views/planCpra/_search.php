<?php
/* @var $this PlanCpraController */
/* @var $model PlanCpra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_plan_cpra'); ?>
		<?php echo $form->textField($model,'id_plan_cpra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_plan_cpra'); ?>
		<?php echo $form->textField($model,'co_plan_cpra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_ppto'); ?>
		<?php echo $form->textField($model,'co_ppto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actv_plan_cpra'); ?>
		<?php echo $form->textField($model,'actv_plan_cpra',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_und_mdda'); ?>
		<?php echo $form->textField($model,'nb_und_mdda',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_fmla'); ?>
		<?php echo $form->textField($model,'nb_fmla',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_co_sap'); ?>
		<?php echo $form->textField($model,'nb_co_sap',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_1'); ?>
		<?php echo $form->textField($model,'cntd_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_2'); ?>
		<?php echo $form->textField($model,'cntd_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_3'); ?>
		<?php echo $form->textField($model,'cntd_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_4'); ?>
		<?php echo $form->textField($model,'cntd_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_5'); ?>
		<?php echo $form->textField($model,'cntd_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_6'); ?>
		<?php echo $form->textField($model,'cntd_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_7'); ?>
		<?php echo $form->textField($model,'cntd_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_8'); ?>
		<?php echo $form->textField($model,'cntd_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_9'); ?>
		<?php echo $form->textField($model,'cntd_9'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_10'); ?>
		<?php echo $form->textField($model,'cntd_10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_11'); ?>
		<?php echo $form->textField($model,'cntd_11'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_12'); ?>
		<?php echo $form->textField($model,'cntd_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cntd_ttl'); ?>
		<?php echo $form->textField($model,'cntd_ttl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vrsn'); ?>
		<?php echo $form->textField($model,'vrsn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nb_resp'); ?>
		<?php echo $form->textField($model,'nb_resp',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tlf_resp'); ?>
		<?php echo $form->textField($model,'tlf_resp',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_resp'); ?>
		<?php echo $form->textField($model,'email_resp',array('size'=>30,'maxlength'=>30)); ?>
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