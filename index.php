<?php 

class StrUtils{

	   private $str ='PHP LA PROGRAMATION OBJET !';


	    public function __construct($str){
	   	$this->str= '<strong>'.$str.'</strong>';
	   }

	   public function Bold($str){
	   	return $this->str;
	   }

}

  	$StrUtils = new StrUtils('PHP IS AWESOME !');
     print_r($StrUtils->Bold($str));  







 ?>