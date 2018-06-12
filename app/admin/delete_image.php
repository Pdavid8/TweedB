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
            mysqli_query($dbc,"DELETE FROM slike WHERE idSlika = '$id'"); 
        } 
    } 
} 

$ispis = "SELECT * FROM slike"; 
$rezultat = mysqli_query($dbc,$ispis); 

echo "<form action='' method='post' class='wrap'>"; 

echo "<table class='delete'>";
echo "<tr><th>Check<th></th></th><th>Name</th></tr>";
$i = 1;
while ($row = mysqli_fetch_array($rezultat)){ /* FETCH ARRAY */
    $id=mysqli_real_escape_string($dbc,$row['idSlika']);
    echo '<tr><td><input type="checkbox" name="checkbox[]" id="imagecb' . $i . '" value="' . $id . '"></td>';
    echo '<td><label for="imagecb' . $i . '"><img width="40px" height="40px" src="'.$row["slika"].'"/></label></td>';
    echo "</tr>";
    $i++;
}
mysqli_free_result($rezultat);
echo '<tr>
<td colspan="5" align="center"><input name="delete" id="delete" type="submit"  value=" DELETE "></td>
</tr>';
echo "</table> </form>";
?>