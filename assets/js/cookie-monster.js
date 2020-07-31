function setCrossSubdomainCookie(name, value, days) {
  const assign = name + "=" + escape(value) + ";";
  const d = new Date();
  d.setTime(d.getTime() + (days*24*60*60*1000));
  const expires = "expires="+ d.toUTCString() + ";";
  const path = "path=/;";
  const domain = "domain=" + (document.domain.match(/[^\.]*\.[^.]*$/)[0]) + ";";
  document.cookie = assign + expires + path + domain;
}
function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
}
var cookieMonster = getCookie("cookie-monster");

if (cookieMonster != null) {
    if (cookieMonster.includes("eat")) {
        window.location.replace("https://podivilov.ru/cookie-monster/oops/");
    }
} else {
    var elems = document.getElementsByClassName('cookie-monster');
    for (i = 0; i < elems.length; i++) {
      var elem = elems[i];
      elem.style.display = 'block';
    }
    setTimeout(function() {
        var s = document.getElementById('cookie-monster').style;
        s.opacity = 1;
        setCrossSubdomainCookie("cookie-monster", "hide", 365);
        (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,40)})();
    }, 10000);
}

document.getElementById("cookie-monster").addEventListener("click",
  function(){var elems = document.getElementsByClassName('cookie-monster');
  for (i = 0; i < elems.length; i++) {
    var elem = elems[i];
    elem.style.display = 'none';
  }});
