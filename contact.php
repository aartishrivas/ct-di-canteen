<?php
//connect with db.php
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Prepare and bind
  $stmt = $conn->prepare("INSERT INTO contact (`full name`, `email_address`, `subject`, `message`) VALUES (?,?,?,?)");
  $stmt->bind_param("ssss", $name, $email, $subject, $message);

  // Execute the statement
  if ($stmt->execute()) {
    echo "New message recorded successfully!";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the statement
  $stmt->close();
}

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact CT DI Canteen</title>
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<section class="contact">
  <div class="container">
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <main id="main-content">
      <h1>Contact Us</h1>

      <div class="success-message" role="alert" id="success-message">
        Form submitted successfully!
      </div>

      <form id="contact-form" novalidate aria-label="Contact form with required fields marked by asterisk" method="post" action="#">
        <div class="sr-only" role="note">
          This form contains required fields. Required fields are marked with an asterisk.
          Each field includes format hints and will be validated when you leave the field.
          Use Alt + S to submit the form or Alt + C to clear all fields.
        </div>
        <div class="form-group">
          <label for="name">Full Name</label>
          <input
            type="text"
            id="name"
            name="name"
            required
            aria-required="true"
            aria-describedby="name-hint name-error"
            placeholder="e.g., John Smith">
          <div id="name-hint" class="hint-text">Please enter your first and last name</div>
          <div id="name-error" class="error" role="alert"></div>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input
            type="email"
            id="email"
            name="email"
            required
            aria-required="true"
            aria-describedby="email-hint email-error"
            placeholder="example@domain.com"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
          <div id="email-hint" class="hint-text">Enter a valid email address (e.g., example@domain.com)</div>
          <div id="email-error" class="error" role="alert"></div>
        </div>

        <div class="form-group">
          <label for="subject">Subject</label>
          <select
            id="subject"
            name="subject"
            required
            aria-required="true"
            aria-describedby="subject-error">
            <option value="">Please select a subject</option>
            <option value="general">General Inquiry</option>
            <option value="support">Technical Support</option>
            <option value="feedback">Feedback</option>
          </select>
          <div id="subject-error" class="error" role="alert"></div>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea
            id="message"
            name="message"
            rows="5"
            required
            aria-required="true"
            aria-describedby="message-error"></textarea>
          <div id="message-error" class="error" role="alert"></div>
        </div>

        <button type="submit">Send Message</button>
      </form>

  </div>
</section>

</html>