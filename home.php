<!DOCTYPE html>
<html>
    <style>
       body {
  background-image: url('Background.jpg');
    border: 5px solid rgb(255, 255, 255);
    margin: 10px 30rem;
    padding: 25px 15px;
    position: relative;
    top: 2cm;
    background-color: rgb(255, 146, 222);
        }
</style>
<head>

    <center>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Coding</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil";
                } else {
                    echo "pendaftaran gagal";
                }
                ?>
                </p>
                <?php endif; ?>
        
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
            <li><a href="logout.php">logout</a></li>
    
    </nav>
            </center>
</body>
</html>