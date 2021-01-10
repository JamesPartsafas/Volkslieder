    //This js file allows for pages to be dynamically translated by hiding and displaying different text depending on the url of the page
    //The url must end with ?dc=param where param is en, fr, or de
        // Parse the URL parameter
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }
        // Give the parameter a variable name
        var dynamicContent = getParameterByName('dc');
     
         $(document).ready(function() {

            $('.default-message').hide();
     
            // Check if the URL parameter is english
            if (dynamicContent == 'en') {
                $('.en').show();
                $('.fr').hide();
                $('.de').hide();

                var paragraph = document.getElementById("sharing");
                paragraph.textContent += "Share";

                var paragraph = document.getElementById("disclaimer-bottom");
                paragraph.textContent += "This website is not to be interpreted as political in any " +
                "manner. It is to simply be a repository of historical songs for educational purposes.";
            } 
            // Check if the URL parameter is french
            else if (dynamicContent == 'fr') {
                $('.en').hide();
                $('.fr').show();
                $('.de').hide();

                var paragraph = document.getElementById("sharing");
                paragraph.textContent += "Partager";

                var paragraph = document.getElementById("disclaimer-bottom");
                paragraph.textContent += "Ce site web ne doit pas être interprété comme étant politique " + 
                "de quelque manière que ce soit. Il s'agit uniquement d'un recueil de chansons historiques à des fins éducatives.";
            }
            // Check if the URL parameter is german or not defined, display default content
            else {
                $('.en').hide();
                $('.fr').hide();
                $('.de').show();

                var paragraph = document.getElementById("sharing");
                paragraph.textContent += "Teilen";

                var paragraph = document.getElementById("disclaimer-bottom");
                paragraph.textContent += "Diese Webseite soll in keiner Weise als politisch interpretiert werden. " +
                "Sie soll nur eine Sammlung von historischen Liedern zu Bildungszwecken sein.";
            }
            
            // Option to display site-wide-message at top of every song page
            $('.site-wide').hide();
            var paragraph = document.getElementById("site-wide-message");
            paragraph.textContent += ""; // Insert message here

        });