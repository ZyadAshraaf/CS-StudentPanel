<?php include '../Layout/header.php' ?>
<?php include '../Layout/nav.php' ?>
<?php include '../Layout/conn.php' ?>

<!-- ========start FAQs===================== -->
<div class="faq_cont">

    <div class="wrapper bg-white rounded shadow">
        <div class="h2 text-center fw-bold">Common Question & Answer</div>
        <div class="h3 text-primary text-center">How can we help you?</div>
        <div class="d-flex justify-content-center">
            <div class="search w-75 d-flex align-items-center"> <span class="fas fa-search text-dark"></span> <input
                    type="text" class="form-control" placeholder="Describe your issue"> </div>
        </div>
        <div class="accordion accordion-flush border-top border-start border-end" id="myAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0"
                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                        aria-expanded="false" aria-controls="flush-collapseOne"> Popular on BBBootstrap </button> </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse border-0"
                    aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled m-0">
                            <li><a href="#">Adding Snippets</a></li>
                            <li><a href="#">Accessing Color Palette</a></li>
                            <li><a href="#">Searching Snippets</a></li>
                            <li><a href="#">How to use online editor tools</a></li>
                            <li><a href="#">Upgrading Pro</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0"
                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                        aria-expanded="false" aria-controls="flush-collapseTwo"> Know About Pro </button> </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse border-0"
                    aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled m-0">
                            <li><a href="#">How to upgrade to pro</a></li>
                            <li><a href="#">Benifits of Pro</a></li>
                            <li><a href="#">Payment methods to get Pro</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0"
                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                        aria-expanded="false" aria-controls="flush-collapseThree"> BBBootstrap Tools </button> </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse border-0"
                    aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled m-0">
                            <li><a href="#">How to use Pro Online Editor</a></li>
                            <li><a href="#">Know Gradient generator</a></li>
                            <li><a href="#">Using Beautifier</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0"
                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                        aria-expanded="false" aria-controls="flush-collapseFour"> Download Snippets </button> </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse border-0"
                    aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled m-0">
                            <li><a href="#">How to download snippets</a></li>
                            <li><a href="#">Donate to Author</a></li>
                            <li><a href="#">Donation methods</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0"
                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                        aria-expanded="false" aria-controls="flush-collapseFive"> BBBootstrap Icons </button> </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse border-0"
                    aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled m-0">
                            <li><a href="#">Adding icons to snippets</a></li>
                            <li><a href="#">Fontawesome Icons</a></li>
                            <li><a href="#">Material Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0"
                        type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                        aria-expanded="false" aria-controls="flush-collapseSix"> Policy & copyrights </button> </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse border-0"
                    aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                    <div class="accordion-body p-0">
                        <ul class="list-unstyled m-0">
                            <li><a href="#">BBBootstrap Guidelines</a></li>
                            <li><a href="#">BBBootstrap Policies</a></li>
                            <li><a href="#">Copyright and right management</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Vendor JS Files -->

<?php include '../Layout/script.php' ?>