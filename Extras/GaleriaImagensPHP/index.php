<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imagens</title>
    <style>
        img{
            max-width: 500px;
        }
    </style>
</head>
<body>
<?php 
    require_once 'Galeria.php';
    $galeria = new Galeria();
?>
    <img src="<?php echo $galeria->getCurrentPicture(); ?>">

    <a href="<?php echo $galeria->getPrevPictureIndex(); ?>">Anterior</a>

    <a href="<?php echo $galeria->getNextPictureIndex(); ?>">Próxima</a>

</body>
</html>