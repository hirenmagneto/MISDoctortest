<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class AdminUserIdentity extends CUserIdentity
{
	private $user_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		//echo $this->username;exit;
		$record		= User::model()->findByAttributes(array('username'=>$this->username));  // here I use Email as user name which comes from database
		if($record===null)
		{
		    $this->user_id		= 'user Null';
		    $this->errorCode	= self::ERROR_USERNAME_INVALID;
		} 
		else if($record->password!==md5($this->password))            // here I compare db password with passwod field
		{
		    $this->user_id		= $this->username;
		    $this->errorCode	= self::ERROR_PASSWORD_INVALID;
		}
		else if($record['isactive']!=='1')                //  here I check status as Active in db
		{        
		    $err = "You have been Inactive by Admin.";
		    $this->errorCode = $err;
		}		
		else
		{
		    $this->setState('user_id',$record['user_id']);
			$this->setState('user_type_id',$record['user_type_id']);
			$this->setState('email',$record['email_address']);
			$this->setState('username',$record['username']);
		    $this->setState('first_name', $record['first_name']);
		    $this->setState('full_name', $record['first_name'].' '.$record['last_name']);
		    $this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}