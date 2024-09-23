<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrypt PHP</title>
</head>
<body>
    <p>
        <?php echo "Mój pierwszy skrypt";
        $x = 1;
        $nazwa_1 = "text";
        $liczba7 = 345;
        $ilość = 4;
        echo "wynik wynosi $x <br>";
        echo "to jest $nazwa_1 <br>";
        echo "$liczba7 <br>";
        echo "Bieżąca wartość to $ilość!<br>";
        $imie = "Anna";
        $jezyk1 = "PHP";
        $jezyk2 = "JavaScript";
        $text = <<<TX
            Mam na imię $imie.
            Ucze się programować w języku $jezyk1.
            Umiem już programować w języku $jezyk2.
        TX;
        echo $text;
        $napis = "napis";
        $tekstt = <<<'PC'
            Tutaj rozpoczyna się $napis
        PC;
        echo $tekstt;
        $dane = array 
        (
            array ("nazwisko" => "Kowalski",
                    "imie" => "Jan",
                    "wiek" => "27"),
            array ("nazwisko" => "Nowak",
                    "imie" => "Paweł",
                    "wiek" => "24"),
            array ("nazwisko" => "Górka",
                    "imie" => "Tomasz",
                    "wiek" => "29")
        );
        $xx = 23.75;
        $yy = (integer ) $xx;
        echo "$xx <br>";
        echo "$yy <br>";

        $xxx = 97.234;
        echo "Zadeklarowana wartość zmienej \$xxx: $xxx <br>";
        settype ($xxx, 'string');
        echo "Wartość zmiennej \$xxx po zmianie typu na string: $xxx <br>";
        settype($xx, 'integer');
        echo "Wartość zmiennej \$xxx po zmianie typu na integer: $xxx <br>";
        

        $int = 1;
        $float = 1.01;
        $string = 'mejsu';
        echo  "$int, $float, $string";

        $tekst1 = "mejsu";
        $tekst2 = 'mejsu';
        $tekst3 = <<<TX 
        Mejsu
        TX;
        $tekst4 =<<<'TX'
        Mejsu
        TX;
        echo  "$tekst1, $tekst2, $tekst3, $tekst4";
        ?>
    </p>
</body>
</html>