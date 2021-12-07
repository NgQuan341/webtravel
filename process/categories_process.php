<?php
require_once 'connectDB.php';
$cate = new Categories();
$tour = new Tours();
function getToursInCategory($id){
    $tour = new Tours();
    $data=$tour->action->displayOne($tour->tablename,$tour->col_id_cate,$id);
    return $data;
}
function getNameCategry($id){
    $cate = new Categories();
    $data=$cate->action->displayOne($cate->tablename,$cate->col_id,$id);
    if($row=$data->fetch_assoc())
        return $row['category_name'];
}
?>