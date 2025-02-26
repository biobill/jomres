<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ', 'Preguntes més freqüents');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Propietats');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Com puc crear una propietat?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Feu clic a Propietats> Propietat nova per afegir una propietat nova.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Com puc veure l\'aspecte de la meva propietat als hostes?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Feu clic a Propietats> Previsualitza per veure com queda la vostra propietat als hostes.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Com puc afegir habitacions?');
jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP", "Com afegiu habitacions depèn del vostre mode d'edició de tarifes. Al mode d'edició de tarifes normal, no cal afegir habitacions, ja que s'afegeixen automàticament quan configureu els vostres preus. Si utilitzeu Feu el mode d'edició de microgestió o tarifa avançada i, a Configuració> Sales, podeu afegir, editar i suprimir sales. També podreu crear funcions de la sala i assignar-les a aquestes sales. A més, podreu penjar imatges per a cada persona. habitacions que utilitzen el Media Center. Quan creeu habitacions, heu de procurar que reflecteixin les vostres habitacions del món real a la vostra propietat perquè facilitaran la seva gestió. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Com puc establir els preus de les habitacions?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Això depèn del vostre mode d'edició de tarifes. Si utilitzeu el mode d'edició de tarifa normal (Configuració de propietats> pestanya Modes d'edició de tarifes), podeu configurar el nombre d'habitacions que teniu, el preu, el nombre de persones que pot allotjar cada habitació i el nombre total de persones que desitgeu a cada reserva. Aquest mode us permet establir els preus de l\'habitació per als propers 10 anys. <br/> Si utilitzeu els modes d'edició de tarifes Advanced o Micromanage, podeu establir preus de les habitacions per a cada dia durant els propers anys. També podeu tenir diverses tarifes per al mateix tipus d’habitació, per exemple, podeu tenir una tarifa per a allotjament i esmorzar i una altra per a allotjament, esmorzar i sopar. Tret que tingueu una necessitat específica. , us recomanem que utilitzeu Micromanage tot el temps, Advanced funcionarà de la mateixa manera, però heu de tenir cura de garantir que les dates d'inici i finalització de les diferents tarifes siguin consecutives. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Com puc crear extres opcionals?');
jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS", 'Els extres es poden afegir a les reserves i es poden configurar a Configuració> Extres. Aquests poden ser opcionals o" forçats ", és a dir, el client no els pot deseleccionar a la reserva. Podeu oferir diferents mètodes de càrrec per als extres opcionals i si es mostren o no a la pàgina Detalls de la propietat. Com que els extres només es poden mostrar si la reserva es realitza en determinades dates (per exemple, per a fruites de temporada), assegureu-vos que heu establert les dates vàlides des de i fins a. Un cop hàgiu creat extensions opcionals, podeu penjar-ne imatges mitjançant el gestor de suports. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Com puc fer pagaments en línia?');
jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS", "Per fer pagaments en línia, heu de tenir un compte amb un proveïdor de pagaments en línia, anomenat passarel·la. Per veure les passarel·les disponibles, aneu a Configuració de propietats> pestanya Passarel·les. Feu clic al nom d'una passarel·la a la seva pàgina de configuració. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Puc donar descomptes?');
jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS", "Es poden fer descomptes, hi ha diverses maneres de fer-ho. Si feu una reserva en nom d'un client, podeu establir els vostres propis dipòsits i reserves al formulari de reserva , mitjançant els camps Anul·lar allotjament total i Anul·lar dipòsit (els convidats no poden utilitzar aquesta funció). Una altra manera d’oferir un descompte a un hoste és crear cupons de descompte, que es poden configurar de manera que només es puguin utilitzar entre determinades dates (vàlid de / a) o s'aplica només quan la reserva es produeix entre determinades dates (reserva vàlida de / a). Aquest cupó de descompte es pot assignar a un sol convidat o, si voleu, podeu imprimir els cupons. La impressió inclou un codi QR que els clients poden escanejar als telèfons que els portin al formulari de reserva amb el codi de descompte que ja s'aplica. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Reserves');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', "Quan faig clic a Reserva nova, em dirigeix ​​al formulari de contacte, per què?");
jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE", "Abans de fer reserves en línia, primer heu de configurar alguns preus (tarifes) per a cada tipus d'habitació que tingueu a la vostra propietat del món real. Un cop hàgiu creat algunes tarifes, podreu fer reserves . ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Què són les reserves negres?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Les reserves de color negre són reserves que s\'han creat per deixar una o més habitacions fora de servei. No s\'associen a cap convidat i són útils, per exemple, si cal reformar una habitació.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Imatges');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Com puc pujar imatges?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Per penjar imatges, heu de visitar la pàgina Configuració> Media Center. En aquesta pàgina veureu diversos panells. A la part superior podeu veure algunes notes i, a sota, veureu un menú desplegable. Aquest menú desplegable us permet seleccionar per a quin recurs voleu penjar imatges. <br/> A la dreta hi ha una columna amb Afegeix imatges, Esborra llista i Penja-ho tot. Feu clic a Afegeix imatges i seleccioneu algunes imatges des del vostre escriptori o dispositiu mòbil. Quan ja ho heu fet, la columna es convertirà en una llista de miniatures. Des d'aquí podeu penjar una o més imatges per als vostres recursos. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', 'Què és la imatge" Principal "?');
jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN", "La imatge principal és la que apareix als resultats de la cerca i a la capçalera de la vostra propietat (l\'àrea de la part superior de les pàgines que mostren alguna cosa sobre la vostra propietat). Heu de triar una imatge que mostri la vostra propietat a millor llum possible. Per carregar una imatge principal, assegureu-vos que la imatge principal de la propietat estigui seleccionada a la llista desplegable de la part superior esquerra i, a continuació, pengeu una o més imatges. Si pengeu més d’una imatge, totes les imatges s’utilitzaran a la cerca la pàgina de resultats es mostra com una petita presentació de diapositives. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Què són les icones de les funcions de l\'habitació?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Els usuaris de modes d\'edició de tarifes Micromanage o Advanced poden crear funcions de la sala. Es poden enllaçar a una o més habitacions i es mostren al formulari de reserva. Un cop hàgiu creat una funció d'habitació, podeu carregueu una imatge per a aquesta funció seleccionant primer les icones de funcions de la sala al menú desplegable del Media Center i, a continuació, seleccioneu el nom de la funció de la sala al menú desplegable que apareixerà a sota. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Com puc carregar imatges de sala?');
jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS", "Els usuaris poden crear sales per a modes d'edició de tarifes Micromanage o Advanced. Un cop s'han creat una o més sales, podeu penjar diverses imatges per a cada habitació a través del Media Center (seleccioneu el nom / número de la sala després seleccionant Imatges d'habitacions al menú desplegable). Aquestes imatges es poden veure en una presentació de diapositives visualitzant la pàgina de vista prèvia i seleccionant la pestanya Les nostres habitacions i fent clic a l\'enllaç de disponibilitat. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Com puc penjar imatges de diapositives?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Les imatges de la presentació es veuen a la pàgina Detalls de la propietat (Vista prèvia), al costat del botó Reserva ara.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Com puc carregar imatges extres?');
jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS", "De manera similar a les habitacions i les funcions de les habitacions, primer heu de crear un extra. Un cop fet això, podeu seleccionar Extres al menú desplegable superior. Quan hàgiu fet això, heu de seleccionar el nom de l\'Extra de la llista desplegable següent. Quan se selecciona el nom, podeu penjar una o més imatges per a l\'Extra. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Alguna cosa relacionada amb els convidats');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', "Com puc blahblahblah?");
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Tu blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Com puc desar descripcions en diversos idiomes?');

jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES", "Per desar descripcions en diversos idiomes, primer visiteu la pàgina Configuració> Detalls de la propietat. Deseu-hi la descripció de la vostra propietat. A continuació, canvieu l\'idioma en què esteu veient el lloc. Ara aneu a Configuració Torneu a la pàgina Detalls de la propietat i deseu-ne de nou. Per tant, si el lloc és capaç de mostrar idiomes tant en anglès com en castellà (o qualsevol altre), seleccioneu anglès, introduïu la descripció en anglès i feu clic a Desa. A continuació, canvieu la vostra pàgina actual idioma a l\'espanyol i, a continuació, deseu la nova descripció espanyola. Funciona per a totes les entrades d'aquesta pàgina. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Puc modificar altres propietats d\'aquest lloc?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, no podeu. Només podeu administrar propietats que heu creat o que heu assignat com a gestor de propietats.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Puc modificar altres propietats d\'aquest lloc?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Sí que podeu, sou un Super Administrador de propietats i podeu modificar qualsevol propietat que es mostri a la pàgina Propietats de la llista.");
jr_define ("_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES", "Què són els tipus de convidats / Com puc canviar per persona i nit?");
jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES", "A la pestanya Configuració> Configuració de propietats> Tarifes i divises, podeu decidir si voleu cobrar per persona per nit. Si cobreu per persona per nit, haureu de crear un o més tipus de convidats. Podeu crear un tipus de convidat senzill on només els proporcioneu una descripció (per exemple, persones) o podeu crear diversos tipus de convidats diferents, per exemple, \"Adults\" i \"Nens ​​menors de 10 anys\". Per als nens, si voleu oferir-los amb un descompte del 50%, definiríeu \"És percentatge\" a Sí i el valor de la variant a 50. Les habitacions tenen tarifes bàsiques, aquest paràmetre us permet ajustar el preu de l\'habitació en funció del tipus de client. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Què són les funcions de l\'habitació?');
jr_define ("_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES", "Les funcions de l\'habitació són coses que destaquen la sala. Poden ser senzilles, com ara instal·lacions per fer te i cafè, o poden ser coses que realment facin que l\'habitació s'aixequi per sobre de les altres, com ara\" Vistes sobre la bay '. Un cop hàgiu creat una funció d'habitació, podeu penjar imatges d'aquesta funció al Media Center. Aquestes funcions es poden veure a la pàgina de disponibilitat d'habitacions i, si heu configurat la vostra propietat per mostrar l\'estil de llista d'habitacions clàssiques. (on els clients poden seleccionar exactament quina habitació volen reservar), poden utilitzar les funcions de l\'habitació per filtrar els preus que es mostren al formulari de reserva. ");

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Pagaments');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "No podeu veure la passarel·la de pagament després de fer una reserva.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Si heu iniciat la sessió com a administrador de propietats, no veureu la passarel·la de pagament perquè no pagueu a vosaltres mateixos. Només els usuaris que no siguin gestors veuran la passarel·la en fer les reserves.");
    
