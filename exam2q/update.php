<html>
    <head>
        <title>UPDATE</title>
        <style>
            td{
                padding:8px;
            }
            </style>
            <!-- <script>
                function clr(){
                
                    document.getElementById('bi').value=' ';
                }
                </script> -->
    </head>
    <body>
        <center>
            <h1>SEARCH</h1>
            <form method="post" action="">
                <table>
                    <tr>
                        <td>BOOK_ID</td>
                        <td><input type="input" name='book_id' id='bi' onclick="clr()"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="search" name="search"></td>
                        <td></td>
                    </tr>
                </table></FORM>
        </center>

    </body>
</html>
<?php 
    include 'conn.php';
    session_start();
    if(isset($_POST['search'])){
        
        $bookid=$_POST['book_id'];
        echo "<script>alert('search {$bookid}');</script>";
        $sql="SELECT * FROM `book` WHERE `book_id`='$bookid'";
        $res=$con->query($sql);
        if($res->num_rows>0){
            $r=$res->fetch_assoc();
            
            $_SESSION['roll']=$r['slno'];
            echo "<CENTER>
            <form method='post' action=''>
            <table border='1'>
                    <tr>
                        <td>BOOK_ID</td>
                        <td><input type=input' name='book_id' value='{$r['book_id']}'></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td><input type='input' name='title' value='{$r['title']}'></td>
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td><input type='input' name='author' value='{$r['author']}'></td>
                    </tr>
                    <tr>
                        <td>Publisher</td>
                        <td><input type='input' name='publisher' value='{$r['publisher']}'></td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input type='input' name='quantity' value='{$r['quantity']}'></td>
                    </tr>
                    <tr>
                        <td><input type='submit' value='UPDATE' name='update'></td>
                        <td></td>
                    </tr>
                </table></form></CENTER>";

        }
        else{
            echo "No entry";
        }
        
    }

?>
<?php
if(isset($_POST['update'])){
include 'conn.php';
    
    // session_start();
$bookid=$_POST['book_id'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $publisher=$_POST['publisher'];
        $quantity=$_POST['quantity'];
        $sql="UPDATE `book` SET `book_id`='$bookid',
        `title`='$title',`author`='$author',`publisher`='$publisher',`quantity`='$quantity'
         WHERE `slno`='{$_SESSION['roll']}'";
        $res=$con->query($sql);
        if($res){
            echo "<script>alert('UPDATED SUCCESSFULLY');</script>";
        }
        else{
            echo "<script>alert('UPDATION ERROR');</script>";
        }
    }
?> 
