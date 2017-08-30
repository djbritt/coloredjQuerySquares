<?php
function printDiv() {
    for ($i = 0; $i < 120; $i++) {
    echo "<div style='margin: 3px;'></div>";    
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> </title>
    <style>
        div {
            height: 100px;
            width: 100px;
            display: inline-block;
            background-color: orange;
            /*border-radius: 5px;*/
        }
    </style>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        var randomNum = Math.floor(Math.random() * 13);
        // var randomNum = 8;
        $(document).ready(function() {
            switch (randomNum) {
                case 0:
                    console.log(0);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).fadeOut("fast");
                        $(this).fadeIn("fast");
                    });
                    break;
                case 1:
                    console.log(1);
                    $("div").mouseover(function() {
                        $(this).slideUp("slow", function() {
                            var randomColor = Math.floor(Math.random()*16777215).toString(16);
                            $(this).slideDown() 
                            $(this).css("background-color", "#" + randomColor);
                        });
                    });
                    break;
                case 2:
                    console.log(2);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).effect( "bounce", {times:3}, 700 );
                    });
                    break;
                case 3:
                    console.log(3);
                    // $("div").css("display", "none")
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).toggle( "down").toggle("up");
                    });
                    break;
                case 4:
                    console.log(4);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).hide( "blind", {direction: "horizontal"}, 1000 )
                        $(this).show( "blind", {direction: "horizontal"}, 1000 )
                    });
                    break;
                case 5:
                    console.log(5);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).hide( "clip", {direction: "horizontal"}, 1000 )
                        $(this).show( "clip", {direction: "horizontal"}, 1000 )
                    });
                    break;
                case 6:
                    console.log(6);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).hide( "drop", {direction: "horizontal"}, 1000 )
                        $(this).show( "drop", {direction: "horizontal"}, 1000 )
                    });
                    break;
                case 7:
                    console.log(7);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).hide( "explode", {direction: "horizontal"}, 1000 )
                        $(this).show( "explode", {direction: "horizontal"}, 1000 )
                    });
                    break;
                case 8:
                    console.log(8);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).hide( "fold", 1000 )
                        $(this).show( "fold", 1000 )
                    });
                    break;
                case 9:
                    console.log(9);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).hide( "puff", 1000 )
                        $(this).show( "puff", 1000 )
                    });
                    break;
                case 10:
                    console.log(10);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).hide( "pulsate", 1000 )
                        $(this).show( "pulsate", 1000 )
                    });
                    break;
                case 11:
                    console.log(11);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).hide( "scale", 1000 )
                        $(this).show( "scale", 1000 )
                    });
                    break;
                case 12:
                    console.log(12);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        $(this).css("background-color", "#" + randomColor);
                        $(this).hide( "shake", 1000 )
                        $(this).show( "shake", 1000 )
                    });
                    break;
                case 13:
                    console.log(13);
                    $("div").mouseover(function() {
                        var randomColor = Math.floor(Math.random()*16777215).toString(16);
                        // $(this).animate("background-color", "#" + randomColor);
                        $(this).animate({backgroundColor: "#" + randomColor})
                        // $(this).hide( "shake", 1000 )
                        // $(this).show( "shake", 1000 )
                    });
                    break;
            }
        });
    </script>
    <p style='text-align: center'>Refresh the page! 12 Effects</p>
    <?=printDiv()?>
</body>

</html>