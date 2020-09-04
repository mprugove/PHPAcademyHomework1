<?php include("inc/globals.php");
$num1 = 12;
$num2 = 8;
$num3 = 4;
$num4 = "8";
$num5 = 12;
?>




<!doctype html>
<html lang="en">
<head>
    <?php require_once 'inc/head.php'; ?>
    <title><?= appTitle;?></title>
</head>
<body>
<div class="uk-grid-small uk-child-width-auto">
    <?php include_once 'inc/header.php'; ?>
    <div class="uk-width uk-padding-large">
        <h1 class="uk-text-left uk-text-bold"><i>PHP Operators & data types</i> </h1>
        <div class="">
            <div class="uk-card uk-card-default uk-card-body uk-margin-large-left uk-card-hover uk-card-small">
                <p>PHP operators divided in the following groups :</p>
                <ol class="uk-list uk-list-disc">
                    <li>Arithmetic operators</li>
                    <li>Assignment operators</li>
                    <li>Comparison operators</li>
                    <li>Increment, Decrement operators</li>
                    <li>Logical operators</li>
                </ol>
            </div>
        </div>

        <div class="uk-card uk-card-default uk-card-body uk-margin-large-left">
            <table class="uk-table uk-table-hover uk-table-divider uk-table-small">
                <thead>
                    <tr class="uk-table-expand">
                        <th>    
                                <i>Few operator examples</i>                    
                        </th>
                        <th> </th>
                        <td> <b><?= "\$x = " . $num1 . ", \$y = " . $num2 . ", \$i = ". $num3 .", \$z = " . "\"$num4\"" . ", \$c = " . $num5; ?></b> </td>
                    </tr>
                    <tr>
                        <th>Arithmetic Operators</th>
                    </tr>
                    <tr>
                        <th>Operator</th>
                        <th>Example</th>
                        <th>Result</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="uk-table-shrink"> + </td>
                        <td>Addition <?= "\$x = $num1 + \$y = $num2"; ?></td>
                        <td>Sum of $x and $y = <?= $num1 + $num2 ?></td>
                    </tr>
                    <tr>
                        <td class="uk-table-shrink"> - </td>
                        <td>Subtraction <?= "\$i = $num3 - \$y = $num2"; ?></td>
                        <td>Difference of $i and $y = <?= $num3 - $num2 ?></td>
                    <tr>
                        <td class="uk-table-shrink"> * </td>
                        <td>Multiplication <?= "\$c = $num5 * \$y = $num2"; ?></td>
                        <td>Product of $x and $y = <?= $num5 * $num2 ?></td>
                    </tr>
                    <tr>
                        <td class="uk-table-shrink"> / </td>
                        <td> Division <?= "\$x = $num1 / \$i = $num3"; ?> </td>
                        <td>Quotient of $x and $i = <?= $num1 / $num3 ?></td>
                    </tr>
                    <tr>
                        <td class="uk-table-shrink"> % </td>
                        <td> Modul <?= "\$y = $num2 % \$i = $num3"; ?> </td>
                        <td>Remainder of $y and $i = <?= $num2 / $num3 ?></td>
                    </tr>
                    <tr>
                        <th>Logical Operators</th>
                    </tr>
                    <tr>
                        <td class="uk-table-shrink"> &&, AND </td>
                        <td> $x && $y </td>
                        <td>Both values needs to be true,  <?php if($num1 && $num4 == true) {
                                echo "values \$x = $num1, \$z = \"$num4\" are true";
                            } ?></td>
                    </tr>
                    <tr>
                        <td class="uk-table-shrink"> ||, OR </td>
                        <td> $x || $y </td>
                        <td>True if any operator $x or $y is true <?php if($num1 < 10 || $num1 > $num2) {
                                echo " \$x < 10 || \$y > \$x";
                            } ?></td>
                    </tr>
                    <tr>
                        <td class="uk-table-shrink"> !, NOT</td>
                        <td> !$x </td>
                        <td>True if $x is not true <?php if($num1 != true) {
                                echo " $num1 is false";
                            } else {
                                echo " \$x = $num1 is true";
                            } ?></td>
                    </tr>
                    <tr>
                        <th>Comparison Operators</th>
                    </tr>
                    <tr>
                        <td class="uk-table-shrink"> == </td>
                        <td>Equal <?= "\$y = $num2 == \$z = \"$num4\""; ?> </td>
                        <td>Returns true if <?php if($num2 == $num4) {
                                echo "Integer 8 is equal to string \"8\"";
                            } ?></td>
                    </tr>
                    <tr>
                        <td class="uk-table-shrink"> === </td>
                        <td>Identical <?= "\$x = $num1 === \$c = $num5"; ?> </td>
                        <td>Returns true if <?php if($num1 === $num5) {
                                echo "Both values are equal and same type";
                            } ?></td>
                    </tr>
                    <tr>
                        <td class="uk-table-shrink"> != </td>
                        <td>Not equal <?= "\$x = $num1 != \$z = \"$num4\""; ?> </td>
                        <td>Returns true if <?php if($num1 != $num4) {
                                echo "\$x is not equal to \$z";
                            } ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><hr class="uk-divider-icon"><br>
    </div>
</div>

<?php include 'inc/script.php'; ?>
</body>
</html>
