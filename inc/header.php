<header>
      <div class="header-container">
        <div class="logo">
          <a href="https://www.netmatters.co.uk/">
            <img src="img/netmatters-logo.png" alt="netmatters-logo-picture" class="netmatters-logo"></a>
<!-- Extra code for the phone icon and menu button for small screens -->
          <div class="top-phone-menu">
            <a href="tel:01603704020"><i class="fas fa-phone-alt fa-lg" id="phone-alt"></i></a>
            <!-- <div class="btn-menu-xs" onclick="openNav()">
              <a href="#">
                <div class="menu-lines">
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>	
                </div>
                    <p class="menu-title">MENU</p>						
              </a>
            </div> -->
            <div class="hamburger-xs hamburger--spin" onclick="openNav()">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
              <p class="menu-title">MENU</p>							
            </div>
          </div>
        </div>

<!-- Search bar for small screen only -->
        <form class="xs-search">
          <input type="search" name="xs-search" placeholder="Search...">
          <div class="btn btn-search-xs">
            <i class="fas fa-search"></i>
          </div>
        </form>


<!-- Container for the header buttons on screens above M size -->
        <div class="btn btn-top" id="btn-top-ie-issue"> <!--Had to add ID in order to target this particular element as there was a blue box-shadow showing in IE across the top of the screen. Managed to fix it with this-->
          <a href="https://support.netmatters.com/" class="btn btn-support">            
            <i class="fas fa-mouse fa-lg"></i>Support
            </a>
          <a href="contact.php" class="btn btn-contact">
            <i class="fas fa-paper-plane fa-lg"></i>Contact
          </a>
          <div class="container-search">
            <form class="d-flex p-2">
              <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                <i class="fas fa-search fa-lg"></i>
            </form>
          </div>
<!-- Menu button for the over M size screens. I have added an extra menu button for small screen as this one did not want to work correctly -->
          <!-- <div class="btn-menu" onclick="openNav()">
            <a href="#">
              <div class="menu-lines">
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>	

              </div>
              <p class="menu-title">MENU</p>							
            </a>
          </div> -->
          <div class="hamburger hamburger--spin" onclick="openNav()">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
            <p class="menu-title">MENU</p>							
          </div>
        </div>
      </div>
<!-- Search bar for small screen only
      <form class="xs-search">
        <input type="search" name="xs-search" placeholder="Search...">
        <div class="btn btn-search-xs">
          <i class="fas fa-search"></i>
        </div>
      </form> -->
    </header>
