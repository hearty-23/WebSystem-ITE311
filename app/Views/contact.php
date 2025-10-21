<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        nav {
            background-color: #f8f9fa;
            padding: 1rem;
            margin-bottom: 2rem;
        }
        nav a {
            margin-right: 1rem;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <nav>
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('about') ?>">About</a>
        <a href="<?= base_url('contact') ?>">Contact</a>
    </nav>
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with us using the contact information below.</p>
    </div>
</body>
</html>