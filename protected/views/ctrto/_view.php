<?php
/* @var $this CtrtoController */
/* @var $data Ctrto */
?>

<div class="view">

        
	<b><?php echo CHtml::encode($data->getAttributeLabel('co_ctrto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_ctrto), array('view', 'id'=>$data->co_ctrto)); ?>
	<br />
        
        <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ctrto')); ?>:</b>
	<?php echo CHtml::encode($data->id_ctrto); ?>
	<br />
        */ ?>
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_ctrto')); ?>:</b>
	<?php echo CHtml::encode($data->nro_ctrto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_socd')); ?>:</b>
	<?php echo CHtml::encode($data->nb_socd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('por_incrto')); ?>:</b>
	<?php echo CHtml::encode($data->por_incrto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fcia_aumto')); ?>:</b>
	<?php echo CHtml::encode($data->fcia_aumto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mnto')); ?>:</b>
	<?php echo CHtml::encode($data->mnto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fe_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fe_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_stat_ctrto')); ?>:</b>
	<?php echo CHtml::encode($data->in_stat_ctrto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frma_pago')); ?>:</b>
	<?php echo CHtml::encode($data->frma_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mneda_pago')); ?>:</b>
	<?php echo CHtml::encode($data->mneda_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mnto_pago')); ?>:</b>
	<?php echo CHtml::encode($data->mnto_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fgra_jrdca')); ?>:</b>
	<?php echo CHtml::encode($data->fgra_jrdca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rzon_scial')); ?>:</b>
	<?php echo CHtml::encode($data->rzon_scial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
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