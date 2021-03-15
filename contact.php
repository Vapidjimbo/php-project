<!--Include Head-->
<?php include './partials/head.php';?>
<body id="account">
    <!--Include Header-->
    <?php include './partials/header.php';?>
    <main>
        <!--
            Form that sends user input to post.php
        -->
        <section id="accountForm">
            <h2>Create Account</h2>
            <form action="post.php" method="post">
              <ul>
                <li>
                    <label>First Name:</label>
                    <input name="firstName" type="text">
                </li>
                <li>
                    <label>Last Name:</label>
                    <input name="lastName" type="text">
                </li>
                <li>
                    <label>Email:</label>
                    <input name="email" type="email">
                </li>
                <li>
                    <label>Message:</label>
                    <textarea name="message" rows="4" cols="20"></textarea>
                </li>
                <br>
                <br>
                <li>
                    <input type="submit">
                </li>
              </ul>
            </form>
        </section>
    </main>
    <!--Include Footer-->
    <?php include './partials/footer.php';?>
</body>
</html>