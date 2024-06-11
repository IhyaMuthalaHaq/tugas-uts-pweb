<?php
if (isset($_GET['nama'])) {
    $servername= 'localhost';
    $username= 'root';
    $password= '';
    $dbname= 'db_pweb';

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO contact (nama, email, no_hp, pesan) values ('{$_GET["nama"]}', '{$_GET["email"]}', '{$_GET["no_hp"]}', '{$_GET["pesan"]}')" ;

    if ($conn->query($sql) === True) {
        echo("<script>alert('New record created successfully')</srcipt>");
    } else {
        echo("<script>alert('Error: {$conn->error}')</srcipt>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
<link rel="stylesheet" href="style.css">
<body>
<?php include('navbar.php');?>

<section id="contact" class="contact">
    <h2>Hubungi <span>Kami</span></h2>
    <p>Kami siap membantu anda</p>

    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.434254639954!2d111.9004470326667!3d-8.057109030316946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e34821d6a163%3A0xb6909f7a7c79b5ac!2sMy%20Own%20Barn!5e0!3m2!1sid!2sid!4v1697047309032!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        <form action="">
            <div class="input-group">
                <i data-feather="user"></i>
                <input type="text" id="nama" name="nama" placeholder="nama">
            </div>
            <div class="input-group">
                <i data-feather="mail"></i>
                <input type="text" id="email" name="email" placeholder="email">
            </div>
            <div class="input-group">
                <i data-feather="phone"></i>
                <input type="text" id="no_hp" name="no_hp" placeholder="No HP">
            </div>
            <div class="input-group">
                <i data-feather="message-square"></i>
                <input type="text" id="pesan" name="pesan" placeholder="pesan">
            </div>
            <button type="submit" class="btn">kirim pesan</button>
        </form>
    </div>
</section>

<?php include('footer.php'); ?>

</body>
</html>



