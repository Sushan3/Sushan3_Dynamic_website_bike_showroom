<?php

require_once "connection.php";
class usercomment
{
    private $id;
    private $bikemodel;
    private $rate;
    private $comment;
    private $connect;

    function __construct()
    {
        $this->connect = new Connection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBikemodel()
    {
        return $this->bikemodel;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setBikemodel($bikemodel)
    {
        $this->bikemodel = $bikemodel;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function insertComment()
    {
        $sql="INSERT into comment VALUES ('','$this->bikemodel','$this->rate','$this->comment')";
        return $this->connect->Iud($sql);
    }
    function selectComment()
    {
        return $this->connect->getData("SELECT * FROM comment");
    }

    function selectRow($id)
    {
        $dt = $this->connect->getData("SELECT * FROM comment
WHERE id='$id'");
        $this->setId($dt[0]['id']);
        $this->setBikeModel($dt[0]['bikemodel']);
        $this->setRate($dt[0]['rate']);
        $this->setComment($dt[0]['comment']);
    }
}
?>