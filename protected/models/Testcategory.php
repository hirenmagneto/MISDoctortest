<?php

/**
 * This is the model class for table "tbl_testcategory".
 *
 * The followings are the available columns in table 'tbl_testcategory':
 * @property integer $category_id
 * @property string $category_name
 * @property string $description
 * @property string $isactive
 * @property string $createdon
 * @property string $createdby
 * @property string $updatedon
 * @property string $updatedby
 */
class Testcategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_testcategory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_name, isactive', 'required'),
			array('category_name', 'length', 'max'=>555),
			array('isactive', 'length', 'max'=>1),
			array('createdby, updatedby', 'length', 'max'=>255),
			array('description, createdon, updatedon', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('category_id, category_name, description, isactive, createdon, createdby, updatedon, updatedby', 'safe', 'on'=>'search'),
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
			'category_id' => 'Category',
			'category_name' => 'Category Name',
			'description' => 'Description',
			'isactive' => 'Is Active',
			'createdon' => 'Createdon',
			'createdby' => 'Createdby',
			'updatedon' => 'Updatedon',
			'updatedby' => 'Updatedby',
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

		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('category_name',$this->category_name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('isactive',$this->isactive,true);
		$criteria->compare('createdon',$this->createdon,true);
		$criteria->compare('createdby',$this->createdby,true);
		$criteria->compare('updatedon',$this->updatedon,true);
		$criteria->compare('updatedby',$this->updatedby,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Testcategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
