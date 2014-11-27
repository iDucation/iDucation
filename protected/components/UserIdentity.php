<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
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
		$users = TUser::model()->find(array('condition'=>'Username=:username','params'=>array(':username'=>$this->username)));
<<<<<<< HEAD
=======
		
>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7
		$p = md5($this->password);
		$p2 = substr($p,0,5);
		$p3 = substr($p,5,-1);
		$p4 = substr($p,-1);
		$unix = md5(substr($p,-4));
		$uCod = substr($unix,0,4);
		$this->password = $p2.$uCod.$p3.$uCod.$p4;
<<<<<<< HEAD
=======

>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7
		if($users===null)
			Yii::app()->user->setFlash('Error','Username is wrong !');
		elseif($users->password!==$this->password)
			Yii::app()->user->setFlash('Error','Username or Password is wrong !');
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}