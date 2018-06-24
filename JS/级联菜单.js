/**
 * Created by tonghongxiang on 2016/11/16.
 */
function showdiv(divname) {
   top.document.getElementById(divname).style.display="block";
    top.document.getElementById(divname).style.display="block";

}
function hiddendiv(divname) {
    top.document.getElementById(divname).style.display="none";
}
function settable(divname) {
    var obj= document.getElementById(divname);
    var m=obj.firstChild.nodeValue;
    function settable1() {
         return m;
    }
    return settable1();
}
function changetable() {
    var x=settable1();
    alert("全局变量的值是："+x);
}

