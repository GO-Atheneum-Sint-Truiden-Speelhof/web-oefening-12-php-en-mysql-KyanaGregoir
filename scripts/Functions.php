<?php

function SaveToDb()
{
    $servername = "localhost";
    $username = "Test";
    $password = "123";
    $dbname = "test";

    // connection maken
    $conn  = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
     {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO info(naam, Adres, Postcode, Gemeente, Telefoon, `E-Mail`, Geboorte, foto , camera, lens, beschrijving)
    VALUES ('".$_POST["naam"]."','".$_POST["adres"]."','".$_POST["postcode"]."','".$_POST["gemeente"]."','".$_POST["telefoonnummer"]."','".$_POST["e-mailadres"]."','"
    .$_POST["geboortedatum"]."','".$_POST["fotoTitel"]."','".$_POST["camera"]."','".$_POST["lens"]."','".$_POST["fotoBeschrijving"]."');";
    echo $sql;

    if ($conn->query($sql) == true ){
        echo "New record created succesfully";
    } else {
        echo "Error: " .$sql ."br" .$conn->error;
    }

}

function SaveLogin()
{
    $servername = "localhost";
    $username = "Test";
    $password = "123";
    $dbname = "test";

    // connection maken
    $conn  = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO login(Username, pswrd)
    VALUES ('".$_POST["Username"]."','".$_POST["Password"]."');";
    echo $sql;

    if ($conn->query($sql) == true ){
        echo "New record created succesfully";
    } else {
        echo "Error: " .$sql ."br" .$conn->error;
    }
    
}
function Inschrijvingen()
{
    $servername = "localhost";
    $username = "Test";
    $password = "123";  
    $dbname = "test";

    $conn  = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
       return $conn;

       $result = $conn->query($sql);

        while($row = $result->fetch_row()) 
        
        echo "Geen artikels gevonden in de databank";
        
        $conn->close();
    }


function connectDB()
{
    $servername = "localhost";
    $username = "Test";
    $password = "123";  
    $dbname = "test";

    $conn  = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
       return $conn;
}

function ShowDB()
{
    $conn = connectDB();
    $sql = "SELECT * FROM info";   

    $result = $conn->query($sql);
    while ($row = $result-> fetch_row())
    {
        echo '<tr>';
        for ($i = 0; $i < count($row); $i++)
        {
            echo "<td>";
            echo "$row[$i]";
            echo "</td>";

        }
        echo "</tr>";
    }
}

function login(){
    $conn = connectDB();
    $User = $_POST['Username'];
    $psw = $_POST['Password'];

    $sql = "SELECT * FROM login WHERE Username ='$User' AND pswrd ='$psw'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo "<p> Login succesvol geluk! </p>";
        header("refresh: 2 ; URL = begin.php?page=inschrijvingen");

    }
    $conn->close();
}

        ?>