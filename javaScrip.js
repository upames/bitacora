$(document).ready(function(){

  $("#abierto").click(function(){

      $("#login form").slideToggle(300);
      $(this).toggleClass("cerrado");
      });
});
