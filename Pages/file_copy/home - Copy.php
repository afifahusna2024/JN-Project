<?php
session_start();

// If user is NOT logged in, redirect to login page
if (!isset($_SESSION['email'])) {
    header("Location: Login_Register/index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JN Academy - Home</title>
    <link rel="stylesheet" href="home.css" />
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar">
      <div class="container nav-container">
        <a href="index.html" class="logo" target="_blank">
          <img src="JN logo.jpeg" class="nav-logo" />
          <p>JN Academy</p>
        </a>
        <ul class="nav-links">
          <li><a href="home.html" target="_blank">Home</a></li>
          <li><a href="about.html" target="_blank">About</a></li>
          <li><a href="courses.html" target="_blank">Courses</a></li>
          <li><a href="contact.html" target="_blank">Contact</a></li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
      <div class="hero-section">
        <img
          src="junaid-tutorial-heroimage.jpg"
          alt="Hero Background"
          class="hero-image"
        />
        <div class="hero-content">
          <h1>Welcome to JN Academy</h1>
          <p>Your journey to learning starts here!</p>
        </div>
      </div>
    </header>

    <!-- Features Section -->
    <main class="container">
      <section class="features">
        <h2>What We Offer</h2>
        <div class="feature">
          <h3>Quality Education</h3>
          <p>Learn from experienced educators dedicated to your success.</p>
          <p>We have <span id="facultyCount">0</span> faculties!</p>
        </div>
        <div class="feature">
          <h3>Interactive Courses</h3>
          <p>Engage with comprehensive and interactive learning materials.</p>
        </div>
        <div class="feature">
          <h3>Student Support</h3>
          <p>Receive guidance and support throughout your learning journey.</p>
        </div>
      </section>

      <!-- Call to Action -->
      <section class="cta">
        <h2>Ready to Get Started?</h2>
        <p>Join JN Academy and achieve your academic goals today!</p>
        <a href="signup.html" class="btn" target="_blank">Sign Up Now</a>
      </section>
    </main>

    <!-- Footer -->
    <footer>
      <div class="container">
        <p>&copy; 2025 JN Academy. All rights reserved.</p>
      </div>
    </footer>
    <script src="home.js"></script>
  </body>
</html>
