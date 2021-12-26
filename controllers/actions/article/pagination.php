<?php
require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

use App\articles;
$articlesM = new Articles;

if(isset($_POST["query"])){
    $query = $_POST["query"];
}else{
    $query = '';
}

$articlesHTML = '';
$paginationHTML = '';

$articles = $articlesM->get_articles();

$num_total_rows = $articlesM->count_articles_query($query);
define('NUM_ITEMS_BY_PAGE', 9);

if ($num_total_rows > 0) {
    $page = false;
 
    //examino la pagina a mostrar y el inicio del registro a mostrar
    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    }
    //examinar query
    // if(isset($_POST["query"])){
    //     $query = $_POST["query"];
    // }
 
    if (!$page) {
        $start = 0;
        $page = 1;
    } else {
        $start = ($page - 1) * NUM_ITEMS_BY_PAGE;
    }

    //calculo el total de paginas
    $total_pages = ceil($num_total_rows / NUM_ITEMS_BY_PAGE);
 
    //pongo el numero de registros total, el tamano de pagina y la pagina que se muestra
    // echo '<h3>Numero de articulos: '.$num_total_rows.'</h3>';
    // echo '<h3>En cada pagina se muestra '.NUM_ITEMS_BY_PAGE.' articulos ordenados por fecha en formato descendente.</h3>';
    // echo '<h3>Mostrando la pagina '.$page.' de ' .$total_pages.' paginas.</h3>';
 
    $results = $articlesM->get_articles_query($query, $start, NUM_ITEMS_BY_PAGE);

    $articlesHTML = '';
    $paginationHTML = '';

        // echo '<ul class="row items">';
        // foreach ($results as $row) {
        //     echo '<li class="col-lg-4">';
        //     echo '<div class="item">';
        //     echo '<h3>'.$row['title'].'</h3>';
        //     echo '</div>';
        //     echo '</li>';
        // }
        // echo '</ul>';
        foreach($results as $article): 
            $articlesHTML .= '<div class="col-sm-6 col-lg-4">';
            $articlesHTML .= '<a href="#">';
            
            $articlesHTML .= '<div class="container-blog">';
            $articlesHTML .= "<figure style=\'background-image: url(\'{$_ENV['ROOT']}/assets/file/{$article['image']}\')\'>";

            $articlesHTML .= '</figure>';
            $articlesHTML .= '<div class="">';
            $articlesHTML .= "<h3>{$article['title']}</h3>";
            $articlesHTML .= '</div>';
            $articlesHTML .= '</div>';
            $articlesHTML .= '</a>';
            $articlesHTML .= '</div>';
        endforeach;
 
 
    if ($total_pages > 1) {
        
        $disabled = (($page - 1) == 0)? 'disabled' : '';
        $paginationHTML .= '<li class="page-item '.$disabled.'"><a class="page-link" href="#" data-page="'.($page-1).'"><span aria-hidden="true">&laquo;</span></a></li>';
 
        $count = 1;
        $page_init = (($page - 2) <= 0)? 1 : ($page - 2);

        for ($i=$page_init;$i<=$total_pages;$i++) {

            if($count == 6) break;

            if ($page == $i) {
                $paginationHTML .= '<li class="page-item active"><a class="page-link" href="#" data-page="'.$page.'">'.$page.'</a></li>';
            } else {
                $paginationHTML .= '<li class="page-item"><a class="page-link" href="#" data-page="'.$i.'">'.$i.'</a></li>';
            }

            $count++;

        }
 
        $disabled = ($page != $total_pages)? '' : 'disabled';
        $paginationHTML .= '<li class="page-item '.$disabled.'"><a class="page-link" href="#" data-page="'.($page+1).'"><span aria-hidden="true">&raquo;</span></a></li>';
        
    }
}
$results = new stdClass();
$results->content = $articlesHTML;
$results->pagination = $paginationHTML;

$JSON_result = json_encode($results);
echo $JSON_result;