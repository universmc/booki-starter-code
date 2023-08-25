<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $motdepasse = $_POST['motdepasse'];
  $datenaissance = $_POST['datenaissance'];
  $sexe = $_POST['sexe'];

  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "myDB";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO users (prenom, nom, email, motdepasse, datenaissance, sexe)
  VALUES ('$prenom', '$nom', '$email', '$motdepasse', '$datenaissance', '$sexe')";

  if (mysqli_query($conn, $sql)) {
    echo "Enregistrement réussi";
  } else {
    echo "Erreur d'enregistrement: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
