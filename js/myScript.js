"use strict"


let type_select;

do {
  type_select = prompt("УКАЖИТЕ ЦИФРОЙ ТРЕБУЕМЫЙ ТИП САЙТА: 1 - Корпоративный сайт; 2 - Сайт-визитка; 3 - Интернет магазин", 0);
} while (type_select > 3);
 console.log(type_select);



function siteType(type_select, varOne, varTwo, varThree, varNo) {
    if (type_select == 1){
    varOne ()
        
        }
         else if (type_select == 2){
    varTwo ();
             }  
          else if (type_select == 3){
                varThree ();
}
else{
    varNo();
}}

function varBir(){
    console.log("Выбран Корпоративный сайт");
    let cost = 5000;
    alert( "Выбран Корпоративный сайт" + " стоимостью " + cost + " рублей");
   
}
function varEki(){
    console.log("Выбран Сайт-визитка");
    let cost = 3000;
    alert( "Выбран Сайт-визитка" + " стоимостью " + cost + " рублей");
}
function varUsh(){
    console.log("Выбран Интернет-магазин");
    let cost = 6000;
    alert( "Выбран Интернет-магазин" + " стоимостью " + cost + " рублей");
}
    function varJok(){
    console.log("Не выбран тип сайта");
}
siteType(type_select, varBir, varEki, varUsh, varJok);

let typePrice;

 if (type_select == 1){
    typePrice = 5000;
        
        }
         else if (type_select == 2){
    typePrice = 3000;;
             }  
          else if (type_select == 3){
                typePrice = 6000;}

console.log (typePrice);

/////////////////////////////////////////////////

let design_select;

do {
  design_select = prompt("УКАЖИТЕ ЦИФРОЙ ТРЕБУЕМЫЙ ДИЗАЙН САЙТА: 1 - Шаблонный; 2 - Уникальный; 3 - Сверхдекорированный", 0);
} while (design_select > 3);
 console.log(design_select);



function siteDesign(design_select, varOne, varTwo, varThree, varNo) {
    if (design_select == 1){
    varOne ()
        
        }
         else if (design_select == 2){
    varTwo ();
             }  
          else if (design_select == 3){
                varThree ();
}
else{
    varNo();
}}

function varUno(){
    console.log("Выбран Шаблонный дизайн");
    let cost = 10000;
    alert( "Выбран Шаблонный дизайн" + " стоимостью " + cost + " рублей");
   
}
function varDos(){
    console.log("Выбран Уникальный дизайн");
    let cost = 20000;
    alert( "Выбран Уникальный дизайн" + " стоимостью " + cost + " рублей");
}
function varTres(){
    console.log("Выбран Сверхдекорированный дизайн");
    let cost = 30000;
    alert( "Выбран Сверхдекорированный дизайн" + " стоимостью " + cost + " рублей");
}
    function varNona(){
    console.log("Не выбран дизайн сайта");
}
siteDesign(design_select, varUno, varDos, varTres, varNona);

let designPrice;

 if (design_select == 1){
    designPrice = 10000;
        
        }
         else if (design_select == 2){
    designPrice = 20000;;
             }  
          else if (design_select == 3){
                designPrice = 30000;}

console.log (designPrice);

///////////////////////////////////////////////////////////

let adapt_select;

do {
  adapt_select = prompt("УКАЖИТЕ ЦИФРОЙ ТРЕБУЕМУЮ АДАПТИВНОСТЬ САЙТА: 1-Не адаптиынй; 2-Адаптивный; 3-Адаптивный+мобильные устройства", 0);
} while (adapt_select > 3);
 console.log(adapt_select);



function siteAdapt(adapt_select, varOne, varTwo, varThree, varNo) {
    if (adapt_select == 1){
    varOne ()
        
        }
         else if (adapt_select == 2){
    varTwo ();
             }  
          else if (adapt_select == 3){
                varThree ();
}
else{
    varNo();
}}

function varIch(){
    console.log("Выбран Не адаптиынй");
    let cost = 100;
    alert( "Выбран Не адаптиынй" + " стоимостью " + cost + " рублей");
   
}
function varNi(){
    console.log("Выбран Адаптивный");
    let cost = 2000;
    alert( "Выбран Адаптивный" + " стоимостью " + cost + " рублей");
}
function varSan(){
    console.log("Выбран Адаптивный+мобильные устройства");
    let cost = 3000;
    alert( "Выбран Адаптивный+мобильные устройства" + " стоимостью " + cost + " рублей");
}
    function varHach(){
    console.log("Не выбрана адаптивность сайта");
}
siteAdapt(adapt_select, varIch, varNi, varSan, varHach);

let adaptPrice;

 if (adapt_select == 1){
    adaptPrice = 100;
        
        }
         else if (adapt_select == 2){
    adaptPrice = 2000;;
             }  
          else if (adapt_select == 3){
                adaptPrice = 3000;}

console.log (adaptPrice);


let totalSum = (typePrice + designPrice + adaptPrice);

let priceTotal = confirm ("Стоимость Вашего сайта будет составлять  " + totalSum + " рублей");






