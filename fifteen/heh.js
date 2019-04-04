/*<![CDATA[*/

$(window).bind('load',function(){
    'use strict';
    $('#introduction-video').trigger('play');
});


$(function(){
    $('html, body').animate({
        scrollTop: $('.bottom').offset().top
    }, 20000);

});


$(function(){



 $('pre').t({

    caret:'<span style="color:blue;">|</span>',
    speed:50,
    delay:5,

    typing:function(e,t,l,c){

      if(/\u200c/.test(c)){
       $(e).t('pause');    
      }
      
      if(c=='\u200d'){
       $(e).find('del').animate({_:1},{duration:5e2,complete:function(){$(this).addClass('blue');}});
      }
     
    }  


}).click(function(){$(this).t('pause',false);});





});


$(function() {function handle_mousedown(e){
    window.my_dragging = {};
    my_dragging.pageX0 = e.pageX;
    my_dragging.pageY0 = e.pageY;
    my_dragging.elem = this;
    my_dragging.offset0 = $(this).offset();
    function handle_dragging(e){
        var left = my_dragging.offset0.left + (e.pageX - my_dragging.pageX0);
        var top = my_dragging.offset0.top + (e.pageY - my_dragging.pageY0);
        $(my_dragging.elem)
        .offset({top: top, left: left});
    }
    function handle_mouseup(e){
        $('body')
        .off('mousemove', handle_dragging)
        .off('mouseup', handle_mouseup);
    }
    $('body')
    .on('mouseup', handle_mouseup)
    .on('mousemove', handle_dragging);
}
$('.box-computer').mousedown(handle_mousedown);
});


/*]]>*/