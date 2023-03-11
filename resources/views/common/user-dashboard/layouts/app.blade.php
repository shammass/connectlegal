<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard </title>
  <meta name="description" content="A description of the page content.">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- css File link  -->
  <link rel="stylesheet" type="text/css" href="/new-design/user-dashboard/css/style-dash.css">
  <link rel="stylesheet" type="text/css" href="/new-design/user-dashboard/css/style-dash.css">
  <link rel="stylesheet" type="text/css" href="/new-design/user-dashboard/css/style.css">
  <!-- Google Font Poppins-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700;800;900&display=swap"
    rel="stylesheet">
  <!-- Dont-Awesome Icon-->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!--carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

  <!-- fevicon icon -->
  <link href="/new-design/user-dashboard/images/fevicon.png" rel="shortcut icon" type="image/png">
</head>

<body>

  <div class="flex-part">
    <div class="left-menu-bar">
      <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
          <a href="#" data-toggle="sidebar-colapse"
            class=" list-group-item list-group-item-action d-flex align-items-center mmmm">
            <div class="d-flex w-100 justify-content-start align-items-center">
              <span id="collapse-icon" class="fa fa-2x mr-3"><img src="/new-design/user-dashboard/images/fa-white.png" alt="fa-white"
                  class="fav-white"></span>
              <span id="collapse-text" class="menu-collapsed"><img src="/new-design/user-dashboard/images/off-logo.png" alt="off-logo"
                  class="fav-icon"> </span>
            </div>
          </a>
          <div id='submenu1' class="collapse sidebar-submenu">
            <ul class="menu-left">
                <li><a href="" class="active-nav"><i class="fa-solid fa-house-user"></i> Home</a></li>
              <li><a href="#"><i class="fa-solid fa-landmark"></i>Dashboard</a></li>
              <li><a href="#"><i class="fa-solid fa-users"></i>My Activity</a></li>
              <li><a href="#"><i class="fa-solid fa-question"></i> Schedule Events</a></li>
              <li><a href="#"><i class="fa-solid fa-star"></i> Chat Online Requests</a></li>
              <li><a href="#"><i class="fa-solid fa-bag-shopping"></i>Services</a></li>
              <li><a href="#"><i class="fa-solid fa-user"></i> Lawyer Community</a></li>
              <li><a href="#"><i class="fa-solid fa-scale-balanced"></i>Question & Answer</a></li>
              <li><a href="#"><i class="fa-solid fa-book"></i>Lawyer Articles</a></li>
              <li><a href="#"><i class="fa-solid fa-address-card"></i>Q & A</a></li>
            </ul>
          </div>

          <div class="icons-part-left">
            <ul class="menu-left white-left">
              <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
              <li><a href="#"><i class="fa-solid fa-table"></i></a></li>
              <li><a href="#"><i class="fa-regular fa-comment"></i> </a></li>
              <li><a href="#"><i class="fa-solid fa-table-cells-large"></i> </a></li>
              <li><a href="#"><i class="fa-solid fa-question"></i> </a></li>
              <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i> </a></li>
            </ul>
          </div>
          <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
          </li>
        </ul>
      </div>
    </div>
    <div class="dash-body">
      <div class="top-header">
        <div class="row">
          <div class="col-sm-9 d-none d-xl-block">
            <nav class="navbar navbar-expand-lg navbar-light main-menu">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">How It Works</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">For Lawyers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Testimonials</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blogs &amp; Articles</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Lawyers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Practice Area</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="col-sm-3 d-none d-xl-block">
            <div class="user-nav">
              <div class="row">
                <div class="col-sm-2">
                  <p class="bell-icon">
                    <a href="#"><i class="fa-solid fa-bell"></i></a>
                    <span class="round-white"></span>
                  </p>
                </div>
                <div class="col-sm-9">
                  <div class="row ">
                    <div class="col-sm-4">
                      <div class="round-user">
                        <img src="/new-design/user-dashboard/images/question-1.png" alt="question-1" class="user-li">
                        <span class="round"></span>
                      </div>
                    </div>
                    <div class="col-sm-7 names">
                      <p class="font-name"> Ranjit Devi</p>
                      <p class="font-ad">UAE, Dubai</p>
                    </div>
                  </div>

                </div>
                <div class="col-sm-1 pl-0 text-right">
                  <a href="#"><i class="fa-solid fa-ellipsis-vertical vertical-ic"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-xl-8  col-12 d-block d-xl-none">
            <div class="d-flex1 ">
              <div class="col-md-2">
                <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                  aria-controls="offcanvasExample">
                  <img src="/new-design/user-dashboard/images/toogle.png" alt="">
                </a>
              </div>
              <div class="col-md-7">
                <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                  aria-controls="offcanvasExample">
                  <center> <img src="/new-design/user-dashboard/images/ft-logo.png" alt="off-logo" class="off-logo m-0"> </center>
                </a>
              </div>
              <div class="col-md-3 text-end">
                <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                  aria-controls="offcanvasExample">
                  <img src="/new-design/user-dashboard/images/question-1.png" alt="">
                </a>
              </div>
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
              aria-labelledby="offcanvasExampleLabel">
              <div class="offcanvas-header">
               <div class="text-left-part"> <img src="/new-design/user-dashboard/images/off-logo.png" alt="off-logo" class="off-logo"></div>  <a type="button" class="btn-close bg-des" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></a>
              </div>
              <div class="offcanvas-body">
                <ul class="menu-left">
                  <li><a href="" class="active-nav"><i class="fa-solid fa-house-user"></i> Home</a></li>
                  <li><a href="#"><i class="fa-solid fa-landmark"></i> How It Works</a></li>
                  <li><a href="#"><i class="fa-solid fa-users"></i> For Lawyers</a></li>
                  <li><a href="#"><i class="fa-solid fa-question"></i> Testimonials</a></li>
                  <li><a href="#"><i class="fa-solid fa-star"></i> Testimonials</a></li>
                  <li><a href="#"><i class="fa-solid fa-bag-shopping"></i> Our Lawyers</a></li>
                  <li><a href="#"><i class="fa-solid fa-user"></i> Lawyers</a></li>
                  <li><a href="#"><i class="fa-solid fa-scale-balanced"></i> Practice Area</a></li>
                  <li><a href="#"><i class="fa-solid fa-book"></i> Blogs & Articles</a></li>
                  <li><a href="#"><i class="fa-solid fa-address-card"></i> Hire Lawyer</a></li>
                  <li><a href="#"><i class="fa-solid fa-gavel"></i> Legal Articles</a></li>
                  <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i> Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      
        @yield('content')


    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
</script>
</script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>

<script>
  $(document).ready(function () {
    $(".open-d").click(function () {
      $(".vat-box").toggle();
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function () {
    $('.counter-value').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 3500,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
  });

  $(document).ready(function () {
    $("#news-slider").owlCarousel({
      items: 1,
      itemsDesktop: [1199, 1],
      itemsMobile: [600, 1],
      pagination: true,
      autoPlay: true
    });
  });
</script>
<script>
  $(document).ready(function () {
    $("#testimonial-slider").owlCarousel({
      items: 2,
      itemsDesktop: [1000, 2],
      itemsDesktopSmall: [979, 2],
      itemsTablet: [767, 1],
      pagination: true,
      autoPlay: true
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
    // Hide submenus
    $('#body-row .collapse').collapse('hide');

    // Collapse/Expand icon
    $('#collapse-icon').addClass('fa-angle-double-left');

    // Collapse click
    $('[data-toggle=sidebar-colapse]').click(function () {
      SidebarCollapse();
    });

    function SidebarCollapse() {
      $('.menu-collapsed').toggleClass('d-none');
      $('.sidebar-submenu').toggleClass('d-none');
      $('.submenu-icon').toggleClass('d-none');
      $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

      // Collapse/Expand icon
      $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
    }
  });
</script>
<script>
  $(document).ready(function() {
    $(window).scroll(function() {
      if ($(document).scrollTop() > 70) {
        $(".top-header").addClass("head-fixed");
      } else {
        $(".top-header").removeClass("head-fixed");
      }
    });
  });
  </script>

</body>

</html>