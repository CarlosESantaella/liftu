<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
    use App\Publications;
    $publicationsM = new Publications;

    $limit_10 = (isset($_POST['limit-10']))? 'true' : 'false';


    if($limit_10 == 'true'){
        $publicationsM->configuration_activate();
        setcookie('limit_10', 'true', time() + (86400 * 30), "/");
    }else{
        $publicationsM->configuration_desactivate();
        setcookie('limit_10', 'true', time() + (86400 * 30), "/");
    }

    header('location: '.$_SERVER['HTTP_REFERER']);


