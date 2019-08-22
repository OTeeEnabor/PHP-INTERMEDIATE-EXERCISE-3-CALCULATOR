


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Calculator APP</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" mathod="post">

    <label>
    <input type="number" name="num1">
    </label>
    <select>
        <option name ="calculation" value="add">+</option>
        <option name ="calculation"value="subtract">-</option>
        <option name ="calculation"value="multiply">*</option>
        <option name ="calculation"value="divide">/</option>
    </select>
    <label>
    <input type="number" name="num2">
    </label>
    
    <input type="submit" name="calculate">
    
    </form>
<?php
if($_POST['calculate'] && $_POST['num1'] && $_POST['num2'] && $_POST['calculation']){
    
}
?>
</body>
</html>


<? php

?>