<?php
/* @var $this CtrtoController */
/* @var $model Ctrto */

$this->breadcrumbs=array(
	'Contrato'=>array('index'),
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
	$('#ctrto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Contratos</h1>

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
	'id'=>'ctrto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_ctrto',
		//'co_ctrto',
                'rzon_scial',
		'nro_ctrto',
		'nb_socd',
		'por_incrto',
                array('header'=>'Monto',
                        'value'=>'$data->mnto',
                        'htmlOptions'=>array('style' => 'text-align: right;')),
		array('header'=>'Monto_a_pagar',
                        'value'=>'$data->mnto_pago',
                        'htmlOptions'=>array('style' => 'text-align: right;')),
		array('header'=>'Presupuestos',
                        'value'=>'count($data->asigCttoPptos)',
                        'htmlOptions'=>array('style' => 'text-align: center;')),
		/*
                'fcia_aumto',
		
		'fe_inicio',
		'fe_fin',
		'in_stat_ctrto',
		'frma_pago',
		'mneda_pago',
		
		'fgra_jrdca',
		'rzon_scial',
		'observaciones',
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
