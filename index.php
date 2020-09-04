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
    <main>
        <div class="uk-width-extend uk-padding-large">
            <h1 class="uk-text-center uk-text-secondary"><b><u><i>PHP Academy 2020</i></u></b></h1>
            <br><hr class="uk-divider-icon">
        </div>
        <div class="uk-width-extend uk-padding-large ">
            <article class="uk-article uk-background-mute">
                <h5 class="uk-article-title"><strong>Simple form</strong></h5>
                <form action="post" class="uk-form-stacked" id="form">
                    <label for="" class="uk-form-label">How do you like Academy so far</label> <br>
                    <input type="text" placeholder="Name" class="uk-input uk-text"> <br>
                    <select class="uk-select" id="form-stacked-select">
                        <option>Excellent</option>
                        <option>Great!</option>
                        <option>So far so good</option>
                    </select>
                    <label for="textarea"></label>
                    <textarea name="id" id="textarea" cols="30" rows="10" placeholder="Tell us your thoughts" class="uk-textarea"></textarea>
                    <input type="button" value="Submit" class="uk-button uk-button-primary">
                </form>
            </article>
        </div>
    </main>
</div>


<?php include 'inc/script.php'; ?>
</body>
</html>