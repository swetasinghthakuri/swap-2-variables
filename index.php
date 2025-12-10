<style>
    .box {
        height:100px;
        width: 100px;
        background:maroon;
        margin-bottom:5px;
        display: inline-flex;
        margin-right:5px;
         justify-content: center;   
        align-items: center;      
        font-size: 24px;
        color: white;
        font-weight: bold;
         
    }
    .box:hover {
        background: grey;
    }
    


</style>
<?php
$number=1;
for($row = 1; $row <= 4; $row++){
    for($col = 1; $col <= 4; $col++){

echo "<div class='box'>$number</div>";
$number++;
}
echo "<br>";
}

?>