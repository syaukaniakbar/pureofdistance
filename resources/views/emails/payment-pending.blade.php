<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selesaikan Pembayaranmu – Pureofdistance Run 2026</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #0f172a; color: #f8fafc; }
        .wrapper { max-width: 600px; margin: 0 auto; padding: 24px 16px; }

        /* Header */
        .header {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            border: 1px solid #334155;
            border-radius: 16px 16px 0 0;
            padding: 36px 32px;
            text-align: center;
        }
        .header-badge {
            display: inline-block;
            background: #f59e0b22;
            border: 1px solid #f59e0b55;
            color: #fbbf24;
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
        .badge-pending {
            display: inline-block;
            background: #f59e0b22;
            border: 1px solid #f59e0b55;
            color: #fbbf24;
            font-size: 12px;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 999px;
            text-transform: uppercase;
        }

        /* Amount */
        .amount-box {
            background: linear-gradient(135deg, #f59e0b15, #f97316_15);
            border: 1px solid #f59e0b33;
            border-radius: 12px;
            padding: 20px 24px;
            margin: 20px 0;
            text-align: center;
        }
        .amount-label { font-size: 12px; color: #94a3b8; margin-bottom: 6px; }
        .amount-value {
            font-size: 28px;
            font-weight: 800;
            color: #fbbf24;
        }

        /* CTA Button */
        .cta-wrapper { text-align: center; margin: 28px 0; }
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #f59e0b, #f97316);
            color: #0f172a;
            font-size: 15px;
            font-weight: 800;
            padding: 14px 36px;
            border-radius: 12px;
            text-decoration: none;
            letter-spacing: 0.5px;
        }
        .cta-note {
            font-size: 12px;
            color: #64748b;
            margin-top: 12px;
        }

        /* Warning */
        .warning {
            background: #7f1d1d22;
            border: 1px solid #ef444433;
            border-radius: 10px;
            padding: 14px 18px;
            font-size: 13px;
            color: #fca5a5;
            margin-top: 20px;
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
        .footer a { color: #f59e0b; text-decoration: none; }

        .divider { height: 1px; background: #334155; margin: 20px 0; }
    </style>
</head>
<body>
<div class="wrapper">

    {{-- Header --}}
    <div class="header">
        <div class="header-badge">⚠ Menunggu Pembayaran</div>
        <h1>Selesaikan Pembayaranmu</h1>
        <p>Pureofdistance Run 2026 — Registrasi hampir selesai!</p>
    </div>

    {{-- Body --}}
    <div class="body">

        <p class="greeting">
            Halo, <strong>{{ $payment->registration->nama }}</strong>! 👋
        </p>

        <p style="font-size:14px; color:#94a3b8; line-height:1.7;">
            Kami telah menerima permintaan pendaftaranmu untuk <strong style="color:#f1f5f9;">Pureofdistance Run 2026</strong>.
            Namun pembayaran kamu belum selesai. Silakan selesaikan pembayaranmu sebelum waktu kadaluarsa.
        </p>

        {{-- Amount --}}
        <div class="amount-box">
            <p class="amount-label">Total Pembayaran</p>
            <p class="amount-value">Rp {{ number_format($payment->gross_amount, 0, ',', '.') }}</p>
        </div>

        {{-- Order Info --}}
        <div class="card">
            <div class="card-title">Detail Pesanan</div>

            <div class="info-row">
                <span class="info-label">Nama Peserta</span>
                <span class="info-value">{{ $payment->registration->nama }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Order ID</span>
                <span class="info-value">{{ $payment->order_id }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Status Pembayaran</span>
                <span class="info-value"><span class="badge-pending">Pending</span></span>
            </div>
            @if($payment->expired_at)
            <div class="info-row">
                <span class="info-label">Batas Waktu Bayar</span>
                <span class="info-value" style="color:#fbbf24;">
                    {{ $payment->expired_at->format('d M Y, H:i') }} WIB
                </span>
            </div>
            @endif
        </div>

        {{-- CTA --}}
        <div class="cta-wrapper">
            <a href="{{ route('checkout.show', $payment->order_id) }}" class="cta-button">
                ✦ Lanjutkan Pembayaran
            </a>
            <p class="cta-note">
                Klik tombol di atas untuk melanjutkan ke halaman pembayaran
            </p>
        </div>

        @if($payment->expired_at)
        <div class="warning">
            ⏰ <strong>Perhatian:</strong> Pembayaran akan kadaluarsa pada
            <strong>{{ $payment->expired_at->format('d M Y, H:i') }} WIB</strong>.
            Selesaikan sebelum batas waktu agar slot kamu tidak hangus.
        </div>
        @endif

        <div class="divider"></div>

        <p style="font-size:13px; color:#64748b; line-height:1.7;">
            Jika kamu mengalami kesulitan, hubungi kami melalui Instagram atau email resmi kami.
            Jangan balas email ini.
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
