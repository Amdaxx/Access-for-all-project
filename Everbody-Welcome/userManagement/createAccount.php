<link rel="stylesheet" href="../css/userManagementStyle.css">
<?php include '../public/publicHeader.php';?>
<body>
    <div class="signup-container">
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form method="post">
        <label for="companyname">Company Name</label>
        <input type="text" id="companyname" placeholder="Enter your company name" required>
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter your email address" required>
        <label for="address">Address</label>
        <input type="text" id="address" placeholder="Enter your address" required>
        <label for="postcode">Postcode</label>
        <input type="text" id="postcode" placeholder="Enter your postcode" required>
        <label for="phone">Phone</label>
        <input type="text" id="phone" placeholder="Enter your phone number" required>
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter your password" required>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" placeholder="Confirm your password" required>
        <button type="submit">Sign Up</button>
        </form>
        <p style="color:black">Already have an account? <a style="color:black" href="../userManagement/userlogIn.php">Log in</a></p>
    </div>
    </div>
</body>    
<?php include '../public/footer.php';?>