<?php 
    include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>
<body>
    <header>
        
    </header>
    <main>
        <div class="cards-container">
            <div class="cards">
                <?php foreach($database as $song) { ?>
                <div class="card">
                    <div>
                        <img src="<?php echo $song['poster'] ?>" alt="song poster">
                    </div>
                    <div>
                        <span><?php echo $song['title'] ?></span>
                        <span><?php echo $song['author'] ?></span>
                        <span><?php echo $song['year'] ?></span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>