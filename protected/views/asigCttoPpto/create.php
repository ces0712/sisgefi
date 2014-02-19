<?php
/* @var $this AsigCttoPptoController */
/* @var $model AsigCttoPpto */

$this->breadcrumbs=array(
	'Asignacion Contrato/Presupuesto'=>array('index'),
	'Crear',
);


$this->menu=array(
        array('label'=>'Ver Presupuesto', 'url'=>array('ppto/view', 'id'=>$_GET['co_ppto'])),
	//array('label'=>'Listar', 'url'=>array('index')),
	//array('label'=>'Gestionar', 'url'=>array('admin')),
);
/**/

?>

<h1>Asignacion Contrato/Presupuesto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>