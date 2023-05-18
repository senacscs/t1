for (i=0;i<1;i++)//i++ é igual a i=i=1
    alert ("Bem vindo a minha index")

//<![CDATA[
$(window).on('load', function () { // makes sure the whole site is loaded 
    $('#preloader .inner').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(200).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(200).css({'overflow': 'visible'});
})
//]]>