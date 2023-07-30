<!DOCTYPE html>
<html lang="ar">

@include('layouts.head')

<body dir="rtl">

    @include('layouts.header')
    
    <div class="clearfix"></div>
    <section class="redSep col-xs-12" id="getFixed" style="position: fixed;-osition: -webkit-fixed;">
        <div class="container">
            <div class="fixedLogo">
                <img src= "/frontend/images/logo.png" width="50" alt="Saleh cars logo">
                <!-- <img src="fonts/saleh_logo_icon.svg" width="50" alt="Saleh cars logo"> -->
            </div>
            <nav class="inFixed">
                <ul>
                    <li><a class=" active  " href="#hero">الرئيسية</a></li>
                    <li><a class href="#about">من نحن</a>
                    </li>
                    <li><a class href="#brands">الماركات</a></li>
                    <li><a class href="#services">الخدمات</a></li>
                    <li><a class href="#companys">الشركات</a></li>
                    <li><a class href="#footer">اتصل بنا</a></li>
                </ul>
            </nav>
            <div class="contactBtns">
                <a href="javascript:void(0);" data-type="share" class="displayPopup"><i class="fas fa-share-alt"></i>
                    <span> </span></a>
                <a href="tel:920022122" class><i class="fas fa-phone"></i> <span> </span></a>
                <a href="https://wa.me/966920022122" data-type="whats" data-link="https://wa.me/966920022122" class
                    target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div id="social_btns_wraper">
                <ul class="share-social">
                    <li><a class="share-link share-twitter ws-100" href="#" target="_blank"><i
                                class="fab fa-twitter"></i></a></li>
                    <li><a class="share-link share-facebook ws-100" href="#" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a class="share-link share-whatsapp ws-100" href="#" target="_blank"><i
                                class="fab fa-whatsapp"></i></a></li>
                    <li><a class="share-link share-linkedin ws-100" href="#" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </section>


    <!-- hero -->
    <div id="hero" class="w-100 silderimg">
        <div class="slider" style="max-width: 100%;">
            <!-- <img src= "/frontend/images/background-hero.jpg" /> -->
            <div class="content">
                <h1> نقدم لك افضل خدمة   </h1>
                <h1>  للحصول علي سيارة  </h1>
            </div>
        </div>
    </div>

    <!-- about -->
    <section id="about" class="whySaleh">
        <div class="w-100">
            <div class="container">
                <div class="sec-head">
                    <h1>لماذا نحن</h1>
                </div>
                <p>الإجابة بكل إختصار : أقل الأسعار ، أفضل باقة لخدمات مابعد البيع,أكبر تنوع للسيارات في مكان واحد ،
                    جميع البنوك وشركات التمويل معتمدة لدينا ، لذلك انذر كار هو ( خيارك الأول ومستشارك الأفضل ) لشراء
                    السيارة.</p>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="new_service">
                        <img class="new_service_bg lazyload" width="80" height="75" alt="صورة سعرنا هو الأفضل"
                            src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/whysaleh/5e4a50633eb551581928547.svg">
                        <img class="new_service_bg_hover lazyload" width="80" height="75"
                            alt="صورة الوقوفسعرنا هو الأفضل" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/whysaleh/5e4a50633f6791581928547.svg">
                        <div class="new_service_wrap">
                            <a class="new_service_link" href="https://salehcars.com/whySaleh#whySaleh_2">
                                <h2 class="new_service_head">سعرنا هو الأفضل</h2>
                            </a>
                            <div class="new_service_text">
                                <p>
                                    الصفقات الكبرى المبرمة مع الوكلاء تمنحنا ميزة الدعم الأكبر لتقديم أفضل سعر ممكن
                                    لعملائنا مع كامل المزايا والخدمات الم...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="new_service">
                        <img class="new_service_bg lazyload" width="80" height="75" alt="صورة نضمن لك سيارتك الجديدة"
                            src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/whysaleh/5e4a508b250551581928587.svg">
                        <img class="new_service_bg_hover lazyload" width="80" height="75"
                            alt="صورة الوقوفنضمن لك سيارتك الجديدة" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/whysaleh/5e4a508b25bae1581928587.svg">
                        <div class="new_service_wrap">
                            <a class="new_service_link" href="https://salehcars.com/whySaleh#whySaleh_3">
                                <h2 class="new_service_head">نضمن لك سيارتك الجديدة</h2>
                            </a>
                            <div class="new_service_text">
                                <p>
                                    بعد إنتهاء ضمان الوكيل وتفاديا" لأي مشاكل في السيارة ,نحن في مجموعة انذر كار
                                    نقدم الحل :
                                    الضمان الممتد وهو ضمان...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="new_service">
                        <img class="new_service_bg lazyload" width="80" height="75" alt="صورة خدمات المساعدة على الطريق"
                            src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/whysaleh/5e4a509c106f51581928604.svg">
                        <img class="new_service_bg_hover lazyload" width="80" height="75"
                            alt="صورة الوقوفخدمات المساعدة على الطريق" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/whysaleh/5e4a509c10e841581928604.svg">

                        <div class="new_service_wrap">
                            <a class="new_service_link" href="https://salehcars.com/whySaleh#whySaleh_6">
                                <h2 class="new_service_head">خدمات المساعدة على الطريق</h2>
                            </a>

                            <div class="new_service_text">
                                <p>
                                    تم منح هذه الخدمة مجاناً ولعدد غير محدود وفي أي وقت لعملائنا, لتلافي استغلال بعض
                                    السطحات للأعطال التي قد يتعرض لها ع...
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- row -->
        </div> <!-- container -->
    </section>
    <div class="clearfix"></div>

    <!-- brands -->
    <section id="brands" class="brands">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-head">
                        <h2 class="text-center">موزع معتمد لجميع انواع السيارات</h2>
                    </div>
                    <p></p>
                    <div class="row d-flex justify-content-center">
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار اكسيد" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/63038e1d856e31661177373.png">اكسيد
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a
                                href="{{ url('') }}/cars/brands/26/%D8%A7%D9%84%D9%81%D8%A7%D8%B1%D9%88%D9%85%D9%8A%D9%88">
                                <img width="100" height="100" alt="شعار الفاروميو" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5d60db52bdff71566628690.svg">الفاروميو
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار ام جي" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5e53cea14ee651582550689.svg">ام جي
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار ايسوزو" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5cbc3c3ccd0b51555840060.svg">ايسوزو
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار بايك" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/607583c11625f1618314177.png">بايك
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار بنتلي" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5cc959329fb9a1556699442.svg">بنتلي
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار بي ام دبليو" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5ce9306fbb95e1558786159.svg">بي ام
                                دبليو
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار بيجو" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/616c0cd71ec4e1634471127.svg">بيجو
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار تاتا" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/607ac0afb85ba1618657455.png">تاتا
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار تويوتا" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5cbc1b1c8fde31555831580.svg">تويوتا
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار جاي ام سي" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/63b6713042e6b1672900912.svg">جاي ام
                                سي
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار جريت وول" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/60374a584e4cd1614236248.png">جريت وول
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار جي إيه سي" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5f5a446eed0c71599751278.png">جي إيه
                                سي
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار جي ام سي" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5cb5b1c4e0aab1555411396.svg">جي ام سي
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار جيب" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5d5d0bd1a60991566378961.svg">جيب
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار جيتور" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5ec531864754e1589981574.svg">جيتور
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار جيلي" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5f969795c04491603704725.png">جيلي
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار دودج" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5d18bcd7b1fb51561902295.svg">دودج
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار دونج فينج" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/63b985de7ca9b1673102814.svg">دونج
                                فينج
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار رام" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5e513903cbefd1582381315.svg">رام
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار رنج روفر" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5e5382d83439e1582531288.svg">رنج روفر
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار رولز رويس" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/6478d3fcbdc141685640188.svg">رولز
                                رويس
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار رينو" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/61754dc41016b1635077572.svg">رينو
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار زد اكس اوتو" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/62036b39c8ed01644391225.png">زد اكس
                                اوتو
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار سايك موتور" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/610e38b7ee6c71628321975.svg">سايك
                                موتور
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار سوزوكي" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5daf3596afa3b1571763606.svg">سوزوكي
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار شانجان" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/63b52e48c0a531672818248.svg">شانجان
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار شفروليه" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5cb2d8529843f1555224658.svg">شفروليه
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار شيري" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5e54d1712b32c1582616945.svg">شيري
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار فاو" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/6096da0e081e61620498958.png">فاو
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار فوتون" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5f195998400521595496856.svg">فوتون
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار فورد" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5cac59dd94bf71554799069.svg">فورد
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار فولفو" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5cd87c5bc46c91557691483.svg">فولفو
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار فيات" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5d67a0c97dc181567072457.svg">فيات
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار كرايسلر" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5d0de79b5d5541561192347.svg">كرايسلر
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار كيا" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/616c0e08d81b71634471432.svg">كيا
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار لامبورجيني" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/6252d05ebd1541649594462.svg">لامبورجيني
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار لكزس" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5e5f839e875321583317918.svg">لكزس
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار لينكولن" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/61d9a16a5e0de1641652586.svg">لينكولن
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار مازدا" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5e5390c39c5e01582534851.svg">مازدا
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار مرسيدس بنز" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5cf3d0f2c58bf1559482610.svg">مرسيدس
                                بنز
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار ميتسوبيشي" class="lazyload"
                                    src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5ca8e47aee4661554572410.svg">ميتسوبيشي
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار ميني" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/616c14fd3e8ce1634473213.svg">ميني
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار نيسان" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5cadac1a432af1554885658.svg">نيسان
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار هافال" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/6034bf74c5c0e1614069620.svg">هافال
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار هوندا" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5c9ceee06184a1553788640.svg">هوندا
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار هينو" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5e5378b233cb91582528690.svg">هينو
                            </a>
                        </div>
                        <div class="col col-md-2 col-6 brand">
                            <a>
                                <img width="100" height="100" alt="شعار هيونداي" class="lazyload" src="/frontend/images/logo.png"
                                    data-src="https://salehcars.com/storage/brands/5caf141da42881554977821.svg">هيونداي
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services -->
    <section id="services" class="drive_quote">
        <div class="container_fluid">
            <div class="col-md-6 float-right min_335" style="background-color:#c2000b;">
                <div id="buy_car_home">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-7">

                            <div class="sec-head">
                                <h2 class="text-white text-right">
                                    طلب خدمة
                                </h2>
                            </div>
                            <div class="buy_car_text">
                                إرفق البيانات المطلوبة وسنقوم بمساعدتك فورا" لشراء السيارة التي ترغب بها, بأقل نسبة
                                مرابحة وأفضل عرض تمويلي من مختلف البنوك وشركات التمويل المعتمدة لدينا.
                            </div>
                            <!-- <a href="{{ url('') }}/buy_company" class="buy_car_home_btn">شركات</a> -->
                            <a href="{{ route('service') }}" class=" buy_car_home_btn">اطلب الأن</a>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 float-right min_335 hideOnMobile background-lazyload"
                style="background:url(&#x27;frontend/images/logo.png&#x27;)" data-src="/frontend/images/buy_car.jpg"></div>
        </div>
    </section>

    <div class="container best_price">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="sec-head">
                    <h2>سعرنا هو الأفضل</h2>
                </div>
                <p>الصفقات الكبرى المبرمة مع الوكلاء تمنحنا ميزة الدعم الأكبر لتقديم أفضل سعر ممكن لعملائنا مع كامل
                    المزايا والخدمات الممكنة,لذلك أصبحنا موزع معتمد لأغلب العلامات التجارية في المملكة ,ونلنا ثقة جميع
                    الوكلاء وأصبحنا الخيار الأول للعملاء عند الرغبة في شراء السيارات.</p>
            </div>
        </div>
    </div>
    <!-- companys -->
    <section id="companys" class="allBanks">
        <div class="row">
            <div class="container">
                <h2> معتمدون لدى جهات التمويل</h2>
                <p> نالت مجموعة انذر كار ثقة جميع البنوك وشركات التمويل وأثمر ذلك عن إبرام إتفاقيات وعقود لتقديم
                    أفضل الحلول التمويلية والعروض المميزة على مدار العام ,ولتسهيل إنهاء إجراءات العملاء, لذلك نحن
                    مستشارك التمويلي الأول عند رغبتك في شراء السيارة ,ونقدم خدمات التمويل من خلال: </p>
                <div class="row bankRow justify-content-center align-items-center">
                    <div class="col-6 col-md-2">
                        <img class="lazyload" width="155" height="165" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb32ecaac62d1588801226.svg"
                            alt="شعار البنك الأهلي التجاري">
                    </div>
                    <div class="col-6 col-md-2">
                        <img class="lazyload" width="155" height="165" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb313e41ebad1588794340.svg"
                            alt="شعار بنك البلاد">
                    </div>
                    <div class="col-6 col-md-2">

                        <img class="lazyload" width="155" height="165" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb31448c4a7a1588794440.svg"
                            alt="شعار بنك الرياض">
                    </div>
                    <div class="col-6 col-md-2">
                        <img class="lazyload" width="155" height="165" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb3149e192091588794526.svg"
                            alt="شعار مصرف الراجحي">
                    </div>
                    <div class="col-6 col-md-2">
                        <img class="lazyload" width="155" height="165" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb30b197b0bc1588792089.svg"
                            alt="شعار بنك الإمارات">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb3350be4e5b1588802827.svg"
                            alt="شعار إيجارة">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb3312a45f361588801834.svg"
                            alt="شعار الجبر للتمويل">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb3358c4ba6d1588802956.svg"
                            alt="شعار شركة تأجير">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb3387422f881588803700.svg"
                            alt="شعار التيسير">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb32a2ac42051588800042.svg" alt="شعار أوركس">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb32b230b41a1588800291.svg"
                            alt="شعار عبد اللطيف جميل للتمويل">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb335e7a11851588803047.svg"
                            alt="شعار شركة آجل للخدمات التمويلية">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb32fa725a7f1588801447.svg"
                            alt="شعار الأمثل للتمويل">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb33325a83f61588802341.svg"
                            alt="شعار شركة الجاسرية للتمويل">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb332e45bd5a1588802276.svg"
                            alt="شعار الخليج للتمويل">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb336e794b761588803303.svg"
                            alt="شعار شركة رافعات الخليج للتأجير التمويلي">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb3366a41f1e1588803178.svg"
                            alt="شعار السعودي الفرنسي للتمويل التأجيري">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb33772d3e551588803442.svg"
                            alt="شعار معالم للتمويل">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb3380fee4431588803599.svg"
                            alt="شعار شركة متاجر للتمويل">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb33a06908e01588804102.svg"
                            alt="شعار مرابحة للتمويل">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb34293c65311588806291.svg"
                            alt="شعار مرابحة مرنة">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb33f7fad6fe1588805503.svg"
                            alt="شعار الشركة الوطنية للتقسيط">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb340a19bd201588805793.svg"
                            alt="شعار راية للتمويل">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb3412a1cafa1588805930.svg" alt="شعار تمكين">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb3422e228491588806190.svg"
                            alt="شعار تمويل الأولى">
                    </div>
                    <div class="col-6 col-md-2 float-right">
                        <img class="lazyload" width="155" height="160" src="/frontend/images/logo.png"
                            data-src="https://salehcars.com/storage/banks/5eb341c3aaac51588806083.svg"
                            alt="شعار توكيلات">
                    </div>

                </div>
            </div>
        </div>
    </section>

   @include('layouts.footer')

    <script  src="/frontend/js/bootstrap-notify.min.js"></script>
    <script  src="/frontend/js/select2.min.js"></script>
    <script  src="/frontend/js/lazysizes.min.js"></script>
    <script  src="/frontend/js/popper.min.js"></script>
    <script  src="/frontend/js/bootstrap.min.js"></script>
    <script  src="/frontend/js/lightbox.js"></script>
    <script  src="/frontend/js/select2.min.js"></script>
    <script  src="/frontend/js/main.js"></script>
</body>

</html>