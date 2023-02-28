// JavaScript Document

var nav = document.getElementById("menus");
var links = nav.getElementsByTagName("li");
var lilen = nav.getElementsByTagName("span"); //判断地址
var currenturl = document.location.href;

var position = document.getElementById("position").innerHTML; //判断地址
var first = 0;
for (var i = 0; i < links.length; i++) {
    var linkurl = lilen[i].innerHTML;
    if (position.indexOf(linkurl) != -1) {
        first = i;
    }
}
links[first].className = "active"; //高亮代码样式

