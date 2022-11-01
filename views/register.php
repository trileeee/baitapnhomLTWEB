<?php
     //Sau khi Client bấm submit thì request cho Server xử lý backend rồi Server reponse lại cho Client
        If(!empty($_POST))
        {   
            $user_name=$_POST["user_name"];
            $pass=$_POST["pass"];
            $email=$_POST["email"];
            $phoneNumber=$_POST["phoneNumber"];
            $birthdate=$_POST["birthdate"];
            
            require_once("../config.php");
         
           // Kiểm tra các ràng buộc
            $error=0; // 1: Trùng Email 2
            $sql= "Select * From user where Email='$email'";
            $result = mysqli_query($conn, $sql);
       
             if (mysqli_num_rows($result) >0) 
                {
                    $error=1;
                    echo "<script> alert('Email này đã được đăng kí! Vui lòng nhập lại email khác');  </script>";
                    
                }
            
            If ($error==0) {    
             //Thêm csdl
            $sql="Insert into user (Username,Password,Email,PhoneNumber,Date)
                values('$user_name','$pass','$email','$phoneNumber','$birthdate')";
            $result=mysqli_query($conn,$sql);

                if ($result>0)
                    {
                    
                    echo "<script> 
                                  if(confirm('Tạo Tài khoản thành công') ==true)
                                  {
                                      
                                      location.href='login.php';
                                  }
                                  else
                                     text='You canceled'; 
                       </script>";
                              
                                
                  
                    }
                else echo (mysqli_error($conn));
            } 
            

        }
    if((empty($_POST)) || (!empty($_POST))) {  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       <style>
        *,
        *:before,
        *:after{
            box-sizing: border-box;
            font-family:"Poppins",sans-serif;
        }
          body{
            height:100vh;
            background: #FAB6A5;
          }
          form{
            background-color: #ffffff;
            width: 450px;
            padding: 50px 40px;
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 8px;
            box-shadow: 20px 20px 30px rgba(0,0,0,0.15);
          }
          legend{
            font-weight: bold;
            font-size:large;
          }
          input{
            width:100%;
            margin-top:5px;
            padding: 12px;
            border-radius: 5px;
            outline: none;
            color: #101010;
          }
          input[type="submit"]{
            background-color:#7f3fff;
            border:none;
            color:#ffffff;
            font-weight:500;
            font-size: 18px;
            letter-spacing:1px;
            cursor:pointer;
            margin-top:20px;
          }
        </style>

      </head>
<body>
    
    <form name="form" method="post" action="Register.php">
       
            <legend><center>Đăng kí tài khoản</center></legend>
           <p> <input type="text" name="user_name" <?php 
                    If(isset($user_name)) { ?>
             value= <?php echo $user_name; } ?>  placeholder="Username"  required>  </p> 
           
           <p>  <input type="password" name="pass" <?php 
                    If(isset($pass)) { ?>
             value= <?php echo $pass;} ?>  pattern=".{6,}" title="Mật khẩu cần bằng hoặc nhiều hơn 6 kí tự" placeholder="Password"  required></p> 
           
           
             <p> <input type="email" name="email" <?php 
                    If(isset($email)) { ?>
             value= <?php echo $email;} ?> placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="characters@characters.domain"  required></p> 
           
             <p> <input type="tel" name="phoneNumber" <?php 
                    If(isset($phoneNumber)) { ?>
             value= <?php echo $phoneNumber ;} ?> pattern="^0[0-9]{9,12}" title="Chưa đúng định dạng số điện thoại"  placeholder="Phone Number"  required></p> 
           
             <p><input type="date" name="birthdate"  <?php 
                    If(isset($birthdate)){ ?>
             value= <?php echo $birthdate ;} ?> required> <p>
           
             <input type="submit" value="Đăng kí">
        

    </form>
   
   
 <?php  } ?>
    
    
</body>
</html>

