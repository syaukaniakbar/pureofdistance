<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pendaftaran Sukses</title>
</head>
<body>
    <h2>Halo {{ $nama }},</h2>

    <p>Terima kasih telah mendaftar! Berikut data yang telah kami terima:</p>

    <ul>
        <li><strong>Nama:</strong> {{ $nama }}</li>
        <li><strong>No HP:</strong> {{ $no_hp }}</li>
        <li><strong>Jenis Kelamin:</strong> {{ $jenis_kelamin }}</li>
    </ul>

    <p>Kami akan menghubungi Anda jika ada informasi lanjutan.</p>

    <p>Salam,</p>
    <p><strong>Panitia Registrasi</strong></p>
</body>
</html>
