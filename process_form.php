<?php
if (isset($_POST['submit'])) {
  // preluam datele din formular
  $username = $_POST['username'];
  $password = $_POST['password'];

  // conectare la baza de date
  $servername = "localhost";
  $username_db = "id19076202_test";
  $password_db = "@d9+K79{glwGePKH";
  $database = "id19076202_users";

  $conn = mysqli_connect($servername, $username_db, $password_db, $database);

  // verificare conexiune
  if (!$conn) {
    die("Conexiunea a esuat: " . mysqli_connect_error());
  }

  if (mysqli_query($conn, $sql)) {
    header("Location: error_page.html");
    exit;
  } else {
    echo "A aparut o eroare: " . mysqli_error($conn);
  }

  // inchiderea conexiunii cu baza de date
  mysqli_close($conn);
}
?>