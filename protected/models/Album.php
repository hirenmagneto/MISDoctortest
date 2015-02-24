<?php

/**
 * This is the model class for table "tbl_album".
 *
 * The followings are the available columns in table 'tbl_album':
 * @property integer $album_id
 * @property integer $album_order_id
 * @property string $image_name
 * @property string $image_path
 * @property integer $image_type
 * @property integer $image_type_id
 * @property string $created_on
 * @property string $created_by
 * @property string $updated_on
 * @property string $updated_by
 */
class Album extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_album';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('album_order_id, image_name, image_path, image_type, image_type_id', 'required'),
			array('album_order_id, image_type, image_type_id', 'numerical', 'integerOnly'=>true),
			array('image_name, created_by, updated_by', 'length', 'max'=>255),
			array('image_path', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('album_id, album_order_id, image_name, image_path, image_type, image_type_id, created_on, created_by, updated_on, updated_by', 'safe', 'on'=>'search'),
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
			'album_id' => 'Album',
			'album_order_id' => 'Album Order',
			'image_name' => 'Image Name',
			'image_path' => 'Image Path',
			'image_type' => 'Image Type',
			'image_type_id' => 'Image Type',
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

		$criteria->compare('album_id',$this->album_id);
		$criteria->compare('album_order_id',$this->album_order_id);
		$criteria->compare('image_name',$this->image_name,true);
		$criteria->compare('image_path',$this->image_path,true);
		$criteria->compare('image_type',$this->image_type);
		$criteria->compare('image_type_id',$this->image_type_id);
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
	 * @return Album the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
