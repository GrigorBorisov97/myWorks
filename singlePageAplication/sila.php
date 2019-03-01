<nav> <h2> {{navBar}} </h2> </nav>
<div class="target">

<p style="font-size:18px">
<span class="way1">Инфо #1</span>Кръговите тренировки могат да се използват за постигане на краткосрочна или дългосрочна сила и издръжливост.

Краткосрочната мускулна издръжливост е необходима за спортове или събития, които траят между тридесет секунди и две минути. Такива са например някои дисциплини от плуването и бягането. За тях е необходима изключително много издръжливост, за да се поддържа високо ниво на интензивност по време на състезанието.
<span id="read" style="color:blue" onclick="show()">Прочети още </span></p>

<p id="showmore" style="font-size:18px">
Спортове, които траят доста повече от две минути – като футбол, бокс, борба и бойни изкуства – също изискват подобна краткосрочна издръжливост. Тези спортове се състоят от кратки, повтарящи се периоди на висока интензивност, често с кратки периоди на почивка.

Разбира се, не трябва да сме спортисти, за да се възползваме от кръговите тренировки. Такива тренировки могат да се използват както за обикновен фитнес, така и за крос фит.

<span id="no_read" style="color:blue" onclick="show()">Прочети по-малко.</span></p>
<img class="" src="img/strength.png">

<h2 onclick="fade(0)" class="pointer">Първи ден:</h2>


<div id="0fade" class="fadeEx">
<div class="exercises">
<p>Клек </p>
<img class="workout_img" src="img/strength/4.png">
<p> 2 серии по 9 повторения <span id="squad1"></span></p>
<hr>
</div>

<div class="exercises">
<p>Лежанка </p>
<img class="workout_img" src="img/strength/1.png">
<p> 2 серии по 9 повторения <span id="bench1"></span></p>
<hr>
</div>

<div class="exercises">
<p>Мъртва тяга </p>
<img class="workout_img" src="img/strength/3.png">
<p> 2 серии по 7 повторения <span id="dead1"></span></p>
<hr>
</div>
</div>



<h2 onclick="fade(1)" class="pointer">Втори ден:</h2>


<div id="0fade" class="fadeEx">
<div class="exercises">
<p>Гърди с дъмбел </p>
<img class="workout_img" src="img/chest/2.png">
<p> 2 серии по 6-8 повторения </p>
<hr>
</div>

<div class="exercises">
<p>Гърди на скрипец </p>
<img class="workout_img" src="img/strength/7.png">
<p> 3 серии по 6-8 повторения </p>
<hr>
</div>

<div class="exercises">
<p>Мечка </p>
<img class="workout_img" src="img/strength/8.png">
<p> 2 серии по 6-8 повторения </p>
<hr>
</div>

<div class="exercises">
<p>Бицепс сгъване </p>
<img class="workout_img" src="img/arms/1.png">
<p> 5 серии по 6-8 повторения </p>
<hr>
</div>

<div class="exercises">
<p>Трицепс на скрипец </p>
<img class="workout_img" src="img/arms/3.png">
<p> 5 серии по 6-8 повторения </p>
<hr>
</div>
</div>



<h2 onclick="fade(2)" class="pointer">Трети ден:</h2>


<div id="0fade" class="fadeEx">
<div class="exercises">
<p>Клек </p>
<img class="workout_img" src="img/strength/4.png">
<p> 3 серии по 7 повторения <span id="squad3"></span></p>
<hr>
</div>

<div class="exercises">
<p>Лежанка </p>
<img class="workout_img" src="img/strength/1.png">
<p> 3 серии по 7 повторения <span id="bench3"></span></p>
<hr>
</div>

<div class="exercises">
<p>Екстензии </p>
<img class="workout_img" src="img/strength/6.png">
<p> 2 серии по 6-8 повторения </p>
<hr>
</div>

<div class="exercises">
<p>Сгъване за задно бедро </p>
<img class="workout_img" src="img/strength/11.png">
<p> 3 серии по 10-15 повторения </p>
<hr>
</div>

<div class="exercises">
<p>Прасец </p>
<img class="workout_img" src="img/strength/9.png">
<p> 3 серии по 10-15 повторения </p>
<hr>
</div>
</div>




<h2 onclick="fade(3)" class="pointer">Четвърти ден:</h2>


<div id="0fade" class="fadeEx">
<div class="exercises">

<h1>Почивен ден</h1>

</div>
</div>


<h2 onclick="fade(4)" class="pointer">Пети ден:</h2>


<div id="0fade" class="fadeEx">
<div class="exercises">
<p>Мъртва тяга </p>
<img class="workout_img" src="img/strength/3.png">
<p> 2 серии по 4 повторения <span id="dead5"></span></p>
<p> Стигни до отказ на последната серия </p>
<input id="dead5_input" class="lastset" placeholder="5reps" type="number" min="1"><img src="img/enter.png" class="enter pointer" onclick="newWeightDead()">
<hr>
</div>

<div class="exercises">
<p>Лежанка </p>
<img class="workout_img" src="img/strength/1.png">
<p> 3 серии по 3 повторения <span id="bench5"></span></p>
<p> Стигни до отказ на последната серия </p>
<input id="bench5_input" class="lastset" placeholder="5reps" type="number" min="1"><img src="img/enter.png" class="enter pointer" onclick="newWeightBench()">
<hr>
</div>

<div class="exercises">
<p>Крос-овър с кабел </p>
<img class="workout_img" src="img/strength/7.png">
<p> 2 серии по 12-15 повторения </p>
<hr>
</div>

<div class="exercises">
<p>Гребане с дъмбел </p>
<img class="workout_img" src="img/strength/2.png">
<p> 2 серии по 10-15 повторения </p>
<hr>
</div>

<div class="exercises">
<p>Мечка </p>
<img class="workout_img" src="img/strength/8.png">
<p> 3 серии по 10-15 повторения </p>
<hr>
</div>
</div>




<h2 onclick="fade(5)" class="pointer">Шести ден:</h2>


<div id="0fade" class="fadeEx">
<div class="exercises">
<p>Клек </p>
<img class="workout_img" src="img/strength/4.png">
<p> 3 серии по 7 повторения <span id="squad6"></span></p>
<p> Стигни до отказ на последната серия </p>
<input id="squad6_input" class="lastset" placeholder="5reps" type="number" min="1"><img src="img/enter.png" class="enter pointer" onclick="newWeightSquad()">
<hr>
</div>

<div class="exercises">
<p>Екстензии </p>
<img class="workout_img" src="img/strength/6.png">
<p> 2 серии по 6-8 повторения </p>
<hr>
</div>

<div class="exercises">
<p>Сгъване за задно бедро </p>
<img class="workout_img " src="img/strength/11.png">
<p> 3 серии по 10-15 повторения </p>
<hr>
</div>

<div class="exercises">
<p>Прасец </p>
<img class="workout_img" src="img/strength/9.png">
<p> 3 серии по 10-15 повторения </p>
<hr>
</div>
</div>


<h2 onclick="fade(6)" class="pointer">Седми ден:</h2>


<div id="0fade" class="fadeEx">
<div class="exercises">

<h1>Почивен ден</h1>

</div>
</div>


<h2 onclick="results(7)" class="pointer">Силови постижения:</h2>
<div id="0fade" class="fadeEx">
    <h4 id="squad"></h4>
    <h4 id="bench"></h4>
    <h4 id="dead"></h4>
    <p>Ако искаш да въведеш нови резултати, кликни <span style="color:blue; cursor:pointer" onclick="reNew()">ТУК</span></p>
</div>
</div>
</div>