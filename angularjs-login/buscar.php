<?php
      $buscar = $_POST['b'];
        
      if(!empty($buscar)) {
            buscar($buscar);
      }
        
      function buscar($b) {
            $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con,"betbuilder");
            $sql = mysqli_query($con,"SELECT * FROM jugadores WHERE alias LIKE '%".$b."%' LIMIT 10");
              
            $contar = @mysqli_num_rows($sql);
              
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{
              while($row=mysqli_fetch_array($sql)){
                $nombre = $row['alias'];
                $dorsal = $row['dorsal'];
                $posicion = $row['posicion'];
                $precio = $row['precio'];
                $puntuacion = $row['puntuacion'];
                $equipo = $row['id_equipo'];
                echo utf8_decode("<br><strong>Nombre: </strong>"."<a href='https://es.wikipedia.org/wiki/$nombre'>".$nombre.
                "</a>"." --- <strong>Dorsal: </strong>".$dorsal."</a>"." --- <strong>Posición: </strong>".$posicion." --- <strong>Precio: </strong>".$precio.
                " --- <strong>Puntuación: </strong>".$puntuacion." --- <strong>Equipo: </strong>".$equipo."</br>");
            }
            /* Cambiar acentuacion */
            /* https://www.gestiweb.com/?q=content/problemas-html-acentos-y-e%C3%B1es-charset-utf-8-iso-8859-1 */
        }
  }
        
?>