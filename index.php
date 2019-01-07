<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne

$servername = "localhost";
$username = "id7331055_lubin";
$password = "";
$dbname = "id7331055_nibul";

$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} else {
// Selectionner la base à utiliser
    $conn->select_db($dbname);
    echo "Connecté";
}

function dayday ($table, $column2, $column3, $column4) {

    global $conn;

  $ajoutEl = "INSERT INTO $table VALUES ('', '$column2', '$column3', '$column4')";

    $conn->query($ajoutEl);
}

//dayday('eleves', 'Stevens', 'Dorchies', '78');


function afficher()
{

    global $conn;

    $tout = "SELECT * from eleves";

    $result = $conn->query($tout);

    while ($row = $result->fetch_assoc()) {
        echo "id =" . $row['id'] . " prenom =" . $row['prenom'] . " nom =" . $row['nom'] . " age =" . $row['age'] . "<br><br>";
    }

}

//afficher();

function modif ($prenom, $nom, $age, $idEleve) {

    global $conn;

    $lqs = "UPDATE eleves set prenom = '$prenom', nom = '$nom', age = '$age' where id = $idEleve";

    $conn->query($lqs);

}

modif('dudule', 'dd', '60', '3');

function suppr($idEleve) {

    global $conn;

    $sql = "DELETE from eleves where id = '$idEleve'";

    $conn->query($sql);

}

//suppr('3');




