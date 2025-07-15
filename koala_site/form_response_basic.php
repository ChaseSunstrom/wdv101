<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Form response for Koala contact form">
    <meta name="keywords" content="koala contact, form response">
    <title>Thank You | Koala Bear National Information Center</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header id="top">
        <h1>Koala Bear National Information Center</h1>
        <img src="images/koala_banner.jpg" alt="Koala Bear Banner">
    </header>

    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="adopt.html">Adopt</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h1>Thank You!</h1>
            <p>Dear <?php echo $name; ?>,</p>
            <p>Thank you for contacting us about "<?php echo $subject; ?>". We will get back to you at <?php echo $email; ?> as soon as possible.</p>
            <p><strong>Your Message:</strong></p>
            <blockquote>
                <?php echo nl2br($message); ?>
            </blockquote>
            <p><a href="contact.html">Return to Contact Page</a></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Koala Bear National Information Center. All rights reserved.</p>
        <img src="images/koala_logo.svg" alt="Australian Koala Foundation Logo">
        <p><a href="#top">Back to Top</a></p>
    </footer>
</body>
</html> 