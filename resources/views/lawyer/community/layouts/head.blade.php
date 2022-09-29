<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="friendbook">
    <meta name="keywords" content="friendbook">
    <meta name="author" content="friendbook">
            <!-- favicon icon -->
    <link rel="shortcut icon" href="/images/favicon.png">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-114x114.png">
    <link rel="stylesheet" type="text/css" href="{{asset('community/assets/select2/css/select2.css')}}">
    
    <title>Connect Legal - Lawyers Community</title>
    
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <!-- style sheets and font icons  -->   
    <link rel="stylesheet" type="text/css" href="/css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="/css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
    
    <!-- Theme css -->
    <link id="change-link" rel="stylesheet" type="text/css" href="{{asset('community/assets/css/style.css')}}">
    
    <!-- Theme css -->
    <style>
        .logo .mobile-logo {
            display: none;
        }
        /* when screen is less than 600px wide
            show mobile version and hide desktop */
        @media (max-width: 768px) {
            .logo .mobile-logo {
                display: block;
            }
        }

        @media (max-width: 320px) {
            .logo .mobile-logo {
                padding-top: 72.977px;
            }
        }

        .select2-container {
            z-index: 9999 !important;
        }
        
        
        .bottomNavbar {
            overflow: hidden;
            background-color: black;
            position: fixed;
            bottom: 0;
            width: 23.3%;
        }
        
        @media (max-width: 425px) {
            .bottomNavbar {                    
                width: 100%;
            }
        }

        @media (min-width: 768px) {
            .bottomNavbar {                   
                width: 49%;
            }
        }

        @media (min-width: 1024px) {
            .bottomNavbar {                   
                width: 37%;
            }

            .banner-image {
                margin-left: 48%;
                margin-top: 9%;
            }

            .for-lawyers {
                margin-left: 33px;
            }

            .for-lawyers-breadcrumb {
                padding-top: 108px;
                padding-bottom: 0px;
                margin-left: 50px;
            }

            .for-lawyers-form {
                width: 54.89%!important;
            }
        }

        @media (min-width: 1440px) {
            .bottomNavbar {                   
                width: 23.8%;
            }

            .banner-image {
                margin-left: 0%;
                margin-top: 0%;
            }

            .for-lawyers {
                margin-left: 0px;
            }

            .for-lawyers-form {
                width: 58.1%!important;
            }
        }
        
        .bottomNavbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .bottomNavbar a:hover {
            background: #f1f1f1;
            color: black;
        }

        .bottomNavbar a.active {
            background-color: white;
            color: black;
        }   
    </style>
</head>