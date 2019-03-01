var canvas = document.querySelector("canvas");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
var c = canvas.getContext("2d");

alert("Ти загуби");

let mouse = {
    x : undefined,
    y : undefined
}

addEventListener("mousemove", function(event){
    mouse.x = event.clientX;
    mouse.y = event.clientY;
});


var circleArray = [];

for(i = 0 ; i < 20 ; i++){
    create();
}

function create(){
    var x = (Math.random() * window.innerWidth);
    var y = Math.random() * window.innerHeight;
    var radius = 30;
    var color = Math.floor(Math.random() * 5);
    
    var dx = (Math.random() - 0.5) * 10;
    var dy = (Math.random() - 0.5) * 10;


    circleArray.push(new Circle(x,y,radius,color,dx,dy));
}


function getDistance(x1,y1,x2,y2){
    let xDistance = x2 - x1;
    let yDistance = y2 - y1;

    return Math.sqrt(Math.pow(xDistance, 2) + Math.pow(yDistance, 2));
}


function animate(){
    requestAnimationFrame(animate);
    c.clearRect(0,0,innerWidth,innerHeight);


    circle1 = new Mouse(mouse.x, mouse.y);

    
    for(i = 0; i < circleArray.length; i++){
        circleArray[i].update();
    }

   circle1.update();
    
   
       
}
var col = ['pink', 'red', 'orange', 'yellow', 'blue'];

function Circle(x,y,radius,color,dx,dy){
    this.x = x;
    this.y = y;
    this.radius = radius;
    this.color = color;
    this.dx = dx;
    this.dy = dy;

    this.update = function(){

        

        


        if((this.x + this.radius) > window.innerWidth || (this.x - this.radius) < 0){
            this.dx = -this.dx
        }

        else if((this.y + this.radius) > window.innerHeight || (this.y - this.radius) < 0){
            this.dy = -this.dy
        }

        this.x += this.dx;
        this.y += this.dy;
        this.draw();
    }

    this.draw = function(){
        c.beginPath();
        c.arc(this.x, this.y, this.radius, Math.PI * 2, false);
        c.strokeStyle = "blue";
        c.lineWidth = 7;
        
        c.stroke();
    }

    this.detect = function(){
        
    }
}

animate();



function Mouse(x,y){
    this.x = x;
    this.y = y;
   

    this.update = function(){

        for(j = 0; j < circleArray.length; j++){
        

            if((getDistance(circle1.x, circle1.y, circleArray[j].x, circleArray[j].y)) < 60){

                
                location.reload();
        }
    }



        this.draw();
    }

    this.draw = function(){
        c.beginPath();
        c.arc(this.x, this.y, 30, Math.PI * 2, false);
        c.strokeStyle = "red";
        c.lineWidth = 7;
        
        c.stroke();
    }

    this.detect = function(){
        
    }
}


var time = 1;

setInterval(thisTime, 1000);

function thisTime(){
    document.getElementById("demo").innerHTML = time + " Секунди";
    time++;
}
