
$(document).ready(function () {

    $('#customize-spinner').spinner('changed', function (e, newVal, oldVal) {
        $('#old-val').text(oldVal);
        $('#new-val').text(newVal);
    });
    
    $('#table1').hide();
    $('#table2').hide(); 
    
    $('.arrow1').click(function(){                                        
            
        if ($('#table1').is(":visible")) {
            $('#table1').hide();
        } else {
            $('#table1').show();
        }
        $('#table2').hide();            
    });
    
    $('.arrow2').click(function(){
        
        if ($('#table2').is(":visible")) {
            $('#table2').hide();
        } else {
            $('#table2').show();
        }
        
        $('#table1').hide();
    });
});


     