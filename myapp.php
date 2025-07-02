<?php
// This is the main PHP file for the "ALAM MO AHH!" application.
// Save this file as 'index.php' in your web server's document root (e.g., htdocs for Apache, www for Nginx).

// Initialize a variable to store the greeting message.
$greetingMessage = "";

// Check if the form has been submitted using the POST method.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'userName' field is set and not empty.
    if (isset($_POST["userName"]) && !empty(trim($_POST["userName"]))) {
        // Sanitize the user input to prevent XSS attacks.
        $userName = htmlspecialchars(trim($_POST["userName"]));
        // Construct the greeting message.
        $greetingMessage = "Hello, " . $userName . "! Alam mo ahh!";
    } else {
        // Message if the name field is empty.
        $greetingMessage = "Please enter your name to proceed. Alam mo ahh!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALAM MO AHH!</title>
    <!-- Load Tailwind CSS for easy styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for the Inter font and overall layout */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 2.5rem; /* Equivalent to p-10 */
            border-radius: 1rem; /* Equivalent to rounded-2xl */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); /* Equivalent to shadow-xl */
            text-align: center;
            max-width: 90%; /* Responsive width */
            width: 500px; /* Max width for larger screens */
        }
        .input-field {
            width: 100%;
            padding: 0.75rem 1rem; /* Equivalent to py-3 px-4 */
            margin-bottom: 1rem; /* Equivalent to mb-4 */
            border: 1px solid #d1d5db; /* Equivalent to border border-gray-300 */
            border-radius: 0.5rem; /* Equivalent to rounded-lg */
            font-size: 1rem; /* Equivalent to text-base */
            transition: border-color 0.2s ease-in-out;
        }
        .input-field:focus {
            outline: none;
            border-color: #3b82f6; /* Equivalent to focus:ring-2 focus:ring-blue-500 focus:border-blue-500 */
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25);
        }
        .submit-button {
            background-color: #4f46e5; /* Equivalent to bg-indigo-600 */
            color: #ffffff; /* Equivalent to text-white */
            font-weight: 600; /* Equivalent to font-semibold */
            padding: 0.75rem 1.5rem; /* Equivalent to py-3 px-6 */
            border-radius: 0.75rem; /* Equivalent to rounded-xl */
            transition: background-color 0.2s ease-in-out, transform 0.1s ease-in-out;
            cursor: pointer;
            border: none;
            width: 100%;
        }
        .submit-button:hover {
            background-color: #4338ca; /* Equivalent to hover:bg-indigo-700 */
            transform: translateY(-2px);
        }
        .submit-button:active {
            transform: translateY(0);
        }
        .message {
            margin-top: 1.5rem; /* Equivalent to mt-6 */
            font-size: 1.25rem; /* Equivalent to text-xl */
            font-weight: 500; /* Equivalent to font-medium */
            color: #1f2937; /* Equivalent to text-gray-800 */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-4xl font-bold text-indigo-700 mb-6 rounded-lg p-2 shadow-md">ALAM MO AHH!</h1>

        <form method="POST" action="" class="space-y-4">
            <label for="userName" class="block text-gray-700 text-lg font-medium mb-2">
                What's your name?
            </label>
            <input
                type="text"
                id="userName"
                name="userName"
                placeholder="Enter your name here..."
                class="input-field"
                required
            >
            <button type="submit" class="submit-button">
                Say "Alam Mo Ahh!"
            </button>
        </form>

        <?php
        // Display the greeting message if it's not empty.
        if (!empty($greetingMessage)) {
            echo '<p class="message">' . $greetingMessage . '</p>';
        }
        ?>
    </div>
</body>
</html>
