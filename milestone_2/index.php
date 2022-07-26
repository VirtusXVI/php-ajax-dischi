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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Dischi</title>
</head>
<body>
    <div id="root">
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
    </div>
    <script src="js/script.js"></script>
</body>
</html>