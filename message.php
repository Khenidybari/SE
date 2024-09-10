<?php
if(isset($_SESSION['message']))
{
 ?>

<div class="alert alert-info alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Hello!</strong> <?= $_SESSION['message']; ?>
  </div>
 <?php
 unset($_SESSION['message']);
}
?>