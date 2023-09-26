document.getElementById('signup-link').addEventListener('click', function(event) {
    event.preventDefault();
    loadSignupPage();
});

function loadSignupPage() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById('signup-content').innerHTML = this.responseText;
        }
    };
    xhttp.open('GET', 'signup.php', true);
    xhttp.send();
}