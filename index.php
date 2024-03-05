<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบแจ้งข้อมูลการเข้าอบรมออนไลน์</title>
    <?php include "head_style.php" ?>
</head>

<body class="bg-gradient-to-r from-blue-800 to-indigo-900">
    <header>
        <?php include "header.php" ?>
    </header>

    <section>
        <?php
        if (!$_SESSION['user']) { ?>
            <div class="flex justify-center items-center h-screen">
                <div class="card w-96 bg-base-100 shadow-xl">
                    <div class="card-body items-center text-center">
                        <h2 class="card-title">ยินดีต้อนรับเข้าสู่👋🏻</h2>
                        <p>ระบบแจ้งข้อมูลการเข้าอบรมออนไลน์</p>
                        <div class="pt-5"></div>
                        <form action="insert_admin.php" method="POST">
                            <div class="card-actions justify-end">
                                <button type="submit" name="insert_admin" class="btn btn-primary text-white bg-blue-500 hover:bg-blue-600">
                                    สร้างข้อมูลผู้ใช้งาน
                                </button>
                                <a href="login.php" class="btn btn-success text-white bg-green-500 hover:bg-green-600">
                                    เข้าสู่ระบบ
                                </a>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <?php
            if ($_SESSION['user']) {
                $username = $_SESSION['user'];
            ?>

                <div class="flex justify-center items-center h-screen">
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">ยินดีต้อนรับ คุณ <?= $username ?>👋🏻</h2>
                            <p>ระบบแจ้งข้อมูลการเข้าอบรมออนไลน์</p>
                            <div class="pt-5"></div>
                            <form action="insert_admin.php" method="POST">
                                <div class="card-actions justify-end">
                                    <a href="admin_index.php" class="btn btn-success text-white bg-green-500 hover:bg-green-600">
                                        เพิ่มข้อมูลการอบรม <i class="bi bi-plus-circle-fill"></i>
                                    </a>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </section>

    <?php include "script.php" ?>
    <?php
    if (isset($_GET['status'])) {
        $status = $_GET['status'];
    ?>
        <script>
            <?php if ($status === 'success') { ?>
                // SweetAlert2 for success
                Swal.fire({
                    icon: 'success',
                    title: 'เพิ่มข้อมูลผู้ใช้สำเร็จ',
                    text: 'กรุณารอสักครู่....',
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = "index.php";
                });
            <?php } elseif ($status === 'error') { ?>
                // SweetAlert2 for error
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'มีข้อมูลผู้ใช้แล้ว!!',
                    showConfirmButton: true
                }).then(() => {
                    window.location.href = "index.php";
                });
            <?php } ?>
        </script>
    <?php } ?>
</body>

</html>