<?php

/**
 * 
 */
class Countries extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return "countries";
	}

	public function rules()
	{
		return array(array("name, status", "required"));
	}

}
