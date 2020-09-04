<?php include 'inc/globals.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <?php require 'inc/head.php'; ?>
        <title><?= appTitle;?></title>
    </head>
    <body>
        <div class="uk-grid-small">
            <?php include 'inc/header.php'; ?>
            <div class="uk-width uk-padding-large">
                <h2 class="uk-text-left uk-text-secondary">More about PHP data types</h2>
            </div>
        </div>

        <div class="uk-child-width-expand uk-grid-small-uk-grid-match" uk-grid>
            <div class="uk-card uk-card-body uk-card-default uk-card-hover uk-card-small uk-margin-large-left ">
                <div class="uk-card-title"><h3>PHP data types :</h3></div>
                <dl class="uk-list ">
                    <dt class="uk-text-primary">String </dt>
                        <dd class="uk-margin-large-left">String can be any text inside single or double quotes</dd>
                        <dd class="uk-margin-large-left uk-margin-medium-bottom">Example : $x = "Hello World!"; </dd>
                    <dt class="uk-text-primary">Integer</dt>
                        <dd class="uk-margin-large-left">Integers are non-decimal numbers</dd>
                        <dd class="uk-margin-large-left uk-margin-medium-bottom"> $x = 5; $y = 3214</dd>
                    <dt class="uk-text-primary">Boolean</dt>
                        <dd class="uk-margin-large-left uk-margin-medium-bottom">Booleans represent TRUE or FALSE state</dd>
                    <dt class="uk-text-primary">Floats</dt>
                        <dd class="uk-margin-large-left">Floats are number with decimal point</dd>
                        <dd class="uk-margin-large-left uk-margin-medium-bottom">$float = 23.22, $float2 = 11,2356</dd>
                </dl>

            </div>
            <div class="uk-card uk-card-body uk-card-default uk-card-hover uk-card-small uk-margin-large-left ">
                <dl class="uk-margin-large-top">
                    <dt class="uk-text-primary">Array</dt>
                    <dd class="uk-margin-large-left">Arrays can store multiple values in one single variable</dd>
                    <dd class="uk-margin-large-left">$array = array("Car", "Truck", 33); </dd>
                    <dd class="uk-margin-large-left uk-margin-medium-bottom">$array2 = [FALSE, "Donald Trump"];</dd>
                    <dt class="uk-text-primary"> Objects </dt>
                    <dd class="uk-margin-large-left">Object stores data and information how to process data</dd>
                    <dd class="uk-margin-large-left">class Animal { function Animal() { $this->type = "Dog" } }</dd>
                    <dd class="uk-margin-large-left uk-margin-medium-bottom">$dogo = new Dog();</dd>
                    <dt>NULL</dt>
                    <dd class="uk-margin-large-left">NULL is a special data type, and can only be value of NULL</dd>
                    <dd class="uk-margin-large-left">If variable is created without value it will gain value of NULL</dd>
                </dl>
            </div>
        </div>

        <?php include 'inc/script.php';?>
    </body>
</html>
