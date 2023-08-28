<?php 
#kiểm tra kết quả truy vấn đăng nhập
SESSION_START();

if(isset($_SESSION['auth']))
{
    if($_SESSION['auth']==1)
    {
        header("location:home.php");
    }
}

#xử lý kết nối csdl và xử lý đăng nhập
include "lib/connection.php";
    if (isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $pass = ($_POST['password']);
        echo $email;
        echo $pass;

        $loginquery="SELECT * FROM admin WHERE userid='$email' AND pass='$pass'";
        $loginres = $conn->query($loginquery);
#in ra số lượng hàng/ dòng từ kq truy vấn
        echo $loginres->num_rows;

        if ($loginres->num_rows > 0) 
        {

            while ($result=$loginres->fetch_assoc()) 
            {
                $username=$result['userid'];
            }

            $_SESSION['username']=$username;#lưu
            $_SESSION['auth']=1;
            header("location:home.php");
        }
        else
        {
            echo "invalid";
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<body>
    <div id="rootA">
        <div class="mainA"></div>
        <div class="formA">
            <div class="tieudeA">
                <h4>ĐĂNG NHẬP KINGDANA</h4>
            </div>
            <div class="imgA"> <img
                    src="https://kingdana.vn/wp-content/uploads/2020/06/1-1.png"
                    alt=""></div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="input-group form-group">
                        <input type="text" class="HOVATENA" placeholder="username" name="email">
                        
                    </div>
                    <div class="input-group form-group">
                        <input type="password" class="MATKHAUA" placeholder="password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="GUIA" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>