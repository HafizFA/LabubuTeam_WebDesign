<?php


// // Membuat koneksi
// $conn = new mysqli($servername, $username, $password, $dbname);

function select($query)
{
    global $db;
    $rows =[];
    while ($row = mysqli_fetch_assoc()){
        $rows = $row;
    } return $row;
}

// Memeriksa apakah data formulir sudah diterima
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Mengambil nilai dari formulir
//     $name = $conn->real_escape_string($_POST['name']);
//     $email = $conn->real_escape_string($_POST['email']);
//     $phone = $conn->real_escape_string($_POST['phone']);
//     $occasion = $conn->real_escape_string($_POST['occasion']);
//     $message = $conn->real_escape_string($_POST['message']);

//     // Menyimpan data ke dalam tabel
//     $sql = "INSERT INTO custom_orders (name, email, phone, occasion, message) VALUES ('$name', '$email', '$phone', '$occasion', '$message')";

//     if ($conn->query($sql) === TRUE) {
//         echo "Pesanan berhasil dikirim.";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }
function create_pesanan($post)
{
    global $db;

    $name  = $post['name'];
    $email  = $post['email'];
    $phone = $post['phone'];
    $occasion = $post['occasion'];
    $message = $post['message'];


    //query tambah data
    $query = "INSERT INTO custom_orders VALUES(null, '$neame','$email', '$phone', '$occasion', '$message', CURRENT_TIMESTAMP())";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Menutup koneksi

?>
