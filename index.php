<?php 

class StrUtils{

	   private $str ='PHP LA PROGRAMATION OBJET !';


	    public function __construct($str){
	   	$this->str=$str;
	   }

	   public function Bold($str){
	   	return '<strong>'.$this->str.'</strong>';
	   }

	    public function Italic($str){
	   	return '<i>'.$this->str.'</i>';
	   }

	   


}

  	$StrUtils = new StrUtils('PHP IS AWESOME IN BOLD!</br>');
     print_r($StrUtils->Bold($str));  


  	$StrUtils = new StrUtils('PHP IS AWESOME IN ITALIC!</br>');
     print_r($StrUtils->Italic($str));  







 ?>