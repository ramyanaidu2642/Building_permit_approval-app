<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <style>
 /* Global Styles */
 body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    /* Container for the page content */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* CSS for the banner container */
    .banner-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 200px;
      margin-bottom: 20px;
    }

    /* CSS for each banner image */
    .banner-image {
      width: 50%;
      height: 300px;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    /* CSS for section containers */
    .section-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 300px;
      margin-top: 30px;
    }

    .section {
      text-align: center;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 30%;
      transition: transform 0.2s;
    }

    /* Styling when hovering over the section */
    .section:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    /* Styling for section headings */
    .section h2 {
      color: #333;
      font-size: 24px;
    }

    /* Styling for section descriptions */
    .section p {
      color: #666;
    }

    /* Styling for login/register links */
    .section a {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 20px;
      background-color: #007BFF;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.2s;
    }

    /* Styling when hovering over login/register links */
    .section a:hover {
      background-color: #0056b3;
    }

    .home-button {
      margin: 10px;
      padding: 10px;
      background-color: green;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.2s;
    }

    .home-button:hover {
      background-color: #0056b3;
    }

    .header-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50px;
      background-color: green;
    }
    
    .header-container h1 {
      font-weight: bold;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
  </style>
</head>
<body>
<div class="banner-container">
    <div class="banner-image" style="background-image: url('banner.png');"></div>
    <div class="banner-image" style="background-image: url('banner3.png');"></div>
    <div class="banner-image" style="background-image: url('banner2.png');"></div>
  </div>
  <div class="header-container">
  <a class="home-button" href="home.php">Home</a>
</div>
</body>
</html>
