<?php
/* @var $this PptoController */
/* @var $model Ppto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ppto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

        //Arreglo para campo mneda_ppto mneda_pago (MONEDA PRESUPUESTADA, MONEDA DE PAGO)
        $arr_monedas = array(
                    array('moneda'=>'Bolívares', 'descripcion'=>'Bolívares'), 
                    array('moneda'=>'Yuanes', 'descripcion'=>'Yuanes'),
                    array('moneda'=>'Dolares', 'descripcion'=>'Dolares'),
                
                );

       //Arreglo para campo priodd (PRIORIDAD)
       $arr_prioridades = array(
                    array('prioridad'=>'Baja', 'descripcion'=>'Baja'), 
                    array('prioridad'=>'Media', 'descripcion'=>'Media'),
                    array('prioridad'=>'Alta', 'descripcion'=>'Alta'),
                
                );
?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'co_ppto'); ?>
		<?php echo $form->textField($model,'co_ppto'); ?>
		<?php echo $form->error($model,'co_ppto'); ?>
	</div>
        */ ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'nb_ceco'); ?>
		<?php //echo $form->textField($model,'nb_ceco',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'nb_ceco', 
                        CHtml::listData(Ceco::model()->findAll(), 'nb_ceco', 'nb_ceco'), array('prompt' => 'Seleccione...') ); ?>
		<?php echo $form->error($model,'nb_ceco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_tpo_ppto'); ?>
		<?php //echo $form->textField($model,'nb_tpo_ppto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'nb_tpo_ppto', 
                        CHtml::listData(TpoPpto::model()->findAll(), 'nb_tpo_ppto', 'nb_tpo_ppto'), array('prompt' => 'Seleccione...') ); ?>
		 <?php echo $form->error($model,'nb_tpo_ppto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_cls_remo'); ?>
		<?php //echo $form->textField($model,'nb_cls_remo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'nb_cls_remo',  
                        CHtml::listData(ClsRemo::model()->findAll(), 'nb_cls_remo', 'nb_cls_remo'), array('prompt' => 'Seleccione...') ); ?>
		<?php echo $form->error($model,'nb_cls_remo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_cls_csto'); ?>
		<?php //echo $form->textField($model,'nb_cls_csto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'nb_cls_csto',  
                        CHtml::listData(ClsCsto::model()->findAll(), 'nb_cls_csto', 'dataLista'), array('prompt' => 'Seleccione...') ); ?>
		<?php echo $form->error($model,'nb_cls_csto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_actvd'); ?>
		<?php //echo $form->textField($model,'nb_actvd',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'nb_actvd',  
                        CHtml::listData(Actvd::model()->findAll(), 'nb_actvd', 'dataLista'), array('prompt' => 'Seleccione...') ); ?>
		<?php echo $form->error($model,'nb_actvd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mpp_onpe'); ?>
		<?php //echo $form->textField($model,'mpp_onpe',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->dropDownList($model,'mpp_onpe',  
                        CHtml::listData(Onapre::model()->findAll(), 'mpp_onpe', 'mpp_onpe'), array('prompt' => 'Seleccione...') ); ?>
		<?php echo $form->error($model,'mpp_onpe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frma_pago'); ?>
		<?php echo $form->textField($model,'frma_pago',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'frma_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mneda_ppto'); ?>
		<?php //echo $form->textField($model,'mneda_ppto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'mneda_ppto', 
                        CHtml::listData($arr_monedas, 'moneda', 'descripcion'), array('prompt' => 'Seleccione...') ); ?>
                <?php echo $form->error($model,'mneda_ppto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mneda_pago'); ?>
		<?php //echo $form->textField($model,'mneda_pago',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'mneda_pago', 
                        CHtml::listData($arr_monedas, 'moneda', 'descripcion'), array('prompt' => 'Seleccione...') ); ?>
                <?php echo $form->error($model,'mneda_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dscpcion'); ?>
		<?php //echo $form->textField($model,'dscpcion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->textArea($model,'dscpcion',array('cols'=>45, 'rows'=>10, 'size'=>250,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'dscpcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priodd'); ?>
		<?php //echo $form->textField($model,'priodd',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->dropDownList($model,'priodd', 
                        CHtml::listData($arr_prioridades, 'prioridad', 'descripcion'), array('prompt' => 'Seleccione...') ); ?>
                <?php echo $form->error($model,'priodd'); ?>
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