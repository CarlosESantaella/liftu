<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
    
    use App\Publications;
    $publicationsM = new Publications;

    $id = $_POST['id'];

    $publication = $publicationsM->get_publication_id($id);

    // $response = new stdClass();
    // $response->title = $publication->title;

    echo json_encode($publication);