var canvas = document.querySelector("canvas");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var c = canvas.getContext("2d");

circleArray = [];

setInterval(rain, 10);
function rain(){
var x = Math.random() * window.innerWidth;
var y = 0;
var dx = 10;

circleArray.push(new Circle(x, y, dx));
}


function animate(){
    requestAnimationFrame(animate);
    c.clearRect(0, 0, innerWidth, innerHeight);

    for(i = 0; i < circleArray.length; i++){
        circleArray[i].update();
    }
    
}

function Circle(x, y, dx){

    this.x = x;
    this.y = y;
    this.dx = dx;
    this.radius = 4;
    
    this.draw = function(){
        c.beginPath();
       c.arc(this.x, this.y, this.radius, Math.PI * 2, false);
       c.fillStyle = "grey";

       c.fill(); 

    }

    this.update = function(){

        this.y += this.dx;
        this.draw();
    }
}
animate();