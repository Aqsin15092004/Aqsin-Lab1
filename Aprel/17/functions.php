<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form style="width: 50%" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="POST">
        <fieldset>
            <legend></legend>
            <label style="margin-left: 104px" for="ad">Ad:</label>
            <input style="margin-left: 2px" type="text" id="ad" name="ad"><span class="error">* <?php echo $adError;?></span><br><br>
            <label style="margin-left: 84.1px;" for="sa">Soyad:</label>
            <input style="margin-left: 2px" type="text" id="sa" name="sa"><span class="error">* <?php echo $saError;?></span><br><br>
            <label style="margin-left: 3px" for="q1">1-ci qiymet(0-100):</label>
            <input style="margin-left: 2px" type="number" id="q1" name="q1"><span class="error">* <?php echo $q1Error;?></span><br><br>
            <label style="margin-left: 3px" for="q2">2-ci qiymet(0-100):</label>
            <input style="margin-left: 2px" type=number id="q2" name="q2"><span class="error">* <?php echo $q2Error;?></span><br><br>
            <label for="q3">3-cu qiymet(0-100):</label>
            <input style="margin-left: 2px" type="number" id="q3" name="q3"><span class="error">* <?php echo $q3Error;?></span><br><br>
            <input style="margin-left: 40%" type="submit" name="submit" value="Hesabla"><br><br>
            <label for="CA">Orta qiymet: 
                <?php if (isset($_POST["submit"])) {
                $result = CalcAverage();
                if ($result !== 0) {
                    echo $result;
                }
            } ?></label><br>
            <label for="RA"><?php if (isset($_POST["submit"])) {
                echo RateAverage($result);
                }?></label>
        </fieldset>
    </form>
</body>
</html>