<?php
$info = array(
    array("BERNARDO", "Project Manager", "Go FINTALIX!"),
    array("REYES", "Full Stock Developer", "Go FINTALIX!")
);
?>
<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GITHUB DEMO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Sail&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --primaryFont: "Montserrat", sans-serif;
        }

        .title {
            font-family: var(--primaryFont);
        }
        
        .card{
            margin-inline: auto;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid pt-5">
        <h1 class="title display-1 text-center">INTRODUCE YOURSELF</h1>

        <div class="container">
            <div class="row">
                <?php for($i = 0; $i < count($info); $i++){ ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $info[$i][0] ?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $info[$i][1] ?></h6>
                            <p class="card-text"><?php echo $info[$i][2] ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>