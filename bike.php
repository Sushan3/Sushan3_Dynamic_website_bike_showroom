<?php
require_once "Connection.php";
class bike
{
	private $id;
	private $name;
	private $type;
	private $status;
	private $price;
	private $images;
	private $features;
	private $engine;
	private $mileage;
	private $no;
	private $connect;

      function __construct()
	{
      $this->connect = new Connection();
	}
		public function getId()
	{
		return $this->id;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getType()
	{
		return $this->type;
	}
	public function getPrice()
	{
		return $this->price;
	}
    public function getStatus()
    {
        return $this->status;
    }
	public function getFeatures()
	{
		return $this->features;
	}
    public function  getEngine()
    {
        return $this->engine;
    }
    public function  getMileage()
    {
        return $this->mileage;
    }
    public function  getNo()
    {
        return $this->no;
    }
	public function getImages()
	{
		return $this->images;
	}
	public function setId($id)
	{
		$this->id = $id;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function setStatus($status)
	{
		$this->status = $status;
	}
	public function setType($type)
	{
		$this->type = $type;
	}
	public function setPrice($price)
	{
		$this->price = $price;
	}
	public function setFeatures($feature)
	{
		$this->features = $feature;
	}
    public function  setEngine($engine)
    {
        $this->engine= $engine;
    }
    public function  setMileage($mileage)
    {
        $this->mileage= $mileage;
    }
    public function  setNo($no)
    {
         $this->no= $no;
    }
    public function setImages($images)
	{
		$this->images = $images;
	}
	public function insertSpecification()
	{
		$sql="INSERT into specification VALUES('','$this->name','$this->type','$this->status','$this->price','$this->features','$this->engine','$this->mileage','$this->no','$this->images')";
		return $this->connect->Iud($sql);
	}

	public function selectSpecification()
	{
		return $this->connect->getData("SELECT * FROM specification");
	}

	function selectRow($id)
	{
	$dt = $this->connect->getData("SELECT * FROM specification
	WHERE id='$id'");
	 $this->setId($dt[0]['id']);
	 $this->setName($dt[0]['name']);
	 $this->setType($dt[0]['type']);
	 $this->setStatus($dt[0]['status']);
	 $this->setPrice($dt[0]['price']);
	 $this->setFeatures($dt[0]['feature']);
	 $this->setEngine($dt[0]['engine']);
	 $this->setMileage($dt[0]['mileage']);
	 $this->setNo($dt[0]['no']);
	 $this->setImages($dt[0]['images']);
	}

	public function UpdateSpecification($id)
	{
	$sql = "UPDATE specification SET name='$this->name', type='$this->type',status='$this->status',price='$this->price',feature='$this->features',engine='$this->engine',mileage='$this->mileage',no='$this->no',images='$this->images'
	        WHERE id='$id'";
	return $this->connect->Iud($sql);
	}
    function selectBikemodel()
    {
        $dbvariable=("select * from specification WHERE  name='$name'");
    }
	public function deleteSpecification($id)
	    {
	          
	return $this->connect->Iud("DELETE FROM
	 specification WHERE id='$id'");
	    }
}
?>