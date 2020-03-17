function mydunction() {
    var email = document.getElementById('inputEmail').value;
    var text = document.getElementById('inputNachrivht').value;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "mail.php?email=info@boomboxbeilstein.de&text=" + text, true);
    xmlhttp.send();

}
