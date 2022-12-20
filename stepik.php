<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$zero = [01 => 'book_id', 02 => 'title', 03 => 'author', 04 => 'price', 05 => 'amount',
11 => 1, 12 => 'Мастер и Маргарита', 13 => 'Булгаков М.А.', 14 => '670.99', 15 => 3,
21 => 2, 22 => 'Белая гвардия', 23 => 'Булгаков М.А.', 24 => '540.50', 25 => 5,
31 => 3, 32 => 'Идиот', 33 => 'Достоевский Ф.М.', 34 => '460.00', 35 => 10,
41 => 4, 42 => 'Братья Карамазовы', 43 => 'Достоевский Ф.М.', 44 => '799.01', 45 => 3,
51 => 6, 52 => 'Игрок', 53 => 'Достоевский Ф.М.', 54 => '480.50', 55 => 10,
61 => 7, 62 => 'Стихотворения и поэмы', 63 => 'Есенин С.А.', 64 => '650.00', 65 => 15,];
//var_dump($zero);
echo '<br/><br/>';
echo "БАЗА ДАННЫХ на stepik:";
echo '<br/><br/>';
//echo $zero[01];
//echo '<br/>';
//print_r(max(array_keys($zero)));
?>
<table border="<?php max(array_keys($zero)) ?>">
    <tr><td><?php echo $zero[01] ?></td><td><?php echo $zero[02] ?></td>
        <td><?php echo $zero[03] ?></td><td><?php echo $zero[04] ?></td><td><?php echo $zero[05] ?></td></tr>
    <tr><td><?php echo $zero[11] ?></td><td><?php echo $zero[12] ?></td>
        <td><?php echo $zero[13] ?></td><td><?php echo $zero[14] ?></td><td><?php echo $zero[15] ?></td></tr>
    <tr><td><?php echo $zero[21] ?></td><td><?php echo $zero[22] ?></td>
        <td><?php echo $zero[23] ?></td><td><?php echo $zero[24] ?></td><td><?php echo $zero[25] ?></td></tr>
    <tr><td><?php echo $zero[31] ?></td><td><?php echo $zero[32] ?></td>
        <td><?php echo $zero[33] ?></td><td><?php echo $zero[34] ?></td><td><?php echo $zero[35] ?></td></tr>
    <tr><td><?php echo $zero[41] ?></td><td><?php echo $zero[42] ?></td>
        <td><?php echo $zero[43] ?></td><td><?php echo $zero[44] ?></td><td><?php echo $zero[45] ?></td></tr>
    <tr><td><?php echo $zero[51] ?></td><td><?php echo $zero[52] ?></td>
        <td><?php echo $zero[53] ?></td><td><?php echo $zero[54] ?></td><td><?php echo $zero[55] ?></td></tr>
    <tr><td><?php echo $zero[61] ?></td><td><?php echo $zero[62] ?></td>
        <td><?php echo $zero[63] ?></td><td><?php echo $zero[64] ?></td><td><?php echo $zero[65] ?></td></tr>
</table>
</body>
</html>