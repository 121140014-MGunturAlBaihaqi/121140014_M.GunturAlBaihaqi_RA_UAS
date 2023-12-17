function validateForm() {
    var nim = document.getElementById('nim').value;
    var nama = document.getElementById('nama').value;
    var prodi = document.getElementById('prodi').value;
    var kelamin = document.getElementById('kelamin').value;

    if (nim === '' || nama === '' || prodi === '' || kelamin === '') {
        alert('Semua kolom harus diisi');
        return false;
    }
    return true;
}

document.getElementById('myForm').addEventListener('submit', function (event) {
    if (!validateForm()) {
        event.preventDefault();
    }
});

document.getElementById('cari').addEventListener('click', function () {
    console.log('Tombol "Cari" diklik');
});

document.getElementById('tambahData').addEventListener('click', function () {
    console.log('Tombol "Tambah Data" diklik');
});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function deleteCookie(cname) {
    document.cookie = cname + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

setCookie("username", "Guntur", 30);
var username = getCookie("username");
deleteCookie("username");