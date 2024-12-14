<?php
// Start the session
session_start();

// Check if a user session exists
if (isset($_SESSION)) {
    // Destroy the session
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session

    // Send a response to confirm logout
    echo json_encode([
        "status" => "success",
        "message" => "You have been logged out successfully."
    ]);
    header("location: ../login.php");
    // If no session exists, send an appropriate message
    echo json_encode([
        "status" => "error",
        "message" => "No active session found."
    ]);
}
