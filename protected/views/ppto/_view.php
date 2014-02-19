<?php
/* @var $this PptoController */
/* @var $data Ppto */
?>

<div class="view">

        <?php /*
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ppto')); ?>:</b>
	<?php echo CHtml::encode($data->id_ppto); ?>
	<br />
        */ ?>
    
        <b><?php echo CHtml::encode($data->getAttributeLabel('co_ppto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_ppto), array('view', 'id'=>$data->co_ppto)); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_ceco')); ?>:</b>
	<?php echo CHtml::encode($data->nb_ceco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_tpo_ppto')); ?>:</b>
	<?php echo CHtml::encode($data->nb_tpo_ppto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_cls_remo')); ?>:</b>
	<?php echo CHtml::encode($data->nb_cls_remo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_cls_csto')); ?>:</b>
	<?php echo CHtml::encode($data->nb_cls_csto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_actvd')); ?>:</b>
	<?php echo CHtml::encode($data->nb_actvd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mpp_onpe')); ?>:</b>
	<?php echo CHtml::encode($data->mpp_onpe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frma_pago')); ?>:</b>
	<?php echo CHtml::encode($data->frma_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mneda_ppto')); ?>:</b>
	<?php echo CHtml::encode($data->mneda_ppto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mneda_pago')); ?>:</b>
	<?php echo CHtml::encode($data->mneda_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dscpcion')); ?>:</b>
	<?php echo CHtml::encode($data->dscpcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priodd')); ?>:</b>
	<?php echo CHtml::encode($data->priodd); ?>
	<br />
        
        <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_crea')); ?>:</b>
	<?php echo CHtml::encode($data->fe_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_modf')); ?>:</b>
	<?php echo CHtml::encode($data->fe_modf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usr_crea')); ?>:</b>
	<?php echo CHtml::encode($data->usr_crea); ?>
	<br />

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