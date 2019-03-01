var canvas = document.querySelector("canvas");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
var c = canvas.getContext("2d");
canvas.style.backgroundColor = "black";


var snakeTail = [];
var foodSnake = [];

function newFood(){
    var x = Math.random() * window.innerWidth;
    var y = Math.random() * window.innerHeight;
    var color = "#9f1313"
    
    foodSnake[0] = (new Snake(x, y, 50, color));
}

function newSnake(){
   
    
        var x = Math.random() * window.innerWidth;
        var y = Math.random() * window.innerHeight;
       var color = "lightgreen";

       
            snakeTail.push(new Snake(x, y, 50, color));
        
            
        
       
}





function animate(){
    c.clearRect(0,0, innerWidth, innerHeight);

    foodSnake[0].draw();
    
    $(document).on('keypress',function(e) {
       
    
        if(e.which == 97){
            right = -1;
            up = 0;
           
        } else if(e.which == 100){
            right = 1;
            up = 0;
           
        }   else if(e.which == 119){
            right = 0;
            up = -1;
           
        }   else if(e.which == 115){
            right = 0;
            up = 1;
           
        }
    });

    speed = 50;
    
    
    for(i = 0; i < snakeTail.length; i++){
        snakeTail[i].update(right, up, speed);
    }


}


function getDistance(x1, y1, x2,y2){
    xDistance = x2 - x1;
    yDistance = y2 - y1;

    return Math.sqrt(Math.pow(xDistance, 2) + Math.pow(yDistance, 2));   
}



function Snake(x, y, square, color){
    this.x = x;
    this.y = y;
    this.square = square;
    this.color = color;

    this.update = function(dx, dy, speed){

        if((getDistance(snakeTail[0].x, snakeTail[0].y, foodSnake[0].x, foodSnake[0].y) < 50)){
            newFood();
            newSnake();
        }

        this.dx = dx * speed;
        this.dy = dy * speed;

        this.x += this.dx;
        this.y += this.dy;


        this.draw();
    
    }

    this.draw = function(){
        c.beginPath();
        if(this.x < 1){
            this.x = innerWidth - 1;
        }   else if(this.x > innerWidth){
            this.x = 1;
        }   else if(this.y > innerHeight){
            this.y = 1;
        }   else if(this.y < 0){
            this.y = innerHeight -1;
        }



        c.rect(this.x, this.y, this.square, this.square);
        c.fillStyle = this.color;
        c.fill();
    }

}


newFood();
newSnake();

setInterval(animate, 270);

