<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.7
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
//#################################################################
/**
 *
 * @package Jomres\Core\Languages
 *
 * Language files.
 *
 **/
jr_define('_JOMRES_FAQ', 'FAQ (Questions Fréquemment Posées)');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Établissements');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Comment créer un établissement ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Cliquez sur Établissements > Nouvel établissement pour ajouter une nouvel établissement.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Comment puis-je voir à quoi ressemble mon établissement pour les clients/internautes ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Cliquez sur Établissement > Aperçu/Prévisualisation pour voir à quoi ressemble votre établissement pour les clients.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Comment puis-je ajouter des chambres ? ');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', 'La façon dont vous ajoutez des chambres/hébergements dépend de votre mode d’édition des tarifs. En mode normal de modification du tarif, vous n\'avez pas besoin d\'ajouter de chambres, car elles sont automatiquement ajoutées lors de la configuration de vos prix. Si vous utilisez le mode de modification du tarif Micromanage ou Avancé, vous pouvez ajouter, modifier et supprimer des chambres dans Paramètres > Chambres. Vous pourrez également créer des équipements de chambres et les affecter à ces chambres. De plus, vous pourrez télécharger des images pour les chambres à l\'aide de Gestionnaire de médias. Lorsque vous créez des chambres, vous devez vous assurer que celles-ci reflètent bien la réalité des équipements, car elles seront ainsi plus faciles à gérer et à identifier.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Comment renseigner les prix des chambres ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', 'Cela dépend de votre mode d\’édition des tarifs. Si vous utilisez le mode normal de modification du tarif (onglet Configuration des établissements > Modes de modification du tarif), vous pouvez configurer le nombre de chambres dont vous disposez, le prix, le nombre de personnes que chaque chambre peut accueillir et le nombre total de personnes que vous souhaitez dans chacune. Ce mode vous permet de définir le prix des chambres pour les 10 prochaines années. <br/> Si vous utilisez les modes de modification de tarif Avancé ou Micromanage, vous pouvez définir le prix des chambres jour par jour pour les années à venir. Vous pouvez également avoir plusieurs tarifs pour le même type de chambre ; par exemple, vous pouvez avoir un tarif pour le lit + le petit-déjeuner et un autre pour le lit + le petit-déjeuner + le dîner. À moins que vous n\'ayez un besoin spécifique, nous vous recommandons d\'utiliser le mode Avancé ou Micromanage Ce mode fonctionnera de la même manière, mais vous devrez veiller à ce que les dates de début et de fin de vos différents tarifs soient consécutives.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Comment créer des extras ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', 'Des extras peuvent être ajoutés aux réservations et sont configurables dans Paramètres > Extras. Ceux-ci peuvent être facultatifs ou forcés, autrement dit, le client ne peut pas les désélectionner lors de la réservation. Vous pouvez proposer différentes méthodes de facturation pour les extras : qu\'ils soient affichés ou non dans la page Descriptif de l\'établissement. Étant donné que les extras peuvent être uniquement saisonniers ou à des périodes limitées (par exemple, pour les fruits de saison ou une activité liée à la météo), vous devez vous assurer que vous avez défini des dates de validité avec début (De) et fin (à). Une fois que vous avez créé des extras, vous pouvez télécharger les images correspondantes via le Gestionnaire de médias.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Comment puis-je encaisser les paiements en ligne ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', 'Pour encaisser les paiements en ligne, vous devez disposer d\'un compte auprès d\'un fournisseur de paiement en ligne, appelé passerelle. Pour voir les passerelles de paiements disponibles, allez à l\'onglet Configuration des établissements > Passerelles de paiements. Cliquez sur le nom d\'une passerelle pour accéder à sa page de configuration.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Puis-je faire des remises ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', 'Des réductions peuvent être accordées, il y a un plusieurs façons de le faire. Si vous effectuez une réservation pour le compte d\'un client, vous pouvez définir vos propres acomptes et tarifs de réservations dans le formulaire de réservation, à l\'aide des champs Modifier le total de la réservation et Modifier l\'acompte (les clients ne peuvent pas utiliser cette fonctionnalité). Une autre façon de donner à un client une réduction est de créer des coupons de réduction, qui peuvent être configurés de manière à ne pouvoir être utilisés qu\'entre certaines dates (valable du / au) ou appliqués uniquement lorsque la réservation tombe entre certaines dates (réservation valable du / au ). Ces coupons de réduction peuvent être attribués à un seul client, ou si vous le souhaitez, vous pouvez imprimer les coupons. L\'impression comprend un code QR que les clients peuvent numériser sur leur téléphone et qui les dirige vers votre formulaire de réservation où le code de réduction sera appliqué.');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Réservations');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Lorsque je clique sur Nouvelle réservation, je suis redirigé vers le formulaire de contact : pourquoi ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Avant de pouvoir prendre des réservations en ligne, vous devez d\'abord configurer des tarifs pour chaque type de chambre que vous avez dans votre établissement. Une fois que vous avez créé des tarifs, vous pourrez prendre des réservations.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Que sont les réservations noires (hors service - OOO : Out Of Order) ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', 'Les réservations noires sont des réservations créées pour mettre une ou plusieurs chambres hors service. Ils ne sont associés à aucun invité et sont utilisées, par exemple, si une pièce doit être rénovée.');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Comment télécharger des images ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', 'Pour télécharger des images, veuillez vous rendre sur l\'espace Paramètres > Gestion des médias. Sur cette page, vous verrez plusieurs panneaux. En haut, vous avez des notes et en dessous, vous verrez une liste déroulante. Cette liste déroulante vous permet de sélectionner la ressource pour laquelle vous téléchargez des images.<br/> Sur la droite se trouve une colonne avec Ajouter des images, Effacer la liste et Tout télécharger. Cliquez sur Ajouter des images et sélectionnez des images sur votre ordinateur de bureau ou votre appareil mobile. Lorsque vous avez terminé, la colonne devient une liste de vignettes. Vous pouvez aussi télécharger une ou plusieurs images pour vos ressources.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', 'Que veut dire Image principale ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'L\'image principale est celle qui apparaît dans les résultats de recherche et dans l\'en-tête de la page de votre établissement. Vous devez choisir une image qui présente votre établissement de la meilleur façon possible. Pour télécharger une image principale, assurez-vous que la propriété Image principale est bien sélectionnée dans la liste déroulante en haut à gauche, puis téléchargez une ou plusieurs images. Si vous téléchargez plus d\'une image, toutes les images seront utilisées dans la page des résultats de la recherche sous la forme d\'un petit diaporama.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Que sont les icônes des équipements de chambres ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Les équipements des chambres peuvent être créés par les administrateurs des modes d’édition des tarifs Micromanage ou Avancés. Ceux-ci peuvent être liés à une ou plusieurs chambres et sont affichés dans le formulaire de réservation. Une fois que vous avez créé un équipement de chambre, vous pouvez télécharger une image pour cette équipement en sélectionnant d\'abord les icônes d\'équipements de chambre dans le menu déroulant du Gestionnaire de Médias, puis en sélectionnant le nom de l\'équipement des chambres dans le menu déroulant qui apparaît en dessous.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Comment télécharger des images des chambres ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Les chambres peuvent être créées par les utilisateurs des modes d’édition des tarifs Micromanage ou Avancés. Une fois qu\'une ou plusieurs chambres ont été créées, vous pouvez télécharger plusieurs images pour chaque chambre via le Gestionnaire des médias (sélectionnez le nom/le numéro de la chambre après avoir sélectionné Images des chambres dans le menu déroulant). Ces images peuvent être vues dans un diaporama en affichant la Prévisualisation/Aperçu, en sélectionnant l\'onglet Nos chambres, puis en cliquant sur le lien Disponibilité.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Comment télécharger des images de diaporama ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Les images du diaporama sont visibles dans la page Descriptif de l\'établissement (Prévisualisation/Aperçu), à côté du bouton Réserver maintenant.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Comment télécharger des images pour les extras ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', 'La procédure est semblable aux chambres et aux équipements de la chambre, vous devez créer un extra en premier. Une fois que cela est fait, vous pouvez sélectionner Extras dans le menu déroulant supérieur. Ensuite, vous devez sélectionner le nom de l\'Extra dans la liste déroulante ci-dessous. Lorsque le nom est sélectionné, vous pouvez télécharger une ou plusieurs images pour cet extra.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Comment enregistrer des descriptions dans plusieurs langues ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', 'Pour enregistrer les descriptions dans plusieurs langues, consultez d’abord la page Paramètres > Descriptif de l\'établissement. Enregistrez la description de votre établissement à cet endroit. Ensuite, modifiez la langue d\'affichage du site. Maintenant, accédez à nouveau à la page Paramètres > Descriptif de l\'établissement, puis enregistrez à nouveau votre etxte. Par exemple, le site est capable d\'afficher l\'anglais et l\'espagnol (ou toute autre langue). Pour cela, vous devez sélectionner l\'anglais, entrer la description en anglais, puis cliquer sur Enregistrer. Ensuite, changez la langue actuelle en espagnol, puis enregistrez la nouvelle description en espagnol. Cela fonctionne pour toutes les entrées sur cette page.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Puis-je modifier d\'autres établissement sur le site ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Non, vous ne pouvez pas ! Vous ne pouvez administrer que les établissements que vous avez créées ou auxquelles vous avez été affecté en tant que gestionnaire d\'établissement (partenaire).');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Puis-je quand même modifier d\'autres établissements sur ce site dans certains cas ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', 'Oui ! Si vous êtes un Super Property Manager (super administrateur d\'établissements), vous pouvez modifier les établissements affichés dans la page Liste des établissements.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Quels sont les types de clients ? Comment puis-je changer le tarif par personne et par nuit ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', 'Dans Paramètres > Configuration des établissements > onglet Tarifs et Devises, vous pouvez décider si vous souhaitez facturer Par personne et par nuit. Si vous voulez chargez le paramètre Par personne et par nuit, vous devrez créer un ou plusieurs types de client. Vous pouvez créer un type de client simple, en leur donnant simplement une description (par exemple : Personnes) ou en créant plusieurs types de clients différents (par exemple : Adultes, Enfants de moins de 10 ans). Pour les enfants, si vous souhaitez offrir un rabais de 50 % par exemple, définissez l\'option En pourcentage sur Oui et la valeur sur 50. Les chambres ayant des tarifs de base, ce paramètre vous permet d\'ajuster le prix de la chambre sur le type de client.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Quels sont les équipements des chambres ?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', 'Les équipements des chambres sont des éléments qui la distinguent. Cela peut être quelque chose de simple, comme un plateau ou une bouilloire, ou des choses qui la valorise vraiment, comme une Vues sur la baie. Une fois que vous avez créé un équipement de chambre, vous pouvez télécharger des images pour cet élément dans la Gestion des médias. Ces équipements de chambre peuvent être consultés sur la page de disponibilité des chambres. Si vous avez configuré votre établissement pour afficher le style de liste de chambres classiques (où les clients peuvent sélectionner exactement la chambre à réserver), ils peuvent utiliser les équipements de chambre pour filtrer la recherche des chambres dans le formulaire de réservation.');

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Paiements');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Vous ne pouvez pas voir la passerelle de paiement après avoir effectué une réservation.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Si vous êtes connecté en tant que gestionnaire immobilier, vous ne verrez pas la passerelle de paiement, car vous ne vous payez pas vous-même. Seuls les utilisateurs non gestionnaires verront la passerelle lors de la réservation.");
