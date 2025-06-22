$(document).ready(function () {

    $('.resetDB').on('click', function (event) {
        event.preventDefault(); // Linkin hemen çalışmasını engelle
        var link = $(this).attr('href'); // Linkin href değerini al

        // Onay kutusunu göster
        var result = confirm("Bu işlemi yapmak istiyor musunuz?");
        if (result) {
            // Evet butonuna basılırsa linkin href değerine git
            window.location.href = link;
        }
    });

    $click = 0;
    $("body").on('click', '.usomcheck', function () {
        $click++;
        if ($click > 10) {
            toastr.error("çok fazla istek yaptın yasaklandın")
            return false;
        }
        let $domain = $(this).data('domain');

        $.ajax({
            type: 'POST',
            url: '/hacininyeri/singleCheck',
            dataType: 'json',
            data: { domain: $domain },
            success: function (response) {
                let result = response;
                if (result.status == 'success') {
                    toastr.error("Site USOM listesinde", "DIKKAT");
                    return false;
                }

                toastr.success("Site USOM listesinde değil", "AKTIF");

            }
        });

        return false
    });
})