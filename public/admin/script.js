$(document).ready(function () {

    $('.resetDB').on('click', function(event) {
        event.preventDefault(); // Linkin hemen çalışmasını engelle
        var link = $(this).attr('href'); // Linkin href değerini al

        // Onay kutusunu göster
        var result = confirm("Bu işlemi yapmak istiyor musunuz?");
        if (result) {
            // Evet butonuna basılırsa linkin href değerine git
            window.location.href = link;
        }
    });
})