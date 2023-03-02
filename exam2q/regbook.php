<html>
    <head>
        <title>REGISTER</title>
    </head>
    <body>
        <center>
            <h1>REGISTER</h1>
            <form method="post">
                <table>
                    <tr>
                        <td>BOOK_ID</td>
                        <td><input type="input" name='book_id'></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td><input type="input" name='title'></td>
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td><input type="input" name='author'></td>
                    </tr>
                    <tr>
                        <td>Publisher</td>
                        <td><input type="input" name='publisher'></td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input type="input" name='quantity'></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="ADD"></td>
                        <td></td>
                    </tr>
                </table>
        </center>

    </body>
</html>
<?php 
    include 'conn.php';
    if($_POST){
        $bookid=$_POST['book_id'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $publisher=$_POST['publisher'];
        $quantity=$_POST['quantity'];
        $sql="INSERT INTO `book`(`book_id`, `title`, `author`, `publisher`, `quantity`) 
        VALUES ('$bookid','$title','$author','$publisher','$quantity')";
        $res=$con->query($sql);
        if($res){
            echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
        }
        else{
            echo "<script>alert('INSERTION ERROR');</script>";
        }
    }
?>