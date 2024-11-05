<?php

if(isset($_POST['sum'])) {
$name = $_POST['name'];
$lastN = $_POST['Lname'];
$homeNum = $_POST['numH'];
$jung = $_POST['pro'];
$aum = $_POST['aum'];
$tum = $_POST['tum'];
$pass = $_POST['pass'];
$phone = $_POST['phoneNum'];
$date = $_POST['date'];


$name2 = $_POST['name2'];
$lastN2 = $_POST['Lname2'];
$homeNum2 = $_POST['numH2'];
$jung2 = $_POST['pro2'];
$aum2 = $_POST['aum2'];
$tum2 = $_POST['tum2'];
$pass2 = $_POST['pass2'];
$phone2 = $_POST['phoneNum2'];
$date2 = $_POST['date2'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
        min-height: 100vh;
        position: relative;
    }

    .envelope-container {
        position: relative;
        width: 100%;
        height: 100vh;
        background-color: #fff;
        padding: 20px;
        border: 2px solid #888;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    .con {
        position: absolute;
        top: 30px;
        left: 30px;
        width: 350px;
        padding: 15px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .recipient {
        position: absolute;
        bottom: 30px;
        right: 30px;
        width: 350px;
        padding: 15px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    h2 {
        color: #333;
        text-align: center;
        margin-bottom: 15px;
        padding-bottom: 5px;
        border-bottom: 2px solid #eee;
    }

    .address {
        padding: 10px;
        background-color: #fafafa;
        border: 1px solid #eee;
        border-radius: 4px;
    }

    p {
        margin: 5px 0;
        line-height: 1.4;
        color: #444;
    }

    /* Optional: Add some hover effects */
    .con:hover, .recipient:hover {
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        transform: translateY(-2px);
        transition: all 0.3s ease;
    }
</style>
</head>
<body>
<div class="envelope-container">
<div class="con">
    <h2>ผู้ส่ง</h2>
    <div class="address">
        <p><?php echo $date; ?></p>
        <p><?php echo $name . ' ' . $lastN; ?></p>
        <p><?php echo $homeNum; ?></p>
        <p><?php echo $tum . ' ' . $aum; ?></p>
        <p>จังหวัด <?php echo $jung; ?></p>
        <p>โทร: <?php echo $phone; ?></p>
        <p>รหัสไปรษณีย์: <?php echo $pass; ?></p>
    </div>
</div>

<div class="recipient">
    <h2>ผู้รับ</h2>
    <div class="address">
        <p><?php echo $date2; ?></p>
        <p><?php echo $name2 . ' ' . $lastN2; ?></p>
        <p><?php echo $homeNum2; ?></p>
        <p><?php echo $tum2 . ' ' . $aum2; ?></p>
        <p>จังหวัด <?php echo $jung2; ?></p>
        <p>โทร: <?php echo $phone2; ?></p>
        <p>รหัสไปรษณีย์: <?php echo $pass2; ?></p>
    </div>
</div>
</div>
</body>
</html>