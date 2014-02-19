<?php
/* @var $this ClsRemoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clase Remo',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Clase Remo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
