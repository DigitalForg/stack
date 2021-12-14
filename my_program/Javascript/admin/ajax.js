var xmlhttp = new XMLHttpRequest();

document.querySelector('#box_pilihan input[type="button"]').addEventListener('click', function () {
    const soal_textarea = document.querySelector('#box_soal textarea');
    const kunci_textarea = document.querySelectorAll('#box_kunci_jawaban textarea');

    for (let i = 0; i < kunci_textarea.length; i++) {
        if (kunci_textarea[i].value == "") {
            kunci_textarea[i].remove();
        }

        var oh_object_kunci = [ { kunci_jawaban : kunci_textarea[i].value } ];
        console.log(oh_object_kunci);

        var object_kunci = [
            { soal: soal_textarea.value },
            { kunci_jawaban: kunci_textarea[i].value },
        ];

    }

    console.log(object_kunci);

    const param = JSON.stringify(object_kunci);
    xmlhttp.open("POST", "../admin/proses/simpan_data_training.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/json");
    xmlhttp.onloadend = function () {
        alert('data telah disimpan');
        console.log(param);
    }
    xmlhttp.send(param);
})