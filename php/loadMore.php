<?php

      require_once('connect.php');

      $kol = $_POST['kol'];
      $tek = $_POST['tek'];

      $recipe = mysqli_query($connect, "SELECT * FROM `recipe`");
      $recipe = mysqli_fetch_all($recipe);

      if($tek < 20){
      for($i = $tek; $i<($tek+$kol); $i++){
            $massage[$i] = array(
                  'id_recipe' => $recipe[$i][0],
                  'name_recipe' => $recipe[$i][2], 
                  'user_recipe' => $recipe[$i][4]
            );
      }    
      echo json_encode($massage);
      }
      else{return false;}

?>