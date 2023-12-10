<?php
// Inisialisasi variabel
$name = $umur = $gender = $pendidikan = $hobi = "";

// Memeriksa apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai input dari formulir
    $name = htmlspecialchars($_POST["name"]);
    $umur = htmlspecialchars($_POST["umur"]);
    $gender = htmlspecialchars($_POST["radios"]);
    $pendidikan = htmlspecialchars($_POST["selectbasic"]);
    
    // Mendapatkan nilai hobi yang dipilih
    $hobiArr = isset($_POST["checkboxes"]) ? $_POST["checkboxes"] : array();
    $hobi = implode(", ", $hobiArr);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Data Pendaftaran</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Nama</th>
                    <td><?php echo $name; ?></td>
                </tr> 
                <tr>
                    <th scope="row">Umur</th>
                    <td><?php echo $umur; ?></td>
                </tr>
                <tr>
                    <th scope="row">Gender</th>
                    <td><?php echo $gender; ?></td>
                </tr>
                <tr>
                    <th scope="row">Pendidikan</th>
                    <td><?php echo $pendidikan; ?></td>
                </tr>
                <tr>
                    <th scope="row">Hobi</th>
                    <td><?php echo $hobi; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
