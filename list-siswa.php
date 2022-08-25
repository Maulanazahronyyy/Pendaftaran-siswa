<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <center>
        <title>Pendaftaran Siswa Baru</title>
        <style>
    body {
        background: url("rem.jpg");
        background-size: 100%;
    }
    </style>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
</header>

<nav>
    <a href="form-daftar.php">[+] Tambah Baru</a>

</nav>

<br>

<table border="1">
<thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
</center>
        <?php
        $sql = "SELECT * FROM calon_siswaa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <a href="home.php">Home</a>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>