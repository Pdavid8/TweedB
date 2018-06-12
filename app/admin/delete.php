<?php
if(!isset($_SESSION['pop'])){
    header('Location: index.php?id=17');
    exit();
}
if (isset($_POST['delete'])){
    $checkbox = $_POST['checkbox'];
    $count = count($checkbox);
    for($i=0;$i<$count;$i++){
        if(!empty($checkbox[$i])){ 
            $id = mysqli_real_escape_string($dbc,$checkbox[$i]); 
            mysqli_query($dbc,"DELETE FROM barbers WHERE idBarber = '$id'"); 
        } 
    } 
} 

$ispis = "SELECT * FROM barbers"; 
$rezultat = mysqli_query($dbc,$ispis); 

echo "<form action='' method='post' class='wrap'>"; 

echo "<table class='delete'>";
echo "<tr><th>Check<th></th></th><th>Name</th></tr>";
while ($row = mysqli_fetch_array($rezultat)){ /* FETCH ARRAY */
    $id=mysqli_real_escape_string($dbc,$row['idBarber']);
    echo "<tr><td><input type='checkbox' name='checkbox[]' value='$id'></td>";
    echo '<td><img width="40px" height="40px" src="'.$row["slika"].'"/></td>';
    echo "<td>" .$row['ime']. "</td>";
    echo "</tr>";
}
mysqli_free_result($rezultat);
echo '<tr>
<td colspan="5" align="center"><input name="delete" id="delete" type="submit"  value=" DELETE "></td>
</tr>';
echo "</table> </form>";
?>