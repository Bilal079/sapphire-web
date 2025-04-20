<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sapphire Online</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background: #f9f9f9;
        color: #333;
    }

    .wrapper {
        max-width: 1200px;
        margin: 0 auto;
    }

    .container {
        width: 90%;
        margin: auto;
    }

    header {
        background: white;
        color: white;
        padding: 15px 0;
    }

    .logo img {
        height: 50px;
    }

    .search input[type="text"] {
        padding: 10px;
        width: 200px;
        border: none;
        border-radius: 4px;
    }

    .search button {
        padding: 10px 15px;
        background: #0072bc;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .search, .cart {
        display: inline-block;
        vertical-align: middle;
        margin-left: 30px;
    }

    nav {
        background: black;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 10px 0;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    nav li {
        margin: 0 15px;
    }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    nav a:hover {
        text-decoration: underline;
    }

    .form-section {
        padding: 40px 0;
        background: white;
        margin-top: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .form-section h2 {
        text-align: center;
        color: #0b1f38;
        margin-bottom: 30px;
    }

    .form-container {
        max-width: 600px;
        margin: auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="number"],
    input[readonly],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    textarea {
        resize: vertical;
    }

    button[type="submit"] {
        padding: 12px 25px;
        background-color: #0b1f38;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    button[type="submit"]:hover {
        background-color: #0072bc;
    }

    .form-result {
        margin-top: 30px;
        background-color: #e0f7fa;
        border-left: 6px solid #0072bc;
        padding: 20px;
        border-radius: 6px;
    }

    footer {
        background: #0b1f38;
        color: white;
        padding: 40px 0 20px;
        margin-top: 40px;
    }

    .footer-columns {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .footer-col {
        flex: 1 1 30%;
        margin-bottom: 20px;
    }

    .footer-col h3 {
        border-bottom: 2px solid #0072bc;
        padding-bottom: 10px;
        margin-bottom: 15px;
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
    }

    .footer-col ul li {
        margin-bottom: 10px;
    }

    .footer-col a {
        color: #ccc;
        text-decoration: none;
    }

    .footer-col a:hover {
        text-decoration: underline;
    }

    .social-icons img {
        height: 30px;
        margin-right: 10px;
    }

    .copyright {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        color: #aaa;
    }

    form input[type="email"] {
        padding: 8px;
        width: 70%;
        margin-right: 10px;
    }

    form button[type="submit"] {
        padding: 8px 15px;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        nav ul {
            flex-direction: column;
            align-items: center;
        }

        .footer-columns {
            flex-direction: column;
            text-align: center;
        }

        .search, .cart {
            display: block;
            margin: 10px 0;
        }
    }
</style>

</head>
<body>
    <div class="wrapper">
        <!-- Header and navigation directly included (removed the include statement) -->
        <header>
            <div class="container">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="Sapphire"></a>
                </div>
                <div class="search">
                    <input type="text" placeholder="Search for products...">
                    <button>Search</button>
                </div>
                <div class="cart">
                    <a href="#">Cart (0)</a>
                </div>
            </div>
        </header>
        
        <nav>
            <div class="container">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="mens.html">Men</a></li>
                    <li><a href="womens.html">Women</a></li>
                    <li><a href="beauty.html">Beauty</a></li>
                    <li><a href="sale.html">Accessories</a></li>
                    <li><a href="about.html">About Us</a></li>
                </ul>
            </div>
        </nav>
        
        <section class="form-section">
            <div class="container">
                <h2>Contact Us</h2>
                <div class="form-container">
                    <form action="form.php" method="post">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="order" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'order') ? 'selected' : ''; ?>>Order Inquiry</option>
                                <option value="return" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'return') ? 'selected' : ''; ?>>Return/Exchange</option>
                                <option value="feedback" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'feedback') ? 'selected' : ''; ?>>Feedback</option>
                                <option value="other" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'other') ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="5" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                        </div>
                        
                        <!-- Calculation Field -->
                        <div class="form-group">
                            <label for="quantity">Quantity (for price calculation):</label>
                            <input type="number" id="quantity" name="quantity" min="1" value="<?php echo isset($_POST['quantity']) ? htmlspecialchars($_POST['quantity']) : '1'; ?>" onchange="calculateTotal()">
                        </div>
                        <div class="form-group">
                            <label>Estimated Total (PKR):</label>
                            <input type="text" id="total" name="total" readonly value="<?php echo isset($_POST['total']) ? htmlspecialchars($_POST['total']) : '2,499'; ?>">
                        </div>
                        
                        <button type="submit" name="submit">Submit</button>
                    </form>
                    
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                        $name = isset($_POST['name']) ? $_POST['name'] : '';
                        $email = isset($_POST['email']) ? $_POST['email'] : '';
                        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                        $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
                        $message = isset($_POST['message']) ? $_POST['message'] : '';
                        $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1;
                        $total = isset($_POST['total']) ? $_POST['total'] : '0';
                        
                        // Simple form processing
                        echo "<div class='form-result'>";
                        echo "<h3>Thank You, " . htmlspecialchars($name) . "!</h3>";
                        echo "<p>We have received your message regarding '" . htmlspecialchars($subject) . "'.</p>";
                        echo "<p>For " . htmlspecialchars($quantity) . " items, your estimated total is PKR " . htmlspecialchars($total) . ".</p>";
                        echo "<p>We'll contact you at " . htmlspecialchars($email) . " soon.</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </section>
        
        <!-- Footer directly included (removed the include statement) -->
        <footer>
            <div class="container">
                <div class="footer-columns">
                    <div class="footer-col">
                        <h3>Customer Service</h3>
                        <ul>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="grading.html">Grading</a></li>
                            <li><a href="#">Shipping & Returns</a></li>
                            <li><a href="query.html">Query</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h3>About Sapphire</h3>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="terms.html">Terms &amp; Conditions</a></li>
                            <li><a href="store-locator.html">Store Locator</a></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h3>Connect With Us</h3>
                        <div class="social-icons">
                            <a href="#"><img src="images/facebook-icon.png" alt="Facebook"></a>
                            <a href="#"><img src="images/instagram-icon.png" alt="Instagram"></a>
                            <a href="#"><img src="images/twitter-icon.png" alt="Twitter"></a>
                        </div>
                        <p>Subscribe to our newsletter</p>
                        <form>
                            <input type="email" placeholder="Your email address">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="copyright">
                    <p>&copy; 2023 Sapphire Retail Limited. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    
    <script>
        function calculateTotal() {
            const quantity = document.getElementById('quantity').value;
            const unitPrice = 2499; // Sample unit price
            const total = quantity * unitPrice;
            document.getElementById('total').value = total.toLocaleString();
        }
        
        // Calculate on page load
        window.onload = calculateTotal;
    </script>
</body>
</html>