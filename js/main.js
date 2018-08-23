var ua = navigator.userAgent.toLowerCase();
var isOpera = (ua.indexOf('opera')  > -1);
var isIE = (!isOpera && ua.indexOf('msie') > -1);

function getDocumentHeight() {
    return Math.max(document.compatMode != 'CSS1Compat' ? document.body.scrollHeight : document.documentElement.scrollHeight, getViewportHeight());
}

function getViewportHeight() {
    return ((document.compatMode || isIE) && !isOpera) ? (document.compatMode == 'CSS1Compat') ? document.documentElement.clientHeight : document.body.clientHeight : (document.parentWindow || document.defaultView).innerHeight;
}


$(document).ready(function(){
    $('.page').height(getDocumentHeight());
    $('.overlay').height(getDocumentHeight());
})
window.onresize = function() {
    $('.page').height(getDocumentHeight());
    $('.overlay').height(getDocumentHeight());
};
window.onscroll = function(){
    $('.page').height(getDocumentHeight());
    $('.overlay').height(getDocumentHeight());
}
