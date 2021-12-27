<?php
require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
use App\Publications;
$publicationsM = new Publications;


if(isset($_POST["query"])){
    $query = $_POST["query"];
}

$publicationsHTML = '';
$paginationHTML = '';

$num_total_rows = $publicationsM->count_publications_query($query);
define('NUM_ITEMS_BY_PAGE', 7);

if ($num_total_rows > 0) {
    $page = false;

    //examino la pagina a mostrar y el inicio del registro a mostrar
    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    }

 
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
 
    $results = $publicationsM->get_publications_query($query, $start, NUM_ITEMS_BY_PAGE);


        // echo '<ul class="row items">';
        // foreach ($results as $row) {
        //     echo '<li class="col-lg-4">';
        //     echo '<div class="item">';
        //     echo '<h3>'.$row['title'].'</h3>';
        //     echo '</div>';
        //     echo '</li>';
        // }
        // echo '</ul>';
        foreach($results as $publication): 
            $publicationsHTML .= '<div class="container-publication">';
            $publicationsHTML .= '<div>';
            $publicationsHTML .= '<h4 title="titulo completo">'.$publication['title'].'</h4>';
            $publicationsHTML .=  '<p>';
                    if($publication['region'] != ''): 
            $publicationsHTML .= '<span><i class="fas fa-map-marker-alt"></i>'.$publication['region'].'</span>';
                    endif; 
                    if($publication['type'] != ''): 
            $publicationsHTML .= '<span><i class="fas fa-briefcase"></i>'.$publication['type'].'</span>';
                    endif; 
                    if($publication['create_date'] != ''): 
            $publicationsHTML .= '<span><i class="fas fa-calendar-week"></i>'.$publication['create_date'].'</span>';
                    endif; 
            $publicationsHTML .= '</p>';
            $publicationsHTML .= '</div>';
            $publicationsHTML .= '<div class="">';
            $publicationsHTML .= '<button class="btn" data-bs-toggle="modal" data-id="'.$publication['id'].'" data-bs-target="#modalPublication">Ver</button>';
            $publicationsHTML .= '</div>';
            $publicationsHTML .= '</div>';
        endforeach;
 
 
    if ($total_pages > 1) {
        
        $disabled = (($page - 1) == 0)? 'disabled' : '';
        $paginationHTML .= '<li class="page-item '.$disabled.'"><a class="page-link" href="#" data-page="'.($page-1).'"><span aria-hidden="true">&laquo;</span></a></li>';
        
        $count = 1;
        $page_init = (($page - 2) <= 0)? 1 : ($page - 2);

        for ($i=$page_init;$i<=$total_pages;$i++){

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
$results->content = $publicationsHTML;
$results->pagination = $paginationHTML;

$JSON_result = json_encode($results);
echo $JSON_result;
