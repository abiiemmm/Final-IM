<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Button</title>
</head>
<body>
    <button onclick="goBack()">Kembali</button>
   <href="{{ route('dashboard') }} >

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
