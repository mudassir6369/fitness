<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";
$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) 
{
    $name1 = $_POST["name1"];
    $email = $_POST["email"];
    $subject1 = $_POST["subject1"];
    $message1 = $_POST["message1"];
    $sql = "INSERT INTO users(name1,email,subject1,message1) VALUES ('$name1', '$email', '$subject1', '$message1')";
    if ($conn->query($sql) === TRUE) {
        echo "Thank You for Contacting Us";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Anytime Fitness</title>
  <link rel="stylesheet" href="styles.css">
  <script>
    function handleSubmit(event) {
      event.preventDefault();
      const form = event.target;
      const thankYouMessage = document.createElement("p");
      thankYouMessage.textContent = "Thank you for contacting us!";
      form.parentNode.replaceChild(thankYouMessage, form);
    }
  </script>
</head>
<body>
<header>
    <h1>Anytime Fitness</h1>
    <p>The body achieves what the mind believes</p>
  </header>
  <nav>
  <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="why.html">Why Join</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="trainers.html">Trainers</a></li>
        <li><a href="reviews.html">Reviews</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="contact.php">Contact Us </a></li>
    </ul>
  </nav>
  <main>
    <section class="contact">
      <h2>Contact Information</h2>
      <ul>
        <li style="font-size: 20px;"><strong>Address: </strong>Guru Nanak Colony, Vijayawada, Andhar Pradesh</li><br>
        <li style="font-size: 20px;"><strong>Phone: </strong>+91 7842848479</li><br>
        <li style="font-size: 20px;"><strong>Email: </strong>xavion6369@gmail.com</li><br>
      </ul>
    </section>
    <section class="con">
      <h2>If you wish, send us a Message</h2>
      <form method="post">
        <label for="name1">Name :</label>
        <input type="text" id="name1" name="name1" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="subject1">Subject :</label>
        <input type="text" id="subject1" name="subject1" required>

        <label for="message1">Message :</label>
        <textarea id="message1" name="message1" rows="5" required></textarea>

        <button type="submit" name="submit">Send</button>
      </form>
    </section>
  </main>
  <footer>
        <p>&copy; Mudassir 21BCE9303</p>
        <p>All rights reserved.</p>
    </footer>
</body>
</html>

