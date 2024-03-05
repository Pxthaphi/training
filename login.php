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
                    <form action="insert.php" method="POST">
                        <h2 class="card-title">เข้าสู่ระบบ</h2>
                        <div class="pt-5">
                            <label class="input input-bordered flex items-center gap-2">
                                Username
                                <input type="text" class="grow" placeholder="admin" />
                            </label>
                        </div>
                        <div class="pt-2">
                            <label class="input input-bordered flex items-center gap-2">
                                Password
                                <input type="text" class="grow" placeholder="********" />
                            </label>
                        </div>

                        <div class="card-actions justify-center pt-5">
                            <button class="btn btn-primary">เข้าสู่ระบบ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>