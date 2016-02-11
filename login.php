<?php

require "database.php";
if(isset($_POST['username'],$_POST['password'])){
    $x = $_POST['username'];


 $stmt = $dbc->prepare(
        "SELECT * FROM admins WHERE usn = :usn"
    );
    $stmt->execute(array(':usn' => $_POST['username']));
    // get the data from the result query
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($data['pass'] == $_POST['password'])
    {
    	echo "Welcome admin!<br>";
        echo "<form name=\"update\"  method=\"post\" class=\"loginform\" >";  
        echo "<span class=\"smalltext\"> First Name: </span>";
        echo "<input type=\"text\" name=\"fn\" class=\"loginform\"><br>";
        echo "<span class=\"smalltext\"> Second Name: </span>";
        echo "<input type=\"text\" name=\"sn\"  class = \"loginform\"><br>";
        echo "<span class=\"smalltext\"> New Image Name: </span>";
        echo "<input type=\"text\" name=\"nin\" class = \"loginform\"><br>";
        echo "<input type = \"submit\" name = \"upd\" class = \"loginform\" value=\"OK\">  </form>";

    }
    else echo "Wrong username or password. <br> ";}

    


if( isset($_POST['upd']) )
    {
        $x = $_POST['nin'];
        $y = $_POST['fn'];
        $stmt = $dbc->prepare("UPDATE members SET imgname= :imgname WHERE firstname= :firstname AND secondname= :secondname");
        $stmt->bindParam(':imgname',$_POST['nin'],PDO::PARAM_STR);
        $stmt->bindParam(':firstname',$_POST['fn'],PDO::PARAM_STR);
        $stmt->bindParam(':secondname',$_POST['sn'],PDO::PARAM_STR);
        $stmt->execute(array(':imgname' => $_POST['nin'], ':firstname' => $_POST['fn'], ':secondname' => $_POST['sn']));

    }
?>
