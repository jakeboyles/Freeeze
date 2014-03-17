$(document).ready(function(){
$('.list-item').bind('doubletap', function(e) { 

 $(this).css("color","red");
 var clicked = $(this).attr('name');
e.preventDefault();
var myData = 'recordToDelete='+ clicked;
jQuery.ajax({
type: "GET", // Post / Get method
url: "response.php", //Where form data is sent on submission
dataType:"html", // Data type, HTML, json etc.
data:myData, //Form variables
success:function(response){
//If we get success response hide content user wants to delete.
$('div[name="'+clicked+'"]').fadeOut('Slow');
},
error:function (xhr, ajaxOptions, thrownError){
//On error, we alert user
alert(thrownError);
}
});
})


$(function() {
$( "#sortable" ).sortable({
 cancel: ".ui-state-disabled",
axis: 'y',
scroll: true,
   stop: function(event, ui) {
             
   var sorted = $( "#sortable" ).sortable( "toArray", { attribute: "name" } );
 var highest = $.map($(this).find('div'), function(el) {
 			if(el.id=="highest"){
                return $(el).index();
                }
            });
            
             var urgent = $.map($(this).find('div'), function(el) {
 			if(el.id=="urgent"){
                return $(el).index();
                }
            });
            
              var medium = $.map($(this).find('div'), function(el) {
 			if(el.id=="medium"){
                return $(el).index();
                }
            });
            
             var lower = $.map($(this).find('div'), function(el) {
 			if(el.id=="lower"){
                return $(el).index();
                }
            });
            
            var dragged = $( "#sortable" ).sortable( "toArray",{ attribute: "name" } );
           for(i=0;i<dragged;i++){
	           
           } 

       
   var size = $('#sortable li').length;

         
         
                     var whatsAlert = $(ui.item[0]).children(".alert").attr('class').split(' ')[1];
                     //$(whatsAlert).text().replace(/ /g,'');
                     var whatWasClicked = parseInt($(ui.item[0]).attr('name'));

        
    }
    
});
$( "#sortable" ).disableSelection();
});



});
