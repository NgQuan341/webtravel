<?php
include 'connectDB.php';
$acc = new Accounts();

//Phần edit account
if (isset($_POST['submit_account'])) {?>
    <script>
        alert("Update account successful");
    </script>
        <?php
            $acc->setData($_POST['id_acc'], $_POST['username'], $_POST['email'], $_POST['password']);
            $data = $acc->getDataToUpdate();
            $acc->action->update($acc->tablename, $acc->col_id, $_POST['id_acc'], $data);
        ?>
    <script>
        window.location.href = "accounts.php";
    </script>

    <?php
}
//Phần xóa tour
if (isset($_GET['id_acc_delete'])) { ?>
    <script>
        alert("DO YOU WANT TO DELETE");
    </script>
    <?php
   
    $acc->action->delete($acc->tablename, $acc->col_id, $_GET['id_acc_delete']);
    // header('location: products.php');
    ?>

    <script>
        window.location.href = "accounts.php";
    </script>
    <?php
}
?>