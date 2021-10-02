<!DOCTYPE html>
<html lang="en">

<head>
    <title>Star Wars</title>
    <meta charset="UTF-8" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="styles/checkout-style.css">
    <link rel="stylesheet" href="styles/header-style.css">
    <link rel="stylesheet" href="styles/footer-style2.css">
    <script src="https://kit.fontawesome.com/646e59b3d4.js" crossorigin="anonymous"></script>
    <script src="" defer></script>
</head>

<body>
    <div class="headergap"></div>
    <?php
    require_once "inc/navbar.php"
    ?>

    <div class="checkout-banner">
        <h1>Checkout Your Items</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit tempora explicabo voluptatem error pariatur omnis.</p>
    </div>
    <div class="row-main">
        <div class="column-75vh">
            <div class="container">
                <form action="/action_page.php">

                    <div class="row-inner">
                        <div class="column-50vh">
                            <h3>Your Shipping Details</h3>
                            <label for="fname"> Full Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="Scott Morrison" required>
                            <label for="email"> Email</label>
                            <input type="text" id="email" name="email" placeholder="scott@yourpm.com" required>
                            <label for="adr"> Address</label>
                            <input type="text" id="address" name="address" placeholder="101 Parliament House" required>
                            <label for="suburb"> Suburb</label>
                            <input type="text" id="suburb" name="suburb" placeholder="Canberra" required>

                            <div class="row-inner">
                                <div class="column-50vh">
                                    <label for="state">State</label>
                                    <select id="state" name="state" required default="South Australia" required>
                                        <option disabled selected value></option>
                                        <option selected="selected" value="ACT">Australian Capital Territory</option>
                                        <option value="NSW">New South Wales</option>
                                        <option value="NT">Northern Territory</option>
                                        <option value="QLD">Queensland</option>
                                        <option value="SA">South Australia</option>
                                        <option value="TAS">Tasmania</option>
                                        <option value="VIC">Victoria</option>
                                        <option value="WA">Western Australia</option>
                                    </select>
                                </div>
                                <div class="column-50vh">
                                    <label for="postcode">Post Code</label>
                                    <input type="text" id="postcode" name="postcode" placeholder="2601" required>
                                </div>
                            </div>
                        </div>

                        <div class="column-50vh">
                            <h3>Payment</h3>

                            <label for="cardname">Name on Card</label>
                            <input type="text" id="cardname" name="cardname" placeholder="Scott Morrison" required>
                            <label for="cardNo">Credit card number</label>
                            <input type="text" id="cardNo" name="cardNo" placeholder="xxxx-xxxx-xxxx-xxxx" required>


                            <div class="row-inner">
                                <div class="column-50vh">
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
                                </div>
                                <div class="column-50vh">
                                    <label for="year"></label>
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
                            </div>
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="xxx" required>

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="column-25vh">
            <div class="container">
                <h4>ORDER SUMMARY
                    <span class="price" style="color:white; font-size: 20px;">
                        <i class="fa fa-shopping-cart"></i>
                        <b>4</b>
                    </span>
                </h4>
                <p><a class="order-summary" href="#">Sub-total</a> <span class="price">$15</span></p>
                <p><a class="order-summary" href="#">GST</a> <span class="price">$5</span></p>
                <p><a class="order-summary" href="#">Shipping Cost</a> <span class="price">$8</span></p>
                <hr>
                <p class="total-price"><b style="color:white; font-size: 20px;">Total Price </b><span class="price" style="color:white; font-size: 20px;"><b>$30</b></span></p>
                <button id="submit-button" type="submit" value="Place Order" class="btn-one">Place Order</button>
            </div>
        </div>
    </div>


    <?php
    require_once "inc/footer2.php"
    ?>
</body>

</html>