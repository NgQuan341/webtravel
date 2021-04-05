<?php
include '../process/connectDB.php';
$acc = new Accounts();
$book = new BookTours();

//Phần edit account
if (isset($_POST['submit_account'])) {?>
    <script>
        alert("Update account successful");
    </script>
        <?php
            $acc->setData(
                $_POST['id_acc'], 
                $_POST['username'], 
                $_POST['email'], 
                $_POST['password'],
                $_POST['lname'],
                $_POST['fname'],
                $_POST['phone'],
                $_POST['address'],
                $_POST['img'],
                $_POST['role']);
            $data = $acc->getDataToUpdate();
            $acc->action->update($acc->tablename, $acc->col_id, $_POST['id_acc'], $data);
        ?>
    <script>
        window.location.href = "../adminpage/accounts.php";
    </script>

    <?php
}
//Phần xóa account
if (isset($_GET['id_acc_delete'])) { ?>
    <script>
        alert("DO YOU WANT TO DELETE");
    </script>
    <?php
    $book->action->delete($book->tablename, $book->col_id_acc, $_GET['id_acc_delete']);
    $acc->action->delete($acc->tablename, $acc->col_id, $_GET['id_acc_delete']);
    ?>

    <script>
        window.location.href = "../adminpage/accounts.php";
    </script>
    <?php
}
?>