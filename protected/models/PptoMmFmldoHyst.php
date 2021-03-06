<?php

/**
 * This is the model class for table "fzs_ppto_mm_fmldo_hyst".
 *
 * The followings are the available columns in table 'fzs_ppto_mm_fmldo_hyst':
 * @property integer $co_ppto_mm_fmldo
 * @property integer $co_ppto_mm_plfdo
 * @property integer $co_ppto
 * @property string $mnto_1
 * @property string $mnto_2
 * @property string $mnto_3
 * @property string $mnto_4
 * @property string $mnto_5
 * @property string $mnto_6
 * @property string $mnto_7
 * @property string $mnto_8
 * @property string $mnto_9
 * @property string $mnto_10
 * @property string $mnto_11
 * @property string $mnto_12
 * @property string $mnto_ttl
 * @property integer $vrsn
 * @property integer $por_vrbl_mcrnoca
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 */
class PptoMmFmldoHyst extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fzs_ppto_mm_fmldo_hyst';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('co_ppto_mm_fmldo, co_ppto_mm_plfdo', 'required'),
			array('co_ppto_mm_fmldo, co_ppto_mm_plfdo, co_ppto, vrsn, por_vrbl_mcrnoca', 'numerical', 'integerOnly'=>true),
			array('mnto_1, mnto_2, mnto_3, mnto_4, mnto_5, mnto_6, mnto_7, mnto_8, mnto_9, mnto_10, mnto_11, mnto_12, mnto_ttl, usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('co_ppto_mm_fmldo, co_ppto_mm_plfdo, co_ppto, mnto_1, mnto_2, mnto_3, mnto_4, mnto_5, mnto_6, mnto_7, mnto_8, mnto_9, mnto_10, mnto_11, mnto_12, mnto_ttl, vrsn, por_vrbl_mcrnoca, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
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
			'co_ppto_mm_fmldo' => 'Co Ppto Mm Fmldo',
			'co_ppto_mm_plfdo' => 'Co Ppto Mm Plfdo',
			'co_ppto' => 'Co Ppto',
			'mnto_1' => 'Enero',
			'mnto_2' => 'Febrero',
			'mnto_3' => 'Marzo',
			'mnto_4' => 'Abril',
			'mnto_5' => 'Mayo',
			'mnto_6' => 'Junio',
			'mnto_7' => 'Julio',
			'mnto_8' => 'Agosto',
			'mnto_9' => 'Septiembre',
			'mnto_10' => 'Octubre',
			'mnto_11' => 'Noviembre',
			'mnto_12' => 'Diciembre',
			'mnto_ttl' => 'Monto Total',
			'vrsn' => 'Version',
			'por_vrbl_mcrnoca' => '% variable macroeconomica',
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

		$criteria->compare('co_ppto_mm_fmldo',$this->co_ppto_mm_fmldo);
		$criteria->compare('co_ppto_mm_plfdo',$this->co_ppto_mm_plfdo);
		$criteria->compare('co_ppto',$this->co_ppto);
		$criteria->compare('mnto_1',$this->mnto_1,true);
		$criteria->compare('mnto_2',$this->mnto_2,true);
		$criteria->compare('mnto_3',$this->mnto_3,true);
		$criteria->compare('mnto_4',$this->mnto_4,true);
		$criteria->compare('mnto_5',$this->mnto_5,true);
		$criteria->compare('mnto_6',$this->mnto_6,true);
		$criteria->compare('mnto_7',$this->mnto_7,true);
		$criteria->compare('mnto_8',$this->mnto_8,true);
		$criteria->compare('mnto_9',$this->mnto_9,true);
		$criteria->compare('mnto_10',$this->mnto_10,true);
		$criteria->compare('mnto_11',$this->mnto_11,true);
		$criteria->compare('mnto_12',$this->mnto_12,true);
		$criteria->compare('mnto_ttl',$this->mnto_ttl,true);
		$criteria->compare('vrsn',$this->vrsn);
		$criteria->compare('por_vrbl_mcrnoca',$this->por_vrbl_mcrnoca);
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
	 * @return PptoMmFmldoHyst the static model class
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
