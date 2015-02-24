<?php

/**
 * This is the model class for table "tbl_product_category".
 *
 * The followings are the available columns in table 'tbl_product_category':
 * @property integer $prod_category_id
 * @property string $category_name
 * @property integer $category_order_id
 * @property integer $album_id
 * @property integer $isactive
 * @property string $created_by
 * @property string $created_on
 * @property string $updated_by
 * @property string $updated_on
 */
class ProductCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_product_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_name, category_order_id, album_id, isactive, created_by, created_on, updated_by, updated_on', 'required'),
			array('category_order_id, album_id, isactive', 'numerical', 'integerOnly'=>true),
			array('category_name, created_by, updated_by', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('prod_category_id, category_name, category_order_id, album_id, isactive, created_by, created_on, updated_by, updated_on', 'safe', 'on'=>'search'),
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
			'prod_category_id' => 'Prod Category',
			'category_name' => 'Category Name',
			'category_order_id' => 'Category Order',
			'album_id' => 'Album',
			'isactive' => 'Isactive',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'updated_by' => 'Updated By',
			'updated_on' => 'Updated On',
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

		$criteria->compare('prod_category_id',$this->prod_category_id);
		$criteria->compare('category_name',$this->category_name,true);
		$criteria->compare('category_order_id',$this->category_order_id);
		$criteria->compare('album_id',$this->album_id);
		$criteria->compare('isactive',$this->isactive);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_on',$this->updated_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
