<?php

/**
 * This is the model class for table "tbl_test".
 *
 * The followings are the available columns in table 'tbl_test':
 * @property integer $test_id
 * @property integer $test_category_id
 * @property string $test_name
 * @property integer $test_time
 * @property integer $test_question
 * @property integer $negative_mark
 * @property integer $passing_mark
 * @property integer $grade_A
 * @property integer $grade_B
 * @property integer $grade_C
 * @property string $created_on
 * @property string $created_by
 * @property string $updated_on
 * @property string $updated_by
 */
class Test extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_test';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('test_category_id, test_name, test_time, test_question, negative_mark, passing_mark, grade_A, grade_B, grade_C, created_on, created_by, updated_on, updated_by', 'required'),
			array('test_category_id, test_name, test_time, test_question, negative_mark, passing_mark, grade_A, grade_B, grade_C', 'required'),
			array('test_category_id, test_time, test_question, negative_mark, passing_mark, grade_A, grade_B, grade_C', 'numerical', 'integerOnly'=>true),
			array('test_name, created_by, updated_by', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('test_id, test_category_id, test_name, test_time, test_question, negative_mark, passing_mark, grade_A, grade_B, grade_C, created_on, created_by, updated_on, updated_by', 'safe', 'on'=>'search'),
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
			'categoryName' => array(self::BELONGS_TO, 'Testcategory', 'test_category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'test_id' => 'Test',
			'test_category_id' => 'Test Category',
			'test_name' => 'Test Name',
			'test_time' => 'Test Time',
			'test_question' => 'Test Question',
			'negative_mark' => 'Negative Mark',
			'passing_mark' => 'Passing Mark',
			'grade_A' => 'Grade A',
			'grade_B' => 'Grade B',
			'grade_C' => 'Grade C',
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

		$criteria->compare('test_id',$this->test_id);
		$criteria->compare('test_category_id',$this->test_category_id);
		$criteria->compare('test_name',$this->test_name,true);
		$criteria->compare('test_time',$this->test_time);
		$criteria->compare('test_question',$this->test_question);
		$criteria->compare('negative_mark',$this->negative_mark);
		$criteria->compare('passing_mark',$this->passing_mark);
		$criteria->compare('grade_A',$this->grade_A);
		$criteria->compare('grade_B',$this->grade_B);
		$criteria->compare('grade_C',$this->grade_C);
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
	 * @return Test the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
