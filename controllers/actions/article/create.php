<?php

    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();

    use App\Articles;

    $artM = new Articles;

    $fileName = NULL;

    if(isset($_FILES['image'])){
        $fileName = $_FILES['image']['name'];

        $name = pathinfo($fileName, PATHINFO_FILENAME);
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        $fileName = $name.'_'.uniqid().'.'.$ext;
        $filePath = $_SERVER['DOCUMENT_ROOT'].'/assets/file/'.$fileName;
        if(move_uploaded_file($_FILES['image']['tmp_name'], $filePath)){

        }
    }

    $title = $_POST['title'];
    $type = $_POST['type'];
    $description_short = $_POST['description-short'];
    $description = $_POST['my-editor'];
    $link = $_POST['link'];
    // $region = $_POST['region'];
    $date = $_POST['create-date'];

    $artM->set_article($title, $type, $description_short, $description, $link, $fileName, $date);

    setcookie('createa', 'si', time() + (86400 * 30), "/");
    header('location: '.$_ENV['ROOT'].'/dashboard/create-article');
?>