<?php
$baseDir = __DIR__;
$jsPath = 'includes/script.js';
?>
</div>
<div class="footer-container">
    <footer>
        <div class="row">
            <div class="col-2">
                <h5>Sections</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted">Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted">Our Products</a>
                    </li>
                </ul>
            </div>
            <div class="col-4"></div>
            <div class="col-4 offset-1">
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex w-100 gap-2">
                        <input
                            id="newsletter1"
                            type="text"
                            class="form-control"
                            placeholder="Email address"
                        />
                        <button class="btn btn-outline-danger" type="button">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>

        </div>
        <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>© 2024 Santa Needs, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a></li>
                <li class="ms-3"><a class="link-dark" href="#">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg>
                    </a></li>
                <li class="ms-3"><a class="link-dark" href="#">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a></li>
            </ul>
        </div>
    </footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
></script>

<script src="<?php echo $jsPath; ?>"></script>
</body>
</html>
