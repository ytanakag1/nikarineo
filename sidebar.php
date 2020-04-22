<div class="side-nav">
	<ul>
	<?php dynamic_sidebar('side-1'); ?>
	<?php dynamic_sidebar('side-2'); ?>
	<?php dynamic_sidebar('side-3'); ?>
<?php dynamic_sidebar('post-under'); ?>
	
	</ul>
  <script>
  
  jQuery('#category-posts-3-internal li.cat-post-item:not(:last-child)').each(function(i,elem){
    let side_content_text = jQuery(elem).text();
    // console.log(i ,side_content_text);
    side_content_text = side_content_text.replace(' ',"\n")
    jQuery(elem).find('a').text(side_content_text);
    jQuery(elem).css('background-position-y','9px');

  });
  jQuery('.side-nav li li div').append('<i class="fa fa-chevron-right" aria-hidden="true"></i>');
  </script>
</div><!--  side-nav -->