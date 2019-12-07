<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include "_styles.php"; ?>
</head>
<body>
<?php include "_navbar.php";
include_once "con_db.php";
?>

<div class="container">
    <h1>Hello PHP</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">IsLock</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sth = $dbh->prepare("SELECT Id, Email, Phone, Image FROM `tbl_users`");
        $sth->execute();

        while($result = $sth->fetch(PDO::FETCH_ASSOC))
        {
            echo '
        <tr>
            <th scope="row"><img src ="'.$result["Image"].'" width="150"/></th>
            <td>'.$result["Email"].'</td>
            <td>'.$result["Phone"].'</td>
        </tr>
        ';
        }
        ?>
        </tbody>
    </table>
    <?php
    echo "<h2>Hello Peter</h2>";
    $a = 5;
    $b = 23;
    $c = $a + $b;
    ?>
</div>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>