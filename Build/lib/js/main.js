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




$('.projectLink').bind('singletap', function(e) { 

 $(this).css("color","#4091F2");
 var clicked = $(this).text();
e.preventDefault();
var myData = 'projectClicked='+ clicked;
jQuery.ajax({
type: "GET", // Post / Get method
url: "project.php", //Where form data is sent on submission
dataType:"html", // Data type, HTML, json etc.
data:myData, //Form variables
success:function(response){
//If we get success response hide content user wants to delete.
window.location.href = "projectView.php";
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
     $(ui.item[0]).children(".alert").removeClass("yellowAlert");
        $(ui.item[0]).children(".alert").removeClass("darkOrangeAlert");
        $(ui.item[0]).children(".alert").removeClass("redAlert");
        $(ui.item[0]).children(".alert").removeClass("greenAlert");
        
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
        if(ui.item.index()<urgent) {
        $(ui.item[0]).children(".alert").addClass("redAlert");
        $(ui.item[0]).children(".alert").removeClass("darkOrangeAlert");
        $(ui.item[0]).children(".alert").removeClass("yellowAlert");
        $(ui.item[0]).children(".alert").removeClass("greenAlert");
         }
         
         if(ui.item.index()>urgent && ui.item.index()<=medium) {
        $(ui.item[0]).children(".alert").addClass("darkOrangeAlert");
        $(ui.item[0]).children(".alert").removeClass("redAlert");
        $(ui.item[0]).children(".alert").removeClass("yellowAlert");
        $(ui.item[0]).children(".alert").removeClass("greenAlert");
         }


         if(ui.item.index()>medium && ui.item.index()<=lower) {
        $(ui.item[0]).children(".alert").addClass("yellowAlert");
        $(ui.item[0]).children(".alert").removeClass("darkOrangeAlert");
        $(ui.item[0]).children(".alert").removeClass("redAlert");
        $(ui.item[0]).children(".alert").removeClass("greenAlert");
         }
         
            if(ui.item.index()>lower) {
        $(ui.item[0]).children(".alert").addClass("greenAlert");
        $(ui.item[0]).children(".alert").removeClass("darkOrangeAlert");
        $(ui.item[0]).children(".alert").removeClass("redAlert");
        $(ui.item[0]).children(".alert").removeClass("yellowAlert");
         }
         
         
                     var whatsAlert = $(ui.item[0]).children(".alert").attr('class').split(' ')[1];
                     //$(whatsAlert).text().replace(/ /g,'');
                     var whatWasClicked = parseInt($(ui.item[0]).attr('name'));

         jQuery.ajax({
type: "GET", // Post / Get method
url: "updatePOS.php", //Where form data is sent on submission
dataType:"html", // Data type, HTML, json etc.
data:{ 
theID: sorted, 
theAlert: whatsAlert,
whatClicked: whatWasClicked,
},
success:function(response){
//If we get success response hide content user wants to delete.
},
error:function (xhr, ajaxOptions, thrownError){
//On error, we alert user
alert(thrownError);
}
});

    }
    
});
$( "#sortable" ).disableSelection();
});



});
