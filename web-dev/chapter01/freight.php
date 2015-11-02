<html>
<body>
    <table>
        <tr>
            <td bgcolor="#CCC" align="center">Distance</td>
            <td bgcolor="#CCC" align="center">Cost</td>
        </tr>
        
        <?php
            $distance = 50;
            
            while ($distance <= 250) {
                echo "<tr>";
                    echo "<td align='right'>".$distance."</td>";
                    echo "<td align='right'>".($distance / 10)."</td>";
                echo "</tr>";
                
                $distance += 50;
            }
        
        ?>
    </table>
</body>
</html>