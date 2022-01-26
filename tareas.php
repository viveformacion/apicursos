<?php
/* Fichero de tareas a realizar.
 * 
 * 
 * Con el switch al final y variable $pulsado
 * 
 *  */
/* ===============  REALIZAMOS CONEXIONES  ===============*/


$pulsado = $_POST['pulsado'];
$respuesta = array();
switch ($pulsado) {
    
    case 'htmlTemario':
        $seleccionado = $_POST['seleccionado'];
        $item = $_POST['item'];
        $html = '<div id="item-'.$item.'">'
                .'<div class="row">'
                .'<div class="col">'
                .'<input class="btn btn-info" type="button" onclick="AnhadirUnidades('.$item.')" value="Añadir Unidades">'
                .'<input class="btn btn-warning" type="button" onclick="EliminarModulo('.$item.')" value="ELiminar Modulo">'
                .'</div>'
                .'</div>'
                .'<div class="row">'
                .' <div class="col">'
                .'    <label>Cod.Modulo</label>'
                .'    <input id="cod_tema" type="text" name="cod_tema" placeholder="Codigo del tema">'
                .' </div>'
                .' <div class="col">'
                .'  <label>Horas Modulo</label>'
                .'  <input type="number" name="horasModulo" class="form-control" placeholder="Horas modulo">'
                .' </div>'
                .'</div>'
                .'<div class="row">'
                .' <div class="col">'
                .' <label>Prefijo Modulo</label>'
                .' <input id="Titulo_modulo" type="text" name="titulo_modulo" placeholder="Titulo Modulo" value="'.$seleccionado.'">'
                .' </div>'
                .' <div class="col">'
                .'  <label>Descripcion del modulo/tema</label>'
                .'  <input id="Titulo_modulo" type="text" name="titulo_modulo" placeholder="Titulo Modulo">'
                .' </div>'
                .'</div>'
                .'<div id="unidad">'
                .'</div>'
                .'</div>';
        $respuesta['html'] = $html;



	break;	
	
    
    
    case 'accion3':
       
    break;
    
    

    case 'accion2':
        
    break;

}
echo json_encode($respuesta);

 
 
?>