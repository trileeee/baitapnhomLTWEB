<article class ="col-12">
    
    <?php if(isset($_GET['request']))
    {
        switch($_GET['request']){
            case 'home':
                include "views/home.php";
                break;              
        }
    }?>

</article>