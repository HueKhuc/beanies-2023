<?php
$sujetErr = $emailErr = $messageErr = "";
$sujet = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sujet"]) || $sujet = " ") {
    $sujetErr = "Entrez le sujet, svp.";

  } else {
    $sujet = test_input($_POST["sujet"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $sujet)) {
      $sujetErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Entrez l'email, svp.";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }

  }

  if (empty($_POST["message"]) || $message = " ") {
    $messageErr = "Entrez le message,svp.";

  } else {
    $message = test_input($_POST["message"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $message)) {
      $messageErr = "Only letters and white space allowed";
    }
  }
}
?>
<?php
// echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>

<footer>
  <form class="m-3" style="width:50%;" method="post" action="">
    <h3>Nous contacter</h3>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" placeholder="Sujet" id="floatingTextarea" name="<?php echo $sujet; ?>"
        required>
      <label for="floatingTextarea">Sujet</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
        name="<?php echo $email; ?>">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <textarea class="form-control" placeholder="Votre message" id="floatingTextarea2" style="height: 100px"
        name="<?php echo $message; ?>" required></textarea>
      <label for="floatingTextarea2">Message</label>
    </div>
    <input type="submit" name="submit" value="Envoyer" class="btn btn-outline-dark">
  </form>
</footer>
</body>

</html>