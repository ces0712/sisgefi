<?php
/* @var $this FmlaController */
/* @var $data Fmla */
?>

<div class="view">

        <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('co_fmla')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_fmla), array('view', 'id'=>$data->co_fmla)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fmla')); ?>:</b>
	<?php echo CHtml::encode($data->id_fmla); ?>
	<br />
        */ ?>
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_fmla')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nb_fmla), array('view', 'id'=>$data->co_fmla)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_fmla')); ?>:</b>
	<?php echo CHtml::encode($data->ds_fmla); ?>
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
        */ ?>
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_desc')); ?>:</b>
	<?php echo CHtml::encode($data->tx_desc); ?>
	<br />

	

</div>