<?php
require_once 'connectDB.php';

if(isset($_GET['logout'])){
    $login = new Login();
    $login->action->deleteAll($login->tablename);
    header("location: ../index.php");
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
function displayRole(){
    $login = new Login();
    $acc = new Accounts();
    $data=$login->action->display($login->tablename);
    if($row=$data->fetch_assoc()){
        $data1=$acc->action->displayOne($acc->tablename,$acc->col_id,$row['id_acc']);
        if($row1=$data1->fetch_assoc()){
            return $row1['role'];
        }
    }
    else
    {
        return false;
    }
}
function displayUsername(){
    $login = new Login();
    $acc = new Accounts();
    $data=$login->action->display($login->tablename);
    if($row=$data->fetch_assoc()){
        $data1=$acc->action->displayOne($acc->tablename,$acc->col_id,$row['id_acc']);
        if($row1=$data1->fetch_assoc()){
            return $row1['username'];
        }
    }
    else
    {
        return false;
    }

}
function displayID(){
    $login = new Login();
    $acc = new Accounts();
    $data=$login->action->display($login->tablename);
    if($row=$data->fetch_assoc()){
        $data1=$acc->action->displayOne($acc->tablename,$acc->col_id,$row['id_acc']);
        if($row1=$data1->fetch_assoc()){
            return $row1['id_acc'];
        }
    }
    else
    {
        return false;
    }

}
?>