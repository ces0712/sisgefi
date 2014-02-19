<?php
/* @var $this PlanCpraController */
/* @var $model PlanCpra */

$this->breadcrumbs=array(
	'Plan Cpras'=>array('index'),
	$model->co_plan_cpra,
);

$this->menu=array(
	array('label'=>'List PlanCpra', 'url'=>array('index')),
	array('label'=>'Create PlanCpra', 'url'=>array('create')),
	array('label'=>'Update PlanCpra', 'url'=>array('update', 'id'=>$model->co_plan_cpra)),
	array('label'=>'Delete PlanCpra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_plan_cpra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PlanCpra', 'url'=>array('admin')),
);
?>

<h1>View PlanCpra #<?php echo $model->co_plan_cpra; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_plan_cpra',
		'co_plan_cpra',
		'co_ppto',
		'actv_plan_cpra',
		'nb_und_mdda',
		'nb_fmla',
		'nb_co_sap',
		'cntd_1',
		'cntd_2',
		'cntd_3',
		'cntd_4',
		'cntd_5',
		'cntd_6',
		'cntd_7',
		'cntd_8',
		'cntd_9',
		'cntd_10',
		'cntd_11',
		'cntd_12',
		'cntd_ttl',
		'vrsn',
		'nb_resp',
		'tlf_resp',
		'email_resp',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); ?>
