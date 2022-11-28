<?php

//esto es un comentario de línea

/*     echo "hola a todos y a los raritos también" . "<br>";

    print "Soy un print"."<br>";

    print_r(['array'])."<br>";

    var_dump(["hola soy un var_dump"]);
 */
    
    /*
    comentario 
    varias 
    líenas
    */
?>

<?php
   /*  echo "Esto es otro script";
    $variable = "esto es una variable";
    $Variable = "esto es otra variable";
    echo $variable."<br>";
    echo $Variable; */
    //siempre variables empiezan en minúscula
?>

<?php
/*     define("CURSOS",[
        'PHP',
        'JS',
        "DESDE CERO" => ['HTML']
    ]);

    var_dump(CURSOS) */

?>

<?php

    /* $numbers = [1, 2, 3, 4];

    foreach ($numbers as $key => $number) {
        $number = $number * 2;
    }

    echo $number */
?>

<?php
    $dish = 
    [
        '1st dish:' => [
            'Meat pie',
            'Main',
            '3 pax',
            '5,99$'
        ],
        '2nd dish' => [
            'Fries',
            'Complementary',
            '6 pax',
            '3,90$'
        ],
        '3rd dish' => [
            'Cheese cake',
            'Dessert',
            '1 pax',
            '3,49$'
        ]
    ];

    foreach ($dish as $key => $value) {
        echo $key . "<br>";
        foreach ($value as $key => $value) {
            echo $value . "<br>";
        }
    }

?>