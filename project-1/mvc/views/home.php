<h3>Added New Models</h3>

<article>
    <?php
    if ($models) {
        echo '<table>';
        echo '<tr><th>ID</th><th>Model Name</th><th>Part Name</th><th>Brand Name</th><th>Compatiblility</th><th>Price</th><th>Stock</th><th>Modify</th></tr>';

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

            // Edit
            echo '<form action="" method="post">';
            echo '<input type="hidden" name="action" value="edit">';
            echo '<input type="hidden" name="modelID" value="' . $model['modelID'] . '">';
            echo '<input type="hidden" name="modelName" value="' . $model['modelName'] . '">';
            echo '<input type="hidden" name="partName" value="' . $model['partName'] . '">';
            echo '<input type="hidden" name="brandName" value="' . $model['brandName'] . '">';
            echo '<input type="hidden" name="compatibilityName" value="' . $model['compatibilityName'] . '">';
            echo '<input type="hidden" name="price" value="' . $model['price'] . '">';
            echo '<input type="hidden" name="stock" value="' . $model['stock'] . '">';
            echo '<button id="edit-btn" type="submit">Edit</button>';
            echo '</form>';

            // Delete
            echo '<form action="" method="post">';
            echo '<input type="hidden" name="action" value="delete">';
            echo '<input type="hidden" name="modelID" value="' . $part['modelID'] . '">';
            echo '<button id="delete-btn" type="submit">Delete</button>';
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