<!DOCTYPE html>
<html>
<head>
    <title>Полинка</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите число x (больше нуля):</p>
        <input type="text" name="x">
        <p>Введите число n:</p>
        <input type="text" name="n">
        <input type="submit" value="OK">
    </form>
    <?php
        $x=$_POST["x"];
        $n=$_POST["n"];
        for($a=0; $a<=$n; $a++){
                $b=$b+((($x-1)**((2*$a)+1))/((2*$a+1)*(($x+1)**((2*$a)+1))));
            }
            $b=$b*2;
            echo $b;
    ?>
</body>
</html>