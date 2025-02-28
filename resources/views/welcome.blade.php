<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanim Perak Care</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('img/logo.ico') }}" type="image/x-icon">
</head>
<body>
    <div class="wrapper">
        <div class="welcome-text">
            <h3>Selamat Datang Sahabat Mido</h3><br>
            <p>Chatbot ini hanya untuk layanan informasi yang ada di Kantor Imigrasi Kelas I TPI Tanjung Perak</p>
            <br>Jika melakukan pengaduan silahkan hubungi dinomor 0812-3433-3700 / 031-7315570
        </div>
    </div>
         <div class="chatbot">
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
            <df-messenger
                intent="WELCOME"
                chat-title="Kanim-Perak-Care"
                agent-id="5285d00c-671c-489e-b79e-6947283c615a"
                language-code="id"
            ></df-messenger>
    </div>
</body>
</html>
