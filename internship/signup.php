<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Shop Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('image.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            max-width: 400px;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background: #007bff;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        .success-message {
            color: green;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form id="signup-form" action="signup2.php" method="post">
            <label for="name">name</label>
            <input type="text" id="name" name="name" required>
            <label for="email">email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">password</label>
            <input type="password" id="password" name="password" required>
            <label for="phone_number">phone_number</label>
            <input type="text" id="phone_number" name="phone_number">
            <label for="color">color</label>
            <input type="text" id="color" name="color">
            <label for="movie">movie</label>
            <input type="text" id="movie" name="movie">
            <label for="food">Favorite Food</label>
            <input type="text" id="food" name="food">
            <label for="sport">sport</label>
            <input type="text" id="sport" name="sport">
            <label for="activity"> activity</label>
            <input type="text" id="activity" name="activity">
            <input type="submit" value="Sign Up">
        </form>
        <div class="success-message" id="success-message" style="display: none;">
            Sign up successful! Thank you for joining Flying Wheel.
        </div>
    </div>

    <script>
        document.getElementById('signup-form').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('success-message').style.display = 'block';
            document.getElementById('signup-form').reset();
        });
    </script>
</body>
</html>
