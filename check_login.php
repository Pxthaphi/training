<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0"></script>
<?php
session_start();
include('connection.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_data = $conn->prepare("SELECT * FROM admins WHERE username = :username AND password = :password");
    $check_data->bindParam(":username", $username);
    $check_data->bindParam(":password", $password);
    $check_data->execute();
    $row = $check_data->fetch(PDO::FETCH_ASSOC);

    if ($check_data->rowCount() > 0) {
        $_SESSION['user'] = $row['username'];
        $_SESSION['usertype'] = $row['usertype'];
        if ($_SESSION['usertype'] == 1) {
            header("Location: login.php?status=success");
            exit();
        }
    } else {
        header("Location: login.php?status=error");
        exit();
    }
}
?>