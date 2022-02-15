<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ' , 'س questionsالات متداول') ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY' , 'Properties') ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY' , 'چگونه یک ویژگی ایجاد کنم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY' , 'روی ویژگیها> ویژگی جدید کلیک کنید تا یک ویژگی جدید اضافه شود.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW' , 'چگونه می توانم ببینم ویژگی اموال من برای مهمانان چگونه است؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW' , 'روی ویژگیها> پیش نمایش کلیک کنید تا ببینید ملک شما چگونه به نظر می رسد.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP' , 'چگونه اتاق اضافه کنم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP' , "نحوه افزودن اتاق به حالت ویرایش تعرفه شما بستگی دارد. در حالت ویرایش تعرفه معمولی , نیازی به افزودن اتاق ندارید , زیرا هنگام تنظیم قیمتها به طور خودکار اضافه می شوند. اگر از Micromanage یا حالت ویرایش تعرفه پیشرفته , سپس در تنظیمات> اتاقها می توانید اتاقها را اضافه , ویرایش و حذف کنید. همچنین می توانید ویژگی های اتاق را ایجاد کرده و این ویژگی ها را به آن اتاق ها اختصاص دهید. علاوه بر این , می توانید تصاویر را برای افراد جداگانه بارگذاری کنید اتاق هایی که از مرکز رسانه استفاده می کنند. هنگام ایجاد اتاق ها , باید سعی کنید اطمینان حاصل کنید که اتاق های دنیای واقعی شما را در ملک شما منعکس می کنند , زیرا مدیریت آنها آسان تر می شود. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES' , 'چگونه می توانم قیمت اتاق را تعیین کنم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "این بستگی به حالت ویرایش تعرفه شما دارد. اگر از حالت ویرایش تعرفه عادی استفاده می کنید (تنظیمات ویژگی> برگه حالت ویرایش تعرفه) , می توانید تعداد اتاق هایی که دارید , قیمت , تعداد اتاق ها را پیکربندی کنید افراد در هر اتاق می توانند و تعداد کل افراد موردنظر در هر رزرو را در خود جای دهند. این حالت به شما امکان می دهد قیمت اتاق را برای 10 سال آینده تعیین کنید. <br/> اگر از حالتهای ویرایش تعرفه پیشرفته یا Micromanage استفاده می کنید , پس شما می توانید قیمت اتاق را برای هر روز در سالهای آینده تعیین کنید. همچنین می توانید برای یک اتاق یکسان تعرفه های متعددی داشته باشید , به عنوان مثال می توانید یک تعرفه برای تختخواب و صبحانه و دیگری برای تختخواب , صبحانه و عصرانه داشته باشید. مگر اینکه نیاز خاصی داشته باشید , ما توصیه می کنیم که همیشه از Micromanage استفاده کنید , Advanced به همان شیوه کار می کند , اما باید مراقب باشید تا تاریخ شروع و پایان تعرفه های مختلف متوالی باشد. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS' , 'چگونه می توانم موارد اضافی اختیاری ایجاد کنم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS' , "موارد اضافی را می توان به رزروها اضافه کرد و در تنظیمات> موارد اضافی پیکربندی شده است. این موارد می توانند اختیاری یا اجباری باشند , به عبارت دیگر مهمان نمی تواند آنها را در رزرو انتخاب نکرده باشد. شما می توانید روش های مختلفی را پیشنهاد دهید هزینه اضافی های اختیاری , و اینکه آیا آنها در صفحه مشخصات ملک شما نشان داده شده اند یا خیر. از آنجا که موارد اضافی را می توان تنها برای نشان دادن رزرو در تاریخهای خاص (برای مثال , برای میوه های فصل) نشان داد , باید اطمینان حاصل کنید که Valid from and To date را تنظیم کرده اید. پس از ایجاد موارد اضافی , می توانید تصاویر را از طریق Media Manager برای آنها بارگذاری کنید. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS' , 'چگونه می توانم پرداخت های آنلاین را انجام دهم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS' , "برای پرداخت آنلاین , باید یک حساب کاربری ارائه دهنده پرداخت آنلاین داشته باشید , به نام Gateway. برای مشاهده درگاه های موجود , به تنظیمات Property> تب Gateways بروید. روی نام یک دروازه کلیک کنید تا انتخاب شود به صفحه پیکربندی آن. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS' , 'آیا می توانم تخفیف بدهم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS' , "می توان تخفیف داد , روشهای مختلفی برای این کار وجود دارد. اگر از طرف مشتری رزرو می کنید , می توانید کل سپرده و رزرو خود را در فرم رزرو تنظیم کنید , با استفاده از فیلدهای Override Accommodation Total and Override Deposit (مهمانان نمی توانند از این ویژگی استفاده کنند). راه دیگر تخفیف دادن به مهمان , ایجاد کوپن های تخفیف است که می تواند به گونه ای پیکربندی شود که فقط بین تاریخهای خاصی قابل استفاده باشد (معتبر از/به) یا فقط زمانی اعمال می شود که رزرو بین تاریخهای خاصی باشد (رزرو معتبر از/تا). این کوپن های تخفیف را می توان فقط به یک مهمان اختصاص داد , یا در صورت تمایل می توانید کوپن ها را چاپ کنید. چاپ شامل یک کد QR است کدام مهمانان می توانند تلفن های خود را اسکن کنند که آنها را به فرم رزرو شما می برد و کد تخفیف قبلاً اعمال شده است. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS' , 'Bookings') ;

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE' , 'وقتی روی New booking (رزرو جدید) کلیک می کنم , به فرم تماس گرفته می شوم , چرا؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE' , 'قبل از رزرو آنلاین , ابتدا باید برخی از قیمت ها (تعرفه ها) را برای هر نوع اتاقی که در ملک واقعی خود دارید تنظیم کنید. هنگامی که برخی از تعرفه ها را ایجاد کردید , می توانید رزرو کنید . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK' , 'رزروهای سیاه چیست؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK' , "رزروهای سیاه رزروهایی هستند که برای خارج کردن اتاق یا اتاق از خدمات ایجاد شده اند. آنها با هیچ مهمانی مرتبط نیستند و برای مثال مفید هستند , به عنوان مثال , اگر یک اتاق نیاز به بازسازی داشته باشد.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES' , 'Images') ;
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO' , 'چگونه تصاویر را بارگذاری کنم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO' , "برای بارگذاری تصاویر , باید از تنظیمات> صفحه مرکز رسانه دیدن کنید. در این صفحه چندین پنجره را مشاهده خواهید کرد. در بالا ممکن است برخی از یادداشت ها را مشاهده کنید , و در زیر آنها یک کشویی را مشاهده خواهید کرد. این منوی کشویی به شما امکان می دهد منبع موردنظر خود را برای بارگذاری تصاویر انتخاب کنید. <br/> در سمت راست ستونی با افزودن تصاویر , پاک کردن لیست و بارگذاری همه وجود دارد. روی افزودن تصاویر کلیک کنید و برخی از تصاویر را از رایانه یا دستگاه تلفن همراه خود انتخاب کنید. با انجام این کار , ستون به لیستی از تصاویر کوچک تبدیل می شود. از اینجا می توانید یک یا چند تصویر را برای منابع خود بارگذاری کنید. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN' , "تصویر\" اصلی \"چیست؟");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN' , 'تصویر اصلی آن چیزی است که در نتایج جستجو و در سربرگ دارایی شما (ناحیه بالای صفحات که چیزی در مورد دارایی شما نشان می دهد) نشان داده می شود. شما باید تصویری را انتخاب کنید که ویژگی شما را در آن نمایش دهد بهترین نور ممکن. برای بارگذاری یک تصویر اصلی , مطمئن شوید که ویژگی اصلی تصویر در لیست کشویی در بالا سمت چپ انتخاب شده است , سپس یک یا چند تصویر را بارگذاری کنید. اگر بیش از یک تصویر بارگذاری کنید , از همه تصاویر در جستجو استفاده می شود. صفحه نتایج به صورت نمایش اسلاید کوچک نمایش داده می شود. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES' , 'نمادهای ویژگی اتاق چیست؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES' , "ویژگی های اتاق را می توان توسط کاربران از حالتهای ویرایش تعرفه Micromanage یا Advanced ایجاد کرد. اینها را می توان به یک یا چند اتاق پیوند داد و در فرم رزرو نمایش داده شد. هنگامی که یک ویژگی اتاق ایجاد کردید , می توانید با انتخاب علامت های ویژگی های اتاق در منوی کشویی در مرکز رسانه , یک تصویر برای آن ویژگی بارگذاری کنید , سپس نام ویژگی اتاق را از منوی کشویی که در زیر ظاهر می شود انتخاب کنید. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS' , 'چگونه تصاویر اتاق را بارگذاری کنم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS' , 'اتاقها را کاربران با استفاده از حالتهای ویرایش تعرفه Micromanage یا Advanced می توانند ایجاد کنند. پس از ایجاد یک یا چند اتاق , می توانید چندین تصویر را برای هر اتاق از طریق مرکز رسانه بارگذاری کنید (نام/شماره اتاق را انتخاب کنید بعد از انتخاب تصاویر اتاق در منوی کشویی). با مشاهده صفحه پیش نمایش و انتخاب برگه اتاق های ما و سپس کلیک روی پیوند Availability , می توانید این تصاویر را در یک نمایش اسلاید مشاهده کنید. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW' , 'چگونه تصاویر نمایش اسلاید را بارگذاری کنم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW' , 'تصاویر نمایش اسلاید در صفحه جزئیات ویژگی (پیش نمایش) , در کنار دکمه کتاب اکنون مشاهده می شود.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS' , 'چگونه می توانم تصاویر اضافی را بارگذاری کنم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS' , "مشابه اتاق ها و ویژگی های اتاق , ابتدا باید یک Extra ایجاد کنید. پس از اتمام کار , می توانید موارد اضافی را در منوی کشویی بالا انتخاب کنید. هنگامی که این کار را انجام دادید , باید نام Extra از لیست کشویی زیر. وقتی نام انتخاب شد می توانید یک یا چند تصویر را برای آن Extra بارگذاری کنید. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING' , 'چیزی مربوط به مهمان است') ;
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION' , 'چگونه بلاله الله را چگونه انجام دهم؟');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER' , 'تو بلا الله الله');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES' , 'چگونه توضیحات را به چند زبان ذخیره کنم؟');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES' , "برای ذخیره توضیحات به چند زبان , ابتدا از صفحه تنظیمات> جزئیات ویژگی بازدید کنید. توضیحات مربوط به ویژگی خود را در آنجا ذخیره کنید. سپس , زبانی را که در آن سایت را مشاهده می کنید تغییر دهید. اکنون به تنظیمات بروید مجددا صفحه مشخصات و دوباره جزئیات را ذخیره کنید. بنابراین , اگر سایت قادر به نمایش هر دو زبان انگلیسی و اسپانیایی (یا هر زبان دیگر) باشد , انگلیسی را انتخاب کنید , توضیحات را به انگلیسی وارد کنید و روی ذخیره کلیک کنید. بعد , فعلی خود را تغییر دهید زبان به اسپانیایی , سپس توضیحات جدید اسپانیایی را ذخیره کنید. این برای همه ورودی های آن صفحه کار می کند. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES' , 'آیا می توانم ویژگی های دیگر این سایت را تغییر دهم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES' , 'خیر , نمی توانید. فقط می توانید املاکی را که ایجاد کرده اید یا به عنوان مدیر دارایی به آنها اختصاص داده شده اید اداره کنید.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER' , 'آیا می توانم ویژگی های دیگر این سایت را تغییر دهم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER' , "بله می توانید , شما یک مدیر Super Property هستید و می توانید هر گونه ویژگی نشان داده شده در صفحه ویژگیهای لیست را تغییر دهید.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES' , 'انواع مهمان چیست/چگونه می توانم هر نفر را در شب تغییر دهم؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES' , 'در تنظیمات> پیکربندی دارایی> برگه تعرفه ها و ارزها , می توانید تصمیم بگیرید که آیا می خواهید به ازای هر نفر در شب هزینه دریافت کنید یا خیر. اگر برای هر نفر در شب هزینه دریافت می کنید , باید یک یا چند نوع مهمان ایجاد کنید. شما می توانید یک نوع مهمان ساده ایجاد کنید , جایی که فقط به آنها توضیح می دهید (به عنوان مثال افراد) , یا می توانید چندین نوع مهمان مختلف ایجاد کنید , به عنوان مثال "بزرگسالان" و "کودکان زیر 10 سال". برای کودکان , اگر می خواهید ارائه دهید با تخفیف 50٪ , "Is is درصد" را روی Yes و مقدار Variant را 50 قرار دهید. اتاق ها دارای نرخ پایه هستند , این تنظیم به شما امکان می دهد قیمت اتاق را بر اساس نوع مهمان تنظیم کنید. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES' , 'ویژگی های اتاق چیست؟');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES' , 'ویژگی های اتاق چیزهایی هستند که اتاق را برجسته می کنند. آنها می توانند چیزی ساده مانند امکانات تهیه چای و قهوه باشند , یا می توانند چیزهایی باشند که واقعاً اتاق را از دیگران بالاتر می برند , مانند" نماهای روی هنگامی که یک ویژگی اتاق ایجاد کردید , می توانید تصاویر مربوط به آن ویژگی را در مرکز رسانه بارگذاری کنید. این ویژگی های اتاق را می توانید در صفحه در دسترس بودن اتاق مشاهده کنید و اگر ویژگی خود را طوری تنظیم کرده اید که سبک لیست اتاق های کلاسیک را نشان دهد (جایی که مهمانان می توانند اتاق مورد نظر خود را دقیقاً انتخاب کنند) سپس می توانند از ویژگی های اتاق برای فیلتر کردن موارد نمایش داده شده در فرم رزرو استفاده کنند. ');

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS' , 'پرداخت ها') ;
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY' , "بعد از رزرو نمی توانید درگاه پرداخت را ببینید.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY' , "اگر به عنوان مدیر املاک وارد سیستم شده اید , دروازه پرداخت را نمی بینید , زیرا خودتان هزینه پرداخت نمی کنید. فقط کاربران غیر مدیر هنگام ورود رزرو , دروازه را مشاهده می کنند.");


