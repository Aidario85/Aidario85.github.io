"use strict"

    
new WOW().init();
    

$('#button').click(function(){
	var value = $('#list1').val();
    var value2 = $('#list2').val();
    var value3 = $('#list3').val();
    
    let totalDue
    let totalDue2
    let totalDue3
    
    let totalSum
    let totalSum2
    let totalSum3
    
    if (value == 1){
    totalDue = 10;
    totalSum = 100;    
    }
    else if (value == 2) {
        totalDue = 20;
        totalSum = 200;   
        }
    else if (value == 3) {
        totalDue = 30;
        totalSum = 300;   
        }
    
    else {
        totalDue = 0; 
        totalSum = 0;
          }
    
 ///////////////////////////////////////////   
    if (value2 == 1){
    totalDue2 = 10;
    totalSum2 = 100;
    }
    
     else if (value2 == 2) {
        totalDue2 = 20;
        totalSum2 = 200;   
        }
    else if (value2 == 3) {
        totalDue2 = 30;
        totalSum2 = 300;   
        }
    else {
        totalDue2 = 0;
        totalSum2 = 0;
          }
///////////////////////////////////////////  
      if (value3 == 1){
        totalDue3 = 10;
        totalSum3 = 100;
           }
    
     else if (value3 == 2) {
        totalDue3 = 20;
        totalSum3 = 200;   
        }
    else if (value3 == 3) {
        totalDue3 = 30;
        totalSum3 = 300;   
        }
          else {
            totalDue3 = 0; 
            totalSum3 = 0;
          }
     
	$('#dueDate').html(totalDue + totalDue2 + totalDue3 + " дн.");
    $('#totalPrice').html(totalSum + totalSum2 + totalSum3 + " руб.");
});



////////////////////////////////////////////////////////////////////////////
 let options = {threshold:[0.5]};
    let observer = new IntersectionObserver(onEntry, options);
    let elements = $('.numberBir');
    elements.each((i, el) => {
        observer.observe(el);
    });
   
  function onEntry (entry){
    entry.forEach(change => {
        if (change.isIntersecting){
            change.target.classList.add('numberOne');
       } 
    });
 
var currentNumber = $('.numberOne').text();

$({numberValue: currentNumber}).animate({numberValue: 120}, {
    duration: 2000,
    easing: 'linear',
    step: function() { 
        $('.numberOne').text(Math.ceil(this.numberValue)); 
    }
});
    }
    /////////////////////////////////////////////////
   let optionTwo = {threshold:[0.5]};
    let observerTwo = new IntersectionObserver(onEntryTwo, optionTwo);
    let elementTwo = $('.numberEki');
    elementTwo.each((i, el) => {
        observerTwo.observe(el);
    });
   
  function onEntryTwo (entry){
    entry.forEach(change => {
        if (change.isIntersecting){
            change.target.classList.add('numberTwo');
        } 
    });

var currentNumberTwo = $('.numberTwo').text();

$({numberValue: currentNumberTwo}).animate({numberValue: 4600}, {
    duration: 8000,
    easing: 'linear',
    step: function() { 
        $('.numberTwo').text(Math.floor(this.numberValue)); 
    }
});
    }
///////////////////////////////////////////////////////
  let optionThree = {threshold:[0.5]};
    let observerThree = new IntersectionObserver(onEntryThree, optionThree);
    let elementThree = $('.numberUsh');
    elementThree.each((i, el) => {
        observerThree.observe(el);
    });
   
  function onEntryThree (entry){
    entry.forEach(change => {
        if (change.isIntersecting){
            change.target.classList.add('numberThree');
        } 
    });
 
var currentNumberThree= $('.numberThree').text();

$({numberValue: currentNumberThree}).animate({numberValue: 341}, {
    duration: 3000,
    easing: 'linear',
    step: function() { 
        $('.numberThree').text(Math.floor(this.numberValue)); 
    }
});
}
///////////////////////////////////////////////////////
  let optionFour = {threshold:[0.5]};
    let observerFour = new IntersectionObserver(onEntryFour, optionFour);
    let elementFour = $('.numberTort');
    elementFour.each((i, el) => {
        observerFour.observe(el);
    });
   
  function onEntryFour(entry){
    entry.forEach(change => {
        if (change.isIntersecting){
            change.target.classList.add('numberFour');
        } 
    });

var currentNumberFour= $('.numberFour').text();

$({numberValue: currentNumberFour}).animate({numberValue: 24}, {
    duration: 6000,
    easing: 'linear',
    step: function() { 
        $('.numberFour').text(Math.floor(this.numberValue)); 
    }
});
 
    }

////////////////////////////////////////////////////////////////////////



 $(window).scroll(() => {
    let scrollDistance = $(window).scrollTop();
    
    $(".sect").each((i, el) => {
        
        if($(el).offset().top - $("nav").outerHeight() <= scrollDistance){
            $("nav a").each((i, el) => {
                if ($(el).hasClass("active")){
                    $(el).removeClass("active");
                }
            });
            $('nav li:eq('+ i +')').find('a').addClass('active');
        }
    });
});

//////////////////////////////////////////////////////

    $('a[href^="#"]').click(function () {
            let valHref = $(this).attr("href");
            $('html, body').animate({
                scrollTop: $(valHref).offset().top - 43 + "px"
            });
        })
/////////////////////////////////////////////////
var delay_popup = 5000;
    setTimeout("document.getElementById('bg_popup').style.display='block'", delay_popup);

////////////////////////////////////////////////////
 $("#inputTel").mask("+7(999) 999-99-99");
////////////////////////////////////////////////////    
$('form').submit(function(event){
    event.preventDefault();
    $.ajax({
        type:"POST",
        url:"php/mail.php",
        data: $(this).serialize()
    }).done(function(){
        $(this).find("input").val("");
        alert("Данные успешно отправлены");
        $("form").trigger("reset");
    });
    return false;
});
////////////////////////////////////////////////////
