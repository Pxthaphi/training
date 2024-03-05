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
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <form action="insert_data.php" method="POST">
                        <h2 class="card-title">เพิ่มข้อมูลการอบรม</h2>
                        <div class="pt-5">
                            <label class="input input-bordered flex items-center gap-2">
                                ชื่ออบรม
                                <input type="text" class="grow" name="Name" placeholder="กรุณาใส่ชื่ออบรม" />
                            </label>
                        </div>
                        <div class="pt-2">
                            <label class="input input-bordered flex items-center gap-2">
                                จำนวนผู้เข้าอบรม
                                <input type="text" class="grow" name="Count" placeholder="15" />
                            </label>
                        </div>
                        <div class="pt-2">
                            <label class="input input-bordered flex items-center gap-2">
                                ราคาต่อคน
                                <input type="text" class="grow" name="Price" placeholder="999" />
                            </label>
                        </div>

                        <div class="card-actions justify-center pt-5">
                            <button type="submit" name="insert_training" class="btn btn-success text-white bg-green-500 hover:bg-green-600">เพิ่มข้อมูล<i class="bi bi-check-lg"></i></button>
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
                    title: 'เพิ่มข้อมูลสำเร็จ',
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
                    text: 'ไม่สามารถเพิ่มข้อมูลได้ กรุณาลองใหม่อีกครั้ง!!',
                    showConfirmButton: true
                }).then(() => {
                    window.location.href = "add_training.php";
                });
            <?php } ?>
        </script>
    <?php } ?>

</body>

</html>