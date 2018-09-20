//按钮点击事件
$("#btn").on('click',function(){
    //获取表单的全部数据
    var formdata = $('#borrowForm').serialize();
    //发送ajax请求
    $.post('./api/borrowAdd.php',formdata,function(data){
        if(data.isSuccess){
            alert(data.msg);
            location.href = "./borrow_list.php";
        }else{
            alert(data.msg);
        }
    },"json")
})
