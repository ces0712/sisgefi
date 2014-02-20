<?php
/* @var $this PptoMmFmldoController */
/* @var $model PptoMmFmldo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ppto-mm-fmldo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

    //Formato moneda en campos numericos
    $this->widget('application.extensions.moneymask.MMask',array(
                         'element'=>'#PptoMmFmldo_mnto_1, #PptoMmFmldo_mnto_2, #PptoMmFmldo_mnto_3, '
                                    . '#PptoMmFmldo_mnto_4, #PptoMmFmldo_mnto_5, #PptoMmFmldo_mnto_6'
                                    . ' , #PptoMmFmldo_mnto_7, #PptoMmFmldo_mnto_8, #PptoMmFmldo_mnto_9, '
                                    . '#PptoMmFmldo_mnto_10, #PptoMmFmldo_mnto_11, #PptoMmFmldo_mnto_12',
                         'currency'=>'PHP',
                         'config'=>array(
                             'symbolStay'=>true,
                             'thousands'=>',',
                             'decimal'=>'.',
                             'precision'=>2,
                         )
                     ));


    if(isset($_GET['co_ppto_mm_plfdo'])) $model->co_ppto_mm_plfdo = $_GET['co_ppto_mm_plfdo'];


?>
    
    
    <table>
        <tr>
            <td style="background-color: #B7D6E7">
                
                <p class="note">Planificacion Mensual</p>
                <?php 

                    //Filtrando planificacion mensual del presupuesto
                    $arrPlanificacion = PptoMmPlfdo::model()->findBySql('select * from fzs_ppto_mm_plfdo where co_ppto='.$_GET["co_ppto"]);
                
                ?>
                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_1'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_1',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_2'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_2',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_3'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_3',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_4'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_4',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_5'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_5',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_6'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_6',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_7'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_7',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_8'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_8',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_9'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_9',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_10'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_10',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_11'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_11',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_12'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_12',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'mnto_ttl'); ?>
                            <?php echo $form->textField($arrPlanificacion,'mnto_ttl',array('readOnly'=>'readOnly')); ?>
                    </div>

                    <div class="row">
                            <?php echo $form->labelEx($arrPlanificacion,'tx_desc'); ?>
                            <?php echo $form->textField($arrPlanificacion,'tx_desc',array('readOnly'=>'readOnly')); ?>
                    </div>
                
            </td>
            <td>
                
                <p class="note">Campos con <span class="required">*</span> son requeridos.</p>

                <?php echo $form->errorSummary($model); ?>

                <div class="row">
                        <?php echo $form->labelEx($model,'co_ppto_mm_plfdo'); ?>
                        <?php echo $form->textField($model,'co_ppto_mm_plfdo',array('readOnly'=>'readOnly')); ?>
                        <?php echo $form->error($model,'co_ppto_mm_plfdo'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_1'); ?>
                        <?php echo $form->textField($model,'mnto_1',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_1'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_2'); ?>
                        <?php echo $form->textField($model,'mnto_2',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_2'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_3'); ?>
                        <?php echo $form->textField($model,'mnto_3',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_3'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_4'); ?>
                        <?php echo $form->textField($model,'mnto_4',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_4'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_5'); ?>
                        <?php echo $form->textField($model,'mnto_5',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_5'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_6'); ?>
                        <?php echo $form->textField($model,'mnto_6',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_6'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_7'); ?>
                        <?php echo $form->textField($model,'mnto_7',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_7'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_8'); ?>
                        <?php echo $form->textField($model,'mnto_8',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_8'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_9'); ?>
                        <?php echo $form->textField($model,'mnto_9',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_9'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_10'); ?>
                        <?php echo $form->textField($model,'mnto_10',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_10'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_11'); ?>
                        <?php echo $form->textField($model,'mnto_11',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_11'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'mnto_12'); ?>
                        <?php echo $form->textField($model,'mnto_12',array('size'=>10,'maxlength'=>10)); ?>
                        <?php echo $form->error($model,'mnto_12'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'por_vrbl_mcrnoca'); ?>
                        <?php echo $form->textField($model,'por_vrbl_mcrnoca'); ?>
                        <?php echo $form->error($model,'por_vrbl_mcrnoca'); ?>
                </div>

                <div class="row">
                        <?php echo $form->labelEx($model,'tx_desc'); ?>
                        <?php echo $form->textField($model,'tx_desc',array('size'=>60,'maxlength'=>100)); ?>
                        <?php echo $form->error($model,'tx_desc'); ?>
                </div>
        
                <div class="row buttons">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                </div>
                
            </td>
        </tr>
    </table>
    

	

	

<?php $this->endWidget(); ?>

</div><!-- form -->