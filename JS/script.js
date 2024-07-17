document.getElementById('login-form').addEventListener('submit', function (event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('error-message');

    if (username === "" || password === "") {
        errorMessage.style.display = 'block';
        errorMessage.textContent = 'Username dan Password harus diisi.';
    } else {
        errorMessage.style.display = 'none';
        // Proses login di sini
        alert('Login berhasil!');
    }
});
