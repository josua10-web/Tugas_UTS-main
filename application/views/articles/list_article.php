<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->load->view('_partial/head.php');?>
</head>
<body>
    <?php $this->load->view('_partial/navbar.php');?>
    <h1>List Article</h1>
    <ul>
        <?php foreach($articles as $article):?>
        <li><?= $article['title']?></li>
        <?php endforeach ?>
    </ul>
    <?php $this->load->view('_partial/footer.php');?>
</body>
</html>