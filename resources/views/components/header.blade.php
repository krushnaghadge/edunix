<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edunix Erp</title>


</head>

<body>
    <!-- Page Preloder -->


    <!-- Header Section Begin -->
    <header class="custom-header">
        <div class="header-container">
            <div class="header-row">



                <!-- Navigation -->
                <nav class="header-nav">
                    <ul class="header-menu">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>



                        @if (session()->has('id'))
                            <li><a href="{{ url('/logout') }}">Logout</a></li>
                        @else
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @endif
                    </ul>
                </nav>

                <!-- Right Icons -->


            </div>
        </div>

        {{-- Page-specific CSS --}}
        <style>
            /* HEADER BASE */
            .custom-header {
                background: #fff;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                position: sticky;
                top: 0;
                z-index: 999;
            }

            .header-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 15px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .header-row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }

            /* LOGO */
            .header-logo img {
                height: 45px;
            }

            /* NAVIGATION */
            .header-nav {
                flex: 1;
                text-align: center;
            }

            .header-menu {
                list-style: none;
                margin: 0;
                padding: 0;
                display: inline-flex;
                gap: 25px;
            }

            .header-menu li {
                position: relative;
            }

            .header-menu a {
                text-decoration: none;
                color: #222;
                font-weight: 500;
                font-size: 16px;
                transition: color 0.3s ease;
            }

            .header-menu a:hover,
            .header-menu .active a {
                color: #007bff;
            }

            /* DROPDOWN */
            .dropdown-menu {
                position: absolute;
                top: 35px;
                left: 0;
                background: #fff;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                border-radius: 5px;
                display: none;
                flex-direction: column;
                min-width: 150px;
                z-index: 1000;
            }

            .dropdown-menu li {
                padding: 8px 15px;
            }

            .dropdown-menu li a {
                color: #333;
            }

            .dropdown-menu li a:hover {
                color: #007bff;
            }

            .dropdown:hover .dropdown-menu {
                display: flex;
            }

            /* ICONS */
            .header-icons {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .header-icons a img {
                width: 20px;
                height: 20px;
                transition: transform 0.3s ease;
            }

            .header-icons a:hover img {
                transform: scale(1.2);
            }

            .cart-count {
                background-color: #007bff;
                color: #fff;
                border-radius: 50%;
                font-size: 12px;
                padding: 2px 6px;
                margin-left: 3px;
            }

            .price {
                font-weight: 600;
                color: #333;
            }

            /* RESPONSIVE */
            @media (max-width: 768px) {
                .header-container {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .header-menu {
                    flex-direction: column;
                    width: 100%;
                    gap: 10px;
                    margin-top: 10px;
                }

                .header-icons {
                    margin-top: 10px;
                    width: 100%;
                    justify-content: space-between;
                }
            }
        </style>
    </header>

    <!-- Header Section End -->
