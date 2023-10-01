<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the email address from the form submission
  $email = $_POST['email'];

  // Validate the email address
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Email address is invalid, show an error message
    $error_message = 'Invalid email address.';
  } else {
    // Email address is valid, process the subscription
    // TODO: Add your subscription code
function generateSubscriptionCode($email) {
  // Generate a random string for the subscription code
  $random_string = bin2hex(random_bytes(16));

  // Combine the random string and the email address to create the subscription code
  $subscription_code = substr($random_string, 0, 8) . '-' . substr($random_string, 8, 8) . '-' . substr($random_string, 16, 8) . '-' . substr($random_string, 24, 8);
  $subscription_code .= '-' . substr(md5($email), 0, 4);

  // Return the subscription code
  return $subscription_code;
}

// Example usage
$email = 'john@example.com';
$subscription_code = generateSubscriptionCode($email);
echo $subscription_code; // Outputs something like "ab12cd34-ef56gh78-ij90kl12-mn34op56-789a"



    // Show a success message
    $success_message = 'Thanks for subscribing!';
  }
}
?>

<!-- HTML form -->
<h1>Subscribe To Our Newsletter</h1>
<form method="post">
  <?php if (isset($error_message)) { ?>
    <p class="error"><?php echo $error_message; ?></p>
  <?php } ?>
  <?php if (isset($success_message)) { ?>
    <p class="success"><?php echo $success_message; ?></p>
  <?php } ?>
  <input type="email" name="email" placeholder="Enter Email..." autofocus required>
  <button type="submit" class="button_1">Subscribe</button>
         <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the email address from the form submission
  $email = $_POST['email'];

  // Validate the email address
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Email address is invalid, show an error message
    $error_message = 'Invalid email address.';
  } else {
    // Email address is valid, generate a subscription code and send it to the subscriber
    $subscription_code = generateSubscriptionCode($email);
    $sent = sendSubscriptionCodeByEmail($email, $subscription_code);

    if ($sent) {
      // Subscription code sent successfully, show a success message
      $success_message = 'Thanks for subscribing! Your subscription code has been sent to your email address.';
    } else {
      // Failed to send the subscription code, show an error message
      $error_message = 'Failed to send subscription code. Please try again later.';
    }
  }
}

function generateSubscriptionCode($email) {
  // Generate a random string for the subscription code
  $random_string = bin2hex(random_bytes(16));

  // Combine the random string and the email address to create the subscription code
  $subscription_code = substr($random_string, 0, 8) . '-' . substr($random_string, 8, 8) . '-' . substr($random_string, 16, 8) . '-' . substr($random_string, 24, 8);
  $subscription_code .= '-' . substr(md5($email), 0, 4);

  // Return the subscription code
  return $subscription_code;
}

function sendSubscriptionCodeByEmail($email, $subscription_code) {
  // TODO: Add your code to send the subscription code to the subscriber via email
  // You can use a library like PHPMailer or the built-in mail() function to send email
  
//use PHPMailer\PHPMailer;
//use PHPMailer\Exception;

require 'vendor/autoload.php'; // Include the PHPMailer autoloader

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the email address from the form submission
  $email = $_POST['email'];

  // Validate the email address
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Email address is invalid, show an error message
    $error_message = 'Invalid email address.';
  } else {
    // Email address is valid, generate a subscription code and send it to the subscriber
    $subscription_code = generateSubscriptionCode($email);
    $sent = sendSubscriptionCodeByEmail($email, $subscription_code);

    if ($sent) {
      // Subscription code sent successfully, show a success message
      $success_message = 'Thanks for subscribing! Your subscription code has been sent to your email address.';
    } else {
      // Failed to send the subscription code, show an error message
      $error_message = 'Failed to send subscription code. Please try again later.';
    }
  }
}

function generateSubscriptionCode($email) {
  // Generate a random string for the subscription code
  $random_string = bin2hex(random_bytes(16));

  // Combine the random string and the email address to create the subscription code
  $subscription_code = substr($random_string, 0, 8) . '-' . substr($random_string, 8, 8) . '-' . substr($random_string, 16, 8) . '-' . substr($random_string, 24, 8);
  $subscription_code .= '-' . substr(md5($email), 0, 4);

  // Return the subscription code
  return $subscription_code;
}

function sendSubscriptionCodeByEmail($email, $subscription_code) {
  $mail = new PHPMailer(true); // Create a new PHPMailer instance

  try {
    // Configure the SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@example.com';
    $mail->Password = 'your-email-password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set the email content
    $mail->setFrom('samochubrand@gmail.com', 'SAM OCHU');
    $mail->addAddress($email);
    $mail->Subject = 'Your Subscription Code';
    $mail->Body = 'Thanks for subscribing! Your subscription code is: ' . $subscription_code;

    // Send the email
    $mail->send();

    return true; // Email sent successfully
  } catch (Exception $e) {
    // Failed to send email, show the error message
    echo 'Message could not be sent. Error: ' . $mail->ErrorInfo;
    return false; // Email sending failed
  }
}



  // Return true if the email was sent successfully, false otherwise
  return true; // Example: assume email is always sent successfully
}
?>

<!-- HTML form -->

<form method="post" action="index.php">
  <?php if (isset($error_message)) { ?>
    <p class="error"><?php echo $error_message; ?></p>
  <?php } ?>
  <?php if (isset($success_message)) { ?>
    <p class="success"><?php echo $success_message; ?></p>
  <?php } ?>
