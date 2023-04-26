$(document).ready(function(){
  
  
  let scrollUp = $("<button>", {
    type: "button", 
    class: "btn-scroll-up"
  });
  let pageHeight = document.documentElement.scrollHeight;
  let screenHeight = $(window).innerHeight();
  
  scrollUp.append(
    $("<span>", {
      class: "material-symbols-outlined",
      text: "expand_less"
    })
  )
  
  function handleToTop(){
    $('html, body').animate({scrollTop: 0}, 'slow');
  }
  
  function onScrollMotion(){
    if($(window).scrollTop() > pageHeight / 3){
      scrollUp.addClass('show')
    }else{
      scrollUp.removeClass('show')
    }
  }
  
  if(pageHeight >= screenHeight * 2){
    scrollUp.appendTo("body")
    scrollUp.click(handleToTop)
    $(window).scroll(onScrollMotion)
  }  
  
})
