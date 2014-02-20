<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page" >

        <div>
            <img src="http://sapportal.cantv.com.ve/irj/portalapps/com.cantv.portal.runtime.logon.vnw/layout/cabezal_bolivariano200v3.gif" style="width: 950px" />
        </div>
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
        
	<div id="">
		            
            <?php 
            
            if(!Yii::app()->user->isGuest){

                $this->widget('application.extensions.mbmenu.MbMenu',
                    array(
                    'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('/site/index')),
                            array('label'=>'Administrar',
                                'items'=>array(
                                    array('label'=>'Usuarios', 'url'=>Yii::app()->user->ui->userManagementAdminUrl,'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Empleados', 'url'=>array('/empleados/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Organizacion', 'url'=>array('/org/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                            ),
                            array('label'=>'Configuracion',
                                'items'=>array(
                                    array('label'=>'Sociedad', 'url'=>array('/sociedad/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Clase Remo', 'url'=>array('/clsRemo/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Actividad', 'url'=>array('/actvd/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Ceco', 'url'=>array('/ceco/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Clase de Costo', 'url'=>array('/clsCsto/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Tipo de Presupuesto', 'url'=>array('/tpoPpto/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Onapre', 'url'=>array('/onapre/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Familia', 'url'=>array('/fmla/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Unidad de Medida', 'url'=>array('/undMdda/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Codigos Sap', 'url'=>array('/codSap/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                            ),
                            array('label'=>'Contratos',
                                'items'=>array(
                                    array('label'=>'Contratos', 'url'=>array('/ctrto/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Presupuesto', 'url'=>array('/ppto/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                ),
                            ),
                            array('label'=>'Reportes',
                                
                            ),
                            array('label'=>'Acerca de',
                                'items'=>array(
                                    array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
                                    array('label'=>'Contacto', 'url'=>array('/site/contact')),
                                ),
                            ),
                            array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>Yii::app()->user->ui->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),
                        ),
                    )
                );
            }
            ?>
            
	</div><!-- mainmenu -->
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
        
        <?php echo $content; ?>
        
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by CANTV.<br/>
		Compañia Anónima Nacional Teléfonos de Venezuela. RIF: J-00124134-5.- Todos los derechos reservados.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>

</body>
</html>
