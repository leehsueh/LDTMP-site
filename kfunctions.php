<?php
  
   // 1.
   // Adsense shortcode
   // Usage: [adsense]
   $FUNCS->register_shortcode( 'adsense', 'adsense_handler' );
   function adsense_handler( $params, $content=null ){
      return '<script type="text/javascript"><!--
         google_ad_client = "pub-XXXXXXXXXXXXXXXX"; /* Put your own value here */
         google_ad_slot = "XXXXXXXXXX"; /* Put your own value here */
         google_ad_width = 468;
         google_ad_height = 60;
         //-->
      </script>
      <script type="text/javascript"
         src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
      </script>';
   }   

   // 2.
   // IFrame shortcode
   // Usage: [iframe src="http://www.somesite.com/" width="100" height="100" scrolling="yes" frameborder="1" marginheight="2"]
   $FUNCS->register_shortcode( 'iframe', 'iframe_handler' );
   function iframe_handler( $params, $content=null ){
      global $FUNCS;

      extract( $FUNCS->get_named_vars(array( 
         'src' => '',
         'width' => '100%',
         'height' => '500',         
         'scrolling' => 'no',
         'frameborder' => '0',
         'marginheight' => '0'
      ), $params) );

      $html =<<<EOS
      <iframe src="$src" title="" width="$width" height="$height" scrolling="$scrolling" frameborder="$frameborder" marginheight="$marginheight">
         <a href="$src" target="_blank">$src</a>
      </iframe>
EOS;
       return $html;
   }

   // 3.
   // Google map shortcode
   // Usage: [googlemap src="http://maps.google.com/?ll=23.250652,77.402072&spn=0.019912,0.038581&z=15"]
   $FUNCS->register_shortcode( 'googlemap', 'googlemap_handler' );
   function googlemap_handler( $params, $content=null ){
      global $FUNCS;

      extract( $FUNCS->get_named_vars(array( 
         'src' => '',
         'width' => '425',
         'height' => '350'         
      ), $params) );

      return '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'&output=embed"></iframe>';
   }
   
   // 4.
   // YouTube Shortcode
   // Usage:   [youtube video="http://www.youtube.com/watch?v=5PsnxDQvQpw"]
   //          [youtube http://www.youtube.com/watch?v=1aBSPn2P9bg]
   //          [youtube 1aBSPn2P9bg]
   $FUNCS->register_shortcode( 'youtube', 'youtube_handler' );
   function youtube_handler( $params, $content=null ){
      global $FUNCS;
      
      extract( $FUNCS->get_named_vars(array( 
         'video' => 'http://',
         'width' => '475',
         'height' => '350',
      ), $params) );

      // Video parameter is link or ID?
      if ( substr($video, 0, 7) == 'http://' ){
         /*
         Example links that can be handled:
         http://www.youtube.com/watch?v=5PsnxDQvQpw
         http://youtube.com/watch?v=5PsnxDQvQpw
         http://youtube.com/watch?gl=US&hl=en-US&v=5PsnxDQvQpw
         http://youtube.com/v/5PsnxDQvQpw&rel=1
         */
         if( !preg_match('#http://(?:[^\.]+\.)?youtube.com.*(?:\?v=|&v=|/v/)([\w_-]+)#i', $video, $matches) ) return;
         $video = $matches[1];
      }

      // Sanitize parameters
      $video = htmlspecialchars( $video, ENT_QUOTES );
      $width = (int)$width;
      $height = (int)$height;
      
      // Output HTML
      $html =<<<EOS
      <object width="$width" height="$height">
         <param value="http://www.youtube.com/v/$video?version=3&amp;rel=1&amp;fs=1&amp;showsearch=0&amp;showinfo=1&amp;iv_load_policy=1" name="movie"/> 
         <param value="true" name="allowfullscreen"/> <param value="opaque" name="wmode"/> 
         <embed width="$width" height="$height" wmode="opaque" allowfullscreen="true" type="application/x-shockwave-flash" src="http://www.youtube.com/v/$video?version=3&amp;rel=1&amp;fs=1&amp;showsearch=0&amp;showinfo=1&amp;iv_load_policy=1"/> 
      </object>
EOS;
      return $html;
   }

   // 5.
   // PayPal Donate Button shortcode
   // Usage:   [donate]
   //          [donate]Donate Now[/donate]
   //          [donate account="you@yoursite.com" onHover="Thanks" for="Title"]
   //          [donate account="you@yoursite.com" onHover="Thanks" for="Title"]Donate Now[/donate]
   $FUNCS->register_shortcode( 'donate', 'donate_handler' );
   function donate_handler( $params, $content=null ){
      global $FUNCS, $CTX;

      extract( $FUNCS->get_named_vars(array( 
         'account' => 'your-paypal-email-address',
         'for' => $CTX->get( 'k_page_title' ),
         'onHover' => ''
      ), $params) );

      if( empty($content) ) $content='Make A Donation';
      return '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business='.$account.'&item_name=Donation for '.$for.'" title="'.$onHover.'">'.$content.'</a>';
   }   
   
   // 6.
   // Obfuscate email
   // Usage: [mailto]email@mydomain.com[/mailto]
   $FUNCS->register_shortcode( 'mailto', 'mailto_handler' );
   function mailto_handler( $params, $content=null ){
      global $FUNCS;

      // Create Couch script.. we'll use the 'cloak_email' tag to encrypt email
      $html = "<cms:cloak_email email='{$content}' />";

      // Pass on the code to Couch for execution using the 'embed' function
      return $FUNCS->embed( $html, $is_code=1 );
   } 
   
   // 7.
   // Embed SWF
   // Usage: [swf http://www.youtube.com/v/5PsnxDQvQpw&hl=en_GB&fs=1]
   //        [swf src="http://www.youtube.com/v/5PsnxDQvQpw&hl=en_GB&fs=1" width="640" height="480"]
   $FUNCS->register_shortcode( 'swf', 'swf_handler' );
   function swf_handler( $params, $content=null ){
      global $FUNCS;

      extract( $FUNCS->get_named_vars(array( 
         'src' => '',
         'width' => '480',
         'height' => '385' 
      ), $params) );
      
      // Sanitize parameters
      $src = htmlspecialchars( $src, ENT_QUOTES );
      $width = (int)$width;
      $height = (int)$height;
      
      $html =<<<EOS
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="$width" height="$height">
         <param name="movie" value="$src"></param>
         <param name="allowFullScreen" value="true"></param>
         <param name="allowscriptaccess" value="always"></param>
         <param name="wmode" value="opaque"></param>
         <embed
            src="$src"
            type="application/x-shockwave-flash"
            allowscriptaccess="always"
            allowfullscreen="true"
            width="$width"
            height="$height"
            wmode="opaque">
         </embed>
      </object>    
EOS;
       return $html;
      
   }
   

