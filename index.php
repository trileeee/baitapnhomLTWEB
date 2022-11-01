
<?php
    session_start();
    include "config.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Project</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
         <link rel="stylesheet" href="css/css.css">

         <style>
            body {
                display: flex;
                flex-direction: column;

            }

            main {
                flex: 1;
               
            }

            a {
                text-decoration: none;
                color: inherit;
            }
         </style>
    </head>

    <body>
        <header>
            <?php include "layout/header.php"; ?>
        </header>

        <main>
            <section class="container-fluid">
                
                <?php include "layout/menutop.php";?>

                <?php 
                    if(isset($_SESSION["User_name"])){
                    echo ("Xin chào ").$_SESSION["User_name"];
                    }
                 ?>

                <?php include "views/product.php"; ?>
                <section class="container-fluid">
                    
                    <?php include "layout/content.php";?>
                
                    
                </section>
                
            </section>
        </main>

       <footer>
            <?php include "layout/footer.php";?>
       </footer>
        

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>