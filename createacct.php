<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data when the form is submitted
    $accountName = $_POST["account_name"];
    $domainName = $_POST["domain_name"];
    
    // Perform account creation logic here
    // You can use the values of $accountName and $domainName to create the hosting account
    // For demonstration purposes, we'll just display a success message
    
    echo "<h1>Hosting Account Created Successfully</h1>";
    echo "<p>Account Name: $accountName</p>";
    echo "<p>Domain Name: $domainName</p>";
} else {
    // Display the hosting account creation form
    echo "<h1>Create Hosting Account</h1>";
    echo "<form method='post'>";
    echo "<label for='account_name'>Account Name:</label>";
    echo "<input type='text' id='account_name' name='account_name' required><br><br>";
    echo "<label for='domain_name'>Domain Name:</label>";
    echo "<input type='text' id='domain_name' name='domain_name' required><br><br>";
    echo "<input type='submit' value='Create Account'>";
    echo "</form>";
}
?>
