<?php
require_once "connection.php";
class user
{
    private $id;
    private $firstname;
    private $middlename;
    private $lastname;
    private $address;
    private $dob;
    private $email;
    private $gender;
    private $phone;
    private $userid;
    private $password;
    private $cpassword;
    private $connect;

     function __construct()
    {
        $this->connect = new Connection();
    }

    /* getters */
    public function getId()
    {
        return $this->id;
    }
     public function getFirstname()
    {
        return $this->firstname;
    }

    public function getMiddlename()
    {
        return $this->middlename;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getAddress()
    {
        return $this->address;
    }
    
    public function getDob()
    {
        return $this->dob;
    }

    public function getEmail()
    {
        return $this->email;
    } 
    public function getGender()
    {
        return $this->gender;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getUserid()
    {
        return $this->userid;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function getCpassword()
    {
        return $this->cpassword;
    }

    /* setters */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }    

    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setCpassword($cpassword)
    {
        $this->cpassword = $cpassword;
    }



    public function adduser()
    {
        $sql="INSERT INTO user VALUES ('','$this->firstname','$this->middlename','$this->lastname','$this->address','$this->dob','$this->email','$this->gender','$this->phone','$this->userid','$this->password')";
         return $this->connect->Iud($sql);
    }


    function updatelogin()
    {
        $dt = $this->connect->getData("SELECT * FROM user WHERE userid='$this->userid' and password='$this->password'");

        if (count($dt)== 1)
        {
            return $dt;
            echo "<script>alert('Successful'); window.location ='update.php';</script>";

        }

        else
        {
            echo "<script>alert('Wrong userid or password... please try again'); window.location ='home.php';</script>";
        }
    }

function selectUser()
{
return $this->connect->getData("SELECT * FROM user");
}

function selectRow($id)
{
$dt = $this->connect->getData("SELECT * FROM user
WHERE id='$id'");
$this->setId($dt[0]['id']);
$this->setfirstname($dt[0]['firstname']);
$this->setmiddlename($dt[0]['middlename']);
$this->setlastname($dt[0]['lastname']);
$this->setaddress($dt[0]['address']);
$this->setdob($dt[0]['dob']);
$this->setemail($dt[0]['email']);
$this->setgender($dt[0]['gender']);
$this->setphone($dt[0]['phone']);
$this->setuserid($dt[0]['userid']);
$this->setpassword($dt[0]['password']);

}
public function deleteUser($id)
{
    $sql="DELETE from user where id='$id'";
    return $this->connect->Iud($sql);
}


    public function UpdateUser($id)
{
$sql = "UPDATE user SET firstname='$this->firstname',middlename='$this->middlename',lastname='$this->lastname',address='$this->address',dob='$this->dob',email='$this->email',gender='$this->gender',phone='$this->phone',userid='$this->userid',password='$this->password'
        WHERE id='$id'";
return $this->connect->Iud($sql);
}
public function updatePassword($id)
{
$sql = "UPDATE user SET password='$this->password'
        WHERE userid='$id'";
return $this->connect->Iud($sql);
}
    function login()
    {
        $dt = $this->connect->getData("SELECT * FROM user WHERE userid='$this->userid' and password='$this->password'");

        if (count($dt)== 1)
        {
            return $dt;
        }

        else
        {
            echo "<script>alert('Wrong userid or password... please try again'); window.location ='index.php';</script>";
        }
    }
}