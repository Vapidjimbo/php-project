<!--Include Head--> 
<?php include './partials/head.php';?>
<body>
    <!--Include Header-->
    <?php include './partials/header.php';?>
    <main>
        <!--
            Page displays input from contact form using $post variable to stor the input and echo to print it.
        -->
        <section>
            <h2>Message Sent!</h2>
            <h4>First Name:</h4>
            <p>
                <?php echo $_POST["firstName"]; ?>
            </p>
            <h4>Last Name:</h4>
            <p>
                <?php echo $_POST["lastName"]; ?>
            </p>
            <h4>Email:</h4>
            <p>
                <?php echo $_POST["email"]; ?>
            </p>
            <h4>Message:</h4>
            <p>
                <?php echo $_POST["message"]; ?>
            </p>
            <br>
            <p>The above information has been sent to us.  Thank you for your message, we will be in touch shortly.</p>
            <a href='contact.php'>Go Back</a>
        </section>
    </main>
    <!--Include Footer-->
    <?php include './partials/footer.php';?>
</body>
</html>