<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ระบบแจ้งข้อมูลการเข้าอบรมออนไลน์</title>
    <?php include "head_style.php" ?>
</head>

<body>
    <header>
        <?php include "header.php" ?>
    </header>

    <section class="bg-gradient-to-r from-blue-800 to-indigo-900">
        <div class="flex justify-center items-center h-screen">
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body">
                    <form action="check_login.php" method="POST">
                        <h2 class="card-title">เข้าสู่ระบบ</h2>
                        <div class="pt-5">
                            <label class="input input-bordered flex items-center gap-2">
                                Username
                                <input type="text" class="grow" name="username" placeholder="admin" />
                            </label>
                        </div>
                        <div class="pt-2">
                            <label class="input input-bordered flex items-center gap-2">
                                Password
                                <input type="password" class="grow" name="password" placeholder="********" />
                            </label>
                        </div>

                        <div class="card-actions justify-center pt-5">
                            <button type="submit" name="login" class="btn btn-success text-white bg-green-500 hover:bg-green-600">เข้าสู่ระบบ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                    title: 'เข้าสู่ระบบสำเร็จ',
                    text: 'กรุณารอสักครู่....',
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = "admin_index.php";
                });
            <?php } elseif ($status === 'error') { ?>
                // SweetAlert2 for error
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง!!',
                    showConfirmButton: true
                }).then(() => {
                    window.location.href = "index.php";
                });
            <?php } ?>
        </script>
    <?php } ?>

</body>

</html>