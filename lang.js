//This js file allows for pages to be dynamically translated by hiding and displaying different text depending on the url of the page
//The url must end with ?dc=param where param is en, fr, or de. If param is improperly formatted, it defaults to de settings (German).

//Initial call when page loads
updateContent();

//Mobile event listeners
document.querySelectorAll("a.dropdown-item")[0].addEventListener("click", setEnglish);
document.querySelectorAll("a.dropdown-item")[1].addEventListener("click", setFrench);
document.querySelectorAll("a.dropdown-item")[2].addEventListener("click", setGerman);

//Desktop event listeners
document.querySelectorAll("a.-en")[0].addEventListener("click", setEnglish);
document.querySelectorAll("a.-fr")[0].addEventListener("click", setFrench);
document.querySelectorAll("a.-de")[0].addEventListener("click", setGerman);

//Update content when language is changed
function setEnglish() {
    window.history.replaceState(null, null, window.location.search.slice(0, -2) + "en");
    updateContent();
}
function setFrench() {
    window.history.replaceState(null, null, window.location.search.slice(0, -2) + "fr");
    updateContent();
}
function setGerman() {
    window.history.replaceState(null, null, window.location.search.slice(0, -2) + "de");
    updateContent();
}


var paragraph;
var dynamicContent;
var links, i, le, href;

// Parse the URL parameter
function updateContent() {
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
    dynamicContent = getParameterByName('dc');
    
        $(document).ready(function() {

        $('.default-message').hide();
    
        // Check if the URL parameter is English
        if (dynamicContent == 'en') {
            $('.en').show();
            $('.fr').hide();
            $('.de').hide();

            paragraph = document.getElementById("sharing");
            paragraph.textContent = "Share";

            if (document.getElementById("disclaimer-bottom")) {
                paragraph = document.getElementById("disclaimer-bottom");
                paragraph.textContent = "This website is not to be interpreted as political in any " +
                "manner. It is to simply be a repository of historical songs for educational purposes.";
            }

            
            updateLinks("en");
        } 
        // Check if the URL parameter is French
        else if (dynamicContent == 'fr') {
            $('.en').hide();
            $('.fr').show();
            $('.de').hide();

            paragraph = document.getElementById("sharing");
            paragraph.textContent = "Partager";

            if (document.getElementById("disclaimer-bottom")) {
                paragraph = document.getElementById("disclaimer-bottom");
                paragraph.textContent = "Ce site web ne doit pas être interprété comme étant politique " + 
                "de quelque manière que ce soit. Il s'agit uniquement d'un recueil de chansons historiques à des fins éducatives.";
            }

            updateLinks("fr");
        }
        // Check if the URL parameter is German or not defined, display default content
        else {
            $('.en').hide();
            $('.fr').hide();
            $('.de').show();

            paragraph = document.getElementById("sharing");
            paragraph.textContent = "Teilen";

            if (document.getElementById("disclaimer-bottom")) {
                paragraph = document.getElementById("disclaimer-bottom");
                paragraph.textContent = "Diese Webseite soll in keiner Weise als politisch interpretiert werden. " +
                "Sie soll nur eine Sammlung von historischen Liedern zu Bildungszwecken sein.";
            }

            updateLinks("de");
        }

    });
}

//Update relevant links when user changes language without reloading the page
function updateLinks(language) {
    links = document.querySelectorAll("a.changing");
    for (i = 0, le = links.length; i < le; i++) {
        href = links[i].getAttribute('href');
        
        if (href != null && href != "mailto:?") {
            href = href.slice(0, -2) + language;
            links[i].setAttribute('href', href);
        }
    }
}

    