<?php
  if(isset($_POST['submit'])){
    echo ($_POST['fname']) . '<br />';
    echo ($_POST['lname'] . '<br />');
    echo ($_POST['contact'] . '<br />');
    echo ($_POST['email'] . '<br />');
    echo ($_POST['product'] . '<br />');
    echo ($_POST['amount'] . '<br />');
    echo ($_POST['size'] . '<br />');
    echo ($_POST['deliveryAddress'] . '<br />');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <div class="wrapper">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contrivance</title>
    <link rel="stylesheet" href="../styles/form1.css" />
  </head>
  <body>
    <header>
      <div class="head">
        <h1 class="title">Contrivance</h1>
        <nav>
          <a class="toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </a>
          <ul>
            <li>
              <a href="#home" class="nav">Home</a>
            </li>
            <li>
              <a href="#about" class="nav">About</a>
            </li>
            <li>
              <a href="contact" class="nav">Contact Us</a>
            </li>
            <li>
              <a href="#faq" class="nav">FAQ</a>
            </li>
            <li>
              <a href="#size" class="nav">Size Guide</a>
            </li>
            <li>
              <a href="#payment" class="nav">Payment Method</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <br>
    <article>
      <form action="./form1.php" method="POST" enctype="multipart/form-data">
        <label for="fname">First Name</label>
        <input type="text" name ="fname" placeholder="Juan" required />

        <label for="lname">Last Name</label>
        <input type="text" name ="lname" placeholder="dela Cruz" required />

        <label for="contact">Contact number</label>
        <input type="number" name ="contact" placeholder="09123456789" required />

        <label for="email">Email</label>
        <input
          type="email"
          name ="email"
          placeholder="juandelacruz69@gmail.com"
          required
        />
        <br />
        <label for="product">Product</label>
        <select name ="product">
          <option value="Back To School">Back to School</option>
          <option value="Boy in A Dream">Boy in A Dream</option>
          <option value="Butter Fly Effect">Butter Fly Effect</option>
          <option value="Frog Avocado">Frog Avocado</option>
        </select>
        <br />
        <label for="amount">Amount</label>
        <input type="number" name ="amount" required />
        <br />
        <label for="size">Size</label>
        <select name ="size">
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
          <option value="xl">XL</option>
          <option value="xxl">XXL</option>
        </select>
          <br /><br />
          <label for="deliveryAddress">Delivery Address</label>
          <input
            type="text"
            name ="deliveryAddress"
            placeholder="Brgy. Kulapi, Tayabas Rd. Lucban, Quezon"
            required
          />
          <br />
        <br>
        <div class="bottom">
          <input type="submit" class = "submit" name = "submit" />
          <button type="menu"><a href="../index.html">Home</a></button>
        </div>
      </form>
    </article>
  </body>
  </div>
</html>
