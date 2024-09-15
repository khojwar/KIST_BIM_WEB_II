<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        main {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0 0 10px;
            font-size: 24px;
            color: #333;
        }

        header p {
            margin: 0 0 20px;
            font-size: 16px;
            color: #666;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"].error {
            border-color: #e74c3c;
        }

        small {
            color: #e74c3c;
            font-size: 12px;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #5cb85c;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }

        section {
            text-align: center;
        }

        section h2 {
            color: #5cb85c;
            font-size: 22px;
        }

        section p, section ol {
            color: #333;
            font-size: 16px;
        }

        section ol {
            padding-left: 20px;
        }

        section li {
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <main>
        <?php
        $errors = [];
        $inputs = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // sanitize and validate name
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $inputs['name'] = $name;

            if ($name) {
                $name = trim($name);
                if ($name === '') {
                    $errors['name'] = 'Please enter your name';
                }
            } else {
                $errors['name'] = 'Please enter your name';
            }

            // sanitize & validate email
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $inputs['email'] = $email;
            if ($email) {
                // validate email
                $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                if ($email === false) {
                    $errors['email'] = 'Please enter a valid email';
                }
            } else {
                $errors['email'] = 'Please enter your email';
            }

            if (count($errors) === 0) {
                echo '<section>
                    <h2>Thanks ' . htmlspecialchars($name) . ' for your subscription!</h2>
                    <p>Please follow the steps below to complete your subscription:</p>
                    <ol>
                        <li>Check your email (' . htmlspecialchars($email) . ') - Find the message sent from webmaster@phptutorial.net</li>
                        <li>Click to confirm - Click on the link in the email to confirm your subscription.</li>
                    </ol>
                </section>';
            }
        }
        ?>

        <?php if (count($errors) > 0 || $_SERVER['REQUEST_METHOD'] !== 'POST'): ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <header>
                <h1>Get FREE Updates</h1>
                <p>Join us for FREE to get email updates!</p>
            </header>
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Full Name" value="<?php echo $inputs['name'] ?? '' ?>" class="<?php echo isset($errors['name']) ? 'error' : ''  ?>">
                <small><?php echo $errors['name'] ?? '' ?></small>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Email Address" value="<?php echo $inputs['email'] ?? '' ?>" class="<?php echo isset($errors['email']) ? 'error' : '' ?>">
                <small><?php echo $errors['email'] ?? '' ?></small>
            </div>
            <button type="submit">Subscribe</button>
        </form>
        <?php endif; ?>
    </main>
</body>
</html>
