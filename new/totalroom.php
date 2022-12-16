<?php  
$query = "SELECT * FROM `roomdetails`";
    $data = mysqli_query($dbc, $query);
    while($row = mysqli_fetch_array($data))
    {
        if(isset($fin2)){
            $fin = $fin2;
        } else {
            $price = str_replace('$', '', $row['row']);
            $fin2 = ($row['colmn'] * $price + $fin);                 
        }
        if(isset($fin)){
        $fin = ($fin + $fin2);
        echo $fin;
        }

    ?>