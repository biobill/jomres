<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ', 'Հաճախ տրվող հարցեր');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Հատկություններ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Ինչպե՞ս կարող եմ ստեղծել սեփականություն');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Նոր գույք ավելացնելու համար կտտացրեք Հատկություններ> Նոր սեփականություն');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Ինչպե՞ս կարող եմ տեսնել, թե հյուրանոցին ինչ տեսք ունի իմ սեփականությունը');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Կտտացրեք Հատկություններ> Նախադիտում `տեսնելու, թե հյուրանոցն ինչ տեսք ունի ձեր սեփականությանը:');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Ինչպե՞ս ավելացնել սենյակներ');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Սենյակների ավելացման եղանակը կախված է ձեր սակագնի խմբագրման ռեժիմից: Սովորական սակագնային խմբագրման ռեժիմում սենյակներ ավելացնելու կարիք չկա, քանի որ դրանք գները կազմաձևելիս դրանք ինքնաբերաբար ավելացվում են: Եթե օգտագործում եք Միկրոկառավարման կամ Ընդլայնված սակագնային խմբագրման ռեժիմ, այնուհետև Կարգավորումներ> Սենյակներ կարող եք ավելացնել, խմբագրել և ջնջել սենյակներ: Դուք նաև կկարողանաք ստեղծել սենյակի առանձնահատկություններ և դրանք հատկացնել այդ սենյակներին: Բացի այդ, դուք կկարողանաք անհատական ​​պատկերներ վերբեռնել Մեդիա կենտրոնից օգտվող սենյակներ: Երբ սենյակներ եք ստեղծում, պետք է փորձեք ապահովել, որ դրանք ձեր սեփականության մեջ արտացոլեն ձեր իրական աշխարհի սենյակները, քանի որ դա ավելի հեշտ կդարձնի դրանք կառավարելը ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Ինչպե՞ս կարող եմ սահմանել սենյակների գները');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', 'Սա կախված է ձեր սակագնային խմբագրման եղանակից: Եթե դուք օգտագործում եք Նորմալ սակագնի խմբագրման ռեժիմը (Գույքի կազմաձևում> Սակագնի խմբագրման ռեժիմներ" ներդիրը), ապա կարող եք կարգավորել ձեր ունեցած սենյակների քանակը, գինը, համարը: յուրաքանչյուր սենյակ կարող է տեղավորել և յուրաքանչյուր անձի համար անհրաժեշտ քանակի յուրաքանչյուր ամրագրում: Այս ռեժիմը թույլ է տալիս սահմանել սենյակների գները հաջորդ 10 տարիների համար: <br/> Եթե դուք օգտագործում եք Advanced կամ Micromanage սակագնային խմբագրման ռեժիմներ, ապա դուք կարող եք սահմանել սենյակների գները ամեն օր գալիք տարիների համար: Դուք կարող եք ունենալ նաև մի քանի սակագներ նույն սենյակի տեսակի համար, օրինակ ՝ կարող եք ունենալ մեկ սակագին "Մահճակալ և նախաճաշ" -ի համար, իսկ մյուսը ՝ մահճակալի, նախաճաշի և երեկոյան ճաշի: Եթե հատուկ կարիք չունեք , խորհուրդ ենք տալիս անընդհատ օգտագործել Micromanage- ը, Advanced- ը նույն կերպ կաշխատի, բայց դուք պետք է զգույշ լինեք ՝ ապահովելու համար, որ ձեր տարբեր սակագների մեկնարկի և ավարտի ամսաթվերը լինեն հաջորդական ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Ինչպե՞ս կարող եմ ստեղծել հավելյալ հավելումներ');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', 'Լրացուցիչ հավելումները կարող են ավելացվել ամրագրումներին և կազմաձևված են Կարգավորումներ> Լրացուցիչ: Դրանք կարող են լինել կամընտիր կամ" հարկադրված ", այլ կերպ ասած` հյուրը չի կարող դրանք ընտրել ընտրացանկում: Կարող եք առաջարկել տարբեր մեթոդներ կամընտիր հավելավճարների գանձում, և դրանք ցուցադրված են, թե ոչ ՝ ձեր սեփականության մանրամասների էջում: Քանի որ հավելումները կարող են ցուցադրվել միայն այն դեպքում, եթե ամրագրումը որոշակի ժամկետներում է (օրինակ ՝ սեզոնային մրգերի համար), դուք պետք է համոզվեք, որ սահմանել եք Valid from and to Date- ները: Լրացուցիչ հավելումներ ստեղծելուց հետո կարող եք նրանց համար պատկերներ վերբեռնել Media Manager- ի միջոցով: ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Ինչպե՞ս կարող եմ վճարումներ կատարել առցանց?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Առցանց վճարումներ կատարելու համար պետք է հաշիվ ունենալ առցանց վճարումների մատակարարի հետ, որը կոչվում է Gateway: Հասանելի դարպասները տեսնելու համար անցեք Property Configuration> Gateways ներդիրը: Կտտացրեք դարպասի անվան համար: դեպի իր կազմաձևման էջը ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Կարո՞ղ եմ զեղչեր տալ');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "canեղչերը կարող են տրվել, կան մի քանի տարբեր եղանակներ: Եթե դուք պատվիրում եք հաճախորդի անունից, ապա կարող եք ամրագրել ձեր Ավանդը և Ամրագրման ընդհանուր գումարները ամրագրման ձևում , օգտագործելով Override Accommodation Total և Override Deposit դաշտերը (հյուրերը չեն կարող օգտագործել այս հնարավորությունը): Հյուրերին զեղչ տալու մեկ այլ եղանակ է զեղչի կտրոնների ստեղծումը, որոնք կարող են կազմաձևվել այնպես, որ դրանք կարող են օգտագործվել միայն որոշակի ամսաթվերի միջև (վավերական է /ից) կամ կիրառվում է միայն այն դեպքում, երբ ամրագրումը ընկնում է որոշակի ամսաթվերի միջև (Ամրագրումը գործում է/մինչև): Այս զեղչի կտրոնները կարող են տրվել միայն մեկ հյուրի, կամ եթե ցանկանում եք, կարող եք տպել կտրոնները: Տպագրությունը ներառում է QR կոդ որոնք հյուրերը կարող են սկանավորել իրենց հեռախոսների մեջ, ինչը նրանց տանում է ձեր ամրագրման ձևին ՝ արդեն գործում է զեղչի ծածկագիրը ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Ամրագրումներ');
    
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Երբ սեղմում եմ Նոր ամրագրում, ինձ տանում են Կոնտակտային ձև, ինչու՞');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Մինչև առցանց ամրագրումներ կատարելը, նախ պետք է կազմաձևեք որոշ գներ (սակագներ) ձեր իրական անշարժ գույքի յուրաքանչյուր սենյակի տեսակի համար: Որոշ սակագներ ստեղծելուց հետո դուք կկարողանաք ամրագրումներ կատարել: . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Ի՞նչ են սև ամրագրումները');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Սև ամրագրումները այն ամրագրումներ են, որոնք ստեղծվել են սենյակ կամ սենյակներ ծառայությունից դուրս բերելու համար: Դրանք կապված չեն որևէ հյուրի հետ և օգտակար են, օրինակ, եթե սենյակը վերանորոգման կարիք ունի:") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Պատկերներ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Ինչպե՞ս կարող եմ նկարներ վերբեռնել');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Պատկերներ վերբեռնելու համար հարկավոր է այցելել Կարգավորումներ> Մեդիա կենտրոն էջը: Այս էջում դուք կտեսնեք մի քանի պատուհան: Վերևում կարող եք տեսնել որոշ նշումներ, իսկ դրանց տակ` բացվող պատուհան: Այս բացվող պատուհանը թույլ է տալիս ընտրել, թե որ ռեսուրսի համար եք պատկերներ վերբեռնում: <br/> Աջ կողմում կա սյունակ ՝ Ավելացնել պատկերներ, ջնջել ցանկը և վերբեռնել բոլորը: Կտտացրեք Ավելացնել պատկերներ և ընտրեք որոշ պատկերներ ձեր աշխատասեղանից կամ շարժական սարքից: Երբ Դուք դա արել եք, սյունակը կփոխվի մանրապատկերների ցանկի: Այստեղից կարող եք մեկ կամ մի քանի պատկեր վերբեռնել ձեր ռեսուրսների համար: ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', 'Ո՞րն է" Հիմնական "պատկերը');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Հիմնական պատկերն այն է, որը հայտնվում է որոնման արդյունքներում և ձեր սեփականության վերնագրում (ձեր սեփականության մասին ինչ -որ բան ցուցադրող էջերի վերևում գտնվող տարածք): Դուք պետք է ընտրեք մի պատկեր, որը ցուցադրի ձեր սեփականությունը հնարավորինս լավագույն լույս: Հիմնական պատկերը վերբեռնելու համար համոզվեք, որ Property Main Image- ը ընտրված է ձախ վերևի բացվող ցուցակում, այնուհետև վերբեռնեք մեկ կամ մի քանի պատկեր: Եթե վերբեռնեք մեկից ավելի պատկերներ, ապա բոլոր պատկերները կօգտագործվեն որոնման մեջ: արդյունքների էջը ցուցադրվում է որպես փոքր սլայդերի ցուցադրում: ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Որո՞նք են սենյակի առանձնահատկությունների պատկերակները:');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Սենյակի առանձնահատկությունները կարող են ստեղծել Micromanage կամ Advanced սակագնային խմբագրման ռեժիմների օգտվողները: Դրանք կարող են կապված լինել մեկ կամ մի քանի սենյակների հետ և ցուցադրվել ամրագրման ձևում: Երբ ստեղծեք սենյակի հատկություն, կարող եք վերբեռնեք այդ հատկության պատկերը ՝ նախ Մեդիա կենտրոնում ընտրելով "Սենյակի առանձնահատկություններ" պատկերակները, այնուհետև ներքևում հայտնվող պատուհանից ընտրելով սենյակի գործառույթի անունը ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Ինչպե՞ս կարող եմ վերբեռնել սենյակի պատկերները');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Սենյակները կարող են ստեղծվել Micromanage կամ Advanced սակագնային խմբագրման ռեժիմների օգտվողների կողմից: Մեկ կամ մի քանի սենյակ ստեղծելուց հետո յուրաքանչյուր սենյակի համար կարող եք մի քանի պատկեր վերբեռնել Մեդիա կենտրոնի միջոցով (ընտրեք սենյակի անունը/համարը հետո ընտրելով սենյակի պատկերներ բացվող բաժնում): Այս պատկերները կարելի է տեսնել սլայդ շոուում `դիտելով Նախադիտման էջը և ընտրելով" Մեր սենյակները "ներդիրը, այնուհետև կտտացնելով Հասանելիության հղմանը: ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Ինչպե՞ս կարող եմ վերբեռնել սլայդերի ցուցադրման պատկերներ');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Սլայդերի ցուցադրման պատկերները երևում են Հատկությունների մանրամասների (Նախադիտում) էջում `Գիրք հիմա կոճակի կողքին:');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Ինչպե՞ս կարող եմ վերբեռնել լրացուցիչ պատկերներ');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', 'Սենյակների և սենյակների առանձնահատկությունների նման, նախ պետք է ստեղծել լրացուցիչ: Դա անելուց հետո, վերևի բացվող պատուհանում կարող եք ընտրել" Լրացուցիչ ": Երբ դա անեք, դուք պետք է ընտրեք անունը հավելյալը ներքևի բացվող ցուցակից: Անունն ընտրելիս կարող եք վերբեռնել մեկ կամ մի քանի պատկեր այդ Լրացուցիչի համար ');
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Ինչ -որ բան կապված է հյուրի հետ');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Ինչպե՞ս կարող եմ blahblahblah?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Դուք բլահբլահլահ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Ինչպե՞ս կարող եմ պահպանել նկարագրությունները բազմաթիվ լեզուներով');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Բազմաթիվ լեզուներով նկարագրությունները պահպանելու համար նախ այցելեք Կարգավորումներ> Գույքի մանրամասների էջ: Պահեք ձեր գույքի նկարագրությունը այնտեղ: Հաջորդը, փոխեք այն լեզուն, որով դիտում եք կայքը: Այժմ անցեք Կարգավորումներ Կրկին սեփականության մանրամասների էջ և նորից պահեք մանրամասները: Այսպիսով, եթե կայքը կարող է ցուցադրել ինչպես անգլերեն, այնպես էլ իսպաներեն (կամ որևէ այլ) լեզու, ապա կընտրեիք անգլերեն, մուտքագրեք նկարագրությունը անգլերենով, այնուհետև կտտացրեք Պահել: Հաջորդը, փոխեք ձեր ընթացիկը լեզուն իսպաներենին, այնուհետև պահպանեք նոր իսպաներեն նկարագրությունը: Սա աշխատում է այդ էջի բոլոր մուտքերի համար: ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Կարո՞ղ եմ փոփոխել այս կայքի այլ հատկություններ');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Ոչ, դուք չեք կարող. Դուք կարող եք կառավարել միայն ձեր կողմից ստեղծված կամ որպես սեփականության կառավարիչ հատկացված սեփականությունները:');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Կարո՞ղ եմ փոփոխել այս կայքի այլ հատկություններ');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Այո, կարող ես, դու Super Property Manager- ն ես և կարող ես փոփոխել Listանկի հատկությունների էջում ցուցադրվող ցանկացած հատկություն");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Որո՞նք են հյուրերի տեսակները/Ինչպե՞ս կարող եմ փոխել մեկ անձի համար մեկ գիշերվա ընթացքում');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', 'Պարամետրերում> Գույքի կազմաձևում> Սակագներ և արժույթներ ներդիրում կարող եք որոշել, թե արդյոք ցանկանում եք գանձել մեկ անձի համար մեկ գիշերվա համար: Եթե մեկ անձից մեկ գիշերվա համար գանձում եք, ապա ձեզ հարկավոր է ստեղծել մեկ կամ ավելի հյուրերի տեսակներ: Կարող եք ստեղծել հյուրի պարզ տեսակ, որտեղ նրանց տալիս եք նկարագրություն (օրինակ ՝ անձինք), կամ կարող եք ստեղծել հյուրերի մի քանի տարբեր տեսակներ, օրինակ ՝ "Մեծահասակներ" և "Մինչև 10 տարեկան երեխաներ": Երեխաների համար, եթե ցանկանում եք առաջարկել 50% զեղչ, ապա "Is տոկոսը" սահմանում եք "Այո", իսկ Տարբերության արժեքը ՝ 50: Սենյակներն ունեն բազային դրույքաչափեր, այս պարամետրը թույլ է տալիս հարմարեցնել սենյակի գինը ՝ ելնելով հյուրի տիպից ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Որո՞նք են սենյակի առանձնահատկությունները:');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', 'Սենյակի առանձնահատկությունները սենյակն առանձնացնում են: Դրանք կարող են լինել պարզ, ինչպես թեյի և սուրճի պատրաստման սարքավորումները, կամ դրանք կարող են իսկապես բարձրացնել սենյակը մյուսներից, ինչպես օրինակ` "Տեսարաններ դեպի այլոց" Երբ ստեղծեք Սենյակի առանձնահատկությունը, կարող եք պատկերներ տեղադրել այդ հնարավորության համար Մեդիա կենտրոնում: Սենյակի այս հատկությունները կարելի է դիտել սենյակի առկայության էջում, և եթե դուք կազմաձևել եք ձեր գույքը `ցուցադրելու Դասական սենյակների ցուցակի ոճը (որտեղ հյուրերը կարող են ճշգրիտ ընտրել, թե որ սենյակն են ցանկանում ամրագրել), ապա նրանք կարող են օգտագործել սենյակի հատկությունները `ամրագրման ձևում ցուցադրվող սենյակները զտելու համար');

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Վճարումներ');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Ամրագրում կատարելուց հետո չեք կարող տեսնել վճարման դարպասը");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Եթե մուտք եք գործել որպես Գույքի կառավարիչ, չեք տեսնի վճարման դարպասը, քանի որ ինքներդ չեք վճարում: Ամրագրումներ կատարելիս դարպասը կտեսնեն միայն ոչ կառավարիչ օգտվողները");

