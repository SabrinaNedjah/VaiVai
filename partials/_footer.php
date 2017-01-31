
   <a class="twitter-share-button"
    	 href="https://twitter.com/intent/tweet?via=vaivaiconnexion&text=Hello%20world"
    	 data-size="large">
    	Tweet</a>

    <div id="fb-root"></div>


    <!-- your share button code -->
    <div class="fb-share-button" data-href="https://www.facebook.com/vaivaifrance/?fref=ts" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fvaivaifrance%2F%3Ffref%3Dts&amp;src=sdkpreparse">Partager</a></div>

    <script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="scripts/vendor/slick.min.js"></script>
    <script src="scripts/vendor/foundation.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.monSlider').slick({
        arrow: false,
    		dots: true,
    		autoplay: true
      });
    });
    </script>
  </body>
</html>
