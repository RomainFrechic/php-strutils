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

	    public function Underline($str){
	   	return '<u>'.$this->str.'</u>';
	   }
	   public function Capitalize($str){
	   	return strtoupper($this->str);
	   }



}

  	$StrUtils = new StrUtils('PHP IS AWESOME IN BOLD!</br>');
     print_r($StrUtils->Bold($str));  


  	$StrUtils = new StrUtils('PHP IS AWESOME IN ITALIC!</br>');
     print_r($StrUtils->Italic($str));

     $StrUtils = new StrUtils('PHP IS AWESOME IN UNDERLINE!</br>');
     print_r($StrUtils->Underline($str));

      $StrUtils = new StrUtils('php is awesome in Capitalize!</br>');
     print_r($StrUtils->Capitalize($str));        







 ?>