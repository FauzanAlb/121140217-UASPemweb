<?php
if(isset($_SESSION['role'])){
  if ($_SESSION['role'] == 'user') {
    include 'select_main_user.php';
  }

  if ($_SESSION['role'] == 'admin') {
    include 'edit_profilu.php';
  }

}else{
  include 'select_main_user.php';
}
