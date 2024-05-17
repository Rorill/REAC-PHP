<?php
session_start();
require "../db.php";
$sql = 'SELECT * FROM messages';
$stmt = $pdo->query($sql);

$singleResult = $stmt->fetch();
$allResult = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat</title>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <div class="chat-container">
            <div class="chat-header">
                <h2>Chat Room</h2>
            </div>
            <div class="chat-messages" id="chat-messages">
                <!-- Les messages apparaîtront ici -->
                <?php 
                foreach ($allResult as $index -> $row) {
                    include "../partials/messages.php";
                }
               
                var_dump($allResult);
             


                ?>

                <!-- Start Message -->
                <!-- Ci-dessous un exemple de structure HTML & CSS d'un message -->
                <div class="message">
                    <span>Bonjour, tu vas bien ?</span>
                    <button class="delete-button">Delete</button>
                </div>
                <!-- End Message -->

            </div>
            <div class="chat-input">
                <?php
                include "../partials/_form.php";
                ?>
                <!-- Le formulaire pour envoyer des messages doit se trouver ci-dessous -->
            </div>
        </div>
    </body>
</html>
