// NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
// IT'S JUST JUNK FOR OUR DOCS!
// ++++++++++++++++++++++++++++++++++++++++++
(function(){
  'use strict';
   navigator.cookieActivated = function () {
     // Non-IE browsers
     if (navigator.userAgent.indexOf('MSIE') === -1 && getIEVersion() === -1) {
        return navigator.cookieEnabled;
     }
     // IE Family browsers
     document.cookie = 'cookieActived=true';
        return (document.cookie.indexOf('cookieActived') !== -1) ? true : false;
   }();        
}())
function getIEVersion()
{
  var rv = -1;
  if (navigator.appName == 'Microsoft Internet Explorer')
  {
    var ua = navigator.userAgent;
    var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
    if (re.exec(ua) != null)
      rv = parseFloat( RegExp.$1 );
  }
  else if (navigator.appName == 'Netscape')
  {
    var ua = navigator.userAgent;
    var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");  //for IE 11
    if (re.exec(ua) != null)
      rv = parseFloat( RegExp.$1 );
  }
  return rv;
}

if(!navigator.cookieActivated){
	//document.location='noscript.php';
	alert('請打開瀏覽器COOKIE功能，才能正常瀏覽本網站頁面!');
}
if (navigator.userAgent.indexOf('MSIE') >0 && getIEVersion()<8) {
  //document.location='noscript.php';
  alert('您目前使用舊版瀏覽器，請使用IE8以上版本或其他更優秀的瀏覽器，才能正常瀏覽本網站頁面!');
}


