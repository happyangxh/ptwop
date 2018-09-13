$(function () {
  $('[data-toggle="tooltip"]').tooltip();

  //表单id
  $('.form-horizontal').bootstrapValidator({
    message: 'This value is not valid', //失败的提示信息
    excluded: ':disabled',//关键配置，表示只对于禁用域不进行验证，其他的表单元素都要验证
    feedbackIcons: {//显示验证成功或者失败时的一个小图标
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
  }).on('error.form.bv', function (e) {
    console.log('error');

    // Active the panel element containing the first invalid element
    var $form = $(e.target),
      validator = $form.data('bootstrapValidator'),
      $invalidField = validator.getInvalidFields().eq(0),
      $collapse = $invalidField.parents('.collapse');

    $collapse.collapse('show');
  });

})