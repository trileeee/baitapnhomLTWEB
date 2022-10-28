
<!Doctype hmtl>
<html>
<head>
    <meta charset="UTF-8">
</head>
    <body>
    <h1> Danh sách môn học </h1>
<table border="1" width="30%">
    <thead>
            <tr>
                <th>Mã môn</th>
                <th>Tên môn</th>
                <th>Chi tiết</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'databaseCourse.php';
            foreach($arrCourse as $k => $v) 
                 { ?>
                    <tr>
                        <td><?php echo $k?></td>
                        <td><?= $v['name']?></td>
                        <td><?= "<a href=http://localhost/quanlycourse/detail-course.php?id=" .$k.">Xem chi tiết</a>" ?></td>
                        
                <?php } ?>
        </tbody>
</table>

    </body>
</html>