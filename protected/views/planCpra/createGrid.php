<?php
/* @var $this PlanCpraController */
/* @var $model PlanCpra */

$this->breadcrumbs=array(
	'Plan de Compras'=>array('index'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'Ver Presupuesto', 'url'=>array('ppto/view', 'id'=>$_GET['co_ppto'])),
);

 if(isset($_GET['co_ppto'])) $model->co_ppto = $_GET['co_ppto'];

?>

<h1>Plan de Compra</h1>


<?php

$this->widget('application.extensions.CEditableGridView02.CEditableGridView', array(
     'dataProvider'=>$model->search(),
     'showQuickBar'=>'false',
     'quickCreateAction'=>'Create', // will be actionQuickCreate()
     'columns'=>array(
           'co_ppto',          // display the 'title' attribute
            array('header' => 'Actividad', 'name' => 'actv_plan_cpra', 'class' => 'CEditableColumn'),
            array('header' => 'Unidad de medida', 'name' => 'und_mdda', 'class' => 'CEditableColumn'),
            array('header' => 'Familia', 'name' => 'nb_fmla', 'class' => 'CEditableColumn'),
            array('header' => 'Codigo sap', 'name' => 'nb_co_sap', 'class' => 'CEditableColumn'),
         array('header' => 'Responsable', 'name' => 'nb_resp', 'class' => 'CEditableColumn'),
         array('header' => 'Telefono', 'name' => 'tlf_resp', 'class' => 'CEditableColumn'),
         array('header' => 'Correo', 'name' => 'email_resp', 'class' => 'CEditableColumn'),
     
         
         )));


?>