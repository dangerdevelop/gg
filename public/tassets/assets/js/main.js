var language = 'tr';
var validDateArray = null;

function popup(pageURL, title, w, h) {
                    var left = (screen.width / 2) - (w / 2);
                    var top = (screen.height / 2) - (h / 2) - 100;
                    var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, width=' + w + ', height=' + h + ' copyhistory=no, top=' + top + ', left=' + left);
                    newWin.focus();
                }

function formatDate(gun, ay, yil){
    var sGun = gun;
    if(gun < 10) {
        sGun = '0' + sGun;
    }

    var sAy = ay;
    if(ay < 10) {
        sAy = '0' + ay;
    }

    return sGun + '/' + sAy + '/' + yil
}

Number.prototype.formatTutar = function(c, d, t){
var n = this,
    c = isNaN(c = Math.abs(c)) ? 2 : c,
    d = d == undefined ? "," : d,
    t = t == undefined ? "." : t,
    s = n < 0 ? "-" : "",
    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
    j = (j = i.length) > 3 ? j % 3 : 0;

    var retval = s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    return retval;
};


$(document).click(function(){
    $(".btn-folder-wrap ul").hide();
    $(".search-overlay").remove();
});

$(function () {

    // Tooltip
    $('.question-mark').click(function () {
        $(this).parents('.tooltip').addClass('open');

        /* Search Tooltip */
        if ($(this).parents('#site-header').length && !$('.tooltip-overlay').length) {
            $('#site-header .search-slider').glide({
                autoplay: false,
                animationDuration: 200,
                arrows: false,
                circular: false,
                navigationCenter: false
            });
            $('#site-header .search-slider .slides').height(170); // FIX for chrome
            $('body').append('<div class="tooltip-overlay"/>');

            $(".tooltip-overlay").click(function () {
                $('.search .got-it').click();
            });
        }
    });

    $('.question-mark-pfm').click(function () {
        $(this).parents('.tooltip').addClass('open');

        /* Search Tooltip */
        if (!$('.tooltip-overlay').length) {
            $('body').append('<div class="tooltip-overlay"/>');
            $(".tooltip-overlay").click(function () {
                $('.search .got-it').click();
            });
        }
    });

     /* Search Tooltip */
    $('.search .got-it-pfm').click(function () {
        $(this).parents('.tooltip').removeClass('open');
        $('.tooltip-overlay').remove();
    });

    /* Search Tooltip */
    $('.search .got-it').click(function () {
        $(this).parents('.tooltip').removeClass('open');
        $('.tooltip-overlay').remove();
    });

    /* Logo Tooltip */
    $('.header-bottom .tip-slider').glide({
        autoplay: false,
        animationDuration: 200,
        arrows: false,
        circular: false,
        navigationCenter: false
    });

	$(function() {
        $.datepicker.regional['tr'] = {
                closeText: 'kapat',
                prevText: '&#x3c;geri',
                nextText: 'ileri&#x3e',
                currentText: 'bugün',
                monthNames: ['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran', 'Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'],
                monthNamesShort: ['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran', 'Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'],
                dayNames: ['Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi'],
                dayNamesShort: ['Pz','Pt','Sa','Ça','Pe','Cu','Ct'],
                dayNamesMin: ['Pz','Pt','Sa','Ça','Pe','Cu','Ct'],
                weekHeader: 'Hf',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: '',
                yearRange: '-100:+2'
        };

        $.datepicker.regional['en'].dateFormat = 'dd/mm/yy'; // Tarih formati int sube icin hem bu sekilde

        $.datepicker.setDefaults($.datepicker.regional[language]);

        var dateInputs = $('.datepicker');
        $.each(dateInputs, function(){
            $(this).datepicker({
                minDate: $.datepicker.parseDate("dd/mm/yy", $(this).data("mindate") ),
                maxDate: $.datepicker.parseDate("dd/mm/yy", $(this).data("maxdate") ),
                changeMonth: true,
                changeYear: true,
                showOn: "both",
                buttonImage: "assets/img/tarih-ico.png",
                beforeShowDay : function(dateText){
                    if(validDateArray == null){
                        return [true];
                    }
                    var string = jQuery.datepicker.formatDate('dd/mm/yy', dateText);
                    return [ validDateArray.indexOf(string) > -1 ]
                },
                onSelect :  function (dateText){
                    var selectedDate = dateText.split('/');

                    var gun = $('input[name=' + $(this).data("gun") + ']');
                    var  ay = $('input[name=' + $(this).data("ay")  + ']');
                    var yil = $('input[name=' + $(this).data("yil") + ']');

                    var indexOfItem = 0;
                    if(gun.length > 1) {
                        indexOfItem = $('input[name=' + this.name + ']').index(this);
                    }

                    $( gun[indexOfItem] ).val(selectedDate[0]);
                    $(  ay[indexOfItem] ).val(selectedDate[1]);
                    $( yil[indexOfItem] ).val(selectedDate[2]);

                    this.onchange();
                }
            });
        });
    });

	// Search Autocomplete
    $.widget('ui.autocomplete', $.ui.autocomplete, { /* Customize _renderItem and _renderMenu methods */
        _renderItem: function(ul, item) {
            var linkStyle = "";
            if( item.url == null || item.url == ""){
                linkStyle = "cursor:text;"
            }

            return $('<li/>').append('<a href="#" data-url="' + item.url + '" onclick="openSearchResult(this); return false;" style="' + linkStyle + '"><span class="left">' + item.label + '<\/span><span class="right">' + item.desc + '<\/span><\/a>').appendTo(ul);
        },
        _renderMenu: function(ul, items) {
            var that = this;
            $(ul).addClass('custom-ac-menu');
            $.each(items, function(index, item) {
                that._renderItemData(ul, item);
            });
            $(ul).append('<li class="last"><a href="#" onclick="showAllSeachItems(\'' +  lastSearchText + '\');return false;">' + getMessageKey(language,'c.tum.sonuclari.goster') +'<i><\/i><\/a><\/li>');
        }
    });

	$(".account-list li").hover(function(e) {
        $(this).find(".new-list").css("display","block");
    },function(){
		$(this).find(".new-list").css("display","none");
	});


	// Custom Select
	$('.custom-select').selectmenu({
        create: function( event, ui ) {
            if($(this).hasClass("lit")){
                // Eger ozel setlenmis ise onu kullanalım
                var selectWidth = parseInt(  $(this).css("width") );
                $(this).selectmenu("option", "width", selectWidth);
            } else {
                $(this).selectmenu("option", "width", "100%");
            }
        }
    });

    // Account Select Menu
    $('.account-select .selected').click(function () {
        if($('.account-select .selected').parent().attr('isDisabled') != "null")
        {
            return;
        }

        $(this).parents('.account-select').toggleClass('open');
    });
    $('.account-select .account-menu .account').on('click',function(){
        $(this).parents('.account-select').toggleClass('open')
        //console.log($(this));
    });
    $('.account-select .account-group .account').click(function () {
        var topElement = $(this).parent().parent().parent();
        topElement.find(".selected").html($(this).html()).click();

        // Eski degerleri silelim
        var accountGroups = topElement.find(".account-group");
        $.each(accountGroups, function(){
            var accGrpFldName = $(this).data("field-name");
            $( "input[name='" + accGrpFldName  + "']" ).val("");
        });

        // Yeni degeri ata
        var newValue = $(this).find(".data-fields").data('radio');
        var fieldName = $(this).parent().data("field-name");

        $( "input[name='" + fieldName  + "']" ).val(newValue);
    });

    $(document).mouseup(function(e)
    {
        var containers = $(".account-select .selected");
        for(var i=0; i < containers.length; i++){
            var container = $(containers.get(i));
            if (!container.is(e.target)&& container.has(e.target).length === 0)
            {
                if( ! $(e.target).hasClass("account-menu")) {
                    container.parents('.account-select.open').toggleClass('open');
                }
            }
        }
    });

    // Payments Page
    $('.payment-tabs, .payment-inner-tabs, .lt-tabs-container').tabs({
        activate: function(event, ui) {
            if( ui.newTab.find("a")[0].onclick != "" &&  ui.newTab.find("a")[0].onclick != null)
            {
                //ui.newTab.find("a")[0].onclick();
            }
        }
    });


    $('.custom[type="radio"]').iCheck();
    $('.custom[type="checkbox"]').iCheck();

    $('.custom[type="radio"]').on('ifClicked', function(event){
        event.target.click();
    });

    $('.custom[type="checkbox"]').on('ifClicked', function(event){
        event.target.click();
    });

    function formatDataToSort(pTarih){
        var alanlar = pTarih.split("/");
        return alanlar[2] + alanlar[1] + alanlar[0];
    }

    jQuery.fn.dataTableExt.oSort['tarih-asc']  = function(a,b) {
        var tar1 = formatDataToSort(a);
        var tar2 = formatDataToSort(b);

        return ((tar1 < tar2) ? -1 : ((tar1 > tar2) ? 1 : 0));
    }
    jQuery.fn.dataTableExt.oSort['tarih-desc'] = function(a,b) {
        var tar1 = formatDataToSort(a);
        var tar2 = formatDataToSort(b);

        return ((tar1 < tar2) ? 1 : ((tar1 > tar2) ? -1 : 0));
    }

     jQuery.fn.dataTableExt.oSort['tutar-asc']  = function(a,b) {
        var tutar1 = parseFloat(FormatClean(a));
        var tutar2 = parseFloat(FormatClean(b));

        return ((tutar1 < tutar2) ? -1 : ((tutar1 > tutar2) ? 1 : 0));
    }
    jQuery.fn.dataTableExt.oSort['tutar-desc'] = function(a,b) {

        var tutar1 = parseFloat(FormatClean(a));
        var tutar2 = parseFloat(FormatClean(b));

        return ((tutar1 < tutar2) ? 1 : ((tutar1 > tutar2) ? -1 : 0));
    }


    function aoColumnsForTable(pTable){
        var aoColumns = [];

        var headers = $(pTable).find("th");
        for(var i=0; i<headers.length;i++){
            var dataType = $(headers[i]).data("type");
            if(dataType == null ) dataType = "";
            aoColumns[i] = {
                sType: dataType
            };
        }

        return aoColumns;
    }

    var tables = $('.table');
    $.each(tables, function(){
        var thisTable = $(this);
        var trList = $(this).find('tbody tr');
        $.each(trList, function(){
            var tdlist = $(this).find('td');
            $.each(tdlist, function(){
                var colspan  = $(this).attr("colspan");
                if(colspan != undefined){
                    for(var i = 0; i < colspan-1; i++){
                       $(this).after('<td>');
                    }
                }
            });
        });
        $(this).dataTable({
            paging: false,
            ordering: !$(this).hasClass("nosort"),
            "aaSorting": [] , // disable init sort,
            aoColumns: aoColumnsForTable(this),
            bFilter: $(this).hasClass("hesapHareketTable"),
            language: {
                emptyTable: getMessageKey(language ,'errors.general'),
                search: "",
                searchPlaceholder: getMessageKey(language ,'c.detayli.arama')
            },
            createdRow: function( nRow, aData, iDataIndex){
                var tdList = $(nRow).find('td');
                $.each(tdList,function(){
                    var colspan = $(this).attr("colspan");
                    if(colspan != undefined){
                        for(var i = 0; i < colspan-1; i++){
                           $(this).next().remove();
                        }
                    }
                });
            },
            drawCallback : function() {
                var ThList = thisTable.find("thead tr th");
                $.each(ThList, function(key,value){
                    if($(this).hasClass('right')){
                        thisTable.find("tr td:nth-child(" + (key + 1) + ")").addClass("right");
                    }
                });
            }
        });
    });

    var tablesForGrouping = $('.table_grouping');
    $.each(tablesForGrouping,function(){
        var thisTable = $(this);
        thisTable.dataTable({
            paging: false,
            ordering: !thisTable.hasClass("nosort"),
            "aaSorting": [], // disable init sort
            drawCallback : function() {
                var rightThList = thisTable.find("thead tr th.right");
                $.each(rightThList, function(){
                    var classIndex = $(this).prop('cellIndex');
                    if (classIndex != -1) {
                        thisTable.find("tr td:nth-child(" + (classIndex + 1) + ")").addClass("right");
                    }
                });
            }
        }).rowGrouping();
    });

    var tablesForGroupTotal = $('.table_groupTotal');
    $.each(tablesForGroupTotal,function(){
        // Data table row group total res.
        var thisTable = $(this);
        $(this).dataTable({
            "paging": false,
            "columnDefs":
            [
                { type: 'date-uk', targets: 0 },
                { type: 'turkish', targets: 1 },
                { type: 'currency', targets: 1 },
                { type: 'currency', targets: 2 },
                { type: 'currency', targets: 3 },
                { type: 'currency', targets: 4 }
                //{ type: 'numeric-comma', targets: 4 }
            ],
            "bStateSave": false,
            "aoColumnDefs": [{ "bVisible": false, "aTargets": [$(this).find('th').length-1]}],
            ordering: !$(this).hasClass("nosort"),
            "aaSorting": [], // disable init sort
            //"aaSortingFixed": [[6, 'desc']],
            //"aaSorting": [[5, 'asc']],
            "fnDrawCallback": function(oSettings) {
                if (oSettings.aiDisplay.length == 0) {
                    return;
                }
                // GROUP ROWS
                var nTrs = $(this).find('tbody tr');
                var iColspan = nTrs[0].getElementsByTagName('td').length;
                var sLastGroup = "";
                for (var i = 0; i < nTrs.length; i++) {
                    nTrs[i].getElementsByTagName('td')[iColspan - 1].style.display = 'none';
                    var iDisplayIndex = oSettings._iDisplayStart + i;
                    var sGroup = oSettings.aoData[oSettings.aiDisplay[iDisplayIndex]]._aData[iColspan - 1];
                    if (sGroup != sLastGroup) {
                        var nGroup = document.createElement('tr');
                        var nCell = document.createElement('td');
                        nCell.colSpan = iColspan;
                        nCell.className = "group";
                        nCell.innerHTML = sGroup;
                        nGroup.appendChild(nCell);
                        nTrs[i].parentNode.insertBefore(nGroup, nTrs[i]);
                        sLastGroup = sGroup;
                    }
                }
                // TOTAL COLUMNS WITHIN GROUPS
                var total = 0;
                var totalCellIndex = $(this).find("thead th.total").index();
                $(this).find("tbody tr").each(function(index) {
                    if ($(this).find('td:first.group').html()) {
                        total = 0;
                    } else {
                        total = parseFloat(total) + parseFloat(FormatClean(this.cells[totalCellIndex].innerHTML));
                        $(this).closest('tr').prevAll('tr:has(td.group):first').find("span").html(total.formatTutar());
                    }
                });

                var totalThW = $(this).find("thead .total").width();
                var totalNextW = $(this).find("thead .total").nextAll().width();
                $(this).find("tbody td.group div").css({"width": totalThW, "margin-right": totalNextW, "text-align":"right"});

                var rightThList = thisTable.find("thead tr th.right");
                $.each(rightThList, function(){
                    var classIndex = $(this).prop('cellIndex');
                    if (classIndex != -1) {
                        thisTable.find("tr td:nth-child(" + (classIndex + 1) + ")").addClass("right");
                    }
                });
            }
        });
    });

    $(".table-wrap tr:odd td").css( "background-color", "#f6f6f6" );


    $(".card-box").click(function(){
        $(this).css("height", "auto");
        $(this).parent().find(".card-mini").slideToggle();
        $(this).parent().find(".card-box-detail").slideToggle();
        return false;
    });

    $(".iradio").removeClass("checked");

	$(".iradio ins").click(function(e) {
		//$(".iradio").removeClass("checked");
        //FIXME $(this).parent().addClass("checked");
    });

    $(".lt-closed").click(function(){
        $(".lt-overlay, .lightbox").fadeOut();

        $.each($("video"),function(){
            this.pause(); // Videolar dursun.
        });

        return false;
    });
    $(".lt-overlay.login").click(function(){
        $(".lt-overlay, .lightbox").fadeOut();
        return false;
    });

    $(".collapse-link").click(function(){
        if($(this).parents(".sub-header").hasClass("active") == true) {
            $(this).parents(".sub-header.open").hide();
            $(".sub-header.closed").show();
            //$(".tab-view-btn").css("top","46px")
        }
        else {
            $(this).parents(".sub-header.closed").hide();
            $(".sub-header.open").show();
            //$(".tab-view-btn").css("top","135px")

        }
    });

    $(".btn-folder-wrap .btn-folder").click(function(){
        $(this).parent().find("ul").toggle();
        $(this).toggleClass("active");
        if($(this).hasClass("active")) {
            $('body').append('<div class="search-overlay"/>').show();
        }
        else {
            $('.search-overlay').remove();
        }
        return false;
    });


    $(".avatar").click(function(){
        $(".avatar-upload").show();
    });

    $("a#boxList").click(function() {
        $("#accountListTable").slideUp();
        $("#accountListBoxes").slideDown();
        $("#draggabletListBoxes").slideDown();
        $("a#tableList").removeClass("active");
        $(this).addClass("active");
        $("#accountListaddNewBox").slideUp();

        TEB.Service.call("LayoutService.setListeGosterimSecim",  "{listeEH:'H'}", funcNoop, funcHatali);

        if($(this).hasClass("link")) {
            return true;
        }

        return false;
    });
    $("a#tableList").click(function() {
        $("#accountListBoxes").slideUp();
        $("#draggabletListBoxes").slideUp();
        $("#accountListTable").slideDown();
        $("a#boxList").removeClass("active");
        $(this).addClass("active");
        $("#accountListaddNewBox").slideDown();

        TEB.Service.call("LayoutService.setListeGosterimSecim",  "{listeEH:'E'}", funcNoop, funcHatali);

        if($(this).hasClass("link")) {
            return true;
        }
        return false;
    });

    // Accordion Init
    $('.accordion-title').accordion();

    // Detailed Search Box Func.
    $("#DataTables_Table_0_filter").click(function() {
        $("#detailed-search-box").slideToggle();
        return false;
    });
    $("#detailed-search-box .close").click(function() {
        $("#detailed-search-box").slideUp();
        return false;
    });

    $('input.custom.error').parent().addClass('error');

    var radioInputs = $('input[type=radio]');
    $.each(radioInputs, function(){
        if($(this).is(':checked')==true){
            $(this).parent().addClass('checked');
        }
    });

	$('table.paginated').each(function() {
    var currentPage = 0;
    var numPerPage = 5;
    var $table = $(this);
    $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
    });
    $table.trigger('repaginate');
    var numRows = $table.find('tbody tr').length;
    var numPages = Math.ceil(numRows / numPerPage);
    var $pager = $('<div class="pager"><\/div>');
    for (var page = 0; page < numPages; page++) {
        $('<span class="page-number"><\/span>').text(page + 1).bind('click', {
            newPage: page
        }, function(event) {
            currentPage = event.data['newPage'];
            $table.trigger('repaginate');
            $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($pager).addClass('clickable');
    }
    $pager.insertAfter($table).find('span.page-number:first').addClass('active');
  });

    // Max Latter Fix Func.
    $(function () {
        $(".maxLength").each(function(index){
            var latterText = $(this).text();
            var latterSize = $(this).text().length;
            var letterLimit = $(this).data("max");
            if(latterSize > letterLimit)
            {
                $(this).text(latterText.substr(0,letterLimit)+'..');
            }
        });

        /*
        $(".maxLetter").each(function(index, val) {
            var latterText = $(this).text();
            var latterSize = $(this).text().length;
            var letterLimit = $(this).data("count");

            if(latterSize > letterLimit){
                $(index).html(latterText.substr(0,letterLimit));
                $(index).html(latterSize-1);
            }

            console.log(index + ': ' + latterSize + ' - ' + letterLimit);
        });
        */
    });

    // Calendar Init Func.
    $('#custom-next').on( 'click', function() {
        cal.gotoNextMonth( updateMonthYear );
        $('#month-number').html( cal.getMonth() );
        $('.fc-calendar .fc-row div').each(function() {
            if ( $(this).children("span").hasClass("fc-date") )
            {  }
            else {  $(this).addClass("oldDay");  }
        });
    });

    $('#custom-prev').on( 'click', function() {
        cal.gotoPreviousMonth( updateMonthYear );
        $('#month-number').html( cal.getMonth() );
        $('.fc-calendar .fc-row div').each(function() {
            if ( $(this).children("span").hasClass("fc-date") )
            {  }
            else {  $(this).addClass("oldDay");  }
        });
    });

    function updateMonthYear() {
        $month.html( cal.getMonthName() );
        $year.html( cal.getYear() );
    }

    $('.fc-calendar .fc-row div').each(function() {
        if ( $(this).children("span").hasClass("fc-date") )
        {  }
        else {  $(this).addClass("oldDay");  }
    });

    $(document).on( "click", ".fc-calendar .fc-row .fc-content", function() {
        if ( $(this).children("span").hasClass("fc-date") )
        {
            var selDateDay = $(this).children(".fc-date").text();
            var selDateMonthNumber = $("#month-number").text();
            var selDateMonthName = $("#custom-month").text();
            var selDateYear = $("#custom-year").text();
            $(".lightbox.calendar .date").html(selDateDay + ' ' + selDateMonthName + ' ' + selDateYear);

            fillLightBox(formatDate(selDateDay, selDateMonthNumber, selDateYear));

            $(".lt-overlay.calendar").fadeIn();
            $(".lightbox.calendar").fadeIn();
        }
        else { return false; }
    });

    // Pie Chart Func.
    var doughnutData = [
        {
            value: 290,
            color:"#e76049"
        },
        {
            value: 70,
            color: "#f36d12"
        },
        {
            value: 100,
            color: "#f39c12"
        },
        {
            value: 50,
            color: "#00af4a"
        },
        {
            value: 120,
            color: "#2270ba"
        }

    ];


    /* FIXME

    $(function() {
        var ctx = $("#pfm-chart").get(0).getContext("2d");
        var myDoughnutChart = new Chart(ctx).Doughnut(doughnutData, {
            responsive : true,
            animation: false,
            showTooltips: false,
            percentageInnerCutout : 60
        });
    });


    // Bar Chart Func.
    $(function () {
        $('#barChart').highcharts({
            chart: {
                type: 'bar'
            },
            title: false,
            subtitle: false,
            xAxis: {
                categories: ['İşkur', 'Merit', 'Kstur', 'Tcell'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: false,
                labels: {
                    overflow: 'justify'
                }
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            credits: { enabled: false },
            series: [{
                name: 'Başlık 1',
                data: [107, 31, 125, 203]
            }, {
                name: 'Başlık 2',
                data: [133, 156, 312, 408]
            }, {
                name: 'Başlık 3',
                data: [245, 354, 400, 49]
            }]
        });
    });
*/
    // IOS Button Func.
    $('.ios-button').on( 'click', function(event) {
        var action;

        if ($(this).hasClass("on") ) {
            action = $(this).data("disabled-action");
        } else if ($(this).hasClass("off") ) {
            action = $(this).data("enabled-action");
        }

        var retVal = eval(action);
        if( retVal == false) {
            return false;
        }

        if ($(this).hasClass("on") ) {
            $(this).animate({marginLeft:"-72px"}, 300);
            $(this).addClass("off");
            $(this).removeClass("on");
        }
        else if ($(this).hasClass("off") ) {
            $(this).animate({marginLeft:"0"}, 300);
            $(this).addClass("on");
            $(this).removeClass("off");
        }

        return false;
    });

    // IE8 Nth Child Fix
    $(".btn-folder-wrap ul li:last-child").addClass("last");
    $(".card-list li:nth-child(3n)").addClass("marRight0");
    $(".card-list li.marRight0").next().css("clear", "both");

});