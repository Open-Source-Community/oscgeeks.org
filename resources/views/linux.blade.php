@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/Linux.css') }}"> 
@endsection

@section('content')
    <div class="container">
    <div>
        <div class="text-center">
            <h1 class="hvr-grow">Linux Committee</h1>
            <img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/linux.png?raw=true">
        </div>
    </div>
        <br>
		<div class="text-center">
		<p id="desc">
			Have you ever heard the famous saying "windows Linux"?<br>
            Heard it or not, the Linux Moderators Committee is here because of this saying, to show students that there is a whole world beyond windows called Linux.<br>
            Our Committee believes in Open Source knowledge presented in Linux which is our main concern.<br>
            Our Committee believes in spreading knowledge so it provides Linux workshops to students and to our crew, also we are keen to learn and learn so beside our job in spreading knowledge everyday we are learning new Linux stuff.
		</p>
		</div>
        <br>
     <div>
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
                             </ul> <br> 
                             <p dir="rtl"><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/1.png?raw=true" class="img-responsive"></p></br>
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
                     <br><p dir="rtl"><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/2.png?raw=true" class="img-responsive"></p></br>
                        ده BIOS وﻻ EFI ؟  
                        طيب و ده ؟
                        <br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/3.png?raw=true" class="img-responsive"></p></br>
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
                         <br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/4.png?raw=true" class="img-responsive"></p></br>
                         صح يبقى انت MBR . <br><br>
                         طيب بص على ده كدة و قولى الـHard Disk بتاعه MBR وﻻ GPT ؟
                         <br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/5.png?raw=true" class="img-responsive"></p></br> الاجابة GPT . <br> لو شايف غير كدة و حاسس انك متلغبط  ، ارجع و اقرأ تانى الحتةاللى فاتت دى .<br><br>
                    </p>
                             <li>
                                <span style="color: #ff6600;">4- عايزين نطلع بـUnallocated Space</span>
                            </li>
                     <p dir="rtl">
                         ركز إن انت داخل البرامج بتاع الـDisk Management ده وعندك هدف واحد .. انت عايز تطلع بـFree Space  او زى ما بتوع Windows بيسموها Unallocated Space . <br> و دى هتيجى عن طريق إانك : <br><br>
                         <ol>
                             <li>يا إما تعمل Delete لـ Partition.</li>
                             <li>يا إما تعمل Shrink لـPartition.</li>
                             
                    </ol>
                    احنا محتاجين على الاقل 30 جيجا Unallocated (كل ما كان اكتر كل ما كان احسن عشان تعرف تنول برامج وتبقى براحتك يعنى).<br><br> قبل ما تعمل حاجة عايزك بس تفهم كام حاجة :
                    <ol>
                        <li>الـFree Space هى هى الـUnallocated Space اسمين لنفس الحاجة.</li>
                        <li>إنك تعمل Format لـPartition حاجة ، وإنك تعمله Delete دى حاجة تانية خالص . علشان نجيب Unallocated Space ﻻزم نعمل Delete او Shrink .</li>
                         <li>الدنيا مش سايحة على بعضها فى الـHard Disk. يعنى لو عندك شوية Free Space فى أول الـHard Disk وشوية فى الاخر مينفعش تعتبرهم جزء واحد. <br> بص الصورة اللى جاية دى مثال كويس:<br>
                             <br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/6.png?raw=true" class="img-responsive"></p></br>لو سألتك الـHard Disk ده فيه Unallocated Space هتقولى ايه ؟
                        <br> فى 9 جيجا فى الاول وفى 9 فى الاخر يبقى معايا 18 جيجا unallocated صح؟
                        تمام .<br>هل ينفع استخدمهم كجزأ واحد ؟ لآ مش سلطة هى .</li>
                        <li>لما بتيجى تعمل Shrink لأى Partition الـFree Space اللى بتيجى بتبقى على يمينه.</li>
                        <li>Windows Disk Management مش بيديك إمكانية إنك تحرك Partition من مكانه.أوعى تحرك اى Partition من مكانه. <br> أولا: <br>لو الـPartition ده عليه Operating System سواء Windows او غيره الـOperating System ده مش هيقوم تانى لأنك غيرت مكان اول Sector فى الـPartition.<br> ثانيا:<br> حتى لو ده هياخد وقت طويل ولو لا قدر الله حصل Crash فى النص او الجهاز فصل او اى حاجة حصلت فالـData بتاعتك ضاعت .لو مزنوق اوى خد Backup. </li>
                        <li>لما تكون بتنقل Data حجمها كبير دايما اعمل Copy مش Cut . عشان لو لا قدر الله حصل مشكلة فى نقل النسخة الاساسية تبقى موجودة .بعد ما تتأكد ان الحمدلله النقل تم بنجاح ،ممكن تشيل النسخة الاساسية .</li>
                    </ol> <br> <br>
                        طيب يلا نبدأ <br><br>
                            لو انت GPT اتصرف و اعمل Shrink او Delete لأى Partition عشان تجيب Unallocated Space. <br><br> طبعا مش محتاج انبهك إنك لو هتعمل Delete لـPartition يبقى لازم تاخد الـData اللى عليه الاول وتوديها اى partition تانى او تحطها فى اى مكان .<br><br> لو انت MBR افتكر انك محدود فى 4Partitions .<br><br> بص هنا مثلا ... <br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/7.png?raw=true" class="img-responsive"></p></br>ده BIOS و MBR و عنده 3Partitions .واحد System Reserved واتنين عاديين اللى هم الـC والـD.<br><br>هنا ببساطة نعمل Shrink للـC (حسب من فيهم فيه مساحة فاضية). ونبقى جبنا الـUnallocated Space بتاعنا.<br><br> طيب بص هنا ...<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/8.png?raw=true" class="img-responsive"></p></br>ده شخص عنده 4 Partitions .واحد System Reserved و C و D و E.<br><br>ينفع اعمل Shrink لأى Partition هنا ؟ <br>لأ.هو صحيح انا لو عملت Shrink هيجيبلى Unallocated Space. بس هل هعرف أستخدم الـUnallocated Space دى فى حاجة ؟<br> لأ .لأن انا عندى 4 Partitions ، فالـSpace دى زى قلتها لأنى مش هعرف أستخدمها فى إنى اعمل Partition خامس.<br><br> فى الحالة دى لازم اعمل Delete لـPartition. وبعد كدة يا إما هخلى الـPartition ده كله لـLinux يا إما هنلجأ لحوار اسمه Extended Partitions   بيديك إمكانية إنك تتحايل على الموقف و تعمل اكتر من 4 Partitions .بس ده لازم يتعمل من على Linux. لان الـWindows Disk Management لا يعتمد عليه فى الحوار ده .<br><br><br>
                            لاحظ إن حتى لو عندك 4 Partitions وهتعمل Extended Partiton برضه لازم تعمل Delete لواحد من الاربعة اللى عندك .(هنرجعه تانى بس لازم نعمله Delete عشان حوله لـExtended الاول ).خد الـData من على الـPartition اللى هتعمله Delete واعمله Delete بحيث إنه يبقى Unallocated Space.<br><br> يلا بينا نروح على Linux بس قبل ما هنروح هنعمل حاجة صغيرة اوى اوى .<br><br><br>
                    </p>
                            <li>
                                <span style="color: #ff6600;">5- لو 10/8.1/8 Windows يبقى لازم تقفل الـFast Startup.</span>
                            </li>
                     <p dir="rtl">
                         <ul>
                             <li>تعالى عند علامة البطارية تحت فى Task Bar ودوس عليها واختار Power Options.</li>
                             <li>هتختار Choose what closing the lid does.<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/9.png?raw=true" class="img-responsive"></p></br></li>
                             <li>هتدوس على Change setting that are currently unavailable<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/10.png?raw=true" class="img-responsive"></p></br></li>
                             <li>هتشيل علامة الصح من قدام Fast Startup<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/11.png?raw=true" class="img-responsive"></p></br></li>
                             ويلا بينا على Linux .<br><br>هفترض إن انت نزلت نسخة ubuntu أو خدتها من حد وحرقتها على فلاشة .<br>لو عايز تعرف إزاى تحرقها على فلاشة من Windows دوس هنا .<br><br>
                             نخش فى مرحلة "احذر الـNext < Next < Next" .... <br><br><br>
                       </ul>
                     </p>
                                                <li>
                                <span style="color: #ff6600;">6- اعمل Boot من الفلاشة </span>
                            </li>
                     <p dir="rtl">
                         بص هى شقلبة وكل جهاز بشكل . <br><br>
                         <ul>
                             <li>حط الفلاشة فى الجهاز و قول بسم الله و افتح.</li>
                             <li>عشان توصل للBoot Menu وتقوم الجهاز من الفلاشة أول ما الجهاز يفتح هتدوس على زرار من الزراير دى :ESC - F12 - F2 - F9 - Del <br>وجرب تدوس على زرار الـFn معاهم لو منفعوش لوحدهم .<br> ولو انت Lenovo هتلاقى زرار صغير أوى على الجنب فى الـlaptop بتفتح الجهاز منه علشان تـBoot من على الفلاشة .<br><br> فاكر الخطوة التانية بتاعة EFI VS BIOS ؟ ماشى كمل.</li>
                             <li>وصلت للـBoot Menu الحمدلله ؟ لو انت UEFI اختار USB اللى جنبها UEFI. لو انت BIOS فهتختار USB سادة بدون اضافات . <br><br> (فى الصورة اللى بيفتح هيخش على USB فى الـUEFI Mode).<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/12.png?raw=true" class="img-responsive"></p></br><br> الخطوة دى مهمة جدا لانك لو عملت Boot غلط ممكن ده يسببلك مشاكل بعدين. <br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/13.png?raw=true" class="img-responsive"></p></br> بعد ما تختار الـUSB لو شفا شاشة زى اللى فوق دى . ده تأكيد إنك عامل Boot فى الـBIOS Mode. <br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/14.png?raw=true" class="img-responsive"></p></br> لو ظهرلك Menu زى دى فيها Try و Install ده تأكيد انك عملت Boot فى الـUEFI Mode . اختار Try . <br>ايوة عارف انك هتعمل Setup ، برضه اختار Try مالكش دعوة . <br><br> خلاص إتأكدت انك عملت Boot فى الـMode الصح ؟ (UEFI او BIOS).</li>
                          </ul> <br><br>
                    </p>
                             <li>
                                <span style="color: #ff6600;">7- فى Linux </span>
                            </li>
                         <p dir="rtl">
                             لو اول ما فتحت لقيت الـWindow دى قدامك ، ده تأكيد ده تأكيد تانى انك عملت Boot فى الـBIOS Mode ، اختار Try <br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/15.png?raw=true" class="img-responsive"></p></br><br> ايوة عارف انك هتعمل Setup ،برضه اختار Try مالكش دعوة .<br><br> لو لقيته دخل على الـDesktop على طول من غير ما يطلعلك الـWindow اللى فوق دى . ده تأكيد انك عملت Boot فى الـUEFI Mode. <br><br>لو انت الشخص الـBIOS/MBR اللى محتاج يعمل Extended Partition عشان عنده 4 Partitions موجودين بالفعل يبقى الجزء ده عشانك .<br>لو مش انت الشخص ده ومستعد تعمل Setup خلاص يبقى انزل لغاية النقطة 8 (8- الـInstallation).<br><br>
                             انا هفترض إنك خدت Backup وعملت Delete لواحد من الاربع Partitions اللى عندك .ودلوقتى فى مكانه Free Space.<br><br>خلينى أفهمك ايه هو الـExtended Partition قبل ما نبدأ. <br><br> الـExtended Partition ده Partition بيستعبط هو فى حد ذاته مينفعش ترتب فيه Data .لكن بيشيل جواه Partitions تانية اسمها Logical Partitions <br>، هما دول اللى بتقدر تتعامل معاهم وتكتب فيهم Data . و الحلو انك تقدر تعمل العداد اللى انت عايزه من الـLogical Partitions.<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/16.png?raw=true" class="img-responsive"></p></br>زى ما انت شايف فى الصورة اللى فوق : قدرنا نعمل 3 Partitions جوة Extended Partition واحد . من غير لا دجل ولا شعوذة .<br><br> لاحظ ان مفيش حاجة اسمها Extended Partitions فى الـGPT . <br><br> طب يلا نطبق الكلام ده علينا : <br><br> 
                             <ul>
                                 <li>هتعمل Search على برنامج اسمه gpated وده زى الـDisk Management بس على Linux.</li>
                                 <li>هتفتحه هيبقى شكله زى ما انت شايف كدة <br>
                                 هتدوس على الجزء الـUnallocated (اللى المفروض إنه الـPartition اللى انت عامله Delete من على Windows).وبعدين هتدوس على علامة الـNew زى ما الصورة موضحة .<br><br>لاحظ إن عدد الـPartitions والاحجام والترتيب يختلف من جهاز لجهاز.<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/17.png?raw=true" class="img-responsive"></p></br><br> </li>
                                 <li>فى Create As هتأكد إنك مختار Extended Partition. وبعدين دوس Add. <br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/18.png?raw=true" class="img-responsive"></p></br></li>
                                 <li>الشكل المفروض يبقى حاجة زى كدة :<br>عندنا Extended Partition كل المساحة اللى جواه Unallocated.<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/19.0.jpeg?raw=true" class="img-responsive"></p></br></li>
                                 <li>هنعلم على المساحة الـUnallocated اللى فى الـExtended Partition وهنختار New .<br>لاحظ إن Create As لازم تبقى Logical Partition دلوقتى ،هنعمل ntfs partition وهنتحكم فى حجمه عن طريق الـSlider اللى فوق ده . <br>المساحة اللى هتبقى Unallocated فى الاخر هى دى اللى Linux هيستخدمها ، يستحسن لا تقل عن 30 جيجا .<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/19.1.png?raw=true" class="img-responsive"></p></br></li>
                                 -تحذير: <br><br> اوعى تغير اى Partition من مكانه لو الـPartition ده فيه Operating System ساعتها الـOperating System مش هيقوم ! <br><br> 
                                 <li>لو انت معجبكش التعديلات ممكن تعمل Undo فى gparted.</li>
                                 <li>خلصت شغلك ؟ <br>سمِ الله ودوس على Apply</li>
</ul><br><br>
دلوقتى انت مستعد تبدأ الـInstallation. <br><br>
</p>
                             <li>
                                <span style="color: #ff6600;">8- الـInstallation  </span>
                            </li>
                         <p dir="rtl">
                             انا مش هاخدك فى كل خطوة فى العالم .هقولك على الحاجات المهمة ،باقى الحاجات عبارة عن اختيار اللغة و التوقيت و بتاع و العمر قصير .<br><br> افتح الـInstaller.<br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/20.png?raw=true" class="img-responsive"></p></br> ابقى علم على Istall Third-Party Software. عشان يضيفلك الـServers اللى من خلالها تقدر تعمل Setup للـCodecs وشوية برامج مفيدة و عشان الـDrivers وبتاع .<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/21.png?raw=true" class="img-responsive"></p></br> دى اهم خطوة !!<br><br> لو ماشى خطوة بخطوة فى الـGuide ده فالمفروض ان انت شايل Unallocated Space على الـHard Disk بتاعك ،<br> تقدر تدوس Install Ubuntu alongside windows. <br><br> خلى بالك لو اخترت Erase disk and istall Ubuntu هيفرمتلك الـHard Disk كله و كل الـData بتاعتك هتتمسح .<br><br><p><img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Guide%20images/22.png?raw=true" class="img-responsive"></p></br>لما هتدوس Install Now هيطلعلك box كدة بيأكد عليك و بيقولك Ubuntu هيقسم المساحة اللى انت سيبتهاله فاضية ازاى ، <br>دوس Continue او Okay او مش فاكر الزرار بيقول ايه بالضبط :) <br><br> ألف مبروك . <br><br>بما انك عملت Installation ل Ubuntu ففي <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" dir="rtl">6 حاجات لازم تعملهم لما ت Setup لينكس</a><br><br> ولو وقفت فى مشكلة تقدر تسألنا على جروب <a href="https://www.facebook.com/groups/osc.troubleshot/" target="_blank">OSC-Linux Troubleshooting</a> .<br><br>
                        </p>           
                        
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
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" dir="rtl">6 حاجات لازم تعملهم لما تSetup لينكس</a>
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
