<html>
    <head><title>Infomation</title></head>
    <body>
        <font size = 5> Thank you: Got your input</font>
        <?php 
            $fName = $_POST['firstName'];
            $lName = $_POST['lastName'];
            $class = $_POST['class'];
            $univer = $_POST['university'];
            $hb1 = $_POST['hbs'];
            $hb2 = $_POST['hbs1'];
            $hb3 = $_POST['hbs2'];
            print("<br>Hello $fName $lName");
            print("<br>You are studying $class, $univer");
            print("<br>Your hobbies is: ");
            print("<br> 1. $hb1");
            print("<br> 2. $hb2");
            print("<br> 3. $hb3");
        ?>
    </body>
</html>