<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New D.P.S. School, Deeghot Senior Secondary</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#025935',
                        secondary: '#facc14',
                        accent: '#ce0915',
                    },
                },
            },
        }
    </script>
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <style>
    .container {
        width: 100%;
        padding-right: 1rem;
        padding-left: 1rem;
        margin-right: auto;
        margin-left: auto;
    }
    @media (min-width: 640px) {
        .container {
            max-width: 640px;
        }
    }
    @media (min-width: 768px) {
        .container {
            max-width: 768px;
        }
    }
    @media (min-width: 1024px) {
        .container {
            max-width: 1024px;
        }
    }
    @media (min-width: 1280px) {
        .container {
            max-width: 1280px;
        }
    }
    .honda-slider {
        padding: 40px 0;
        background: #f8fafc;
    }
    .honda-slider .container {
        display: flex;
        justify-content: center;
    }
    .honda-slider .honda-swiper {
        width: 100%;
        max-width: 1200px;
    }
    .honda-slider .swiper-slide {
        height: 300px;
        display: flex;
        justify-content: center;
    }
    .honda-slider .card {
        width: 100%;
        max-width: 400px;
        height: 100%;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
    }
    .honda-slider .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .honda-slider .swiper-button-next,
    .honda-slider .swiper-button-prev {
        color: var(--primary);
    }
    .honda-slider .swiper-pagination-bullet-active {
        background: var(--primary);
    }
    :root {
        --primary: #025935;
        --secondary: #facc14;
        --accent: #ce0915;
    }
    </style>
    <style>
    /* Mobile Menu Styles */
    #mobile-menu {
        backdrop-filter: blur(8px);
        transition: all 0.3s ease-in-out;
    }
    
    #mobile-menu a,
    #mobile-menu button {
        font-size: 1rem;
        font-weight: 500;
    }
    
    .mobile-dropdown button {
        width: 100%;
        position: relative;
    }
    
    .mobile-dropdown .fa-chevron-down {
        transition: transform 0.3s ease;
    }
    
    .mobile-submenu {
        transition: all 0.3s ease-in-out;
        background: rgba(2, 89, 53, 0.97);
    }
    
    .mobile-submenu a {
        padding-left: 2rem;
        border-left: 3px solid transparent;
    }
    
    .mobile-submenu a:hover {
        border-left-color: #facc14;
        background: rgba(250, 204, 20, 0.1);
    }
    </style>
    </head>
</head>
<body class="bg-gray-50">
    <!-- Top Bar -->
    <div class="bg-primary text-white py-2">
        <div class="container flex flex-col md:flex-row justify-between items-center">
            <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 mb-2 md:mb-0 text-center md:text-left">
                <div class="flex items-center">
                    <i class="fas fa-phone-alt mr-2 text-secondary"></i>
                    <span class="text-sm">+91 9813937336, +91 8053886194</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-envelope mr-2 text-secondary"></i>
                    <span class="text-sm">ndpsdeeghotpalwal@gmail.com</span>
                </div>
            </div>
            <div class="flex space-x-4">
                <a href="https://www.facebook.com/share/15TCnz55jc/?mibextid=wwXIfr" target="_blank" class="hover:text-secondary"><i class="fab fa-facebook-f"></i></a>
                <a href="https://youtube.com/@newdpsschooldeeghot5347?si=_6rwtGxjNt2ThvYL" target="_blank" class="hover:text-secondary"><i class="fab fa-youtube"></i></a>
                <a href="https://maps.app.goo.gl/9ZD9sN6Apza4MGXQ8?g_st=iw" target="_blank" class="hover:text-secondary"><i class="fas fa-map-marker-alt"></i></a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="bg-white shadow-md py-4">
        <div class="container flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div class="flex items-center text-center md:text-left">
                <img src="img/logo.jpeg" alt="School Logo" class="h-16 w-16 md:h-20 md:w-20 mr-4 object-contain">
                <div>
                    <h1 class="text-xl md:text-2xl font-bold text-primary">New D.P.S. School</h1>
                    <p class="text-sm text-gray-600">Deeghot Senior Secondary | Affiliated to CBSE</p>
                    <p class="text-xs text-gray-500">Affiliation No. 531262</p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 w-full md:w-auto">
                <a href="admission.php" class="w-full md:w-auto bg-secondary hover:bg-yellow-500 text-primary px-4 py-2 rounded-md font-medium transition duration-300 text-center">
                    <i class="fas fa-user-plus mr-2"></i>Admission
                </a>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSezPM3u5P0oUMn5b93ozw6sy3CJjzh0cRIEPLeCkGUjR3gvDg/viewform?usp=header" class="w-full md:w-auto bg-primary hover:bg-green-800 text-white px-4 py-2 rounded-md font-medium transition duration-300 text-center">
                    <i class="fas fa-graduation-cap mr-2"></i>Quick Inquiry
                </a>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-primary text-white sticky top-0 z-50 shadow-lg">
        <div class="container">
            <div class="flex justify-between items-center">
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="nav-link py-4 px-2 font-medium hover:text-secondary transition duration-300">Home</a>
                    
                    <div class="dropdown relative">
                        <button class="nav-link py-4 px-2 font-medium hover:text-secondary transition duration-300 flex items-center">
                            About Us <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="dropdown-menu absolute hidden bg-white text-gray-800 shadow-lg rounded-md mt-0 w-48 py-1 z-50">
                            <a href="about.php" class="block px-4 py-2 hover:bg-secondary/10">About School</a>
                            <a href="principal-message.php" class="block px-4 py-2 hover:bg-secondary/10">Principal's Message</a>   
                            <a href="chairman-message.php" class="block px-4 py-2 hover:bg-secondary/10">Chairman's Message</a>
                            <a href="md-message.php" class="block px-4 py-2 hover:bg-secondary/10">MD's Message</a>
                        </div>
                    </div>
                
                    
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSezPM3u5P0oUMn5b93ozw6sy3CJjzh0cRIEPLeCkGUjR3gvDg/viewform" class="nav-link py-4 px-2 font-medium hover:text-secondary transition duration-300">Admission</a>
                    <a href="mandatory-public-disclosure.php" class="nav-link py-4 px-2 font-medium hover:text-secondary transition duration-300">Mandatory Disclosure</a>
                    <a href="fee-structure.php" class="nav-link py-4 px-2 font-medium hover:text-secondary transition duration-300">Fee Structure</a>
                    <a href="facilities.php" class="nav-link py-4 px-2 font-medium hover:text-secondary transition duration-300">Facilities</a>
                    <a href="gallery.php" class="nav-link py-4 px-2 font-medium hover:text-secondary transition duration-300">Gallery</a>
                    <a href="contact-us.php" class="nav-link py-4 px-2 font-medium hover:text-secondary transition duration-300">Contact Us</a>
                </div>
                
                <div class="md:hidden py-4">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-primary/95 pb-4 absolute w-full left-0 top-full shadow-lg border-t border-white/10">
                <a href="index.php" class="block py-3 px-6 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">Home</a>
                
                <div class="mobile-dropdown">
                    <button class="w-full text-left py-3 px-6 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300 flex justify-between items-center">
                        About Us <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-300"></i>
                    </button>
                    <div class="mobile-submenu hidden bg-primary/90 border-t border-b border-white/10">
                        <a href="about.php" class="block py-3 px-8 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">About School</a>
                        <a href="principal-message.php" class="block py-3 px-8 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">Principal's Message</a>
                        <a href="chairman-message.php" class="block py-3 px-8 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">Chairman's Message</a>
                        <a href="md-message.php" class="block py-3 px-8 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">MD's Message</a>
                    </div>
                </div>
                
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSezPM3u5P0oUMn5b93ozw6sy3CJjzh0cRIEPLeCkGUjR3gvDg/viewform" class="block py-3 px-6 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">Admission</a>
                <a href="mandatory-public-disclosure.php" class="block py-3 px-6 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">Mandatory Disclosure</a>
                <a href="fee-structure.php" class="block py-3 px-6 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">Fee Structure</a>
                <a href="facilities.php" class="block py-3 px-6 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">Facilities</a>
                <a href="gallery.php" class="block py-3 px-6 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">Gallery</a>
                <a href="contact-us.php" class="block py-3 px-6 hover:bg-secondary/20 text-white/90 hover:text-white transition-all duration-300">Contact Us</a>
            </div>
        </div>
    </nav>

   