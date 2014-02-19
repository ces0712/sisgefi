<?php
/* @var $this CtrtoController */
/* @var $model Ctrto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ctrto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

        //Arreglo para campo in_stat_ctrto (ESTATUS CONTRATO)
       $arr_in_stat_ctrto = array(
                    array('in_stat_ctrto'=>'En Tramite', 'descripcion'=>'En Tramite'), 
                    array('in_stat_ctrto'=>'Por Firmar', 'descripcion'=>'Por Firmar'), 
                    array('in_stat_ctrto'=>'Vigente', 'descripcion'=>'Vigente'), 
                    
                );
       
       //Arreglo para campo frma_pago y fcia_aumto (FORMA DE PAGO y FRECUENCIA DE AUMENTO)
       $arr_frma_pago = array(
                    array('frma_pago'=>'Mensual', 'descripcion'=>'Mensual'), 
                    array('frma_pago'=>'Bimensual', 'descripcion'=>'Bimensual'), 
                    array('frma_pago'=>'Trimestral', 'descripcion'=>'Trimestral'), 
                    array('frma_pago'=>'Semestral', 'descripcion'=>'Semestral'), 
                    array('frma_pago'=>'Anual', 'descripcion'=>'Anual'), 
                    array('frma_pago'=>'Plurianual', 'descripcion'=>'Plurianual'),
                
                );
       
       //Arreglo para campo fgra_jrdca (FIGURA JURIDICA)
       $arr_fgra_jrdca = array(
                    array('fgra_jrdca'=>'Cooperativa', 'descripcion'=>'Cooperativa'), 
                    array('fgra_jrdca'=>'Empresa', 'descripcion'=>'Empresa'),
                
                );
       
       //Arreglo para campo mneda_pago (MONEDA DE PAGO)
       $arr_monedas = array(
                    array('moneda'=>'Bolívares', 'descripcion'=>'Bolívares'), 
                    array('moneda'=>'Yuanes', 'descripcion'=>'Yuanes'),
                    array('moneda'=>'Dolares', 'descripcion'=>'Dolares'),
                
                );

       //Formato moneda en campos numericos
       $this->widget('application.extensions.moneymask.MMask',array(
                            'element'=>'#Ctrto_mnto_pago, #Ctrto_mnto',
                            'currency'=>'PHP',
                            'config'=>array(
                                'symbolStay'=>true,
                                'thousands'=>',',
                                'decimal'=>'.',
                                'precision'=>2,
                            )
                        ));

?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'co_ctrto'); ?>
		<?php echo $form->textField($model,'co_ctrto'); ?>
		<?php echo $form->error($model,'co_ctrto'); ?>
	</div>
        */ ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'nro_ctrto'); ?>
		<?php echo $form->textField($model,'nro_ctrto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nro_ctrto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nb_socd'); ?>
		<?php //echo $form->textField($model,'nb_socd',array('size'=>10,'maxlength'=>10)); ?>
                <?php echo $form->dropDownList($model,'nb_socd', 
                        CHtml::listData(Sociedad::model()->findAll(), 'nb_socd', 'nb_socd'), array('prompt' => 'Seleccione...') ); ?>
		<?php echo $form->error($model,'nb_socd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'por_incrto'); ?>
		<?php echo $form->textField($model,'por_incrto'); ?>
		<?php echo $form->error($model,'por_incrto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fcia_aumto'); ?>
		<?php //echo $form->textField($model,'fcia_aumto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->dropDownList($model,'fcia_aumto', 
                        CHtml::listData($arr_frma_pago, 'frma_pago', 'descripcion'), array('prompt' => 'Seleccione...') ); ?>
                <?php echo $form->error($model,'fcia_aumto'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'mnto'); ?>
		<?php echo $form->textField($model,'mnto',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto'); ?>
	</div>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'fe_inicio'); ?>
		<?php echo $form->textField($model,'fe_inicio'); ?>
		<?php echo $form->error($model,'fe_inicio'); ?>
	</div>
        */ ?>
        
        <div class="row">
            <?php echo $form->labelEx($model,'fe_inicio'); ?>
            <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'fe_inicio',
                'value'=>$model->fe_inicio,
                'language' => 'es',
                'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array('autoSize'=>true,
                                'defaultDate'=>$model->fe_inicio,
                                'dateFormat'=>'yy-mm-dd',
                                'buttonImage'=>'http://localhost/sisgefi/images/caledario.jpg',
                                'buttonImageOnly'=>true,
                                'buttonText'=>'Fecha',
                                'selectOtherMonths'=>true,
                                'showAnim'=>'slide',
                                'showButtonPanel'=>true,
                                'showOn'=>'button',
                                'showOtherMonths'=>true,
                                'changeMonth' => 'true',
                                'changeYear' => 'true',
                                //'minDate'=>'date("Y-m-d")', //fecha minima
                                'maxDate'=> "+20Y",
                                //fecha maxima
                                ),
                ));
            ?>
            <?php echo $form->error($model,'fe_inicio'); ?>
        </div>

        <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'fe_fin'); ?>
		<?php echo $form->textField($model,'fe_fin'); ?>
		<?php echo $form->error($model,'fe_fin'); ?>
	</div>
        */ ?>
        
        <div class="row">
            <?php echo $form->labelEx($model,'fe_fin'); ?>
            <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'fe_fin',
                'value'=>$model->fe_fin,
                'language' => 'es',
                'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array('autoSize'=>true,
                                'defaultDate'=>$model->fe_fin,
                                'dateFormat'=>'yy-mm-dd',
                                'buttonImage'=>'http://localhost/sisgefi/images/caledario.jpg',
                                'buttonImageOnly'=>true,
                                'buttonText'=>'Fecha',
                                'selectOtherMonths'=>true,
                                'showAnim'=>'slide',
                                'showButtonPanel'=>true,
                                'showOn'=>'button',
                                'showOtherMonths'=>true,
                                'changeMonth' => 'true',
                                'changeYear' => 'true',
                                //'minDate'=>'date("Y-m-d")', //fecha minima
                                'maxDate'=> "+20Y",
                                //fecha maxima
                                ),
                ));
            ?>
            <?php echo $form->error($model,'fe_inicio'); ?>
        </div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'in_stat_ctrto'); ?>
		<?php //echo $form->textField($model,'in_stat_ctrto',array('size'=>30,'maxlength'=>30)); ?>
                <?php echo $form->dropDownList($model,'in_stat_ctrto', 
                        CHtml::listData($arr_in_stat_ctrto, 'in_stat_ctrto', 'descripcion'), array('prompt' => 'Seleccione...') ); ?>
                <?php echo $form->error($model,'in_stat_ctrto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frma_pago'); ?>
		<?php //echo $form->textField($model,'frma_pago',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'frma_pago', 
                        CHtml::listData($arr_frma_pago, 'frma_pago', 'descripcion'), array('prompt' => 'Seleccione...') ); ?>
                <?php echo $form->error($model,'frma_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mneda_pago'); ?>
		<?php //echo $form->textField($model,'mneda_pago',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->dropDownList($model,'mneda_pago', 
                        CHtml::listData($arr_monedas, 'moneda', 'descripcion'), array('prompt' => 'Seleccione...')  ); ?>
                <?php echo $form->error($model,'mneda_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mnto_pago'); ?>
		<?php echo $form->textField($model,'mnto_pago',array('size'=>12)); ?>
		<?php echo $form->error($model,'mnto_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fgra_jrdca'); ?>
		<?php //echo $form->textField($model,'fgra_jrdca',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->dropDownList($model,'fgra_jrdca', 
                        CHtml::listData($arr_fgra_jrdca, 'fgra_jrdca', 'descripcion'), array('prompt' => 'Seleccione...') ); ?>
                <?php echo $form->error($model,'fgra_jrdca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rzon_scial'); ?>
		<?php echo $form->textField($model,'rzon_scial',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'rzon_scial'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'co_pvdr'); ?>
		<?php echo $form->textField($model,'co_pvdr',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'co_pvdr'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php //echo $form->textField($model,'observaciones',array('size'=>30,'maxlength'=>30)); ?>
                <?php echo $form->textArea($model,'observaciones',array('cols'=>45, 'rows'=>10, 'size'=>300,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
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
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'tx_desc'); ?>
		<?php echo $form->textField($model,'tx_desc',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tx_desc'); ?>
	</div>
        */ ?>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->