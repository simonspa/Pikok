<?php

class Pikok extends KokenPlugin {

	function __construct()
	{
		$this->require_setup = true;
		$this->register_hook('before_closing_head', 'render');
	}

	function render()
	{

		echo <<<OUT
<script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(["trackPageView"]);
        _paq.push(["enableLinkTracking"]);
      
        (function() {
          var u=(("https:" == document.location.protocol) ? "https" : "http") + "://{$this->data->piwik_url}/";
          _paq.push(["setTrackerUrl", u+"piwik.php"]);
          _paq.push(["setSiteId", "{$this->data->piwik_site_id}"]);
          var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
          g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
        })();
</script>
<noscript><p><img src="http://{$this->data->piwik_url}/piwik.php?idsite={$this->data->piwik_site_id}" style="border:0;" alt="" /></p></noscript>
OUT;

	}
}

