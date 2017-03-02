<?php

class Author
{
    private $name;
    private $email;
    private $gender;
    public $test = 123;

    function __construct($name,$email,$gender)
    {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function setMail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function  getGender()
    {
        //echo $this->gender;
        return $this->gender;
    }

    public function __toString()
    {
        return "Name : " . $this->name . " Email : " . $this->email . "Gender : " . $this->gender;
    }

}

echo 'dsfjalkfjfal';

$author1 = new Author("Hoang Trung Kien","kcgl2012@gmail.com.vn","Male");
//var_dump($author1);
echo $author1->test;
echo '<br/>';
echo  "Name : " . $author1->getName();
echo '<br/>';
echo $author1->getEmail();
echo '<br/>';
$author1->setMail('hoangtrungkien201293@gmail.com');
echo '<br/>';
echo $author1->getEmail();
echo '<br/>';
echo $author1->getGender();
echo '<br/>';
echo 'dsafaaaaaaaaaaaaaaaaa';
echo $author1;
?>