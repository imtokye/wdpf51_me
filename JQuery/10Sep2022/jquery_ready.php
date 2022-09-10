<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

<script>
   $(document).ready(function () {
    $(".btn1").click(function(){
        $("#para1").hide();
    })
    $(".btn2").click(function(){
        $("#para1").show();
    })
    $(".btn3").click(function(){
        $("#para2").toggle();
    })
   });

</script>

<button class="btn1">Hide Paragraph 1</button>
<button class="btn2">Show Paragraph 1</button>
<button class="btn3">Hide/Show Paragraph2</button>

<p id="para1">1.Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ea ipsam sunt repudiandae nihil aliquid, vero molestias, sed aut perferendis iure minima perspiciatis dolorem incidunt sint soluta totam architecto nostrum.</p>

<p id="para2">2.Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ea ipsam sunt repudiandae nihil aliquid, vero molestias, sed aut perferendis iure minima perspiciatis dolorem incidunt sint soluta totam architecto nostrum.</p>
    
</body>
</html>