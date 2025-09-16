// Wait for the DOM to be fully loaded before running the script.
document.addEventListener('DOMContentLoaded', function() {

    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    window.addEventListener('scroll', function() {
        // If the user has scrolled down more than 300 pixels
        if (window.scrollY > 300) {
            // Add the 'show' class to make it visible
            scrollToTopBtn.classList.add('show');
        } else {
            // Otherwise, remove the 'show' class to hide it
            scrollToTopBtn.classList.remove('show');
        }
    });

    // Scroll to the top when the button is clicked
    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // This makes the scrolling smooth!
        });
    });

    

});