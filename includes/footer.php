<footer>
    <div class="container">
        <div class="about" id="about">
            <h2>About</h2>
            <p>To be filled</p>
        </div>

        <div class="social">
            <p>Social</p>
            <a href="https://twitter.com/" rel="noopener noreferrer" target="_blank">Twitter</a>
            | <a href="" rel="noopener noreferrer" target="_blank">Blog</a>
            | <a href="" rel="noopener noreferrer" target="_blank">Facebook</a>
            <p>E-mail</p>
            <a href="mailto:EmailGoesHere@gmail.com">EmailGoesHere@gmail.com</a>
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
