<?php

/**
 * This is the model class for table "fzs_cls_remo".
 *
 * The followings are the available columns in table 'fzs_cls_remo':
 * @property integer $id_cls_remo
 * @property integer $co_cls_remo
 * @property string $nb_cls_remo
 * @property string $ds_cls_remo
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
class ClsRemo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fzs_cls_remo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_cls_remo', 'required'),
			array('co_cls_remo', 'numerical', 'integerOnly'=>true),
			array('nb_cls_remo', 'length', 'max'=>30),
			array('ds_cls_remo', 'length', 'max'=>60),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),
                    
                        //Valida unique key
                        array('nb_cls_remo', 'unique', 'attributeName'=>'nb_cls_remo'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cls_remo, co_cls_remo, nb_cls_remo, ds_cls_remo, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
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
			'pptos' => array(self::HAS_MANY, 'Ppto', 'nb_cls_remo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cls_remo' => 'Id Cls Remo',
			'co_cls_remo' => 'Codigo Clase Remo',
			'nb_cls_remo' => 'Clase Remo',
			'ds_cls_remo' => 'Descripción',
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

		$criteria->compare('id_cls_remo',$this->id_cls_remo);
		$criteria->compare('co_cls_remo',$this->co_cls_remo);
		$criteria->compare('nb_cls_remo',$this->nb_cls_remo,true);
		$criteria->compare('ds_cls_remo',$this->ds_cls_remo,true);
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
	 * @return ClsRemo the static model class
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
            if($this->co_cls_remo==null || $this->co_cls_remo==0 ||  $this->co_cls_remo=='')
                $this->co_cls_remo=1;

            if($this->isNewRecord)
            {
                  $maxCo = Yii::app()->db->createCommand()
                   ->select('max(co_cls_remo) as max')
                   ->from('fzs_cls_remo')
                   ->queryScalar();
                                
                  $this->co_cls_remo = $maxCo + 1;

              }else{
                  $this->usr_modf = Yii::app()->user->id;
              }

             return true;
         }
         else
         return false;
        }
}
