<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linux-OSC</title>

    <!-- Start Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.css') }}">
    <!--End Fonts -->

    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/linux.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/layout/footer.css') }}" >

    <!--End Styles -->

    <!--Start Scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/linux.js') }}"></script>
    <!--End Scripts -->
</head>
<body>
<div class="container">
    <br>
    <br>

    <div class="panel-group" id="accordion">
        <!--start setup ubuntu step by step-->
        <div class="panel panel-default">
            <div id="div-pos1" class="panel-heading">
                <h4 class="text-pos1" class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" dir="rtl">سطب ubuntu خطوه بخطوه</a>
                </h4> 
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <h2 dir="rtl"><span style="color: #ff0000;">ملحوظات مهمة قبل ما نبدأ</span></h2><br>
                    <ul dir="rtl">
                        <li>
                            <span style="color: #ff6600;">لو كارت الشاشة بتاعك AMD/ATI:</span>
                        </li>
                        <p dir="rtl">AMD/ATI مش منزلة drivers للنسخة الجديدة من Ubuntu. معني كدا إن مفيش غير الـOpen Source Drivers.<br> طيب هو الـOpen Source Drivers دي وحشة؟ في ناس كتير في OSC شغالين بيها وزي الفل. في ناس تانية سبب لها مشاكل زي إن الجهاز يسخن أو الـGUI ميقومش وحاجات كدا.</p><br>
                        <p dir="rtl">لو لسا عايز تجرب حظك كمل قراية.</p>
                    </ul><br>

                    <ul dir="rtl">
                        <li>
                            <span style="color: #ff6600;">خد Backup:</span>
                        </li>
                        <p dir="rtl">يعني بجد خد backup علي الأقل للحاجات المهمة جداً علي جهازك. لو قريت واتبعت الخطوات بحذر إن شاء الله الdata بتاعتك هتكون في أمان. ممكن تحصل <br>مشاكل تانية بس الـdata بتاعتك في أمان. بس ليه تخاطر؟ أصل كلنا بنغلط وبتفلت مننا. خد backup عشان خاطري. لو مخدتش كمل بس ركز أوي الله يكرمك. </p><br>
                        <p dir="rtl">لو لسا عايز تجرب حظك كمل قراية.</p>
                    </ul><br>

                </div>
            </div>
        </div>
        <!--end setup ubuntu step by step-->

        <!--start  حاجات لازم تعملهم لما تصطب لينكس-->
        <div class="panel panel-default">
            <div id="div-pos2" class="panel-heading">
                <h4 class="text-pos2" class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" dir="rtl">٦ حاجات لازم تعملهم لما تصطب لينكس</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body"><p dir="rtl">دلوقتي عندك Ubuntu 16.04 علي جهازك؟ ألف مبروك D: بس في شوية حاجات كدا ضروري تعملها.</p>
                    </br>
                    <h2 dir="rtl"> ١- نزل ubuntu-restricted-extras</h2>
                    <p dir="rtl">لو لاحظت هتلاقي إنك مش عارف تشغل لا أغاني ولا أفلام. عشان كدا دي package فيها شوية codecs علي شوية حاجات tools كدا مفيدة. للأسف مش موجودة بشكل أساسي في Ubuntu لأسباب قانونية. بس لحسن الحظ سهل جداً ننزلها! D:</p>
                    <p dir="rtl">بكل بساطه دوس هنا! <br> <a href="apt://ubuntu-restricted-extras" target="_blank">Install Ubuntu Restricted Extras</a></p></br>
                    <p dir="rtl">أو ممكن تفتح الterminal وتكتب الcommand دا:</p></br>
                    <p dir="rtl">sudo apt install ubuntu-restricted-extras</p></br>

                    <p>
                    <p dir="rtl"><img src="images/pages images/linux/Screenshot(pic1).png"></p></br>
                    <p dir="rtl"><img src="images/pages images/linux/Screenshot(pic2).png"></p>
                    </p><br>

                    <p dir="rtl"><strong>بعدها هيطلب منك الpassword هتيجي تكتبها هتلاقيه مش بيكتب حاجة.</strong> hehe دا طبيعي متقلقش هو بياخد الpassword بتاعتك عادي بس مش بيعرض حاجة علي الشاشة عشان security وكدا D:</p><br>
                    <p dir="rtl">بس وبعد كدا انت هتعرف تكمل لوحدك عادي D:</p><br><br>

                    <h2 dir="rtl">٢- اعمل update.</h2>
                    <br>
                    <p dir="rtl">يا إما تعمل update عن طريق Ubuntu Software. يا إما من الterminal اكتب:</p><br>
                    <p dir="rtl">sudo apt upgrade</p><br><br>

                    <h2 dir="rtl">٣- غير صورة الbackground!</h2>
                    <br>
                    <p dir="rtl">بص هي أزواق بس أنا صورة الخلفية الأساسية بتاعة Ubuntu بتجيبلي اكتئاب D:</p><br><br>

                    <h2 dir="rtl">٤- نزل google chrome.</h2>
                    <br>
                    <p dir="rtl">دي طبعاً خطوة إختيارية بس مهمة بالنسبة لناس كتير. أولاً لأن في ناس كتير بتحب chrome أكتر.</p>
                    <p dir="rtl">غير كدا Adobe قررت إن Flash مش هيبقي supported علي Linux. رغم إن معظم المواقع الكبيرة بقت دلوقتي تشتغل من غير Flash زي Facebook و Youtube وغيرهم. إلا إن لسا في بعض المواقع بتحتاج Flash. و Google Chrome بينزل وجواه Flash built-in.</p>
                    <p dir="rtl">من غير رغي كتير لو عايز Google Chrome نزله من <a href="http://www.google.com/chrome/">هنا</a>.</p><br><br>

                    <h2 dir="rtl">٥- ثبت الterminal في الlauncher.</h2>
                    <br>
                    <p dir="rtl">صدق أو لا تصدق انت دلوقتي Linux user. دا معناه إنك هتستخدم الterminal كتير. فيستحسن تثبته في الlauncher عشان يبقي قريب منك.</p>
                    <p dir="rtl"><img src="images/pages images/linux/Screenshot(pic3).png"></p><br>
                    <p dir="rtl">زي ما في الصورة هتفتح الterminal و right click علي الicon بتاعته في الlauncher. وبعد كدا تختار Lock to Launcher.</p><br><br>

                    <h2 dir="rtl">٦- كلم صحابك عن Linux!</h2>
                    <br>
                    <p dir="rtl">لو مؤمن بفكر البرمجة الحرة وأن الsource code بتاع البرامج المفروض يبقي <br>مفتوح. فتخيل إن كل حاجة انت شايفها علي الشاشة دلوقتي أو مش شايفها حرة و Open Source!</p>
                    <p dir="rtl">من أول ما فتحت الجهاز لما طلعلك الmenu اللي بتختار منها عايز تخش علي<br> Ubuntu ولا Windows مروراً بالLogin Screen لغاية ما دخلت وفتحت الinternet وشغال دلوقتي. كل دا كود حر تقدر تشوفه وتعدل فيه!</p><br>
                    <p dir="rtl">لو مؤمن بجمال الفكرة دي كلم صحابك عنها! ((:</p><br><br></div>
            </div>
        </div>
        <!--end  حاجات لازم تعملهم لما تصطب لينكس-->

        <!--start shrouk descover linux-->
        <div class="panel panel-default">
            <div id="div-pos3" class="panel-heading">
                <h4 class="text-pos3" class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" dir="rtl">شروق تكتشف لينكس</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                    </div>
            </div>
        </div>
        <!--end shrouk descover linux-->

    </div>
</div>

@extends('layouts.footer')

</body>
</html>
