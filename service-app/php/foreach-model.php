<?php
                    $i = 0;
                    $model = array("София", "Варна", "Пловдив", "Бургас", "Сандански", "Ахтопол","Асеновград", "Благоевград", "Ботевград", "Видин","Враца", "Дупница", "Добрич", "Елхово","Костенец","Карнобат" ,"Карлово", "Лом", "Монтана","Несебър", "Поморие", "Петрич", "Русе","Силистра", "Стара Загора", "Тетевен", "Хасково","Хисаря", "Царево", "Ямбол");
                    foreach($model as $value){
                        echo "<option value=".$value.">".$value."</option>";
                    }

                ?>