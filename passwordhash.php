<?php

    //function for salting and hashing a password
    function hashPass($passWord){
		
		//keys for salting
		$salt1 = "abc123";
		$salt2 = "123abc";
		//concatenate salt
		$passWord = $salt1.$passWord.$salt2;
		//hash password
		$passWord = hash('sha512', $passWord);
		
		return $passWord;
		
	}

?>