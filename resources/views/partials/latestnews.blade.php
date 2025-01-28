<section id="newsSection">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="latest_newsarea"> <span>Latest News</span>
                <ul id="ticker01" class="news_sticker">
                    @foreach($news as $post)
                        <li><a href="#"><img src="{{ $post->photo_url }}" alt="">{{ \Str::limit($post->title, 50) }}</a></li>
                    @endforeach
                </ul>
                <div class="social_area">
                    <ul class="social_nav">
                        <li class="facebook"><a href="https://www.facebook.com/profile.php?id=100091802080307" ></a></li>
                        <li class="twitter"><a href="https://x.com/ozodbek56275" target="_blank"></a></li>
                        <li class="flickr"><a href="https://www.flickr.com/photos/202101906@N05/" target="_blank"></a></li>
                        <li class="pinterest"><a href="https://www.pinterest.com/rajabboyevozodbek/" target="_blank"></a></li>
                        <li class="googleplus"><a href="/"></a></li>
                        <li class="vimeo"><a href="https://vimeo.com/user233830339" target="_blank"></a></li>
                        <li class="youtube"><a href="https://www.youtube.com/@IM-TEK" target="_blank"></a></li>
                        <li class="mail"><a href="mailto:ozodbek2625@gmail.com" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
