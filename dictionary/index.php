<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<?php 
$search = $_GET['search']??"like";
include_once "api.php"
?> 
<div class="container-fluid">

<div class="header">
<h1>ENGLISH LANGUAGE LEXICAL DICTIONARY</h1>
<form>  
    <p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Merriam-Webster_logo.svg/1200px-Merriam-Webster_logo.svg.png" alt="">
        SINCE 1828 <input value="<?php echo $search; ?>" name="search" type="text" placeholder="Example: successfull" size="70" >
        <button type="submit"><img src="https://www.graphicsfuel.com/wp-content/uploads/2011/12/search-icon-512.png" style="height: 20px;" style="background-color: transparent;" alt=""></button>
    </p>
</form>
</div>
<!--                    -->
<div class="text_area">
    <h1><?php echo $dictionary['entries'][0]['entry']; ?></h1><h3><?php echo $dictionary["entries"][0]['lexemes'][0]["partOfSpeech"] ?></h3>


<!--                    -->
    <p>
        <?php echo $dictionary['entries'][0]['pronunciations'][0]['transcriptions'][0]['transcription']; ?>
        <a href="<?php echo $dictionary['entries'][0]['pronunciations'][2]['audio']['url']; ?>">
            <img style="height: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgZptKvPyOyRdjSTRJYPXrEtzx6MQjJUKsCA&usqp=CAU" alt="">
        </a>
        <i><?php echo $dictionary['entries'][0]['pronunciations'][0]['context']['regions'][0]; ?></i>
    </p>
    
<!--                    -->
    <p><?php echo $dictionary['entries'][0]['interpretations'][0]['grammar'][0]['number'][0]; ?> and <?php echo $dictionary['entries'][0]['interpretations'][0]['grammar'][0]['case'][0]; ?></p>
    <p><h3><?php echo $dictionary['entries'][0]['lexemes'][0]['senses'][0]['definition']; ?></h3></p>
    <p><b>Synonyms & Antonyms for <i><?php echo $dictionary['entries'][0]['entry']; ?></i></b></p>
    <p><b>Synonyms: <?php $dictionary['entries'][0]['lexemes'][0]['synonymSets'][0]['synonyms'][0]; ?></b></p>
    <p><b>Antonyms: <?php $dictionary['entries'][0]['lexemes'][0]['antonymSets'][0]['antonyms'][0]; ?></b></p>
</div>

</div>

<style>
    .header{
        background-color: #305f7a;
        text-align: center;
        color: white;
        font-family: 'Times New Roman', Times, serif;
        display: center;
        width: 100%;
        height: 200PX;
        align-items: center;
    }
    p img{
        height: 140px;
    }
    .text_area{
        margin-left: 120px;
        margin-top: 30px;
    }
</style>
</body>
</html>