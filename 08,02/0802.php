
$students = array(
        array('Anna','Nowak','Poznan',20),
        array('Anna','Nowak',20),
        array('Anna','Nowak','Poznan',20, 170)
    );

    for($i=0;$i < count($students);$i++){
        for($j=0;$j < count($students[$i]);$j++){
            echo $students[$i][$j]," " ;
        }
        echo '<br>';
    }




foreach($students as $i => $val){
        foreach($students[$i] as $j){
            echo $j," ";
        }
        echo '<br>';
    }