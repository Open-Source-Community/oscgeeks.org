@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/Linux.css') }}"> 
@endsection

@section('content')
    <div class="container">
    <div class="wow bounceIn" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
        <div class="text-center">
            <h1 class="hvr-grow">Linux Committee</h1>
            <img class="img-responsive" src="{{asset('/images/Background/4.jpg')}}">
        </div>
    </div>
        <br>
     <div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
        <div class="panel-group" id="accordion">
            <!--start setup ubuntu step by step-->
            <div class="panel panel-default">
                <div id="div-pos1" class="panel-heading">
                    <h4 class="text-pos1" class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" dir="rtl">سطب ubuntu خطوه
                            بخطوه</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <h2 dir="rtl"><span style="color: #ff0000;">ملحوظات مهمة قبل ما نبدأ</span></h2><br>
                        <ul dir="rtl">
                            <li>
                                <span style="color: #ff6600;">لو كارت الشاشة بتاعك AMD/ATI:</span>
                            </li>
                            <p dir="rtl">AMD/ATI مش منزلة drivers للنسخة الجديدة من Ubuntu. معني كدا إن مفيش غير الـOpen
                                Source Drivers.<br> طيب هو الـOpen Source Drivers دي وحشة؟ في ناس كتير في OSC شغالين
                                بيها وزي الفل. في ناس تانية سبب لها مشاكل زي إن الجهاز يسخن أو الـGUI ميقومش وحاجات كدا.
                            </p><br>
                            <p dir="rtl">لو لسا عايز تجرب حظك كمل قراية.</p>
                        </ul>
                        <br>

                        <ul dir="rtl">
                            <li>
                                <span style="color: #ff6600;">خد Backup:</span>
                            </li>
                            <p dir="rtl">يعني بجد خد backup علي الأقل للحاجات المهمة جداً علي جهازك. لو قريت واتبعت
                                الخطوات بحذر إن شاء الله الdata بتاعتك هتكون في أمان. ممكن تحصل <br>مشاكل تانية بس
                                الـdata بتاعتك في أمان. بس ليه تخاطر؟ أصل كلنا بنغلط وبتفلت مننا. خد backup عشان خاطري.
                                لو مخدتش كمل بس ركز أوي الله يكرمك. </p><br>
                            <p dir="rtl">هنبدأ اهو :</p>
                        </ul>
                         <ul dir="rtl">
                            <li>
                                <span style="color: #ff6600;">1- Basic Disk Vs Dynamic Disk</span>
                            </li>
                    <p dir="rtl"> العادى ان فى Baisc Disk بس Microsoft عملت افتكاسة كدة اسمها الـdynamic disk.. ده المفروض إنه مفيد حاﻻت الـ RAID Setups ولو عايز تعمل Partition بيمتد على اكتر من Hard Disk و حوارات كدة.            <br><br>للأسف Linux مش بيشتغل غير على الـBasic Disk.
                        <br><br>أعرف إزاى ؟
                        <ul>
                             <li>من على Windows افتح الـStart Menu واكتب Disk Management ممكن تلاقى اسمه "Create and Format Hard Disk Part"</li>
                            <li>زى ما انت شايف فى الصورة كدة ده راجل Two Hard Disks .واحد منه Basic والتانى Dynamic</li>
                             </ul> <br> <br>
                             والـDynamic دايما بتلاقى الـPartitions بتاعه لونها اصفر كدة . <br><br>
                             لو الـ Hard Disk بتاعك Dynamic فللاسف Linux مش بيـSupport الـDynamic Disks :( .
                             <br><br>
                             الحل الوحيد إنك تحوله لـBasic إزاى؟! <br>
                             تاخد backup من كل الداتا اللى على الـHard Disk <br> هتـFormat كل حاجة و تحوله لـBasic وبعد كدة ترجع الـData.<br>ايه الهبل ده ؟!! فى حل تانى ؟<br> سمعنا ان فى برامج تانية بتدعى إنها تقدر تحول من Dynamic لـBasic من غير ما تـFormat حاجة . البرامج دى محدش فينا جربها بنفسه فانقدرش ننصحك تجربها. <br><br> الـHard Disk بتاعك Basic ؟ يلا بينا نكمل .
                            </p><br>
                                    <li>
                                <span style="color: #ff6600;">2- EFI VS BIOS</span>
                            </li>
                             <p dir="rtl">
                                 دى firmwares (برامج صغيرة جدا بتبقى محطوطة فى chip كدة على الـMotherboard).<br>الاول كان فى BIOS (Basic Input Output System) والناس كلها كانت فرحانة . وبعدين فى يوم من الايام قرروا يعملوا واحد تانى اسمه EFI(Extensible Firmware Interface) <br> وبعد كدة سموه UEFI (Unified Extensible Firmware Interface) . عملوه علشان بيدعم شوية Features كدة أهمها إنه بيسمح إن الـHard Disk يبقى GPT (هنتكلم فى الحوار ده فى الفقرة اللى جاية ).<br> <br>
                                 اه كنت عايز اقولك إن UEFI احيانا بيستعبط فيها BIOS عشان الـcompatibility . <br>
                                 بس احنا مش هنوجع دماغنا بالحوارات دى . كل اللى يهمنا دلوقتى <br>
                                 <ul>
                                     <li>هل Windows على جهازك نازل فى EFI Mode وﻻ BIOS Mode ؟</li>
                        </ul>
                        اعرف ازاى؟ <br>
                        <ul>
                            <li>من على Windows افتح الـStart Menu و اكتب Disk Management هتلاقى برنامج كدة ممكن يبقى باسم Create and Format Hard Disk Partitions . افتحه هتلاقى الـPartitions بتاعك موجودة.</li>
                            <li>عندك Partition مكتوب عليه EFI ؟ لو عندك يبقى Windows محطوط فى الـEFI Mode . لو معندكش تبقى BIOS Mode . ركز وبص كويس علشان الخطوة دى مهمة جدا .</li>
                            
                        </ul>
                        <br>
                        يلا Exercise سريع ؟
                     <br><br>
                        ده BIOS وﻻ EFI ؟  
                        طيب و ده ؟
                        <br><br>
                        لو قلت الاول BIOS والتانى EFI يبقى انا كدة اتطمنت عليك كمل . كمل 
                        <br><br>
                         </p>
                             <li>
                                <span style="color: #ff6600;">3- MBR VS GPT</span>
                            </li>
                     <p dir="rtl">
                         دى Partition Tables يعى جداول متخزنة فى الـHard Disk بتاعك شايلة شوية معلومات عن الـParttions بتاعك . يعنى مثلا عندك كام Partition كل واحد فيهم بيبدأ من انهى Sector ، إلخ .
                     لو الـHard Disk بتاعك MBR مش هتقدر تقسمه اكتر من اربع Partitions لكن لو GPT فبراحتك .
                         <br><br>
                         اعرف منين ؟<br> فى كذا طريقة بس الناس بتاعة OSC ناس كسلانة و بتحب تنجز . دوس Right Click على Disk 0 اللى على الشمال ده . فى الـMenu هتلاقى يا إما Convert to GPT يا إما Convert to MBR . <br><br>
                         لو انت هتحول لـGPT يبقى انت اصلا ايه ؟ 
                         <br><br>
                         صح يبقى ان MBR . <br><br>
                         طيب بص على ده كدة و قولى الـHard Disk بتاعه MBR وﻻ GPT ؟
                         <br> الاجابة GPT . <br> لو شايف غير كدة و حاسس انك متلغبط  ، ارجع و اقرأ تانى الحتةاللى فاتت دى .<br><br>
                    </p>
                             <li>
                                <span style="color: #ff6600;">4- عايزين نطلع بـUnallocated Space</span>
                            </li>
                     <p dir="rtl">
                         ركز إن انت داخل البرامج بتاع الـDisk Management ده وعندك هدف واحد .. انت عايز تطلع بـFree Space  او زى ما بتوع Windows بيسموها Unalloated Spac . <br> و دى هتيجى عن طريق إانك : <br><br>
                         <ol>
                             <li>يا إما تعمل Delete لـ Partition.</li>
                             <li>يا إما تعمل Shrink لـPartition.</li>
                             
                    </ol>
                    احنا محتاجين على الاقل 30 جيجا Unallocated (كل ما كان اكتر كل ما كان احسن عشان تعرف تنول برامج وتبقى براحتك يعنى).<br><br> قبل ما تعمل حاجة عايزك بس تفهم كام حاجة :
                    <ol>
                        <li>الـFree Space هى هى الـUnallocated Space اسمين لنفس الحاجة.</li>
                        <li>إنك تعمل Format لـPartition حاجة ، وإنك تعمله Delete دى حاجة تانية خالص . علشان نجيب Unallocated Space ﻻزم نعمل Delete او Shrink .</li>
                    </ol>
                    </p>
                    
                    
                        </ul>
                    </div>
                </div>
            </div>
            <!--end setup ubuntu step by step-->

            <!--start  حاجات لازم تعملهم لما تصطب لينكس-->
            <div class="panel panel-default">

                <div id="div-pos2" class="panel-heading">
                    <h4 class="text-pos2" class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" dir="rtl">٦ حاجات لازم
                            تعملهم لما تصطب لينكس</a>
                    </h4>
                </div>

                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body"><p dir="rtl">دلوقتي عندك Ubuntu 16.04 علي جهازك؟ ألف مبروك D: بس في شوية
                            حاجات كدا ضروري تعملها.</p>
                        </br>
                        <h2 dir="rtl"> ١- نزل ubuntu-restricted-extras</h2>
                        <p dir="rtl">لو لاحظت هتلاقي إنك مش عارف تشغل لا أغاني ولا أفلام. عشان كدا دي package فيها شوية
                            codecs علي شوية حاجات tools كدا مفيدة. للأسف مش موجودة بشكل أساسي في Ubuntu لأسباب قانونية.
                            بس لحسن الحظ سهل جداً ننزلها! D:</p>
                        <p dir="rtl">بكل بساطه دوس هنا! <br> <a href="apt://ubuntu-restricted-extras" target="_blank">Install
                                Ubuntu Restricted Extras</a></p></br>
                        <p dir="rtl">أو ممكن تفتح الterminal وتكتب الcommand دا:</p></br>
                        <p dir="rtl">sudo apt install ubuntu-restricted-extras</p></br>

                        <p>
                        <p dir="rtl"><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/linux/Screenshot(pic1).png?raw=true" class="img-responsive">
                        </p></br>
                        <p dir="rtl"><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/linux/Screenshot(pic2).png?raw=true" class="img-responsive">
                        </p>
                        </p><br>

                        <p dir="rtl"><strong>بعدها هيطلب منك الpassword هتيجي تكتبها هتلاقيه مش بيكتب حاجة.</strong>
                            hehe دا طبيعي متقلقش هو بياخد الpassword بتاعتك عادي بس مش بيعرض حاجة علي الشاشة عشان
                            security وكدا D:</p><br>
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
                        <p dir="rtl">دي طبعاً خطوة إختيارية بس مهمة بالنسبة لناس كتير. أولاً لأن في ناس كتير بتحب chrome
                            أكتر.</p>
                        <p dir="rtl">غير كدا Adobe قررت إن Flash مش هيبقي supported علي Linux. رغم إن معظم المواقع
                            الكبيرة بقت دلوقتي تشتغل من غير Flash زي Facebook و Youtube وغيرهم. إلا إن لسا في بعض
                            المواقع بتحتاج Flash. و Google Chrome بينزل وجواه Flash built-in.</p>
                        <p dir="rtl">من غير رغي كتير لو عايز Google Chrome نزله من <a
                                    href="http://www.google.com/chrome/">هنا</a>.</p><br><br>

                        <h2 dir="rtl">٥- ثبت الterminal في الlauncher.</h2>
                        <br>
                        <p dir="rtl">صدق أو لا تصدق انت دلوقتي Linux user. دا معناه إنك هتستخدم الterminal كتير. فيستحسن
                            تثبته في الlauncher عشان يبقي قريب منك.</p>
                        <p dir="rtl"><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/linux/Screenshot(pic3).png?raw=true" class="img-responsive">
                        </p><br>
                        <p dir="rtl">زي ما في الصورة هتفتح الterminal و right click علي الicon بتاعته في الlauncher.
                            وبعد كدا تختار Lock to Launcher.</p><br><br>

                        <h2 dir="rtl">٦- كلم صحابك عن Linux!</h2>
                        <br>
                        <p dir="rtl">لو مؤمن بفكر البرمجة الحرة وأن الsource code بتاع البرامج المفروض يبقي <br>مفتوح.
                            فتخيل إن كل حاجة انت شايفها علي الشاشة دلوقتي أو مش شايفها حرة و Open Source!</p>
                        <p dir="rtl">من أول ما فتحت الجهاز لما طلعلك الmenu اللي بتختار منها عايز تخش علي<br> Ubuntu ولا
                            Windows مروراً بالLogin Screen لغاية ما دخلت وفتحت الinternet وشغال دلوقتي. كل دا كود حر
                            تقدر تشوفه وتعدل فيه!</p><br>
                        <p dir="rtl">لو مؤمن بجمال الفكرة دي كلم صحابك عنها! ((:</p><br><br></div>
                </div>

            </div>
            <!--end  حاجات لازم تعملهم لما تصطب لينكس-->

            <!--start shrouk descover linux-->
            <div class="panel panel-default">

                <div id="div-pos3" class="panel-heading">
                    <h4 class="text-pos3" class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" dir="rtl">شروق تكتشف
                            لينكس</a>
                    </h4>
                </div>

                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p dir="rtl"><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/linux/output.jpg?raw=true" class="img-responsive"></p><br>
                        <p dir="rtl"><a href="https://www.youtube.com/watch?v=MkNOk5fM4dY" target="_blank"><img
                                        src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/linux/youtube.png?raw=true" class="img-responsive"></a></p><br>
                        <p dir="rtl"><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/linux/output2.jpg?raw=true" class="img-responsive"></p><br>
                    </div>
                </div>
            </div>
            <!--end shrouk descover linux-->
        </div>
    </div>
    </div>
@endsection
