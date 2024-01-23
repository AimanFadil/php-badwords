<?php 
    $paragrafo = $_GET['paragrafo'];
    $censura = $_GET['censura'];

    $new_paragrafo = str_replace($censura,'<span class="red">***</span>', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 bordi py-4">
                <span class="blue">IL PARAGRAFO CHE HAI INSERITO E':</span>
                <span>"<?php echo $paragrafo?>"</span>
            </div>
            <div class="col-12 bordi py-4">
                <span class="blue">LA SUA LUNGHEZZA E':</span>    
                <span >"<?php echo strlen($paragrafo)?>"</span> 
            </div>
            <div class="col-12 bordi py-4">
                <span class="blue">IL PARAGRAFO CENSURATO:</span>   
                <span>"<?php echo $new_paragrafo ?>"</span>
            </div>
        </div>
    </div>
</body>
</html>