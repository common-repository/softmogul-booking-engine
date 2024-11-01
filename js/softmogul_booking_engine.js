var script = document.createElement('script');
script.src = "https://booking.softmogul.com/booking-api.js";
var token_attr = document.createAttribute('data-token');
token_attr.value = softmogul_token;
script.setAttributeNode(token_attr);
script.appendChild(document.createTextNode(""));
document.body.appendChild(script);

function initApp() {
           var triggers = document.querySelectorAll("[href='http://receptionpms.com']");

           if (triggers.length) {
               for (var i = 0; i < triggers.length; i++) {
                   triggers[i].removeAttribute('href');
                   triggers[i].setAttribute("onclick", "window.dispatchEvent(new Event('reservation-app-show'))")
               }
           }
       }
window.addEventListener("load", initApp);
