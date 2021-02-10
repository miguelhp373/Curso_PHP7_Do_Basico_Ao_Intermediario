<?php
    $Ids = [];
    if(filter_input(INPUT_POST,'btnSub',FILTER_SANITIZE_STRING)){   
        $checkBox = filter_input(INPUT_POST,'User',FILTER_SANITIZE_NUMBER_INT,FILTER_REQUIRE_ARRAY);
        
        foreach($checkBox as $items){
            $Ids[] = $items;
        }
        
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>

<body>
    <form action="" method="POST">
        <label for="checkInfo">
            <input type="checkbox" name="User[]" value="1" id="checkInfo">
            João
        </label>
        <br>
        <label for="checkInfo">
            <input type="checkbox" name="User[]" value="2" id="checkInfo">
            Michael
        </label>
        <br>
        <label for="checkInfo">
            <input type="checkbox" name="User[]" value="3" id="checkInfo">
            Jonas
        </label>
        <br>
        <label for="checkInfo">
            <input type="checkbox" name="User[]" value="4" id="checkInfo">
            Ana
        </label>
        <br>
        <input type="submit" name="btnSub" value="Enviar">
    </form>
    <br>
    <h2>results</h2>
    <?php for($i=0;$i<count($Ids);$i++){?>
           <span><?php echo $Ids[$i];?></span> 
           <br>
        <?php }; ?>
</body>

</html>