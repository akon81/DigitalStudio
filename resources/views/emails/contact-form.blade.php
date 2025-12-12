<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nowa wiadomość z formularza kontaktowego</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #3b82f6;
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #f9fafb;
            padding: 30px;
            border: 1px solid #e5e7eb;
            border-top: none;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 5px;
        }
        .field-value {
            background-color: white;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
        }
        .message-content {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            font-size: 14px;
            color: #6b7280;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0; font-size: 24px;">Nowa wiadomość z formularza kontaktowego</h1>
    </div>
    
    <div class="content">
        <div class="field">
            <div class="field-label">Imię i nazwisko:</div>
            <div class="field-value">{{ $contactName }}</div>
        </div>

        <div class="field">
            <div class="field-label">Email:</div>
            <div class="field-value">
                <a href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a>
            </div>
        </div>

        @if($contactPhone)
        <div class="field">
            <div class="field-label">Telefon:</div>
            <div class="field-value">
                <a href="tel:{{ $contactPhone }}">{{ $contactPhone }}</a>
            </div>
        </div>
        @endif

        <div class="field">
            <div class="field-label">Temat:</div>
            <div class="field-value">{{ $contactSubject }}</div>
        </div>

        <div class="field">
            <div class="field-label">Wiadomość:</div>
            <div class="field-value message-content">{{ $contactMessage }}</div>
        </div>

        <div class="footer">
            <p>Ta wiadomość została wysłana z formularza kontaktowego na stronie {{ config('app.name') }}.</p>
            <p>Możesz odpowiedzieć bezpośrednio na adres: {{ $contactEmail }}</p>
        </div>
    </div>
</body>
</html>
