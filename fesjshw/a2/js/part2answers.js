var a = 100;
var b = 75;
var c = 25;
var d = 1;
var e = "Donald";
var f = "Duck";
var g = "10";
var h = "75";

document.getElementById("a").innerHTML = ("a. " + (a + b) + ", numeric");
document.getElementById("b").innerHTML = ("b. " + (a % b) + ", numeric");
document.getElementById("c").innerHTML = ("c. " + (e + f) + ", string");
document.getElementById("d").innerHTML = ("d. " + (e + g) + ", string");
document.getElementById("e").innerHTML = ("e. " + (c * d) + ", numeric");
document.getElementById("f").innerHTML = ("f. " + (g + h) + ", string");
document.getElementById("g").innerHTML = ("g. " + (f + g) + ", string");
document.getElementById("h").innerHTML = ("h. " + (d + h) + ", string");
document.getElementById("i").innerHTML = ("i. " + ((b/c)<a) + ", Boolean");
document.getElementById("j").innerHTML = ("j. " + ((a%b) == c) + ", Boolean");
document.getElementById("k").innerHTML = ("k. " + ((c>a) || (b<a)) + ", Boolean");
document.getElementById("l").innerHTML = ("l. " + (h==b) + ", Boolean");