<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Sapphire Online</title>
</head>
<body>

<h1>Sapphire Online</h1>

<p>
    <a href="index.html">Home</a> | 
    <a href="products.html">Products</a> | 
    <a href="contact.html">Contact</a> | 
    <a href="about.html">About</a>
</p>

<h2>Contact Us</h2>

<form action="form.php" method="post">
    <p>
        <strong>Full Name:</strong><br>
        <input type="text" name="name" required>
    </p>
    
    <p>
        <strong>Email:</strong><br>
        <input type="email" name="email" required>
    </p>
    
    <p>
        <strong>Phone Number:</strong><br>
        <input type="tel" name="phone">
    </p>
    
    <p>
        <strong>Subject:</strong><br>
        <select name="subject" required>
            <option value="">Select a subject</option>
            <option value="order">Order Inquiry</option>
            <option value="return">Return/Exchange</option>
            <option value="feedback">Feedback</option>
            <option value="other">Other</option>
        </select>
    </p>
    
    <p>
        <strong>Message:</strong><br>
        <textarea name="message" rows="5" required></textarea>
    </p>
    
    <p>
        <strong>Quantity:</strong><br>
        <input type="number" name="quantity" min="1" value="1" onchange="calculateTotal()">
    </p>
    
    <p>
        <strong>Estimated Total (PKR):</strong><br>
        <input type="text" name="total" readonly value="2,499">
    </p>
    
    <p>
        <input type="submit" value="Submit">
    </p>
</form>

<h3>Our Information</h3>
<p><strong>Email:</strong> customercare@sapphireonline.pk</p>
<p><strong>Phone:</strong> +92 42 111 111 111</p>
<p><strong>Address:</strong> 123 Main Boulevard, Gulberg, Lahore, Pakistan</p>

<hr>

<p>© 2023 Sapphire Retail Limited. All Rights Reserved.</p>

</body>
</html>