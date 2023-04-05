

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<!-- <form method="post" action="index.php"> -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "login">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "pwd">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['pwd'] != $mdp){
    echo '<div class="alert alert-info mt-3" role="alert">
    Mot de passe invalide !
  </div>';}
    if(empty($_POST['login'])){
    echo '<div class="alert alert-info" role="alert">
    Email vide !
  </div>';}
  }
  
?>