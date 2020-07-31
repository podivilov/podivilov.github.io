<?php
if(array_key_exists("enable", $_GET)){
    $func = "enable";
} else if (array_key_exists("disable", $_GET)) {
    $func = "disable";
} else {
    $func = "none";
}
?>
<?php if($func == "none") : ?>
<script>
function setCrossSubdomainCookie(name, value, days) {
  const assign = name + "=" + escape(value) + ";";
  const d = new Date();
  d.setTime(d.getTime() + (days*24*60*60*1000));
  const expires = "expires="+ d.toUTCString() + ";";
  const path = "path=/;";
  const domain = "domain=" + (document.domain.match(/[^\.]*\.[^.]*$/)[0]) + ";";
  document.cookie = assign + expires + path + domain;
}
setCrossSubdomainCookie("cookie-monster", "hide", 365);
window.location.replace("https://blog.podivilov.ru/all/cookies/");
</script>
<?php endif; ?>
<?php if($func == "enable") : ?>
<script>
function setCrossSubdomainCookie(name, value, days) {
  const assign = name + "=" + escape(value) + ";";
  const d = new Date();
  d.setTime(d.getTime() + (days*24*60*60*1000));
  const expires = "expires="+ d.toUTCString() + ";";
  const path = "path=/;";
  const domain = "domain=" + (document.domain.match(/[^\.]*\.[^.]*$/)[0]) + ";";
  document.cookie = assign + expires + path + domain;
}
setCrossSubdomainCookie("cookie-monster", "hide", 365);
window.history.go(-2);
</script>
<?php endif; ?>
<?php if($func == "disable") : ?>
<script>
function setCrossSubdomainCookie(name, value, days) {
  const assign = name + "=" + escape(value) + ";";
  const d = new Date();
  d.setTime(d.getTime() + (days*24*60*60*1000));
  const expires = "expires="+ d.toUTCString() + ";";
  const path = "path=/;";
  const domain = "domain=" + (document.domain.match(/[^\.]*\.[^.]*$/)[0]) + ";";
  document.cookie = assign + expires + path + domain;
}
setCrossSubdomainCookie("cookie-monster", "eat", 365);
window.location.replace("https://podivilov.ru/cookie-monster/oops/");
</script>
<?php endif; ?>
