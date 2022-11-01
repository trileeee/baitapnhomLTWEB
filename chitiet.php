<?php
    if (isset($_GET["email"])) {
        if ($_GET["email"] == "") {
            echo "Vui lòng đăng nhập "."<a href='views/login.php'>tại đây</a>"." để xem chi tiết sản phẩm.";
            return;
        }
    }
?>

<html>
    <head>
       <style>
            .img_product img{
                width: 650px;
                height: 750px;
                padding: 80px 0px 50px 80px;
                object-fit: cover;
            }
            .product_details{
                font-family:Monospace;
                font-size: 24px;
                padding-top: 10px;
            }
            .line_1{
                height: 2px;
                background: black;
            }
            .product_price{
                font-size: 30px;
                text-align: middle;
                width: 100%;
            }
           
       </style>  
    </head>
    <body>
        <?php
        include 'config.php';
        
        $id= $_GET["id"];
        $sql="SELECT*FROM product WHERE id= '$id'";
        $result = mysqli_query($conn,$sql);
       
        //  if (mysqli_num_rows($result) >0) { 
            
                while ($row=mysqli_fetch_assoc($result))   
                    {
                        ?>   <table>
                        <tr>
                            <td class ="img_product" >
                                <img src="img/<?php echo $row['img']?>"/>
                                </td>

                                <td >

                                               <b class="product_details"> <?php echo $row['product_name']?></b> </br>
                                               <p class ="product_details"><?php echo "Công dụng: ".$row['uses']?></p></br>
                                               <p class ="product_details"><?php echo "Thành phần: ".$row['component']?></p></br>
                                               <p class ="product_details"><?php echo "Công nghệ: ".$row['technology']?></p></br>
                                               <p class ="product_details"><?php echo "Nguồn gốc: ".$row['origin']?></p></br>
                                                <div class="line_1"> </div> </br>                        
                                                <b class ="product_price"> <?php echo "Giá: ".$row['price']?></b></br>
                                            </td>
                        
               <?php } 
                    // } ?> 
        
                    
       

        </body>
        </html>
