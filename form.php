<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sapphire Online</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <!-- Include header and navigation from index.html -->
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
        
        <!-- Navigation -->
        <nav>
            <div class="container">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="mens.html">Men</a></li>
                    <li><a href="womens.html">Women</a></li>
                    <li><a href="beauty.html">Beauty</a></li>
                    <li><a href="sale.html">Sale</a></li>
                    <li><a href="about.html">About Us</a></li>
                </ul>
            </div>
        </nav>
        <?php include 'header.html'; ?>
        
        <section class="form-section">
            <div class="container">
                <h2>Contact Us</h2>
                <div class="form-container">
                    <form action="form.php" method="post">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="order">Order Inquiry</option>
                                <option value="return">Return/Exchange</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <!-- Calculation Field -->
                        <div class="form-group">
                            <label for="quantity">Quantity (for price calculation):</label>
                            <input type="number" id="quantity" name="quantity" min="1" value="1" onchange="calculateTotal()">
                        </div>
                        <div class="form-group">
                            <label>Estimated Total (PKR):</label>
                            <input type="text" id="total" name="total" readonly>
                        </div>
                        
                        <button type="submit" name="submit">Submit</button>
                    </form>
                    
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                        $quantity = $_POST['quantity'];
                        $total = $_POST['total'];
                        
                        // Simple form processing
                        echo "<div class='form-result'>";
                        echo "<h3>Thank You, $name!</h3>";
                        echo "<p>We have received your message regarding '$subject'.</p>";
                        echo "<p>For $quantity items, your estimated total is PKR $total.</p>";
                        echo "<p>We'll contact you at $email soon.</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </section>
        
        <!-- Include footer from index.html -->
                <footer>
            <div class="container">
                <div class="footer-columns">
                    <div class="footer-col">
                        <h3>Customer Service</h3>
                        <ul>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Shipping & Returns</a></li>
                            <li><a href="#">Size Guide</a></li>
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
        <?php include 'footer.html'; ?>
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