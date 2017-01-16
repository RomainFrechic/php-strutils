<?php 

class StrUtils{

	private $str ='PHP LA PROGRAMATION OBJET !';


	public function __construct($str){
		$this->str=$str;
	}

	public function Bold(){
		$this->str ='<strong>'.$this->str.'</strong>';
		return '<h3>BOLD :</h3>'.$this->str;
	}

	public function Italic(){
		$this->str ='<i>'.$this->str.'</i>';
		return '<h3>ITALIC :</h3>'.$this->str;
	}

	public function Underline(){
		$this->str = '<u>'.$this->str.'</u>';
		return '<h3>UNDERLINE :</h3>'.$this->str;
	}

	public function Capitalize(){
		$this->str = strtoupper($this->str);
		return '<h3>CAPITALIZE :</h3>'.$this->str;
	}

	public function Uglify(){
		$this -> Bold();
		$this -> Italic();
		$this -> Underline();
		$this -> Capitalize();
		return '<h3>UGLIFY :</h3>'.$this->str;
	}


}

$StrUtils = new StrUtils('PHP IS AWESOME IN BOLD!</br>');
print_r($StrUtils->Bold());  


$StrUtils = new StrUtils('PHP IS AWESOME IN ITALIC!</br>');
print_r($StrUtils->Italic());

$StrUtils = new StrUtils('PHP IS AWESOME IN UNDERLINE!</br>');
print_r($StrUtils->Underline());

$StrUtils = new StrUtils('php is awesome in Capitalize!</br>');
print_r($StrUtils->Capitalize());

$StrUtils = new StrUtils('php is awesome in Capitalize!</br>');
print_r($StrUtils->Uglify());             







?>