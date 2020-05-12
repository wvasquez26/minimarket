<?php

    require_once '../model/modelo/categorias.modelo.php';

    $objCategoriasM = new CategoriasModelo();

    if(isset($_GET["operacion"])){

        if($_GET["operacion"] == "listarcategoriascant"){

            $idfamilia = isset($_GET["idfamilia"]) ? $_GET["idfamilia"] : null;
            $idfamilia = $idfamilia != 0 ? $_GET["idfamilia"] : null;



            $datos = $objCategoriasM->ListarCategoriasCant($idfamilia);

            //echo json_encode($datos);
            foreach($datos as $fila){

                
                echo "<div class='input-checkbox'>";
                echo "  <input type='checkbox' id='category-{$fila->nombre_categoria}'>";
                echo "      <label for='category-{$fila->nombre_categoria}'>";
                echo "          <span></span>";
                echo "              {$fila->nombre_categoria}";
                echo "          <small>({$fila->cantidad})</small>";
                echo "      </label>";
                echo "</div>";

            }

            

        }

    }

?>