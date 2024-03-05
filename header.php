<?php
session_start();
$username = $_SESSION['user'];
?>


<?php
if ($username) { ?>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <a href="index.php" class="btn btn-ghost text-xl">ระบบแจ้งข้อมูลการเข้าอบรมออนไลน์</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="index.php">หน้าแรก</a></li>
                <li><a href="admin_index.php">ตารางข้อมูลอบรมออนไลน์</a></li>
                <li><a href="add_training.php">เพิ่มข้อมูลการอบรม</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component" src="assets/img/user.png" />
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a href="logout.php">ออกจากระบบ
                            <i class="bi bi-box-arrow-in-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <p><?= $username ?></p>
        </div>
    </div>
<?php
} else { ?>
    <div class="navbar bg-base-100">
        <div class="navbar-start">

        </div>
        <div class="navbar-center">
            <a href="index.php" class="btn btn-ghost text-xl">ระบบแจ้งข้อมูลการเข้าอบรมออนไลน์</a>
        </div>
        <div class="navbar-end">

        </div>
    </div>
<?php
}
?>