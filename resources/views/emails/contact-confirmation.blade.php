<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potwierdzenie kontaktu</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
        }
        .logo {
            max-width: 180px;
            height: auto;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }
        .content {
            padding: 40px 30px;
        }
        .content p {
            margin: 0 0 16px;
            font-size: 16px;
        }
        .message-box {
            background: #f9fafb;
            border-left: 4px solid #3b82f6;
            padding: 20px;
            margin: 24px 0;
            border-radius: 8px;
        }
        .message-box h3 {
            margin: 0 0 12px;
            color: #1f2937;
            font-size: 18px;
        }
        .message-box p {
            margin: 0;
            color: #4b5563;
            white-space: pre-line;
        }
        .message-box .label {
            color: #6b7280;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }
        .footer {
            background: #f9fafb;
            padding: 30px;
            text-align: center;
            font-size: 14px;
            color: #6b7280;
            border-top: 1px solid #e5e7eb;
        }
        .footer p {
            margin: 8px 0;
        }
        .highlight {
            color: #3b82f6;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('assets/img/ds_logo.png') }}" alt="Digital Studio Logo" class="logo">
            <h1>Dziękujemy za kontakt!</h1>
        </div>
        
        <div class="content">
            <p>Witaj <strong>{{ $contactName }}</strong>,</p>
            
            <p>Twoja wiadomość właśnie do mnie dotarła i została zarejestrowana w moim systemie.</p>
            
            <p>Odpowiem na nią <span class="highlight">w ciągu 24 godzin roboczych.</span></p>

            <div class="message-box">
                <h3>Szczegóły Twojej wiadomości</h3>
                <div class="label">Temat</div>
                <p style="margin-bottom: 16px;"><strong>{{ $contactSubject }}</strong></p>
                <div class="label">Treść wiadomości</div>
                <p>{{ $contactMessage }}</p>
            </div>

            <p>W razie pilnej sprawy lub dodatkowych pytań, możesz skontaktować się ze mną bezpośrednio.</p>
            
            <p style="margin-top: 32px;">Z poważaniem,<br>
            <strong>Digital Studio</strong></p>
        </div>
        
        <div class="footer">
            <p>Ta wiadomość została wygenerowana automatycznie.</p>
            <p>Prosimy nie odpowiadać bezpośrednio na ten email.</p>
        </div>
    </div>
</body>
</html>
