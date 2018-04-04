<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "simon_hiscores";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully </br>";

if(isset($_POST['scorepost'])){$Score = $_POST['scorepost'];}
if(isset($_POST['name_input'])){$Name = $_POST['name_input'];}


$sql = "INSERT INTO scores (score, name) VALUES $Score, $Name";

//$_POST['name_input'];
//$_POST['scorepost'];
?>
<?php
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>HOLLAND'S SIMON</title>

  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

</head>
<body>

  <nav>
    <div class="nav-wrapper cyan accent-4">
      <a class="brand-logo center" href="../index.php">Home</a>
    </div>
  </nav>


  <div class="section"></div>
  <div class="section">
    <div class="row"><p class="col s12 center-align white-text flow-text">wow</p>
    </div>
  </div>
  <div class="section"></div>
  <table><thead>
    <tr>
      <th>Name</th>
      <th>Score</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php if(isset($_POST['name_input'])){$Name = $_POST['name_input'];} ?></td>
      <td><?php if(isset($_POST['scorepost'])){$Name = $_POST['scorepost'];} ?></td>
    </tr>
  </tbody>
</table>
  <div class="section">
    <div class="container">
      <div class="row">
        <a class="waves-effect waves-light btn-large col s6 offset-s3 red accent-2" href="../index.php">Home</a>
      </div>
    </div>
  </div>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>
</html>
