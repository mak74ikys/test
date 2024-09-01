<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запрос камеры</title>
</head>
<body>
    <h1>Доступ к камере</h1>
    <button id="startCamera">Запустить камеру</button>
    <video id="video" width="640" height="480" autoplay></video>

    <script>
        document.getElementById('startCamera').addEventListener('click', async function() {
            try {
                // Запрашиваем доступ к камере
                const stream = await navigator.mediaDevices.getUserMedia({ video: true });
                const video = document.getElementById('video');
                video.srcObject = stream;
            } catch (error) {
                console.error('Ошибка доступа к камере:', error);
            }
        });
    </script>
</body>
</html>