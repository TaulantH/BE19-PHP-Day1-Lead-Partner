<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $anime = array(
            "Goku" => array(
                "Power" => "Over 9000",
                "Special Move" => "Kamehameha",
                "Most View" => "Dragon Ball Z"
            ),
            "Ash Ketchum" => array(
                "Power" => "Varies with Pokemon",
                "Special Move" => "Thunderbolt",
                "Most View" => "Pokemon: Indigo League"
            ),
            "Naruto Uzumaki" => array(
                "Power" => "Nine-Tails Chakra",
                "Special Move" => "Rasengan",
                "Most View" => "Naruto: Shippuden"
            )
        );
        echo  "anime for Goku in Power: ";
        echo $anime[ 'Goku']['Power'] . "<br/>" ;
         echo "anime for Ash Ketchum in Power: ";
         echo $anime['Ash Ketchum']['Power' ] . "<br/>" ;
        echo  "anime for Naruto Uzumaki in Power: " ;
         echo $anime['Naruto Uzumaki']['Power' ] .  "<br/>";
    ?>

</body>
</html>