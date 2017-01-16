<?php 

class StrUtils{

	private $str ="";


	function __construct($newString){
		$this->str=$newString;
	}

	public function toString(){
		return $this->str;
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
		$capitalize = strtoupper($this->str);
		return '<h3>CAPITALIZE :</h3>'.$capitalize;
	}

	public function Uglify(){
		$this -> Bold();
		$this -> Italic();
		$this -> Underline();
		$this -> Capitalize();
		return '<h3>UGLIFY :</h3>'.$this->str;
	}


}

$StrUtils = new StrUtils("Simplon.co");//instanciation est appel du constructeur.
echo $StrUtils->Bold();
echo $StrUtils->Italic();
echo $StrUtils->Capitalize();
echo $StrUtils->Underline();
echo $StrUtils->Uglify();

$StrUtils = new StrUtils('PHP IS AWESOME IN BOLD!</br>');
echo $StrUtils->Bold();  


$StrUtils = new StrUtils('PHP IS AWESOME IN ITALIC!</br>');
echo $StrUtils->Italic();

$StrUtils = new StrUtils('PHP IS AWESOME IN UNDERLINE!</br>');
echo $StrUtils->Underline();

$StrUtils = new StrUtils('php is awesome in Capitalize!</br>');
echo $StrUtils->Capitalize();

$StrUtils = new StrUtils('php is awesome in uglify!</br>');
echo $StrUtils->Uglify();             

?>