<?php
/* @var $this PptoMmPlfdoController */
/* @var $model PptoMmPlfdo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ppto-mm-plfdo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

    //Formato moneda en campos numericos
    $this->widget('application.extensions.moneymask.MMask',array(
                         'element'=>'#PptoMmPlfdo_mnto_1, #PptoMmPlfdo_mnto_2, #PptoMmPlfdo_mnto_3, '
                                    . '#PptoMmPlfdo_mnto_4, #PptoMmPlfdo_mnto_5, #PptoMmPlfdo_mnto_6'
                                    . ' , #PptoMmPlfdo_mnto_7, #PptoMmPlfdo_mnto_8, #PptoMmPlfdo_mnto_9, '
                                    . '#PptoMmPlfdo_mnto_10, #PptoMmPlfdo_mnto_11, #PptoMmPlfdo_mnto_12',
                         'currency'=>'PHP',
                         'config'=>array(
                             'symbolStay'=>true,
                             'thousands'=>',',
                             'decimal'=>'.',
                             'precision'=>2,
                         )
                     ));


    if(isset($_GET['co_ppto'])) $model->co_ppto = $_GET['co_ppto'];
           
?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'co_ppto_mm_plfdo'); ?>
		<?php echo $form->textField($model,'co_ppto_mm_plfdo'); ?>
		<?php echo $form->error($model,'co_ppto_mm_plfdo'); ?>
	</div>
        */ ?>
	<div class="row">
		<?php echo $form->labelEx($model,'co_ppto'); ?>
		<?php echo $form->textField($model,'co_ppto',array('readOnly'=>'readOnly')); ?>
		<?php echo $form->error($model,'co_ppto'); ?>
	</div>
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'mnto_1'); ?>
		<?php echo $form->textField($model,'mnto_1',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_2'); ?>
		<?php echo $form->textField($model,'mnto_2',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_3'); ?>
		<?php echo $form->textField($model,'mnto_3',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_4'); ?>
		<?php echo $form->textField($model,'mnto_4',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_5'); ?>
		<?php echo $form->textField($model,'mnto_5',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_6'); ?>
		<?php echo $form->textField($model,'mnto_6',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_7'); ?>
		<?php echo $form->textField($model,'mnto_7',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_8'); ?>
		<?php echo $form->textField($model,'mnto_8',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_9'); ?>
		<?php echo $form->textField($model,'mnto_9',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_10'); ?>
		<?php echo $form->textField($model,'mnto_10',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_11'); ?>
		<?php echo $form->textField($model,'mnto_11',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_12'); ?>
		<?php echo $form->textField($model,'mnto_12',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_12'); ?>
	</div>
        
        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'mnto_ttl'); ?>
		<?php echo $form->textField($model,'mnto_ttl',array('size'=>12,'readOnly'=>'readOnly')); ?>
		<?php echo $form->error($model,'mnto_ttl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vrsn'); ?>
		<?php echo $form->textField($model,'vrsn'); ?>
		<?php echo $form->error($model,'vrsn'); ?>
	</div>

        
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