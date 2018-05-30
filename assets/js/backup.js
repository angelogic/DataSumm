 $(document).ready(function(){
            $('input[name="OrderBy"]').click(function() {
                if($('input[name="OrderBy"]').is(':checked')) { 
                    var radioValue = $("input[name='OrderBy']:checked").val();
                     if(radioValue == "OrderBy_Year"){
                        $( "#year_Select" ).prop( "disabled", false );
                        $( "#state_Select" ).prop( "disabled", true );
                        $( "#year_Select" ).show();
                        $( "#state_Select" ).hide();
                        $( "#states_enabled" ).prop( "disabled", false );
                        $( "#states_disable" ).prop( "disabled", true );
                        $( "#states_disable" ).show();
                        $( "#states_enabled" ).hide();
                         $(":submit").click(function () { 
        				var e = document.getElementById("endYear");
       					 var endYearz = e.options[e.selectedIndex].value;
         				
         				var e = document.getElementById("startYears");
       					 var strtYearz = e.options[e.selectedIndex].value;
       					 if(endYearz<strtYearz){
       					 	document.getElementById("yearError").innerHTML = "*Please provide valid year range";
       					 }else{
       					 	window.location.replace('test.php');
       					 }

         			});
                    } else {
                        $( "#year_Select" ).prop( "disabled", true );
                        $( "#state_Select" ).prop( "disabled", false );
                        $( "#year_Select" ).hide();
                        $( "#state_Select" ).show();
                        $( "#states_disable" ).prop( "disabled", true );
                        $( "#states_enabled" ).prop( "disabled", false );
                        $( "#states_disable" ).hide();
                        $( "#states_enabled" ).show();
        }
   }
});
});