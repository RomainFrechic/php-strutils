<?php 

class StrUtils{

	private $str ='PHP LA PROGRAMATION OBJET !';


	public function __construct($str){
		$this->str=$str;
	}

	public function Bold($str){
		return '<h3>BOLD :</h3><strong>'.$this->str.'</strong>';
	}

	public function Italic($str){
		return '<h3>ITALIC :</h3><i>'.$this->str.'</i>';
	}

	public function Underline($str){
		return '<h3>UNDERLINE :</h3><u>'.$this->str.'</u>';
	}

	public function Capitalize($str){
		return strtoupper('<h3>CAPITALIZE :</h3>'.$this->str);
	}

	public function Uglify($str){
		return '<h3>UGLIFY :</h3><strong><i><u>'.$this->str.'</u></i></strong><i>';
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

$StrUtils = new StrUtils('php is awesome in Capitalize!</br>');
print_r($StrUtils->Uglify($str));             







?>