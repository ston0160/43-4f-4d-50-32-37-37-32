<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Star Wars</title>
    <meta charset="UTF-8"/>
    <meta name="author" content=""/>
    <link rel="stylesheet" href="styles/checkoutStyle.css">
    <link rel="stylesheet" href="styles/header-style.css">
    <script src="" defer></script>
  </head>
  <body>
      <?php 
      require_once "inc/navbar.php"
      ?>
      <div style="height: 100px"></div>
      <div class="belowHeader">
    <div class="customerInfo">
        <div id="shipping">
        <h1>Shipping</h1>
        <form action="" method="POST">
            <label for="firstName">First Name: </label>
            <br>
            <input type="text" id="firstName" name="firstName" minlength="2" required>
            <br>
            <label for="lastName">Last Name: </label>
            <br>
            <input type="text" id="lastName" name="lastName" minlength="2" required>
            <br>
            <label for="address">Address: </label>
            <br>
            <input type="text" id = "address" name="address" minlength="2" required>
            <br>
            <label for="suburb">Suburb: </label>
            <br>
            <input type="text" id="suburb" name="suburb" minlength="2" required>
            <br>
            <label for="postcode">Post Code: </label>
            <br>
            <input type="text" id="postcode" name="postcode" inputmode="numeric" minlength="4" maxlength="4" required>
            <br>
            <label for="state">State: </label>
            <br>
            <select id="state" name="state" required>
                <option disabled selected value></option>
                <option value="ACT">Australian Capital Territory</option>
                <option value="NSW">New South Wales</option>
                <option value="NT">Northern Territory</option>
                <option value="QLD">Queensland</option>
                <option value="SA">South Australia</option>
                <option value="TAS">Tasmania</option>
                <option value="VIC">Victoria</option>
                <option value="WA">Western Australia</option>
            </select>
            <br>
            <label for="email">Email: </label>
            <br>
            <input type="email" id="email" name="email" required>
        </div>
            <br>
            <div id="billing">
            <h1>Billing</h1>
            <label for="cardNo">Card Number: </label>
            <br>
            <input type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" maxlength="19" id="cardNo" name="cardNo" placeholder="xxxx xxxx xxxx xxxx" required>
            <br>
            <label for="cvv">CVV: </label>
            <br>
            <input type="tel" inputmode="numeric" pattern="[0-9]{3}" maxlength="3" id="cvv" name="cvv" required>
            <br>
            <label for="valid">Valid Until: </label>
            <select name="month" id="month" required>
                <option disabled selected value>Month</option>
                <option value="jan">January</option>
                <option value="feb">February</option>
                <option value="mar">March</option>
                <option value="apr">April</option>
                <option value="may">May</option>
                <option value="jun">June</option>
                <option value="jul">July</option>
                <option value="aug">August</option>
                <option value="sep">September</option>
                <option value="oct">October</option>
                <option value="nov">November</option>
                <option value="dec">December</option>
            </select>
            <select name="year" id="year" required>
                <option disabled selected value>Year</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
            </select>
        </div>
            <br>
            <input type="submit" value="Place Order">
        </form>
    </div>
    <div id="total">
        <h1>Total</h1>
        <p>Sub-Total: </p>
        <p>GST: </p>
        <p>Total: </p>
    </div>
    </div>
  </body>
</html>