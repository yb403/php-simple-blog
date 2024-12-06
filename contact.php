<?php 
include 'partials/header.php'
?>

<html lang="en">

<body style="font-family: Arial, sans-serif; margin: 0; line-height: 1.6; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f4;">
    <div style="background-color: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); max-width: 600px; width: 100%;">
        <h1 style="color: #333; border-bottom: 2px solid #ccc; padding-bottom: 10px; text-align: center;">Contact Us</h1>
        
        <form action="/submit-contact" method="post" style="background-color: #f4f4f4; padding: 20px; border-radius: 5px;">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; margin: 10px 0;">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin: 10px 0;">
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 10px; margin: 10px 0;"></textarea>
            
            <input type="submit" value="Send Message" style="background-color: #333; color: white; border: none; cursor: pointer; width: 100%; padding: 10px; margin: 10px 0;">
        </form>
    </div>
</body>


</html>