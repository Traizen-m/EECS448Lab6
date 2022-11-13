<?php 
    echo "<title> Exercise 1 </title>";
    echo "<body style='background-color:powderblue'>"; 
    echo "<table border=\"3\">";
    for ($i = 1; $i <= 100; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 100; $j++) {
            echo "<td>".$j*$i."</td>";        
        }    
        echo "</tr>";
    }
    echo "</table>";
    echo "</body>";
?> 