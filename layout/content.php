<article class ="col-12">
    <?php if(isset($_GET['request']))
    {
        switch($_GET['request']){
            case 'home':
                include "views/home.php";
                break;
            case 'login':
                include "views/login.php";
                break;
            case 'register':
                include "views/register.php";
                break;
        }
    }?>

</article>