<?php
session_start();

include_once 'template/header.php';


?>


<div>
    <div class="container-fluid px-4">
        <?php
        $url = !isset($_GET['hal'])  ? 'home' : $_GET['hal'];
        if ($url == 'home') {
            include_once 'home.php';
        } else if (!empty($url)) {
            include_once '' . $url . '.php';
        } else {
            include_once 'home.php';
        }

        ?>
    </div>
</div>


<?php
include_once 'template/footer.php';

?>