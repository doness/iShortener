<?php
session_start();
require_once('contact_files/includes/recaptchalib.php');
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php require_once('inti/header.php'); ?>
  </head>

<body>
      <div class="row">
        <div class="col s12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">About Us</span>
				<h2>What is URL Shortener service ?</h2>

				<p>

				URL shortening is a technique to convert a long URL (site or page address) to a shorter version.
				This shorter version of the URL is usually cleaner and easier to share or remember. When someone accesses the 
				shortened address, the browser redirects to the original (large) url address. It is also called URL redirection or URL redirect.

				</p><p>
				For example, the large version of this url:<br>
				<blockquote>http://en.wikipedia.org/wiki/URL_shortening</blockquote><br>
				<br>
				Can be shortened with iShortener service to this small address, that redirects to the previous longer address:<br>
				<blockquote><a href="./1" target="_blank">yoururl/1</a></blockquote><br>

				</p><p>

				</p><h2>Uses and purposes:</h2>
				<p>

				</p><ul>
				 <li>Share links inside email messages without breaking lines
				 </li><li>Share short links in Twitter messages
				 </li><li>Easily remember your favorite addresses
				 </li><li>Share short links in instant-messaging
				 </li><li>Share easy-to-type links in news and printed material
				 </li><li>Have clean and compact urls for your use
				 </li><li>Hide real URL (user will see the real link only after clicking the short url)
				 </li><li>Create human-readable links
				 </li><li>Avoid errors when typing long urls links with parameters
				</li></ul>

				<p>
				</p><hr>

				<b>URL Shortener FAQ</b>

				<p>
				<b>* Is it possible to use iShortener to store "Data URI scheme"?</b>
				<br>
				<br>
				We currently don't allow Data URL scheme.
				Data URL is a way to encode all page content in the URL.<br>
				Click to see example:<br>
				<blockquote>
					<a href="data:text/html,&lt;b&gt;Sample%20Page&lt;/b&gt;" target="_blank">data:text/html,&lt;b&gt;Sample%20Page&lt;/b&gt;</a>
				</blockquote>
				</p>
            </div>
          </div>
        </div>
      </div> 
	  
      <script type='text/javascript' src='./js/bootstrap.min.js'></script>
	  <?php require_once('inti/footer.php'); ?> 
			
</body></html>