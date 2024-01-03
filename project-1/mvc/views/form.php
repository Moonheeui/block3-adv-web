<form method="POST">
    <select name="modelID" id="modelID">
        <option value="">Select a Model Name</option>
        <?php
        if ($models) {
            foreach ($models as $model) {
                echo "<option value=" . $model['modelID'] . ">" . $model['modelName'] . "</option>";
            }
        }
        ?>
    </select>
    <select name="partID" id="partID">
        <option value="">Select a Part Name</option>
        <?php
        if ($parts) {
            foreach ($parts as $part) {
                echo "<option value=" . $part['partID'] . ">" . $part['partName'] . "</option>";
            }
        }
        ?>
    </select>
    <select name="brandID" id="brandID">
        <option value="">Select a Brand Name</option>
        <?php
        if ($brands) {
            foreach ($brands as $brand) {
                echo "<option value=" . $brand['brandID'] . ">" . $brand['brandName'] . "</option>";
            }
        }
        ?>
    </select>
    <select name="compatibilityID" id="compatibilityID">
        <option value="">Select Compatibility</option>
        <?php
        if ($compatibilities) {
            foreach ($compatibilities as $compatibility) {
                echo "<option value=" . $compatibility['compatibilityID'] . ">" . $compatibility['compatibilityName'] . "</option>";
            }
        }
        ?>
    </select>
    <input type="text" name="price" placeholder="Price">
    <input type="text" name="stock" placeholder="Stock">
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
</form>