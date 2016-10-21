<?php
$servername = "SERVER";
$username = "USER";
$password = "PASS";
$dbname = "DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM monkeys";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Jugador</th><th>Velocidad</th><th>Disparo</th><th>Cabeceo</th><th>Entradas</th><th>Técnica</th><th>Resistencia</th><th>Fuerza</th><th>Captura</th><th>Total</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td><strong>".$row["Player"]."</strong></td>";
//Speed
        if ($row['Speed'] > 0 && $row['Speed'] < 6)
         echo "<td class='grey'>".$row['Speed']."</td>"; 
  else if($row['Speed'] > 5 && $row['Speed'] < 8)
         echo "<td class='yellow'>".$row['Speed']."</td>"; 
  else if($row['Speed'] > 7 && $row['Speed'] < 10)
         echo "<td class='red'>".$row['Speed']."</td>"; 
// KickPower
         if ($row['KickPower'] > 0 && $row['KickPower'] < 6)
         echo "<td class='grey'>".$row['KickPower']."</td>"; 
  else if($row['KickPower'] > 5 && $row['KickPower'] < 8)
         echo "<td class='yellow'>".$row['KickPower']."</td>"; 
  else if($row['KickPower'] > 7 && $row['KickPower'] < 10)
         echo "<td class='red'>".$row['KickPower']."</td>";
// Heading
         if ($row['Heading'] > 0 && $row['Heading'] < 6)
         echo "<td class='grey'>".$row['Heading']."</td>"; 
  else if($row['Heading'] > 5 && $row['Heading'] < 8)
         echo "<td class='yellow'>".$row['Heading']."</td>"; 
  else if($row['Heading'] > 7 && $row['Heading'] < 10)
         echo "<td class='red'>".$row['Heading']."</td>";
// Sliding
         if ($row['Sliding'] > 0 && $row['Sliding'] < 6)
         echo "<td class='grey'>".$row['Sliding']."</td>"; 
  else if($row['Sliding'] > 5 && $row['Sliding'] < 8)
         echo "<td class='yellow'>".$row['Sliding']."</td>"; 
  else if($row['Sliding'] > 7 && $row['Sliding'] < 10)
         echo "<td class='red'>".$row['Sliding']."</td>";
// Technique
         if ($row['Technique'] > 0 && $row['Technique'] < 6)
         echo "<td class='grey'>".$row['Technique']."</td>"; 
  else if($row['Technique'] > 5 && $row['Technique'] < 8)
         echo "<td class='yellow'>".$row['Technique']."</td>"; 
  else if($row['Technique'] > 7 && $row['Technique'] < 10)
         echo "<td class='red'>".$row['Technique']."</td>";
//Stamina
         if ($row['Stamina'] > 0 && $row['Stamina'] < 6)
         echo "<td class='grey'>".$row['Stamina']."</td>"; 
  else if($row['Stamina'] > 5 && $row['Stamina'] < 8)
         echo "<td class='yellow'>".$row['Stamina']."</td>"; 
  else if($row['Stamina'] > 7 && $row['Stamina'] < 10)
         echo "<td class='red'>".$row['Stamina']."</td>";
// Strength
         if ($row['Strength'] > 0 && $row['Strength'] < 6)
         echo "<td class='grey'>".$row['Strength']."</td>"; 
  else if($row['Strength'] > 5 && $row['Strength'] < 8)
         echo "<td class='yellow'>".$row['Strength']."</td>"; 
  else if($row['Strength'] > 7 && $row['Strength'] < 10)
         echo "<td class='red'>".$row['Strength']."</td>";
// Catching
         if ($row['Catching'] > 0 && $row['Catching'] < 6)
         echo "<td class='grey'>".$row['Catching']."</td>"; 
  else if($row['Catching'] > 5 && $row['Catching'] < 8)
         echo "<td class='yellow'>".$row['Catching']."</td>"; 
  else if($row['Catching'] > 7 && $row['Catching'] < 10)
         echo "<td class='red'>".$row['Catching']."</td>";
// General
          if ($row['General'] > 1 && $row['General'] < 41)
         echo "<td class='grey'>".$row['General']."</td></tr>"; 
  else if($row['General'] > 40 && $row['General'] < 57)
         echo "<td class='yellow'>".$row['General']."</td></tr>"; 
  else if($row['General'] > 56 && $row['General'] < 73)
         echo "<td class='red'>".$row['General']."</td></tr>"; 
    }
// End of table
         echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>