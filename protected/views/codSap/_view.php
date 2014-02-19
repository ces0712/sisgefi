<?php
/* @var $this CodSapController */
/* @var $data CodSap */
?>

<div class="view">

        <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('co_cod_sap')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_cod_sap), array('view', 'id'=>$data->co_cod_sap)); ?>
	<br />
            
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cod_sap')); ?>:</b>
	<?php echo CHtml::encode($data->id_cod_sap); ?>
	<br />
        */ ?>
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_cod_sap')); ?>:</b>
	<?php //echo CHtml::encode($data->nb_cod_sap); ?>
        <?php echo CHtml::link(CHtml::encode($data->nb_cod_sap), array('view', 'id'=>$data->co_cod_sap)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_cod_sap')); ?>:</b>
	<?php echo CHtml::encode($data->ds_cod_sap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_crea')); ?>:</b>
	<?php echo CHtml::encode($data->fe_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_modf')); ?>:</b>
	<?php echo CHtml::encode($data->fe_modf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_crea')); ?>:</b>
	<?php echo CHtml::encode($data->usr_crea); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_modf')); ?>:</b>
	<?php echo CHtml::encode($data->usr_modf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_stat')); ?>:</b>
	<?php echo CHtml::encode($data->in_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_desc')); ?>:</b>
	<?php echo CHtml::encode($data->tx_desc); ?>
	<br />

	*/ ?>

</div>