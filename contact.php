<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $formattedData = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n------------------------\n";

    $filePath = __DIR__ . "/data.txt"; // Ensure file exists in the same directory

    if (file_put_contents($filePath, $formattedData, FILE_APPEND)) {
        echo "Your message has been saved successfully!";
    } else {
        echo "Error writing to file!";
    }
} else {
    echo "Invalid request method!";
}
?>
