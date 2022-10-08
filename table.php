<?php
$matriz[0] ="cougar";
$matriz[1] ="ford";
$matriz[2] =null;
$matriz[3] ="2.500";
$matriz[4] ="v6";
$matriz[5] ="182";
echo "<h1>Tabla con foreach</h1>";
echo "<table>";
echo "<tr>";
echo "<th>Indice</th>";
echo "<th>Valor</th>";
echo "</tr>";
foreach ($matriz as $key=>$value) {
    echo "<tr>";
    echo "<td style='border-style: solid; border-color: red'>$key</td>";
    echo "<td style='border-style: solid; border-color: red'>$value</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h1>Tabla con for</h1>";
echo "<table>";
echo "<tr>";
echo "<th>Indice</th>";
echo "<th>Valor</th>";
echo "</tr>";
for ($i = 0; $i <= count($matriz)-1; $i++) {
    echo "<tr>";
    echo "<td style='border-style: solid; border-color: red'>$i</td>";
    echo "<td style='border-style: solid; border-color: red'>$matriz[$i]</td>";
    echo "</tr>";
}
echo "</table>";
?>