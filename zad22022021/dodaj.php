<?php
$conn = mysqlli_connect('localhost,'root,'','','dane');
if(isset($_POST['tytuł'])&& isset($_POST['gatunek'])&& isset($_POST['rok'])isset($_POST['ocena'])){
    $tytuł = $_POST['tytuł']
    $gatunek=$_POST['gatunek']
    $rok = $_POST['rok']
    $ocena = $_POST['ocena']
        $sql = "INSERT INTO filmy(tytul, rok, gatunki_id, ocena) VALUES('$tytuł', '$rok', '$gatunek', '$ocena')";
    $zap= mysqli_query($conn,$sql);
    if($zap){
        echo "film ".$tytuł." został dodany do bazy";
        
    }
}
mysqli_close($conn);


?>