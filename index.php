<?php
echo '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servidor en Azure</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0078D4, #00C6FF);
            color: white;
        }
        .card {
            background: rgba(0, 0, 0, 0.3);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }
        h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        p {
            margin-top: 10px;
            font-size: 1.2rem;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>🚀 Hola desde mi servidor en Azure</h1>
        <p>Servidor funcionando correctamente - Jair</p>
    </div>
</body>
</html>
';
?>