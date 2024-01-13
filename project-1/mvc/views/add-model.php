<main>
    <div class="container">
        <div class="dashboard-flex">
            <div class="side-bar">
                <?php
                include_once("views/nav.php");
                ?>
            </div>

            <div class="content">
                <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);

                include_once("controllers/connection.php");
                include_once("controllers/controller-model.php");

                ?>
            </div>
        </div>
    </div>
</main>