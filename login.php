<?php
include 'includes/header.php';
?>

<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> -->
<form method="post" action="index.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "login">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $login = $_POST['login'];
  if (empty($login)) {
    echo "Email is empty";
  } else {
    echo $login;
  }
}
?>

<?php
include 'includes/footer.php';  
?>