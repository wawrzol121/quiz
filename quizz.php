
<html> 
<head>
    <meta charset="UTF-8">
    <title>quiz</title>
    <link rel="stylesheet" href="style2.css">
</head>
<header>
<p> Quiz szkolnych </p>

</header>
<body>
    <div class="php"></div>
  <?php
 $db = new mysqli("localhost", "root", "", "mydb");

        $sql= 'SELECT * FROM mydb';

    $res = $db -> query("SELECT id, pytanie FROM pytania WHERE id=$idpytania");
    $row = $res -> fetch_all(MYSQLI_ASSOC);
    
   
     $sqlpytanie = "SELECT id, pytanie FROM pytania WHERE id = ".$randpytanie.";";
    if($respytanie = $db->query($sqlpytanie)){
        while($rowpytanie = $respytanie->fetch_assoc()){
            echo "<div class='question'>".$rowpytania["question"]."</div>";
            echo "<div style='clear: both;'></div>";
        }
    }
    ?>
    
    
    
    
   
    
</body>
</html>