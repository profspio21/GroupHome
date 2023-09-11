
<header id="header"@if(Route::current()->getName() != 'home') class="header-fixed"@endif>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li><a href="/home">Home</a></li>
        <li><a href="/our_services">Our Service</a></li>
        <li><a href="/facilities">Facilities</a></li>
        <li><a href="/our_staff">Our Staff</a></li>
        <li><a href="/our_partners">Our Partners</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </nav>
</header>
