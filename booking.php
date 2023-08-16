<?php
require "connection.php";
class booking
{
	private $id;
	private $userid;
	private $email;
	private $bikemodel;
	private $price;
	private $phone;

	private $connect;

	 function __construct()
	{
		$this->connect=new Connection();
	}
/*getter*/
		public function getId()
	{
		return $this->id;
	}
	public function getUserId()
	{
		return $this->userid;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getBikeModel()
	{
		return $this->bikemodel;
	}
    public function getPrice()
    {
        return $this->price;
    }
	public function getPhone()
	{
		return $this->phone;
	}

/*setter*/
	public function setId($id)
	{
		$this->id = $id;
	}
	public function setUserId($userid)
	{
		$this->userid = $userid;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function setBikeModel($bikemodel)
	{
		$this->bikemodel = $bikemodel;
	}
    public function setPrice($price)
    {
        $this->price = $price;
    }
		public function setPhone($phone)
	{
		$this->phone = $phone;
	}

	public function insertbooking()
	{
		$sql="INSERT into booking VALUES ('','$this->userid','$this->email','$this->bikemodel','$this->phone')";
		return $this->connect->Iud($sql);
	}

    function selectbooking()
{
return $this->connect->getData("SELECT * FROM booking");
}

function selectRow($id)
{
$dt = $this->connect->getData("SELECT * FROM booking
WHERE id='$id'");
$this->setId($dt[0]['id']);
$this->setUserId($dt[0]['userid']);
$this->setBikeModel($dt[0]['bikemodel']);
$this->setEmail($dt[0]['email']);
$this->setPhone($dt[0]['phone']);
}
	function  selectPrice()
	{
		$query = ("SELECT * From bike WHERE id=14");
		return $this->connect->getData($query);
	}
	public function UpdateBooking($id)
	{
		$sql ="UPDATE booking SET userid='$this->userid', email='$this->email', bikemodel='$this->bikemodel', phone='$this->phone'
		WHERE id='$id'";
		return $this->connect->Iud($sql);
	}

    public function deleteBooking($id)
    {
        return $this->connect->Iud("DELETE FROM
	 booking WHERE id='$id'");
    }
}
?>




