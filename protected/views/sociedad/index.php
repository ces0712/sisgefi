<?php
/* @var $this SociedadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sociedad',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Sociedades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
