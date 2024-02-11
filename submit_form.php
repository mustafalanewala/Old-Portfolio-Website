<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create or open the Excel file
    $excelFile = 'data.xlsx';

    // Check if the file exists, if not, create it and add headers
    if (!file_exists($excelFile)) {
        $headers = array("First Name", "Last Name", "Email", "Message");
        $file = fopen($excelFile, 'w');
        fputcsv($file, $headers);
        fclose($file);
    }

    // Append the new data to the Excel file
    $data = array($firstName, $lastName, $email, $message);
    $file = fopen($excelFile, 'a');
    fputcsv($file, $data);
    fclose($file);

    echo "Data has been successfully submitted!";
} else {
    echo "Invalid request method!";
}
?>
