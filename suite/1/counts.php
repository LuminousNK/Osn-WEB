<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style2.css">
</head>

<body>
        <?php
        $id = $_GET['product_id'];
        if ($id == 1) {
            require('header2.php');
            require('l1.php');
        }
        elseif($id == 2) {
            require('header2.php');
            require('l2.php');
        }
        elseif($id == 3) {
            require('header2.php');
            require('l3.php');
        }
        ?>
</body>

</html>