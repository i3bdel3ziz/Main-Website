<?php
if ( isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

  
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }

  //
  mail( "", AAJ , $_POST['message'], "From:" . $_POST['email'] );}
?
