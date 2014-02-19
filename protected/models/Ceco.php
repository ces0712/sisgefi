<?php

/**
 * This is the model class for table "fzs_ceco".
 *
 * The followings are the available columns in table 'fzs_ceco':
 * @property integer $id_ceco
 * @property integer $co_ceco
 * @property string $nb_ceco
 * @property string $gcia_1nvl
 * @property string $gcia_2nvl
 * @property string $edo
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 *
 * The followings are the available model relations:
 * @property Ppto[] $pptos
 */
class Ceco extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fzs_ceco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_ceco', 'required'),
			array('co_ceco', 'numerical', 'integerOnly'=>true),
			array('nb_ceco', 'length', 'max'=>30),
			array('gcia_1nvl, gcia_2nvl, edo', 'length', 'max'=>40),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),
                    
                        //Valida unique key
                        array('nb_ceco', 'unique', 'attributeName'=>'nb_ceco'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ceco, co_ceco, nb_ceco, gcia_1nvl, gcia_2nvl, edo, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
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
			'pptos' => array(self::HAS_MANY, 'Ppto', 'nb_ceco'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ceco' => 'Id Ceco',
			'co_ceco' => 'Codigo Ceco',
			'nb_ceco' => 'Ceco',
			'gcia_1nvl' => 'Gerencia 1er Nivel',
			'gcia_2nvl' => 'Gerencia 2do Nivel',
			'edo' => 'Estados',
			'fe_crea' => 'Creado el',
			'fe_modf' => 'Modificado el',
			'usr_crea' => 'Creado por',
			'usr_modf' => 'Modificado por',
			'in_stat' => 'Estatus',
			'tx_desc' => 'Observaciones',
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

		$criteria->compare('id_ceco',$this->id_ceco);
		$criteria->compare('co_ceco',$this->co_ceco);
		$criteria->compare('nb_ceco',$this->nb_ceco,true);
		$criteria->compare('gcia_1nvl',$this->gcia_1nvl,true);
		$criteria->compare('gcia_2nvl',$this->gcia_2nvl,true);
		$criteria->compare('edo',$this->edo,true);
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
	 * @return Ceco the static model class
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
        
        
        public function beforeSave()
        {

        if (parent::beforeSave())
        {
            if($this->co_ceco==null || $this->co_ceco==0 ||  $this->co_ceco=='')
                $this->co_ceco=1;

            if($this->isNewRecord)
            {
                  $maxCo = Yii::app()->db->createCommand()
                   ->select('max(co_ceco) as max')
                   ->from('fzs_ceco')
                   ->queryScalar();
                                
                  $this->co_ceco = $maxCo + 1;

              }else{
                  $this->usr_modf = Yii::app()->user->id;
              }

             return true;
         }
         else
         return false;
        }
}
