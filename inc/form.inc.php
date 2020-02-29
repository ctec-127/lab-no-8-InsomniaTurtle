<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Temperature Converter</h1>
        <p class="lead">CTEC 127 - PHP with SQL 1</p>
        <hr class="my-2">
        <p>Have fun!</p>
        <div class="wrapper">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h2>Conversion Formulas</h2>
                    <ul>
                        <li>(F - 32)*5/9 to celsius from fahrenheit</li>
                        <li>(F – 32) * 5/9 + 273.15 to kelvin from fahrenheit</li>
                        <li>(C * 9/5) + 32 to fahrenheit from celsius</li>
                        <li>C + 273.15 to kelvin from celsius</li>
                        <li>(K – 273.15) * 9/5 + 32 to fahrenheit from kelvin</li>
                        <li>K – 273.15 to celsius from kelvin</li>
                    </ul>
                </div>
                <h2>Temperature Fun Facts/Info
                </h2>
                <ul>
                    <li>
                        <p>Celsius; This temperature scale was developed by Swedish astronomer Andres Celsius in 1742.</p>
                    </li>
                    <li>
                        <p>Fahrenheit; It was developed by Daniel Gabriel Fahrenheit, a German-born scientist who lived and worked primarily in the Netherlands.</p>
                    </li>
                    <li>
                        <p>kelvin; The Kelvin scale fulfills Thomson's requirements as an absolute thermodynamic temperature scale.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <div class="row">
            <!-- <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label for="temp">Temperature</label>
                    <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp']; ?>" name="originaltemp" size="7" maxlength="7" id="temp" class="form-control">


                    <select name="originalunit" class="form-control">
                        <option value="--Select--" <?php if ($originalUnit == "--Select--") echo ' selected="selected"'; ?>>--Select--</option>
                        <option value="celsius" <?php if ($originalUnit == "celsius") echo ' selected="selected"'; ?>>Celsius</option>
                        <option value="farenheit" <?php if ($originalUnit == "farenheit") echo ' selected="selected"'; ?>>Farenheit</option>
                        <option value="kelvin" <?php if ($originalUnit == "kelvin") echo ' selected="selected"'; ?>>Kelvin</option>
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <label for="convertedtemp">Converted Temperature</label>
                <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1); ?>" name="convertedtemp" size="7" maxlength="7" id="convertedtemp" class="form-control">

                <select name="conversionunit" class="form-control">
                    <option value="--Select--" <?php if ($conversionUnit == "--Select--") echo ' selected="selected"'; ?>>--Select--</option>
                    <option value="celsius" <?php if ($conversionUnit == "celsius") echo ' selected="selected"'; ?>>Celsius</option>
                    <option value="farenheit" <?php if ($conversionUnit == "farenheit") echo ' selected="selected"'; ?>>Farenheit</option>
                    <option value="kelvin" <?php if ($conversionUnit == "kelvin") echo ' selected="selected"'; ?>>Kelvin</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Convert" class="btn btn-success" />
    </div>
    <!-- <input type="submit" value="Convert" class="btn btn-success" /> -->
    </form>
</div>
</div><!-- end wrapper div-->
</div>