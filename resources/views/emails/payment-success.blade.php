<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil! – Pureofdistance Run 2026</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #0f172a; color: #f8fafc; }
        .wrapper { max-width: 600px; margin: 0 auto; padding: 24px 16px; }

        /* Header */
        .header {
            background: linear-gradient(135deg, #064e3b 0%, #0f172a 100%);
            border: 1px solid #065f46;
            border-radius: 16px 16px 0 0;
            padding: 36px 32px;
            text-align: center;
        }
        .header-badge {
            display: inline-block;
            background: #10b98122;
            border: 1px solid #10b98155;
            color: #34d399;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 999px;
            margin-bottom: 16px;
        }
        .header h1 {
            font-size: 26px;
            font-weight: 800;
            color: #f1f5f9;
            line-height: 1.3;
        }
        .header p {
            font-size: 14px;
            color: #94a3b8;
            margin-top: 8px;
        }
        .check-icon {
            width: 64px;
            height: 64px;
            background: #10b98122;
            border: 2px solid #34d399;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
            font-size: 28px;
        }

        /* Body */
        .body {
            background: #1e293b;
            border-left: 1px solid #334155;
            border-right: 1px solid #334155;
            padding: 32px;
        }
        .greeting {
            font-size: 16px;
            color: #cbd5e1;
            margin-bottom: 20px;
        }
        .greeting strong { color: #f8fafc; }

        /* Info Card */
        .card {
            background: #0f172a;
            border: 1px solid #334155;
            border-radius: 12px;
            padding: 24px;
            margin: 24px 0;
        }
        .card-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #64748b;
            margin-bottom: 16px;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #1e293b;
        }
        .info-row:last-child { border-bottom: none; }
        .info-label { font-size: 13px; color: #64748b; }
        .info-value { font-size: 14px; font-weight: 600; color: #e2e8f0; text-align: right; max-width: 60%; }

        /* Status Badge */
        .badge-paid {
            display: inline-block;
            background: #10b98122;
            border: 1px solid #10b98155;
            color: #34d399;
            font-size: 12px;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 999px;
            text-transform: uppercase;
        }

        /* Amount */
        .amount-box {
            background: linear-gradient(135deg, #10b98115, #059669_15);
            border: 1px solid #10b98133;
            border-radius: 12px;
            padding: 20px 24px;
            margin: 20px 0;
            text-align: center;
        }
        .amount-label { font-size: 12px; color: #94a3b8; margin-bottom: 6px; }
        .amount-value {
            font-size: 28px;
            font-weight: 800;
            color: #34d399;
        }

        /* QR Section */
        .qr-section {
            text-align: center;
            background: #0f172a;
            border: 1px solid #334155;
            border-radius: 12px;
            padding: 28px 24px;
            margin: 24px 0;
        }
        .qr-section h3 {
            font-size: 14px;
            font-weight: 700;
            color: #e2e8f0;
            margin-bottom: 8px;
        }
        .qr-section p {
            font-size: 12px;
            color: #64748b;
            margin-bottom: 16px;
            line-height: 1.6;
        }
        .qr-section img {
            width: 180px;
            height: 180px;
            border-radius: 8px;
            background: #fff;
            padding: 8px;
        }
        .qr-note {
            font-size: 11px;
            color: #475569;
            margin-top: 12px;
        }

        /* Footer */
        .footer {
            background: #0f172a;
            border: 1px solid #334155;
            border-radius: 0 0 16px 16px;
            padding: 24px 32px;
            text-align: center;
        }
        .footer p { font-size: 12px; color: #475569; line-height: 1.7; }
        .footer a { color: #34d399; text-decoration: none; }

        .divider { height: 1px; background: #334155; margin: 20px 0; }
        .success-text { color: #34d399; }
    </style>
</head>
<body>
<div class="wrapper">

    {{-- Header --}}
    <div class="header">
        <div style="font-size:48px; margin-bottom:16px;">🎉</div>
        <div class="header-badge">✓ Pembayaran Berhasil</div>
        <h1>Selamat! Kamu Terdaftar!</h1>
        <p>Pureofdistance Run 2026 — Slot kamu sudah dikonfirmasi.</p>
    </div>

    {{-- Body --}}
    <div class="body">

        <p class="greeting">
            Halo, <strong>{{ $payment->registration->nama }}</strong>! 🏃
        </p>

        <p style="font-size:14px; color:#94a3b8; line-height:1.7;">
            Pembayaran kamu untuk <strong style="color:#f1f5f9;">Pureofdistance Run 2026</strong> telah
            <span class="success-text"><strong>berhasil dikonfirmasi</strong></span>.
            Sampai jumpa di garis start! 🏁
        </p>

        {{-- Amount --}}
        <div class="amount-box">
            <p class="amount-label">Total Pembayaran</p>
            <p class="amount-value">Rp {{ number_format($payment->gross_amount, 0, ',', '.') }}</p>
        </div>

        {{-- Payment Info --}}
        <div class="card">
            <div class="card-title">Detail Pembayaran</div>

            <div class="info-row">
                <span class="info-label">Nama Peserta</span>
                <span class="info-value">{{ $payment->registration->nama }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Order ID</span>
                <span class="info-value">{{ $payment->order_id }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Transaction ID</span>
                <span class="info-value">{{ $payment->transaction_id }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Metode Pembayaran</span>
                <span class="info-value" style="text-transform:uppercase;">{{ $payment->payment_type }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Waktu Pembayaran</span>
                <span class="info-value">{{ optional($payment->paid_at)->format('d M Y, H:i') }} WIB</span>
            </div>
            <div class="info-row">
                <span class="info-label">Status</span>
                <span class="info-value"><span class="badge-paid">Paid</span></span>
            </div>
        </div>

        {{-- QR Code Section --}}
        <div class="qr-section">
            <h3>🎫 QR Code Tiketmu</h3>
            <p>
                Tunjukkan QR Code ini saat check-in di lokasi event.<br>
                QR Code juga terlampir dalam email ini sebagai file gambar.
            </p>
            <img src="{{ $message->embedData(file_get_contents($qrImagePath), 'qrcode.png', 'image/png') }}"
                 alt="QR Code Tiket Pureofdistance Run 2026">
            <p class="qr-note">
                QR Code unik untuk: <strong style="color:#e2e8f0;">{{ $payment->registration->nama }}</strong><br>
                Jangan bagikan QR Code ini kepada orang lain.
            </p>
        </div>

        <div class="divider"></div>

        <p style="font-size:13px; color:#64748b; line-height:1.7;">
            Simpan email ini sebagai bukti pendaftaran. QR Code juga terlampir sebagai gambar terpisah
            di email ini sehingga kamu bisa menyimpannya di galeri ponsel.
        </p>

    </div>

    {{-- Footer --}}
    <div class="footer">
        <p>
            <strong style="color:#e2e8f0;">Pureofdistance Run 2026</strong><br>
            Email ini dikirim otomatis — tolong jangan dibalas.<br>
            <a href="{{ route('home') }}">pureofdistance.com</a>
        </p>
    </div>

</div>
</body>
</html>
