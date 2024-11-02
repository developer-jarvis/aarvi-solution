function showPreloader() {
    document.getElementById('preloaderOverlay').style.display = 'block';
}

function hidePreloader() {
    document.getElementById('preloaderOverlay').style.display = 'none';
}

// Attach event listeners to links, form submissions, and page load
document.addEventListener('DOMContentLoaded', function () {
    // Attach event listener to all links
    var links = document.querySelectorAll('a');
    links.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default behavior
            
            // Check if the link contains a hash (#)
            if (!link.href.includes('#')) {
                showPreloader(); // Show the preloader
            }

            setTimeout(function () {
                window.location.href = link.href; // Redirect after 1 second
                hidePreloader(); // Hide the preloader after redirection
            }, 500);
        });
    });
});


$(document).ready(function () {
    // Hide the category on mobile devices by default
    if ($(window).width() < 768) {
      $('#categoryShow').hide();
    }

    // Toggle category visibility on button click
    $('#selectBtn').click(function () {
      $('#categoryShow').slideToggle('slow');
    });
  });