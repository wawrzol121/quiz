<?php 
$conn = mysqli_connect(
'localhost', 
    'root', 
    '', 
    'mydb' 
);

$checkbox= $_POST['zaznaczone']

$sql ="INSERT INTO `pytania`(id,id_pytania ,pytanie,odpowiedz_idodpowiedzi) VALUES ('',1,pytanie,odpowiedz_idopodiwedzi)";
$result= $conn->query($sql);
echo $result;

mysqli_close($conn);

?>
