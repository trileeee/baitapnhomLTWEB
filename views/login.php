<?php
    session_start();
        If(!empty($_POST))
        {   
            //echo "<pre>";
            //print_r($_POST);
            //die;
            
            $email=$_POST["email"];
            $pass=$_POST["pass"];
            
            //kiểm tra người dùng có tick vào remember không?
            if(isset($_POST["remember"])){
                //tạo cookie
                setcookie("email",$email);
                setcookie("password",$pass);
            }
                 
            require_once("../config.php");
         
           // Thông báo lỗi sai tài khoản/ mật khẩu cho user
           function checkError ($conn,$email,$pass) // // 0: Đăng nhập thành công , 1: Sai email, 2:Sai mật khẩu
            {   
                $error=0; 
                $sql= "Select * From user where Email='$email'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) ==0) 
                    {
                        return $error =1;
                    }
                $sql= "Select * From user where Email='$email' and Password='$pass'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) ==0)
                    {
                       return $error=2;
                    }
                return $error;
            }
            
            
            //Kiểm tra và thông báo ra màn hình
            if (checkError($conn,$email,$pass)==1)
                {
                    echo "<script> alert  ('Email này không trùng khớp với tài khoản nào!') </script>";
                }
            else if (checkError($conn,$email,$pass)==2)
                {
                    echo "<script> alert  ('Sai mật khẩu!') </script>";
                }
            else
                {
                    echo "<script> alert  ('Đăng nhập thành công') </script>";
                }
           
          // SESSION
          $sql= "Select * From user where Email='$email' and Password='$pass'";
          $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) >0){
                  $row =mysqli_fetch_assoc($result);
                  
                  
                  $_SESSION["email"]=$row["Email"];
                  $_SESSION["pass"]=$row["Password"];
                  $_SESSION["User_name"]=$row["Username"];

                  mysqli_close($conn);
                  header("location: ../index.php");
                  exit();
          }

        }

        //COOKIE
        $email="";
        $pass="";
        $check = false;
        if(isset($_COOKIE["email"]) && isset($_COOKIE["password"])){
            $email = $_COOKIE["email"];
            $pass = $_COOKIE["password"];
            $check = true;
        
    }


    if((empty($_POST)) || (!empty($_POST))) {  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <style> 
        body {
            background: #FAB6A5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        *{
            font-family: sans-serif;
            box-sizing: border-box;
        }

        form {
            width: 500px;
            border: 2px solid #ccc;
            padding: 30px;
            background: #fff;
            border-radius: 15px;
            text-align: center;
        }

        input {
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
        }
        button {
            float: right;
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
        }

        button:hover{
            opacity: .7;
        }
        .error {
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
        }
        </style>
    </head>
<body>
    
    <form name="form" method="post" action="login.php">
      
            <legend>ĐĂNG NHẬP TÀI KHOẢN</legend>
           
            <p><input type="email" name="email" value="<?php echo $email ?>"
            placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="characters@characters.domain"  required></p>
           
            <p><input  type="password" name="pass" value="<?php echo $pass ?>"
            placeholder="Password"  required></p> 
            
            <label for= "remember"> Lưu thông tin đăng nhập </label>
            <input <?php echo ($check)?"checked":"" ?> type="checkbox" name="remember" value="1">
            
            <p><input type="submit" name="login" value="LOGIN"></p>
           
            <center><p>Đăng ký nếu bạn chưa có tài khoản! <a href=register.php> Sign Up </a></p></center>
    </form>
   
   <?php } ?>

    
    
</body>
</html>
