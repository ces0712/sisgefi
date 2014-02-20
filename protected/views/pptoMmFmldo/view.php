<?php
/* @var $this PptoMmFmldoController */
/* @var $model PptoMmFmldo */

$this->breadcrumbs=array(
	'Ppto Mm Fmldos'=>array('index'),
	$model->co_ppto_mm_fmldo,
);

$this->menu=array(
	array('label'=>'List PptoMmFmldo', 'url'=>array('index')),
	array('label'=>'Create PptoMmFmldo', 'url'=>array('create')),
	array('label'=>'Update PptoMmFmldo', 'url'=>array('update', 'id'=>$model->co_ppto_mm_fmldo)),
	array('label'=>'Delete PptoMmFmldo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_ppto_mm_fmldo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PptoMmFmldo', 'url'=>array('admin')),
);
?>

<h1>View PptoMmFmldo #<?php echo $model->co_ppto_mm_fmldo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ppto_mm_fmldo',
		'co_ppto_mm_fmldo',
		'co_ppto_mm_plfdo',
		'mnto_1',
		'mnto_2',
		'mnto_3',
		'mnto_4',
		'mnto_5',
		'mnto_6',
		'mnto_7',
		'mnto_8',
		'mnto_9',
		'mnto_10',
		'mnto_11',
		'mnto_12',
		'mnto_ttl',
		'vrsn',
		'por_vrbl_mcrnoca',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); ?>
