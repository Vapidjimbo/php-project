<!--Include Head, header, footer partials on each page.--> 
<!--Include Head--> 
<?php include './partials/head.php';?>
<body id="home">
    <!--Include Header-->
    <?php include './partials/header.php';?>
    <main>
        <!--
            printing products from variables/arrays from products.php using include and foreach loop.
        -->
        <section id="products">
            <h2>PNW Tours: Products & Services</h2>
            <?php include './partials/products.php'; ?>
        </section>
    </main>
    <!--Include Footer-->
    <?php include './partials/footer.php';?>
</body>
</html>