<?php
/* @var $this SociedadController */
/* @var $data Sociedad */
?>

<div class="view">

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_socd')); ?>:</b>
	<?php echo CHtml::encode($data->id_socd); ?>
	<br />
         
        <b><?php echo CHtml::encode($data->getAttributeLabel('co_socd')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_socd), array('view', 'id'=>$data->co_socd)); ?>
	<br />
        
        */ ?>
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_socd')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nb_socd), array('view', 'id'=>$data->co_socd)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ds_socd')); ?>:</b>
	<?php echo CHtml::encode($data->ds_socd); ?>
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