<?php
/* @var $this PlanCpraController */
/* @var $model PlanCpra */

$this->breadcrumbs=array(
	'Plan Cpras'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PlanCpra', 'url'=>array('index')),
	array('label'=>'Create PlanCpra', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#plan-cpra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Plan Cpras</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'plan-cpra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_plan_cpra',
		'co_plan_cpra',
		'co_ppto',
		'actv_plan_cpra',
		'nb_und_mdda',
		'nb_fmla',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
