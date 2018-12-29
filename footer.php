<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="<?php echo WP_THEME_URL; ?>/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script type="text/javascript">var GETSOCIAL_ID = "9cddfa";var GETSOCIAL_LANG = "en"; (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = '//api.at.getsocial.io/widget/v1/gs_async.js?id='+GETSOCIAL_ID; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();</script>
  <script>
	hashtag_regexp = /#([a-zA-Z0-9]+)/g
    function linkHashtags(text) {
        return text.replace(
            hashtag_regexp,
            '<a class="hashtag" href="https://twitter.com/search?q=$1" target="_blank">#$1</a>'
        )
    } 
	$(document).ready(function(){
      $('p').each(function() {
          $(this).html(linkHashtags($(this).html()));
      })
    })
</script>
<?php wp_footer(); ?>
</body>
</html>