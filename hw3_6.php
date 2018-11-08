<?
  $titleText = "This is title";
  $dateNow = date("d/m/Y");
  $timeNow = date("H:i:s");
  $h1Text = "Wellcome! Current date: $dateNow , and Current time: $timeNow";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="content-type">
    <title><? echo $titleText?></title>
</head>
<body>

    <h1><? echo $h1Text?></h1>
    <ul>
    <?
//Создаем массивы
      $liArr = array();
      $liArr[0] = "home";
      $liArr[1] = "archive";
      $liArr[2] = "contact";

      $liHomeArr = array();
      $liHomeArr[0] = "home1";
      $liHomeArr[1] = "home2";
      $liHomeArr[2] = "home3";

      $liarchiveArr = array();
      $liarchiveArr[0] = "archive1";
      $liarchiveArr[1] = "archive2";
      $liarchiveArr[2] = "archive3";

      $licontactArr = array();
      $licontactArr[0] = "contact1";
      $licontactArr[1] = "contact2";
      $licontactArr[2] = "contact3";

//Выводим список Home, Archive, Contact
      foreach($liArr as $key => $value ){
        echo "<li><a href=".$key.">".$value."</a></li>";
      }

  echo "</ul>";
//Выводим многоуровневый список
  echo "<ul>";

      foreach($liArr as $key => $value ){
        echo "<li><a href=".$key.">".$value."</a></li>";
//Выводим список на уровень ниже Home
        if ($key == 0){
          echo "<ul>";
          foreach($liHomeArr as $key1 => $value1 ){

            echo "<li><a href=".$key1.">".$value1."</a></li>";
          }
          echo "</ul>";
        }
        //Выводим список на уровень ниже $archive
        if ($key == 1){
          echo "<ul>";
          foreach($liarchiveArr as $key2 => $value2 ){

            echo "<li><a href=".$key2.">".$value2."</a></li>";
          }
          echo "</ul>";
        }
        //Выводим список на уровень ниже contact
        if ($key == 2){
          echo "<ul>";
          foreach($licontactArr as $key3 => $value3 ){

            echo "<li><a href=".$key3.">".$value3."</a></li>";
          }
          echo "</ul>";
        }
      }
    ?>
    </ul>
    <!-- <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">archive</a></li>
        <li><a href="#">contact</a></li>
    </ul> -->
    <div class="post">
        <div class="detail">
            <h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
            <p class="info">posted 3 hours ago in <a href="#">general</a></p>
        </div>
        <div class="body">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        </div>
        <div class="x"></div>
    </div>
    <div class="col">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>&not; <a href="#">read more</a></p>
    </div>
    <div class="col">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>&not; <a href="#">read more</a></p>
    </div>
    <div class="col last">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>&not; <a href="#">read more</a></p>
    </div>
    <div id="footer">
        <p>Copyright &copy; <em>mini</em> &middot; Design: <a href="#">...</a><span><?=$dateNow?></span> </p> <!--Выводим текущую дату в футер  -->
    </div>


</body>
</html>
