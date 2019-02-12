<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125746776-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125746776-1');
</script>

@if (getenv('APP_ENV') === 'local')
    <script id="__bs_script__">
        //<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.7'><\/script>".replace(
            "HOST", location.hostname));
        //]]>
    </script>
@endif
<div id="copyright" class="w-100 text-center">Copyright © 2019 Karthik Girraju</div>