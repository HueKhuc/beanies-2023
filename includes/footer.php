<?php
$erreurs = [];
$contact = new Contact();
if (!empty($_POST)) {
  $contact = new Contact($_POST);
  $erreurs = $contact->validation();
  if (empty($erreurs)) {
    echo '<div class="alert alert-success my-5" role="alert">Message envoyé</div>';

    $sql = 'INSERT INTO contact(sujet,email,message)
            VALUES ("' . $contact->getSujet() . '","' . $contact->getEmail() . '","' . $contact->getMessage() . '")';
    $statement = $connection->exec($sql);
  }
}
;
?>

<footer>
  <form class="m-3" style="width:50%;" method="post" action="">
    <h3>Nous contacter</h3>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" placeholder="Sujet" id="floatingTextarea" name="sujet"
        value="<?php echo $contact->getSujet(); ?>">
      <?php if (!empty($erreurs['sujet'])) {
        echo '<p class="badge text-bg-danger">Entrez le sujet de votre message<p>';
      } ?>
      <label for="floatingTextarea">Sujet</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
        value="<?php echo $contact->getEmail(); ?>">
      <?php if (!empty($erreurs['email'])) {
        echo '<p class="badge text-bg-danger">Entrez votre email<p>';
      } ?>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <textarea class="form-control" placeholder="Votre message" id="floatingTextarea2" name="message"
        style="height: 100px" value="<?php echo $contact->getMessage(); ?>"></textarea>
      <?php if (!empty($erreurs['message'])) {
        echo '<p class="badge text-bg-danger">Entrez votre message<p>';
      } ?>
      <label for="floatingTextarea2">Message</label>
    </div>
    <input type="submit" name="submit" value="Envoyer" class="btn btn-outline-dark">
  </form>
</footer>
</body>

</html>