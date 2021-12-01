<?php
    include 'data.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="">
            <h2>Privacy e termini</h2>
        </div>
        <nav class="nav g-2">
    	    <?php 
                foreach ($navLink as $key => $link) {
                    $title = $link["title"];
                    $href = $link["link"];
                    echo "<div class='container-link'><a href='$href'> $title </a></div>";
                }
            ?>
        </nav>
    </header>
    <main>
        <div class="container">


            <?php foreach ($faqs as $key => $section) {
                $title = $section["title"];
                $text = $section["text"];
                echo "<div class='mb-3'> $title <br> $text </div>";
            }

            ?>
        </div>
    </main>
</body>

</html>