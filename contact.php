<?php include 'header.php'; ?>

<body>
    <!--main page and navigation-->
    <section class="contact-form">
        <?php
        include 'contact_include.php'; #site keys & code here
        $toAddress = "veronika.pshenytska@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Veronika Pshenytska"; //place your client's name here
        $website = "Contact Form Test";  //place NAME of your client's websites
        echo loadContact('multiple.php'); #demonstrates multiple form elements
        ?>
    </section>
</body>
<?php include 'footer.php'; ?>