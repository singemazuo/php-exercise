<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $form = `
            <table>
                <tr>
                    <td>US</td>
                    <td><a href=""><img src="images/en-US.jpg" alt="USA"></a></td>
                </tr>
                <tr>
                    <td>CA</td>
                    <td><a href=""><img src="images/en-CA.jpg" alt="Canada"></a></td>
                </tr>
            </table>
        `;

        $country = $_GET('Country');

        if($country != null){
            if($country == 'en-CA'){
                $form = `
                    <h2>Animal</h2>
                    <img src="images/beaver.jpg" alt="eagle">
                    <h2>Currency</h2>
                    <img src="images/loonie.jpg" alt="dollar">
                `;
            }else if($country == 'en-US'){
                $form = `
                    <h2>Animal</h2>
                    <img src="images/bald.eagle.jpg" alt="eagle">
                    <h2>Currency</h2>
                    <img src="images/usBuck.jpg" alt="dollar">
                `;
            }
        }
    ?>

    <?= $form ?>
</body>
</html>