<?php

<?php
// Step 1: Create a database connection
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $web = $_POST["web"];
    $domain = $_POST["domain"];
    $plan = $_POST["plan"];

    // Step 3: Insert data into the database
    $sql = "INSERT INTO your_table_name (name, number, email, message, web, domain, plan) 
            VALUES ('$name', '$number', '$email', '$message', '$web', '$domain', '$plan')";

    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();














// mwanzo wa validation 

    // Validate the form data
    $errors = array();

    if (empty($name)) {
        $errors[] = 'Name is required';
    }

    if (empty($number)) {
        $errors[] = 'WhatsApp number is required';
    } elseif (!ctype_digit($number)) {
        $errors[] = 'WhatsApp number should contain only digits';
    }

    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is required';
    }

    if ($web === 'simple') {
        $errors[] = 'Website type is required';
    }

    if ($domain === 'Choose your Domain') {
        $errors[] = 'Domain is required';
    }

    if ($plan === 'Choose your plan') {
        $errors[] = 'Plan is required';
    }

    // If there are no errors, send the email
    if (empty($errors)) {
        $to = 'samochubrand@gmail.com';
        $subject = 'Application for Website';
        $body = "Name: $name\n\nWhatsApp number: $number\n\nEmail: $email\n\nMessage: $message\n\nWebsite type: $web\n\nDomain: $domain\n\nPlan: $plan";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo '<p>Your message has been sent.</p>';
        } else {
            echo '<p>There was an error sending your message. Please try again later.</p>';
        }
    } else {
        // Output the validation errors
        echo '<ul>';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
    }
}

?>
