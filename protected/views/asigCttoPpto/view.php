<?php
/* @var $this AsigCttoPptoController */
/* @var $model AsigCttoPpto */

$this->breadcrumbs=array(
	'Asig Ctto Pptos'=>array('index'),
	$model->co_asig_ctto_ppto,
);

$this->menu=array(
	array('label'=>'List AsigCttoPpto', 'url'=>array('index')),
	array('label'=>'Create AsigCttoPpto', 'url'=>array('create')),
	array('label'=>'Update AsigCttoPpto', 'url'=>array('update', 'id'=>$model->co_asig_ctto_ppto)),
	array('label'=>'Delete AsigCttoPpto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_asig_ctto_ppto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AsigCttoPpto', 'url'=>array('admin')),
);
?>

<h1>View AsigCttoPpto #<?php echo $model->co_asig_ctto_ppto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_asig_ctto_ppto',
		'co_asig_ctto_ppto',
		'co_ctrto',
		'co_ppto',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); ?>
