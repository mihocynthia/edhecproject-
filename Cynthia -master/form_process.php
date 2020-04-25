<?php

//define variables and set to empty values
$name_error = $email_error = $phone_error = $url_error = ""; //empty string
$name = $email = $phone = $message = $url = $success = "" ; //empty varable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //form submitted through post method
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  }else {
    $name = test_input($_POST["name"]);
    //check if name only contains letters and whitespacaes
    if (!preg_match("/^[a-zA-Z]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $email_error= "Email is required";
  } else {
    $email = test_input($_POST["email"]);
      $email_error= "Invalid email format";
  }
  }

  if (empty($_POST["phone"])) {
    $phone_error = "Phone is required";
  }else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^(d[\s-]?)?[\(\[\s-]{0,2}\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
      $phone_error = "Invalid Phone number";
    }
  }

  if (empty($_POST["url"])) {
    $url_error = "url is required";
  }else {
    $url = test_input($_POST["url"]);
    if (!preg_match("/\b(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
      $url_error = "Invalid URL";
    }
  }

  if (empty($_POST["message"])) {
    $message_error = "Your message is empty";
  }else {
    $message = test_input($_POST["message"]);
    }

    if ($name_error === '' and $email_error === '' and $phone_error === '' and $url_error === '') {
        $message_body === '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value){
          $message_body .= "$key: $value\n";
        }
        $to = 'miho.cynthia@gmail.com';
        $subject = "contact form submit"
        if (mail($to, $subject, $message)){
          $success = "Message sent, thank you for contacting us";
          $name = $email = $phone = $message = $url = ''; // reset form back to empty
        }
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data); //escapes all the special html characters
  return $data;
}
}?>
