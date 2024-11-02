<style>
    .modal .modal-header {
        background-color: var(--secondary-color);

    }

    .modal .modal-body {
        background-color: var(--secondary-color);
    }

    .modal .modal-footer {
        background-color: var(--secondary-color);

    }

    .modal .modal-content {
        background-color: var(--secondary-color);
        z-index: 9999;
    }

    .error-message {
        color: red;
        font-size: 0.875em;
        margin-top: 0.25rem;
    }
</style>
</head>

<body>
    <!-- Modal -->
    <section>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="modalForm" method="POST">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalLabel">Request A Quote</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12 mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Name*">
                                        <div id="name-error" class="error-message"></div>
                                        <!-- Error message for Name -->
                                    </div>
                                    <div class="col-6">
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" id="number" name="phone" class="form-control"
                                            placeholder="Number*">
                                        <div id="number-error" class="error-message"></div>
                                        <!-- Error message for Number -->
                                    </div>
                                    <div class="col-6">
                                        <input type="text" id="address" name="address" class="form-control"
                                            placeholder="Address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-2">
                                <div class="">
                                    <select name="service" class="form-control" name="service">
                                        <option selected>Choose Service</option>
                                        <option value="Website Development">Website Development</option>
                                        <option value="SEO Services">SEO Services</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                        <option value="Mobile Application Development">Mobile Application Development
                                        </option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="E-commerce Development">E-commerce Development</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 py-3">
                                <textarea class="form-control" id="message" name="message" placeholder="Message"
                                    rows="2"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="send" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================= -->
    <?php include 'mail.php'; ?>
    <!-- ============================================================= -->


    <script>

        document.getElementById('modalForm').addEventListener('submit', function (event) {
            let isValid = true;

            // Clear previous error messages
            document.getElementById('name-error').innerText = '';
            document.getElementById('number-error').innerText = '';

            // Get input values
            const name = document.getElementById('name').value.trim();
            const number = document.getElementById('number').value.trim();

            // Name validation
            if (name === '') {
                isValid = false;
                document.getElementById('name-error').innerText = 'Please enter your name.';
            }

            // Number validation
            const numberPattern = /^[0-9]{10}$/;
            if (!numberPattern.test(number)) {
                isValid = false;
                document.getElementById('number-error').innerText = 'Please enter a valid 10-digit phone number.';
            }

            // If any validation fails, prevent form submission
            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>