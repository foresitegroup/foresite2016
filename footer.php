  <div class="fg-footer site-width">
    2018 S 1st St, Suite 319, Milwaukee, WI 53207 <span class="sep">//</span> 414.305.1092 <span class="sep">//</span> <?php email("hello@foresitegrp.com"); ?> <span class="sep">//</span>

    <div class="social">
      <a href="http://instagram.com/foresitegrp"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="https://facebook.com/foresitegrp"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="https://twitter.com/foresitegrp"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="https://vimeo.com/foresite"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
      <a href="https://linkedin.com/company/6387206"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </div>

    <div class="copyright">&copy; <?php echo date("Y"); ?> All rights reserved</div>
  </div>

  <script>
    // Open external links and PDFs in new tab
    [...document.links].forEach(link => {
      if (link.hostname != window.location.hostname || link.href.split('.').pop() == "pdf") {
        link.target = '_blank'; link.rel = 'noopener';
      }
    });
  </script>
    
  </body>
</html>