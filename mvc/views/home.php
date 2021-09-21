<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/style.css">
    <title>Quan li sinh vien</title>
    <base href="http://localhost/LearnMVC/BaiQLSVMVC/">
</head> 
<body>
    <div class="taskbar">
        <?php
            require_once("taskbar.php");
        ?>
    </div>
    <div class="table-data">
        <?php
            require_once("./mvc/views/pages/".$data["pages"].".php");
        ?>
    </div>
</body>
</html>