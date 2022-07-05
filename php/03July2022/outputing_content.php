<?php
$title = "My page title";
$body = "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat perspiciatis asperiores mollitia quisquam, repudiandae aspernatur exercitationem sint doloribus laudantium eos totam sit, repellendus inventore ipsa odit iste nam dolores! Delectus.</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $body; ?>
    <br>
    <?php echo "I want to show {$title} and {$body}"; ?>
    <?php echo "I want to show $title and $body"; ?>
     

    
</body>
</html>