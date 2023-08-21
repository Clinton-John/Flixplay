document.addEventListener('DOMContentLoaded', function() {
    const homeButton = document.getElementById('homeButton');

    homeButton.addEventListener('click', function() {
        // Load the initial page content asynchronously without reloading the audio
        loadInitialPage();
    });
});

function loadInitialPage() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'flixplay.html', true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Update the content of the current page without reloading the audio
            document.body.innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}