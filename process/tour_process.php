<?php
include 'connectDB.php';
$tour = new Tours();
$book = new BookTours();


if (isset($_POST['submit_insert_tour'])) {
    $tour->setData(
        $_POST['id_tour'], 
        $_POST['name_tour'], 
        $_POST['price'], 
        $_POST['date_start'], 
        $_POST['date_end'], 
        $_POST['from_place'], 
        $_POST['description'],
        $_POST['people'], 
        5, 
        $_FILES['img']['name'],     
        $_POST['id_cate'],
        $_POST['sale']
        );
    $data_insert = $tour->getDataToInsert();
    require 'upload_tour.php';
    $tour->action->insert($tour->tablename, $data_insert);
    header('location: ../adminpage/tours.php');
}

//Phần edit tour
if (isset($_POST['submit_update_tour'])) {
    if(!empty($_FILES['img']['name'])){
    $tour->setData(
        $_POST['id_tour'], 
        $_POST['name_tour'], 
        $_POST['price'], 
        $_POST['date_start'], 
        $_POST['date_end'], 
        $_POST['from_place'], 
        $_POST['description'],
        $_POST['people'], 
        5, 
        $_FILES['img']['name'],     
        $_POST['id_cate'],
        $_POST['sale']
        );
    }
    else{
        $checkfile=$tour->action->displayOne($tour->tablename,$tour->col_id,$_POST['id_tour']);
        if($row=$checkfile->fetch_assoc()){
        $tour->setData(
            $_POST['id_tour'], 
            $_POST['name_tour'], 
            $_POST['price'], 
            $_POST['date_start'], 
            $_POST['date_end'], 
            $_POST['from_place'], 
            $_POST['description'],
            $_POST['people'], 
            5, 
            $row['img'],     
            $_POST['id_cate'],
            $_POST['sale']
            );
        }

    }
    $data_update = $tour->getDataToUpdate();
    echo $data_update."<br>";
        require 'upload_tour.php';
    $tour->action->update($tour->tablename, $tour->col_id, $_POST['id_tour'], $data_update);
    header('location: ../adminpage/tours.php');
}
//Phần xóa tour
if (isset($_GET['id_tour_delete'])) { ?>
    <script>
        alert("muốn xóa");
    </script>
    <?php
    $book->action->delete($book->tablename, $book->col_id_tour, $_GET['id_tour_delete']);
    $tour->action->delete($tour->tablename, $tour->col_id, $_GET['id_tour_delete']);
    // header('location: products.php');
    ?>

    <script>
        window.location.href = "../adminpage/tours.php";
    </script>
<?php
}
?>