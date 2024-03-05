<script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("connection.php");

class DBMethod
{
    public function tableExists($tbl_name)
    {
        global $conn;
        try {
            $result = $conn->query("SELECT 1 FROM {$tbl_name} LIMIT 1");
            return $result !== false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function createAdminTable($tbl_name)
    {
        global $conn;
        $statements = [
            "CREATE TABLE " . $tbl_name . " ( 
                username VARCHAR(8) NOT NULL,
                password  VARCHAR(8) NOT NULL, 
                phone VARCHAR(50) NULL, 
                email   VARCHAR(100) NULL,
                usertype INT(2) NOT NULL DEFAULT 1,
                PRIMARY KEY(username)
            );"
        ];

        foreach ($statements as $statement) {
            $conn->exec($statement);
        }

        $username = "admin";
        $password = "admin123";
        $phone = "0999999999";
        $email = "admin@gmail.com";
        $usertype = 1;

        $sql = $conn->prepare("INSERT INTO {$tbl_name} (username, password, phone, email, usertype) VALUES(:username, :password, :phone, :email, :usertype)");
        $sql->bindParam(":username", $username);
        $sql->bindParam(":password", $password);
        $sql->bindParam(":phone", $phone);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":usertype", $usertype);
        $sql->execute();
    }
}

session_start();

if (isset($_POST['insert_admin'])) {
    require("connection.php");
    $tbl_name = 'admins';
    $db = new DBMethod();

    if (!$db->tableExists($tbl_name)) {
        $db->createAdminTable($tbl_name);
        header("Location: index.php?status=success");
        exit();
    } else {
        header("Location: index.php?status=error");
        exit();
    }
}
?>