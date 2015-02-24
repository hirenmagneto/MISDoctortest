<?php

/**
 * This is the model class for table "tbl_test_question".
 *
 * The followings are the available columns in table 'tbl_test_question':
 * @property integer $question_id
 * @property integer $test_category_id
 * @property integer $test_id
 * @property string $question_name
 * @property string $option1
 * @property string $option2
 * @property string $option3
 * @property string $option4
 * @property string $option5
 * @property string $option6
 * @property string $option7
 * @property string $option8
 * @property string $right_option
 * @property string $single_multiple
 * @property integer $question_order
 * @property string $isactive
 * @property string $created_on
 * @property string $created_by
 * @property string $updated_on
 * @property string $updated_by
 */
class TestQuestion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_test_question';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('test_category_id, test_id, question_name, option1, option2, right_option, question_order', 'required'),
			array('test_category_id, test_id, question_name, question_order', 'required'),
			array('test_category_id, test_id, question_order', 'numerical', 'integerOnly'=>true),
			array('question_name ','length', 'max'=>255),
			array('single_multiple, isactive', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('question_id, test_category_id, test_id, question_name, single_multiple, question_order, isactive, created_on, created_by, updated_on, updated_by', 'safe', 'on'=>'search'),
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
			'categoryName' => array(self::BELONGS_TO, 'Testcategory', 'test_category_id'), // set relationship with Testcategory
			'testName'=>array(self::BELONGS_TO,'Test','test_id'), // set relationship with Test table
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'question_id' => 'Question',
			'test_category_id' => 'Test Category',
			'test_id' => 'Test',
			'question_name' => 'Question Name',
			
			'single_multiple' => 'Single Multiple',
			'question_order' => 'Question Order',
			'isactive' => 'Isactive',
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

		$criteria->compare('question_id',$this->question_id);
		$criteria->compare('test_category_id',$this->test_category_id);
		$criteria->compare('test_id',$this->test_id);
		$criteria->compare('question_name',$this->question_name,true);
	
		$criteria->compare('single_multiple',$this->single_multiple,true);
		$criteria->compare('question_order',$this->question_order);
		$criteria->compare('isactive',$this->isactive,true);
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
	 * @return TestQuestion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
