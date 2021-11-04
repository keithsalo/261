<?php
// understanding the logic!!
// 1 ruble = 0.013 dollars
// 1 pond sterling = 1.28 dollars
// 1 canadian dollar = .79 dollars
// 1 euro = 1.18 dollars
// 1 yen = .0094 dollars

$rubles = 10007;
$rubles *= 0.013;
$friendly_rubles = number_format($rubles, 2);
//pounds
$pounds = 500;
$pounds *= 1.28;
$friendly_pounds= number_format($pounds, 2);
//canadian
$canada = 5000;
$canada *= .79;
$friendly_canada = number_format($canada, 2);
//euros
$euros = 1200;
$euros *= 1.18;
$friendly_euros = number_format($euros, 2);
//yen
$yen = 2000;
$yen *= .0094;
$friendly_yen = number_format($yen, 2);

$total = $yen + $euros + $canada + $pounds + $rubles;
$friendly_total = number_format($total, 2)

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency</title>
<style>
    table {
        width: 400px;
        margin:20px auto;
        border: 1px solid green;
        border-collapse: collapse;

    }

    td, th {
        border: 1px solid green;
        padding:5px;
        text-align: left;
        

        
    }

</style>
</head>

<body>
<table>
    <tr>
    <th>Rubles</th>
    <td><?php echo '$ '.$friendly_rubles.''; ?></td>
    </tr>

    <tr>
    <th>Pounds</th>
    <td><?php echo '$ '.$friendly_pounds.''; ?></td>
    </tr>

    <tr>
    <th>Canadian</th>
    <td><?php echo '$ '.$canada.''; ?></td>
    </tr>

    <tr>
    <th>Euros</th>
    <td><?php echo '$ '.$friendly_euros.''; ?></td>
    </tr>

    <tr>
    <th>Yen</th>
    <td><?php echo '$ '.$friendly_yen.''; ?></td>
    </tr>

    <tr>
    <th>Total</th>
    <td><strong><?php echo '$ '.$friendly_total.''; ?></strong></td>
    </tr>


</table>


</body>
</html>