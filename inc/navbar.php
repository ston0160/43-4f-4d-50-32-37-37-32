<!-- HEADER NAVBAR -->
<!-- SIDEBAR MENU -->
<div class="header-box">
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <button class="accordion">
      <a href="category.php?association=Light">
        <b class="fab fa-jedi-order"> The Rebellion</b>
      </a>
    </button>
    <a href="category.php?category=Jedi" class="panel">Jedi</a>
    <a href="category.php?category=Droids" class="panel">Droids</a>
    <a href="category.php?category=Rebellion Vehicles" class="panel">Rebellion Vehicles</a>
    <button class="accordion">
      <a href="category.php?association=Dark">
        <b class="fab fa-galactic-senate"> The Empire</b>
      </a>
    </button>
    <a href="category.php?category=Sith Lords" class="panel">Sith Lords</a>
    <a href="category.php?category=Empire Vehicles" class="panel">Empire Vehicles</a>
  </div>
  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  </script>

  <!-- CART BUTTON -->
  <span class="addToCart">
    <a href="cart.php" class="addToCart-Link">
      <span><b class="fas fa-shopping-cart"></b> Cart</span>
      <!-- <span class="badge">3</span> -->
    </a>
  </span>

  <!-- LOGO IMAGE -->
  <span class="header-logo"><a href="index.php"><img src="images/logo_250x100.png" alt="logo" /></a></span>

  <!-- MENU BUTTON -->
  <button class="menubtn" onclick="openNav()">☰ Menu</button>
  <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("menu").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("menu").style.marginLeft = "0";
    }
  </script>
</div>