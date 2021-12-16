<?php
    $name = "my_cookie";
    $value = "i_am_a_bit_more_secure";
    $expires = 0;
    $path = "";
    $domain = "cookies.gtfo.bar:1234";
    $httponly = true;
    $secure = false;
    setcookie($name, $value, $expires, $path, $domain, $secure, $httponly);
    $cookie = $name . "=" . $value;
    if ($expires != 0)
        $cookie .= "; expires=" . $expires; 
    if ($path != "")
        $cookie .= "; path=" . $path;
    if ($domain != "")
        $cookie .= "; domain=" . $domain;
    if ($httponly)
        $cookie .= "; HttpOnly";
    if ($secure)
        $cookie .= "; Secure";
?>

<html>
    <h1>Httponly cookie setter</h1>
    Congratulations! Cookie below has been set:
    <br>
    <i><b><?php echo($cookie)?></i></b> <br>
    <br>
    <a href="http://evil.cookies.gtfo.bar:1234/httponly.html">This</a> link is insecure<br>
    <b>Don't</b> click it<br>
    <br>
    <a href="http://cookies.gtfo.bar:1234">Root</a>
</html