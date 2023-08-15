<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fitness";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $occ = $_POST["occ"];
    $height = $_POST["height"];
    $weight1 = $_POST["weight1"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address1 = $_POST["address1"];

  $sql = "INSERT INTO customers (first_name, last_name, dob, gender, occ, height, weight, email, phone, address) 
   VALUES ('$first_name', '$last_name', '$dob', '$gender', '$occ', '$height', '$weight1', '$email', '$phone', '$address1')";

    if ($conn->query($sql) === TRUE) {
        echo "You have successfully registered for joining gym at Anytime Fitness.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Anytime Fitness</title>
  <link rel="stylesheet" href="styles.css">
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
    <section class="form">
      <h2>Registration Form</h2>
      <form action="#" method="post">
        <label for="first_name">First Name :</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name :</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="dob">Date of Birth :</label>
        <input type="date" id="dob" name="dob" required>

        <label for="gender">Gender :</label>
        <select id="gender" name="gender" required>
          <option value="">Select</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>

        <label for="occ">Occupation :</label>
        <input type="text" id="occ" name="occ" required>

        <label for="Height">Height :</label>
        <input type="number" id="height" name="height" min="4" max="8" required>

        <label for="weight1">Weight :</label>
        <input type="number" id="weight1" name="weight1" min="35" max="150" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone :</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="address1">Address :</label>
        <textarea id="address1" name="address1" required></textarea>

        <button type="submit">Register</button>
      </form>
    </section>
  </main>
  <footer>
        <p>&copy; Mudassir 21BCE9303</p>
        <p>All rights reserved.</p>
    </footer>
</body>
</html>