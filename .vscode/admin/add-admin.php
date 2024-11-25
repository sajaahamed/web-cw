<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>manage admin</title>
</head>
<body>
    <div class="nav" >
        <img src="hd_restoration_result_image.png" class="nav-logo" alt="">
        <div class="nav-link">
            <a href="home.php" style="padding: 2px;">Home</a>
            <a href="admin.php"style="padding: 2px">Admin</a>
            <a href="shoe.php" style="padding: 2px;">Shoes</a>
            <a href="category.php"style="padding: 2px;" >Catogory</a>
            <a href="order.php"style="padding: 2px;" >Orders</a>
        </div>
    </div>
    <div class="mn-cont">
        <div class="dsh">
            <h1>Add Admin</h1>
            <form action="" method="POST">
            <table class="tbl-2nd">
                <tr>
                    <td>Full Name:  </td>
                    <td><input type="text" name="fullname" placeholder="Enter your Name"></td>
                </tr>

                <tr>
                    <td>User Name:  </td>
                    <td><input type="text" name="usname" placeholder="Enter your User Name"></td>
                </tr>

                <tr>
                    <td>Email:  </td>
                    <td><input type="text" name="mail" placeholder="Enter your Email"></td>
                </tr>

                <tr>
                    <td>Password:  </td>
                    <td><input type="text" name="password" placeholder="Enter your Password"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Addmin"class="btn-scnd" >
                    </td>
                </tr>
            </table>
        </form>
        </div>


    </div>
     <!--footer-->
     <div class="footer">
        <p style="text-align: center;padding: 20px; font-size: 15px;">@Copyright 2024 <a href="">tec.com</a> </p>
     </div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $fnm=$_POST['fullname'];
    $unm=$_POST['usname'];
    $eml=$_POST['mail'];
    $pwd=$_POST['password'];

    $sql="INSERT INTO tbl_admin SET full_name='$full_name'
    ";
}
?>