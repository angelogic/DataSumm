          function showStates() {
           document.getElementById('states_disable').style.visibility='hidden';
           document.getElementById('state').style.visibility='visible';
          }

          function hideStates() {
            document.getElementById('state').style.visibility='hidden';
            document.getElementById('states_disable').style.visibility='visible';
          }

        
        function selectYear(){
          var y = document.getElementById("OrderBy_Year");
              if( y.checked == true){
                 hideStates();
                        $( "#year_Select" ).prop( "disabled", false );
                        $( "#state_Select" ).prop( "disabled", true );
                        $( "#year_Select" ).show();
                        $( "#state_Select" ).hide();
   }
          }
        
        function selectState(){
          var x = document.getElementById("OrderBy_State");
                if( x.checked == true){
                      showStates();
                         $( "#year_Select" ).prop( "disabled", true );
                        $( "#state_Select" ).prop( "disabled", false );
                        $( "#year_Select" ).hide();
                        $( "#state_Select" ).show();
   }
          }

          