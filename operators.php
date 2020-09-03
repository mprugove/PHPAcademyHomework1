<?php include 'inc/globals.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/head.php'; ?>
        <title><?= appTitle;?></title>
    </head>
    <body>
        <div class="uk-grid-small uk-child-width-auto" uk-grid>
            <?php include 'inc/header.php'; ?>
            <div class="uk-width uk-padding-large">
                <h1 class="uk-text-left uk-text-secondary">PHP Operators </h1>
                <div class="uk-width-expand">
                    <div class="uk-card uk-card-default uk-card-body uk-margin-large-left uk-width-1-4">
                        <p>PHP operators are divided in the following groups :</p>
                        <ol class="uk-list uk-list-disc">
                            <li>Arithmetic operators</li>
                            <li>Assignment operators</li>
                            <li>Comparison operators</li>
                            <li>Increment, Decrement operators</li>
                            <li>Logical operators</li>
                        </ol>
                    </div>
                </div>
                <br><hr class="uk-divider-icon"><br>
            </div>

            <div class="uk-card uk-card-default uk-card-body uk-margin-large-left">
                <table class="uk-table uk-table-hover uk-table-divider">
                    <thead>
                        <tr class="uk-table-expand">
                            <th><i>Examples</i></th>
                            <th> </th>
                            <th> <?= "\$x = " . $x . ", \$y = " . $y ?></th>
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
                            <td>Addition $x + $y</td>
                            <td>Sum of $x and $y = <?= $x + $y ?></td>
                        </tr>
                        <tr>
                            <td class="uk-table-shrink"> - </td>
                            <td>Subtraction $x - $y</td>
                            <td>Difference of $x and $y = <?= $x - $y ?></td>
                        <tr>
                            <td class="uk-table-shrink"> * </td>
                            <td>Multiplication $x * $y</td>
                            <td>Product of $x and $y = <?= $x * $y ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include 'inc/script.php'; ?>
    </body>
</html>