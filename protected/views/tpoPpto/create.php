<?php
/* @var $this TpoPptoController */
/* @var $model TpoPpto */

$this->breadcrumbs=array(
	'Tipo Presupuesto'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo Presupuesto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>