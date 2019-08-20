<?php
include("nav.php")
?>   
<div class="container-fluid m-5">
      <div class="container-fluid">
        <div class="row">


<?php  
  include_once "config/config.php";  
  include_once PATH_HELPERS . '/database_helper.php';
  include_once PATH_DAOS . '/mispedidosDAO.php';
  include_once PATH_HELPERS .'/html_helper.php';




                    $pedidos = buscarPedidosUsuario($_SESSION["id_usuario"]); 



                    if ($pedidos){
                        foreach ($pedidos as $pedido) {

                            crearHTMLpedidosUsuario($pedido['producto'], $pedido['descripcion'] . "...", $pedido['img'], $pedido['nombre_usuario']);  

                    }
                  }
                    ?>


    </div>
  </div>
</div>

    <?php
      include("footer.php")
      ?>