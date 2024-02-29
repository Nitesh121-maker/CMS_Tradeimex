<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Registration</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('https://source.unsplash.com/random');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .registration-container {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error-message {
        color: red;
        margin-top: 10px;
    }

    .otp-button {
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 15px;
        cursor: pointer;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
<div class="registration-container">
    <h2>Admin Registration</h2>
    <form id="registrationForm" action="">
        <input type="text" name="username" placeholder="Username">
        <input type="password" id="password" name="password" placeholder="Password">
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
        <input type="email" name="email" placeholder="Email">
        <button type="button" id="otpButton" class="otp-button">Get OTP</button>
        <input type="number" name="otp" placeholder="OTP">
        <input type="submit" value="Register">
    </form>
    <div id="errorMessage" class="error-message"></div>
</div>
<script>
    const registrationForm = document.getElementById('registrationForm');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');
    const otpButton = document.getElementById('otpButton');
    const errorMessage = document.getElementById('errorMessage');

    registrationForm.addEventListener('submit', function(event) {
        if (passwordInput.value !== confirmPasswordInput.value) {
            errorMessage.textContent = "Passwords do not match!";
            event.preventDefault();
        }
    });

    otpButton.addEventListener('click', function() {
        if (passwordInput.value !== confirmPasswordInput.value) {
            errorMessage.textContent = "Passwords do not match!";
        } else {
            errorMessage.textContent = "";
            // Code to send OTP request
        }
    });
    function togglePasswordVisibility(inputId) {
        const input = document.getElementById(inputId);
        const icon = input.nextElementSibling;
        if (input.type === "password") {
            input.type = "text";
            icon.textContent = "&#x1f440;";
        } else {
            input.type = "password";
            icon.textContent = "&#x1f441;";
        }
    }
</script>
</body>
</html>
