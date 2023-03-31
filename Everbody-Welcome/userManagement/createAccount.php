<link rel="stylesheet" href="../css/userManagementStyle.css">
<?php include '../public/publicHeader.php';

if (isset($_POST['submit'])){
    createUser($_POST['email'], $_POST['pwd'], $_POST['name'], $_POST['phone'], $_POST['postcode'], $_POST['address'],);
    }
    ?>
<body>
    <div class="signup-container">
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form method="post">
        <label for="companyname">Company Name</label>
        <input type="text" name="name" id="companyname" placeholder="Enter your company name" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email address" required>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter your address" required>
        <label for="postcode">Postcode</label>
        <input type="text" name="postcode" id="postcode" placeholder="Enter your postcode" required>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required>
        <label for="password">Password</label>
        <input type="password" name="pwd" id="password" placeholder="Enter your password" required>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" placeholder="Confirm your password" required>
        <button type="submit">Sign Up</button>
        </form>
        <p style="color:black">Already have an account? <a style="color:black" href="../userManagement/userlogIn.php">Log in</a></p>
    </div>
    </div>
</body>    
<?php include '../public/footer.php';?>