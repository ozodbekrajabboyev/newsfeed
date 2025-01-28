<footer id="footer">
    <div class="footer_top">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_widget wow fadeInLeftBig">
                    <h2>Flickr Images</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_widget wow fadeInDown">
                    <h2>Tag</h2>
                    <ul class="tag_nav">
                        @foreach($categories as $category)
                            <li><a href="#">{{ $category }}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_widget wow fadeInRightBig">
                    <h2>Contact</h2>
                    <p>If you have any questions, concerns, or feedback, feel free to reach out to us. We're here to help!

                        You can contact us through the following methods, and we’ll be happy to assist you with any inquiries. Whether you prefer to call, send a fax, or visit us in person, we’re always ready to help.</p>
                    <address>
                        Perfect News,<br>
                        Usta Shirin, 74, Yunusobod, Tashkent, Uzbekistan <br>
                        Phone Num: +998-20-006-7471 <br>
                        Fax: 123-546-567
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <p class="copyright">Copyright &copy; 2025 <a href="/">NewsFeed</a></p>
        <p class="developer">Developed By Ozodbek Rajabboyev</p>
    </div>
</footer>

</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.li-scroller.1.0.js"></script>
<script src="assets/js/jquery.newsTicker.min.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
