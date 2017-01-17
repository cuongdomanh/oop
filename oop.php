<?php
class person{
	private  $id; 
	private $name; 
	private $birthday;
	private $address;
	public function __construct(){
		$this->id      =null;
		$this->name    =null;
		$this->birthday=null;
		$this->address =null;
	}
	public function setId($id){
		$this->id=$id;
	}
	public function getId(){
		return $this->id;
	}
	public function setName($name){
		$this->name=$name;
	}
	public function getName(){
		return $this->name;
	}
	public function setBirthday($birthday){
		$this->birthday=$birthday;
	}
	public function getBirthday(){
		return $this->birthday;
	}
	public function setAddress($address){
		$this->address=$address;
	}
	public function getAddress(){
		return $this->address;
	}
	public function info($id_s=null){
		echo "thong tin : " .$this->id  ."ma".$id_s." la nguoi co ten " . $this->name . " co  ngay sinh " . $this->birthday . " song o khu vuc " . $this->address;
	}
	public function rungning($run=""){
		echo " chay ".$run;
	}
	public function sing(){
		echo "khong biet hat  ";
	}
	public function driving($driving=""){
		echo "co bang lai ".$driving;
	}
}
class student extends person{
	private $student_id;
	private $class;
	private $subject;
	private $time;
	public function __construct(){
		parent::__construct();
	}
	public function setStudent_id($student_id){
		$this->student_id=$student_id;
	}
	public function getStudent_id(){
		return $this->student_id;
	}
	public function setClass($class){
		$this->class=$class;
	}
	public function getClass(){
		return $this->class;
	}
	public function setSubject($subject){
		$this->subject=$subject;
	}
	public function getSubject(){
		return $this->subject;
	}
	public function setTime($time){
		$this->time=$time;
	}
	public function getTime(){
		return $this->time;
	}
	public function setPerson($id,$name,$birthday=null,$address=null){
		$this->setId($id);
		$this->setName($name);
		$this->setBirthday($birthday);
		$this->setAddress($address);
	}
	public function info_sv(){
		echo "ma sinh vien : ".$this->student_id ."lop ".$this->class ;
	}
	public function studing(){
		echo"mon hoc " .$this->subject;
	}
	public function pratical(){
		echo " thoi gian thuc hanh ".$this->time;
	}
	public function sing(){
		echo " hat hay  ";
	}
}
$A= new student();
$A->setPerson('1',"cuong","1-1-1996","cau giay");
$A->info();
$A->setStudent_id("10000");
$A->setClass("k59");
$A->setSubject(" lap trinh huong doi  tuong ");
$A->setTime("7h->18h");
echo"<br/>";
$A->rungning("nhanh");
echo"<br/>";
$A->driving("o to ");
echo "<br/>";
$A->info_sv();
echo"<br/>";
$A->studing();
echo "<br/>";
$A->pratical();
echo "<br/>";
$A->sing();