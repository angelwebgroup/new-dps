// Gallery Popup functionality
document.addEventListener('DOMContentLoaded', function() {
    // Create popup elements
    const popup = document.createElement('div');
    popup.className = 'fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 hidden';
    popup.id = 'galleryPopup';

    const popupContent = document.createElement('div');
    popupContent.className = 'relative max-w-4xl w-full mx-4';

    const closeBtn = document.createElement('button');
    closeBtn.className = 'absolute -top-10 right-0 text-white text-3xl hover:text-yellow-500 transition-colors';
    closeBtn.innerHTML = '×';
    closeBtn.onclick = closePopup;

    const popupImg = document.createElement('img');
    popupImg.className = 'w-full h-auto max-h-[80vh] object-contain';

    // Navigation buttons
    const prevBtn = document.createElement('button');
    prevBtn.className = 'absolute left-4 top-1/2 -translate-y-1/2 text-white text-4xl hover:text-yellow-500 transition-colors';
    prevBtn.innerHTML = '‹';

    const nextBtn = document.createElement('button');
    nextBtn.className = 'absolute right-4 top-1/2 -translate-y-1/2 text-white text-4xl hover:text-yellow-500 transition-colors';
    nextBtn.innerHTML = '›';

    // Assemble popup
    popupContent.appendChild(closeBtn);
    popupContent.appendChild(prevBtn);
    popupContent.appendChild(popupImg);
    popupContent.appendChild(nextBtn);
    popup.appendChild(popupContent);
    document.body.appendChild(popup);

    // Get all gallery images
    const galleryItems = document.querySelectorAll('.gallery-item img');
    let currentIndex = 0;

    // Only add event listeners if gallery items exist
    if (galleryItems.length > 0) {
        // Add click event to all gallery images
        galleryItems.forEach((img, index) => {
            img.addEventListener('click', () => {
                currentIndex = index;
                openPopup(img.src);
            });
        });

        // Navigation functions
        prevBtn.onclick = () => {
            currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
            popupImg.src = galleryItems[currentIndex].src;
        };

        nextBtn.onclick = () => {
            currentIndex = (currentIndex + 1) % galleryItems.length;
            popupImg.src = galleryItems[currentIndex].src;
        };

        // Close popup when clicking outside the image
        popup.addEventListener('click', (e) => {
            if (e.target === popup) {
                closePopup();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!popup.classList.contains('hidden')) {
                switch(e.key) {
                    case 'ArrowLeft':
                        prevBtn.click();
                        break;
                    case 'ArrowRight':
                        nextBtn.click();
                        break;
                    case 'Escape':
                        closePopup();
                        break;
                }
            }
        });
    }

    function openPopup(imgSrc) {
        popupImg.src = imgSrc;
        popup.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closePopup() {
        popup.classList.add('hidden');
        document.body.style.overflow = '';
    }
});