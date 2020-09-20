<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asda</title>
</head>
<body>  
    <form method = "POST">
            <input type="text" name="name" id="name" placeholder = "Name">
            <input type="password" name="password" id= "password" placeholder = "Password">
            <button class="btn btn-success" type="submit">Submit</button>
    </form>  
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'table_learn');
        $name = $_POST['name'];
        $password = $_POST['password'];
        if (!empty($name) || !empty($password)) {
            echo "name or password is not require";
        }
        else {
            $conn-> query("INSERT INTO `table_learn` (`name`, `password`) VALUES('$name', '$password')");               
        }
        

        
    ?>              

</body>
</html>