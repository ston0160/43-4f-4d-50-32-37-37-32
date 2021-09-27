<?php
<!-- HEADER NAVBAR -->
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="#">Jedi</a>
      <a href="#">Droids</a>
      <a href="#">Rebellion Vehicles</a>
      <a href="#">Sith Lords</a>
      <a href="#">Empire Vehicles</a>
    </div>
    <div id="main">
      <button class="openbtn" onclick="openNav()">☰</button>
      <span class="addToCart">
        <a href="#" class="addToCart-Link">
          <span>Cart</span>
          <span class="badge">3</span>
        </a>
      </span>
      <span class="header-logo"
        ><img src="images/logo_250x100.png" alt="logo"
      /></span>
    </div>
    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>
?>