<?php
/* @var $this PptoMmFmldoController */
/* @var $model PptoMmFmldo */

$this->breadcrumbs=array(
	'Ppto Mm Fmldos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PptoMmFmldo', 'url'=>array('index')),
	array('label'=>'Create PptoMmFmldo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ppto-mm-fmldo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ppto Mm Fmldos</h1>

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
	'id'=>'ppto-mm-fmldo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_ppto_mm_fmldo',
		'co_ppto_mm_fmldo',
		'co_ppto_mm_plfdo',
		'mnto_1',
		'mnto_2',
		'mnto_3',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
