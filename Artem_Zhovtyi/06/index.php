<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>http request</title>
</head>
<body>
<form method="post">
    <p>
        <label for="size_1">Input matrix 1 size</label>
        <input type="text" name="size_1" id ="size_1" value="<?=$_REQUEST['size_1']?>">
    </p>
    <p>
        <input type="checkbox" name="checkbox_1">
    </p>
    <p>
        <label for="size_2">Input matrix 2 size</label>
        <input type="text" name="size_2" id ="size_2" value="<?=$_REQUEST['size_2']?>">
    </p>
    <p>
        <input type="checkbox" name="checkbox_1">
    </p>
    <p>
        <input type="submit" name="submit"value ="Generate">
    </p>
</form>
<?php
$arMultiply=[];
$arRow=[];
$arCell=[];
for ($i=1;$i<=$_REQUEST['size_1'];$i++){
    for($j=1;$j<=$_REQUEST['size_1'];$j++){
        $arCell=$i*$j;
    }
    $arRow[]=$i;
    }
$arMultiply[$arRow]=$arCell;
echo "<pre>";
var_dump($arMultiply);
echo "</pre>";

?>
<table border="1" cellspacing="0">
    <?php for ($row=1;$row<=$_REQUEST['size_1'];$row++):?>
        <tr>
            <?php for ($cell=1;$cell<=$_REQUEST['size_1'];$cell++):?>
                <td><?=$row*$cell?></td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>
<table border="1" cellspacing="0">
    <?php for ($row=1;$row<=$_REQUEST['size_2'];$row++):?>
        <tr>
            <?php for ($cell=1;$cell<=$_REQUEST['size_2'];$cell++):?>
                <td>
                    <?if($row===$cell){
                        echo "1";
                    }elseif($row+$cell===$_REQUEST['size_2']+1){
                        echo "2";
                    }elseif($cell>$row && $row+$cell<$_REQUEST['size_2']+2){
                        echo "3";
                    }elseif($row+$cell>$_REQUEST['size_2']+2 && $cell>$row){
                        echo "4";
                    }elseif($row>$cell && $row+$cell>=$_REQUEST['size_2']+2){
                        echo "5";
                    }else{
                        echo "6";
                    }
                    ?>
                </td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>
</body>
</html>