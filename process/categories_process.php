<?php
include 'connectDB.php';
$cate = new Categories();
$book = new BookTours();

//Phần edit tour
if (isset($_POST['submit'])) {
    //$tour->setData($_POST['id'], $_POST['name_tour'], $_POST['price'], $_POST['time'], $_POST['from_place'], $_POST['description'], "");
    echo "hello";
    $data = $tour->getDataToUpdate();
    echo "allo";
    $tour->action->update($tour->tablename, $tour->col_id, $_POST['id'], $data);
    echo "amazing";
    header('location: tours.php');
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
        window.location.href = "tours.php";
    </script>
<?php
}
?>