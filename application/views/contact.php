<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->load->view('_partial/head.php');?>
</head>
<body>
    <?php $this->load->view('_partial/navbar.php');?>
    <h1>Contact Us</h1>
    <form action="" method="post">
        <div>
            <label for="name">Nama</label>
            <input type="text" name="name" placeholder="Nama Anda" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email Anda" required>
        </div>
        <div>
            <label for="message">Messages</label>
            <textarea name="message" id="" cols="30" rows="5" placeholder="write your message" required></textarea>
        </div>
        <div>
            <input type="submit" value="Kirim">
            <input type="reset" value="Reset">
        </div>
    </form>
    <?php $this->load->view('_partial/footer.php');?>
</body>
</html>