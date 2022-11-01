 <?php
    require_once "config.php";
    $sql="select*from product";
    $result=mysqli_query($conn,$sql);
    
    if (isset($_SESSION["email"]))
        $email = $_SESSION["email"];
    else $email = "";
 ?>
 
 <section class="container-fluid">
  
  
     <?php foreach($result as $rs): ?>
        <section class="col-md-5 product">
            <a href="chitiet.php?id=<?php echo $rs['id'] ;?>&email=<?php echo $email; ?>" >
                <section class="img">   
                    <img src = "img/<?=$rs['img']?>" width="100%">
                </section>
                <section>
                    <?=$rs['product_name']?>
                </section>  
            </a>                                
        </section>
    <?php endforeach;?>
    
 </section>

