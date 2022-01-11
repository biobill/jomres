<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Translated to pt-PT by Mario Oliveira, Camara de Lobos, Madeira Island, Portugal, 17Set2010 - www.marioliveira.net - Updated 21Jun2011 for ver 5.1
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
//#################################################################

jr_define ('_JOMRES_FAQ', 'Perguntas frequentes');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Propriedades');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Como faço para criar uma propriedade?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Clique em Propriedades> Nova Propriedade para adicionar uma nova propriedade.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Como posso ver a aparência da minha propriedade para os hóspedes?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Clique em Propriedades> Visualizar para ver como sua propriedade fica para os hóspedes.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Como adiciono quartos?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Como você adiciona quartos depende do seu modo de edição de tarifa. No modo de edição de tarifa normal, você não precisa adicionar quartos, pois eles são adicionados automaticamente quando você configura seus preços. Se você estiver usando No modo de microgerenciamento ou edição de tarifa avançada, em Configurações> Quartos você pode adicionar, editar e excluir quartos. Você também poderá criar recursos de quartos e atribuir esses recursos a esses quartos. Além disso, você será capaz de fazer upload de imagens individuais quartos usando o Media Center. Ao criar quartos, você deve tentar garantir que eles reflitam seus quartos do mundo real em sua propriedade, pois isso os tornará mais fáceis de gerenciar. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Como faço para definir os preços dos quartos?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Isso depende do seu modo de edição de tarifa. Se você estiver usando o modo de edição de tarifa normal (configuração de propriedade> guia Modos de edição de tarifa), então você pode configurar o número de quartos que você tem, o preço, o número de pessoas que cada quarto pode acomodar e o número total de pessoas que você deseja em cada reserva. Este modo permite que você defina os preços dos quartos para os próximos 10 anos. <br/> Se estiver usando os modos de edição de tarifa avançada ou Micromanage, então você está capaz de definir preços de quarto para todos os dias nos próximos anos. Você também pode ter várias tarifas para o mesmo tipo de quarto, por exemplo, você pode ter uma tarifa para Cama e café da manhã e outra para Cama, café da manhã e jantar. A menos que você tenha uma necessidade específica , recomendamos que você use Micromanage o tempo todo. Advanced funcionará da mesma maneira, mas você precisa ter cuidado para garantir que as datas de início e término de suas diferentes tarifas sejam consecutivas. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Como faço para criar extras opcionais?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras podem ser adicionados às reservas e são configurados em Configurações> Extras. Eles podem ser opcionais ou 'forçados', em outras palavras, o hóspede não pode desmarcá-los na reserva. Você pode oferecer métodos diferentes de cobrança de extras opcionais e se eles são exibidos ou não na página de detalhes da propriedade. Como os extras podem ser feitos para mostrar apenas se a reserva estiver dentro de certas datas (por exemplo, para frutas da estação), você deve certificar-se de que definiu as datas Válido de e Até. Depois de criar extas opcionais, você pode fazer upload de imagens para eles por meio do Gerenciador de mídia. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Como posso receber pagamentos online?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Para receber pagamentos online, você precisa ter uma conta com um provedor de pagamento online, chamado Gateway. Para ver os gateways disponíveis, vá para Configuração de propriedade> guia Gateways. Clique no nome de um gateway a ser obtido para sua página de configuração. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Posso dar descontos?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Descontos podem ser concedidos, existem várias maneiras de fazer isso. Se você estiver fazendo uma reserva em nome de um cliente, você pode definir seu próprio depósito e totais de reserva no formulário de reserva , usando os campos Substituir Total de Alojamento e Substituir Depósito (os hóspedes não podem usar este recurso). Outra forma de dar um desconto a um hóspede é criar cupons de desconto, que podem ser configurados para que só possam ser usados ​​em determinadas datas (Válido de / para) ou aplicado apenas quando a reserva cai entre certas datas (reserva válida de / para). Estes cupons de desconto podem ser atribuídos a apenas um hóspede ou, se você quiser, pode imprimir os cupons. A impressão inclui um código QR que os hóspedes podem digitalizar em seus telefones que os leva ao seu formulário de reserva com o código de desconto já aplicável. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Reservas');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Quando clico em Nova reserva, sou encaminhado para o formulário de contato, por quê?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Antes de fazer reservas online, você deve primeiro configurar alguns preços (tarifas) para cada tipo de quarto que possui em sua propriedade no mundo real. Depois de criar algumas tarifas, você poderá aceitar as reservas . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'O que são Black Bookings?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Reservas negras são aquelas que foram criadas para colocar um quarto ou quartos fora de serviço. Elas não estão associadas a nenhum hóspede e são úteis, por exemplo, se um quarto precisa ser reformado.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Imagens');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Como faço para enviar imagens?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Para fazer upload de imagens, você precisa visitar a página Configurações> Media Center. Nesta página, você verá vários painéis. Na parte superior, você verá algumas notas e, abaixo delas, uma lista suspensa. Este menu suspenso permite que você selecione para qual recurso você está enviando imagens. <br/> À direita está uma coluna com Adicionar imagens, Limpar lista e Fazer upload de tudo. Clique em Adicionar imagens e selecione algumas imagens de seu desktop ou dispositivo móvel. Quando você fez isso, a coluna mudará para uma lista de miniaturas. A partir daqui você pode fazer upload de uma ou mais imagens para seus recursos. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "O que é a imagem 'Principal'?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'A imagem principal é aquela que aparece nos resultados da pesquisa e no cabeçalho de sua propriedade (a área no topo das páginas que mostra algo sobre sua propriedade). Você deve escolher uma imagem que exiba sua propriedade no melhor luz possível. Para fazer upload de uma imagem principal, certifique-se de que Property Main Image esteja selecionado na lista suspensa no canto superior esquerdo e faça upload de uma ou mais imagens. Se você fizer upload de mais de uma imagem, todas as imagens serão usadas na pesquisa página de resultados exibida como uma pequena apresentação de slides. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'O que são ícones de recursos do quarto?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Os recursos do quarto podem ser criados por usuários dos modos de edição de tarifa Micromanage ou Advanced. Eles podem ser vinculados a um ou mais quartos e são exibidos no formulário de reserva. Depois de criar um recurso de quarto, você pode carregue uma imagem para esse recurso selecionando primeiro Ícones de Recursos de Quarto no menu suspenso no Media Center e, em seguida, selecionando o nome do recurso de quarto no menu suspenso que aparecerá abaixo. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Como faço o upload das imagens da sala?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'As salas podem ser criadas por usuários dos modos de edição de tarifa Micromanage ou Advanced. Assim que uma ou mais salas forem criadas, você pode enviar várias imagens para cada sala através do Media Center (selecione o nome / número da sala após selecionando Imagens de quartos no menu suspenso). Essas imagens podem ser vistas em uma apresentação de slides na página de visualização e selecionando a guia Nossos quartos e clicando no link Disponibilidade. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Como faço o upload das imagens da apresentação de slides?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'As imagens da apresentação de slides são vistas na página Detalhes da propriedade (Visualização), ao lado do botão Reservar agora.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Como faço upload de imagens extras?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Semelhante aos quartos e recursos do quarto, você precisa criar um Extra primeiro. Depois de fazer isso, você pode selecionar Extras no menu suspenso superior. Quando tiver feito isso, você precisa selecionar o nome de o Extra da lista suspensa abaixo. Quando o nome é selecionado, você pode fazer upload de uma ou mais imagens para esse Extra. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Algo relacionado a convidado');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Como faço para blahblahblah?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Você blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Como eu salvo descrições em vários idiomas?');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Para salvar descrições em vários idiomas, primeiro visite a página Configurações> Detalhes da propriedade. Salve a descrição de sua propriedade lá. Em seguida, altere o idioma em que você está visualizando o site. Agora vá para as Configurações Detalhes da propriedade novamente e salve os detalhes novamente. Portanto, se o site for capaz de mostrar os idiomas inglês e espanhol (ou qualquer outro), você deve selecionar inglês, inserir a descrição em inglês e clicar em Salvar. Em seguida, altere o idioma atual idioma para espanhol e, em seguida, salve a nova descrição em espanhol. Isso funciona para todas as entradas dessa página. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Posso modificar outras propriedades neste site?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Não, você não pode. Você só pode administrar propriedades que criou ou foi atribuído como gerente de propriedade.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Posso modificar outras propriedades neste site?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Sim, você pode, você é um Super Gerente de Propriedades e pode modificar quaisquer propriedades mostradas na página Propriedades da Lista.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Quais são os tipos de hóspedes / Como faço para mudar por pessoa por noite?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "Em Configurações> Configuração da propriedade> guia Tarifas e moedas, você pode decidir se deseja cobrar por pessoa por noite. Se você cobrar por pessoa por noite, precisará criar um ou mais tipos de hóspedes. Você pode criar um tipo de convidado simples, onde você apenas dá uma descrição (por exemplo, Pessoas), ou você pode criar vários tipos de convidados diferentes, por exemplo 'Adultos' e 'Crianças menores de 10'. Para as crianças, se você quiser oferecer um desconto de 50% então você definiria 'É porcentagem' como Sim, e o valor de Variância como 50. Os quartos têm tarifas básicas, esta configuração permite que você ajuste o preço do quarto com base no tipo de hóspede. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'O que são características do quarto?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Características do quarto são coisas que fazem o quarto se destacar. Eles podem ser algo simples como utensílios para fazer chá e café, ou podem ser coisas que realmente fazem o quarto se destacar dos outros, como 'Vistas sobre o Depois de criar um recurso de quarto, você pode fazer upload de imagens para esse recurso no Media Center. Esses recursos de quarto podem ser visualizados na página de disponibilidade de quartos e se você configurou sua propriedade para mostrar o estilo de lista de quartos clássicos (onde os hóspedes podem selecionar exatamente o quarto que desejam reservar), eles podem usar os recursos do quarto para filtrar os quartos mostrados no formulário de reserva. ");

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Pagamentos');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Você não consegue ver o portal de pagamento depois de fazer uma reserva.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Se você estiver conectado como um gerente de propriedade, não verá o gateway de pagamento, porque você não paga a si mesmo. Somente usuários não gerentes verão o gateway ao fazer as reservas.");