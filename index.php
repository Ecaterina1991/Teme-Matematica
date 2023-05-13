<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <style>
  body {
    margin: 0 auto;
    max-width: 1200px;
    padding-top: 5em;
  }
  </style>
</head>


<body>
  <div>
<h1>Calcul perimetru al unui triunghi cu laturi de lungimi diferite</h1>

<?php
$a = 12;
$b = 16;
$c = 20;
$p = $a + $b + $c;
echo "Perimetrul unui triunghi cu laturile de  $a cm, $b cm si $c cm este $p cm. Calculul se face adunand toate laturile triunghiului."
?>
</div>

<h1>Calcul arie cerc</h1>

<?php
$razaCerc = 5;
$arieCerc = pi() * pow($razaCerc, 2);
$ariaCercRotunjita = round($arieCerc, 2);
echo "Aria unui cerc cu raza de $razaCerc cm este $ariaCercRotunjita centimetri patrati. Pentru a obtine aceasta arie, se calculeaza raza la puterea a doua si se inmulteste cu constanta Pi."
?>

</div>
</body>
</html>