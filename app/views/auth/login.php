<?php
// views/auth/login.php

// Set the value of $authenticated based on user authentication status
$authenticated = false; // Example: User is not authenticated

// Start output buffering
ob_start();
?>

<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-semibold mb-4">Login</h1>
    <form action="/login" method="POST">
        <div class="mb-4">
            <label class="block text-gray-600">Email:</label>
            <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg">
        </div>
        <div class="mb-4">
            <label class="block text-gray-600">Password:</label>
            <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg">
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Login</button>
    </form>
</div>

<?php
// Get the content from the output buffer and assign it to $content
$content = ob_get_clean();

// Include the layout with assigned variables
include '../layouts/app.php';
?>
