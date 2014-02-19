<?php
/* @var $this PlanCpraController */
/* @var $model PlanCpra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'plan-cpra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 


        if(isset($_GET['co_ppto'])) $model->co_ppto = $_GET['co_ppto'];

        //Arreglo para campo actv_plan_cpra (Tipo de Actividad)
        $arr_actividades = array(
                    array('actividad'=>'Bien', 'descripcion'=>'Bien'), 
                    array('actividad'=>'Servicio', 'descripcion'=>'Servicio'),
            );
            
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'co_plan_cpra'); ?>
		<?php echo $form->textField($model,'co_plan_cpra'); ?>
		<?php echo $form->error($model,'co_plan_cpra'); ?>
	</div>
        */ ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'co_ppto'); ?>
		<?php echo $form->textField($model,'co_ppto',array('readOnly'=>'readOnly')); ?>
		<?php echo $form->error($model,'co_ppto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actv_plan_cpra'); ?>
		<?php //echo $form->textField($model,'actv_plan_cpra',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->dropDownList($model,'actv_plan_cpra', 
                        CHtml::listData($arr_actividades, 'actividad', 'descripcion'), array('prompt' => 'Seleccione...') ); ?>
                <?php echo $form->error($model,'actv_plan_cpra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_und_mdda'); ?>
		<?php //echo $form->textField($model,'nb_und_mdda',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'nb_und_mdda', 
                        CHtml::listData(UndMdda::model()->findAll(), 'nb_und_mdda', 'dataLista'), array('prompt' => 'Seleccione...') ); ?>
		<?php echo $form->error($model,'nb_und_mdda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_fmla'); ?>
		<?php //echo $form->textField($model,'nb_fmla',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'nb_fmla', 
                        CHtml::listData(Fmla::model()->findAll(), 'nb_fmla', 'dataLista'), array('prompt' => 'Seleccione...') ); ?>
		<?php echo $form->error($model,'nb_fmla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_cod_sap'); ?>
		<?php //echo $form->textField($model,'nb_cod_sap',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'nb_cod_sap', 
                        CHtml::listData(CodSap::model()->findAll(), 'nb_cod_sap', 'dataLista'), array('prompt' => 'Seleccione...') ); ?>
		<?php echo $form->error($model,'nb_cod_sap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_1'); ?>
		<?php echo $form->textField($model,'cntd_1'); ?>
		<?php echo $form->error($model,'cntd_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_2'); ?>
		<?php echo $form->textField($model,'cntd_2'); ?>
		<?php echo $form->error($model,'cntd_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_3'); ?>
		<?php echo $form->textField($model,'cntd_3'); ?>
		<?php echo $form->error($model,'cntd_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_4'); ?>
		<?php echo $form->textField($model,'cntd_4'); ?>
		<?php echo $form->error($model,'cntd_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_5'); ?>
		<?php echo $form->textField($model,'cntd_5'); ?>
		<?php echo $form->error($model,'cntd_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_6'); ?>
		<?php echo $form->textField($model,'cntd_6'); ?>
		<?php echo $form->error($model,'cntd_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_7'); ?>
		<?php echo $form->textField($model,'cntd_7'); ?>
		<?php echo $form->error($model,'cntd_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_8'); ?>
		<?php echo $form->textField($model,'cntd_8'); ?>
		<?php echo $form->error($model,'cntd_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_9'); ?>
		<?php echo $form->textField($model,'cntd_9'); ?>
		<?php echo $form->error($model,'cntd_9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_10'); ?>
		<?php echo $form->textField($model,'cntd_10'); ?>
		<?php echo $form->error($model,'cntd_10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_11'); ?>
		<?php echo $form->textField($model,'cntd_11'); ?>
		<?php echo $form->error($model,'cntd_11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_12'); ?>
		<?php echo $form->textField($model,'cntd_12'); ?>
		<?php echo $form->error($model,'cntd_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cntd_ttl'); ?>
		<?php echo $form->textField($model,'cntd_ttl'); ?>
		<?php echo $form->error($model,'cntd_ttl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_resp'); ?>
		<?php echo $form->textField($model,'nb_resp',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nb_resp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tlf_resp'); ?>
		<?php echo $form->textField($model,'tlf_resp',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tlf_resp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_resp'); ?>
		<?php echo $form->textField($model,'email_resp',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email_resp'); ?>
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