 <?php
      require_once "config.php";
    $sql="select*from product";
    $result=mysqli_query($conn,$sql);

 ?>
 
 <section class="container-fluid">
  
  
     <?php foreach($result as $rs): ?>
        <section class="col-md-5 product">
            <section class="img">
                <img src = "img/<?=$rs['img']?>" width="100%">
            </section>
            <secsion>
                <?=$rs['product_name']?>
            </section>
           
        </section>
    <?php endforeach;?>
    
 </section>