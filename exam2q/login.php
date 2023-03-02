<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <center>
            <h1>LOGIN</h1>
            <form method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="input" name='uname'></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name='pwd'></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="LOGIN"></td>
                        <td></td>
                    </tr>
                </table>
        </center>

    </body>
</html>
<?php 
    include 'conn.php';
    if($_POST){
        $uname=$_POST['uname'];
        $pwd=$_POST['pwd'];
        $sql="SELECT * FROM `login` WHERE `username`='$uname'  AND `password`='$pwd'";
        $res=$con->query($sql);
        if($res->num_rows>0){
           header("Location:/mca/exam2q/homep.html");
        }
        else{
            echo "invalid username or password";
        }
    }
?>