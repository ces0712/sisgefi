<?php
/* @var $this PptoController */
/* @var $model Ppto */

$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ppto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Presupuestos</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ppto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_ppto',
		'co_ppto',
		'nb_ceco',
		'nb_tpo_ppto',
		'nb_cls_remo',
		'nb_cls_csto',
                 array('header'=>'contratos',
                        'value'=>'count($data->asigCttoPptos)',
                        'htmlOptions'=>array('style' => 'text-align: center;')),
		/*
		'nb_actvd',
		'mpp_onpe',
		'frma_pago',
		'mneda_ppto',
		'mneda_pago',
		'dscpcion',
		'priodd',
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
