<footer>
    <div class="footer-top">
        <div class="social-links">
            <a href="https://twitter.com/" rel="noopener noreferrer" target="_blank">Twitter</a>
            <a href="" rel="noopener noreferrer" target="_blank"><i class="mdi mdi-facebook-box"></i>Facebook</a>
            <a href="" rel="noopener noreferrer" target="_blank">Youtube</a>
        </div>
        <div class="footer-scroll-to-top">
            <a href="#top">
           To top <i class="mdi mdi-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="about" id="about">
            <h2>About</h2>
            <p>To be filled</p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-latest.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/featherlight/1.7.8/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
<script defer src="build/js/main.min.js"></script>
<?php if ($pageType == "selection"): ?>
    <script defer src="assets/js/selection.js"></script>
<?php elseif ($pageType == "home"): ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<?php endif ?>
</body>
</html>
