<!-- HEADER NAVBAR -->
<!-- SIDEBAR MENU -->
<div class="nav-full-container">
  <row class="row-nav">
    <!-- MENU BUTTON -->
    <div class="column-33 left-menu">
      <span><button class="menubtn" onclick="openNav()">☰ Menu</button></span>
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

    <!-- LOGO IMAGE -->
    <div class="column-33 center-logo">
      <a class="header-logo" href="index.php"><img src="images/logo_250x100.png" alt="logo" /></a>
    </div>
    <!-- CART BUTTON -->
    <div class="column-33 right-cart">
      <button class="addToCart" onclick="openNav()"><b class="fas fa-shopping-cart"></b> Cart</button>
    </div>
  </row>



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
</div>