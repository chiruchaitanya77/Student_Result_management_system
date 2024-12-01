<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWRN College</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav-container">
            <nav class="nav-bar">
            <span class="logo" >SWRN</span>
            <div class="links"> 
                <a href="index.php">Home</a>
                <a href="login.php">login</a>
                <a href="index.php#form">Contact</a>
            </div>
            </nav>
        </div>

  <section class = "head">
    <header>
      <h2><a href="#" data-content="SWRN College of Engineering" class="lgm-link">SWRN College of Engineering</a></h2>
    </header>
  </section>

    <section class = "main">
        <img src="eduford_img/certi.jpg" alt="" srcset="">
        <h1>Achievements</h1>
        <p>The college is a respected institution, but the challenges it presents must be faced with determination, or we risk avoiding the hard work required. While many praise the college for its rewards and intellectual growth, they often overlook the difficulties. If commitment is not maintained, consequences will follow, much like neglecting a responsibility, especially when dealing with academic pressures and personal struggles.</p>
    </section>
   
<div class="row">
<h1>Our Location</h1>
<div class="column">
    <h2 style="text-align: center; font-size: 30px;">Narsapur</h2>
    <video autoplay muted loop style="width: 100%;">
      <source src="eduford_img/SWRN.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</div>

<div id = "form">
    <h1>Contact Us</h1>
    <p>Get in touch with us to get your admission done.</p>
<div class="container">
<form method="POST" action="action_page.php">


    <label for="name">Name</label>
    <input type="text" id="name"  name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your last name..">

    <label for="city">City</label>
    <select id="city" name="city">
      <option value="london">Narsapur</option>
      <option value="washington">Seetharampuram</option>
      <option value="newyork">NSP</option>
    </select>

    <label for="course">Course</label>
    <select id="course" name="course">
      <option value="Betech">BE/BTECH</option>
      <option value="bsc">BSC</option>
      <option value="bcom">BCOM</option>
    </select>

    <input type="submit" value="Submit">

  </form>
</div>
</div>

<footer>
    <p> Copyrighted &copy; 2024</p>
</footer>

</body>
</html>
</html>