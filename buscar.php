<?php
      $buscar = $_POST['b'];
        
      if(!empty($buscar)) {
            buscar($buscar);
      }
        
      function buscar($b) {
            $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con,"proyecto");
        
            $sql = mysqli_query($con,"SELECT * FROM jugadores WHERE nombre LIKE '%".$b."%' LIMIT 10");
              
            $contar = @mysqli_num_rows($sql);
              
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{
              while($row=mysqli_fetch_array($sql)){
                $nombre = $row['nombre'];
                $dorsal = $row['dorsal'];
                echo "<strong>Nombre: </strong>"."<a href='https://es.wikipedia.org/wiki/$nombre'>".$nombre."</a>"."<br><strong>Dorsal: </strong>".$dorsal."</a>"."<br />";
            }
        }
  }
        
?>