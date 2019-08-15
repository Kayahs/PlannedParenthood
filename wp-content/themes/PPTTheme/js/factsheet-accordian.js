$(document).ready(() => {
  // for (i = 0; i <= 100; i++) {
  //   $(".plus-minus:eq( "+i+" )").on('click', function() {
  //     $(".plus-minus:eq( "+i+" )").text(function(_, txt) {
  //       return txt === "+" ? "-" : "+";
  //     })
  //   })
  // }
 
  $(".plus-minus:eq( 0 )").on('click', function() {
    $(".plus-minus:eq( 0 )").text(function(_, txt) {
      return txt === "+" ? "-" : "+";
    })
  })
  $(".plus-minus:eq( 1 )").on('click', function() {
    $(".plus-minus:eq( 1 )").text(function(_, txt) {
      return txt === "+" ? "-" : "+";
    })
  })
})