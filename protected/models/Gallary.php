<?php

/**
 * This is the model class for table "tbl_gallary".
 *
 * The followings are the available columns in table 'tbl_gallary':
 * @property integer $gallary_id
 * @property integer $gallary_order
 * @property string $gallary_name
 * @property string $gallary_path
 * @property string $gallary_type
 * @property string $gallary_desc
 * @property integer $isactive
 */
class Gallary extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_gallary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gallary_order, gallary_name, gallary_path, gallary_type, isactive', 'required' ,'on'=>'insert'),
			array('gallary_order, isactive', 'numerical', 'integerOnly'=>true),
            array('gallary_path', 'file','types'=>'jpg, jpeg, gif, png, mp4, wma, swf, flv', 'allowEmpty'=>true),
			array('gallary_name', 'length', 'max'=>255),
            array('gallary_desc', 'length', 'max'=>9999),
			array('gallary_path', 'length', 'max'=>500),
			array('gallary_type', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('gallary_id, gallary_order, gallary_name, gallary_path, gallary_type, gallary_desc, isactive', 'safe', 'on'=>'search'),
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
			'gallary_id' => 'Gallary',
			'gallary_order' => 'Order',
			'gallary_name' => 'Name',
			'gallary_path' => 'Image / Video',
			'gallary_type' => 'Gallary Type',
			'gallary_desc' => 'Description',
			'isactive' => 'Is Active',
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

		$criteria->compare('gallary_id',$this->gallary_id);
		$criteria->compare('gallary_order',$this->gallary_order);
		$criteria->compare('gallary_name',$this->gallary_name,true);
		$criteria->compare('gallary_path',$this->gallary_path,true);
		$criteria->compare('gallary_type',$this->gallary_type,true);
		$criteria->compare('gallary_desc',$this->gallary_desc,true);
		$criteria->compare('isactive',$this->isactive);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gallary the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
