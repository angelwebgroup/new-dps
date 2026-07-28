<?php include ('includes/header.php'); ?>
    
<!-- Hero Section -->
<div class="relative h-[500px] overflow-hidden">
    <div class="absolute inset-0">
        <img src="img/header.jpg" alt="Hero Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-75"></div>
    </div>
    <div class="relative container mx-auto px-4 h-full flex items-center">
        <div class="container mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Welcome to New D.P.S. School, Deeghot</h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Providing quality education with modern facilities and holistic development for students.</p>
            <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-md font-medium text-lg transition duration-300">
                    <i class="fas fa-book-open mr-2"></i>Learn More
                </button>
                <button class="bg-transparent hover:bg-primary text-white border-2 border-white px-6 py-3 rounded-md font-medium text-lg transition duration-300">
                    <i class="fas fa-calendar-alt mr-2"></i>School Tour
                </button>
            </div>
        </div>
    </div>
</div>

<?php include ('announcements.php'); ?>

<!-- Main Slider Section -->
<section class="honda-slider py-5 bg-light">
        <div class="container mx-auto px-4">
            <div class="swiper honda-swiper mx-auto max-w-6xl">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/gallery/women-day/01.webp" class="card-img-top" alt="Sports Event 1">
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/gallery/women-day/02.webp" class="card-img-top" alt="Sports Event 1">
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/gallery/women-day/03.webp" class="card-img-top" alt="Sports Event 1">
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/gallery/women-day/05.webp" class="card-img-top" alt="Sports Event 1">
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/main-slider/slide1.jpeg" class="card-img-top" alt="Sports Event 1">
                        </div>
                    </div>
                    
                    
                     <div class="swiper-slide">
                        <div class="card">
                            <img src="img/main-slider/slide7.webp" class="card-img-top" alt="Sports Event 7">
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/main-slider/slide8.webp" class="card-img-top" alt="Sports Event 8">
                        </div>
                    </div>
                    
                    
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/main-slider/slide3.jpeg" class="card-img-top" alt="Sports Event 3">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/main-slider/slide4.jpeg" class="card-img-top" alt="Sports Event 4">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/main-slider/slide5.jpeg" class="card-img-top" alt="Sports Event 5">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="img/main-slider/slide6.jpeg" class="card-img-top" alt="Sports Event 6">
                        </div>
                    </div>
                    
                    
                    
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    





<!-- Messages Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 relative">
        <h2 class="text-3xl font-bold text-center mb-10 text-primary-900">Messages</h2>
        
        <!-- Scrollable Wrapper with Arrows -->
        <div class="flex items-center">
            <!-- Left Arrow -->
            <button id="scrollLeft" aria-label="Scroll left"
                class="z-10 mr-2 p-2 rounded-full bg-primary-100 hover:bg-primary-200 shadow-md transition disabled:opacity-30">
                <i class="fas fa-chevron-left text-primary-700 text-xl"></i>
            </button>

            <!-- Scroll Container -->
            <div id="messagesCarousel"
                 class="flex gap-8 overflow-x-auto scroll-smooth hide-scrollbar snap-x snap-mandatory"
                 style="scrollbar-width: none; -ms-overflow-style: none;">
                <!-- Chairman's Message -->
                <div class="min-w-[300px] md:min-w-[50%] bg-gray-50 rounded-lg p-8 shadow-md snap-center">
                    <div class="flex items-center mb-6">
                        <img src="img/chairman.jpeg" alt="Chairman"
                            class="w-24 h-24 rounded-full object-cover mr-6">
                        <div>
                            <h3 class="text-2xl font-bold text-primary-900 mb-2">Message from Chairman's Desk</h3>
                            <p class="text-gray-600 text-sm">Mr. Inderjeet Tanwar</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Welcome to New D.P.S. School, where we believe in nurturing young minds and shaping future leaders. Our commitment to excellence in education goes beyond academic achievements. We focus on developing well-rounded individuals who are ready to face the challenges of tomorrow.
                    </p>
                    <a href="chairman-message.php"
                        class="text-primary-700 hover:text-primary-800 font-medium inline-flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- MD's Message -->
                <div class="min-w-[300px] md:min-w-[50%] bg-gray-50 rounded-lg p-8 shadow-md snap-center">
                    <div class="flex items-center mb-6">
                        <img src="img/md.jpeg" alt="Managing Director"
                            class="w-24 h-24 rounded-full object-cover mr-6">
                        <div>
                            <h3 class="text-2xl font-bold text-primary-900 mb-2">Message from MD's Desk</h3>
                            <p class="text-gray-600 text-sm">Mr. Sagar Tanwar</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        At New D.P.S., we strive to create an environment that encourages innovation, creativity, and personal growth. Our state-of-the-art facilities and dedicated faculty ensure that every student receives the best possible education and opportunities for development.
                    </p>
                    <a href="md-message.php"
                        class="text-primary-700 hover:text-primary-800 font-medium inline-flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Principal's Message -->
                <div class="min-w-[300px] md:min-w-[50%] bg-gray-50 rounded-lg p-8 shadow-md snap-center">
                    <div class="flex items-center mb-6">
                        <img src="img/principal.webp" alt="Principal"
                            class="w-24 h-24 rounded-full object-cover mr-6">
                        <div>
                            <h3 class="text-2xl font-bold text-primary-900 mb-2">Message from Principal's Desk</h3>
                            <p class="text-gray-600 text-sm">Mr. Deepak Bhati</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        At New D.P.S., we envision an inclusive, stimulating learning environment. As your Principal, I am dedicated to ensuring that every child feels valued and inspired to excel academically, creatively, and morally. Together, let us ignite a lifelong passion for learning!
                    </p>
                    <a href="principal-message.php"
                        class="text-primary-700 hover:text-primary-800 font-medium inline-flex items-center">
                        Read More <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            <!-- Right Arrow -->
            <button id="scrollRight" aria-label="Scroll right"
                class="z-10 ml-2 p-2 rounded-full bg-primary-100 hover:bg-primary-200 shadow-md transition disabled:opacity-30">
                <i class="fas fa-chevron-right text-primary-700 text-xl"></i>
            </button>
        </div>
    </div>
</section>

<!-- Hide scrollbar (hide-scrollbar utility) -->
<style>
.hide-scrollbar::-webkit-scrollbar {display:none;}
.hide-scrollbar { scrollbar-width: none; -ms-overflow-style: none;}
</style>


<script>
    const carousel = document.getElementById('messagesCarousel');
    const scrollLeftBtn = document.getElementById('scrollLeft');
    const scrollRightBtn = document.getElementById('scrollRight');
    let autoScrollInterval;
    const cardWidth = carousel.querySelector('div').offsetWidth + 32; // 32px = gap-8

    function scrollToNext() {
        carousel.scrollBy({ left: cardWidth, behavior: 'smooth' });
    }
    function scrollToPrev() {
        carousel.scrollBy({ left: -cardWidth, behavior: 'smooth' });
    }

    // Buttons
    scrollRightBtn.onclick = scrollToNext;
    scrollLeftBtn.onclick = scrollToPrev;

    // Auto-scroll every 5 seconds
    function startAutoScroll() {
        autoScrollInterval = setInterval(() => {
            // if at end, scroll to start
            if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 10) {
                carousel.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                scrollToNext();
            }
        }, 5000);
    }

    function stopAutoScroll() {
        clearInterval(autoScrollInterval);
    }

    // Pause auto-scroll on hover or focus for accessibility
    carousel.addEventListener('mouseenter', stopAutoScroll);
    carousel.addEventListener('mouseleave', startAutoScroll);
    carousel.addEventListener('focusin', stopAutoScroll);
    carousel.addEventListener('focusout', startAutoScroll);

    startAutoScroll();
</script>


<!-- About Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-primary-900 mb-4">About Our School</h2>
            <div class="w-20 h-1 bg-yellow-500 mx-auto mb-4"></div>
            <p class="text-gray-600 max-w-3xl mx-auto">New D.P.S. School, Deeghot Senior Secondary is committed to providing quality education that nurtures the intellectual, emotional, and physical growth of every student.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="feature-card bg-gray-50 p-6 rounded-lg shadow-md transition duration-300">
                <div class="text-primary mb-4">
                    <i class="fas fa-graduation-cap text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-primary">Quality Education</h3>
                <p class="text-gray-600">We follow the CBSE curriculum with a focus on holistic development through innovative teaching methodologies.</p>
            </div>
            
            <div class="feature-card bg-gray-50 p-6 rounded-lg shadow-md transition duration-300">
                <div class="text-primary mb-4">
                    <i class="fas fa-users text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-primary">Experienced Faculty</h3>
                <p class="text-gray-600">Our dedicated and qualified teachers provide personalized attention to each student's learning needs.</p>
            </div>
            
            <div class="feature-card bg-gray-50 p-6 rounded-lg shadow-md transition duration-300">
                <div class="text-primary mb-4">
                    <i class="fas fa-laptop-house text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-primary">Modern Infrastructure</h3>
                <p class="text-gray-600">State-of-the-art facilities including smart classrooms, labs, library, and sports complex for comprehensive development.</p>
            </div>
        </div>
    </section>

    <!-- School Features -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary-900 mb-4">Why Choose New D.P.S. Deeghot?</h2>
                <div class="w-20 h-1 bg-yellow-500 mx-auto mb-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-atom text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-primary">Science Labs</h3>
                    <p class="text-gray-600 text-sm">Well-equipped physics, chemistry and biology labs for practical learning</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-laptop-code text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-primary">Computer Lab</h3>
                    <p class="text-gray-600 text-sm">Modern computer lab with latest technology and internet access</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-primary">Library</h3>
                    <p class="text-gray-600 text-sm">Extensive collection of books, journals and digital resources</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-running text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-primary">Sports</h3>
                    <p class="text-gray-600 text-sm">Indoor and outdoor sports facilities for physical development</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-music text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-primary">Music & Arts</h3>
                    <p class="text-gray-600 text-sm">Dedicated spaces for music, dance, and visual arts education</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bus text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-primary">Transport</h3>
                    <p class="text-gray-600 text-sm">Safe and reliable school transportation services</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-utensils text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-primary">Cafeteria</h3>
                    <p class="text-gray-600 text-sm">Hygienic and nutritious meals for students</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heartbeat text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-primary">Medical Care</h3>
                    <p class="text-gray-600 text-sm">First aid and medical facilities with trained staff</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-4">What Parents Say</h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-secondary mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"My child has shown remarkable improvement in both academics and extracurricular activities since joining New D.P.S. Deeghot. The teachers are very supportive."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Parent" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-medium text-primary">Mrs. Sharma</h4>
                            <p class="text-sm text-gray-500">Parent of Class 5 Student</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"The school provides excellent facilities and focuses on overall development. My daughter enjoys going to school every day and is learning valuable life skills."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Parent" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-medium text-primary-900">Mr. Singh</h4>
                            <p class="text-sm text-gray-500">Parent of Class 8 Student</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">"The management is very responsive to parent concerns. The annual events showcase the talents of students beautifully. Highly recommended school in the area."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Parent" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-medium text-primary-900">Mrs. Gupta</h4>
                            <p class="text-sm text-gray-500">Parent of Class 10 Student</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News & Events -->
    <!-- <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-4">News & Events</h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="border rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-calendar-day mr-2 text-secondary"></i>
                            <span>15 Oct 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-primary">Annual Sports Day</h3>
                        <p class="text-gray-600 mb-4">Join us for our exciting Annual Sports Day featuring various competitions and performances by our students.</p>
                        <a href="#" class="text-primary font-medium hover:underline">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                
                <div class="border rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-calendar-day mr-2 text-secondary"></i>
                            <span>25 Oct 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-primary">Science Exhibition</h3>
                        <p class="text-gray-600 mb-4">Students will showcase innovative science projects demonstrating their creativity and scientific understanding.</p>
                        <a href="#" class="text-primary font-medium hover:underline">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                
                <div class="border rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-calendar-day mr-2 text-secondary"></i>
                            <span>12 Nov 2023</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-primary">Reading Week Celebration</h3>
                        <p class="text-gray-600 mb-4">A week-long celebration to promote reading habits among students with various activities and competitions.</p>
                        <a href="#" class="text-primary font-medium hover:underline">Read More <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <button class="bg-primary hover:bg-black text-white px-6 py-3 rounded-md font-medium transition duration-300">
                    <i class="fas fa-newspaper mr-2"></i>View All News
                </button>
            </div>
        </div>
    </section> -->

<?php include ('includes/footer.php'); ?>