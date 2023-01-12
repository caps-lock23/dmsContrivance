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
      <form action="connect.php" method="post">
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName" placeholder="Juan"/>
        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" placeholder="dela Cruz"/>
        <label for="contact">Contact</label>
        <input type="text" id="contact" name="contact" placeholder="09123456789"/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="juandelacruz@gmail.com"/>
        <br>
        <label>Product</label>
        <label for="Back To School"><input type="radio" id="Back To School" name="product" value="Back To School" />Back to School</label>
        <label for="Boy In A Dream"><input type="radio" id="Boy In A Dream" name="product" value="Boy In A Dream" />Boy In A Dream</label>
        <label for="Butter Fly Effect"><input type="radio" id="Butter Fly Effect" name="product" value="Butter Fly Effect" />Butter Fly Effect</label>
        <label for="Frog Avocado"><input type="radio" id="Frog Avocado" name="product" value="Frog Avocado" />Frog Avocado</label>
        <label for="Classic"><input type="radio" id="Classic" name="product" value="Classic">Classic</label>
        <br>
        <label for="amount">Amount</label>
        <input type="number" id="amount" name="amount" />
        <br>
        <label>Size</label>
        <label for="small"><input type="radio" id="small" name="size" value="S" />Small</label>
        <label for="Medium"><input type="radio" id="Medium" name="size" value="M" />Medium</label>
        <label for="Large"><input type="radio" id="Large" name="size" value="L" />Large</label>
        <label for="XL"><input type="radio" id="XL" name="size" value="XL" />XL</label>
        <br>
        <label for="deliveryAddress">Address</label>
        <input type="text" id="deliveryAddress" name="deliveryAddress" placeholder="Brgy. Kulapi Tayabas Rd. Lucban, Quezon">
        <br>
        <input type="submit" name="submit" class=".submit">
    </article>
  </body>
</div>

</html>