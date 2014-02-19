<?php
/* @var $this CodSapController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Codigos Sap',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Codigos Sap</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
