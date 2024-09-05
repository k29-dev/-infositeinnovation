// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Simulate loading time
    setTimeout(function() {
        // Hide the loading animation and show the content
        document.getElementById('loading').style.display = 'none';
        document.getElementById('content').style.display = 'block';
    }, 3000); // Adjust the timeout duration as needed
});
