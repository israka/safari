<?php
function component($image,$text)
{
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
        <form action=\"cartpractice.php\" method=\"post\"></form>
        <div class=\"card shadow\"></div>
    <img src=\"$image\" alt=\" \" class=\"img-fluid card-img-top\">

    <div class=\"box-container\">
   <h5 class=\"card-title\">$text</h5>
        
        


    </div>
</div>

    ";



    echo $element;
}




