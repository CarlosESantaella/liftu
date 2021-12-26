<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createimmutable($_SERVER['DOCUMENT_ROOT']);
    $dotenv->load();
    
    use App\Articles;
    $articlesM = new Articles;

    $articles = $articlesM->get_articles();

    require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $articles = $articlesM->get_articles();

    $num_total_rows = $articlesM->count_articles_query('');
    define('NUM_ITEMS_BY_PAGE', 9);

    if ($num_total_rows > 0) {
        $page = false;
     
        //examino la pagina a mostrar y el inicio del registro a mostrar
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
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
        
        $query = '';
        $results = $articlesM->get_articles_query($query, $start, NUM_ITEMS_BY_PAGE);
   
            // echo '<ul class="row items">';
            // foreach ($results as $row) {
            //     echo '<li class="col-lg-4">';
            //     echo '<div class="item">';
            //     echo '<h3>'.$row['title'].'</h3>';
            //     echo '</div>';
            //     echo '</li>';
            // }
            // echo '</ul>';
    
     
        // echo '<nav>';
        // echo '<ul class="pagination">';
     
        // if ($total_pages > 1) {
        //     if ($page != 1) {
        //         echo '<li class="page-item"><a class="page-link" href="index.php?page='.($page-1).'"><span aria-hidden="true">&laquo;</span></a></li>';
        //     }
     
        //     for ($i=1;$i<=$total_pages;$i++) {
        //         if ($page == $i) {
        //             echo '<li class="page-item active"><a class="page-link" href="#">'.$page.'</a></li>';
        //         } else {
        //             echo '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';
        //         }
        //     }
     
        //     if ($page != $total_pages) {
        //         echo '<li class="page-item"><a class="page-link" href="index.php?page='.($page+1).'"><span aria-hidden="true">&raquo;</span></a></li>';
        //     }
        // }
        // echo '</ul>';
        // echo '</nav>';
    }

    include($_SERVER['DOCUMENT_ROOT'].'/views/Blog_view.php');

?>