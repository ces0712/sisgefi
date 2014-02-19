<?php
/* @var $this CecoController */
/* @var $data Ceco */
?>

<div class="view">

        <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('co_ceco')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->co_ceco), array('view', 'id'=>$data->co_ceco)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ceco')); ?>:</b>
	<?php echo CHtml::encode($data->id_ceco); ?>
	<br />
        */ ?>
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('nb_ceco')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nb_ceco), array('view', 'id'=>$data->co_ceco)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gcia_1nvl')); ?>:</b>
	<?php echo CHtml::encode($data->gcia_1nvl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gcia_2nvl')); ?>:</b>
	<?php echo CHtml::encode($data->gcia_2nvl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edo')); ?>:</b>
	<?php echo CHtml::encode($data->edo); ?>
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