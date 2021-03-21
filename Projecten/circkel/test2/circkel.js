var data = [{
    fill:15,
    color:"#80e080"
},{
    fill:35,
    color:"#4fc3f7"
},{
    fill:20,
    color:"#9575cd"
},{
    fill:30,
    color:"#f06292"
}]
var doughnut = document.querySelector("#doughnut"),
svg = document.createElementNS("http://www.w3.org/2000/svg", "svg"),
filled = 0;
svg.setAttribute("width","100%");
svg.setAttribute("height","100%");
svg.setAttribute("viewBox","0 0 100 100");
doughnut.appendChild(svg);
data.forEach(function(o,i){
	var circle = document.createElementNS("http://www.w3.org/2000/svg","circle"),
	startAngle = -90,
	radius = 30,
	cx = 50,
	cy = 50,
	animationDuration = 2000,
	strokeWidth = 15,
	dashArray = 2*Math.PI*radius,
	dashOffset = dashArray - (dashArray * o.fill / 100),
	angle = (filled * 360 / 100) + startAngle,
	currentDuration = animationDuration * o.fill / 100,
	delay = animationDuration * filled / 100;
	circle.setAttribute("r",radius);
	circle.setAttribute("cx",cx);
	circle.setAttribute("cy",cy);
	circle.setAttribute("fill","transparent");
	circle.setAttribute("stroke",o.color);
	circle.setAttribute("stroke-width",strokeWidth);
	circle.setAttribute("stroke-dasharray",dashArray);
	circle.setAttribute("stroke-dashoffset",dashArray);
	circle.style.transition = "stroke-dashoffset "+currentDuration+"ms linear "+delay+"ms";
	circle.setAttribute("transform","rotate("+(angle)+" "+cx+" "+cy+")");
	svg.appendChild(circle);
	filled+= o.fill;
	setTimeout(function(){
		circle.style["stroke-dashoffset"] = dashOffset;
	},100);
})