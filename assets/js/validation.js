 $(document).ready(function(){
          function showStates() {
           document.getElementById('states_disable').style.visibility='hidden';
           document.getElementById('state').style.visibility='visible';
          }

          function hideStates() {
            document.getElementById('state').style.visibility='hidden';
            document.getElementById('states_disable').style.visibility='visible';
          }

            $('input[name="OrderBy"]').click(function() {
                if($('input[name="OrderBy"]').is(':checked')) { 
                    var radioValue = $("input[name='OrderBy']:checked").val();
                     if(radioValue == "OrderBy_Year"){
                      hideStates();
                        $( "#year_Select" ).prop( "disabled", false );
                        $( "#state_Select" ).prop( "disabled", true );
                        $( "#year_Select" ).show();
                        $( "#state_Select" ).hide();
                      
                        
                         $(":submit").click(function () { 
                         
        				// var e = document.getElementById("endYear");
       					//  var endYearz = e.options[e.selectedIndex].value;
         				
         			// 	var e = document.getElementById("startYears");
       					//  var strtYearz = e.options[e.selectedIndex].value;
                 var state = document.forms["dataSummary"]["state_Select"].value;
                 var year = document.forms["dataSummary"]["year_Select"].value;
                  var endYear = document.forms["dataSummary"]["endYear"].value;
                   var startYears = document.forms["dataSummary"]["startYears"].value;
                 alert(startYears);
                 alert(endYear);
                  if ((state === "ini") && (year === "ini")) {
                 document.getElementById("categoryError").innerHTML = "*Please provide valid infomation";
                  return false;
                 }
       					 if(endYear < startYears ){
                  
       					 	document.getElementById("yearError").innerHTML = "*Please provide valid year range";
                  $("#startYears").css("border-color", "red");
                  $("#endYear").css("border-color", "red");
                  return false;
       					 } 

         			    });
                    } else {
                        showStates();
                        $( "#year_Select" ).prop( "disabled", true );
                        $( "#state_Select" ).prop( "disabled", false );
                        $( "#year_Select" ).hide();
                        $( "#state_Select" ).show();

                       

        }
   }
});
});

