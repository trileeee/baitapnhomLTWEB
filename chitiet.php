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
                font-size: 24px;
                text-align: right;
                width: 100%;
            }
            .right td{
                text-alignn: right;
            }
            
       </style>  
    </head>
    <body>
        <?php
        include 'config.php';
        $id= $_GET["id"];
        $sql="SELECT*FROM product WHERE id= $id";
        $result = mysqli_query($conn,$sql);
      //  if(msqli_num_rows($result)>0) {
            $row=mysqli_fetch_assoc($result);
                while ($row)   
                    {
                        ?>   <table>
                        <tr>
                            <td class ="img_product" >
                                <img src="img/<?php echo $row['img']?>"/>
                                </td>

                                <td >

                                               <b class="product_details"> <?php echo $row['product_name']?></b> </br>
                                               <p class ="product_details"><?php echo $row['uses']?></p></br>
                                               <p class ="product_details"><?php echo $row['component']?></p></br>
                                               <p class ="product_details"><?php echo $row['technology']?></p></br>
                                               <p class ="product_details"><?php echo $row['origin']?></p></br>
                                                <div class="line_1"> </div> </br>                        
                        
                                            </td>
                        </tr>
                        <tr class="right">
                                <td> 
                                        <b class ="product_details"> <?php echo $row['price']?></b></br>
                                </td>
                        </tr>
               <?php } 
                    //} ?> 
        
        
       

        </body>
        </html>