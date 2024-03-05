<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบแจ้งข้อมูลการเข้าอบรมออนไลน์</title>
    <?php include "head_style.php" ?>
    <style>
        html,
        body {
            height: 100%;
            /* Make html, body, and #app take 100% of the viewport height */
        }

        table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control::before {
            color: #ffffff;
        }

        .dt-length-0 {
            color: #ffffff;
        }
    </style>

</head>

<body class="bg-gradient-to-r from-blue-800 to-indigo-900">
    <header>
        <?php include "header.php" ?>
    </header>

    <section>
        <div class="pt-5"></div>
        <div class="pt-5"></div>

        <div class="flex justify-center items-center">
            <div class="container mx-auto px-4 w-full md:w-3/4">
                <div class="card-l bg-base-100 shadow-xl">
                    <div class=" pt-5 d-grid gap-2 d-md-flex justify-content-end">
                        <a href="add_training.php" class="btn btn-success me-md-1 text-white" role="button">เพิ่มข้อมูลอบรม
                            <i class="bi bi-plus-circle-fill"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">ตารางข้อมูลอบรมออนไลน์</h2>
                        <table id="example" class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">ชื่อกิจกรรมอบรม</th>
                                    <th class="px-4 py-2">จำนวนคน</th>
                                    <th class="px-4 py-2">ราคา/คน</th>
                                    <th class="px-4 py-2">จัดการข้อมูล</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require("connection.php");

                                $sql = "SELECT * FROM `training`";
                                $query = $conn->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll();

                                foreach ($results as $result) {
                                ?>
                                    <tr>
                                        <td><?php echo $result['Training_ID']; ?></td>
                                        <td><?php echo $result['Training_Name']; ?></td>
                                        <td><?php echo $result['Training_Count']; ?></td>
                                        <td><?php echo $result['Training_Price']; ?></td>
                                        <td>
                                            <a href="edit_training.php?Training_ID=<?= $result["Training_ID"]; ?>" class="btn btn-warning btn-sm">แก้ไข <i class="bi bi-pencil-square"></i></a>
                                            <a data-id="<?= $result["Training_ID"]; ?>" href="?delete=<?= $result["Training_ID"]; ?>" class="btn btn-error btn-sm delete-btn">ลบ <i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <!-- Your footer content goes here -->
    </footer>

    <?php include "script.php" ?>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "sProcessing": "กำลังดำเนินการ...",
                    "sLengthMenu": "แสดง _MENU_ รายการ",
                    "sZeroRecords": "ไม่พบข้อมูล",
                    "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                    "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
                    "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 รายการ",
                    "sInfoFiltered": "(กรองจากทั้งหมด _MAX_ รายการ)",
                    "sInfoPostFix": "",
                    "sSearch": "ค้นหา:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "เริ่มต้น",
                        "sPrevious": "ก่อนหน้า",
                        "sNext": "ถัดไป",
                        "sLast": "สุดท้าย"
                    },
                    "oAria": {
                        "sSortAscending": ": เปิดให้เรียงข้อมูลจากน้อยไปมาก",
                        "sSortDescending": ": เปิดให้เรียงข้อมูลจากมากไปน้อย"
                    }

                }
            });
        });
    </script>
</body>

</html>