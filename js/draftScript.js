"use strict"



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


