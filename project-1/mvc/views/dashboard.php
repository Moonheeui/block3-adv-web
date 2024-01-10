<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
</head>

<body>
    <h1>Dashboard</h1>

    <a href="index.php?page=logout">Logout</a>

    <section>
        <div class="container">
            <h3>View All Models</h3>

            <article>
                <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);

                include_once("controllers/connection.php");
                include_once("controllers/controller-model.php");

                $connection = new connectionObject("localhost", "moonhee42_adv_web_user", "3V3o8u3^d", "moonhee42_adv_web");
                $model = new userModel($connection);
                $models = $model->selectAll();

                if ($models) {
                    echo '<table>';
                    echo '<tr><th>ID</th><th>Model</th><th>Part</th><th>Brand</th><th>Compatiblility</th><th>Price</th><th>Stock</th><th>Modify</th></tr>';

                    foreach ($models as $model) {
                        echo '<tr>';
                        echo '<td>' . $model['modelID'] . '</td>';
                        echo '<td>' . $model['modelName'] . '</td>';
                        echo '<td>' . $model['partName'] . '</td>';
                        echo '<td>' . $model['brandName'] . '</td>';
                        echo '<td>' . $model['compatibilityName'] . '</td>';
                        echo '<td>' . $model['price'] . '</td>';
                        echo '<td>' . $model['stock'] . '</td>';
                        echo '<td>';

                        // Edit Button
                        echo '<form  method="post">';
                        echo '<input type="hidden" name="action" value="edit">';
                        echo '<input type="hidden" name="modelID" value="' . $model['modelID'] . '">';
                        echo '<input type="hidden" name="modelName" value="' . $model['modelName'] . '">';
                        echo '<input type="hidden" name="partName" value="' . $model['partName'] . '">';
                        echo '<input type="hidden" name="brandName" value="' . $model['brandName'] . '">';
                        echo '<input type="hidden" name="compatibilityName" value="' . $model['compatibilityName'] . '">';
                        echo '<input type="hidden" name="price" value="' . $model['price'] . '">';
                        echo '<input type="hidden" name="stock" value="' . $model['stock'] . '">';
                        echo '<input id="edit-btn" type="submit" value="Edit" name="edit"></input>';
                        echo '</form>';

                        // Delete Button
                        echo '<form  method="post">';
                        echo '<input type="hidden" name="action" value="delete">';
                        echo '<input type="hidden" name="modelID" value="' . $model['modelID'] . '">';
                        echo '<input id="delete-btn" type="submit" value="Delete" name="delete"></input>';
                        echo '</form>';
                        echo '</td>';
                        echo '</tr>';
                    }

                    echo '</table>';
                } else {
                    echo 'No models found';
                }
                ?>
            </article>
        </div>
    </section>
</body>

</html>