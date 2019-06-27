<?php header('HTTP/1.0 403 Forbidden'); require('template-header.php'); ?>

    <h1>Truy cập giới hạn</h1>
    <h2>Vui lòng thử lại sau <?php echo $_SESSION['firewall_seconds']; ?> giây !</h1>

<?php require('template-footer.php'); ?>