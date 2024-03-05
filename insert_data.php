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
                Training_ID INT(10) NOT NULL AUTO_INCREMENT,
                Training_Name VARCHAR(200) NOT NULL, 
                Training_Count INT(8) NULL, 
                Training_Price INT(8) NULL,
                PRIMARY KEY(Training_ID)
            );"
        ];

        foreach ($statements as $statement) {
            $conn->exec($statement);
        }

        // $Training_Name = "ทดสอบ";
        // $Training_Count = 50;
        // $Training_Price = 999;

        // $sql = $conn->prepare("INSERT INTO {$tbl_name} (Training_Name, Training_Count, Training_Price) VALUES(:Training_Name, :Training_Count, :Training_Price)");
        // $sql->bindParam(":Training_Name", $Training_Name);
        // $sql->bindParam(":Training_Count", $Training_Count);
        // $sql->bindParam(":Training_Price", $Training_Price);
        // $sql->execute();
    }
}

session_start();

if (isset($_POST['insert_training'])) {
    require("connection.php");
    $tbl_name = 'training';
    $db = new DBMethod();

    if (!$db->tableExists($tbl_name)) {
        $db->createAdminTable($tbl_name);
    }

    $Training_Name = $_POST['Name'];
    $Training_Count = $_POST['Count'];
    $Training_Price = $_POST['Price'];
    
    $sql = $conn->prepare("INSERT INTO {$tbl_name} (Training_Name, Training_Count, Training_Price) VALUES(:Training_Name, :Training_Count, :Training_Price)");
    $sql->bindParam(":Training_Name", $Training_Name);
    $sql->bindParam(":Training_Count", $Training_Count);
    $sql->bindParam(":Training_Price", $Training_Price);
    $sql->execute();

    if($sql){
        header("Location: add_training.php?status=success");
        exit();
    }else{
        header("Location: add_training.php?status=error");
        exit();
    }
}
?>