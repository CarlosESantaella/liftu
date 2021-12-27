<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    use App\Publications;
    $configurationM = new Publications;
    $flag_option = false;
    $flag_config = '';

    $configuration = $configurationM->get_configuration();
    $flag_config = ($configuration['limit_publi'] == 1)? 'activado' : 'desactivado';

    if(isset($_COOKIE['limit_10'])){
        if($_COOKIE['limit_10'] == 'true'){
            $flag_option = true;
            setcookie('limit_10', 'false', time() - 60, "/");
        }
    }

    include($_SERVER['DOCUMENT_ROOT'].'/views/Dash_configuration_view.php');
?>