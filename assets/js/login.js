$(function() {
    
    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $("#login-form").submit(function () {
        switch(this.id) {
            case "login-form":
                var $lg_username=$('#login_username').val();
                var $lg_password=$('#login_password').val();
                if ($lg_username == "ERROR") {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
                } else {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
                }
                return false;
                break;
            case "lost-form":
                var $ls_email=$('#lost_email').val();
                if ($ls_email == "ERROR") {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Send error");
                } else {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Send OK");
                }
                return false;
                break;
            case "register-form":
                var $rg_username=$('#register_username').val();
                var $rg_email=$('#register_email').val();
                var $rg_password=$('#register_password').val();
                if ($rg_username == "ERROR") {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Register error");
                } else {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Register OK");
                }
                return false;
                break;
            default:
                return false;
        }
        return false;
    });
    
    $('#login-btn').click( function () {
        var $lg_email = $('#login_username').val();
        var $lg_password = $('#login_password').val();
        var $lg_valid = ($.trim($lg_email).length != 0 && $.trim($lg_password).length != 0);
        if($lg_valid){
            $.ajax({
            type: "POST",
            url: "/index.php/login",
            data: $("#login-form").serialize(), // serializes the form's elements.
            success: function(data)
            {
                if(data==1){
                    window.location.href = "/index.php/home/index";
                }else{
                    $('#logerror').html('The email or password you entered is incorrect.');
                }
            }
          });
        }
    });

    $('#reg-btn').click( function () {
        var $reg_email = $('#register_email').val();
        var $reg_password = $('#register_password').val();
        var $reg_password_2 = $('#register_password_2').val();
        var $reg_valid = ($.trim($reg_email).length != 0 && $.trim($reg_password).length != 0 && $.trim($reg_password_2).length != 0 && ($.trim($reg_password) === $.trim($reg_password_2)));
        if($reg_valid){
            $.ajax({
            type: "POST",
            url: "/index.php/signup",
            data: $("#register-form").serialize(), // serializes the form's elements.
            success: function(data)
            {
                console.log(data);
                // if(data==1){
                //     window.location.href = "/index.php/home/main";
                // }else{
                //     $('#regerror').html('Reg Error');
                // }
            }
          });
        }
    });

    $('#login_register_btn').click( function () { 
        modalAnimate($formLogin, $formRegister);
        $('#register_login_btn').removeClass("select");
        $('#regerror').html('');
        $('#login_register_btn').addClass("select");
    });
    $('#register_login_btn').click( function () { 
        modalAnimate($formRegister, $formLogin); 
        $('#login_register_btn').removeClass("select");
        $('#logerror').html('');
        $('#register_login_btn').addClass("select");
    });
    // $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    // $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    // $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    // $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
    
    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $oldForm.hide();
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }
    
    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }
    
    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("glyphicon-chevron-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("glyphicon-chevron-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
  		}, $msgShowTime);
    }
});