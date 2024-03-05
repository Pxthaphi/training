<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <h2 class="card-title">เพิ่มข้อมูลผู้ใช้</h2>
                        <p>ใส่ข้อมูลรายละเอียดเพื่อทำการเพิ่มข้อมูลผู้ใช้</p>
                        <div class="pt-2">
                            <label class="input input-bordered flex items-center gap-2">
                                Username
                                <input type="text" class="grow" placeholder="test" />
                            </label>
                        </div>
                        <div class="pt-2">
                            <label class="input input-bordered flex items-center gap-2">
                                Password
                                <input type="text" class="grow" placeholder="********" />
                            </label>
                        </div>
                        <div class="pt-2">
                            <label class="input input-bordered flex items-center gap-2">
                                Phone
                                <input type="text" class="grow" placeholder="xxx-xxx-xxxx" />
                            </label>
                        </div>
                        <div class="pt-2">
                            <label class="input input-bordered flex items-center gap-2">
                                Email
                                <input type="email" class="grow" placeholder="example@gmail.com" />
                            </label>
                        </div>

                        <div class="card-actions justify-center pt-5">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>