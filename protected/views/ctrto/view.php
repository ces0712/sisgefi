<?php
/* @var $this CtrtoController */
/* @var $model Ctrto */

$this->breadcrumbs=array(
	'Contrato'=>array('index'),
	$model->co_ctrto,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_ctrto)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_ctrto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Ver Contrato #<?php echo $model->co_ctrto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_ctrto',
		//'co_ctrto',
		'nro_ctrto',
		'nb_socd',
		'por_incrto',
		'fcia_aumto',
		'mnto',
		'fe_inicio',
		'fe_fin',
		'in_stat_ctrto',
		'frma_pago',
		'mneda_pago',
		'mnto_pago',
		'fgra_jrdca',
		'rzon_scial',
		'observaciones',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		//'in_stat',
		'tx_desc',
	),
)); 

?>

<br/>
<h2>Presupuestos asociados</h2>
<?php 
    
    //Filtrando Presupuestos Asociados
    $criterios = new CDbCriteria;
    $criterios->condition = "co_ctrto=:co_ctrto";
    $criterios->params = array(':co_ctrto'=> $model->co_ctrto);
    
    $arrContratos = new CActiveDataProvider(AsigCttoPpto::model(), array('criteria'=>$criterios) );

    //Mostrando Contratos Asociados
    $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'asig-ctto-grid',
        'dataProvider'=> $arrContratos,
        'columns'=>array(
            'co_ppto',
            'coPpto.nb_ceco',
            'coPpto.nb_tpo_ppto',
            'coPpto.nb_cls_remo',
            'coPpto.priodd',
            'tx_desc',
            
            array(
                'class'=>'CButtonColumn',
                'template'=>'{delete}',
                'deleteButtonUrl'=>'Yii::app()->createUrl("/asigCttoPpto/delete", array("id" =>  $data["co_asig_ctto_ppto"]))',
            ),
        ),
        
    )); /**/
?>
