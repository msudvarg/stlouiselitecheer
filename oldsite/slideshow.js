function slideDisplay(number,id) {
	for (j=0;j<number;j++) {
        var slideshow = id + j;
		if (j==i) { document.getElementById(slideshow).style.display="block"; }
		else { document.getElementById(slideshow).style.display="none"; }
	}
}
function slideLoad(number,id) {
	i=0;
	slideDisplay(number,id);
}
function slideAdvance(direction,number,id) {
	if (direction=="forward") { i++; }
	if (direction=="backward") { i--; }
    if (i<0) { i=i+number; }
	i = i % number;
	slideDisplay(number,id);
}