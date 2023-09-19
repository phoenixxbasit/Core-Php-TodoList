<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task App</title>
    <!-- Include Tailwind CSS stylesheet -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">

    <!-- Navigation bar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-semibold">Task App</a>
            <?php if ($authenticated) { ?>
                <!-- If authenticated, show Sign Out button -->
                <a href="/sign-out" class="text-white">Sign Out</a>
            <?php } else { ?>
                <!-- If not authenticated, show Register and Sign In links -->
                <a href="/register" class="text-white">Register</a>
                <a href="/sign-in" class="text-white">Sign In</a>
            <?php } ?>
        </div>
    </nav>

    <!-- Page content -->
    <div class="container mx-auto p-4 mt-4">
        <?= $content; ?> <!-- This is where the page-specific content will be inserted -->
    </div>

    <!-- Footer -->
    <footer class="bg-black text-center p-4 text-white">
        &copy; <?= date('Y'); ?> Task App
    </footer>

</body>
</html>
