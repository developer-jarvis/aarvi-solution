function showPreloader() {
    document.getElementById('preloaderOverlay').style.display = 'block';
}

function hidePreloader() {
    document.getElementById('preloaderOverlay').style.display = 'none';
}

document.addEventListener('click', function (event) {
    var target = event.target;

    // Check if the clicked element is a link
    if (target.tagName === 'A') {
        event.preventDefault(); // Prevent the default behavior

        // Check if the link contains a hash (#)
        if (!target.href.includes('#')) {
            showPreloader(); // Show the preloader

            setTimeout(function () {
                window.location.href = target.href; // Redirect after 500 milliseconds
                hidePreloader(); // Hide the preloader after redirection
            }, 500);
        }
    }
});

