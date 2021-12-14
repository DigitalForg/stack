<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.min.css">

    <title>Admin</title>
</head>

<body>

    <div>
        <form method="POST" action="">
            <div id="box_soal">
                <p>Soal</p>
                <textarea name="soal" id="soal" placeholder="Masukan Soal" oninput="ukuran_auto(this)"></textarea>
            </div>

            <div id="box_kunci_jawaban">
                <p>Kunci Jawaban</p>
                <textarea class="otak" name="kunci_jawaban[]" id="kunci_jawaban" placeholder="Masukan Kunci Jawaban" oninput="ukuran_auto(this)"></textarea>
            </div>

            <div id="box_pilihan">
                <a href="javascript:tambah_textarea();">Tambah Textarea</a>
                <input type="button" value="proses">
            </div>
        </form>
    </div>

    <script type="text/javascript" src="../javascript/admin/ajax.js"></script>
    <script type="text/javascript" src="../javascript/admin/event.js"></script>
    <script type="text/javascript" src="../javascript/event.js"></script>

</body>

</html>