<?php include '../../connect.php';

    $query_id_doc = mysqli_fetch_array( mysqli_query( $koneksi, "SELECT id_doc FROM document ORDER BY id_doc DESC LIMIT 1" ) );
    $query_id_doc = substr( $query_id_doc['id_doc'], 1 );
    $query_id_doc = ++$query_id_doc;
    $query_id_doc = "d".$query_id_doc;
    // $query_simpan_document = mysqli_query( $koneksi, "INSERT INTO document (id_doc, doc) VALUES ('$query_id_doc', '$_POST[soal]')" ) or die( mysqli_query( $koneksi ) );

    $request = file_get_contents("php://input");
    $kunci_jawaban = json_decode( $request, true );
    // echo $kunci_jawaban[0]['soal']."</br></br>";
    var_dump($kunci_jawaban);

    for( $i = 1; $i < count($kunci_jawaban); $i++ ){
        echo $kunci_jawaban['kunci_jawaban']."</br>";
    var_dump($kunci_jawaban[0]['kunci_jawaban']);

    }

?>