<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>

    <!-- Getting using input -->
    <form action="site.php" method="get">
        Name: <input type="text" name="username">
        <br><br>
        Age: <input type="number" name="age">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <br>

        Your name is <?php echo $_GET["username"] ?> 
        <br>
        Your age is <?php echo $_GET["age"] ?> 

    <!-- Building a Basic Calculator -->
    

</body>
</html>
