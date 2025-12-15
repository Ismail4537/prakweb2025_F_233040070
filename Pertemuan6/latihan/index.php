<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM</title>
</head>
<body>
    <h1 id="title">Hello World</h1>
    <p id="p">paragraf 1</p>
    <button id="btn">Ubah</button>
    <button id="btn1">Ubah</button>

    <script>
        const title = document.getElementById('title');
        const btn1 = document.getElementById('btn1');
        const btn = document.getElementById('btn');
        const p = document.getElementById('p');

        function ubahTeks() {
            p.innerHTML = 'paragraf telah diubah';
        }

        function ubahWarna() {
            title.style.color = 'red';
        }

        btn.onclick = ubahTeks;
        btn1.onclick = ubahWarna;
    </script>
</body>
</html>