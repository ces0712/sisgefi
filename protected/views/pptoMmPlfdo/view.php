<?php
/* @var $this PptoMmPlfdoController */
/* @var $model PptoMmPlfdo */

$this->breadcrumbs=array(
	'Ppto Mm Plfdos'=>array('index'),
	$model->co_ppto_mm_plfdo,
);

$this->menu=array(
	array('label'=>'List PptoMmPlfdo', 'url'=>array('index')),
	array('label'=>'Create PptoMmPlfdo', 'url'=>array('create')),
	array('label'=>'Update PptoMmPlfdo', 'url'=>array('update', 'id'=>$model->co_ppto_mm_plfdo)),
	array('label'=>'Delete PptoMmPlfdo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_ppto_mm_plfdo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PptoMmPlfdo', 'url'=>array('admin')),
);
?>

<h1>View PptoMmPlfdo #<?php echo $model->co_ppto_mm_plfdo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ppto_mm_plfdo',
		'co_ppto_mm_plfdo',
		'co_ppto',
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
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); ?>
