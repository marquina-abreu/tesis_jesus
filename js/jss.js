
$(document).ready(function(){$("#logear").click(function(){$.ajax({url : 'logearse.php',type: "POST",data : {usuario: $('#icon_prefix1').val(), clave: $('#icon_prefix2').val()}}).done(function(data) {if(data){$("#lab").html(data); } }).fail(function(data) {alert( "error" );}).always(function(data) {});});$("#agm").click(function(){$.ajax({url : 'inscribir.php',type: "POST",data : {m: $('#m').val(), u: $('#u').val()}}).done(function(data) {if(data){$("#lbmss").html(data); } }).fail(function(data) {alert( "error" );}).always(function(data) {});});
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.fixed-action-btn');
      var instances = M.FloatingActionButton.init(elems, {direction: 'left',hoverEnabled: false
       });
   });
  	 $('select').formSelect();$('input#icon_prefix, input#icon_prefix2, input#icon_prefix3,input#icon_telephone,input#icon_prefix4,input#icon_prefix5').characterCounter();$('.sidenav').sidenav();
  });