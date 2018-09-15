$(function () {
  $('[data-toggle="tooltip"]').tooltip();

  //注册表单id
  $('#regForm')
    .bootstrapValidator({
        message: 'This value is not valid', //失败的提示信息
        excluded: ':disabled',//关键配置，表示只对于禁用域不进行验证，其他的表单元素都要验证
        feedbackIcons: { //显示验证成功或者失败时的一个小图标
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: { //验证集合
      username: {
        message: '用户名不能为空',//默认提示信息
        validators: {
          notEmpty: {
            message: '用户名不能为空'
          },
          stringLength: {
            min: 6,
            max: 12,
            message: '用户名长度不能小于6~12位'
          },
        }
      },
      password: {
        message: '密码不能为空',//默认提示信息
        validators: {
          notEmpty: {
            message: '密码不能为空'
          },
          stringLength: {
            min: 6,
            max: 12,
            message: '用户名长度不能小于6~12位'
          },
        }
      },
      confirmPass: {
        message: '密码不能为空',//默认提示信息
        validators: {
          notEmpty: {
            message: '密码不能为空'
          },
          identical: {
            field: 'password',
            message: '密码不一致'
          },  
        }
      },
      phone: {
        message: '电话号码不能为空',//默认提示信息
        validators: {
          notEmpty: {
            message: '电话号码不能为空'
          },
          regexp: {
            regexp: /^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
            message: '格式不正确。'
          }
        }
      },
      email: {
        message: '邮箱不能为空',//默认提示信息
        validators: {
          notEmpty: {
            message: '邮箱不能为空'
          },
          emailAddress: {
            message: '邮箱格式不正确'
          }
        }
      },
    }
    })
    .on('success.form.bv', function(e) {
      // 阻止表单的默认提交行为
      e.preventDefault();

      // 获取表单实例
      var $form = $(e.target);

      // 获取验证实例  
      var bv = $form.data('bootstrapValidator');

      var data = $form.serialize();//获取表单的全部数据

      $.post('./api/userAdd.php',data,function(datas){
          if(datas.isSuccess){
            alert(datas.msg);
            location.href = './login.php';
          }else{
            alert(datas.msg);
          }
      },'json')
    })

   //登录表单id
   $('#loginForm')
   .bootstrapValidator({
       message: 'This value is not valid', //失败的提示信息
       excluded: ':disabled',//关键配置，表示只对于禁用域不进行验证，其他的表单元素都要验证
       feedbackIcons: { //显示验证成功或者失败时的一个小图标
       valid: 'glyphicon glyphicon-ok',
       invalid: 'glyphicon glyphicon-remove',
       validating: 'glyphicon glyphicon-refresh'
   },
   fields: { //验证集合
     username: {
       message: '用户名不能为空',//默认提示信息
       validators: {
         notEmpty: {
           message: '用户名不能为空'
         },
         stringLength: {
           min: 6,
           max: 12,
           message: '用户名长度不能小于6~12位'
         },
       }
     },
     password: {
       message: '密码不能为空',//默认提示信息
       validators: {
         notEmpty: {
           message: '密码不能为空'
         },
         stringLength: {
           min: 6,
           max: 12,
           message: '密码长度不能小于6~12位'
         },
       }
     },
     
   }
   })
   .on('success.form.bv', function(e) {
     // 阻止表单的默认提交行为
     e.preventDefault();

     // 获取表单实例
     var $form = $(e.target);

     // 获取验证实例  
     var bv = $form.data('bootstrapValidator');

     let data = $form.serialize();//获取表单的全部数据
    //发送post请求
     $.post('./api/userLogin.php',data,function(datas){
       //判断接收的数据是否为true
         if(datas.isSuccess){
          //  alert(datas.msg);
          let num = 5;
          $('#myModalLabel').text('登录成功'); //模态框标题
          //模态框内容
          $("#loginContent").html("<span class='glyphicon glyphicon-ok'></span>"+datas.msg+" <span id='num'>5</span>秒后跳转到个人中心")
          //jQuery触发模态框
          $('#loginModal').modal('show');
          //倒计时跳转指定页面
           let times = setInterval(()=>{
              num--;
              $('#num').text(num);
              if(num == 0){
                clearInterval(times);
                 location.href = './personal.php'; //跳转到指定
              }
           },1000)
          
         }else{
          //  alert(datas.msg);
           $('#myModalLabel').text('登录失败');
           $("#loginContent").html("<span class='glyphicon glyphicon-remove'></span>"+datas.msg+",请重新输入")
            $('#loginModal').modal('show');
         }
     },'json')
   })  
  //个人中心的折叠
  $('#myCollapsible').collapse({
    toggle: true
  })

})