<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = trim($_POST['message']);

    $stmt = $pdo->prepare('INSERT INTO messages (message)
    VALUES (:msg');

    $stmt->bindValue(':msg', $message, PDO::PARAM_STR);
    
   
}
?>
<form action="" method="POST">           
    <label for="message"></label>
    <input class ="inputform" type="text" name="message" id="messages" placeholder="Type a message..."></input>
    <input type="submit" value="submit">

</form> 