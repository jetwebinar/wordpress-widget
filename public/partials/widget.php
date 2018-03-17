<html>
<body>
	<!-- JETWEBINAR FORM CONTAINER -->
    <div class="form-container optin1 jet-form">
        <header>REGISTER FOR THE WEBINAR</header>
        <form role="form" method="POST" data-type="optin1">
            <div class="form-group" data-type="form-group">
                <label class="input">
                    <input type="text" data-type="form-field-text" id="contact_name" placeholder="Full name" name="name">
                </label>
            </div>
            <div class="form-group">
                <label class="input">
                    <input type="email" data-type="form-field-text" id="contact_email" placeholder="Email Address" name="email">
                </label>
            </div>
            <footer>
                <button type="submit" id="contact_submit" data-type="form-submit" data-loading-text="•••" class="button">SIGN UP NOW</button>
            </footer>
        </form>
    <!-- END JETWEBINAR FORM CONTAINER -->
    
    <!-- START JETWEBINAR FIELD TEMPLATES -->
	    <div id="optin1-text" style="display:none">
	        <div class="form-group" data-type="form-group">
	            <label class="input">
	                <input type="text" class="form-control" required="true" data-type="form-field-text" id="${id}" placeholder="${placeholder}" name="${name}">
	            </label>
	        </div>
	    </div>
	    <div id="optin1-submit" style="display:none">
	        <footer>
	            <button type="submit" id="contact_submit" data-type="form-submit" data-loading-text="•••" class="button">SIGN UP NOW</button>
	        </footer>
	    </div>
	    <div id="optin1-hidden" style="display:none">
	        <input type="hidden" id="${id}" name="${name}" value="${value}">
	    </div>
	    <div id="optin1-select" style="display:none">
	        <div class="form-group select-group" data-type="form-group">
	            <label class="select">
	                <select id="${id}" name="${name}" data-type="form-select" class="form-control"></select>
	            </label>
	
	        </div>
	    </div>
    </div>
    <!-- END JETWEBINAR FIELD TEMPLATES -->
    <!-- START JETWEBINAR CODE -->
    
    <script>
        var wb_id = <?=$atts['id']?>;
        var wb_url = "<?=get_option("jw_url")?>";
        var script = document.createElement('script');
        script.setAttribute('type', 'text/javascript');
        script.setAttribute('src', 'https://'+wb_url+'/assets/js/api/widget.js');
        document.head.appendChild(script);
    </script>
    <!-- END JETWEBINAR CODE -->
</body>
</html>