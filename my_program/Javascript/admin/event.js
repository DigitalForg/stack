function tambah_textarea() {
    const box_textarea = document.getElementById('box_kunci_jawaban');
    var textarea = document.createElement('textarea');

    textarea.setAttribute('name', 'kunci_jawaban[]');
    textarea.setAttribute('id', 'kunci_jawaban');
    textarea.setAttribute('placeholder', 'Masukan Kunci Jawaban');
    textarea.setAttribute('oninput', 'ukuran_auto(this)');

    box_textarea.appendChild(textarea);
}