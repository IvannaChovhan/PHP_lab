<footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3 logo_footer">
                    <img src="media/logo_image.jpg" class="logo_image">
                    <div class="footer_icons">
                        <a href="#"><img src="media/instagram.svg" class="icon"></a>
                        <a href="#"><img src="media/facebook.svg" class="icon"></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <ul>
                        <li><a href="?page=index">ГОЛОВНА</a></li>
                        <li><a href="#">ПРО НАС</a></li>
                        <li><a href="#">МЕНЮ</a></li>
                        <li><a href="#">НАПОЇ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <ul>
                        <li><a href="#">ДЕСЕРТИ</a></li>
                        <li><a href="#">САЛАТИ</a></li>
                        <li><a href="#">ОСНОВНІ СТРАВИ</a></li>
                        <li><a href="?page=contacts">КОНТАКТИ</a></li>
                    </ul>
                </div>
                <div class="col-md-4 feedback">
                    <span>Графік роботи: <br>пн-нд 10:00 - 22:00<br>вул. Нижній Вал, 35</span>
                    <div>
                        <a href="?page=contacts">
                            <img src="media/arrow_right.svg">
                            <span>Залишити відгук</span>
                        </a>
                    </div>
                    <span class="copyright"> © 2020 - Call me Cacao</span>
                </div>
            </div>
        </div>
    </footer>

    <script type='text/javascript'>
document.getElementById('nav_icon').onclick = function(){

    styles = getComputedStyle(document.getElementById('navigation'));
    console.log();
    if (styles['display'] == "none"){
        document.getElementById('navigation').style.display = "flex";
    }
    else
        document.getElementById('navigation').style.display="none";


}
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type='text/javascript'>
    $(function() {
        $('a[href*=#]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
            });
    });
    </script>
</body>
</html>
