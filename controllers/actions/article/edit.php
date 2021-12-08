<?php

    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();

    use App\Articles;

    $artM = new Articles;

    $title = $_POST['title'];
    $type = $_POST['type'];
    $descriptionShort = $_POST['description-short'];
    $description = $_POST['my-editor'];
    $link = $_POST['link'];
    $id = $_POST['id'];
    $date = $_POST['create-date'];


    if(isset($_FILES['image'])){
        $fileName = $_FILES['image']['name'];
        $name = pathinfo($fileName, PATHINFO_FILENAME);
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        $fileName = $name.'_'.uniqid().'.'.$ext;
        $filePath = $_SERVER['DOCUMENT_ROOT'].'/assets/file/'.$fileName;
        if(move_uploaded_file($_FILES['image']['tmp_name'], $filePath)){
            $article = $artM->get_article_id($id);
            $fileOld = $article['image'];
            unlink($_SERVER['DOCUMENT_ROOT'].'/assets/file/'.$fileOld);
            $artM->update_article_id($title, $type, $description_short, $description, $fileName, $link, $date, $id);
        }

    }else{

        $artM->update_article_id_without_image($title, $type, $description_short, $description, $link, $date, $id);
    }


    setcookie('edita', 'si', time() + (86400 * 30), "/");
    header('location: '.$_ENV['ROOT']."/dashboard/edit-article/$id");
?>