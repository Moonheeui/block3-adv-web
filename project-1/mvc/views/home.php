<h2>All Models</h2>

<article>
    <?php
    if ($models) {
        foreach ($models as $model) {
            echo "<section class='card'>
                        <div class='top'>
                            <div class='id'>" . $model['modelID'] . "</div>
                            <div class='name'>" . $model['modelName'] . "</div>
                            <div class='part'>" . $model['partName'] . "</div>
                            <div class='brand'>" . $model['brandName'] . "</div>
                            <div class='compatibility'>" . $model['compatibilityName'] . "</div>
                            <div class='price'>" . $model['price'] . "</div>
                            <div class='stock'>" . $model['stock'] . "</div>
                        </div>
                        <div class='buttons'>
                            <form method='POST'>
                                <input type='hidden' name='modelID' value='" . $model['modelID'] . "'>
                                <div class='button-container'>
                                    <input type='submit' name='editModelID' value='Edit'  class='submit-button'>
                                </div>
                            </form>
                        </div>
                    </section>";
        }
    } else {
        echo 'No models found';
    }
    ?>
</article>