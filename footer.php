<div class="footer">
      <strong>© 2020</strong>
      <div class="right">
      	<?php if(!is_front_page() || !is_home()){
       		echo "<a href='/'>Главная</a> /";
    	}?>
    	<?php if(!is_page('archive')){
    		echo "<a href='/archive/'>Архив</a>";
    	} else {
    		echo "<a href='", bloginfo('rss2_url'), "'>RSS</a>";
    	}?>
      </div>
</div>
</body>

</html>