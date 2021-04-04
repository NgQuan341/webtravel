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
            $sql = "DELETE FROM `$tablename` where $col_id= $id";
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
        public $col_date_start="date_start";
        public $col_date_end="date_end";
        public $col_place="from_place";
        public $col_description="description";
        public $col_people="peopel";
        public $col_remark="remark";
        public $col_img="img";
        public $col_id_cate="id_cate";

        private $id;
        private $name_tour;
        private $price;
        private $date_start;
        private $date_end;
        private $from_place;
        private $description;
        private $people;
        private $remark;
        private $img;
        private $id_cate;

        public function __construct()
        {
            $this->action = new Action();
        }
        public function getID(){
            return $this->id;
        }
        public function setData($id,$name_tour,$price,$date_start,$date_end,$from_place,$description,$people,$remark,$img,$id_cate){
            $this->id=$id;
            $this->name_tour=$name_tour;
            $this->price=$price;
            $this->date_start=$date_start;
            $this->date_end=$date_end;
            $this->from_place=$from_place;
            $this->description=$description;
            $this->people=$people;
            $this->remark=$remark;
            $this->img=$img;
            $this->id_cate=$id_cate;
        }
        public function getDataToUpdate(){
            $data=
            "`$this->col_name`='$this->name_tour',
            `$this->col_price`=$this->price,
            `$this->col_date_start`=$this->date_start,
            `$this->col_date_end`=$this->date_end,
            `$this->col_place`=$this->from_place,
            `$this->col_description`=$this->description,
            `$this->col_people`=$this->people,
            `$this->col_remark`=$this->remark,
            `$this->col_img`=$this->img,
            `$this->col_id_cate`=$this->id_cate";
            return $data;
        }
        public function getDataToInsert(){
            $data=[
                "`$this->col_name`,
                `$this->col_price`, 
                `$this->col_date_start`,
                `$this->col_date_end`, 
                `$this->col_place`,
                `$this->col_description`,
                `$this->col_people`,
                `$this->col_remark`,
                `$this->col_img`,
                `$this->col_id_cate`", 
                
                "`$this->name`,
                `$this->price`, 
                `$this->date_start`,
                `$this->date_end`, 
                `$this->place`,
                `$this->description`,
                `$this->people`,
                `$this->remark`,
                `$this->img`,
                `$this->id_cate`"];
            return $data;
        }

    }
    class Accounts{
        public $action;
        public $tablename="accounts";
        public $col_id="id_acc";
        public $col_username='username';
        public $col_email='email';
        public $col_password='password';
        public $col_lname='lname';
        public $col_fname='fname';
        public $col_phone='phone';
        public $col_address='address';
        public $col_img='img';
        public $col_rule='rule';



        private $id;
        private $username;
        private $email;
        private $password;
        private $lname;
        private $fname;
        private $phone;
        private $address;
        private $img;
        private $rule;
        public function __construct(){
            $this->action = new Action();
        }
        public function setData($id,$username,$email,$password,
        $lname,$fname,$phone,$address,$img,$rule){           
                $this->id=$id;
                $this->username=$username;
                $this->email=$email;
                $this->password=$password;
                $this->lname=$lname;
                $this->fname=$fname;
                $this->phone=$phone;
                $this->address=$address;
                $this->img=$img;
                $this->rule=$rule;
                
        }
        public function getID(){
            return $this->id;
        }
        public function getDataToInsert(){
            $data=["
            `$this->col_username`,
            `$this->col_email`,
            `$this->col_password`,
            `$this->col_lname`,
            `$this->col_fname`,
            `$this->col_phone`,
            `$this->col_address`,
            `$this->col_img`,
            `$this->col_rule`",
            
            "'$this->username',
            '$this->email',
            '$this->password',
            '$this->lname',
            '$this->fname',
            '$this->phone',
            '$this->address',
            '$this->img',
            '$this->rule'"];
            return $data;
        }
        public function getDataToUpdate(){
            $data="
            `$this->col_username`='$this->username',
            `$this->col_email`='$this->email',
            `$this->col_password`='$this->password',
            `$this->col_lname`='$this->lname',
            `$this->col_fname`='$this->fname',
            `$this->col_phone`='$this->phone',
            `$this->col_address`='$this->address',
            `$this->col_img`='$this->img',
            `$this->col_rule`='$this->rule'
            ";
            return $data;

        }
        
    }
    class BookTours{
        
    }
    class Categories{
        
    }
?>