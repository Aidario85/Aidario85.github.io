"use strict"
$(document).ready(function(){
//////////////////////////////////////Урок 13    
     
    new WOW().init();
    
    
    $("#inputTel").mask("+7(999) 999-99-99");
    
    $('form').submit(function(){
        
        if ($("#inputTel").val() == ""|| $("#inputEmail3").val() == ""){
            alert("Введите телефон");
        }
    });
    
   ///////////////////////////////////////////////////////////// 

    
////////////////////////////////////// конец Урока 13    
    //working!
    /*
        let options = {threshold:[0.5]};
    let observer = new IntersectionObserver(onEntry, options);
    let elements = $('.element-animation');
    elements.each((i, el) => {
        observer.observe(el);
    });
   
  function onEntry (entry){
    entry.forEach(change => {
        if (change.isIntersecting){
            change.target.classList.add('show-animation');
        } 
    });
    
}
*/
    
/////////////////////////////////////////////////////////////////////////
//working!
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
//    working! 
  /* let optionTwo = {threshold:[0.5]};
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
*/
//////////////////////////////////////////////////////////////////////////
/* 
//not working
$(window).scroll(() => {
    let scrollDistance = $(window).scrollTop();
    
    $(".section").each((i, el) => {
        
        if($(el).offset().top - $("nav").outerHeight() <= scrollDistance){
            $("nav a").each((i, el) => {
                if ($(el).hasClass ("active")){
                    $(el).removeClass("active");
                }
            });
            $('nav li:eq('+ i +')').find('a').addClass('active');
        }
    });
});
*/
////////////////////////////////////////////////////////////////////////


/* let options = {threshold:[0.5]};
    let observer = new IntersectionObserver(onEntry, options);
    let elements = $('.element-animation');
    elements.each((i,el) => {
        observer.observe(el);
    });
   
  function onEntry (entry){
    entry.forEach(change => {
        if (change.isIntersecting){
            change.target.classList.add('show-animation');
        } 
    });
    
}

    
    
    





////////////////////////////////////////////////////////////////////////
    //working!
    $('a[href^="#"]').click(function () {
            let valHref = $(this).attr("href");
            $('html, body').animate({
                scrollTop: $(valHref).offset().top - 20 + "px"
            });
        })
/////////////////////////////////////////////////////////////////////
    
 $('.image-link').magnificPopup({type:'image'});
});*/
    
    
  });   //document close