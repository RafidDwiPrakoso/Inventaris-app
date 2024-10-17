<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="">
    <link id="builder-default-fonts"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <style id="css-utility-php-email-form">
        /* PHP Email Form Messages
    ------------------------------*/
        .php-email-form .error-message {
            display: none;
            background: #df1529;
            color: #ffffff;
            text-align: left;
            padding: 15px;
            margin-bottom: 24px;
            font-weight: 600;
        }

        .php-email-form .sent-message {
            display: none;
            color: #ffffff;
            background: #059652;
            text-align: center;
            padding: 15px;
            margin-bottom: 24px;
            font-weight: 600;
        }

        .php-email-form .loading {
            display: none;
            background: var(--surface-color);
            text-align: center;
            padding: 15px;
            margin-bottom: 24px;
        }

        .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid var(--accent-color);
            border-top-color: var(--surface-color);
            animation: php-email-form-loading 1s linear infinite;
        }

        @keyframes php-email-form-loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <link id="builder-font-open-sans"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">
    <link id="builder-font-jost"
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link id="builder-font-poppins"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <style id="builder-fonts-styles"></style>
    <link rel="stylesheet" href="https://builder.bootstrapmade.com/static/vendors/bootstrap/css/bootstrap.css?v=13">
    <link rel="stylesheet"
        href="https://builder.bootstrapmade.com/static/vendors/bootstrap-icons/bootstrap-icons.css?v=13">
    <link id="vendor-css-glightbox" rel="stylesheet"
        href="https://builder.bootstrapmade.com/static/vendors/glightbox/css/glightbox.min.css?v=13">
    <link id="vendor-css-swiper" rel="stylesheet"
        href="https://builder.bootstrapmade.com/static/vendors/swiper/swiper-bundle.min.css?v=13">
    <style id="builder-vendors-styles"></style>
    <style id="builder-general-css">
        :root {
            --default-font: Open Sans, system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            --heading-font: Jost;
            --nav-font: Poppins;
            --background-color: #ffffff;
            --default-color: #444444;
            --heading-color: #37517e;
            --accent-color: #47b2e4;
            --surface-color: #ffffff;
            --contrast-color: #ffffff;
            --nav-color: #ffffff;
            --nav-hover-color: #47b2e4;
            --nav-mobile-background-color: #ffffff;
            --nav-dropdown-background-color: #ffffff;
            --nav-dropdown-color: #444444;
            --nav-dropdown-hover-color: #47b2e4;
            scroll-behavior: smooth;
        }

        body {
            color: var(--default-color);
            background-color: var(--background-color);
            font-family: var(--default-font);
        }

        a {
            color: var(--accent-color);
            text-decoration: none;
            transition: 0.3s;
        }

        a:hover {
            color: color-mix(in srgb, var(--accent-color), transparent 25%);
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--heading-color);
            font-family: var(--heading-font);
        }

        section,
        .section {
            color: var(--default-color);
            background-color: var(--background-color);
            padding: 60px 0;
            scroll-margin-top: 88px;
            overflow: clip;
        }

        @media (max-width: 1199px) {

            section,
            .section {
                scroll-margin-top: 66px;
            }
        }

        .section-title {
            text-align: center;
            padding-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 20px;
            text-transform: uppercase;
            position: relative;
        }

        .section-title h2:before {
            content: "";
            position: absolute;
            display: block;
            width: 160px;
            height: 1px;
            background: color-mix(in srgb, var(--default-color), transparent 60%);
            left: 0;
            right: 0;
            bottom: 1px;
            margin: auto;
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            display: block;
            width: 60px;
            height: 3px;
            background: var(--accent-color);
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        .section-title p {
            margin-bottom: 0;
        }

        .page-title {
            --background-color: color-mix(in srgb, var(--default-color), transparent 96%);
            color: var(--default-color);
            background-color: var(--background-color);
            padding: 20px 0;
            position: relative;
        }

        .page-title h1 {
            font-size: 28px;
            font-weight: 700;
            margin: 0;
        }

        .page-title .breadcrumbs ol {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0 0 10px 0;
            margin: 0;
            font-size: 14px;
        }

        .page-title .breadcrumbs ol li+li {
            padding-left: 10px;
        }

        .page-title .breadcrumbs ol li+li::before {
            content: "/";
            display: inline-block;
            padding-right: 10px;
            color: color-mix(in srgb, var(--default-color), transparent 70%);
        }

        .widgets-container {
            padding: 30px;
            margin: 30px 0;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .widget-title {
            color: var(--heading-color);
            font-size: 20px;
            font-weight: 700;
            padding: 0;
            margin: 0 0 20px 0;
        }

        .widget-item {
            margin-bottom: 40px;
        }

        .widget-item:last-child {
            margin-bottom: 0;
        }
    </style>
    <style id="builder-general-styles"></style>
    <style id="builder-color-presets-css">
        [data-colorpreset="cp-light-background"],
        .light-background {
            --background-color: #f5f6f8;
            --surface-color: #ffffff;
        }

        [data-colorpreset="cp-dark-background"],
        .dark-background {
            --background-color: #37517e;
            --default-color: #ffffff;
            --heading-color: #ffffff;
            --surface-color: #4668a2;
            --contrast-color: #ffffff;
        }
    </style>
    <style id="header-style">
        .header {
            color: var(--default-color);
            background-color: var(--background-color);
            padding: 15px 0;
            transition: all 0.5s;
            z-index: 997;
        }

        .header .logo {
            line-height: 1;
        }

        .header .logo img {
            max-height: 36px;
            margin-right: 8px;
        }

        .header .logo h1 {
            font-size: 30px;
            margin: 0;
            font-weight: 500;
            color: var(--heading-color);
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .header .btn-getstarted,
        .header .btn-getstarted:focus {
            color: var(--contrast-color);
            background: var(--accent-color);
            font-size: 14px;
            padding: 8px 25px;
            margin: 0 0 0 30px;
            border-radius: 50px;
            transition: 0.3s;
        }

        .header .btn-getstarted:hover,
        .header .btn-getstarted:focus:hover {
            color: var(--contrast-color);
            background: color-mix(in srgb, var(--accent-color), transparent 15%);
        }

        @media (max-width: 1200px) {
            .header .logo {
                order: 1;
            }

            .header .btn-getstarted {
                order: 2;
                margin: 0 15px 0 0;
                padding: 6px 15px;
            }

            .header .navmenu {
                order: 3;
            }
        }
    </style>
    <style id="header-colors">
        .header {
            --background-color: #3d4d6a;
            --heading-color: #ffffff;
            --nav-color: #ffffff;
            --nav-hover-color: #47b2e4;
            --nav-mobile-background-color: #ffffff;
            --nav-dropdown-background-color: #ffffff;
            --nav-dropdown-color: #444444;
            --nav-dropdown-hover-color: #47b2e4;
        }

        .scrolled .header {}
    </style>
    <style id="nav-style">
        /* Desktop Navigation */
        @media (min-width: 1200px) {
            .navmenu {
                padding: 0;
            }

            .navmenu ul {
                margin: 0;
                padding: 0;
                display: flex;
                list-style: none;
                align-items: center;
            }

            .navmenu li {
                position: relative;
            }

            .navmenu a,
            .navmenu a:focus {
                color: var(--nav-color);
                padding: 18px 15px;
                font-size: 15px;
                font-family: var(--nav-font);
                font-weight: 400;
                display: flex;
                align-items: center;
                justify-content: space-between;
                white-space: nowrap;
                transition: 0.3s;
            }

            .navmenu a i,
            .navmenu a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
                transition: 0.3s;
            }

            .navmenu li:last-child a {
                padding-right: 0;
            }

            .navmenu li:hover>a,
            .navmenu .active,
            .navmenu .active:focus {
                color: var(--nav-hover-color);
            }

            .navmenu .dropdown ul {
                margin: 0;
                padding: 10px 0;
                background: var(--nav-dropdown-background-color);
                display: block;
                position: absolute;
                visibility: hidden;
                left: 14px;
                top: 130%;
                opacity: 0;
                transition: 0.3s;
                border-radius: 4px;
                z-index: 99;
                box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
            }

            .navmenu .dropdown ul li {
                min-width: 200px;
            }

            .navmenu .dropdown ul a {
                padding: 10px 20px;
                font-size: 15px;
                text-transform: none;
                color: var(--nav-dropdown-color);
            }

            .navmenu .dropdown ul a i {
                font-size: 12px;
            }

            .navmenu .dropdown ul a:hover,
            .navmenu .dropdown ul .active:hover,
            .navmenu .dropdown ul li:hover>a {
                color: var(--nav-dropdown-hover-color);
            }

            .navmenu .dropdown:hover>ul {
                opacity: 1;
                top: 100%;
                visibility: visible;
            }

            .navmenu .dropdown .dropdown ul {
                top: 0;
                left: -90%;
                visibility: hidden;
            }

            .navmenu .dropdown .dropdown:hover>ul {
                opacity: 1;
                top: 0;
                left: -100%;
                visibility: visible;
            }

            .navmenu .megamenu {
                position: static;
            }

            .navmenu .megamenu ul {
                margin: 0;
                padding: 10px;
                background: var(--nav-dropdown-background-color);
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
                position: absolute;
                top: 130%;
                left: 0;
                right: 0;
                visibility: hidden;
                opacity: 0;
                display: flex;
                transition: 0.3s;
                border-radius: 4px;
                z-index: 99;
            }

            .navmenu .megamenu ul li {
                flex: 1;
            }

            .navmenu .megamenu ul li a,
            .navmenu .megamenu ul li:hover>a {
                padding: 10px 20px;
                font-size: 15px;
                color: var(--nav-dropdown-color);
            }

            .navmenu .megamenu ul li a:hover,
            .navmenu .megamenu ul li .active,
            .navmenu .megamenu ul li .active:hover {
                color: var(--nav-dropdown-hover-color);
            }

            .navmenu .megamenu:hover>ul {
                opacity: 1;
                top: 100%;
                visibility: visible;
            }

            .navmenu .dd-box-shadow {
                box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
            }
        }

        /* Mobile Navigation */
        @media (max-width: 1199px) {
            .mobile-nav-toggle {
                color: var(--nav-color);
                font-size: 28px;
                line-height: 0;
                margin-right: 10px;
                cursor: pointer;
                transition: color 0.3s;
            }

            .navmenu {
                padding: 0;
                z-index: 9997;
            }

            .navmenu ul {
                display: none;
                list-style: none;
                position: absolute;
                inset: 60px 20px 20px 20px;
                padding: 10px 0;
                margin: 0;
                border-radius: 6px;
                background-color: var(--nav-mobile-background-color);
                overflow-y: auto;
                transition: 0.3s;
                z-index: 9998;
                box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
            }

            .navmenu a,
            .navmenu a:focus {
                color: var(--nav-dropdown-color);
                padding: 10px 20px;
                font-family: var(--nav-font);
                font-size: 17px;
                font-weight: 500;
                display: flex;
                align-items: center;
                justify-content: space-between;
                white-space: nowrap;
                transition: 0.3s;
            }

            .navmenu a i,
            .navmenu a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                transition: 0.3s;
                background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
            }

            .navmenu a i:hover,
            .navmenu a:focus i:hover {
                background-color: var(--accent-color);
                color: var(--contrast-color);
            }

            .navmenu a:hover,
            .navmenu .active,
            .navmenu .active:focus {
                color: var(--nav-dropdown-hover-color);
            }

            .navmenu .active i,
            .navmenu .active:focus i {
                background-color: var(--accent-color);
                color: var(--contrast-color);
                transform: rotate(180deg);
            }

            .navmenu .dropdown ul {
                position: static;
                display: none;
                z-index: 99;
                padding: 10px 0;
                margin: 10px 20px;
                background-color: var(--nav-dropdown-background-color);
                border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
                box-shadow: none;
                transition: all 0.5s ease-in-out;
            }

            .navmenu .dropdown ul ul {
                background-color: rgba(33, 37, 41, 0.1);
            }

            .navmenu .dropdown>.dropdown-active {
                display: block;
                background-color: rgba(33, 37, 41, 0.03);
            }

            .mobile-nav-active {
                overflow: hidden;
            }

            .mobile-nav-active .mobile-nav-toggle {
                color: #fff;
                position: absolute;
                font-size: 32px;
                top: 15px;
                right: 15px;
                margin-right: 0;
                z-index: 9999;
            }

            .mobile-nav-active .navmenu {
                position: fixed;
                overflow: hidden;
                inset: 0;
                background: rgba(33, 37, 41, 0.8);
                transition: 0.3s;
            }

            .mobile-nav-active .navmenu>ul {
                display: block;
            }
        }
    </style>
    <style id="footer-style">
        .footer {
            color: var(--default-color);
            background-color: var(--background-color);
            font-size: 14px;
            padding-bottom: 50px;
            position: relative;
        }

        .footer .footer-newsletter {
            background-color: color-mix(in srgb, var(--heading-color), transparent 95%);
            padding: 50px 0;
        }

        .footer .footer-newsletter h4 {
            font-size: 24px;
        }

        .footer .footer-newsletter .newsletter-form {
            margin-top: 30px;
            margin-bottom: 15px;
            padding: 6px 8px;
            position: relative;
            background-color: color-mix(in srgb, var(--background-color), transparent 50%);
            border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
            box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
            display: flex;
            transition: 0.3s;
            border-radius: 50px;
        }

        .footer .footer-newsletter .newsletter-form:focus-within {
            border-color: var(--accent-color);
        }

        .footer .footer-newsletter .newsletter-form input[type=email] {
            border: 0;
            padding: 4px;
            width: 100%;
            background-color: color-mix(in srgb, var(--background-color), transparent 50%);
            color: var(--default-color);
        }

        .footer .footer-newsletter .newsletter-form input[type=email]:focus-visible {
            outline: none;
        }

        .footer .footer-newsletter .newsletter-form input[type=submit] {
            border: 0;
            font-size: 16px;
            padding: 0 20px;
            margin: -7px -8px -7px 0;
            background: var(--accent-color);
            color: var(--contrast-color);
            transition: 0.3s;
            border-radius: 50px;
        }

        .footer .footer-newsletter .newsletter-form input[type=submit]:hover {
            background: color-mix(in srgb, var(--accent-color), transparent 20%);
        }

        .footer .footer-top {
            padding-top: 50px;
        }

        .footer .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid color-mix(in srgb, var(--default-color), transparent 50%);
            font-size: 16px;
            color: color-mix(in srgb, var(--default-color), transparent 20%);
            margin-right: 10px;
            transition: 0.3s;
        }

        .footer .social-links a:hover {
            color: var(--accent-color);
            border-color: var(--accent-color);
        }

        .footer h4 {
            font-size: 16px;
            font-weight: bold;
            position: relative;
            padding-bottom: 12px;
        }

        .footer .footer-links {
            margin-bottom: 30px;
        }

        .footer .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer .footer-links ul i {
            margin-right: 3px;
            font-size: 12px;
            line-height: 0;
            color: var(--accent-color);
        }

        .footer .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        .footer .footer-links ul li:first-child {
            padding-top: 0;
        }

        .footer .footer-links ul a {
            display: inline-block;
            color: color-mix(in srgb, var(--default-color), transparent 20%);
            line-height: 1;
        }

        .footer .footer-links ul a:hover {
            color: var(--accent-color);
        }

        .footer .footer-about a {
            color: var(--heading-color);
            font-size: 28px;
            font-weight: 600;
            text-transform: uppercase;
            font-family: var(--heading-font);
        }

        .footer .footer-contact p {
            margin-bottom: 5px;
        }

        .footer .copyright {
            padding-top: 25px;
            padding-bottom: 25px;
            border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        }

        .footer .copyright p {
            margin-bottom: 0;
        }

        .footer .credits {
            margin-top: 6px;
            font-size: 13px;
        }
    </style>
    <style id="scrolltop-style">
        .scroll-top {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 15px;
            bottom: -15px;
            z-index: 99999;
            background-color: var(--accent-color);
            width: 44px;
            height: 44px;
            border-radius: 50px;
            transition: all 0.4s;
        }

        .scroll-top i {
            font-size: 24px;
            color: var(--contrast-color);
            line-height: 0;
        }

        .scroll-top:hover {
            background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
            color: var(--contrast-color);
        }

        .scroll-top.active {
            visibility: visible;
            opacity: 1;
            bottom: 15px;
        }
    </style>
    <style id="section-PJCl8xpeZU-style">
        .hero {
            width: 100%;
            min-height: 80vh;
            position: relative;
            padding: 120px 0 60px 0;
            display: flex;
            align-items: center;
        }

        .hero h1 {
            margin: 0;
            font-size: 48px;
            font-weight: 700;
            line-height: 56px;
        }

        .hero p {
            color: color-mix(in srgb, var(--default-color), transparent 30%);
            margin: 5px 0 30px 0;
            font-size: 22px;
            line-height: 1.3;
            font-weight: 600;
        }

        .hero .btn-get-started {
            color: var(--contrast-color);
            background: var(--accent-color);
            font-family: var(--heading-font);
            font-weight: 500;
            font-size: 15px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 10px 28px 12px 28px;
            border-radius: 50px;
            transition: 0.5s;
        }

        .hero .btn-get-started:hover {
            color: var(--contrast-color);
            background: color-mix(in srgb, var(--accent-color), transparent 15%);
        }

        .hero .btn-watch-video {
            font-size: 16px;
            transition: 0.5s;
            margin-left: 25px;
            color: var(--default-color);
            font-weight: 600;
        }

        .hero .btn-watch-video i {
            color: var(--contrast-color);
            font-size: 32px;
            transition: 0.3s;
            line-height: 0;
            margin-right: 8px;
        }

        .hero .btn-watch-video:hover {
            color: var(--accent-color);
        }

        .hero .btn-watch-video:hover i {
            color: color-mix(in srgb, var(--accent-color), transparent 15%);
        }

        .hero .animated {
            animation: up-down 2s ease-in-out infinite alternate-reverse both;
        }

        @media (max-width: 640px) {
            .hero h1 {
                font-size: 28px;
                line-height: 36px;
            }

            .hero p {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
            }

            .hero .btn-get-started,
            .hero .btn-watch-video {
                font-size: 13px;
            }
        }

        @keyframes up-down {
            0% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(-10px);
            }
        }
    </style>
    <style id="section-50rXLwkw2s-style">
        .clients {
            padding: 12px 0;
        }

        .clients .swiper {
            padding: 10px 0;
        }

        .clients .swiper-wrapper {
            height: auto;
        }

        .clients .swiper-slide img {
            transition: 0.3s;
            padding: 0 10px;
        }

        .clients .swiper-slide img:hover {
            transform: scale(1.1);
        }
    </style>
    <style id="section-8Ej97Lvz3F-style">
        .about ul {
            list-style: none;
            padding: 0;
        }

        .about ul li {
            padding-bottom: 5px;
            display: flex;
            align-items: center;
        }

        .about ul i {
            font-size: 20px;
            padding-right: 4px;
            color: var(--accent-color);
        }

        .about .read-more {
            color: var(--accent-color);
            font-family: var(--heading-font);
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            padding: 8px 28px;
            border-radius: 5px;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--accent-color);
        }

        .about .read-more i {
            font-size: 18px;
            margin-left: 5px;
            line-height: 0;
            transition: 0.3s;
        }

        .about .read-more:hover {
            background: var(--accent-color);
            color: var(--contrast-color);
        }

        .about .read-more:hover i {
            transform: translate(5px, 0);
        }
    </style>
    <style id="section-s5k8AP5JzF-style">
        .why-us {
            padding: 30px 0;
        }

        .why-us .content h3 {
            font-weight: 400;
            font-size: 34px;
        }

        .why-us .content p {
            color: color-mix(in srgb, var(--default-color), transparent 30%);
        }

        .why-us .faq-container .faq-item {
            background-color: var(--surface-color);
            position: relative;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .why-us .faq-container .faq-item:last-child {
            margin-bottom: 0;
        }

        .why-us .faq-container .faq-item h3 {
            font-weight: 500;
            font-size: 17px;
            line-height: 24px;
            margin: 0 30px 0 0;
            transition: 0.3s;
            cursor: pointer;
        }

        .why-us .faq-container .faq-item h3 span {
            color: var(--accent-color);
            padding-right: 5px;
            font-weight: 600;
        }

        .why-us .faq-container .faq-item h3:hover {
            color: var(--accent-color);
        }

        .why-us .faq-container .faq-item .faq-content {
            display: grid;
            grid-template-rows: 0fr;
            transition: 0.3s ease-in-out;
            visibility: hidden;
            opacity: 0;
        }

        .why-us .faq-container .faq-item .faq-content p {
            margin-bottom: 0;
            overflow: hidden;
        }

        .why-us .faq-container .faq-item .faq-icon {
            position: absolute;
            top: 22px;
            left: 20px;
            font-size: 22px;
            line-height: 0;
            transition: 0.3s;
            color: var(--accent-color);
        }

        .why-us .faq-container .faq-item .faq-toggle {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 16px;
            line-height: 0;
            transition: 0.3s;
            cursor: pointer;
        }

        .why-us .faq-container .faq-item .faq-toggle:hover {
            color: var(--accent-color);
        }

        .why-us .faq-container .faq-active h3 {
            color: var(--accent-color);
        }

        .why-us .faq-container .faq-active .faq-content {
            grid-template-rows: 1fr;
            visibility: visible;
            opacity: 1;
            padding-top: 10px;
        }

        .why-us .faq-container .faq-active .faq-toggle {
            transform: rotate(90deg);
            color: var(--accent-color);
        }

        .why-us .why-us-img {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .why-us .why-us-img img {
            max-height: 70%;
        }
    </style>
    <style id="section-qYTuhBPPLv-style">
        .skills .content h3 {
            font-size: 2rem;
            font-weight: 700;
        }

        .skills .content p {
            color: color-mix(in srgb, var(--default-color), transparent 30%);
        }

        .skills .content p:last-child {
            margin-bottom: 0;
        }

        .skills .content ul {
            list-style: none;
            padding: 0;
        }

        .skills .content ul li {
            padding-bottom: 10px;
        }

        .skills .progress {
            height: 60px;
            display: block;
            background: none;
            border-radius: 0;
        }

        .skills .progress .skill {
            color: var(--default-color);
            padding: 0;
            margin: 0 0 6px 0;
            text-transform: uppercase;
            display: block;
            font-weight: 600;
            font-family: var(--heading-font);
        }

        .skills .progress .skill .val {
            float: right;
            font-style: normal;
        }

        .skills .progress-bar-wrap {
            background: color-mix(in srgb, var(--heading-color), transparent 90%);
            height: 10px;
        }

        .skills .progress-bar {
            width: 1px;
            height: 10px;
            transition: 0.9s;
            background-color: var(--heading-color);
        }
    </style>
    <style id="section-dBf1oOvRGG-style">
        .services .service-item {
            background-color: var(--surface-color);
            box-shadow: 0px 5px 90px 0px rgba(0, 0, 0, 0.1);
            padding: 50px 30px;
            transition: all ease-in-out 0.4s;
            height: 100%;
        }

        .services .service-item .icon {
            margin-bottom: 10px;
        }

        .services .service-item .icon i {
            color: var(--accent-color);
            font-size: 36px;
            transition: 0.3s;
        }

        .services .service-item h4 {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .services .service-item h4 a {
            color: var(--heading-color);
            transition: ease-in-out 0.3s;
        }

        .services .service-item p {
            line-height: 24px;
            font-size: 14px;
            margin-bottom: 0;
        }

        .services .service-item:hover {
            transform: translateY(-10px);
        }

        .services .service-item:hover h4 a {
            color: var(--accent-color);
        }
    </style>
    <style id="section-gYnrSOMNTj-style">
        .call-to-action {
            padding: 120px 0;
            position: relative;
            clip-path: inset(0);
        }

        .call-to-action img {
            position: fixed;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .call-to-action:before {
            content: "";
            background: color-mix(in srgb, var(--background-color), transparent 35%);
            position: absolute;
            inset: 0;
            z-index: 2;
        }

        .call-to-action .container {
            position: relative;
            z-index: 3;
        }

        .call-to-action h3 {
            color: var(--default-color);
            font-size: 28px;
            font-weight: 700;
        }

        .call-to-action p {
            color: var(--default-color);
        }

        .call-to-action .cta-btn {
            font-family: var(--heading-font);
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 40px;
            border-radius: 50px;
            transition: 0.5s;
            margin: 10px;
            border: 2px solid var(--contrast-color);
            color: var(--contrast-color);
        }

        .call-to-action .cta-btn:hover {
            background: var(--accent-color);
            border: 2px solid var(--accent-color);
        }
    </style>
    <style id="section-AXNwZFdfGS-style">
        .portfolio .portfolio-filters {
            padding: 0;
            margin: 0 auto 20px auto;
            list-style: none;
            text-align: center;
        }

        .portfolio .portfolio-filters li {
            cursor: pointer;
            display: inline-block;
            padding: 8px 20px 10px 20px;
            margin: 0;
            font-size: 15px;
            font-weight: 500;
            line-height: 1;
            margin-bottom: 5px;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
            font-family: var(--heading-font);
        }

        .portfolio .portfolio-filters li:hover,
        .portfolio .portfolio-filters li.filter-active {
            color: var(--contrast-color);
            background-color: var(--accent-color);
        }

        .portfolio .portfolio-filters li:first-child {
            margin-left: 0;
        }

        .portfolio .portfolio-filters li:last-child {
            margin-right: 0;
        }

        @media (max-width: 575px) {
            .portfolio .portfolio-filters li {
                font-size: 14px;
                margin: 0 0 10px 0;
            }
        }

        .portfolio .portfolio-item {
            position: relative;
            overflow: hidden;
        }

        .portfolio .portfolio-item .portfolio-info {
            opacity: 0;
            position: absolute;
            left: 12px;
            right: 12px;
            bottom: -100%;
            z-index: 3;
            transition: all ease-in-out 0.5s;
            background: color-mix(in srgb, var(--background-color), transparent 10%);
            padding: 15px;
        }

        .portfolio .portfolio-item .portfolio-info h4 {
            font-size: 18px;
            font-weight: 600;
            padding-right: 50px;
        }

        .portfolio .portfolio-item .portfolio-info p {
            color: color-mix(in srgb, var(--default-color), transparent 30%);
            font-size: 14px;
            margin-bottom: 0;
            padding-right: 50px;
        }

        .portfolio .portfolio-item .portfolio-info .preview-link,
        .portfolio .portfolio-item .portfolio-info .details-link {
            position: absolute;
            right: 50px;
            font-size: 24px;
            top: calc(50% - 14px);
            color: color-mix(in srgb, var(--default-color), transparent 30%);
            transition: 0.3s;
            line-height: 0;
        }

        .portfolio .portfolio-item .portfolio-info .preview-link:hover,
        .portfolio .portfolio-item .portfolio-info .details-link:hover {
            color: var(--accent-color);
        }

        .portfolio .portfolio-item .portfolio-info .details-link {
            right: 14px;
            font-size: 28px;
        }

        .portfolio .portfolio-item:hover .portfolio-info {
            opacity: 1;
            bottom: 0;
        }
    </style>
    <style id="section-Nnbjr4NCTo-style">
        .team .team-member {
            background-color: var(--surface-color);
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            border-radius: 5px;
            transition: 0.5s;
            padding: 30px;
            height: 100%;
        }

        @media (max-width: 468px) {
            .team .team-member {
                flex-direction: column;
                justify-content: center !important;
                align-items: center !important;
            }
        }

        .team .team-member .pic {
            overflow: hidden;
            width: 150px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .team .team-member .pic img {
            transition: ease-in-out 0.3s;
        }

        .team .team-member:hover {
            transform: translateY(-10px);
        }

        .team .team-member .member-info {
            padding-left: 30px;
        }

        @media (max-width: 468px) {
            .team .team-member .member-info {
                padding: 30px 0 0 0;
                text-align: center;
            }
        }

        .team .team-member h4 {
            font-weight: 700;
            margin-bottom: 5px;
            font-size: 20px;
        }

        .team .team-member span {
            display: block;
            font-size: 15px;
            padding-bottom: 10px;
            position: relative;
            font-weight: 500;
        }

        .team .team-member span::after {
            content: "";
            position: absolute;
            display: block;
            width: 50px;
            height: 1px;
            background: color-mix(in srgb, var(--default-color), transparent 85%);
            bottom: 0;
            left: 0;
        }

        @media (max-width: 468px) {
            .team .team-member span::after {
                left: calc(50% - 25px);
            }
        }

        .team .team-member p {
            margin: 10px 0 0 0;
            font-size: 14px;
        }

        .team .team-member .social {
            margin-top: 12px;
            display: flex;
            align-items: center;
            justify-content: start;
            width: 100%;
        }

        @media (max-width: 468px) {
            .team .team-member .social {
                justify-content: center;
            }
        }

        .team .team-member .social a {
            background: color-mix(in srgb, var(--default-color), transparent 94%);
            transition: ease-in-out 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50px;
            width: 36px;
            height: 36px;
        }

        .team .team-member .social a i {
            color: color-mix(in srgb, var(--default-color), transparent 20%);
            font-size: 16px;
            margin: 0 2px;
        }

        .team .team-member .social a:hover {
            background: var(--accent-color);
        }

        .team .team-member .social a:hover i {
            color: var(--contrast-color);
        }

        .team .team-member .social a+a {
            margin-left: 8px;
        }
    </style>
    <style id="section-cOPkkAMRUy-style">
        .pricing .pricing-item {
            background-color: var(--surface-color);
            box-shadow: 0 3px 20px -2px rgba(0, 0, 0, 0.1);
            border-top: 4px solid var(--background-color);
            padding: 60px 40px;
            height: 100%;
            border-radius: 5px;
        }

        .pricing h3 {
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .pricing h4 {
            color: var(--accent-color);
            font-size: 48px;
            font-weight: 400;
            font-family: var(--heading-font);
            margin-bottom: 0;
        }

        .pricing h4 sup {
            font-size: 28px;
        }

        .pricing h4 span {
            color: color-mix(in srgb, var(--default-color), transparent 50%);
            font-size: 18px;
        }

        .pricing ul {
            padding: 20px 0;
            list-style: none;
            color: color-mix(in srgb, var(--default-color), transparent 30%);
            text-align: left;
            line-height: 20px;
        }

        .pricing ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        .pricing ul i {
            color: #059652;
            font-size: 24px;
            padding-right: 3px;
        }

        .pricing ul .na {
            color: color-mix(in srgb, var(--default-color), transparent 60%);
        }

        .pricing ul .na i {
            color: color-mix(in srgb, var(--default-color), transparent 60%);
        }

        .pricing ul .na span {
            text-decoration: line-through;
        }

        .pricing .buy-btn {
            color: var(--accent-color);
            display: inline-block;
            padding: 8px 35px 10px 35px;
            border-radius: 50px;
            transition: none;
            font-size: 16px;
            font-weight: 500;
            font-family: var(--heading-font);
            transition: 0.3s;
            border: 1px solid var(--accent-color);
        }

        .pricing .buy-btn:hover {
            background: var(--accent-color);
            color: var(--contrast-color);
        }

        .pricing .featured {
            border-top-color: var(--accent-color);
        }

        .pricing .featured .buy-btn {
            background: var(--accent-color);
            color: var(--contrast-color);
        }

        @media (max-width: 992px) {
            .pricing .box {
                max-width: 60%;
                margin: 0 auto 30px auto;
            }
        }

        @media (max-width: 767px) {
            .pricing .box {
                max-width: 80%;
                margin: 0 auto 30px auto;
            }
        }

        @media (max-width: 420px) {
            .pricing .box {
                max-width: 100%;
                margin: 0 auto 30px auto;
            }
        }
    </style>
    <style id="section-97zyqOl7Qc-style">
        .testimonials .section-header {
            margin-bottom: 40px;
        }

        .testimonials .testimonials-carousel,
        .testimonials .testimonials-slider {
            overflow: hidden;
        }

        .testimonials .testimonial-item {
            text-align: center;
        }

        .testimonials .testimonial-item .testimonial-img {
            width: 120px;
            border-radius: 50%;
            border: 4px solid var(--background-color);
            margin: 0 auto;
        }

        .testimonials .testimonial-item h3 {
            font-size: 20px;
            font-weight: bold;
            margin: 10px 0 5px 0;
        }

        .testimonials .testimonial-item h4 {
            font-size: 14px;
            color: color-mix(in srgb, var(--default-color), transparent 40%);
            margin: 0 0 15px 0;
        }

        .testimonials .testimonial-item .stars {
            margin-bottom: 15px;
        }

        .testimonials .testimonial-item .stars i {
            color: #ffc107;
            margin: 0 1px;
        }

        .testimonials .testimonial-item .quote-icon-left,
        .testimonials .testimonial-item .quote-icon-right {
            color: color-mix(in srgb, var(--accent-color), transparent 50%);
            font-size: 26px;
            line-height: 0;
        }

        .testimonials .testimonial-item .quote-icon-left {
            display: inline-block;
            left: -5px;
            position: relative;
        }

        .testimonials .testimonial-item .quote-icon-right {
            display: inline-block;
            right: -5px;
            position: relative;
            top: 10px;
            transform: scale(-1, -1);
        }

        .testimonials .testimonial-item p {
            font-style: italic;
            margin: 0 auto 15px auto;
        }

        .testimonials .swiper-wrapper {
            height: auto;
        }

        .testimonials .swiper-pagination {
            margin-top: 20px;
            position: relative;
        }

        .testimonials .swiper-pagination .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            opacity: 1;
            background-color: color-mix(in srgb, var(--default-color), transparent 85%);
        }

        .testimonials .swiper-pagination .swiper-pagination-bullet-active {
            background-color: var(--accent-color);
        }

        @media (min-width: 992px) {
            .testimonials .testimonial-item p {
                width: 80%;
            }
        }
    </style>
    <style id="section-jgLgQv4ZQj-style">
        .faq-2 .faq-container {
            margin-top: 15px;
        }

        .faq-2 .faq-container .faq-item {
            background-color: var(--surface-color);
            position: relative;
            padding: 20px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .faq-2 .faq-container .faq-item:last-child {
            margin-bottom: 0;
        }

        .faq-2 .faq-container .faq-item h3 {
            font-weight: 600;
            font-size: 18px;
            line-height: 24px;
            margin: 0 30px 0 32px;
            transition: 0.3s;
            cursor: pointer;
        }

        .faq-2 .faq-container .faq-item h3 span {
            color: var(--accent-color);
            padding-right: 5px;
        }

        .faq-2 .faq-container .faq-item h3:hover {
            color: var(--accent-color);
        }

        .faq-2 .faq-container .faq-item .faq-content {
            display: grid;
            grid-template-rows: 0fr;
            transition: 0.3s ease-in-out;
            visibility: hidden;
            opacity: 0;
        }

        .faq-2 .faq-container .faq-item .faq-content p {
            margin-bottom: 0;
            overflow: hidden;
        }

        .faq-2 .faq-container .faq-item .faq-icon {
            position: absolute;
            top: 22px;
            left: 20px;
            font-size: 20px;
            line-height: 0;
            transition: 0.3s;
            color: var(--accent-color);
        }

        .faq-2 .faq-container .faq-item .faq-toggle {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 16px;
            line-height: 0;
            transition: 0.3s;
            cursor: pointer;
        }

        .faq-2 .faq-container .faq-item .faq-toggle:hover {
            color: var(--accent-color);
        }

        .faq-2 .faq-container .faq-active h3 {
            color: var(--accent-color);
        }

        .faq-2 .faq-container .faq-active .faq-content {
            grid-template-rows: 1fr;
            visibility: visible;
            opacity: 1;
            padding-top: 10px;
        }

        .faq-2 .faq-container .faq-active .faq-toggle {
            transform: rotate(90deg);
            color: var(--accent-color);
        }
    </style>
    <style id="section-KGlZNVDwlB-style">
        .contact .info-wrap {
            background-color: var(--surface-color);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            border-top: 3px solid var(--accent-color);
            border-bottom: 3px solid var(--accent-color);
            padding: 30px;
            height: 100%;
        }

        @media (max-width: 575px) {
            .contact .info-wrap {
                padding: 20px;
            }
        }

        .contact .info-item {
            margin-bottom: 40px;
        }

        .contact .info-item i {
            font-size: 20px;
            color: var(--accent-color);
            background: color-mix(in srgb, var(--accent-color), transparent 92%);
            width: 44px;
            height: 44px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
            margin-right: 15px;
        }

        .contact .info-item h3 {
            padding: 0;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .contact .info-item p {
            padding: 0;
            margin-bottom: 0;
            font-size: 14px;
        }

        .contact .info-item:hover i {
            background: var(--accent-color);
            color: var(--contrast-color);
        }

        .contact .php-email-form {
            background-color: var(--surface-color);
            height: 100%;
            padding: 30px;
            border-top: 3px solid var(--accent-color);
            border-bottom: 3px solid var(--accent-color);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 575px) {
            .contact .php-email-form {
                padding: 20px;
            }
        }

        .contact .php-email-form input[type=text],
        .contact .php-email-form input[type=email],
        .contact .php-email-form textarea {
            font-size: 14px;
            padding: 10px 15px;
            box-shadow: none;
            border-radius: 0;
            color: var(--default-color);
            background-color: color-mix(in srgb, var(--background-color), transparent 50%);
            border-color: color-mix(in srgb, var(--default-color), transparent 80%);
        }

        .contact .php-email-form input[type=text]:focus,
        .contact .php-email-form input[type=email]:focus,
        .contact .php-email-form textarea:focus {
            border-color: var(--accent-color);
        }

        .contact .php-email-form input[type=text]::placeholder,
        .contact .php-email-form input[type=email]::placeholder,
        .contact .php-email-form textarea::placeholder {
            color: color-mix(in srgb, var(--default-color), transparent 70%);
        }

        .contact .php-email-form button[type=submit] {
            color: var(--contrast-color);
            background: var(--accent-color);
            border: 0;
            padding: 10px 30px;
            transition: 0.4s;
            border-radius: 50px;
        }

        .contact .php-email-form button[type=submit]:hover {
            background: color-mix(in srgb, var(--accent-color), transparent 25%);
        }
    </style>
    <style id="builder-components-styles"></style>
    <style id="page-K79jpDYRJl-header-style">
        .index-page .header {
            --background-color: rgba(255, 255, 255, 0);
            --heading-color: #ffffff;
            --nav-color: #ffffff;
        }

        .index-page.scrolled .header {
            --background-color: rgba(40, 58, 90, 0.9);
        }
    </style>
    <style id="builder-custom-styles"></style>
    <style id="builder-colors-styles"></style>
    <link id="builder-main-style" rel="stylesheet"
        href="https://builder.bootstrapmade.com/assets/css/builder.css?v=33161312512024-08-07 11:08">
    <style id="builder-header-offsets">
        .builder-add-components-btn {
            margin-top: 128.5px;
        }

        .page-title~.builder-add-components-btn {
            margin-top: 40px;
        }

        .builder-add-placeholder {
            margin-top: 128.5px;
        }

        .page-title~.builder-add-placeholder,
        .builder-section-wrap+.builder-add-placeholder {
            margin-top: 40px;
        }

        .builder-section-wrap:first-of-type .builder-section-hover-left,
        .builder-section-wrap:first-of-type .builder-section-hover-right {
            top: 103.5px;
        }

        .builder-section-wrap:first-of-type .builder-section-hover-top {
            top: 88.5px;
        }

        ;
    </style>
    <style id="builder-priority-styles"></style>
</head>

<body class="builder-mode index-page scrolled"><a href="#" id="scroll-top"
        class="scroll-top d-flex align-items-center justify-content-center active"><i
            class="bi bi-arrow-up-short"></i></a>

    <header id="header" class="header d-flex align-items-center fixed-top" data-builder="header"
        data-js=" scrolled scroll-up-sticky">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto" contenteditable="true"
                spellcheck="false">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="https://builder.bootstrapmade.com/static/img/logo.png" alt=""> -->
                <h1 class="sitename" contenteditable="true" spellcheck="false">Arsha</h1>
            </a>

            <nav id="navmenu" class="navmenu" data-builder="navmenu" data-js=" mobile-nav-toggle mobile-nav-dropdown">
                <ul>
                    <li contenteditable="true" spellcheck="false"><a href="#hero" class=""
                            contenteditable="true" spellcheck="false">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li contenteditable="true" spellcheck="false"><a href="#services" contenteditable="true"
                            spellcheck="false">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li contenteditable="true" spellcheck="false"><a href="#pricing" contenteditable="true"
                            spellcheck="false">Pricing</a></li>
                    <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="#about">Get Started</a>

        </div>
    </header>
    <main class="main" id="page-K79jpDYRJl" data-name="index">

        <slot type="page-title"></slot>

        <div id="section-PJCl8xpeZU" class="builder-section-wrap position-relative " data-js=" glightbox">
            <section id="hero" class="hero section" data-builder="section"
                data-colorpreset="cp-dark-background">

                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                            data-aos="zoom-out">
                            <h1 contenteditable="true" spellcheck="false">Better Solutions For Your Business</h1>
                            <p contenteditable="true" spellcheck="false">We are team of talented designers making
                                websites with Bootstrap</p>
                            <div class="d-flex">
                                <a href="#about" class="btn-get-started" contenteditable="true"
                                    spellcheck="false">Get Started</a>
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="glightbox btn-watch-video d-flex align-items-center"><i
                                        class="bi bi-play-circle"></i><span>Watch Video</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                            <img src="https://builder.bootstrapmade.com/static/img/template/Arsha/hero-img.png"
                                class="img-fluid animated" alt="">
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <div id="section-50rXLwkw2s" class="builder-section-wrap position-relative " data-js=" init-swiper">
            <section id="clients" class="clients section" data-builder="section"
                data-colorpreset="cp-light-background">

                <slot type="section-title"></slot>

                <div class="container" data-no-editable="true" data-aos="zoom-in">

                    <div class="swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed" : 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                        <div class="swiper-wrapper align-items-center" id="swiper-wrapper-f503eaf54ccd41a3"
                            aria-live="off"
                            style="transition-duration: 0ms; transform: translate3d(-223.2px, 0px, 0px); transition-delay: 0ms;">








                            <div class="swiper-slide" role="group" aria-label="1 / 8" style=""
                                data-swiper-slide-index="0"><img
                                    src="https://builder.bootstrapmade.com/static/img/clients/client-1.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide" role="group" aria-label="2 / 8" style=""
                                data-swiper-slide-index="1"><img
                                    src="https://builder.bootstrapmade.com/static/img/clients/client-2.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 8"
                                style="" data-swiper-slide-index="2"><img
                                    src="https://builder.bootstrapmade.com/static/img/clients/client-3.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="4 / 8"
                                style="" data-swiper-slide-index="3"><img
                                    src="https://builder.bootstrapmade.com/static/img/clients/client-4.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="5 / 8"
                                style="" data-swiper-slide-index="4"><img
                                    src="https://builder.bootstrapmade.com/static/img/clients/client-5.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide" role="group" aria-label="6 / 8" style=""
                                data-swiper-slide-index="5"><img
                                    src="https://builder.bootstrapmade.com/static/img/clients/client-6.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide" role="group" aria-label="7 / 8" style=""
                                data-swiper-slide-index="6"><img
                                    src="https://builder.bootstrapmade.com/static/img/clients/client-7.png"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide" role="group" aria-label="8 / 8" style=""
                                data-swiper-slide-index="7"><img
                                    src="https://builder.bootstrapmade.com/static/img/clients/client-8.png"
                                    class="img-fluid" alt=""></div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>

                </div>

            </section>
        </div>
        <div id="section-8Ej97Lvz3F" class="builder-section-wrap position-relative ">
            <section id="about" class="about section" data-builder="section">

                <div class="container section-title" data-aos="fade-up" data-builder="section-title">
                    <h2 contenteditable="true" spellcheck="false">About Us</h2>
                </div>
                <slot type="section-title"></slot>

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</span></li>
                                <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</span></li>
                                <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                        commodo</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum. </p>
                            <a href="#" class="read-more"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>

                </div>

            </section>
            <div class="builder-section-hover-top builder-section-hover">
                <div data-position="before" class="builder-add-section-btn" title="Add Sections Here"><i
                        class="bi bi-plus"></i> Add Sections Here</div>
            </div>
            <div class="builder-section-hover-left builder-section-hover" data-no-editable="true">
                <div class="builder-section-info"><span title="about-10"></span><span
                        title="<section id=&quot;#about&quot; ...">#about</span></div>
                <div class="builder-duplicate-section builder-hover-button" title="Duplicate Section"><i
                        class="bi bi-files"></i></div>
                <div class="builder-replace-section builder-hover-button" data-type="random"
                    title="Replace with random section from the same category"><i class="bi bi-shuffle"></i></div>
                <div class="builder-replace-section  builder-hover-button" data-type="prev"
                    title="Replace with the previous section from the same category"><i
                        class="bi bi-chevron-left"></i></div>
                <div class="builder-replace-section  builder-hover-button" data-type="next"
                    title="Replace with the next section from the same category"><i class="bi bi-chevron-right"></i>
                </div>
            </div>
            <div class="builder-section-hover-right builder-section-hover">
                <div class="builder-toggle-section-title builder-hover-button" title="Show/Hide Section Title"><i
                        class="bi bi-window"></i></div>
                <div class="builder-move-section builder-hover-button" data-to="up" title="Move Section Up"><i
                        class="bi bi-arrow-up"></i></div>
                <div class="builder-move-section builder-hover-button" data-to="down" title="Move Section Down"><i
                        class="bi bi-arrow-down"></i></div>
                <div class="builder-section-editor builder-hover-button" title="Section Editor"><i
                        class="bi bi-code-slash"></i></div>
                <div class="builder-section-options builder-hover-button" title="Section Options"><i
                        class="bi bi-gear"></i></div>
                <div class="builder-delete-section builder-hover-button" title="Delete Section"><i
                        class="bi bi-trash"></i></div>
            </div>
            <div class="builder-section-hover-bottom builder-section-hover">
                <div data-position="after" class="builder-add-section-btn" title="Add Sections Here"><i
                        class="bi bi-plus"></i> Add Sections Here</div>
            </div>
        </div>
        <div id="section-s5k8AP5JzF" class="builder-section-wrap position-relative " data-js=" faq">
            <section id="why-us" class="section why-us" data-builder="section"
                data-colorpreset="cp-light-background">

                <slot type="section-title"></slot>

                <div class="container-fluid">

                    <div class="row gy-4">

                        <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                                <h3><span>Eum ipsam laborum deleniti </span><strong>velit pariatur architecto aut
                                        nihil</strong></h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                </p>
                            </div>

                            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                                <div class="faq-item faq-active">

                                    <h3><span>01</span> Non consectetur a erat nam at lectus urna duis?</h3>
                                    <div class="faq-content">
                                        <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                            laoreet non curabitur gravida. Venenatis lectus magna fringilla urna
                                            porttitor rhoncus dolor purus non.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item">
                                    <h3><span>02</span> Feugiat scelerisque varius morbi enim nunc faucibus a
                                        pellentesque?</h3>
                                    <div class="faq-content">
                                        <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                            dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item">
                                    <h3><span>03</span> Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                    <div class="faq-content">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                            Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet
                                            nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
                                            convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio
                                            morbi quis</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                            </div>

                        </div>

                        <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                            <img src="https://builder.bootstrapmade.com/static/img/template/Arsha/why-us.png"
                                class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
                        </div>
                    </div>

                </div>

            </section>
        </div>
        <div id="section-qYTuhBPPLv" class="builder-section-wrap position-relative " data-js=" skills-animation">
            <section id="skills" class="skills section" data-builder="section">

                <slot type="section-title"></slot>

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row">

                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="https://builder.bootstrapmade.com/static/img/skills.png" class="img-fluid"
                                alt="">
                        </div>

                        <div class="col-lg-6 pt-4 pt-lg-0 content">

                            <h3>Voluptatem dignissimos provident quasi corporis voluptas</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                            </p>

                            <div class="skills-content skills-animation">

                                <div class="progress">
                                    <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                                <div class="progress">
                                    <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                                <div class="progress">
                                    <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                                <div class="progress">
                                    <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="55"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!-- End Skills Item -->

                            </div>

                        </div>
                    </div>

                </div>

            </section>
        </div>
        <div id="section-dBf1oOvRGG" class="builder-section-wrap position-relative ">
            <section id="services" class="services section" data-builder="section"
                data-colorpreset="cp-light-background">

                <div class="container section-title" data-aos="fade-up" data-builder="section-title">
                    <h2>Services</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div>

                <slot type="section-title"></slot>

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-activity icon"></i></div>
                                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                                <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                                <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                            </div>
                        </div><!-- End Service Item -->

                    </div>

                </div>

            </section>
        </div>
        <div id="section-gYnrSOMNTj" class="builder-section-wrap position-relative ">
            <section id="call-to-action" class="call-to-action section" data-builder="section"
                data-colorpreset="cp-dark-background">

                <img src="https://builder.bootstrapmade.com/static/img/cta-bg.jpg" alt="">

                <div class="container">

                    <div class="row" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-xl-9 text-center text-xl-start">
                            <h3>Call To Action</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="col-xl-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" href="#">Call To Action</a>
                        </div>
                    </div>

                </div>

            </section>
        </div>
        <div id="section-AXNwZFdfGS" class="builder-section-wrap position-relative "
            data-js=" glightbox isotope-layout">
            <section id="portfolio" class="portfolio section" data-builder="section">

                <div class="container section-title" data-aos="fade-up" data-builder="section-title">
                    <h2>Portfolio</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div>

                <slot type="section-title"></slot>

                <div class="container">

                    <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                        data-sort="original-order">

                        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-product">Card</li>
                            <li data-filter=".filter-branding">Web</li>
                        </ul><!-- End Portfolio Filters -->

                        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200"
                            style="position: relative; height: 801.426px;">

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
                                style="position: absolute; left: 0px; top: 0px;">
                                <img src="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-1.jpg"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-1.jpg"
                                        title="App 1" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
                                style="position: absolute; left: 0px; top: 99.4125px;">
                                <img src="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-2.jpg"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 1</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-2.jpg"
                                        title="Product 1" data-gallery="portfolio-gallery-product"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
                                style="position: absolute; left: 0px; top: 173.287px;">
                                <img src="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-3.jpg"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 1</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-3.jpg"
                                        title="Branding 1" data-gallery="portfolio-gallery-branding"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
                                style="position: absolute; left: 0px; top: 239.137px;">
                                <img src="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-4.jpg"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-4.jpg"
                                        title="App 2" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
                                style="position: absolute; left: 0px; top: 312.325px;">
                                <img src="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-5.jpg"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 2</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-5.jpg"
                                        title="Product 2" data-gallery="portfolio-gallery-product"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
                                style="position: absolute; left: 0px; top: 447.538px;">
                                <img src="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-6.jpg"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 2</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-6.jpg"
                                        title="Branding 2" data-gallery="portfolio-gallery-branding"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app"
                                style="position: absolute; left: 0px; top: 582.163px;">
                                <img src="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-7.jpg"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-7.jpg"
                                        title="App 3" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product"
                                style="position: absolute; left: 0px; top: 654.451px;">
                                <img src="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-8.jpg"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 3</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-8.jpg"
                                        title="Product 3" data-gallery="portfolio-gallery-product"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding"
                                style="position: absolute; left: 0px; top: 728.013px;">
                                <img src="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-9.jpg"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 3</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="https://builder.bootstrapmade.com/static/img/masonry-portfolio/masonry-portfolio-9.jpg"
                                        title="Branding 2" data-gallery="portfolio-gallery-branding"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->

                        </div><!-- End Portfolio Container -->

                    </div>

                </div>

            </section>
        </div>
        <div id="section-Nnbjr4NCTo" class="builder-section-wrap position-relative ">
            <section id="team" class="team section" data-builder="section">

                <div class="container section-title" data-aos="fade-up" data-builder="section-title">
                    <h2>Team</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div>

                <slot type="section-title"></slot>

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="team-member d-flex align-items-start">
                                <div class="pic"><img
                                        src="https://builder.bootstrapmade.com/static/img/team/team-1.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""> <i class="bi bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="team-member d-flex align-items-start">
                                <div class="pic"><img
                                        src="https://builder.bootstrapmade.com/static/img/team/team-2.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""> <i class="bi bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="team-member d-flex align-items-start">
                                <div class="pic"><img
                                        src="https://builder.bootstrapmade.com/static/img/team/team-3.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""> <i class="bi bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="team-member d-flex align-items-start">
                                <div class="pic"><img
                                        src="https://builder.bootstrapmade.com/static/img/team/team-4.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter-x"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""> <i class="bi bi-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Team Member -->

                    </div>

                </div>

            </section>
        </div>
        <div id="section-cOPkkAMRUy" class="builder-section-wrap position-relative ">
            <section id="pricing" class="pricing section" data-builder="section"
                data-colorpreset="cp-light-background">

                <div class="container section-title" data-aos="fade-up" data-builder="section-title">
                    <h2>Pricing</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div>

                <slot type="section-title"></slot>

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pricing-item">
                                <h3>Free Plan</h3>
                                <h4><sup>$</sup>0<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                    <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                    <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa
                                            ultricies</span></li>
                                    <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis
                                            hendrerit</span></li>
                                </ul>
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pricing-item featured">
                                <h3>Business Plan</h3>
                                <h4><sup>$</sup>29<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                    <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                    <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                    <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                                    <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                                </ul>
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pricing-item">
                                <h3>Developer Plan</h3>
                                <h4><sup>$</sup>49<span> / month</span></h4>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                    <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                    <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                    <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                                    <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                                </ul>
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>
                        </div><!-- End Pricing Item -->

                    </div>

                </div>

            </section>
        </div>
        <div id="section-97zyqOl7Qc" class="builder-section-wrap position-relative " data-js=" init-swiper">
            <section id="testimonials" class="testimonials section" data-builder="section">

                <div class="container section-title" data-aos="fade-up" data-builder="section-title">
                    <h2>Testimonials</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div>

                <slot type="section-title"></slot>

                <div class="container" data-aos="fade-up" data-aos-delay="100" data-no-editable="true">

                    <div class="swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                        <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed" : 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                        <div class="swiper-wrapper" id="swiper-wrapper-5cd3639e0131e24a" aria-live="off"
                            style="transform: translate3d(-297.6px, 0px, 0px); transition-duration: 0ms; transition-delay: 0ms;">

                            <!-- End testimonial item -->

                            <!-- End testimonial item -->

                            <!-- End testimonial item -->

                            <!-- End testimonial item -->

                            <!-- End testimonial item -->

                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 5"
                                data-swiper-slide-index="2">
                                <div class="testimonial-item">
                                    <img src="https://builder.bootstrapmade.com/static/img/testimonials/testimonials-3.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                            quem veniam duis minim tempor labore quem eram duis noster aute amet eram
                                            fore quis sint minim.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="4 / 5" data-swiper-slide-index="3">
                                <div class="testimonial-item">
                                    <img src="https://builder.bootstrapmade.com/static/img/testimonials/testimonials-4.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export
                                            minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt
                                            elit fore quem dolore labore illum veniam.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="5 / 5" data-swiper-slide-index="4">
                                <div class="testimonial-item">
                                    <img src="https://builder.bootstrapmade.com/static/img/testimonials/testimonials-5.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                                            tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum
                                            fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 5"
                                data-swiper-slide-index="0">
                                <div class="testimonial-item">
                                    <img src="https://builder.bootstrapmade.com/static/img/testimonials/testimonials-1.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                            suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                            Maecen aliquam, risus at semper.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 5"
                                data-swiper-slide-index="1">
                                <div class="testimonial-item">
                                    <img src="https://builder.bootstrapmade.com/static/img/testimonials/testimonials-2.jpg"
                                        class="testimonial-img" alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem
                                            cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                            noster fugiat irure amet legam anim culpa.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                            <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 2"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 3"></span><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 4" aria-current="true"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 6"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 8"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>

                </div>

            </section>
        </div>
        <div id="section-jgLgQv4ZQj" class="builder-section-wrap position-relative " data-js=" faq">
            <section id="faq-2" class="faq-2 section" data-builder="section"
                data-colorpreset="cp-light-background">

                <div class="container section-title" data-aos="fade-up" data-builder="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <slot type="section-title"></slot>

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-lg-10">

                            <div class="faq-container">

                                <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                                    <div class="faq-content">
                                        <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                            laoreet non curabitur gravida. Venenatis lectus magna fringilla urna
                                            porttitor rhoncus dolor purus non.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                                    <div class="faq-content">
                                        <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                            dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                    <div class="faq-content">
                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                            Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet
                                            nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
                                            convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio
                                            morbi quis</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                                    <div class="faq-content">
                                        <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                            dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
                                    <div class="faq-content">
                                        <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                            suspendisse in est ante in. Nunc vel risus commodo viverra maecenas
                                            accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis
                                            blandit turpis cursus in</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                            </div>

                        </div>

                    </div>

                </div>

            </section>
        </div>
        <div id="section-KGlZNVDwlB" class="builder-section-wrap position-relative ">
            <section id="contact" class="contact section" data-builder="section">

                <div class="container section-title" data-aos="fade-up" data-builder="section-title">
                    <h2>Contact</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div>

                <slot type="section-title"></slot>

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-5">

                            <div class="info-wrap">
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h3>Address</h3>
                                        <p>A108 Adam Street, New York, NY 535022</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone flex-shrink-0"></i>
                                    <div>
                                        <h3>Call Us</h3>
                                        <p>+1 5589 55488 55</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h3>Email Us</h3>
                                        <p>info@example.com</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                                    frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <form action="forms/contact.php" method="post" class="php-email-form"
                                data-aos="fade-up" data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <label for="name-field" class="pb-2">Your Name</label>
                                        <input type="text" name="name" id="name-field" class="form-control"
                                            required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email-field" class="pb-2">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="subject-field" class="pb-2">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="message-field" class="pb-2">Message</label>
                                        <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>

            </section>
        </div>
        <div class="justify-content-center builder-add-components-btn"><a href=""
                class="builder-add-section-btn d-flex align-items-center justify-content-center"
                title="Add Sections Here"><i class="bi bi-plus"></i> Add Sections Here</a></div>
        <slot type="sections"></slot>

    </main>
    <footer id="footer" class="footer" data-builder="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email"><input
                                    type="submit" value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">Arsha</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span>
            </p>

        </div>

    </footer>
    <script id="builder-vendors-bootstrap-js"
        src="https://builder.bootstrapmade.com/static/vendors/bootstrap/js/bootstrap.bundle.min.js?v=13"></script>
    <script id="builder-vendors-aos-js" src="https://builder.bootstrapmade.com/static/vendors/aos/aos.js?v=13 "></script>
    <script id="vendor-js-php-email-form"
        src="https://builder.bootstrapmade.com/static/vendors/php-email-form/validate.js?v=13"></script>
    <script id="vendor-js-glightbox"
        src="https://builder.bootstrapmade.com/static/vendors/glightbox/js/glightbox.min.js?v=13"></script>
    <script id="vendor-js-swiper" src="https://builder.bootstrapmade.com/static/vendors/swiper/swiper-bundle.min.js?v=13">
    </script>
    <script id="vendor-js-waypoints"
        src="https://builder.bootstrapmade.com/static/vendors/waypoints/noframework.waypoints.js?v=13"></script>
    <script id="vendor-js-imagesloaded"
        src="https://builder.bootstrapmade.com/static/vendors/imagesloaded/imagesloaded.pkgd.min.js?v=13"></script>
    <script id="vendor-js-isotope-layout"
        src="https://builder.bootstrapmade.com/static/vendors/isotope-layout/isotope.pkgd.min.js?v=13"></script>
    <script id="builder-vendors-js"></script>
    <script id="js-scrolled" class="components-js">
        (() => {
            /**
             * Apply .scrolled class to the body as the page is scrolled down
             */
            function toggleScrolled() {
                const selectBody = document.querySelector('body');
                const selectHeader = document.querySelector('#header');
                if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains(
                        'sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
                window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
            }

            document.addEventListener('scroll', toggleScrolled);
            window.addEventListener('load', toggleScrolled);
        })();
    </script>
    <script id="js-scroll-up-sticky" class="components-js">
        (() => {
            /**
             * Scroll up sticky header to headers with .scroll-up-sticky class
             */
            let lastScrollTop = 0;
            window.addEventListener('scroll', function() {
                const selectHeader = document.querySelector('#header');
                if (!selectHeader.classList.contains('scroll-up-sticky')) return;

                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop && scrollTop > selectHeader.offsetHeight) {
                    selectHeader.style.setProperty('position', 'sticky', 'important');
                    selectHeader.style.top = `-${header.offsetHeight + 50}px`;
                } else if (scrollTop > selectHeader.offsetHeight) {
                    selectHeader.style.setProperty('position', 'sticky', 'important');
                    selectHeader.style.top = "0";
                } else {
                    selectHeader.style.removeProperty('top');
                    selectHeader.style.removeProperty('position');
                }
                lastScrollTop = scrollTop;
            });
        })();
    </script>
    <script id="js-mobile-nav-toggle" class="components-js">
        (() => {
            /**
             * Mobile nav toggle
             */
            const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

            function mobileNavToogle() {
                document.querySelector('body').classList.toggle('mobile-nav-active');
                mobileNavToggleBtn.classList.toggle('bi-list');
                mobileNavToggleBtn.classList.toggle('bi-x');
            }
            if (mobileNavToggleBtn) {
                mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
            }

            /**
             * Hide mobile nav on same-page/hash links
             */
            document.querySelectorAll('#navmenu a').forEach(navmenu => {
                navmenu.addEventListener('click', () => {
                    if (document.querySelector('.mobile-nav-active')) {
                        mobileNavToogle();
                    }
                });

            });
        })();
    </script>
    <script id="js-mobile-nav-dropdown" class="components-js">
        (() => {
            /**
             * Toggle mobile nav dropdowns
             */
            document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
                navmenu.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.parentNode.classList.toggle('active');
                    this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
                    e.stopImmediatePropagation();
                });
            });
        })();
    </script>
    <script id="js-scroll-top" class="components-js">
        (() => {
            /**
             * Scroll top button
             */
            let scrollTop = document.querySelector('.scroll-top');

            function toggleScrollTop() {
                if (scrollTop) {
                    window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
                }
            }
            scrollTop.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            window.addEventListener('load', toggleScrollTop);
            document.addEventListener('scroll', toggleScrollTop);
        })();
    </script>
    <script id="js-glightbox" class="components-js">
        (() => {
            /**
             * Initiate glightbox
             */
            const glightbox = GLightbox({
                selector: '.glightbox'
            });
        })();
    </script>
    <script id="js-init-swiper" class="components-js">
        (() => {
            /**
             * Init swiper sliders
             */
            function initSwiper() {
                document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
                    let config = JSON.parse(
                        swiperElement.querySelector(".swiper-config").innerHTML.trim()
                    );

                    if (swiperElement.classList.contains("swiper-tab")) {
                        initSwiperWithCustomPagination(swiperElement, config);
                    } else {
                        new Swiper(swiperElement, config);
                    }
                });
            }

            window.addEventListener("load", initSwiper);
        })();
    </script>
    <script id="js-faq" class="components-js">
        (() => {
            /**
             * Frequently Asked Questions Toggle
             */
            document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
                faqItem.addEventListener('click', () => {
                    faqItem.parentNode.classList.toggle('faq-active');
                });
            });
        })();
    </script>
    <script id="js-skills-animation" class="components-js">
        (() => {
            /**
             * Animate the skills items on reveal
             */
            let skillsAnimation = document.querySelectorAll('.skills-animation');
            skillsAnimation.forEach((item) => {
                new Waypoint({
                    element: item,
                    offset: '80%',
                    handler: function(direction) {
                        let progress = item.querySelectorAll('.progress .progress-bar');
                        progress.forEach(el => {
                            el.style.width = el.getAttribute('aria-valuenow') + '%';
                        });
                    }
                });
            });
        })();
    </script>
    <script id="js-isotope-layout" class="components-js">
        (() => {
            /**
             * Init isotope layout and filters
             */
            document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
                let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
                let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
                let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

                let initIsotope;
                imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
                    initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
                        itemSelector: '.isotope-item',
                        layoutMode: layout,
                        filter: filter,
                        sortBy: sort
                    });
                });

                isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
                    filters.addEventListener('click', function() {
                        isotopeItem.querySelector('.isotope-filters .filter-active').classList
                            .remove('filter-active');
                        this.classList.add('filter-active');
                        initIsotope.arrange({
                            filter: this.getAttribute('data-filter')
                        });
                        if (typeof aosInit === 'function') {
                            aosInit();
                        }
                    }, false);
                });

            });
        })();
    </script>
    <script id="builder-js"></script>
</body>

</html>
