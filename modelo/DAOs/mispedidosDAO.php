<?php

function buscarPedidosUsuario( $id_usuario ){
        $conexion = getConexion();

        // $consulta = "SELECT * " . 
        //           "FROM donaciones " . 
        //           "WHERE id_receptor = " . $id_usuario;
//

$consulta = "SELECT * FROM donaciones, publicaciones, usuarios " . 
				"WHERE publicaciones.id = donaciones.id_publicacion "  . 
				"AND donaciones.id_receptor = " . $id_usuario .
				" AND donaciones.id_usuario = usuarios.id"; 






        $resultado = $conexion->query( $consulta );

        return $resultado;
    }