 //个人中心的折叠
 $('#myCollapsible').collapse({
    toggle: true,
  })
  //pc端
  $('#btnOff').on("click",function(){
    $('.row').toggleClass("active");//添加类
    if($('.row').hasClass("active")){
      $(this).text('显示')
    }else{
      $(this).text('隐藏')
      
    }
})
//手机端
let x1,y1;
$(window).on("touchstart",function(e){
  //开始坐标
    x1 = e.originalEvent.changedTouches[0].clientX;
    y1 = e.originalEvent.changedTouches[0].clientY;
});

$(window).on("touchend",function(e){
  //结束坐标
  let x = e.originalEvent.changedTouches[0].clientX;
  let y = e.originalEvent.changedTouches[0].clientY;

  //计算滑动距离
  let dx = x-x1;
  
  //滑动的距离大于等于100 就触发按钮的单击事件
  if(Math.abs(dx)>=100){
    $("#btnOff").trigger('click');
  }
});

