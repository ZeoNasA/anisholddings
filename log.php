<?php
include "COMPONENT/DB/connection.php";
include "COMPONENT/header.php";
?>
<h1 style="margin-right: 50%;">Login</h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  </div>
  <a href="index.php" style="background-color: aqua;">Log in</a>
</form>