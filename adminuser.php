<?php
require_once "Connection.php";
class adminuser
{
    private $id;
    private $name;
    private $address;
    private $phone;
    private $email;
    private $userid;
    private $password;
    private $type;
    private $gender;

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
    public function getName()
    {
        return $this->name;
    }
    public function getForum()
    {
        return $this->forum;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getUserid()
    {
        return $this->userid;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getType()
    {
        return $this->type;
    }

      public function getGender()
    {
        return $this->gender;
    }

    /* setters */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setPhone($ph)
    {
        $this->phone = $ph;
    }

    public function setEmail($em)
    {
        $this->email = $em;
    }

    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
      public function setGender($gn)
    {
        $this->gender = $gn;
    }
      public function setForum($forum)
    {
        $this->forum = $forum;
    }

    public function AddUser()
    {
          $sql = "INSERT INTO user VALUES
 ('','$this->name','$this->address','$this->phone','$this->email','$this->userid','$this->password',
'User','$this->gender')";
          return $this->connect->Iud($sql);
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
$this->setName($dt[0]['name']);
$this->setAddress($dt[0]['address']);
$this->setPhone($dt[0]['phone']);
}
public function deleteUser($id)
{
    $sql="DELETE * from user where id='$id'";
    return $this->connect->Iud($sql);
} 

public function UpdateUser($id)
{
$sql = "UPDATE user SET name='$this->name',
                         address='$this->address', phone='$this->phone'
        WHERE id='$id'";
return $this->connect->Iud($sql);
}

  function login()
    {
        $dt = $this->connect->getData("SELECT * FROM user WHERE userid='$this->userid' and password='$this->password'");

        if (count($dt)!== 0) 
        {        
           return $dt;
        }   

        else
        {
            echo "<script>alert('Sorry!!! Username or Password Did Not Matched'); window.location = 'login.php';</script>";
        }

}
 function addForum()
    {
        date_default_timezone_set('Asia/Kathmandu');
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO forum values ('','$this->forum')"; 
        return $this->connect->Iud($sql);
    }
     function selectForum(){
        return $this->connect->getData("SELECT * FROM forum");
    }
}