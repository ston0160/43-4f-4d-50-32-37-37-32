<!DOCTYPE html>

<html lang="en">
  <head>
      <link rel="stylesheet" href="styles/style_proPage.css"/>
      <title>Product Page</title>
    <meta charset="UTF-8"> <meta name="Richard" content="Star Wars">
  </head>

  <body>

    <div class="contentArea">
      <div class="productImages_proPage">
        <div class="mainImage_proPage">
          <img src="images/example_front.png" alt="Main" style="width:100%">
        </div>

        <div class="subImages_proPage">
            <img src="images/example_front.png" alt="Front" style="width:25%">
            <img src="images/example_side.png" alt="Side" style="width:25%">
            <img src="images/example_bottom.png" alt="Bottom" style="width:25%">
          
        </div>
      </div>  

        <div class="productInformation_proPage">
          <div class="productInformationTopSection_proPage">
          <h1>Product Name</h1>
          <p class="price">AUD$0.00</p>
        </div>
        
        <div class="productInformationMiddleSection_proPage">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna tempus congue magna dapibus, venenatis tincidunt lectus praesent vestibulum.</p>
        </div> 

        <div class="productInformationBottomSection_proPage">
          <div class="buttonCart_proPage">
            <p><button>Add to Cart</button></p>
          </div>

          <div class="quantityInput_proPage">
            <label class="quantityText_proPage">Quantity</label>
            <input type="number" class="quantityTextInput_proPage" step="1" min="1" max="99" name="quantity" value="1">
          </div>

        </div>
      </div>

    </div>
  </body>
</html>
