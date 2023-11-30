

<div class="app-menu">
  <!-- Sidebar -->

  <div class="navbar-vertical navbar nav-dashboard">
    <div class="h-100" data-simplebar="">
      <!-- Brand logo -->
      <a class="navbar-brand" href="index.html">
        <img src="{{ asset('assets/images/brand/logo/logo-2.svg') }}" alt="DShop" />
      </a>
      <!-- Navbar nav -->
      <ul class="navbar-nav flex-column" id="sideNavbar">



        <li class="nav-item">
          <a class="nav-link has-arrow {{ Route::is('admin.dashboard') ? 'active':  '' }}"
            href="{{ route('admin.dashboard') }}">
            <i data-feather="home" class="nav-icon me-2 icon-xxs">
            </i>
            Dashboard
          </a>
        </li>




        <!-- Nav item -->
        <li class="nav-item">
          <div class="navbar-heading">Apps</div>
        </li>

        <!-- Nav item -->
        <li class="nav-item">
          <a class="nav-link has-arrow collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#navecommerce"
            aria-expanded="false" aria-controls="navecommerce">
            <i data-feather="shopping-cart" class="nav-icon me-2 icon-xxs">
            </i>
            Ecommerce
          </a>

          <div id="navecommerce" class="collapse" data-bs-parent="#sideNavbar">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link has-arrow" href="pages/ecommerce-products.html">
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link has-arrow" href="pages/ecommerce-products-details.html">
                  Product Detail
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link has-arrow" href="pages/ecommerce-product-edit.html">
                  Add Product
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link has-arrow" href="pages/ecommerce-order-list.html">
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link has-arrow" href="pages/ecommerce-order-detail.html">
                  Orders Detail
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link has-arrow" href="pages/ecommerce-cart.html">
                  Shopping cart
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link has-arrow" href="pages/ecommerce-checkout.html">
                  Checkout
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link has-arrow" href="pages/ecommerce-customer.html">
                  Customer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link has-arrow" href="pages/ecommerce-seller.html">
                  Seller
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <div class="navbar-heading">Settings</div>
        </li>

        <li class="nav-item">

          <a class="nav-link collapsed has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navemailsPages"
            aria-expanded="false" aria-controls="navemailsPages">
            <i data-feather="user" class="nav-icon me-2 icon-xxs"> </i>
            Emails
          </a>

          <div id="navemailsPages" class="collapse {{ Route::is('admin.email.configuration') || Route::is('admin.email.template') || Route::is('admin.add.email.template') ? 'show':  '' }}"
            data-bs-parent="#sideNavbar">
            <ul class="nav flex-column">


              <li class="nav-item">
                <a class="nav-link has-arrow {{ Route::is('admin.email.configuration') ? 'active':  '' }}"
                  href="{{ route('admin.email.configuration') }}">
                  Email Configuration
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link has-arrow {{ Route::is('admin.email.template') ? 'active':  '' }}"
                  href="{{ route('admin.email.template') }}">
                  Email Templates
                </a>
              </li>


              <li class="nav-item">
                <a class="nav-link has-arrow {{ Route::is('admin.add.email.template') ? 'active':  '' }}"
                  href="{{ route('admin.add.email.template') }}">
                  Add Email Template
                </a>
              </li>




            </ul>
          </div>
        </li>





        <!-- Nav item -->
        <li class="nav-item">
          <div class="navbar-heading">Manage Profile</div>
        </li>

        <li class="nav-item">

          <a class="nav-link collapsed has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navprofilePages"
            aria-expanded="false" aria-controls="navprofilePages">
            <i data-feather="user" class="nav-icon me-2 icon-xxs"> </i>
            Profile
          </a>

          <div id="navprofilePages" class="collapse {{ Route::is('admin.profile') ? 'show':  '' }}"
            data-bs-parent="#sideNavbar">
            <ul class="nav flex-column">

              <li class="nav-item">
                <a class="nav-link has-arrow {{ Route::is('admin.profile') ? 'active':  '' }}"
                  href="{{ route('admin.profile') }}">
                  Edit Profile
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.logout') }}">
                  Sign out
                </a>
              </li>


            </ul>
          </div>
        </li>


      </ul>

    </div>
  </div>
</div>