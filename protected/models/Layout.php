<?php

/**
 * This is the model class for table "tbl_layout".
 *
 * The followings are the available columns in table 'tbl_layout':
 * @property integer $layout_id
 * @property string $layout_name
 * @property integer $isactive
 * @property string $created_on
 * @property string $created_by
 * @property string $updated_on
 * @property string $updated_by
 */
class Layout extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_layout';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('layout_name, isactive', 'required'),
			array('isactive', 'numerical', 'integerOnly'=>true),
			array('layout_name, created_by, updated_by', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('layout_id, layout_name, isactive, created_on, created_by, updated_on, updated_by', 'safe', 'on'=>'search'),
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
			'layout_id' => 'Layout',
			'layout_name' => 'Layout Name',
			'isactive' => 'Is Active',
			'created_on' => 'Created On',
			'created_by' => 'Created By',
			'updated_on' => 'Updated On',
			'updated_by' => 'Updated By',
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

		$criteria->compare('layout_id',$this->layout_id);
		$criteria->compare('layout_name',$this->layout_name,true);
		$criteria->compare('isactive',$this->isactive);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('updated_on',$this->updated_on,true);
		$criteria->compare('updated_by',$this->updated_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Layout the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
