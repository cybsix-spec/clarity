<?php 

include 'connection.php';
include 'config.php';

$result_menus = mysqli_query($connection, "SELECT * FROM menus");
$menus =mysqli_fetch_all($result_menus, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
            <div class="container">
                <img src="assets/img/logo-02 1.svg" alt="logo" class="Logo">
                <nav class="nav-links">
                        <?php foreach ($menus as $menu) { ?>
                        <a href="<?php echo $menu['url']; ?>"><?php echo $menu['label']; ?></a>
                    <?php } ?>
                </nav>
            </div>

                <button id="hamburger-btn" class="hamburger-btn" aria-label="Buka Menu">
                <img src="assets/img/humberger.png" alt="humberger">
                </button>   
        </header>


        <div id="mobile-menu" class="mobile-menu">
        
            <button id="close-btn" class="close-btn" aria-label="Tutup Menu"> <img src="assets/img/X.png" alt=""></button>
            
            <div class="logo-mobile">
                <img src="assets/img/logo-02 1.svg" alt="logo" class="Logo-nav">
            </div>
            <nav class="mobile-nav-links">
            <?php foreach ($menus as $menu) { ?>
                        <a href="<?php echo $menu['url']; ?>"><?php echo $menu['label']; ?></a>
            <?php } ?>
            </nav>
        </div>
</body>
</html>