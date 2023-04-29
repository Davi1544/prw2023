<?php
    $folder = $_POST['folder'];
    $nImg = $_POST['nImg'];

    echo "<table>";
    echo "<tr><th>Numero</th><th>Img</th></tr>";
    for($i = 1; $i <= $nImg; $i++){
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td><img src='$folder/$i.jpg' style='width: 150px; height: 100px;'></td>";
        echo "</tr>";
    }
    echo "</table>";
?>