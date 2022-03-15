<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>

    <script src="./main.js" defer></script>

</head>
<body>

<!-- customer info -->
<h1>
    customer SAD- ASIAN BOII HIYAAaa
</h1>
    <!-- CRAAAAAAZZZZZZYYYYYY -->

    
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
var_dump($_POST);
if (isset($_POST['submit'])) {
    echo 'test';
    
    $link = mysqli_connect("localhost", "root", "", "butik");
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    // Check if submit button is clicked
    if(isset($_POST['submit'])){
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        
        // attempt insert query execution
        $sql = "INSERT INTO customer (phone, email, first_name, last_name, address) VALUES ('$phone', '$email', '$first_name', '$last_name', '$address')";
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
        }
    }
    // close connection
    mysqli_close($link);
    // header('location: customers.php'); // relaod page, remove for debugging :D
}
?>

    <form action="" method="POST"">

        <label for="phonenumber">
            Telefon nr:
        </label>
        <input id="phone" type="text" name="phone" required>
        <br>
        
        <label for="email">
            email:
        </label>
        <input id="email" type="email" name="email" required>
        <br>

        <label for="name">
            fornavn
        </label>
        <input type="text" name="first_name" required>
        <br>

        <label for="name">
            efternavn
        </label>
        <input type="text" name="last_name" required>
        <br>
        
        <h4>Adresse</h4>

        <label for="adress">
            adresse
        </label>
        <input type="text" name="address" id="address" required> 

        <label for="husnummer">
            nr
        </label>
        <input type="text" id="nr" required> 
        
        <label for="kommune">
            kommune
        </label>
        <input type="text" id="kommune" required> 
        <button onclick="getAddress()"> Tjek adresse </button>
        <br>
        
        <input id="submit" type="submit" value="submit" name="submit" >
    </form>

    <h2 id="apiResult">

    </h2>
        
</body>

</html>
