var canvas = document.querySelector("canvas");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var c = canvas.getContext("2d");

var mouse = {
    x : undefined,
    y : undefined
}

var colorArray = [
    '#ffaa33',
    '#99ffaa',
    '#00ff00',
    '#4411aa',
    '#ff1100'
];

window.addEventListener('mousemove', function(event){

    mouse.x = event.x;
    mouse.y = event.y;
    console.log(mouse);
})

var circleArray = [];

for (i = 0; i < 200; i++){

    var x = Math.random() * window.innerWidth;
    var y = Math.random() * window.innerHeight;
    var radius = 10;
    var dx = (Math.random() - 0.5) * 10;
    var dy = (Math.random() - 0.5) * 10;

    circleArray.push(new Circle(x, y, dx, dy, radius));
}



function animate() {

    requestAnimationFrame(animate);
    c.clearRect(0, 0, innerWidth, innerHeight);


    for(var i  = 0; i < circleArray.length; i++){
        circleArray[i].update();
    }
}

function Circle(x,y,dx,dy,radius){

    this.x = x;
    this.y = y;
    this.dx = dx;
    this.dy = dy;
    this.radius = radius;
    this.color = colorArray[Math.floor(Math.random() * colorArray.length)]; 

    this.draw = function(){
       


        c.beginPath();
        c.arc(this.x, this.y, this.radius, Math.PI * 2, false);
        c.fillStyle = this.color;
        c.fill();
    }

    this.update = function(){
        
        if((mouse.x - this.x) < 50 && mouse.x - this.x > -50 && (mouse.y - this.y) <50 && mouse.y - this.y > -50){
            if(this.radius < 60){
            this.radius += 1;}
        } else if (this.radius > 10) {
            this.radius -= 1;
        }

        if ((this.x + this.radius) > window.innerWidth || this.x - radius < 0){
            this.dx = -this.dx;
        } else if ((this.y + this.radius) > window.innerHeight || this.y - radius < 0){
            this.dy = -this.dy;
        }
        this.x += this.dx;
        this.y += this.dy;
        this.draw();
    }
}

animate();