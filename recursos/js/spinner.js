document.getElementById('btnlog').addEventListener('click', function() {
    document.getElementById('btnlog').style.display = 'none';
    document.querySelector('.spinner').style.display = 'block';
    setTimeout(function() {
        window.location.href = 'clickme.html';
    }, 1500);
});