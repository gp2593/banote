<?php
get_header(); ?>

<div id="content">

<div class="content-full">
<script>
  (function() {
    var cx = 'partner-pub-1030940667925294:9854282425';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
</div>
</div> <!-- #content -->
<div id="sidebar">
<?php
get_sidebar(); ?>
</div> <!-- #sidebar -->
<div class="dummy"></div>
<?php
get_footer(); ?>

