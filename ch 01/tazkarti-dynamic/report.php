

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Tazkarti - Report Tazkarti</title>
</head>
<body>
  <h2>Tazkarti - Report Tazkarti</h2>

<?php
  $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
  $team = $_POST['favoriteteam'];
  $old = $_POST['howold'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $other = $_POST['other'];

  $to = 'Bishoysouser@gmail.com';  $subject = 'Tazkarti - Report Tazkarti';  $msg = "$name was booking match for $team \n" .
    "Your address: $address\n" .
    "Your gender: $gender\n" .
    "Other comments: $other";
  mail($to, $subject, $msg, 'From:' . $email);

  echo 'Thanks for submitting the form.<br />';
  echo $name . '<br />';
  echo 'You team ' . $team . '<br />';
  echo 'Other comments: ' . $other . '<br />';
  echo 'Your email address is ' . $email;
?>

</body>
</html>