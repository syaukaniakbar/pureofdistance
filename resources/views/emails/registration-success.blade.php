<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pendaftaran Sukses</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ url('images/pod_logo_1_white.PNG') }}" type="image/png">
</head>
<body>
    
<table align="center" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; padding: 20px;">
  <tr>
    <td align="center" style="padding: 0 8px;">
      <img 
        src="https://pureofdistance.com/images/Logo.png?v=2" 
        alt="POD White Logo" 
        height="50"
        style="display: block;"
      >
    </td>
    <td align="center" style="padding: 0 8px;">
      <img 
        src="https://pureofdistance.com/images/PODxtigris.png?v=2" 
        alt="PODxtigris Logo" 
        height="160"
        style="display: block;"
      >
    </td>
  </tr>
</table>


<section style="padding: 30px 20px; font-family: Arial, sans-serif; background-color: #ffffff; color: #222; max-width: 600px; margin: auto; text-align: left;">

  <!-- Title -->
  <h1 style="font-size: 28px; margin-bottom: 4px; color: #2E7D32;">
    Welcome to the Sweat High Club!
  </h1>
  <p style="font-size: 18px; margin-top: 0; margin-bottom: 20px; color: #555;">
    Hi {{ $nama }},
  </p>

  <!-- Intro -->
  <p style="font-size: 16px; line-height: 1.6; color: #444;">
    Terima kasih sudah bergabung bersama kami! Berikut data registrasi yang kami terima:
  </p>

  <!-- User Info -->
<div style="padding: 15px; font-family: Arial, sans-serif; background-color: #ffffff; color: #000000;">
  
  <!-- Nama -->
  <div style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;">
    <div style="font-size: 12px; font-weight: bold; text-transform: uppercase; color: #2E7D32; letter-spacing: 0.5px;">
      Nama
    </div>
    <div style="font-size: 18px; font-weight: normal; margin-top: 2px;">
      {{ $nama }}
    </div>
  </div>

  <!-- No HP -->
  <div style="padding: 8px 0; border-bottom: 1px solid #e0e0e0;">
    <div style="font-size: 12px; font-weight: bold; text-transform: uppercase; color: #2E7D32; letter-spacing: 0.5px;">
      No. HP
    </div>
    <div style="font-size: 18px; font-weight: normal; margin-top: 2px;">
      {{ $no_hp }}
    </div>
  </div>

  <!-- Jenis Kelamin -->
  <div style="padding: 8px 0;">
    <div style="font-size: 12px; font-weight: bold; text-transform: uppercase; color: #2E7D32; letter-spacing: 0.5px;">
      Jenis Kelamin
    </div>
    <div style="font-size: 18px; font-weight: normal; margin-top: 2px;">
      {{ $jenis_kelamin }}
    </div>
  </div>

</div>



 <!-- Event Details Modern -->
<div style="margin:25px 0; padding:20px; background-color:#F9FAFB; border-radius:8px; border:1px solid #E5E7EB; font-family:Arial, sans-serif; color:#111827;">
  <h3 style="margin:0 0 15px 0; font-size:20px; font-weight:bold; color:#16A34A;">
    Pengambilan Gelang Peserta
  </h3>

  <!-- Item -->
  <div style="display:flex; align-items:center; margin-bottom:8px;">
    <span style="display:inline-block; width:20px; height:20px; margin-right:8px;">
      📅
    </span>
    <span style="font-size:16px;"><strong>Tanggal:</strong> 15 Agustus 2025</span>
  </div>

  <div style="display:flex; align-items:center; margin-bottom:8px;">
    <span style="display:inline-block; width:20px; height:20px; margin-right:8px;">
      📍
    </span>
    <span style="font-size:16px;"><strong>Lokasi:</strong> TIGRIS</span>
  </div>

  <div style="display:flex; align-items:center;">
    <span style="display:inline-block; width:20px; height:20px; margin-right:8px;">
      ⏱
    </span>
    <span style="font-size:16px;"><strong>Waktu:</strong> 14.00 – 22.00 WITA</span>
  </div>
</div>


  <!-- Notes -->
  <div style="margin: 25px 0; padding: 15px; background-color: #F1F8E9; border-radius: 6px; border: 1px solid #DCEDC8;">
    <h4 style="margin: 0 0 8px 0; font-size: 16px; color: #1B5E20;">📌 Catatan Penting:</h4>
    <ul style="margin: 0; padding-left: 20px; font-size: 15px; line-height: 1.6; color: #444;">
      <li>Bawa identitas diri atau bukti registrasi.</li>
      <li>Gelang wajib dipakai selama acara berlangsung.</li>
      <li>Pengambilan hanya pada jam yang ditentukan.</li>
    </ul>
  </div>

  <!-- Footer -->
  <hr style="margin: 35px 0; border: none; border-top: 1px solid #eee;">
  <p style="font-size: 14px; color: #777; text-align: center;">
    🌍 Born in Borneo, Bringing the Sweat to Every City. <br>
    <strong style="color: #2E7D32;">POD - Pure of Distance</strong>
  </p>

</section>

</body>
</html>
