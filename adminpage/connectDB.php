<?php
    class Connect{
        private $servername = "localhost";
        private $username= "root";
        private $password = "";      
        private $dbname = "webtravel";
        public $con;
        public function __construct()
        {
            $this->con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if ($this->con->connect_error) {
                  die($this->con->connect_error);
                }
        }
        public function setTableName($tablename){
            $this->tablename=$tablename;
        }
        public function getTableName(){
            return $this->tablename;
        }
       
    }
    class Action{
        public $con;
        public function __construct()
        {
            $this->con = new Connect();
        }
        public function insert($tablename,$data){
            $sql = "INSERT INTO `$tablename`($data[0]) VALUES ($data[1])";
            if ($this->con->con->query($sql) === TRUE) {
                echo "Update successfully";
              } else {
                echo "Error: " . $sql . "<br>";
              }
        }
        public function update($tablename,$col_id,$id,$data){
            $sql = "UPDATE `$tablename` SET $data where $col_id= $id";
            if ($this->con->con->query($sql) === TRUE) {
                echo "Update successfully";
              } else {
                echo "Error: " . $sql . "<br>";
              }
        }
        public function delete($tablename,$col_id,$id){
            $sql = "DELETE FROM `$tablename` where `$col_id`= $id";
            if ($this->con->con->query($sql) === TRUE) {
                echo "Delete successfully";
              } else {
                echo "Error: " . $sql . "<br>";
              }

        }
        public function displayOne($tablename,$col_id,$id){
            $sql = "SELECT * FROM `$tablename` WHERE $col_id='$id'";
            $ketqua=$this->con->con->query($sql);
            /*$arr=array();
            while($row=$ketqua->fetch_assoc()){
                $arr[]=$row;
            }*/
            return $ketqua;

        }
        public function display($tablename){
            $sql = "SELECT * FROM `$tablename`";
            $ketqua=$this->con->con->query($sql);
            // $arr=array();
            // while($row=$ketqua->fetch_assoc()){
            //     $arr[]=$row;
            // }
            return $ketqua;

        }
    }
    class Tours{
        public $action;
        public $tablename="tours";
        public $col_id="id_tour";
        public $col_name='name_tour';
        public $col_price="price";
        public $col_time="time";
        public $col_place="from_place";
        public $col_description="description";
        public $col_img="img";
        private $id;
        private $name_tour;
        private $price;
        private $time;
        private $from_place;
        private $description;
        private $img;
        public function __construct()
        {
            $this->action = new Action();
        }
        public function getID(){
            return $this->id;
        }
        public function setData($id,$name_tour,$price,$time,$from_place,$description,$img){
            $this->id=$id;
            $this->name_tour=$name_tour;
            $this->price=$price;
            $this->time=$time;
            $this->from_place=$from_place;
            $this->description=$description;
            $this->img=$img;
        }
        public function getDataToUpdate(){
            $data="`$this->col_name`='$this->name_tour',`$this->col_price`=$this->price,`$this->col_time`='$this->time',`$this->col_place`='$this->from_place',`$this->col_description`='$this->description',`$this->col_img`='$this->img'";
            return $data;
        }
        public function getDataToInsert(){
            $data=["`$this->col_name`,`$this->col_price`, `$this->col_time`, `$this->col_place`,`$this->col_description`,`$this->col_img`", "$this->name_tour','$this->price','$this->time','$this->from_place','$this->description','$this->img'"];
            return $data;
        }

    }
    class Accounts{
        public $action;
        public $tablename="account";
        public $col_id="id_acc";
        public $col_username='username';
        public $col_email='email';
        public $col_password='password';
        private $id;
        private $username;
        private $email;
        private $password;
        public function __construct(){
            $this->action = new Action();
        }
        public function setData($id,$username,$email,$password){           
                $this->id=$id;
                $this->username=$username;
                $this->email=$email;
                $this->password=$password;
        }
        public function getID(){
            return $this->id;
        }
        public function getDataToInsert(){
            $data=["`$this->col_username`,`$this->col_email`,`$this->col_password`","'$this->username','$this->email','$this->password'"];
            return $data;
        }
        public function getDataToUpdate(){
            $data="`$this->col_username`='$this->username',`$this->col_email`='$this->email',`$this->col_password`='$this->password'";
            return $data;

        }
        
    }
    class BookTours{
        public $action;
        public $tablename="tour_category";
        public $col_id_tour="id_tour";
        public $id_tour;
        public function __construct(){
            $this->action = new Action();
        }
        
    }
    class Tours_Categories{
        public $action;
        public $tablename="book_tour";
        public $col_id_tour="id_tour";
        public $col_id_category="id_category";
        public $id_tour;
        public $id_category;

        public function __construct(){
            $this->action = new Action();
        }
    }
?>