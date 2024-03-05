<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบแจ้งข้อมูลการเข้าอบรมออนไลน์</title>
    <?php include "head_style.php" ?>
</head>

<body>
    <header>
        <?php include "header.php" ?>
    </header>

    <section class="bg-gradient-to-r from-blue-800 to-indigo-900">
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
    </section>
</body>

</html>