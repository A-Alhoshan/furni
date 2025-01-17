<?php  

  $pageTitle = "Contact Us";
  include 'init.php';

  include $includes . 'header.php';
  include $includes . 'navbar.php';

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
        .contact-form {
            background-color: #fff;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
        .contact-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }
        .contact-form label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }
        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #007BFF;
            outline: none;
        }
        .contact-form button {
            width: 100%;
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .contact-form button:hover {
            background-color: #0056b3;
        }
        footer {
            text-align: center;
            padding: 15px;
            background-color: #333;
            color: white;
            position: relative;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="" method="POST" enctype="text/plain">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

</body>
</html>
