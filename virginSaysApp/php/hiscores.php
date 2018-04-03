<?php
require_once('database.php');
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
<nav>
  <div class="nav-wrapper cyan accent-4">
    <a class="brand-logo center" href="../index.php">Home</a>
  </div>
</nav>
<table class="highlight white-text flow-text">
  <?php
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <thead>
        <tr>
          <th>Name</th>
          <th>Score</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><?php echo $row["name"]?></td>
          <td> <?php echo $row["score"]?></td>
        <?php  }
      }?>
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
