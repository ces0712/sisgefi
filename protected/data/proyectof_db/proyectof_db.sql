-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2014 at 06:40 am
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sisgefi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `base_active_record_log`
--

CREATE TABLE IF NOT EXISTS `base_active_record_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `idModel` int(10) unsigned DEFAULT NULL,
  `field` varchar(45) DEFAULT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=382 ;

--
-- Dumping data for table `base_active_record_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `base_asig_org`
--

CREATE TABLE IF NOT EXISTS `base_asig_org` (
  `id_asig_org` int(11) NOT NULL AUTO_INCREMENT,
  `co_asig_org` int(10) NOT NULL,
  `nu_docm_idnt` int(10) NOT NULL,
  `co_org` int(10) NOT NULL,
  `fe_crea` datetime DEFAULT NULL,
  `fe_modf` datetime DEFAULT NULL,
  `usr_crea` varchar(10) DEFAULT NULL,
  `usr_modf` varchar(10) DEFAULT NULL,
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_asig_org`),
  UNIQUE KEY `uk_id_asig_org` (`id_asig_org`),
  KEY `idx_asig_org_nu_docm_idnt` (`nu_docm_idnt`),
  KEY `idx_asig_org_co_org` (`co_org`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de usuarios del sistema' AUTO_INCREMENT=25 ;

--
-- Dumping data for table `base_asig_org`
--
-- --------------------------------------------------------

--
-- Table structure for table `base_empleados`
--

CREATE TABLE IF NOT EXISTS `base_empleados` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nu_docm_idnt` int(10) NOT NULL COMMENT 'cedula',
  `nu_docm_idnt_supv` int(10) DEFAULT NULL,
  `username` varchar(128) NOT NULL,
  `nb_pers` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ldap_login` bit(1) NOT NULL DEFAULT b'0',
  `fe_crea` datetime DEFAULT NULL,
  `fe_modf` datetime DEFAULT NULL,
  `usr_crea` varchar(10) DEFAULT NULL,
  `usr_modf` varchar(10) DEFAULT NULL,
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nu_docm_idnt`),
  UNIQUE KEY `uk_id_usuario` (`id_usuario`),
  UNIQUE KEY `idx_username` (`username`),
  KEY `idx_nu_docm_idnt_supv` (`nu_docm_idnt_supv`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de asignacion de usuarios a organizacion' AUTO_INCREMENT=12 ;

--
-- Dumping data for table `base_empleados`
--

-- --------------------------------------------------------

--
-- Table structure for table `base_org`
--

CREATE TABLE IF NOT EXISTS `base_org` (
  `id_org` int(11) NOT NULL AUTO_INCREMENT,
  `co_org` int(10) NOT NULL,
  `co_org_dpnd` int(10) DEFAULT NULL,
  `nb_org` varchar(128) NOT NULL,
  `tx_descripcion` varchar(250) NOT NULL,
  `abv_org` varchar(10) DEFAULT NULL,
  `fe_crea` datetime DEFAULT NULL,
  `fe_modf` datetime DEFAULT NULL,
  `usr_crea` varchar(10) DEFAULT NULL,
  `usr_modf` varchar(10) DEFAULT NULL,
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_org`),
  UNIQUE KEY `uk_id_org` (`id_org`),
  KEY `idx_co_org_dpnd` (`co_org_dpnd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de estrutura organizativa' AUTO_INCREMENT=15 ;

--
-- Dumping data for table `base_org`
--
-- --------------------------------------------------------

--
-- Table structure for table `cruge_authassignment`
--

CREATE TABLE IF NOT EXISTS `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  `itemname` varchar(64) NOT NULL,
  PRIMARY KEY (`userid`,`itemname`),
  KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`),
  KEY `fk_cruge_authassignment_user` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cruge_authassignment`
--
-- --------------------------------------------------------

--
-- Table structure for table `cruge_authitem`
--

CREATE TABLE IF NOT EXISTS `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_actvd_admin', 0, '', NULL, 'N;'),
('action_actvd_create', 0, '', NULL, 'N;'),
('action_actvd_delete', 0, '', NULL, 'N;'),
('action_actvd_index', 0, '', NULL, 'N;'),
('action_actvd_update', 0, '', NULL, 'N;'),
('action_actvd_view', 0, '', NULL, 'N;'),
('action_asigcttoppto_admin', 0, '', NULL, 'N;'),
('action_asigcttoppto_create', 0, '', NULL, 'N;'),
('action_asigcttoppto_delete', 0, '', NULL, 'N;'),
('action_asigcttoppto_index', 0, '', NULL, 'N;'),
('action_asigcttoppto_update', 0, '', NULL, 'N;'),
('action_asigcttoppto_view', 0, '', NULL, 'N;'),
('action_asigorg_admin', 0, '', NULL, 'N;'),
('action_asigorg_create', 0, '', NULL, 'N;'),
('action_asigorg_delete', 0, '', NULL, 'N;'),
('action_asigorg_index', 0, '', NULL, 'N;'),
('action_asigorg_update', 0, '', NULL, 'N;'),
('action_asigorg_view', 0, '', NULL, 'N;'),
('action_ceco_admin', 0, '', NULL, 'N;'),
('action_ceco_create', 0, '', NULL, 'N;'),
('action_ceco_delete', 0, '', NULL, 'N;'),
('action_ceco_index', 0, '', NULL, 'N;'),
('action_ceco_update', 0, '', NULL, 'N;'),
('action_ceco_view', 0, '', NULL, 'N;'),
('action_clscsto_admin', 0, '', NULL, 'N;'),
('action_clscsto_create', 0, '', NULL, 'N;'),
('action_clscsto_delete', 0, '', NULL, 'N;'),
('action_clscsto_index', 0, '', NULL, 'N;'),
('action_clscsto_update', 0, '', NULL, 'N;'),
('action_clscsto_view', 0, '', NULL, 'N;'),
('action_clsremo_admin', 0, '', NULL, 'N;'),
('action_clsremo_create', 0, '', NULL, 'N;'),
('action_clsremo_delete', 0, '', NULL, 'N;'),
('action_clsremo_index', 0, '', NULL, 'N;'),
('action_clsremo_update', 0, '', NULL, 'N;'),
('action_clsremo_view', 0, '', NULL, 'N;'),
('action_codsap_admin', 0, '', NULL, 'N;'),
('action_codsap_create', 0, '', NULL, 'N;'),
('action_codsap_delete', 0, '', NULL, 'N;'),
('action_codsap_index', 0, '', NULL, 'N;'),
('action_codsap_update', 0, '', NULL, 'N;'),
('action_codsap_view', 0, '', NULL, 'N;'),
('action_ctrto_admin', 0, '', NULL, 'N;'),
('action_ctrto_create', 0, '', NULL, 'N;'),
('action_ctrto_delete', 0, '', NULL, 'N;'),
('action_ctrto_index', 0, '', NULL, 'N;'),
('action_ctrto_update', 0, '', NULL, 'N;'),
('action_ctrto_view', 0, '', NULL, 'N;'),
('action_empleados_admin', 0, '', NULL, 'n;'),
('action_empleados_create', 0, '', NULL, 'n;'),
('action_empleados_delete', 0, '', NULL, 'n;'),
('action_empleados_index', 0, '', NULL, 'n;'),
('action_empleados_update', 0, '', NULL, 'n;'),
('action_empleados_view', 0, '', NULL, 'n;'),
('action_fmla_admin', 0, '', NULL, 'N;'),
('action_fmla_create', 0, '', NULL, 'N;'),
('action_fmla_delete', 0, '', NULL, 'N;'),
('action_fmla_index', 0, '', NULL, 'N;'),
('action_fmla_update', 0, '', NULL, 'N;'),
('action_fmla_view', 0, '', NULL, 'N;'),
('action_onapre_admin', 0, '', NULL, 'N;'),
('action_onapre_create', 0, '', NULL, 'N;'),
('action_onapre_delete', 0, '', NULL, 'N;'),
('action_onapre_index', 0, '', NULL, 'N;'),
('action_onapre_update', 0, '', NULL, 'N;'),
('action_onapre_view', 0, '', NULL, 'N;'),
('action_org_admin', 0, '', NULL, 'n;'),
('action_org_create', 0, '', NULL, 'n;'),
('action_org_delete', 0, '', NULL, 'n;'),
('action_org_index', 0, '', NULL, 'n;'),
('action_org_update', 0, '', NULL, 'n;'),
('action_org_view', 0, '', NULL, 'n;'),
('action_plancpra_admin', 0, '', NULL, 'N;'),
('action_plancpra_create', 0, '', NULL, 'N;'),
('action_plancpra_createGrid', 0, '', NULL, 'N;'),
('action_plancpra_delete', 0, '', NULL, 'N;'),
('action_plancpra_index', 0, '', NULL, 'N;'),
('action_plancpra_QuickCreate', 0, '', NULL, 'N;'),
('action_plancpra_update', 0, '', NULL, 'N;'),
('action_plancpra_versiones', 0, '', NULL, 'N;'),
('action_plancpra_view', 0, '', NULL, 'N;'),
('action_pptommfmldo_admin', 0, '', NULL, 'N;'),
('action_pptommfmldo_create', 0, '', NULL, 'N;'),
('action_pptommfmldo_delete', 0, '', NULL, 'N;'),
('action_pptommfmldo_index', 0, '', NULL, 'N;'),
('action_pptommfmldo_update', 0, '', NULL, 'N;'),
('action_pptommfmldo_versiones', 0, '', NULL, 'N;'),
('action_pptommfmldo_view', 0, '', NULL, 'N;'),
('action_pptommplfdo_admin', 0, '', NULL, 'N;'),
('action_pptommplfdo_create', 0, '', NULL, 'N;'),
('action_pptommplfdo_delete', 0, '', NULL, 'N;'),
('action_pptommplfdo_index', 0, '', NULL, 'N;'),
('action_pptommplfdo_update', 0, '', NULL, 'N;'),
('action_pptommplfdo_versiones', 0, '', NULL, 'N;'),
('action_pptommplfdo_view', 0, '', NULL, 'N;'),
('action_ppto_admin', 0, '', NULL, 'N;'),
('action_ppto_create', 0, '', NULL, 'N;'),
('action_ppto_delete', 0, '', NULL, 'N;'),
('action_ppto_index', 0, '', NULL, 'N;'),
('action_ppto_update', 0, '', NULL, 'N;'),
('action_ppto_view', 0, '', NULL, 'N;'),
('action_site_captcha', 0, '', NULL, 'n;'),
('action_site_contact', 0, '', NULL, 'n;'),
('action_site_error', 0, '', NULL, 'n;'),
('action_site_index', 0, '', NULL, 'n;'),
('action_site_login', 0, '', NULL, 'n;'),
('action_site_logout', 0, '', NULL, 'n;'),
('action_site_page', 0, '', NULL, 'n;'),
('action_sociedad_admin', 0, '', NULL, 'N;'),
('action_sociedad_create', 0, '', NULL, 'N;'),
('action_sociedad_delete', 0, '', NULL, 'N;'),
('action_sociedad_index', 0, '', NULL, 'N;'),
('action_sociedad_update', 0, '', NULL, 'N;'),
('action_sociedad_view', 0, '', NULL, 'N;'),
('action_tpoppto_admin', 0, '', NULL, 'N;'),
('action_tpoppto_create', 0, '', NULL, 'N;'),
('action_tpoppto_delete', 0, '', NULL, 'N;'),
('action_tpoppto_index', 0, '', NULL, 'N;'),
('action_tpoppto_update', 0, '', NULL, 'N;'),
('action_tpoppto_view', 0, '', NULL, 'N;'),
('action_ui_editprofile', 0, '', '', 'n;'),
('action_ui_fieldsadmincreate', 0, '', NULL, 'n;'),
('action_ui_fieldsadmindelete', 0, '', NULL, 'n;'),
('action_ui_fieldsadminlist', 0, '', NULL, 'n;'),
('action_ui_fieldsadminupdate', 0, '', NULL, 'n;'),
('action_ui_rbacajaxassignment', 0, '', NULL, 'n;'),
('action_ui_rbacajaxsetchilditem', 0, '', NULL, 'n;'),
('action_ui_rbacauthitemchilditems', 0, '', NULL, 'n;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'n;'),
('action_ui_rbacauthitemdelete', 0, '', NULL, 'n;'),
('action_ui_rbacauthitemupdate', 0, '', NULL, 'n;'),
('action_ui_rbaclistops', 0, '', NULL, 'n;'),
('action_ui_rbaclistroles', 0, '', NULL, 'n;'),
('action_ui_rbaclisttasks', 0, '', NULL, 'n;'),
('action_ui_rbacusersassignments', 0, '', NULL, 'n;'),
('action_ui_sessionadmin', 0, '', NULL, 'n;'),
('action_ui_sessionadmindelete', 0, '', '', 'n;'),
('action_ui_systemupdate', 0, '', NULL, 'n;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'n;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'n;'),
('action_ui_usermanagementdelete', 0, '', NULL, 'n;'),
('action_ui_usermanagementupdate', 0, '', NULL, 'n;'),
('action_ui_usersaved', 0, '', NULL, 'n;'),
('action_undmdda_admin', 0, '', NULL, 'N;'),
('action_undmdda_create', 0, '', NULL, 'N;'),
('action_undmdda_delete', 0, '', NULL, 'N;'),
('action_undmdda_index', 0, '', NULL, 'N;'),
('action_undmdda_update', 0, '', NULL, 'N;'),
('action_undmdda_view', 0, '', NULL, 'N;'),
('actividad_actualizar', 1, '', '', 'N;'),
('actividad_administrar', 2, '', NULL, 'N;'),
('actividad_agregar', 1, '', '', 'N;'),
('actividad_consultar', 2, '', '', 'N;'),
('actividad_eliminar', 1, '', '', 'N;'),
('actividad_listar', 1, '', '', 'N;'),
('admin', 0, '', NULL, 'N;'),
('calseDeCosto_administrar', 2, '', NULL, 'N;'),
('calseDeCosto_consultar', 2, '', '', 'N;'),
('ceco_actualizar', 1, '', '', 'N;'),
('ceco_administrar', 2, '', NULL, 'N;'),
('ceco_agregar', 1, '', '', 'N;'),
('ceco_consultar', 2, '', '', 'N;'),
('ceco_eliminar', 1, '', '', 'N;'),
('ceco_listar', 1, '', '', 'N;'),
('claseCosto_actualizar', 1, '', '', 'N;'),
('claseCosto_agregar', 1, '', '', 'N;'),
('claseCosto_eliminar', 1, '', '', 'N;'),
('claseCosto_listar', 1, '', '', 'N;'),
('claseRemo_actualizar', 1, '', '', 'N;'),
('claseRemo_administrar', 2, '', NULL, 'N;'),
('claseRemo_agregar', 1, '', '', 'N;'),
('claseRemo_consultar', 2, '', '', 'N;'),
('claseRemo_eliminar', 1, '', '', 'N;'),
('claseRemo_listar', 1, '', '', 'N;'),
('codigosSap_actualizar', 1, '', '', 'N;'),
('codigosSap_administrar', 2, '', NULL, 'N;'),
('codigosSap_agregar', 1, '', '', 'N;'),
('codigosSap_consultar', 2, '', NULL, 'N;'),
('codigosSap_eliminar', 1, '', '', 'N;'),
('codigosSap_listar', 1, '', '', 'N;'),
('contratos_actualizar', 1, '', '', 'N;'),
('contratos_administrar', 2, '', NULL, 'N;'),
('contratos_agregar', 1, '', '', 'N;'),
('contratos_consultar', 2, '', NULL, 'N;'),
('contratos_eliminar', 1, '', '', 'N;'),
('contratos_listar', 1, '', '', 'N;'),
('controller_actvd', 0, '', NULL, 'N;'),
('controller_asigcttoppto', 0, '', NULL, 'N;'),
('controller_asigorg', 0, '', NULL, 'N;'),
('controller_ceco', 0, '', NULL, 'N;'),
('controller_clscsto', 0, '', NULL, 'N;'),
('controller_clsremo', 0, '', NULL, 'N;'),
('controller_codsap', 0, '', NULL, 'N;'),
('controller_ctrto', 0, '', NULL, 'N;'),
('controller_empleados', 0, '', NULL, 'n;'),
('controller_fmla', 0, '', NULL, 'N;'),
('controller_onapre', 0, '', NULL, 'N;'),
('controller_org', 0, '', NULL, 'n;'),
('controller_plancpra', 0, '', NULL, 'N;'),
('controller_ppto', 0, '', NULL, 'N;'),
('controller_pptommfmldo', 0, '', NULL, 'N;'),
('controller_pptommplfdo', 0, '', NULL, 'N;'),
('controller_site', 0, '', NULL, 'n;'),
('controller_sociedad', 0, '', NULL, 'N;'),
('controller_tpoppto', 0, '', NULL, 'N;'),
('controller_undmdda', 0, '', NULL, 'N;'),
('edit-advanced-profile-features', 0, '', '', 'n;'),
('empleados_actualizar', 1, '', '', 'n;'),
('empleados_administrar', 2, '', '', 'n;'),
('empleados_agregar', 1, '', '', 'n;'),
('empleados_consultar', 2, '', '', 'n;'),
('empleados_eliminar', 1, '', '', 'n;'),
('empleados_listar', 1, '', '', 'n;'),
('familia_actualizar', 1, '', '', 'N;'),
('familia_administrar', 2, '', NULL, 'N;'),
('familia_agregar', 1, '', '', 'N;'),
('familia_consultar', 2, '', NULL, 'N;'),
('familia_eliminar', 1, '', '', 'N;'),
('familia_listar', 1, '', '', 'N;'),
('onapre_actualizar', 1, '', '', 'N;'),
('onapre_administrar', 2, '', NULL, 'N;'),
('onapre_agregar', 1, '', '', 'N;'),
('onapre_consultar', 2, '', NULL, 'N;'),
('onapre_eliminar', 1, '', '', 'N;'),
('onapre_listar', 1, '', '', 'N;'),
('organizaciones_actualizar', 1, '', '', 'n;'),
('organizaciones_administrar', 2, '', '', 'n;'),
('organizaciones_agregar', 1, '', '', 'n;'),
('organizaciones_consultar', 2, '', '', 'n;'),
('organizaciones_eliminar', 1, '', '', 'n;'),
('organizaciones_listar', 1, '', '', 'n;'),
('organizacion_asignar', 1, '', '', 'N;'),
('planCompra_actualizar', 1, '', '', 'N;'),
('planCompra_agregar', 1, '', '', 'N;'),
('planCompra_eliminar', 1, '', '', 'N;'),
('planCompra_listar', 1, '', '', 'N;'),
('planDeCompra_administrar', 2, '', NULL, 'N;'),
('planDeCompra_consultar', 2, '', NULL, 'N;'),
('planificacionMensual_actualizar', 1, '', '', 'N;'),
('planificacionMensual_administrar', 2, '', NULL, 'N;'),
('planificacionMensual_agregar', 1, '', '', 'N;'),
('planificacionMensual_consultar', 2, '', NULL, 'N;'),
('planificacionMensual_eliminar', 1, '', '', 'N;'),
('planificacionMensual_listar', 1, '', '', 'N;'),
('presupuestoFormulado_actualizar', 1, '', '', 'N;'),
('presupuestoFormulado_administrar', 2, '', NULL, 'N;'),
('presupuestoFormulado_agregar', 1, '', '', 'N;'),
('presupuestoFormulado_consultar', 2, '', NULL, 'N;'),
('presupuestoFormulado_eliminar', 1, '', '', 'N;'),
('presupuestoFormulado_listar', 1, '', '', 'N;'),
('presupuesto_actualizar', 1, '', '', 'N;'),
('presupuesto_administrar', 2, '', NULL, 'N;'),
('presupuesto_agregar', 1, '', '', 'N;'),
('presupuesto_consultar', 2, '', NULL, 'N;'),
('presupuesto_eliminar', 1, '', '', 'N;'),
('presupuesto_listar', 1, '', '', 'N;'),
('sisgefiadmin', 0, '', '', 'n;'),
('sociedad_actualizar', 1, '', '', 'N;'),
('sociedad_administrar', 2, '', NULL, 'N;'),
('sociedad_agregar', 1, '', '', 'N;'),
('sociedad_consultar', 2, '', NULL, 'N;'),
('sociedad_eliminar', 1, '', '', 'N;'),
('sociedad_listar', 1, '', '', 'N;'),
('tipoPresupuesto_actualizar', 1, '', '', 'N;'),
('tipoPresupuesto_administrar', 2, '', NULL, 'N;'),
('tipoPresupuesto_agregar', 1, '', '', 'N;'),
('tipoPresupuesto_consultar', 2, '', NULL, 'N;'),
('tipoPresupuesto_eliminar', 1, '', '', 'N;'),
('tipoPresupuesto_listar', 1, '', '', 'N;'),
('unidadDeMedida_actualizar', 1, '', '', 'N;'),
('unidadDeMedida_administrar', 2, '', NULL, 'N;'),
('unidadDeMedida_agregar', 1, '', '', 'N;'),
('unidadDeMedida_consultar', 2, '', NULL, 'N;'),
('unidadDeMedida_eliminar', 1, '', '', 'N;'),
('unidadDeMedida_listar', 1, '', '', 'N;'),
('usuarios_administrar', 2, '', '', 'N;'),
('usuarios_consultar', 2, '', '', 'n;');

-- --------------------------------------------------------

--
-- Table structure for table `cruge_authitemchild`
--

CREATE TABLE IF NOT EXISTS `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cruge_authitemchild`
--

INSERT INTO `cruge_authitemchild` (`parent`, `child`) VALUES
('actividad_actualizar', 'action_actvd_admin'),
('actividad_agregar', 'action_actvd_admin'),
('actividad_eliminar', 'action_actvd_admin'),
('actividad_listar', 'action_actvd_admin'),
('actividad_agregar', 'action_actvd_create'),
('actividad_eliminar', 'action_actvd_delete'),
('actividad_actualizar', 'action_actvd_index'),
('actividad_agregar', 'action_actvd_index'),
('actividad_eliminar', 'action_actvd_index'),
('actividad_listar', 'action_actvd_index'),
('actividad_actualizar', 'action_actvd_update'),
('actividad_actualizar', 'action_actvd_view'),
('actividad_agregar', 'action_actvd_view'),
('actividad_eliminar', 'action_actvd_view'),
('actividad_listar', 'action_actvd_view'),
('organizacion_asignar', 'action_asigorg_create'),
('organizacion_asignar', 'action_asigorg_update'),
('ceco_actualizar', 'action_ceco_admin'),
('ceco_agregar', 'action_ceco_admin'),
('ceco_eliminar', 'action_ceco_admin'),
('ceco_listar', 'action_ceco_admin'),
('ceco_agregar', 'action_ceco_create'),
('ceco_eliminar', 'action_ceco_delete'),
('ceco_actualizar', 'action_ceco_index'),
('ceco_agregar', 'action_ceco_index'),
('ceco_eliminar', 'action_ceco_index'),
('ceco_listar', 'action_ceco_index'),
('ceco_actualizar', 'action_ceco_update'),
('ceco_actualizar', 'action_ceco_view'),
('ceco_agregar', 'action_ceco_view'),
('ceco_eliminar', 'action_ceco_view'),
('ceco_listar', 'action_ceco_view'),
('claseCosto_actualizar', 'action_clscsto_admin'),
('claseCosto_agregar', 'action_clscsto_admin'),
('claseCosto_eliminar', 'action_clscsto_admin'),
('claseCosto_listar', 'action_clscsto_admin'),
('claseCosto_agregar', 'action_clscsto_create'),
('claseCosto_eliminar', 'action_clscsto_delete'),
('claseCosto_actualizar', 'action_clscsto_index'),
('claseCosto_agregar', 'action_clscsto_index'),
('claseCosto_eliminar', 'action_clscsto_index'),
('claseCosto_listar', 'action_clscsto_index'),
('claseCosto_actualizar', 'action_clscsto_update'),
('claseCosto_actualizar', 'action_clscsto_view'),
('claseCosto_agregar', 'action_clscsto_view'),
('claseCosto_eliminar', 'action_clscsto_view'),
('claseCosto_listar', 'action_clscsto_view'),
('claseRemo_actualizar', 'action_clsremo_admin'),
('claseRemo_agregar', 'action_clsremo_admin'),
('claseRemo_eliminar', 'action_clsremo_admin'),
('claseRemo_listar', 'action_clsremo_admin'),
('claseRemo_agregar', 'action_clsremo_create'),
('claseRemo_eliminar', 'action_clsremo_delete'),
('claseRemo_actualizar', 'action_clsremo_index'),
('claseRemo_agregar', 'action_clsremo_index'),
('claseRemo_eliminar', 'action_clsremo_index'),
('claseRemo_listar', 'action_clsremo_index'),
('claseRemo_actualizar', 'action_clsremo_update'),
('claseRemo_actualizar', 'action_clsremo_view'),
('claseRemo_agregar', 'action_clsremo_view'),
('claseRemo_eliminar', 'action_clsremo_view'),
('claseRemo_listar', 'action_clsremo_view'),
('codigosSap_actualizar', 'action_codsap_admin'),
('codigosSap_agregar', 'action_codsap_admin'),
('codigosSap_eliminar', 'action_codsap_admin'),
('codigosSap_listar', 'action_codsap_admin'),
('codigosSap_agregar', 'action_codsap_create'),
('codigosSap_eliminar', 'action_codsap_delete'),
('codigosSap_actualizar', 'action_codsap_index'),
('codigosSap_agregar', 'action_codsap_index'),
('codigosSap_eliminar', 'action_codsap_index'),
('codigosSap_listar', 'action_codsap_index'),
('codigosSap_actualizar', 'action_codsap_update'),
('codigosSap_actualizar', 'action_codsap_view'),
('codigosSap_agregar', 'action_codsap_view'),
('codigosSap_eliminar', 'action_codsap_view'),
('codigosSap_listar', 'action_codsap_view'),
('contratos_actualizar', 'action_ctrto_admin'),
('contratos_agregar', 'action_ctrto_admin'),
('contratos_eliminar', 'action_ctrto_admin'),
('contratos_listar', 'action_ctrto_admin'),
('contratos_agregar', 'action_ctrto_create'),
('contratos_eliminar', 'action_ctrto_delete'),
('contratos_actualizar', 'action_ctrto_index'),
('contratos_agregar', 'action_ctrto_index'),
('contratos_eliminar', 'action_ctrto_index'),
('contratos_listar', 'action_ctrto_index'),
('contratos_actualizar', 'action_ctrto_update'),
('contratos_actualizar', 'action_ctrto_view'),
('contratos_agregar', 'action_ctrto_view'),
('contratos_eliminar', 'action_ctrto_view'),
('contratos_listar', 'action_ctrto_view'),
('empleados_actualizar', 'action_empleados_admin'),
('empleados_agregar', 'action_empleados_admin'),
('empleados_eliminar', 'action_empleados_admin'),
('empleados_listar', 'action_empleados_admin'),
('empleados_agregar', 'action_empleados_create'),
('empleados_eliminar', 'action_empleados_delete'),
('empleados_actualizar', 'action_empleados_index'),
('empleados_agregar', 'action_empleados_index'),
('empleados_eliminar', 'action_empleados_index'),
('empleados_listar', 'action_empleados_index'),
('empleados_actualizar', 'action_empleados_update'),
('empleados_actualizar', 'action_empleados_view'),
('empleados_agregar', 'action_empleados_view'),
('empleados_eliminar', 'action_empleados_view'),
('empleados_listar', 'action_empleados_view'),
('familia_actualizar', 'action_fmla_admin'),
('familia_agregar', 'action_fmla_admin'),
('familia_eliminar', 'action_fmla_admin'),
('familia_listar', 'action_fmla_admin'),
('familia_agregar', 'action_fmla_create'),
('familia_eliminar', 'action_fmla_delete'),
('familia_actualizar', 'action_fmla_index'),
('familia_agregar', 'action_fmla_index'),
('familia_eliminar', 'action_fmla_index'),
('familia_listar', 'action_fmla_index'),
('familia_actualizar', 'action_fmla_update'),
('familia_actualizar', 'action_fmla_view'),
('familia_agregar', 'action_fmla_view'),
('familia_eliminar', 'action_fmla_view'),
('familia_listar', 'action_fmla_view'),
('onapre_actualizar', 'action_onapre_admin'),
('onapre_agregar', 'action_onapre_admin'),
('onapre_eliminar', 'action_onapre_admin'),
('onapre_listar', 'action_onapre_admin'),
('onapre_agregar', 'action_onapre_create'),
('onapre_eliminar', 'action_onapre_delete'),
('onapre_actualizar', 'action_onapre_index'),
('onapre_agregar', 'action_onapre_index'),
('onapre_eliminar', 'action_onapre_index'),
('onapre_listar', 'action_onapre_index'),
('onapre_actualizar', 'action_onapre_update'),
('onapre_actualizar', 'action_onapre_view'),
('onapre_agregar', 'action_onapre_view'),
('onapre_eliminar', 'action_onapre_view'),
('onapre_listar', 'action_onapre_view'),
('organizaciones_actualizar', 'action_org_admin'),
('organizaciones_agregar', 'action_org_admin'),
('organizaciones_eliminar', 'action_org_admin'),
('organizaciones_listar', 'action_org_admin'),
('organizaciones_agregar', 'action_org_create'),
('organizaciones_eliminar', 'action_org_delete'),
('organizaciones_actualizar', 'action_org_index'),
('organizaciones_agregar', 'action_org_index'),
('organizaciones_eliminar', 'action_org_index'),
('organizaciones_listar', 'action_org_index'),
('organizaciones_actualizar', 'action_org_update'),
('organizaciones_actualizar', 'action_org_view'),
('organizaciones_agregar', 'action_org_view'),
('organizaciones_eliminar', 'action_org_view'),
('organizaciones_listar', 'action_org_view'),
('planCompra_actualizar', 'action_plancpra_admin'),
('planCompra_agregar', 'action_plancpra_admin'),
('planCompra_eliminar', 'action_plancpra_admin'),
('planCompra_listar', 'action_plancpra_admin'),
('planCompra_agregar', 'action_plancpra_create'),
('planCompra_eliminar', 'action_plancpra_delete'),
('planCompra_actualizar', 'action_plancpra_index'),
('planCompra_agregar', 'action_plancpra_index'),
('planCompra_eliminar', 'action_plancpra_index'),
('planCompra_listar', 'action_plancpra_index'),
('planCompra_actualizar', 'action_plancpra_update'),
('planCompra_actualizar', 'action_plancpra_versiones'),
('planCompra_agregar', 'action_plancpra_versiones'),
('planCompra_eliminar', 'action_plancpra_versiones'),
('planCompra_listar', 'action_plancpra_versiones'),
('planCompra_actualizar', 'action_plancpra_view'),
('planCompra_agregar', 'action_plancpra_view'),
('planCompra_eliminar', 'action_plancpra_view'),
('planCompra_listar', 'action_plancpra_view'),
('presupuestoFormulado_actualizar', 'action_pptommfmldo_admin'),
('presupuestoFormulado_agregar', 'action_pptommfmldo_admin'),
('presupuestoFormulado_eliminar', 'action_pptommfmldo_admin'),
('presupuestoFormulado_listar', 'action_pptommfmldo_admin'),
('presupuestoFormulado_agregar', 'action_pptommfmldo_create'),
('presupuestoFormulado_eliminar', 'action_pptommfmldo_delete'),
('presupuestoFormulado_actualizar', 'action_pptommfmldo_index'),
('presupuestoFormulado_agregar', 'action_pptommfmldo_index'),
('presupuestoFormulado_eliminar', 'action_pptommfmldo_index'),
('presupuestoFormulado_listar', 'action_pptommfmldo_index'),
('presupuestoFormulado_actualizar', 'action_pptommfmldo_update'),
('presupuestoFormulado_actualizar', 'action_pptommfmldo_versiones'),
('presupuestoFormulado_agregar', 'action_pptommfmldo_versiones'),
('presupuestoFormulado_eliminar', 'action_pptommfmldo_versiones'),
('presupuestoFormulado_listar', 'action_pptommfmldo_versiones'),
('presupuestoFormulado_actualizar', 'action_pptommfmldo_view'),
('presupuestoFormulado_agregar', 'action_pptommfmldo_view'),
('presupuestoFormulado_eliminar', 'action_pptommfmldo_view'),
('presupuestoFormulado_listar', 'action_pptommfmldo_view'),
('planificacionMensual_actualizar', 'action_pptommplfdo_admin'),
('planificacionMensual_agregar', 'action_pptommplfdo_admin'),
('planificacionMensual_eliminar', 'action_pptommplfdo_admin'),
('planificacionMensual_listar', 'action_pptommplfdo_admin'),
('planificacionMensual_agregar', 'action_pptommplfdo_create'),
('planificacionMensual_eliminar', 'action_pptommplfdo_delete'),
('planificacionMensual_actualizar', 'action_pptommplfdo_index'),
('planificacionMensual_agregar', 'action_pptommplfdo_index'),
('planificacionMensual_eliminar', 'action_pptommplfdo_index'),
('planificacionMensual_listar', 'action_pptommplfdo_index'),
('planificacionMensual_actualizar', 'action_pptommplfdo_update'),
('planificacionMensual_actualizar', 'action_pptommplfdo_versiones'),
('planificacionMensual_agregar', 'action_pptommplfdo_versiones'),
('planificacionMensual_eliminar', 'action_pptommplfdo_versiones'),
('planificacionMensual_listar', 'action_pptommplfdo_versiones'),
('planificacionMensual_actualizar', 'action_pptommplfdo_view'),
('planificacionMensual_agregar', 'action_pptommplfdo_view'),
('planificacionMensual_eliminar', 'action_pptommplfdo_view'),
('planificacionMensual_listar', 'action_pptommplfdo_view'),
('presupuesto_actualizar', 'action_ppto_admin'),
('presupuesto_agregar', 'action_ppto_admin'),
('presupuesto_eliminar', 'action_ppto_admin'),
('presupuesto_listar', 'action_ppto_admin'),
('presupuesto_agregar', 'action_ppto_create'),
('presupuesto_eliminar', 'action_ppto_delete'),
('presupuesto_actualizar', 'action_ppto_index'),
('presupuesto_agregar', 'action_ppto_index'),
('presupuesto_eliminar', 'action_ppto_index'),
('presupuesto_listar', 'action_ppto_index'),
('presupuesto_actualizar', 'action_ppto_update'),
('presupuesto_actualizar', 'action_ppto_view'),
('presupuesto_agregar', 'action_ppto_view'),
('presupuesto_eliminar', 'action_ppto_view'),
('presupuesto_listar', 'action_ppto_view'),
('sociedad_actualizar', 'action_sociedad_admin'),
('sociedad_agregar', 'action_sociedad_admin'),
('sociedad_eliminar', 'action_sociedad_admin'),
('sociedad_listar', 'action_sociedad_admin'),
('sociedad_agregar', 'action_sociedad_create'),
('sociedad_eliminar', 'action_sociedad_delete'),
('sociedad_actualizar', 'action_sociedad_index'),
('sociedad_agregar', 'action_sociedad_index'),
('sociedad_eliminar', 'action_sociedad_index'),
('sociedad_listar', 'action_sociedad_index'),
('sociedad_actualizar', 'action_sociedad_update'),
('sociedad_actualizar', 'action_sociedad_view'),
('sociedad_agregar', 'action_sociedad_view'),
('sociedad_eliminar', 'action_sociedad_view'),
('sociedad_listar', 'action_sociedad_view'),
('tipoPresupuesto_actualizar', 'action_tpoppto_admin'),
('tipoPresupuesto_agregar', 'action_tpoppto_admin'),
('tipoPresupuesto_eliminar', 'action_tpoppto_admin'),
('tipoPresupuesto_listar', 'action_tpoppto_admin'),
('tipoPresupuesto_agregar', 'action_tpoppto_create'),
('tipoPresupuesto_eliminar', 'action_tpoppto_delete'),
('tipoPresupuesto_actualizar', 'action_tpoppto_index'),
('tipoPresupuesto_agregar', 'action_tpoppto_index'),
('tipoPresupuesto_eliminar', 'action_tpoppto_index'),
('tipoPresupuesto_listar', 'action_tpoppto_index'),
('tipoPresupuesto_actualizar', 'action_tpoppto_update'),
('tipoPresupuesto_actualizar', 'action_tpoppto_view'),
('tipoPresupuesto_agregar', 'action_tpoppto_view'),
('tipoPresupuesto_eliminar', 'action_tpoppto_view'),
('tipoPresupuesto_listar', 'action_tpoppto_view'),
('usuarios_administrar', 'action_ui_usermanagementadmin'),
('usuarios_consultar', 'action_ui_usermanagementadmin'),
('usuarios_administrar', 'action_ui_usermanagementcreate'),
('usuarios_administrar', 'action_ui_usermanagementdelete'),
('usuarios_administrar', 'action_ui_usermanagementupdate'),
('usuarios_administrar', 'action_ui_usersaved'),
('unidadDeMedida_actualizar', 'action_undmdda_admin'),
('unidadDeMedida_agregar', 'action_undmdda_admin'),
('unidadDeMedida_eliminar', 'action_undmdda_admin'),
('unidadDeMedida_listar', 'action_undmdda_admin'),
('unidadDeMedida_agregar', 'action_undmdda_create'),
('unidadDeMedida_eliminar', 'action_undmdda_delete'),
('unidadDeMedida_actualizar', 'action_undmdda_index'),
('unidadDeMedida_agregar', 'action_undmdda_index'),
('unidadDeMedida_eliminar', 'action_undmdda_index'),
('unidadDeMedida_listar', 'action_undmdda_index'),
('unidadDeMedida_actualizar', 'action_undmdda_update'),
('unidadDeMedida_actualizar', 'action_undmdda_view'),
('unidadDeMedida_agregar', 'action_undmdda_view'),
('unidadDeMedida_eliminar', 'action_undmdda_view'),
('unidadDeMedida_listar', 'action_undmdda_view'),
('actividad_administrar', 'actividad_actualizar'),
('actividad_administrar', 'actividad_agregar'),
('actividad_administrar', 'actividad_listar'),
('actividad_consultar', 'actividad_listar'),
('ceco_administrar', 'ceco_actualizar'),
('ceco_administrar', 'ceco_agregar'),
('ceco_administrar', 'ceco_listar'),
('ceco_consultar', 'ceco_listar'),
('calseDeCosto_administrar', 'claseCosto_actualizar'),
('calseDeCosto_administrar', 'claseCosto_agregar'),
('calseDeCosto_administrar', 'claseCosto_listar'),
('calseDeCosto_consultar', 'claseCosto_listar'),
('claseRemo_administrar', 'claseRemo_actualizar'),
('claseRemo_administrar', 'claseRemo_agregar'),
('claseRemo_administrar', 'claseRemo_listar'),
('claseRemo_consultar', 'claseRemo_listar'),
('codigosSap_administrar', 'codigosSap_actualizar'),
('codigosSap_administrar', 'codigosSap_agregar'),
('codigosSap_administrar', 'codigosSap_listar'),
('codigosSap_consultar', 'codigosSap_listar'),
('contratos_administrar', 'contratos_actualizar'),
('contratos_administrar', 'contratos_agregar'),
('contratos_administrar', 'contratos_listar'),
('contratos_consultar', 'contratos_listar'),
('organizaciones_actualizar', 'controller_org'),
('organizaciones_agregar', 'controller_org'),
('organizaciones_eliminar', 'controller_org'),
('organizaciones_listar', 'controller_org'),
('empleados_administrar', 'empleados_actualizar'),
('empleados_administrar', 'empleados_agregar'),
('empleados_administrar', 'empleados_listar'),
('empleados_consultar', 'empleados_listar'),
('familia_administrar', 'familia_actualizar'),
('familia_administrar', 'familia_agregar'),
('familia_administrar', 'familia_listar'),
('familia_consultar', 'familia_listar'),
('onapre_administrar', 'onapre_actualizar'),
('onapre_administrar', 'onapre_agregar'),
('onapre_administrar', 'onapre_listar'),
('onapre_consultar', 'onapre_listar'),
('organizaciones_administrar', 'organizaciones_actualizar'),
('organizaciones_administrar', 'organizaciones_agregar'),
('organizaciones_administrar', 'organizaciones_listar'),
('organizaciones_consultar', 'organizaciones_listar'),
('planDeCompra_administrar', 'planCompra_actualizar'),
('planDeCompra_administrar', 'planCompra_agregar'),
('planDeCompra_administrar', 'planCompra_listar'),
('planDeCompra_consultar', 'planCompra_listar'),
('planificacionMensual_administrar', 'planificacionMensual_actualizar'),
('planificacionMensual_administrar', 'planificacionMensual_agregar'),
('planificacionMensual_administrar', 'planificacionMensual_listar'),
('planificacionMensual_consultar', 'planificacionMensual_listar'),
('presupuestoFormulado_administrar', 'presupuestoFormulado_actualizar'),
('presupuestoFormulado_administrar', 'presupuestoFormulado_agregar'),
('presupuestoFormulado_administrar', 'presupuestoFormulado_listar'),
('presupuestoFormulado_consultar', 'presupuestoFormulado_listar'),
('presupuesto_administrar', 'presupuesto_actualizar'),
('presupuesto_administrar', 'presupuesto_agregar'),
('presupuesto_administrar', 'presupuesto_listar'),
('presupuesto_consultar', 'presupuesto_listar'),
('sociedad_administrar', 'sociedad_actualizar'),
('sociedad_administrar', 'sociedad_agregar'),
('sociedad_administrar', 'sociedad_listar'),
('sociedad_consultar', 'sociedad_listar'),
('tipoPresupuesto_administrar', 'tipoPresupuesto_actualizar'),
('tipoPresupuesto_administrar', 'tipoPresupuesto_agregar'),
('tipoPresupuesto_administrar', 'tipoPresupuesto_listar'),
('tipoPresupuesto_consultar', 'tipoPresupuesto_listar'),
('unidadDeMedida_administrar', 'unidadDeMedida_actualizar'),
('unidadDeMedida_administrar', 'unidadDeMedida_agregar'),
('unidadDeMedida_administrar', 'unidadDeMedida_listar'),
('unidadDeMedida_consultar', 'unidadDeMedida_listar');

-- --------------------------------------------------------

--
-- Table structure for table `cruge_field`
--

CREATE TABLE IF NOT EXISTS `cruge_field` (
  `idfield` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(20) NOT NULL,
  `longname` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) DEFAULT NULL,
  `useregexpmsg` varchar(512) DEFAULT NULL,
  `predetvalue` mediumblob,
  PRIMARY KEY (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cruge_fieldvalue`
--

CREATE TABLE IF NOT EXISTS `cruge_fieldvalue` (
  `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob,
  PRIMARY KEY (`idfieldvalue`),
  KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`),
  KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cruge_session`
--

CREATE TABLE IF NOT EXISTS `cruge_session` (
  `idsession` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  KEY `crugesession_iduser` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `cruge_session`
--
-- --------------------------------------------------------

--
-- Table structure for table `cruge_system`
--

CREATE TABLE IF NOT EXISTS `cruge_system` (
  `idsystem` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `largename` varchar(45) DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) DEFAULT NULL,
  `registerusingtermslabel` varchar(100) DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1',
  PRIMARY KEY (`idsystem`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 30, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cruge_user`
--

CREATE TABLE IF NOT EXISTS `cruge_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0',
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `idx_cruge_username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1392615197, 'admin', 'cislibre@cantv.com.ve', '21232f297a57a5a743894a0e4a801fc3', NULL, 1, 0, 0),
(2, 1391219995, NULL, 1391228201, 'invitado', 'invitado@cantv.com.ve', 'a6ae8a143d440ab8c006d799f682d48d', 'a2302625999b85435b84ef447e4a05b7', 1, 0, 0),
-- --------------------------------------------------------

--
-- Table structure for table `fzs_actvd`
--

CREATE TABLE IF NOT EXISTS `fzs_actvd` (
  `id_actvd` int(11) NOT NULL AUTO_INCREMENT,
  `co_actvd` int(11) NOT NULL,
  `nb_actvd` varchar(30) NOT NULL COMMENT 'Actividad',
  `ds_actvd` varchar(60) DEFAULT NULL COMMENT 'Descripción',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_actvd`),
  UNIQUE KEY `uk_id_actvd` (`id_actvd`),
  UNIQUE KEY `idx_nb_actvd` (`nb_actvd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla actividades' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fzs_actvd`
--
-- --------------------------------------------------------

--
-- Table structure for table `fzs_asig_ctto_ppto`
--

CREATE TABLE IF NOT EXISTS `fzs_asig_ctto_ppto` (
  `id_asig_ctto_ppto` int(11) NOT NULL AUTO_INCREMENT,
  `co_asig_ctto_ppto` int(11) NOT NULL,
  `co_ctrto` int(11) NOT NULL COMMENT 'Codigo del contrato',
  `co_ppto` int(11) NOT NULL COMMENT 'Codigo del presupuesto',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_asig_ctto_ppto`),
  UNIQUE KEY `uk_ctrto_ppto` (`co_ctrto`,`co_ppto`),
  UNIQUE KEY `uk_id_asig` (`id_asig_ctto_ppto`),
  KEY `idx_asig_ctto_ppto` (`co_ppto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de asignacion contratos/presupuestos' AUTO_INCREMENT=24 ;

--
-- Dumping data for table `fzs_asig_ctto_ppto`
--
-- --------------------------------------------------------

--
-- Table structure for table `fzs_ceco`
--

CREATE TABLE IF NOT EXISTS `fzs_ceco` (
  `id_ceco` int(11) NOT NULL AUTO_INCREMENT,
  `co_ceco` int(11) NOT NULL,
  `nb_ceco` varchar(30) NOT NULL COMMENT 'Ceco',
  `gcia_1nvl` varchar(40) DEFAULT NULL COMMENT 'Gerencia 1er Nivel',
  `gcia_2nvl` varchar(40) DEFAULT NULL COMMENT 'Gerencia 2do Nivel',
  `edo` varchar(40) DEFAULT NULL COMMENT 'Estados',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_ceco`),
  UNIQUE KEY `uk_id_ceco` (`id_ceco`),
  UNIQUE KEY `idx_nb_ceco` (`nb_ceco`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla ceco' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fzs_ceco`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_cls_csto`
--

CREATE TABLE IF NOT EXISTS `fzs_cls_csto` (
  `id_cls_csto` int(11) NOT NULL AUTO_INCREMENT,
  `co_cls_csto` int(11) NOT NULL,
  `nb_cls_csto` varchar(30) NOT NULL COMMENT 'Clase costo',
  `ds_cls_csto` varchar(60) DEFAULT NULL COMMENT 'Descripción',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_cls_csto`),
  UNIQUE KEY `uk_id_cls_csto` (`id_cls_csto`),
  UNIQUE KEY `idx_nb_cls_csto` (`nb_cls_csto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla clase de costo' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fzs_cls_csto`
--
-- --------------------------------------------------------

--
-- Table structure for table `fzs_cls_remo`
--

CREATE TABLE IF NOT EXISTS `fzs_cls_remo` (
  `id_cls_remo` int(11) NOT NULL AUTO_INCREMENT,
  `co_cls_remo` int(11) NOT NULL,
  `nb_cls_remo` varchar(30) NOT NULL COMMENT 'Clase Remo',
  `ds_cls_remo` varchar(60) DEFAULT NULL COMMENT 'Descripción',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_cls_remo`),
  UNIQUE KEY `uk_id_cls_remo` (`id_cls_remo`),
  UNIQUE KEY `idx_nb_cls_remo` (`nb_cls_remo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla clase remo' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fzs_cls_remo`
--
-- --------------------------------------------------------

--
-- Table structure for table `fzs_cod_sap`
--

CREATE TABLE IF NOT EXISTS `fzs_cod_sap` (
  `id_cod_sap` int(11) NOT NULL AUTO_INCREMENT,
  `co_cod_sap` int(11) NOT NULL,
  `nb_cod_sap` varchar(30) NOT NULL COMMENT 'Codigo SAP',
  `ds_cod_sap` varchar(60) DEFAULT NULL COMMENT 'Descripción',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_cod_sap`),
  UNIQUE KEY `uk_id_cod_sap` (`id_cod_sap`),
  UNIQUE KEY `uk_nb_cod_sap` (`nb_cod_sap`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla Codigos sap' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fzs_cod_sap`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_ctrto`
--

CREATE TABLE IF NOT EXISTS `fzs_ctrto` (
  `id_ctrto` int(11) NOT NULL AUTO_INCREMENT,
  `co_ctrto` int(11) NOT NULL,
  `nro_ctrto` varchar(30) DEFAULT NULL COMMENT 'Nro. de Contrato',
  `nb_socd` varchar(10) NOT NULL,
  `por_incrto` int(2) DEFAULT NULL COMMENT 'Porcentaje de incremento',
  `fcia_aumto` varchar(10) DEFAULT NULL COMMENT 'Frecuecia aumento/incremento',
  `mnto` decimal(10,2) DEFAULT NULL COMMENT 'Monto',
  `fe_inicio` date NOT NULL COMMENT 'Fecha inicio',
  `fe_fin` date DEFAULT NULL COMMENT 'Fecha fin',
  `in_stat_ctrto` varchar(30) NOT NULL COMMENT 'Estatus/Condicion',
  `frma_pago` varchar(30) DEFAULT NULL COMMENT 'Forma de pago',
  `mneda_pago` varchar(10) DEFAULT NULL COMMENT 'Moneda de pago',
  `mnto_pago` decimal(10,2) DEFAULT NULL COMMENT 'Monto a pagar',
  `fgra_jrdca` varchar(30) NOT NULL COMMENT 'Figura Juridica',
  `rzon_scial` varchar(50) NOT NULL COMMENT 'Codigo del Proveedor',
  `co_pvdr` varchar(30) NOT NULL COMMENT 'Codigo del Proveedor',
  `observaciones` varchar(300) DEFAULT NULL COMMENT 'Observaciones',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_ctrto`),
  UNIQUE KEY `uk_id_ctrto` (`id_ctrto`),
  UNIQUE KEY `uk_nro_ctrto` (`nro_ctrto`),
  KEY `fk_socd_nb_cocd_idx` (`nb_socd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de contratos' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `fzs_ctrto`
--
-- --------------------------------------------------------

--
-- Table structure for table `fzs_fmla`
--

CREATE TABLE IF NOT EXISTS `fzs_fmla` (
  `id_fmla` int(11) NOT NULL AUTO_INCREMENT,
  `co_fmla` int(11) NOT NULL,
  `nb_fmla` varchar(30) NOT NULL COMMENT 'Familia',
  `ds_fmla` varchar(100) DEFAULT NULL COMMENT 'Descripción',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_fmla`),
  UNIQUE KEY `uk_id_fmla` (`id_fmla`),
  UNIQUE KEY `idx_nb_fmla` (`nb_fmla`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla familia' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fzs_fmla`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_onapre`
--

CREATE TABLE IF NOT EXISTS `fzs_onapre` (
  `id_onpe` int(11) NOT NULL AUTO_INCREMENT,
  `co_onpe` int(11) NOT NULL,
  `mpp_onpe` varchar(60) NOT NULL COMMENT 'Mapping onapre',
  `accn_epfca` varchar(500) DEFAULT NULL COMMENT 'Accion especifica',
  `poai` varchar(20) DEFAULT NULL COMMENT 'Poai',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_onpe`),
  UNIQUE KEY `uk_id_onpe` (`id_onpe`),
  UNIQUE KEY `idx_mpp_onpe` (`mpp_onpe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla onapre' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fzs_onapre`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_plan_cpra`
--

CREATE TABLE IF NOT EXISTS `fzs_plan_cpra` (
  `id_plan_cpra` int(11) NOT NULL AUTO_INCREMENT,
  `co_plan_cpra` int(11) NOT NULL,
  `co_ppto` int(11) NOT NULL,
  `actv_plan_cpra` varchar(10) DEFAULT NULL COMMENT 'Actividad plan de compra',
  `nb_und_mdda` varchar(30) DEFAULT NULL COMMENT 'Unidad de medida',
  `nb_fmla` varchar(30) DEFAULT NULL,
  `nb_cod_sap` varchar(30) DEFAULT NULL COMMENT 'Codigo sap',
  `cntd_1` int(10) DEFAULT NULL COMMENT 'Enero',
  `cntd_2` int(10) DEFAULT NULL COMMENT 'Febrero',
  `cntd_3` int(10) DEFAULT NULL COMMENT 'Marzo',
  `cntd_4` int(10) DEFAULT NULL COMMENT 'Abril',
  `cntd_5` int(10) DEFAULT NULL COMMENT 'Mayo',
  `cntd_6` int(10) DEFAULT NULL COMMENT 'Junio',
  `cntd_7` int(10) DEFAULT NULL COMMENT 'Julio',
  `cntd_8` int(10) DEFAULT NULL COMMENT 'Agosto',
  `cntd_9` int(10) DEFAULT NULL COMMENT 'Septiembre',
  `cntd_10` int(10) DEFAULT NULL COMMENT 'Octubre',
  `cntd_11` int(10) DEFAULT NULL COMMENT 'Noviembre',
  `cntd_12` int(10) DEFAULT NULL COMMENT 'Diciembre',
  `cntd_ttl` int(10) DEFAULT NULL COMMENT 'Total',
  `vrsn` int(10) NOT NULL COMMENT 'Version',
  `nb_resp` varchar(30) NOT NULL COMMENT 'Nombre responsable',
  `tlf_resp` varchar(30) NOT NULL COMMENT 'Telefono responsable',
  `email_resp` varchar(30) NOT NULL COMMENT 'Cooreo responsable',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_plan_cpra`),
  UNIQUE KEY `uk_id_plan_cpra` (`id_plan_cpra`),
  KEY `idx_nb_und_mdda` (`nb_und_mdda`),
  KEY `idx_nb_fmla` (`nb_fmla`),
  KEY `idx_co_ppto` (`co_ppto`),
  KEY `idx_nb_cod_sap` (`nb_cod_sap`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de plan de compra' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fzs_plan_cpra`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_plan_cpra_hyst`
--

CREATE TABLE IF NOT EXISTS `fzs_plan_cpra_hyst` (
  `co_plan_cpra` int(11) DEFAULT NULL,
  `co_ppto` int(11) DEFAULT NULL,
  `actv_plan_cpra` varchar(10) DEFAULT NULL COMMENT 'Actividad plan de compra',
  `nb_und_mdda` varchar(100) DEFAULT NULL COMMENT 'Unidad de medida',
  `nb_fmla` varchar(100) DEFAULT NULL,
  `nb_cod_sap` varchar(100) DEFAULT NULL COMMENT 'Codigo sap',
  `cntd_1` int(10) DEFAULT NULL COMMENT 'Enero',
  `cntd_2` int(10) DEFAULT NULL COMMENT 'Febrero',
  `cntd_3` int(10) DEFAULT NULL COMMENT 'Marzo',
  `cntd_4` int(10) DEFAULT NULL COMMENT 'Abril',
  `cntd_5` int(10) DEFAULT NULL COMMENT 'Mayo',
  `cntd_6` int(10) DEFAULT NULL COMMENT 'Junio',
  `cntd_7` int(10) DEFAULT NULL COMMENT 'Julio',
  `cntd_8` int(10) DEFAULT NULL COMMENT 'Agosto',
  `cntd_9` int(10) DEFAULT NULL COMMENT 'Septiembre',
  `cntd_10` int(10) DEFAULT NULL COMMENT 'Octubre',
  `cntd_11` int(10) DEFAULT NULL COMMENT 'Noviembre',
  `cntd_12` int(10) DEFAULT NULL COMMENT 'Diciembre',
  `cntd_ttl` int(10) DEFAULT NULL COMMENT 'Total',
  `vrsn` int(10) DEFAULT NULL COMMENT 'Version',
  `nb_resp` varchar(30) DEFAULT NULL COMMENT 'Nombre responsable',
  `tlf_resp` varchar(30) DEFAULT NULL COMMENT 'Telefono responsable',
  `email_resp` varchar(30) DEFAULT NULL COMMENT 'Cooreo responsable',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla historico de plan de compra';

--
-- Dumping data for table `fzs_plan_cpra_hyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_ppto`
--

CREATE TABLE IF NOT EXISTS `fzs_ppto` (
  `id_ppto` int(11) NOT NULL AUTO_INCREMENT,
  `co_ppto` int(11) NOT NULL,
  `nb_ceco` varchar(30) NOT NULL COMMENT 'Centro de costo',
  `nb_tpo_ppto` varchar(30) DEFAULT NULL COMMENT 'Tipo de presupuesto',
  `nb_cls_remo` varchar(30) DEFAULT NULL COMMENT 'Clase Remo',
  `nb_cls_csto` varchar(30) DEFAULT NULL COMMENT 'Clase de costo',
  `nb_actvd` varchar(30) DEFAULT NULL COMMENT 'Tipo de actividad',
  `mpp_onpe` varchar(60) DEFAULT NULL,
  `frma_pago` varchar(30) DEFAULT NULL COMMENT 'Forma de pago',
  `mneda_ppto` varchar(30) DEFAULT NULL COMMENT 'Moneda presupuestada',
  `mneda_pago` varchar(30) DEFAULT NULL COMMENT 'Moneda de pago',
  `dscpcion` varchar(250) DEFAULT NULL COMMENT 'Descripción de la actividad',
  `priodd` varchar(5) NOT NULL DEFAULT 'Baja' COMMENT 'Prioridad',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_ppto`),
  UNIQUE KEY `uk_id_ppto` (`id_ppto`),
  KEY `fk_actvd_nb_actvd_idx` (`nb_actvd`),
  KEY `fk_nb_cls_remo_idx` (`nb_cls_remo`),
  KEY `fk_nb_ceco_idx` (`nb_ceco`),
  KEY `fk_nb_cls_csto_idx` (`nb_cls_csto`),
  KEY `fk_mpp_onpe_idx` (`mpp_onpe`),
  KEY `idx_nb_tpo_ppto` (`nb_tpo_ppto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de presupuestos' AUTO_INCREMENT=21 ;

--
-- Dumping data for table `fzs_ppto`
--
-- --------------------------------------------------------

--
-- Table structure for table `fzs_ppto_mm_fmldo`
--

CREATE TABLE IF NOT EXISTS `fzs_ppto_mm_fmldo` (
  `id_ppto_mm_fmldo` int(11) NOT NULL AUTO_INCREMENT,
  `co_ppto_mm_fmldo` int(11) NOT NULL,
  `co_ppto_mm_plfdo` int(11) NOT NULL,
  `mnto_1` decimal(10,2) DEFAULT NULL COMMENT 'Enero',
  `mnto_2` decimal(10,2) DEFAULT NULL COMMENT 'Febrero',
  `mnto_3` decimal(10,2) DEFAULT NULL COMMENT 'Marzo',
  `mnto_4` decimal(10,2) DEFAULT NULL COMMENT 'Abril',
  `mnto_5` decimal(10,2) DEFAULT NULL COMMENT 'Mayo',
  `mnto_6` decimal(10,2) DEFAULT NULL COMMENT 'Junio',
  `mnto_7` decimal(10,2) DEFAULT NULL COMMENT 'Julio',
  `mnto_8` decimal(10,2) DEFAULT NULL COMMENT 'Agosto',
  `mnto_9` decimal(10,2) DEFAULT NULL COMMENT 'Septiembre',
  `mnto_10` decimal(10,2) DEFAULT NULL COMMENT 'Octubre',
  `mnto_11` decimal(10,2) DEFAULT NULL COMMENT 'Noviembre',
  `mnto_12` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Diciembre',
  `mnto_ttl` decimal(10,2) DEFAULT NULL COMMENT 'Monto Total',
  `vrsn` int(10) NOT NULL COMMENT 'Version',
  `por_vrbl_mcrnoca` int(10) NOT NULL COMMENT '% variable macroeconomica',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_ppto_mm_fmldo`),
  UNIQUE KEY `uk_ppto_mm_plfdo` (`co_ppto_mm_plfdo`),
  UNIQUE KEY `uk_id_ppto_mm_fmldo` (`id_ppto_mm_fmldo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de presupuesto mensual formulado' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fzs_ppto_mm_fmldo`
--
-- --------------------------------------------------------

--
-- Table structure for table `fzs_ppto_mm_fmldo_hyst`
--

CREATE TABLE IF NOT EXISTS `fzs_ppto_mm_fmldo_hyst` (
  `co_ppto_mm_fmldo` int(11) NOT NULL,
  `co_ppto_mm_plfdo` int(11) NOT NULL,
  `co_ppto` int(11) DEFAULT NULL,
  `mnto_1` decimal(10,2) DEFAULT NULL COMMENT 'Enero',
  `mnto_2` decimal(10,2) DEFAULT NULL COMMENT 'Febrero',
  `mnto_3` decimal(10,2) DEFAULT NULL COMMENT 'Marzo',
  `mnto_4` decimal(10,2) DEFAULT NULL COMMENT 'Abril',
  `mnto_5` decimal(10,2) DEFAULT NULL COMMENT 'Mayo',
  `mnto_6` decimal(10,2) DEFAULT NULL COMMENT 'Junio',
  `mnto_7` decimal(10,2) DEFAULT NULL COMMENT 'Julio',
  `mnto_8` decimal(10,2) DEFAULT NULL COMMENT 'Agosto',
  `mnto_9` decimal(10,2) DEFAULT NULL COMMENT 'Septiembre',
  `mnto_10` decimal(10,2) DEFAULT NULL COMMENT 'Octubre',
  `mnto_11` decimal(10,2) DEFAULT NULL COMMENT 'Noviembre',
  `mnto_12` decimal(10,2) DEFAULT NULL COMMENT 'Diciembre',
  `mnto_ttl` decimal(10,2) DEFAULT NULL COMMENT 'Monto Total',
  `vrsn` int(10) DEFAULT NULL COMMENT 'Version',
  `por_vrbl_mcrnoca` int(10) DEFAULT NULL COMMENT '% variable macroeconomica',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla historico de presupuesto mensual formulado';

--
-- Dumping data for table `fzs_ppto_mm_fmldo_hyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_ppto_mm_plfdo`
--

CREATE TABLE IF NOT EXISTS `fzs_ppto_mm_plfdo` (
  `id_ppto_mm_plfdo` int(11) NOT NULL AUTO_INCREMENT,
  `co_ppto_mm_plfdo` int(11) NOT NULL,
  `co_ppto` int(11) NOT NULL,
  `mnto_1` decimal(10,2) DEFAULT NULL COMMENT 'Enero',
  `mnto_2` decimal(10,2) DEFAULT NULL COMMENT 'Febrero',
  `mnto_3` decimal(10,2) DEFAULT NULL COMMENT 'Marzo',
  `mnto_4` decimal(10,2) DEFAULT NULL COMMENT 'Abril',
  `mnto_5` decimal(10,2) DEFAULT NULL COMMENT 'Mayo',
  `mnto_6` decimal(10,2) DEFAULT NULL COMMENT 'Junio',
  `mnto_7` decimal(10,2) DEFAULT NULL COMMENT 'Julio',
  `mnto_8` decimal(10,2) DEFAULT NULL COMMENT 'Agosto',
  `mnto_9` decimal(10,2) DEFAULT NULL COMMENT 'Septiembre',
  `mnto_10` decimal(10,2) DEFAULT NULL COMMENT 'Octubre',
  `mnto_11` decimal(10,2) DEFAULT NULL COMMENT 'Noviembre',
  `mnto_12` decimal(10,2) DEFAULT NULL COMMENT 'Diciembre',
  `mnto_ttl` decimal(10,2) NOT NULL COMMENT 'Monto Total',
  `vrsn` int(10) NOT NULL COMMENT 'Version',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_ppto_mm_plfdo`),
  UNIQUE KEY `uk_mm_pto_co_ppto` (`co_ppto`),
  UNIQUE KEY `id_ppto_mm_plfdo` (`id_ppto_mm_plfdo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla de presupuesto mensual planificado' AUTO_INCREMENT=17 ;

--
-- Dumping data for table `fzs_ppto_mm_plfdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_ppto_mm_plfdo_hyst`
--

CREATE TABLE IF NOT EXISTS `fzs_ppto_mm_plfdo_hyst` (
  `co_ppto_mm_plfdo` int(11) NOT NULL,
  `co_ppto` int(11) NOT NULL,
  `mnto_1` decimal(10,2) DEFAULT NULL COMMENT 'Enero',
  `mnto_2` decimal(10,2) DEFAULT NULL COMMENT 'Febrero',
  `mnto_3` decimal(10,2) DEFAULT NULL COMMENT 'Marzo',
  `mnto_4` decimal(10,2) DEFAULT NULL COMMENT 'Abril',
  `mnto_5` decimal(10,2) DEFAULT NULL COMMENT 'Mayo',
  `mnto_6` decimal(10,2) DEFAULT NULL COMMENT 'Junio',
  `mnto_7` decimal(10,2) DEFAULT NULL COMMENT 'Julio',
  `mnto_8` decimal(10,2) DEFAULT NULL COMMENT 'Agosto',
  `mnto_9` decimal(10,2) DEFAULT NULL COMMENT 'Septiembre',
  `mnto_10` decimal(10,2) DEFAULT NULL COMMENT 'Octubre',
  `mnto_11` decimal(10,2) DEFAULT NULL COMMENT 'Noviembre',
  `mnto_12` decimal(10,2) DEFAULT NULL COMMENT 'Diciembre',
  `mnto_ttl` decimal(10,2) DEFAULT NULL COMMENT 'Monto Total',
  `vrsn` int(10) DEFAULT NULL COMMENT 'Version',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla historico de presupuesto mensual planificado';

--
-- Dumping data for table `fzs_ppto_mm_plfdo_hyst`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_sociedad`
--

CREATE TABLE IF NOT EXISTS `fzs_sociedad` (
  `id_socd` int(11) NOT NULL AUTO_INCREMENT,
  `co_socd` int(11) NOT NULL,
  `nb_socd` varchar(10) NOT NULL COMMENT 'Sociedad',
  `ds_socd` varchar(60) DEFAULT NULL COMMENT 'Descripción',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_socd`),
  UNIQUE KEY `idx_nb_cocd` (`nb_socd`),
  UNIQUE KEY `uk_id_socd` (`id_socd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla sociedades' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fzs_sociedad`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_tpo_ppto`
--

CREATE TABLE IF NOT EXISTS `fzs_tpo_ppto` (
  `id_tpo_ppto` int(11) NOT NULL AUTO_INCREMENT,
  `co_tpo_ppto` int(11) NOT NULL,
  `nb_tpo_ppto` varchar(30) NOT NULL COMMENT 'Tipo presupuesto',
  `ds_tpo_ppto` varchar(60) DEFAULT NULL COMMENT 'Descripción',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_tpo_ppto`),
  UNIQUE KEY `uk_id_tpo_ppto` (`id_tpo_ppto`),
  UNIQUE KEY `idx_nb_tpo_ppto` (`nb_tpo_ppto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla tipo presupuesto' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fzs_tpo_ppto`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_und_mdda`
--

CREATE TABLE IF NOT EXISTS `fzs_und_mdda` (
  `id_und_mdda` int(11) NOT NULL AUTO_INCREMENT,
  `co_und_mdda` int(11) NOT NULL,
  `nb_und_mdda` varchar(30) NOT NULL COMMENT 'Unidad de medida',
  `ds_und_mdda` varchar(60) DEFAULT NULL COMMENT 'Descripción',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_und_mdda`),
  UNIQUE KEY `uk_nb_und_mdda` (`nb_und_mdda`),
  UNIQUE KEY `uk_id_und_mdda` (`id_und_mdda`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tabla unidad de medidas' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fzs_und_mdda`
--

-- --------------------------------------------------------

--
-- Table structure for table `fzs_vbles_montrs`
--

CREATE TABLE IF NOT EXISTS `fzs_vbles_montrs` (
  `id_vbles_montrs` int(11) NOT NULL AUTO_INCREMENT,
  `co_vbles_montrs` int(11) NOT NULL,
  `val_iva` int(10) DEFAULT NULL COMMENT 'Iva',
  `val_dlr` int(10) DEFAULT NULL COMMENT 'Dolar',
  `val_ut` int(10) DEFAULT NULL COMMENT 'Unidad Tributaria',
  `val_por_vrbl_mcrnoca` int(10) DEFAULT NULL COMMENT '% variable macroeconomica',
  `fe_crea` datetime DEFAULT NULL COMMENT 'Creado el',
  `fe_modf` datetime DEFAULT NULL COMMENT 'Modificado el',
  `usr_crea` varchar(10) DEFAULT NULL COMMENT 'Creado por',
  `usr_modf` varchar(10) DEFAULT NULL COMMENT 'Modificado por',
  `in_stat` char(1) NOT NULL DEFAULT 'A',
  `tx_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`co_vbles_montrs`),
  UNIQUE KEY `uk_id_vbles_montrs` (`id_vbles_montrs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla de variables monetarias' AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `base_asig_org`
--
ALTER TABLE `base_asig_org`
  ADD CONSTRAINT `fk_asig_org_co_org` FOREIGN KEY (`co_org`) REFERENCES `base_org` (`co_org`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asig_org_nu_doc` FOREIGN KEY (`nu_docm_idnt`) REFERENCES `base_empleados` (`nu_docm_idnt`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `base_empleados`
--
ALTER TABLE `base_empleados`
  ADD CONSTRAINT `fk_nu_docm_idnt` FOREIGN KEY (`nu_docm_idnt_supv`) REFERENCES `base_empleados` (`nu_docm_idnt`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `cruge_user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `base_org`
--
ALTER TABLE `base_org`
  ADD CONSTRAINT `fk_co_org` FOREIGN KEY (`co_org_dpnd`) REFERENCES `base_org` (`co_org`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
  ADD CONSTRAINT `fk_cruge_authassignment_cruge_authitem1` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_authassignment_user` FOREIGN KEY (`userid`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
  ADD CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `fzs_asig_ctto_ppto`
--
ALTER TABLE `fzs_asig_ctto_ppto`
  ADD CONSTRAINT `fk_asig_co_ctrto` FOREIGN KEY (`co_ctrto`) REFERENCES `fzs_ctrto` (`co_ctrto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asig_co_ppto` FOREIGN KEY (`co_ppto`) REFERENCES `fzs_ppto` (`co_ppto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fzs_ctrto`
--
ALTER TABLE `fzs_ctrto`
  ADD CONSTRAINT `fk_socd_nb_cocd` FOREIGN KEY (`nb_socd`) REFERENCES `fzs_sociedad` (`nb_socd`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fzs_plan_cpra`
--
ALTER TABLE `fzs_plan_cpra`
  ADD CONSTRAINT `fk_nb_cod_sap` FOREIGN KEY (`nb_cod_sap`) REFERENCES `fzs_cod_sap` (`nb_cod_sap`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fzs_plan_ppto` FOREIGN KEY (`co_ppto`) REFERENCES `fzs_ppto` (`co_ppto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nb_fmla` FOREIGN KEY (`nb_fmla`) REFERENCES `fzs_fmla` (`nb_fmla`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nb_und_mdda` FOREIGN KEY (`nb_und_mdda`) REFERENCES `fzs_und_mdda` (`nb_und_mdda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fzs_ppto`
--
ALTER TABLE `fzs_ppto`
  ADD CONSTRAINT `fk_nb_tpo_ppto` FOREIGN KEY (`nb_tpo_ppto`) REFERENCES `fzs_tpo_ppto` (`nb_tpo_ppto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actvd_nb_actvd` FOREIGN KEY (`nb_actvd`) REFERENCES `fzs_actvd` (`nb_actvd`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mpp_onpe` FOREIGN KEY (`mpp_onpe`) REFERENCES `fzs_onapre` (`mpp_onpe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nb_ceco` FOREIGN KEY (`nb_ceco`) REFERENCES `fzs_ceco` (`nb_ceco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nb_cls_csto` FOREIGN KEY (`nb_cls_csto`) REFERENCES `fzs_cls_csto` (`nb_cls_csto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nb_cls_remo` FOREIGN KEY (`nb_cls_remo`) REFERENCES `fzs_cls_remo` (`nb_cls_remo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fzs_ppto_mm_fmldo`
--
ALTER TABLE `fzs_ppto_mm_fmldo`
  ADD CONSTRAINT `fk_fmldo_co_mm_plfo` FOREIGN KEY (`co_ppto_mm_plfdo`) REFERENCES `fzs_ppto_mm_plfdo` (`co_ppto_mm_plfdo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fzs_ppto_mm_plfdo`
--
ALTER TABLE `fzs_ppto_mm_plfdo`
  ADD CONSTRAINT `fk_plfdo_co_ppto` FOREIGN KEY (`co_ppto`) REFERENCES `fzs_ppto` (`co_ppto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
