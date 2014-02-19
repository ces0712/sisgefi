<?php

/**
 * This is the model class for table "fzs_plan_cpra_hyst".
 *
 * The followings are the available columns in table 'fzs_plan_cpra_hyst':
 * @property integer $co_plan_cpra
 * @property integer $co_ppto
 * @property string $actv_plan_cpra
 * @property string $nb_und_mdda
 * @property string $nb_fmla
 * @property string $nb_cod_sap
 * @property integer $cntd_1
 * @property integer $cntd_2
 * @property integer $cntd_3
 * @property integer $cntd_4
 * @property integer $cntd_5
 * @property integer $cntd_6
 * @property integer $cntd_7
 * @property integer $cntd_8
 * @property integer $cntd_9
 * @property integer $cntd_10
 * @property integer $cntd_11
 * @property integer $cntd_12
 * @property integer $cntd_ttl
 * @property integer $vrsn
 * @property string $nb_resp
 * @property string $tlf_resp
 * @property string $email_resp
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 */
class PlanCpraHyst extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fzs_plan_cpra_hyst';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_fmla', 'required'),
			array('co_plan_cpra, co_ppto, cntd_1, cntd_2, cntd_3, cntd_4, cntd_5, cntd_6, cntd_7, cntd_8, cntd_9, cntd_10, cntd_11, cntd_12, cntd_ttl, vrsn', 'numerical', 'integerOnly'=>true),
			array('actv_plan_cpra, usr_crea, usr_modf', 'length', 'max'=>10),
			array('nb_und_mdda, nb_fmla, nb_cod_sap, nb_resp, tlf_resp, email_resp', 'length', 'max'=>30),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('co_plan_cpra, co_ppto, actv_plan_cpra, nb_und_mdda, nb_fmla, nb_cod_sap, cntd_1, cntd_2, cntd_3, cntd_4, cntd_5, cntd_6, cntd_7, cntd_8, cntd_9, cntd_10, cntd_11, cntd_12, cntd_ttl, vrsn, nb_resp, tlf_resp, email_resp, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'co_plan_cpra' => 'Co Plan Cpra',
			'co_ppto' => 'Co Ppto',
			'actv_plan_cpra' => 'Actividad plan de compra',
			'nb_und_mdda' => 'Unidad de medida',
			'nb_fmla' => 'Nb Fmla',
			'nb_cod_sap' => 'Codigo sap',
			'cntd_1' => 'Enero',
			'cntd_2' => 'Febrero',
			'cntd_3' => 'Marzo',
			'cntd_4' => 'Abril',
			'cntd_5' => 'Mayo',
			'cntd_6' => 'Junio',
			'cntd_7' => 'Julio',
			'cntd_8' => 'Agosto',
			'cntd_9' => 'Septiembre',
			'cntd_10' => 'Octubre',
			'cntd_11' => 'Noviembre',
			'cntd_12' => 'Diciembre',
			'cntd_ttl' => 'Total',
			'vrsn' => 'Version',
			'nb_resp' => 'Nombre responsable',
			'tlf_resp' => 'Telefono responsable',
			'email_resp' => 'Cooreo responsable',
			'fe_crea' => 'Creado el',
			'fe_modf' => 'Modificado el',
			'usr_crea' => 'Creado por',
			'usr_modf' => 'Modificado por',
			'in_stat' => 'In Stat',
			'tx_desc' => 'Tx Desc',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('co_plan_cpra',$this->co_plan_cpra);
		$criteria->compare('co_ppto',$this->co_ppto);
		$criteria->compare('actv_plan_cpra',$this->actv_plan_cpra,true);
		$criteria->compare('nb_und_mdda',$this->nb_und_mdda,true);
		$criteria->compare('nb_fmla',$this->nb_fmla,true);
		$criteria->compare('nb_cod_sap',$this->nb_cod_sap,true);
		$criteria->compare('cntd_1',$this->cntd_1);
		$criteria->compare('cntd_2',$this->cntd_2);
		$criteria->compare('cntd_3',$this->cntd_3);
		$criteria->compare('cntd_4',$this->cntd_4);
		$criteria->compare('cntd_5',$this->cntd_5);
		$criteria->compare('cntd_6',$this->cntd_6);
		$criteria->compare('cntd_7',$this->cntd_7);
		$criteria->compare('cntd_8',$this->cntd_8);
		$criteria->compare('cntd_9',$this->cntd_9);
		$criteria->compare('cntd_10',$this->cntd_10);
		$criteria->compare('cntd_11',$this->cntd_11);
		$criteria->compare('cntd_12',$this->cntd_12);
		$criteria->compare('cntd_ttl',$this->cntd_ttl);
		$criteria->compare('vrsn',$this->vrsn);
		$criteria->compare('nb_resp',$this->nb_resp,true);
		$criteria->compare('tlf_resp',$this->tlf_resp,true);
		$criteria->compare('email_resp',$this->email_resp,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('tx_desc',$this->tx_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PlanCpraHyst the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function behaviors()
        {
                return array(
                        'CTimestampBehavior' => array(
                            'class' => 'zii.behaviors.CTimestampBehavior',
                            'createAttribute' => 'fe_crea',
                            'updateAttribute' => 'fe_modf',
                            'setUpdateOnCreate' => true,
                        ),

                        'BlameableBehavior' => array(
                            'class' => 'application.components.BlameableBehavior',
                            'createdByColumn' => 'usr_crea',
                            'updatedByColumn' => 'usr_modf',
                        ),
                    
                        'ActiveRecordLogableBehavior' => 'application.components.ActiveRecordLogableBehavior',
                );
        }
}
