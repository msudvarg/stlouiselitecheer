function toggle(id) {
    style = document.getElementById(id).style;
    if ( style.display == 'block') { style.display = 'none'; }
    else { style.display = 'block'; }
}
function contentfill(i) {
    box = document.getElementById("text");
    try { box.style.background="rgba(0,0,0,0.8)"; }
    catch(err) { box.style.background="black"; }
    var content = new Array();
    contentdivs = $("#contentfill>div");
    box.innerHTML = contentdivs[i].innerHTML;
}

if (!Function.prototype.bind) {
  Function.prototype.bind = function (oThis) {
    if (typeof this !== "function") {
      // closest thing possible to the ECMAScript 5 internal IsCallable function
      throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
    }
 
    var aArgs = Array.prototype.slice.call(arguments, 1),
        fToBind = this,
        fNOP = function () {},
        fBound = function () {
          return fToBind.apply(this instanceof fNOP && oThis
                                 ? this
                                 : oThis,
                               aArgs.concat(Array.prototype.slice.call(arguments)));
        };
 
    fNOP.prototype = this.prototype;
    fBound.prototype = new fNOP();
 
    return fBound;
  };
}

window.onload = function() {
    document.getElementById("phototab").onclick = function() {toggle("photostream");};
    li = $("#navigation>ul>li");
    li[1].onclick = function() {
        toggle("eventspacer");
        toggle("events");
    }
    for(i=3;i<=6;i++) {
        j = i-3;
        li[i].onclick = (function(j) { contentfill(j); }).bind(null,j);
    }
    
};