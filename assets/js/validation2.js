 
        function myFunction(){                 
        				// var e = document.getElementById("endYear");
       					//  var endYearz = e.options[e.selectedIndex].value;
         				
         			// 	var e = document.getElementById("startYears");
       					//  var strtYearz = e.options[e.selectedIndex].value;
                
                  var endYear = document.forms["dataSummary"]["endYear"].value;
                   var startYears = document.forms["dataSummary"]["startYears"].value;
                 
       					 if(endYear < startYears ){
                  
       					 	document.getElementById("yearError").innerHTML = "*Please provide valid year range";
                  $("#startYears").css("border-color", "red");
                  $("#endYear").css("border-color", "red");

       					 } 
}
         	