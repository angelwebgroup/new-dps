<?php include("includes/header.php"); ?>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-primary mb-4">Photo Gallery</h1>
                <div class="w-20 h-1 bg-secondary mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">Capturing moments and memories from our vibrant school life.</p>
            </div>

            <!-- Gallery Categories -->
            <div class="flex flex-wrap justify-center gap-4 mb-8" id="filter-buttons">
                <button class="px-6 py-2 bg-primary text-white rounded-full hover:bg-primary/80 transition duration-300" data-filter="all">All</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition duration-300" data-filter="academic">Academic</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition duration-300" data-filter="sports">Sports</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition duration-300" data-filter="cultural">Cultural</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition duration-300" data-filter="events">Events</button>
                <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition duration-300" data-filter="women-day">Women Day</button>
                <!--<button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition duration-300" data-filter="diwali">Diwali</button>-->
                <!--<button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition duration-300" data-filter="holi">Holi</button>-->
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="gallery-grid">
                <!-- WomenDay Activities -->
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="women-day">
                    <a href="img/gallery/women-day/01.webp" class="gallery-link"><img src="img/gallery/women-day/01.webp" alt="Women Day" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="women-day">
                    <a href="img/gallery/women-day/02.webp" class="gallery-link"><img src="img/gallery/women-day/02.webp" alt="Women Day" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="women-day">
                    <a href="img/gallery/women-day/03.webp" class="gallery-link"><img src="img/gallery/women-day/03.webp" alt="Women Day" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="women-day">
                    <a href="img/gallery/women-day/04.webp" class="gallery-link"><img src="img/gallery/women-day/04.webp" alt="Women Day" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="women-day">
                    <a href="img/gallery/women-day/05.webp" class="gallery-link"><img src="img/gallery/women-day/05.webp" alt="Women Day" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="women-day">
                    <a href="img/gallery/women-day/06.webp" class="gallery-link"><img src="img/gallery/women-day/06.webp" alt="Women Day" class="w-full h-64 object-cover"></a>
                </div>

                <!-- Academic Activities -->
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="academic">
                    <a href="img/gallery/gallery4.jpeg" class="gallery-link"><img src="img/gallery/gallery4.jpeg" alt="School Activity" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="academic">
                    <a href="img/gallery/gallery5.webp" class="gallery-link"><img src="img/gallery/gallery5.webp" alt="School Activity" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="academic">
                    <a href="img/gallery/gallery6.webp" class="gallery-link"><img src="img/gallery/gallery6.webp" alt="School Activity" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="academic">
                    <a href="img/gallery/gallery1.jpeg" class="gallery-link"><img src="img/gallery/gallery1.jpeg" alt="School Activity" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="academic">
                    <a href="img/gallery/gallery2.jpeg" class="gallery-link"><img src="img/gallery/gallery2.jpeg" alt="School Activity" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="academic">
                    <a href="img/gallery/gallery3.jpeg" class="gallery-link"><img src="img/gallery/gallery3.jpeg" alt="School Activity" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="academic">
                    <a href="img/gallery/WhatsApp Image 2025-08-02 at 20.52.00.jpeg" class="gallery-link"><img src="img/gallery/WhatsApp Image 2025-08-02 at 20.52.00.jpeg" alt="School Activity" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="academic">
                    <a href="img/gallery/WhatsApp Image 2025-08-02 at 20.59.56.jpeg" class="gallery-link"><img src="img/gallery/WhatsApp Image 2025-08-02 at 20.59.56.jpeg" alt="Academic Achievement" class="w-full h-64 object-cover"></a>
                </div>

                <!-- Events -->
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="events">
                    <a href="img/gallery/WhatsApp Image 2025-08-02 at 20.52.03 (1).jpeg" class="gallery-link"><img src="img/gallery/WhatsApp Image 2025-08-02 at 20.52.03 (1).jpeg" alt="School Event" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="events">
                    <a href="img/gallery/WhatsApp Image 2025-08-02 at 20.52.05 (1).jpeg" class="gallery-link"><img src="img/gallery/WhatsApp Image 2025-08-02 at 20.52.05 (1).jpeg" alt="School Program" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="events">
                    <a href="img/gallery/WhatsApp Image 2025-08-02 at 20.52.06 (1).jpeg" class="gallery-link"><img src="img/gallery/WhatsApp Image 2025-08-02 at 20.52.06 (1).jpeg" alt="School Function" class="w-full h-64 object-cover"></a>
                </div>
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="events">
                    <a href="img/gallery/WhatsApp Image 2025-08-02 at 21.00.20.jpeg" class="gallery-link"><img src="img/gallery/WhatsApp Image 2025-08-02 at 21.00.20.jpeg" alt="Special Event" class="w-full h-64 object-cover"></a>
                </div>

                <!-- Cultural -->
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="cultural">
                    <a href="img/gallery/WhatsApp Image 2025-08-02 at 20.56.32 (1).jpeg" class="gallery-link"><img src="img/gallery/WhatsApp Image 2025-08-02 at 20.56.32 (1).jpeg" alt="Cultural Event" class="w-full h-64 object-cover"></a>
                </div>

                <!-- Sports -->
                <div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="sports">
                    <a href="img/gallery/WhatsApp Image 2025-08-02 at 20.59.16.jpeg" class="gallery-link"><img src="img/gallery/WhatsApp Image 2025-08-02 at 20.59.16.jpeg" alt="Sports Activity" class="w-full h-64 object-cover"></a>
                </div>

                <!-- Diwali -->
                <!--<div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="diwali">-->
                <!--    <a href="img/gallery/diwali/01.webp" class="gallery-link"><img src="img/gallery/diwali/01.webp" alt="Diwali Celebration" class="w-full h-64 object-cover"></a>-->
                <!--</div>-->

                <!-- Holi -->
                <!--<div class="gallery-item relative overflow-hidden rounded-lg shadow-md" data-category="holi">-->
                <!--    <a href="img/gallery/holi/01.webp" class="gallery-link"><img src="img/gallery/holi/01.webp" alt="Holi Celebration" class="w-full h-64 object-cover"></a>-->
                <!--</div>-->
            </div>

            <!-- Load More Button -->
            <!--<div class="text-center mt-12">-->
            <!--    <button class="bg-primary text-white px-8 py-3 rounded-md hover:bg-primary/80 transition duration-300">-->
            <!--        <i class="fas fa-plus mr-2"></i>Load More-->
            <!--    </button>-->
            <!--</div>-->
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="relative bg-white p-4 rounded-lg max-w-3xl w-full">
            <button id="close-lightbox" class="absolute top-2 right-2 bg-white rounded-full p-1 leading-none text-2xl z-10">&times;</button>
            <img id="lightbox-img" src="" alt="Lightbox Image" class="w-full h-auto rounded-lg">
            <button id="prev-lightbox" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md"><i class="fas fa-chevron-left"></i></button>
            <button id="next-lightbox" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    <!-- Video Lightbox Modal -->
    <div id="video-lightbox" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="relative bg-white p-4 rounded-lg max-w-3xl w-full">
            <button id="close-video-lightbox" class="absolute top-2 right-2 bg-white rounded-full p-1 leading-none text-2xl z-10">&times;</button>
            <video id="video-lightbox-player" src="" class="w-full h-auto rounded-lg" controls></video>
        </div>
    </div>

    <!-- Video Gallery Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-4">Video Gallery</h2>
                <div class="w-20 h-1 bg-secondary mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-3xl mx-auto">Watch highlights from our school events and activities.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="video-grid">
                <!-- Video thumbnails with play button overlay -->
                <div class="relative rounded-lg overflow-hidden shadow-md cursor-pointer video-thumbnail" data-video-src="img/gallery/slide8.mp4" data-category="cultural">
                    <img src="img/gallery/slide8.jpeg" alt="Annual Day Video" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <i class="fas fa-play-circle text-white text-5xl hover:text-secondary transition duration-300"></i>
                    </div>
                    <h3 class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black p-4 text-white">Annual Day 2023</h3>
                </div>

                <div class="relative rounded-lg overflow-hidden shadow-md cursor-pointer video-thumbnail" data-video-src="img/gallery/slide9.mp4" data-category="sports">
                    <img src="img/gallery/slide9.jpeg" alt="Sports Day Video" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <i class="fas fa-play-circle text-white text-5xl hover:text-secondary transition duration-300"></i>
                    </div>
                    <h3 class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black p-4 text-white">Sports Day Highlights</h3>
                </div>

                <div class="relative rounded-lg overflow-hidden shadow-md cursor-pointer video-thumbnail" data-video-src="img/gallery/women-day/07.mp4" data-category="academic">
                    <img src="img/gallery/women-day/02.webp" alt="Science Fair Video" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <i class="fas fa-play-circle text-white text-5xl hover:text-secondary transition duration-300"></i>
                    </div>
                    <h3 class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black p-4 text-white">Science Exhibition 2023</h3>
                </div>
            </div>
        </div>
    </section>
<?php include ('includes/footer.php'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.flex-wrap button');
        const galleryItems = document.querySelectorAll('.gallery-item');
        const videoItems = document.querySelectorAll('#video-grid .video-thumbnail');
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const closeLightbox = document.getElementById('close-lightbox');
        const prevLightbox = document.getElementById('prev-lightbox');
        const nextLightbox = document.getElementById('next-lightbox');
        const galleryLinks = document.querySelectorAll('.gallery-link');
        let currentIndex = 0;

        const videoLightbox = document.getElementById('video-lightbox');
        const videoPlayer = document.getElementById('video-lightbox-player');
        const closeVideoLightbox = document.getElementById('close-video-lightbox');
        const videoThumbnails = document.querySelectorAll('.video-thumbnail');

        // Video lightbox functionality
        videoThumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                const videoSrc = thumbnail.dataset.videoSrc;
                videoPlayer.src = videoSrc;
                videoLightbox.classList.remove('hidden');
                videoPlayer.play();
            });
        });

        closeVideoLightbox.addEventListener('click', () => {
            videoLightbox.classList.add('hidden');
            videoPlayer.pause();
            videoPlayer.src = '';
        });

        // Filter functionality
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;
                
                // Update button styles
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-primary', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });
                button.classList.add('bg-primary', 'text-white');
                button.classList.remove('bg-gray-200', 'text-gray-700');

                // Filter gallery items
                galleryItems.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Filter video items
                videoItems.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Lightbox functionality
        const openLightbox = (index) => {
            currentIndex = index;
            const imgSrc = galleryLinks[currentIndex].href;
            lightboxImg.src = imgSrc;
            lightbox.classList.remove('hidden');
        };

        const close = () => {
            lightbox.classList.add('hidden');
        };

        const showPrev = () => {
            currentIndex = (currentIndex - 1 + galleryLinks.length) % galleryLinks.length;
            openLightbox(currentIndex);
        };

        const showNext = () => {
            currentIndex = (currentIndex + 1) % galleryLinks.length;
            openLightbox(currentIndex);
        };

        galleryLinks.forEach((link, index) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                openLightbox(index);
            });
        });

        closeLightbox.addEventListener('click', close);
        prevLightbox.addEventListener('click', showPrev);
        nextLightbox.addEventListener('click', showNext);

        // Close lightbox on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                close();
            }
        });

        // Close lightbox when clicking outside
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                close();
            }
        });

        videoLightbox.addEventListener('click', (e) => {
            if (e.target === videoLightbox) {
                closeVideoLightbox.click();
            }
        });
    });
</script>