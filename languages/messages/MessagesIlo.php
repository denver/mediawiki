<?php
/** Iloko (Ilokano)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Joemaza
 * @author Kaganer
 * @author Lam-ang
 * @author Saluyot
 * @author Urhixidur
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Midia',
	NS_SPECIAL          => 'Espesial',
	NS_TALK             => 'Tungtungan',
	NS_USER             => 'Agar-aramat',
	NS_USER_TALK        => 'Agar-aramat_tungtungan',
	NS_PROJECT_TALK     => '$1_tungtungan',
	NS_FILE             => 'Papeles',
	NS_FILE_TALK        => 'Papeles_tungtungan',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_tungtungan',
	NS_TEMPLATE         => 'Plantilia',
	NS_TEMPLATE_TALK    => 'Plantilia_tungtungan',
	NS_HELP             => 'Tulong',
	NS_HELP_TALK        => 'Tulong_tungtungan',
	NS_CATEGORY         => 'Kategoria',
	NS_CATEGORY_TALK    => 'Kategoria_tungtungan',
);

$messages = array(
# User preference toggles
'tog-underline' => 'Pinag-ugisan ti silpo:',
'tog-hideminor' => 'Ilemmeng dagiti bassit a panagbaliw kadagiti naudi a sinuk-sukatan',
'tog-hidepatrolled' => 'Ilemmeng dagiti napatruliaan nga inurnos kadagiti naudi a sinuk-sukatan',
'tog-newpageshidepatrolled' => 'Ilemmeng dagiti napatruliaan a panid manipud ti baro a listaan ti panid',
'tog-extendwatchlist' => 'Ipalawa ti listaan ti bambantayan tapno maipakita amin a nasukatan, tapno saan laeng a dagiti nabiit',
'tog-usenewrc' => 'Dagiti grupo a panagbaliw babaen ti panid kadagiti kinaudi a panagbaliw ken banbantayan',
'tog-numberheadings' => 'Automatiko a pabilangan dagiti paulo',
'tog-showtoolbar' => 'Ipakita ti baras ti ramit ti panag-urnos',
'tog-editondblclick' => 'Urnosen dagiti panid iti mamindua a panagpindut',
'tog-editsectiononrightclick' => 'Pakabaelan ti panag-urnos ti paset babaen ti kanawan a panagpindut kadagiti titulo ti paset',
'tog-rememberpassword' => 'Laglagipem ti iseserrekko iti daytoy a pagbasabasa (iti kapaut nga $1 {{PLURAL:$1|aldaw|al-aldaw}})',
'tog-watchcreations' => 'Agnayon kadagiti panid a pinartuatko ken papeles nga inkargak idiay listaan ti bambantayak',
'tog-watchdefault' => 'Agnayon kadagiti panid ken papeles nga inurnosko idiay listaan ti bambantayak',
'tog-watchmoves' => 'Agnayon kadagiti panid ken papeles nga inyalisko idiay listaan ti bambantayak',
'tog-watchdeletion' => 'Agnayon kadagiti panid ken papeles nga inikkatko idiay listaan ti bambantayak',
'tog-minordefault' => 'Markaan amin nga inurnos a kas sigud a bassit',
'tog-previewontop' => 'Ipakita ti panagipadas sakbay ti pagurnosan a kahon',
'tog-previewonfirst' => 'Ipakita ti pinadas iti umuna a panag-urnos',
'tog-enotifwatchlistpages' => 'Esuratannak no mabaliwan ti panid wenno papeles idiay listaan dagiti bambantayak',
'tog-enotifusertalkpages' => 'Esuratannak no mabaliwan ti panid ti tungtungak',
'tog-enotifminoredits' => 'Esuratannak pay para kadagiti bassit a panag-urnos kadagiti panid ken papeles',
'tog-enotifrevealaddr' => 'Iparang ti pagtaengan ti esuratko kadagiti panagipakaaammo nga esurat',
'tog-shownumberswatching' => 'Ipakita ti bilang dagiti agbuybuya nga agar-aramat',
'tog-oldsig' => 'Ti adda a pirma:',
'tog-fancysig' => 'Tratuen ti pirma a kas wikitext (nga awan ti automatiko a panagsilpo)',
'tog-uselivepreview' => 'Usaren ti agdama a panagipadas (eksperimento)',
'tog-forceeditsummary' => 'Pakaammuannak no sumrek ti blanko a pakabuklan ti panag-urnos',
'tog-watchlisthideown' => 'Ilemmeng dagiti inurnosko manipud ti listaan ti bambantayan',
'tog-watchlisthidebots' => 'Ilemmeng dagiti inurnos ti bot manipud ti listaan ti bambantayan',
'tog-watchlisthideminor' => 'Ilemmeng dagiti bassit nga inurnos manipud ti listaan ti bambantayan',
'tog-watchlisthideliu' => 'Ilemmeng dagiti inurnos ti nakasterk nga agar-aramat manipud ti listaan ti bambantayan',
'tog-watchlisthideanons' => 'Ilemmeng dagiti inurnos ti di am-ammo nga agar-aramat manipud ti listaan ti bambantayan',
'tog-watchlisthidepatrolled' => 'Ilemmeng dagiti napatruliaan nga inurnos manipud ti listaan ti bambantayan',
'tog-ccmeonemails' => 'Patulodandak kadagiti kopia ti esurat nga ipatulodko kadagiti sabsabali nga agar-aramat',
'tog-diffonly' => 'Saan nga iparang ti linaon ti panid dita baba dagiti pagiddiatan',
'tog-showhiddencats' => 'Ipakita dagiti nailemmeng a kategoria',
'tog-norollbackdiff' => 'Laksiden ti paggiddiatan kalpasan ti panagaramid ti panagisubli',
'tog-useeditwarning' => 'Pakaunaannak no pumanawak iti maysa pagurnosan a panid no adda ti saan a naidulin a sinuksukatan',
'tog-prefershttps' => 'Kankanayon nga agusar ti natalged a pannakaisilpo no nakastrek',

'underline-always' => 'Kanayon',
'underline-never' => 'Saan uray kaanoman',
'underline-default' => 'Kasisigud a kudil wenno pagbasabasa',

# Font style option in Special:Preferences
'editfont-style' => 'Urnosen ti kita ti letra iti lugar:',
'editfont-default' => 'Kasisigud a pagbasabasa',
'editfont-monospace' => 'Monospaced a kita ti letra',
'editfont-sansserif' => 'Sans-serif a kita ti letra',
'editfont-serif' => 'Serif a kita ti letra',

# Dates
'sunday' => 'Dominggo',
'monday' => 'Lunes',
'tuesday' => 'Martes',
'wednesday' => 'Mierkoles',
'thursday' => 'Huebes',
'friday' => 'Biernes',
'saturday' => 'Sabado',
'sun' => 'Dom',
'mon' => 'Lun',
'tue' => 'Mar',
'wed' => 'Mie',
'thu' => 'Hue',
'fri' => 'Bie',
'sat' => 'Sab',
'january' => 'Enero',
'february' => 'Pebrero',
'march' => 'Marso',
'april' => 'Abril',
'may_long' => 'Mayo',
'june' => 'Hunio',
'july' => 'Hulio',
'august' => 'Agosto',
'september' => 'Septiembre',
'october' => 'Oktubre',
'november' => 'Nobiembre',
'december' => 'Disiembre',
'january-gen' => 'Enero',
'february-gen' => 'Pebrero',
'march-gen' => 'Marso',
'april-gen' => 'Abril',
'may-gen' => 'Mayo',
'june-gen' => 'Hunio',
'july-gen' => 'Hulio',
'august-gen' => 'Agosto',
'september-gen' => 'Septiembre',
'october-gen' => 'Oktubre',
'november-gen' => 'Nobiembre',
'december-gen' => 'Disiembre',
'jan' => 'Ene',
'feb' => 'Peb',
'mar' => 'Mar',
'apr' => 'Abr',
'may' => 'May',
'jun' => 'Hun',
'jul' => 'Hul',
'aug' => 'Ago',
'sep' => 'Sep',
'oct' => 'Okt',
'nov' => 'Nob',
'dec' => 'Dis',
'january-date' => 'Enero $1',
'february-date' => 'Pebrero $1',
'march-date' => 'Marso $1',
'april-date' => 'Abril $1',
'may-date' => 'Mayo $1',
'june-date' => 'Hunio $1',
'july-date' => 'Hulio $1',
'august-date' => 'Agosto $1',
'september-date' => 'Septiembre $1',
'october-date' => 'Oktubre $1',
'november-date' => 'Nobiembre $1',
'december-date' => 'Disiembre $1',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Kategoria|Katkategoria}}',
'category_header' => 'Pampanid iti kategoria "$1"',
'subcategories' => 'Dagiti subkategoria',
'category-media-header' => 'Dagiti midia iti kategoria "$1"',
'category-empty' => "''Daytoy a kategoria ket agdama a saan nga aglaon kadagiti panid wenno midia.''",
'hidden-categories' => '{{PLURAL:$1|Nailemmeng a kategoria|Nailemmeng a katkategoria}}',
'hidden-category-category' => 'Nailemmeng a katkategoria',
'category-subcat-count' => '{{PLURAL:$2|Daytoy a kategoria ket adda laeng ti sumaganad a subkategoria.|Daytoy a kategoria ket addaan ti sumaganad a {{PLURAL:$1|a subkategoria|$1 a subkatkategoria}}, manipud ti $2 a dagup.}}',
'category-subcat-count-limited' => 'Daytoy a kategoria ket addaan ti sumaganad a {{PLURAL:$1|a subkategoria|$1 a subkatkategoria}}.',
'category-article-count' => '{{PLURAL:$2|Daytoy a kategoria ket aglaon laeng ti sumaganad a panid.|Ti sumaganad a {{PLURAL:$1|a panid ket|$1 a pampanid ket dagiti}} adda iti daytoy a kategoria, manipud ti $2 a dagup.}}',
'category-article-count-limited' => 'Ti sumaganad a {{PLURAL:$1|panid |$1 a pampanid}} ket adda iti agdama a kategoria.',
'category-file-count' => '{{PLURAL:$2|Daytoy a kategoria ket aglaon laeng ti sumaganad a papeles.|Ti sumaganad a {{PLURAL:$1|a papeles ket|$1 a pappapeles ket dagiti}} adda iti daytoy a kategoria, ti $2 a dagup.}}',
'category-file-count-limited' => 'Ti sumaganad a {{PLURAL:$1|papeles|$1 a pappapeles}} ket adda iti agdama a kategoria.',
'listingcontinuesabbrev' => 'tuloy.',
'index-category' => 'Naipagsurotan a pampanid',
'noindex-category' => 'Di naipasurotan a pampanid',
'broken-file-category' => 'Pampanid nga adda nadadael a silsilpo kadagiti papeles',

'about' => 'Maipanggep',
'article' => 'Naglaon a panid',
'newwindow' => '(aglukat iti sabali a tawa)',
'cancel' => 'Ukasen',
'moredotdotdot' => 'Adu pay...',
'morenotlisted' => 'Daytoy a listaan ket saan a kompleto.',
'mypage' => 'Panid',
'mytalk' => 'Tungtungan',
'anontalk' => 'Tungtungan para iti daytoy a pagtaengan ti IP',
'navigation' => 'Pagdaliasatan',
'and' => '&#32;ken',

# Cologne Blue skin
'qbfind' => 'Biruken',
'qbbrowse' => 'Agbasabasa',
'qbedit' => 'Urnosen',
'qbpageoptions' => 'Daytoy a panid',
'qbmyoptions' => 'Pampanidko',
'faq' => 'MAS',
'faqpage' => 'Project:MAS',

# Vector skin
'vector-action-addsection' => 'Agnayon ti topiko',
'vector-action-delete' => 'Ikkaten',
'vector-action-move' => 'Iyalis',
'vector-action-protect' => 'Salakniban',
'vector-action-undelete' => 'Isubli ti inikkat',
'vector-action-unprotect' => 'Sukatan ti salaknib',
'vector-view-create' => 'Agaramid',
'vector-view-edit' => 'Urnosen',
'vector-view-history' => 'Kitaen ti pakasaritaan',
'vector-view-view' => 'Basaen',
'vector-view-viewsource' => 'Kitaen ti taudan',
'actions' => 'Dagiti aramid',
'namespaces' => 'Dagiti nagan ti espasio',
'variants' => 'Sab-sabali a pagsasao',

'navigation-heading' => 'Pagdaliasatan ti pagpilian',
'errorpagetitle' => 'Biddut',
'returnto' => 'Agsubli idiay $1.',
'tagline' => 'Naggapo idiay {{SITENAME}}',
'help' => 'Tulong',
'search' => 'Biruken',
'searchbutton' => 'Biruken',
'go' => 'Inkan',
'searcharticle' => 'Inkan',
'history' => 'Pakasaritaan ti panid',
'history_short' => 'Pakasaritaan',
'updatedmarker' => 'napabaro sipud ti naudi nga isasarungkarko',
'printableversion' => 'Bersion a maimaldit',
'permalink' => 'Agnanayon a silpo',
'print' => 'Imaldit',
'view' => 'Kitaen',
'edit' => 'Urnosen',
'create' => 'Agaramid',
'editthispage' => 'Urnosen daytoy a panid',
'create-this-page' => 'Partuaten daytoy a panid',
'delete' => 'Ikkaten',
'deletethispage' => 'Ikkaten daytoy a panid',
'undeletethispage' => 'Isubli ti pannakaikkat daytoy a panid',
'undelete_short' => 'Isubli ti pannakaikkat {{PLURAL:$1|ti maysa a naurnos|dagiti $1 a naurnos}}',
'viewdeleted_short' => 'Kitaen {{PLURAL:$1|ti maysa a naikkat a naurnos|dagiti $1 a naikkat a naurnos}}',
'protect' => 'Salakniban',
'protect_change' => 'sukatan',
'protectthispage' => 'Salakniban daytoy a panid',
'unprotect' => 'Sukatan ti salaknib',
'unprotectthispage' => 'Sukatan ti salaknib daytoy a panid',
'newpage' => 'Baro a panid',
'talkpage' => 'Pagtungtungan daytoy a panid',
'talkpagelinktext' => 'Tungtungan',
'specialpage' => 'Espesial a panid',
'personaltools' => 'Bukod a ram-ramit',
'postcomment' => 'Baro a paset',
'articlepage' => 'Kitaen ti naglaon a panid',
'talk' => 'Pagtungtungan',
'views' => 'Dagiti pangkitaan',
'toolbox' => 'Ramramit',
'userpage' => 'Kitaen ti panid ti agar-aramat',
'projectpage' => 'Kitaen ti panid ti gandat',
'imagepage' => 'Kitaen ti panid ti papeles',
'mediawikipage' => 'Kitaen ti panid ti mensahe',
'templatepage' => 'Kitaen ti panid ti plantilia',
'viewhelppage' => 'Kitaen ti panid ti tulong',
'categorypage' => 'Kitaen ti panid ti kategoria',
'viewtalkpage' => 'Kitaen ti pagtungtungan',
'otherlanguages' => 'Kadagiti sabali a pagsasao',
'redirectedfrom' => '(Naibaw-ing manipud idiay $1)',
'redirectpagesub' => 'Baw-ing a panid',
'lastmodifiedat' => 'Daytoy a panid ket naudi a nabaliwan idi $1, idi $2.',
'viewcount' => 'Naserrekan daytoy a panid {{PLURAL:$1|iti naminsan|kadagiti $1 a beses}}.',
'protectedpage' => 'Nasalakniban a panid',
'jumpto' => 'Lumaktaw idiay:',
'jumptonavigation' => 'pagdaliasatan',
'jumptosearch' => 'biruken',
'view-pool-error' => 'Pasensian, dagiti servers ket nadagsenan unay tattan.
Adu unay dagiti agar-aramat nga agbuy-buya ti daytoy a panid.
Pangaasi nga agurayka met bassit sakbay a padasem manen ti mangserrek daytoy a panid.

$1',
'pool-timeout' => 'Madamdama agur-uray para iti kandado',
'pool-queuefull' => 'Napunnon ti nagyanan ti pagur-urayan',
'pool-errorunknown' => 'Di am-ammo a biddut',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'Maipanggep ti {{SITENAME}}',
'aboutpage' => 'Project:Maipanggep',
'copyright' => 'Ti linaon ket magun-od babaen ti $1 malaksid no adda sabali a naibaga.',
'copyrightpage' => '{{ns:project}}:Dagiti karbengan ti kopia',
'currentevents' => 'Agdama a paspasamak',
'currentevents-url' => 'Project:Agdama a paspasamak',
'disclaimers' => 'Dagiti renunsia',
'disclaimerpage' => 'Project:Sapasap a renunsia',
'edithelp' => 'Tulong ti panag-urnos',
'mainpage' => 'Umuna a Panid',
'mainpage-description' => 'Umuna a Panid',
'policy-url' => 'Project:Annuroten',
'portal' => 'Portal ti komunidad',
'portal-url' => 'Project:Portal ti komunidad',
'privacy' => 'Annuroten ti kinapribado',
'privacypage' => 'Project:Annuroten ti kinapribado',

'badaccess' => 'Biddut ti pammalubos',
'badaccess-group0' => 'Awan pammalubosmo a mangpataray ti kiniddawmo nga aramid.',
'badaccess-groups' => 'Ti kiniddawmo nga aramid ket limitado laeng kadagiti agar-aramat {{PLURAL:$2|iti grupo|iti maysa kadagiti grupo}}: ti $1.',

'versionrequired' => 'Masapul ti bersion $1 ti MediaWiki',
'versionrequiredtext' => 'Masapul ti bersion $1 ti MediaWiki tapno maaramat daytoy a panid. 
Kitaen ti [[Special:Version|panid ti bersion]].',

'ok' => 'Sige',
'retrievedfrom' => 'Naala manipud idiay "$1"',
'youhavenewmessages' => 'Addaanka ti $1 ($2).',
'youhavenewmessagesfromusers' => 'Adda $1 manipud {{PLURAL:$3|ti sabali nga agar-aramat|kadagiti $3 a sabsabali nga agar-aramat}} ($2).',
'youhavenewmessagesmanyusers' => 'Adda $1 manipud kadagiti adu nga agar-aramat ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|a baro a mensahem|999=a baro a menmensahem}}',
'newmessagesdifflinkplural' => 'kinaudi a {{PLURAL:$1|sinukatan|999=sinuksukatan}}',
'youhavenewmessagesmulti' => 'Adda dagiti baro a mensahem iti $1',
'editsection' => 'urnosen',
'editold' => 'urnosen',
'viewsourceold' => 'kitaen ti taudan',
'editlink' => 'urnosen',
'viewsourcelink' => 'kitaen ti taudan',
'editsectionhint' => 'Urnosen ti paset: $1',
'toc' => 'Dagiti linaon',
'showtoc' => 'ipakita',
'hidetoc' => 'ilemmeng',
'collapsible-collapse' => 'Rebbaen',
'collapsible-expand' => 'Palawaen',
'thisisdeleted' => 'Kitaen wenno isubli ti $1?',
'viewdeleted' => 'Kitaen ti $1?',
'restorelink' => '{{PLURAL:$1|ti maysa a naikkat a naurnos|dagiti $1 a naikkat a naurnos}}',
'feedlinks' => 'Pakan:',
'feed-invalid' => 'Imbalido a kita ti suskrision a pakan.',
'feed-unavailable' => 'Saan a magun-od dagiti sindikasion ti pakan',
'site-rss-feed' => '$1 a pakan ti RSS',
'site-atom-feed' => '$1 a pakan ti Atom',
'page-rss-feed' => '"$1" a pakan ti RSS',
'page-atom-feed' => 'Pakan nga Atom ti "$1"',
'red-link-title' => '$1 (awan ti panid)',
'sort-descending' => 'Ilasin nga agpababa',
'sort-ascending' => 'Ilasin nga agpangato',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Panid',
'nstab-user' => 'Panid ti agar-aramat',
'nstab-media' => 'Panid ti midia',
'nstab-special' => 'Espesial a panid',
'nstab-project' => 'Panid ti gandat',
'nstab-image' => 'Papeles',
'nstab-mediawiki' => 'Mensahe',
'nstab-template' => 'Plantilia',
'nstab-help' => 'Panid ti tulong',
'nstab-category' => 'Kategoria',

# Main script and global functions
'nosuchaction' => 'Awan ti kasta nga aramid',
'nosuchactiontext' => 'Ti tignay a nainaganan babaen ti URL ket imbalido.
Mabalin a madi ti naimakiniliam nga URL, wenno sinurotmo ti saan nga agpayso a silpo.
Mabalin a daytoy ket kiteb ti sopwer nga us-usaren babaen ti {{SITENAME}}.',
'nosuchspecialpage' => 'Awan ti kasta nga espesial a panid',
'nospecialpagetext' => '<strong>Nagkiddawka ti imbalido nga espesial a panid.</strong>

Masarakan ti listaan dagiti umisu nga espesial a pampanid iti [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Biddut',
'databaseerror' => 'Biddut iti database',
'databaseerror-text' => 'Adda napasamak a biddut ti usisa ti database.
Daytoy ket mabalin a mangibagbaga ti parikut ti sopwer.',
'databaseerror-textcl' => 'Adda napasamak a biddut ti usisa ti database.',
'databaseerror-query' => 'Usisa: $1',
'databaseerror-function' => 'Annong: $1',
'databaseerror-error' => 'Biddut: $1',
'laggedslavemode' => "'''Ballaag:''' Ti panid ket mabalin a saan nga aglaon kadagiti kinaudi a panagpabaro.",
'readonly' => 'Narikepan ti database',
'enterlockreason' => 'Agikabil ti rason para iti pannakarikep, agraman ti maysa a karkulo no kaanonto a maluktan',
'readonlytext' => 'Ti database ket agdama a nairikpan kadagiti baro a panagikabil ken panagbaliw, mabalin a gapu dagiti kadawyan a pagsimpa, no malpas kadawyanto nga agsubli.

Ti administrador a nangrikep ket nangited ti daytoy a palawag: $1',
'missing-article' => 'Ti database ket saan a nakabiruk ti testo ti panid a mabirukanna koma, a napanaganan ti "$1" $2.

Daytoy ket kadawyan a gapuanan babaen ti sumaganad a baak a paggiddiatan wenno silpo ti pakasaritaan ti maysa panid a dati a naikkat.

No saan a kasta, mabalin a nakasarakka ti kiteb ti sopwer.

Pangngaasi nga ipadamagmo kadagiti [[Special:ListUsers/sysop|administrador]], isuratmo ti pakaammo dayta nga URL.',
'missingarticle-rev' => '(binaliwan#: $1)',
'missingarticle-diff' => '(Sabali: $1, $2)',
'readonly_lag' => 'Automatiko a narikpan ti database kabayatan a dagiti tagabu a database server ket kumamakam iti agturay',
'internalerror' => 'Akin-uneg a biddut',
'internalerror_info' => 'Akin-uneg a biddut: $1',
'fileappenderrorread' => 'Saan a mabasa ti "$1" iti las-ud ti panagnayon.',
'fileappenderror' => 'Saan a makanayon ti "$1" iti  "$2".',
'filecopyerror' => 'Saan a makopia ti papeles $1 iti $2.',
'filerenameerror' => 'Saan a managanan manen ti papeles "$1" iti "$2".',
'filedeleteerror' => 'Saan a maikkat ti papeles  "$1".',
'directorycreateerror' => 'Saan a maaramid ti direktorio "$1".',
'filenotfound' => 'Saan a mabirukan ti papeles "$1".',
'fileexistserror' => 'Di mabalin a maisurat ti papeles "$1": Adda kastan a papeles.',
'unexpected' => 'Di mapakpakadaaan a pateg: "$1"="$2".',
'formerror' => 'Biddut: saan a maited ti porma.',
'badarticleerror' => 'Saan a matungpal daytoy nga aramid iti daytoy a panid.',
'cannotdelete' => 'Ti panid wenno ti papeles "$1" ket saan a maikkat.
Amangan no adda sabali a nangikkaten.',
'cannotdelete-title' => 'Saan a maikkat ti panid  "$1"',
'delete-hook-aborted' => 'Inukas ti kawit ti panagborra.
Awan ti intedna a palawag.',
'no-null-revision' => 'Saan a makaaramid ti awan serbina a panagbaliw para iti panid "$1"',
'badtitle' => 'Madi a titulo',
'badtitletext' => 'Ti kiniddaw idi a titulo ti panid ket imbalido, blanko, wenno maysa a saan nga husto a naisilpo a silpo ti pagsasao wenno interwiki a titulo.
Mabalin nga aglaon ti a maysa wenno ad-adu a karakter a saan a mausar kadagiti titulo.',
'perfcached' => 'Ti sumaganad a datos ket naidulin ken mabalin a saan a napabaro. Ti kaadu {{PLURAL:$1|iti maysa a nagbanagan|dagiti $1 a nagbanagan}} ket magun-od idiay nagidulinan.',
'perfcachedts' => 'Ti sumaganad a datos ket naidulin, ken naudi a napabaro idi $1. Ti kaadu a {{PLURAL:$4|iti maysa a nagbanagan |dagiti $4 nagbanagan}} ket magun-od idiay pagidulinan.',
'querypage-no-updates' => 'Dagiti panangpabaro iti daytoy a panid ket agdama a nabaldado. 
Saan a mipasaradiwa ita dagiti datos ditoy.',
'viewsource' => 'Kitaen ti taudan',
'viewsource-title' => 'Kitaen ti taudan para iti $1',
'actionthrottled' => 'Napabuntog ti aramid',
'actionthrottledtext' => 'Para iti pagkontra ti spam, naipatinggaka nga agramid iti daytoy a tignay iti adu unay a beses iti nasiket nga oras, ken nalabsamon daytoy a patingga.
Pangngaasi nga ipadasmo manen no madamdama.',
'protectedpagetext' => 'Nasalakniban daytoy a panid tapno mapawilan ti panag-urnos wenno dagiti dadduma pay a tignay.',
'viewsourcetext' => 'Mabalinmo a kitaen ken tuladen ti taudan daytoy a panid:',
'viewyourtext' => "Mabalinmo a makita ken tuladen ti taudan dagiti '''inurnosmo''' ditoy a panid:",
'protectedinterface' => 'Daytoy a panid ket mangited ti testo nga interface para iti sopwer iti daytoy a wiki, ken nasalakniban tapno mapawilan ti panag-abuso.
Ti aginayon wenno panagibaliw kadagiti panagipatarus para kadagiti amin a wiki,  pangngaasi nga usaren ti [//translatewiki.net/ translatewiki.net], ti lokalisasion a gandat ti MediaWiki.',
'editinginterface' => "'''Ballaag:''' Ur-urnosem ti maysa a panid a maar-aramat a mangted iti testo ti interface para iti sopwer.
Dagiti panagsukat iti daytoy a panid ket maarigan ti langa ti panagaramat nga interface dagiti sabali nga agar-aramat iti daytoy a wiki.
Ti aginayon wenno panagibaliw kadagiti panagipatarus para kadagiti amin a wiki,  pangngaasi nga usaren ti [//translatewiki.net/ translatewiki.net], ti lokalisasion a gandat ti MediaWiki.",
'cascadeprotected' => 'Daytoy a panid ket nasalakniban para iti panag-urnos ngamin ket nairaman kadagiti sumaganad {{PLURAL:$1|a panid, a|a pampanid, a}} nasalakniban nga adda ti napili nga "agsariap"  :
$2',
'namespaceprotected' => "Awan ti pammalubosmo nga agurnos kadagiti panid iti '''$1''' a nagan ti espasio.",
'customcssprotected' => 'Awan ti pammalubosmo nga agurnos iti daytoy panid ti CSS, ngamin ket adda linaonna a tagikua dagiti agar-aramat ti sabali a kasasaad.',
'customjsprotected' => 'Awan ti pammalubosmo nga agurnos iti daytoy a panid ti JavaScript, ngamin ket adda linaonna a tagikua dagiti agar-aramat ti sabali a kasasaad.',
'mycustomcssprotected' => 'Awan pammalubosmo nga agurnos iti daytoy a panid ti CSS.',
'mycustomjsprotected' => 'Awan pammalubosmo nga agurnos iti daytoy a panid ti JavaScript.',
'myprivateinfoprotected' => 'Awan pammalubosmo nga agurnos iti pribado a pakaammom.',
'mypreferencesprotected' => 'Awan pammalubosmo nga agurnos kadagiti kakaykayatam.',
'ns-specialprotected' => 'Saan a mabalin nga urnosen dagiti espesial a panid.',
'titleprotected' => "Daytoy a titulo ket nasalakniban manipud ti panakapartuat babaen ni [[User:$1|$1]].
Ti naited a rason ket ''$2''.",
'filereadonlyerror' => 'Di nabaliwan ti papeles "$1" gapu ket ti repositorio ti papeles "$2" ket mabasa laeng a moda.

Ti administrador a nangserra ket nagited iti daytoy a panagilawlawag "\'\'$3\'\'".',
'invalidtitle-knownnamespace' => 'Imbalido a titulo iti nagan ti espasio "$2" ken testo "$3"',
'invalidtitle-unknownnamespace' => 'Imbalido a titulo iti di-amammo a nagan ti espasio a numero $1 ken testo "$2"',
'exception-nologin' => 'Saan a nakastrek',
'exception-nologin-text' => 'Pangngaasi a [[Special:Userlogin|sumrek]] tapno maserrekam daytoy a panid wenno tignay.',
'exception-nologin-text-manual' => 'Pangngaasi a $1 tapno maserrekan daytoy a panid wenno tignay.',

# Virus scanner
'virus-badscanner' => 'Madi di panaka-aramidna: Di am-ammo a birus a panagskan: "$1"',
'virus-scanfailed' => 'napaay ti panagskan (kodigo $1)',
'virus-unknownscanner' => 'di am-ammo a pagpaksiat ti "birus":',

# Login and logout pages
'logouttext' => "'''Nakaruarkan.'''

Laglagipen nga adda met dagiti panid nga agtultuloy a maiparang a kasla nakastreka pay, aginggana no dalusam ti pannakaidulin ti pagbasabasam.",
'welcomeuser' => 'Naragsak nga isasangbay, $1!',
'welcomecreation-msg' => 'Naaramiden ti pakabilangam.
Dimo liplipatan a sukatan dagiti kakaykayatam idiay [[Special:Preferences|{{SITENAME}} kakaykayatan]].',
'yourname' => 'Nagan ti agar-aramat:',
'userlogin-yourname' => 'Nagan ti agar-aramat',
'userlogin-yourname-ph' => 'Ikabil ti naganmo nga agar-aramat',
'createacct-another-username-ph' => 'Ikabil ti nagan ti agar-aramat',
'yourpassword' => 'Kontrasenias:',
'userlogin-yourpassword' => 'Kontrasenias',
'userlogin-yourpassword-ph' => 'Ikabilmo ti kontrasenias',
'createacct-yourpassword-ph' => 'Agikabil ti kontrasenias',
'yourpasswordagain' => 'Uliten ti kontrasenias:',
'createacct-yourpasswordagain' => 'Pasingkedan ti kontrasenias',
'createacct-yourpasswordagain-ph' => 'Ikabil manen ti kontrasenias',
'remembermypassword' => 'Laglagipem ti iseserrekko iti daytoy a pagbasabasa (para iti kapaut iti $1 {{PLURAL:$1|nga aldaw|nga al-aldaw}})',
'userlogin-remembermypassword' => 'Taginayonennak nga iserrek',
'userlogin-signwithsecure' => 'Usaren ti natalged a pannakaisilpo',
'yourdomainname' => 'Ti bukodmo a pagturayan:',
'password-change-forbidden' => 'Saanmo a mabalin ti mangbaliw kadagiti kontrasenias iti daytoy a wiki.',
'externaldberror' => 'Adda biddut idi ti panakapasingked ti database wenno saanmo a mabalin ti agpabaro ti bukodmo nga akin-ruar a pakabilangan.',
'login' => 'Sumrek',
'nav-login-createaccount' => 'Sumrek / agaramid ti pakabilangan',
'loginprompt' => 'Nasken a napakabaelam dagiti "galietas" tapno makastrekka iti {{SITENAME}}.',
'userlogin' => 'Sumrek / agaramid ti pakabilangan',
'userloginnocreate' => 'Sumrek',
'logout' => 'Rummuar',
'userlogout' => 'Rummuar',
'notloggedin' => 'Saan a nakastrek',
'userlogin-noaccount' => 'Awan ti pakabilangam?',
'userlogin-joinproject' => 'Tumipon iti {{SITENAME}}',
'nologin' => 'Awan pakabilangam? $1.',
'nologinlink' => 'Agaramid ti pakabilangan',
'createaccount' => 'Agaramid ti pakabilangan',
'gotaccount' => 'Addaanka kadin ti pakabilangam? $1.',
'gotaccountlink' => 'Sumrek',
'userlogin-resetlink' => 'Nalipatam dagiti salaysay ti pagserrekmo?',
'userlogin-resetpassword-link' => 'Nalipatam ti kontraseniasmo?',
'userlogin-loggedin' => 'Nakastrekkan a kas ni {{GENDER:$1|$1}}.
Usaren ti porma dita baba tapno sumrek a kas sabali nga agar-aramat.',
'userlogin-createanother' => 'Agaramid pay ti sabali a pakabilangan',
'createacct-join' => 'Ikabil ti pakaammom dita baba.',
'createacct-another-join' => 'Ikabil ti pakaammo ti baro a pakabilangan dita baba.',
'createacct-emailrequired' => 'Esurat a pagtaengan',
'createacct-emailoptional' => 'Esurat a pagtaengan (pagpilian)',
'createacct-email-ph' => 'Ikabil ti esurat a pagtaengam',
'createacct-another-email-ph' => 'Ikabil ti esurat a pagtaengan',
'createaccountmail' => 'Agusar ti pugto a temporario a kontrasenias ken ipatulod idiay naisangayan nga esurat a pagtaengan',
'createacct-realname' => 'Pudno a nagan (pagpilian)',
'createaccountreason' => 'Rason:',
'createacct-reason' => 'Rason',
'createacct-reason-ph' => 'Apay nga agparpartuatka manen ti sabali a pakabilangan',
'createacct-captcha' => 'Panagkita ti seguridad',
'createacct-imgcaptcha-ph' => 'Ikabil ti testo a makitam dita ngato',
'createacct-submit' => 'Partuatem ti pakabilangam',
'createacct-another-submit' => 'Agaramid pay ti sabali a pakabilangan',
'createacct-benefit-heading' => 'Ti {{SITENAME}} ket inar-aramid babaen ti tattao a kasla kenka.',
'createacct-benefit-body1' => '{{PLURAL:$1|nga inurnos|nga inur-urnos}}',
'createacct-benefit-body2' => '{{PLURAL:$1|a panid|a pampanid}}',
'createacct-benefit-body3' => 'nga agdama a {{PLURAL:$1|nagparawad|nagparparawad}}',
'badretype' => 'Saan nga agpada dagiti inkabilmo a kontrasenias.',
'userexists' => 'Maus-usaren ti inkabilmo a nagan.
Pangngaasi nga agpilika ti sabali a nagan.',
'loginerror' => 'Biddut ti iseserrek',
'createacct-error' => 'Biddut ti panagpartuat ti pakabilangan',
'createaccounterror' => 'Saan a makaaramid ti pakabilangan: $1',
'nocookiesnew' => 'Naaramid ti pakabilangan ti agar-aramat, ngem saanka a nakastrek.
Ti {{SITENAME}} ket agus-usar kadagiti "galietas" tapno maiserrek dagiti agar-aramat.
Nabaldado dagiti galietam.
Pangngaasi a pakabaelam ida, ken sumrekka nga agusar ti baro a naganmo ken kontrasenias.',
'nocookieslogin' => 'Ti {{SITENAME}} ket agus-usar kadagiti galietas tapno maiserrek dagiti agar-aramat.
Nabaldado dagiti galietam.
Pangngaasi a pakabaelam ida ken padasem manen ti sumrek.',
'nocookiesfornew' => 'Ti pakabilangan ti agar-aramat ket saan a naaramid, saanmi a mapasingkedan ti taudanna.
Siguraduem a napakabaelan dagita galietam, ikargam manen daytoy a panid ken padasem manen.',
'noname' => 'Saanmo a nainaganan ti agpayso a nagan ti agar-aramat.',
'loginsuccesstitle' => 'Balligi ti panagserrek',
'loginsuccess' => "'''Nakastrekkan iti {{SITENAME}} a kas ni \"\$1\".'''",
'nosuchuser' => 'Awan ti agar-aramat nga agnagan iti "$1". 

Dagiti nagan ti agar-aramat ket sensitibo ti kadakkel ti letra.

Kitaem ti panangiletra, wenno [[Special:UserLogin/signup|agaramidka ti baro a pakabilangan]].',
'nosuchusershort' => 'Awan ti agar-aramat nga agnagan ti "$1".
Kitaem ti panangiletram.',
'nouserspecified' => 'Nasken nga agikabilka ti nagan ti agar-aramat.',
'login-userblocked' => 'Naserraan daytoy nga agar-aramat. Saan a mapalubosan ti sumrek.',
'wrongpassword' => 'Saan a husto ti naikabil a kontrasenias. 
Pangngaasi a padasem manen.',
'wrongpasswordempty' => 'Blanko ti naikabil a kontrasenias. 
Pangngaasi a padasem manen.',
'passwordtooshort' => 'Dagiti kontrasenias ket nasken a saan a basbasit ngem {{PLURAL:$1|1 a karakter|$1 a karkarakter}}.',
'password-name-match' => 'Nasken a ti kontrasenias ket maigiddiat manipud ti naganmo.',
'password-login-forbidden' => 'Ti panag-usar ti daytoy a nagan ti agar-aramat ken kontrasenias ket naipariten.',
'mailmypassword' => 'Iyasentar manen ti kontrasenias',
'passwordremindertitle' => 'Baro a temporario a kontrasenias para iti {{SITENAME}}',
'passwordremindertext' => 'Adda maysa a tao (mabalin a sika met laeng, manipud iti IP a pagtaengan a $1) ket nagkiddaw ti baro
a kontrasenias para iti {{SITENAME}} ($4). Ti saan nga agnayon a kontrasenias ti agususar
"$2" ket naaramiden ken naidisso iti "$3". No kastan ti kinayatmo,
masapul a sumrek ka ta agpili ka ti baro a kontrasenias.
Ti temporario a bukodmo a kontrasenias ket agpaso  {{PLURAL:$5|iti maysa nga aldaw|kadagiti $5 nga aldaw}}.

No sabali ti nagkiddaw, wenno no malagipmo pay ti kontrasenias mo ket dimon kayat a suktan daytoy, mabalin a dimo lattan ikaskaso daytoy a mensahe ket itultuloymo latta nga usaren ti daan a kontrasenias.',
'noemail' => 'Awan ti esurat a pagtaengan a nairehistro para  iti agar-aramat a ni "$1".',
'noemailcreate' => 'Nasken a mangitedka ti pudno nga esurat a pagtaengan.',
'passwordsent' => 'Naipatuloden ti baro a kontrasenias iti esurat a pagtaengan a nairehistro kenni "$1".
Pangngaasi a sumrekka manen kalpasan ti pannakaawatmo.',
'blocked-mailpassword' => 'Ti IP a pagtaengam ket naserraan manipud ti panag-urnos, isunga saan a mapalubosan nga agusar ti annong ti panagipulang ti kontrasenias tapno mapawilan ti panag-abuso.',
'eauthentsent' => 'Naipatuloden ti pammatalged nga esurat iti naikeddeng nga esurat a pagtaengan.
Sakbay a maipatulod ti aniaman nga esurat iti pakabilangan, masapul a surotem dagiti maibagbaga iti esurat, tapno mapatalgedan ti pakabilangan ket agpayso a kukuam.',
'throttled-mailpassword' => 'Ti panangiyasentar manen ti kontrasenias ket naipatuloden, iti kaunegan ti napalabas a {{PLURAL:$1|nga oras|$1 nga or-oras}}.
Tapno maipawilan ti panag-abuso, maysa laeng a panangiyasentar manen ti kontrasenias ti maipatulod iti kada {{PLURAL:$1|nga oras|$1 nga or-oras}}.',
'mailerror' => 'Biddut iti panangipatulod ti surat: $1',
'acct_creation_throttle_hit' => 'Dagiti sumarungkar ti daytoy a wiki nga agus-usar ti IP a pagtaengan ket nakaaramid {{PLURAL:$1|iti 1 a pakabilangan|kadagiti $1 a pakabilangan}} iti nasakbayan nga aldaw, nga isu laeng ti kaadu a maipalubos iti daytoy a paset ti panawen.
A kas ti nagbanagan, dagiti agsarsarungkar nga agus-usar ti IP a pagtaengan ket agdama a saanda a mabalin a makaaramid kadagiti pakabilangan.',
'emailauthenticated' => 'Ti esurat a pagtaengam ket napatalgedan idi $2 idi $3.',
'emailnotauthenticated' => 'Saan pay a napatalgedan ti esuratmo a pagtaengan.
Awanto ti esurat a maipatulod para kadagiti sumaganad a langa.',
'noemailprefs' => 'Ipanaganan ti esurat a pagtaengan tapno agbalin dagitoy a langa.',
'emailconfirmlink' => 'Pasingkedam ti esurat a pagtaengam',
'invalidemailaddress' => 'Ti esurat a pagtaengan ket saan a maawat ngamin ket kasla adda ti saan a napudno a porma.
Pangngaasi nga agikabil ti nasayaat a porma ti pagtaengan wenno ikkaten amin a naikabil.',
'cannotchangeemail' => 'Dagiti pakabilangan nga esurat a pagtaengan ket saan a mabaliwan iti daytoy a wiki.',
'emaildisabled' => 'Daytoy a pagsaaadan ket saan a makaipatulod kadagiti esurat.',
'accountcreated' => 'Naaramiden ti pakabilangan',
'accountcreatedtext' => 'Ti pakabilangan ti agar-aramat para kenni [[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|tungtungan]]) ket napartuaten.',
'createaccount-title' => 'Panagaramid ti pakabilangan para iti {{SITENAME}}',
'createaccount-text' => 'Adda nagaramid ti pakabilangan para iti esurat a pagtaengam idiay {{SITENAME}} ($4) nga agnagan  ti "$2", iti kontrasenias a "$3".
Nasken a sumrekka ken sukatam ti kontraseniasmo tattan.

Mabalinmo ti saan a mangikaskaso ti daytoy a mensahe, no biddut a naaramid daytoy a pakabilangan.',
'usernamehasherror' => 'Ti nagan ti agar-aramat ket nasken a saan nga aglaon kadagiti "hash" a karakter',
'login-throttled' => 'Adu unay ti panagpadasmo a sumrek.
Pangngaasi nga agurayka ti $1 sakbay a padasem manen.',
'login-abort-generic' => 'Napaay ti panagserrekmo - Napasardeng',
'loginlanguagelabel' => 'Pagsasao: $1',
'suspicious-userlogout' => 'Naiparit ti panagkiddawmo a rummuar ngamin ket kasla inpatulod ti nadadael a panagbasabasa wenno pannakaidulin a pannakbagi.',
'createacct-another-realname-tip' => 'Saan a nasken ti pudno a nagan.
No kayatmo nga ited, mausarto daytoy para iti panangited ti pammadayaw para kadagiti obrada.',
'pt-login' => 'Sumrek',
'pt-login-button' => 'Sumrek',
'pt-createaccount' => 'Agaramid ti pakabilangan',
'pt-userlogout' => 'Rummuar',

# Email sending
'php-mail-error-unknown' => 'Di ammo a biddut ti surat ti PHP() nga annong.',
'user-mail-no-addy' => 'Pinadas nga inpatulod ti esurat nga awan ti esurat a pagtaengan.',
'user-mail-no-body' => 'Pinadas nga inpatulod ti esurat nga awan linaonna wenno ababa laeng a bagi.',

# Change password dialog
'changepassword' => 'Baliwan ti kontrasenias',
'resetpass_announce' => 'Tapno malpas ti panagserrek, nasken a mangiyasentarka ti baro a kontrasenias.',
'resetpass_header' => 'Sukatan ti kontrasenias ti pakabilangan',
'oldpassword' => 'Daan a kontrasenias:',
'newpassword' => 'Baro a kontrasenias:',
'retypenew' => 'Imakinilya manen ti baro a kontrasenias:',
'resetpass_submit' => 'Ikabil ti kontrasenias ken sumrek',
'changepassword-success' => 'Balligi a nasukatan ti kontraseniasmo!',
'changepassword-throttled' => 'Nakaaramidka kadagiti adu unay a nabiit a panangipadas ti panagserrek.
Pangngaasi nga aguray ti $1 sakbay a padasen manen.',
'resetpass_forbidden' => 'Saan a masukatan dagiti kontrasenias',
'resetpass-no-info' => 'Masapul a nakastrekka tapno dagus a makapanka iti daytoy a panid.',
'resetpass-submit-loggedin' => 'Sukatan ti kontrasenias',
'resetpass-submit-cancel' => 'Ukasen',
'resetpass-wrong-oldpass' => 'Imbalido ti temporario wenno agdama a kontrasenias.
Mabalin a nagballigi ti panagsukatmo ti kontrasenias wenno nagkiddaw ti baro a temporario a kontrasenias.',
'resetpass-recycled' => 'Pangngaasi nga iyasentar manen ti kontrasenias iti sabali ngem ti agdama a kontraseniasmo.',
'resetpass-temp-emailed' => 'Simrekka a nagusar ti temporario a naipatulod a kodigo.
Tapno malpas ti panagserrek, nasken a mangiyasentarka ti baro a kontrasenias ditoy:',
'resetpass-temp-password' => 'Temporario a kontrasenias:',
'resetpass-abort-generic' => 'Ti panagsukat ti kontrasenias ket pinasardeng babaen ti maysa a pagpaatiddog.',
'resetpass-expired' => 'Nagpason ti kontraseniasmo. Pangngaasi a mangiyasentar ti baro a kontrasenias tapno makastrek.',
'resetpass-expired-soft' => 'Nagpason ti kontraseniasmo, ken nasken a maiyasentar manen. Pangngaasi nga agpili tattan ti baro a kontrasenias, wenno pinduten ti "{{int:resetpass-submit-cancel}}"  tapno maiyasentarto intono madamdama.',

# Special:PasswordReset
'passwordreset' => 'Iyasentar manen ti kontrasenias',
'passwordreset-text-one' => 'Lippasem daytoy a porma tapno maiyasentar manen ti bukodmo a kontrasenias.',
'passwordreset-text-many' => '{{PLURAL:$1|Agpunno ti maysa kadagiti pagikabilan tapno makaawat ti temporario a kontrasenias babaen ti esurat.}}',
'passwordreset-legend' => 'Iyasentar manen ti kontrasenias',
'passwordreset-disabled' => 'Nabaldado dagiti panangiyasentar manen ti kontrasenias iti daytoy a wiki.',
'passwordreset-emaildisabled' => 'Dagiti langa ti esurat ket nabaldado iti daytoy a wiki.',
'passwordreset-username' => 'Nagan ti agar-aramat:',
'passwordreset-domain' => 'Pagturayan:',
'passwordreset-capture' => 'Kitaen ti nagbanagan ti esurat?',
'passwordreset-capture-help' => 'No markaam daytoy a kahon, ti esurat (nga adda ti temporario a kontrasenias) ket maipakita kenka ken maipatulod iti agar-aramat.',
'passwordreset-email' => 'Esurat a pagtaengan:',
'passwordreset-emailtitle' => 'Salaysay ti pakabilangan iti {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Adda (baka sika, ti naggapuan ti IP a pagtaengan $1) a nagkiddaw ti maysa a panangiyasentar manen ti kontrasenias para iti {{SITNAME}} ($4) . {{PLURAL:$3|Ti |Dagiti}} sumaganad a pakabilangan ti agar-aramat ket
nakairaman iti daytoy nga esurat a pagtaengan:

$2

{{PLURAL:$3|Daytoy temporario a kontrasenias|Dagitoy temporario a kontrasenias}} ket agpaso {{PLURAL:$5|iti maysa nga aldaw|kadagiti $5 nga aldaw}}.
Sumrekka koman tapno agpilika ti baro a kontraseniasmo tattan. No adda met sabali a nagaramid daytoy a 
panagkiddaw, wenno malagipmo ti dati a kontraseniasmo, ket saanmo a kayaten a sukatan, saanmo nga ikaskaso daytoy a mensahe ken 
agtuloyka nga agusar ti daan a kontrasenias.',
'passwordreset-emailtext-user' => 'Daytoy nga agar-aramat $1 iti {{SITENAME}} ket nagkiddaw ti maysa a panangiyasentar manen ti bukod a kontrasenias para iti {{SITENAME}}
($4) . {{PLURAL:$3|Ti|Dagiti}} sumaganad a pakabilanagan ti agar-aramat ket
nakairaman iti daytoy nga esurat a pagtaengan:

$2

{{PLURAL:$3|Daytoy temporario a kontrasenias|Dagitoy temporario a kontrasenias}} ket agpaso {{PLURAL:$5|iti maysa nga aldaw|kadagiti $5 nga aldaw}}.
Sumrekka koman tapno agpili ka ti baro a kontraseniasmo tattan. No adda met sabali a nagaramid daytoy a 
panagkiddaw, wenno malagipmo ti dati a kontraseniasmo, ket saan mo a kayaten a sukatan, saanmo nga ikaskaso daytoy a mensahe ken 
agtuloykan nga agusar ti daan a kontraseniasmo.',
'passwordreset-emailelement' => 'Nagan ti agar-aramat: $1
Temporario a kontrasenias: $2',
'passwordreset-emailsent' => 'Ti maysa nga esurat ti panangiyasentar manen ti kontrasenias ket naipatuloden.',
'passwordreset-emailsent-capture' => 'Ti maysa nga esurat ti panangiyasentar manen ti kontrasenias ket naipatuloden, a napaikita dita baba.',
'passwordreset-emailerror-capture' => 'Naaramid ti maysa nga esurat a panangyasentar manen ti kontrasenias, a napaikita dita baba, ngem ti panangitulod kenni {{GENDER:$2|agar-aramat}} ket napaay: $1',

# Special:ChangeEmail
'changeemail' => 'Sukatan ti esurat a pagtaengan',
'changeemail-header' => 'Sukatan ti esurat a pagtaengan ti pakabilangan',
'changeemail-text' => 'Lippasem daytoy a porma ti panagsukat ti esurat a pagtaengam. Nasken nga ikabilmo ti kontrasenias tapno mapasingkedan daytoy a panagsukat.',
'changeemail-no-info' => 'Masapul a nakastrekka tapno dagus a makapan iti ditoy a panid.',
'changeemail-oldemail' => 'Agdama nga esurat a pagtaengan:',
'changeemail-newemail' => 'Baro nga esurat a pagtaengan:',
'changeemail-none' => '(awan)',
'changeemail-password' => 'Ti bukodmo a kontrasenias ti {{SITENAME}}:',
'changeemail-submit' => 'Sukatan ti esurat',
'changeemail-cancel' => 'Ukasen',
'changeemail-throttled' => 'Adu unay ti panagpadasmo a sumrek.
Pangngaasi nga aguray ti $1 sakbay a padasen manen.',

# Special:ResetTokens
'resettokens' => 'Iyasentar manen dagiti tandaan',
'resettokens-text' => 'Mabalinmo nga iyasentar dagiti tandaan a mangpalubos ti panagserrek ti naisangayan a pribado datos a mainaig ti pakabilangam ditoy.

Aramidem daytoy no aksidente nga inbingaymo dagitoy iti sabali wenno ti pakabilangam ket nakomprimiso.',
'resettokens-no-tokens' => 'Awan dagiti maiyasentar manen a tandaan.',
'resettokens-legend' => 'Iyasentar manen dagiti tandaan',
'resettokens-tokens' => 'Dagiti tandaan:',
'resettokens-token-label' => '$1 (agdama a pateg: $2)',
'resettokens-watchlist-token' => 'Tandaan para iti pakan ti web (Atom/RSS) kadagiti [[Special:Watchlist|panagbalbaliw ti pampanid idiay bambantayam]]',
'resettokens-done' => 'Naiyasentar manen dagiti tandaan.',
'resettokens-resetbutton' => 'Iyasentar manen  dagiti napili a tandaan',

# Edit page toolbar
'bold_sample' => 'Napuskol a testo',
'bold_tip' => 'Napuskol a testo',
'italic_sample' => 'Nakairig a testo',
'italic_tip' => 'Nakairig a testo',
'link_sample' => 'Titulo ti silpo',
'link_tip' => 'Akin-uneg a silpo',
'extlink_sample' => 'http://www.example.com titulo ti silpo',
'extlink_tip' => 'Akin-ruar a silpo (laglagipen ti http:// a pasaruno)',
'headline_sample' => 'Testo ti paulo',
'headline_tip' => 'Maika-2 nga agasmang ti paulo',
'nowiki_sample' => 'Isengngat ti saan a naporma a testo ditoy',
'nowiki_tip' => 'Saan nga ikaskaso ti panakaporma ti wiki',
'image_tip' => 'Naisengngat a papeles',
'media_tip' => 'Silpo ti papeles',
'sig_tip' => 'Ti pirmam nga adda ti oras ken petsa',
'hr_tip' => 'Pakuros a linia (manmano laeng nga aramaten)',

# Edit pages
'summary' => 'Pakabuklan:',
'subject' => 'Suheto/paulo:',
'minoredit' => 'Daytoy ket bassit a panag-urnos',
'watchthis' => 'Bantayan daytoy a panid',
'savearticle' => 'Idulin ti panid',
'preview' => 'Ipadas',
'showpreview' => 'Ipakita ti ipadas',
'showlivepreview' => 'Agdama nga ipadas',
'showdiff' => 'Ipakita dagiti sinukatan',
'anoneditwarning' => "'''Ballaag:''' Saanka a nakastrek.
Mairehistro ti IP a pagtaengam iti pakasaritaan ti panagurnos iti daytoy a panid.",
'anonpreviewwarning' => '" Saanka a nakastrek. Ti panagidulin ket agirehistro ti IP a pagtaengam kadagitoy a  pakasaritaan ti panagurnos iti daytoy a panid."',
'missingsummary' => "'''Palagip:''' Saanka a nakaited iti pakabuklan ti panag-urnos.
No ipindutmo ti manen ti \"{{int:savearticle}}\", maidulin ti inurnosmo nga awan ti pakabuklanna.",
'missingcommenttext' => 'Pangngaasi nga agikabil ti komentario dita baba.',
'missingcommentheader' => "'''Palagip:''' Saanka a nakaited  iti suheto/paulo para iti daytoy a komentario.
No ipindutmo manen ti \"{{int:savearticle}}\", maidulin ti inurnosmo nga awan ti pakabuklanna.",
'summary-preview' => 'Naipadas a  pakabuklan:',
'subject-preview' => 'Suheto/naipadas a paulo:',
'blockedtitle' => 'Naseraan ti agar-aramat',
'blockedtext' => "'''Naseraan ti naganmo nga agar-aramat wenno ti IP a pagtaengam.'''

Ni $1 ti nangserra kenka. 
Ti rason ket ''$2''.

* Rugi ti panangserra: $8
* Panagpaso ti panangserra: $6
* Ti koma serraanna: $7

Mabalinmo a kontaken ni $1 wenno sabali pay nga [[{{MediaWiki:Grouppage-sysop}}|administrador]] no kayatmo a maipalawag daytoy a panag-serra.
Dimo mabalin nga aramaten ti ramit nga esuratan daytoy nga agar-aramat malaksid no adda napudno nga esurat a pagtaengan a naipan iti [[Special:Preferences|pakabilangan ti kaykayatmo]] ken no saanka a naparitan nga agaramat iti daytoy.
Ti agdama nga IP a pagtaengam ket $3, ti naserraan nga ID ket #$5. Pangngaasi nga iramanmo nga ited ti aniaman wenno agpada kadagitoy iti aniaman a panagsaludsodmo.",
'autoblockedtext' => 'Ti IP a pagtaengam ket na-automatiko a naserraan ngamin ket inusar ti sabali nga agar-aramat, a sinerraan ni $1.
Ti rason nga inted ket:

:\'\'$2\'\'

* Rugi ti panag-serra: $8
* Panagpaso ti panag-serra: $6
* Ti serraanna koma: $7

Mabalinmo a kontaken ni $1 wenno maysa kadagiti [[{{MediaWiki:Grouppage-sysop}}|administrador]] tapno maipalawag daytoy a panag-serra.

Laglagipem a saanmo a mabalin nga usaren ti "esuratan daytoy nga agar-aramat" a langa malaksid no addaanka ti napudno nga esurat a pagtaengan a nakarehistro idiay [[Special:Preferences|kakaykayatam]] ken saanka a naserraan manipud ti panag-usar daytoy.

Ti tatta nga IP a pagtaengam ket $3, ken ti ID ti naserraan ket #$5.
Pangaasi nga iramanmo amin dagiti salaysay kadagiti amin a panagsaludsodmo.',
'blockednoreason' => 'awan ti naited a rason',
'whitelistedittext' => 'Nasken ti $1 tapno maurnosmo dagitoy a panid.',
'confirmedittext' => 'Masapul a pasingkedam ti esurat sakbay a makaurnos kadagitoy a panid.
Pangngaasim nga ikabil ken ipapudnom ti esuratmo idiay [[Special:Preferences|kaykayat dagiti agar-aramat ]].',
'nosuchsectiontitle' => 'Saan a mabirukan ti paset',
'nosuchsectiontext' => 'Pinadasmo nga inurnos ti awan a paset.
Mabalin a naiyalis wenno naikkat bayat idi kitkitaem ti panid.',
'loginreqtitle' => 'Masapul ti sumrek',
'loginreqlink' => 'sumrek',
'loginreqpagetext' => 'Naskenka a $1 tapno makakitaka kadagiti sabsabali a pampanid.',
'accmailtitle' => 'Naipatuloden ti kontrasenias.',
'accmailtext' => "Ti pugto a napartuat a kontrasenias para kenni [[User talk:$1|$1]] ket naipatuloden idiay $2. Mabalin a masukatan idiay
''[[Special:ChangePassword|pagsukatan ti kontrasenias]]'' a panid no sumrekka.",
'newarticle' => '(Baro)',
'newarticletext' => 'Nasurotmo ti silpo ti awan pay a panid. 
Ti mangpartuat ti panid, rugiamon ti agmakinilia iti kahon dita baba (kitaen ti [$1 panid ti tulong] para iti adu pay a pakaammo). 
No addaka ditoy babaen ti biddut, pindutem ti buton ti <strong>agsubli</strong> ti pagbasabasam.',
'anontalkpagetext' => "----
''Daytoy ti pakitungtungan a panid para iti di am-ammo nga agar-aramat a saan pay a nakaaramid ti pakabilangan, wenno saanna nga us-usaren.
Dakami ket agusar kami ti numero nga IP a pagtaengan ti panangilasin dagiti lalaki/babai.
Ti kastoy nga IP a pagtaengan ket us-usaren a bingayan ti adu pay a sabsabali nga agar-aramat.
No sika ket maysa a di am-ammo nga agar-aramat ken dagiti awan ti kapategan a komentario ket napaitudo kenka, pangngaasi nga [[Special:UserLogin/signup|agaramid ka ti pakabilangam]] wenno [[Special:UserLogin|sumrekka]] 
tapno maawanan ti panakaulaw kadagiti sabali a di am-ammo nga agar-aramat.",
'noarticletext' => 'Awan ti agdama a testo daytoy a panid.
Mabalinmo ti [[Special:Search/{{PAGENAME}}|agsapul iti kastoy a titulo ti panid]] kadagiti sabsabali a pampanid,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} birukem dagiti mainaig a listaan],
wenno [{{fullurl:{{NAMESPACE}}:{{PAGENAME}}|action=edit}} urnosem daytoy a panid].',
'noarticletext-nopermission' => 'Awan ti agdama  a linaon daytoy a panid.
Mabalinmo ti [[Special:Search/{{PAGENAME}}|agbiruk para iti titulo ti daytoy a panid]] kadagiti sabali a panid, wenno <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} agbiruk kadagiti mainaig a listaan]</span>, ngem awan ti pammalubosmo a mangpartuat ti daytoy a panid.',
'missing-revision' => 'Ti panagbalbaliw ti #$1 iti daytoy a panid a nanaganan ti "{{PAGENAME}}" ket awan.

Daytoy ket kadawyan a gapuanan babaen ti sumaganad a silpo ti baak a pakasaritaan iti maysa a naikkaten a panid.
Dagiti salaysay ket mabalin a mabirukan idiay [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} listaan ti panagikkat].',
'userpage-userdoesnotexist' => 'Ti pakabilangan ti agar-aramat "$1" ket saan a nakarehistro. 
Pangngaasi a kitaem no kayatmo ti agaramid/urnosen daytoy a panid.',
'userpage-userdoesnotexist-view' => 'Ti pakabilangan ti agar-aramat "$1" ket saan a nakarehistro.',
'blocked-notice-logextract' => 'Agdama a naserraan daytoy nga agar-aramat.
Ti naudi a listaan ti panaka-serra ket adda dita baba tapno mausar a reperensia:',
'clearyourcache' => "'''Pakaammo:''' No nalpaskan nga agiduldulin, koma ket masapul nga ipalabas ti cahe ti pagbasabasam tapno makita dagiti sinukatam.
* '''Firefox / Safari:''' Tenglen ti ''Sukatan'' bayat nga ipindut ti ''Ikarga manen'', wenno ipindut ti ''Ctrl-F5'' wenno''Ctrl-R'' (''⌘-R'' Mac)
* '''Google Chrome:''' Ipindut ti ''Ctrl-Shift-R'' (''⌘-Shift-R'' iti Mac)
* '''Internet Explorer:''' Tenglen ti ''Ctrl'' bayat nga ipindut ti ''Ipasaradiwa'', wenno ipindut ti ''Ctrl-F5''
* '''Opera:''' Dalusan ti cache iti ''Ramramit → Kakaykayatan''",
'usercssyoucanpreview' => "'''Paammo:''' Usaren ti \"{{int:showpreview}}\" a buton ti panagsubok ti baro a CSS sakbay nga idulinmo.",
'userjsyoucanpreview' => "'''Paammo:''' Usaren ti \"{{int:showpreview}}\" a buton ti panagsubok ti baro a JavaScript sakbay nga idulinmo.",
'usercsspreview' => "'''Laglagipem nga ipadpadasmo laeng daytoy a CSS.'''
'''Saan pay a naidulin!'''",
'userjspreview' => "'''Laglagipem nga ipadpadasmo laeng daytoy a JavaScript.'''
'''Saan pay a naidulin!'''",
'sitecsspreview' => "'''Laglagipem nga ipadpadasmo laeng daytoy a CSS.'''
'''Saan pay a naidulin!'''",
'sitejspreview' => "'''Laglagipem nga ipadpadasmo laeng ti kodigo daytoy a JavaScript.'''
'''Saan pay nga naidulin!'''",
'userinvalidcssjstitle' => "'''Ballaag:''' Awan ti kudil a \"\$1\".
Annawid a .css ken .js dagiti titulo ket agususar ti babassit a letra, a kas dagiti {{ns:user}}:Foo/vector.css saan ket a {{ns:user}}:Foo/Vector.css.",
'updated' => '(Napabaro)',
'note' => "'''Paammo:'''",
'previewnote' => "'''Laglagipem a daytoy ket panagipadas laeng.'''
Dagiti sinukatam ket saan pay a naidulin!",
'continue-editing' => 'Mapan idiay pagurnosan a lugar',
'previewconflict' => 'Daytoy a panagpadas ket agiparang ti testo dita ngato a panagurnos a lugar a kasla agparang no kayatmo nga idulin.',
'session_fail_preview' => "'''Pasensia! Saanmi a maaramid ti panag-urnos gapu ngamin ta naawanan ti gimong ti data.'''
Pangngaasi a padasem manen.
No saan pay a mabalin, padasem ti [[Special:UserLogout|rummuar]] ken sumrekka manen.",
'session_fail_preview_html' => "'''Pasensia! Saanmi a maaramid ti panagurnosmo ngamin ket naawanan ti gimong ti datos.'''

''Gapu ti {{SITENAME}} ket addaa ti nakilaw a HTML a nakapabaelan, ti panagpadas ket nailemmeng a kas pagan-annadan kadagiti panagraut ti dakes a JavaScript.''

'''No daytoy ket pudno a panag-urnos, pangngaasi a padasem manen.'''
No saan pay a mabalin, padasem ti [[Special:UserLogout|rummuar]] ken sumrekka manen.",
'token_suffix_mismatch' => "'''Ti panag-urnosmo ket saan a naawat ngamin ket ti klientem ket dinadaelna ti kuldit ti kababalin idiay panagpudno ti panag-urnos.'''
Ti panag-urnos ket saan a naawat tapno mapawilan ti panakadadael ti testo ti panid.
Mapasamak daytoy no agus-usarka ti saan a nasayaat a naibasta ti sapot a di ammo a pannakbagi a panagserbi.",
'edit_form_incomplete' => "'''Adda dagiti paset ti panag-urnos a porma a saan a nakadanon dita server; kitkitaen nga dagiti panag-urnosmo ket saan a naikkatan ken padasem manen.'''",
'editing' => 'Ur-urnosen ti $1',
'creating' => 'Agparpartuat ti $1',
'editingsection' => 'Ur-urnosen ti $1 (paset)',
'editingcomment' => 'Ur-urnosen ti $1 (baro a paset)',
'editconflict' => 'Adda kasinnungat ti panag-urnos: $1',
'explainconflict' => "Adda sabali a nagsukat iti daytoy a panid idi nangrugika a nagurnos.
Ti ngato a lugar ti testo ket adda dagiti nagyanna a testo ti panid a kasla agdama a kitana.
Ti inurnosmo ket maipakita dita babba a lugar ti testo
Ipatiponmo dagiti sinukatam idiay lugar ti testo.
'''Iti laeng''' testo dita ngato a lugar ti testo ti maidulin no pindutem ti \"{{int:savearticle}}\".",
'yourtext' => 'Ti testom',
'storedversion' => 'Bersion a naidulin',
'nonunicodebrowser' => "'''Ballaag: Ti  pabasabasam ket saan a naikeddeng ti Unicode .'''
Adda sabali a mausar tapno makaurnoska kadagiti panid: Ti saan nga-ASCII a kababalin ket agparang iti pagurnosan a kahon a kas dagiti heksadesimal a kodigo.",
'editingold' => "'''Ballag: Ur-urnosem ti daan a panag-baliw iti daytoy a panid.'''
No idulinmo, mapukaw amin a sinukatam iti daytoy a panag-baliw.",
'yourdiff' => 'Dagiti nagdudumaan',
'copyrightwarning' => "Laglagipenyo koma, apo, nga amin a maiparawad iti {{SITENAME}} ket maibilang a mairuar babaen ti $2 (kitaen ti $1 para kadagiti salaysay). 
No dimo kayat a ti sinuratmo ket maurnos nga awanan-asi ken maiwaras nga awan sungsungbatan kenka, saanmo laengen nga ip-ipan wenno ipabpablaak ditoy.<br />
Kasta met nga ikarim kadakami a bukodmo a sinurat wenno gapuanan daytoy, wenno tinuladmo manipud ti maysa a nawaya a pagturayan ti publiko wenno ti kapadpadana a nawaya a nagtaudan.
 '''Saan a mangited ti adda karbenganna a panagipablaak nga obra no awan ti  pammalubos!'''",
'copyrightwarning2' => "Pangngaasiyo, apo, a laglagipen nga amin a maiparawad iti {{SITENAME}} ket mabalin a maurnos, masuktan, wenno ikkaten dagiti sabali pay nga agar-aramat.
No dimo kayat a ti sinuratmo ket maurnos nga awanan-asi ken maiwaras nga awan sungsungbatan kenka, saanmo laengen nga ip-ipan wenno ipabpablaak ditoy.<br />
Kasta met nga ikarim kadakami a bukodmo a sinurat wenno gapuanan daytoy, wenno tinuladmo manipud ti maysa a nawaya a pagturayan ti publiko wenno ti kapadpadana a nawaya a pagtaudan (kitaen ti $1 para iti salaysay).
'''Saan a mangipan iti adda ti karbenganna a panagpablaak nga obra no awan ti  pammalubos!'''",
'longpageerror' => "'''Biddut: Ti testo nga intedmo ket {{PLURAL:$1|maysa a kilobyte|$1 kil-kilobyte}} a katiddog, nga at-atiddog ngem ti kangatuan iti  {{PLURAL:$2|maysa a kilobyte|$2 kil-kilobyte}}.'''
Isu ti gapuna a saan a maidulin.",
'readonlywarning' => "'''Ballaag: Narikepan ti database tapno mataripatu, isu a saanmo a mabalin nga idulin dagita inurnosmo tattan.'''
Mabalinmo ti agkopia ken agikabil ti testom iti maysa a testo a papeles ken idulinmo para iti panagusar no madamdama.

Ti administrador a nangrikep ket nangited iti daytoy a palawag: $1",
'protectedpagewarning' => "'''Ballaag:  Daytoy a panid ket nasalakniban tapno dagiti laeng agar-aramat nga adda ti gundaway nga administrador ti makaurnos ditoy.'''
Ti nakaudi a naikabil a listaan ket adda dita baba tapno usaren a reperensia:",
'semiprotectedpagewarning' => "'''Pakaammo:'''Nasalakniban daytoy a panid tapno dagiti laeng nakarehistro nga agar-aramat ti makaurnos ditoy.
Ti naudi a naikabil a listaan ket adda dita baba tapno usaren a reperensia:",
'cascadeprotectedwarning' => "'''Ballaag:''' Daytoy a panid ket nasalakniban tapno dagiti laeng administrador nga adda ti pammalubos ti makaurnos ngamin ket nairaman kadagiti sumaganad a nasalakniban iti sariap
{{PLURAL:$1|a panid|a pampanid}}:",
'titleprotectedwarning' => "'''Ballaag:  Nasalakniban daytoy a panid tapno [[Special:ListGroupRights|dagiti naisangayan a karbengan ]] ket nasken ti makapartuat iti daytoy.'''
Ti kinaudi a naikabil iti listaan ket naikabil dita baba tapno usaren a reperensia:",
'templatesused' => '{{PLURAL:$1|Ti plantilia|Dagiti plantilia}} a naaramat iti daytoy a panid:',
'templatesusedpreview' => '{{PLURAL:$1|Ti plantilia|Dagiti plantilia}} a naaramat iti daytoy a panagpadas:',
'templatesusedsection' => '{{PLURAL:$1|Ti plantilia|Dagiti plantilia}} a naaramat iti daytoy a paset:',
'template-protected' => '(nasalakniban)',
'template-semiprotected' => '(nasalakniban-bassit)',
'hiddencategories' => 'Daytoy a panid ket kameng  {{PLURAL:$1|ti 1 a nailemmeng a kategoria|dagiti $1 a nailemmeng a kategoria}}:',
'nocreatetext' => 'Pinaritan ti {{SITENAME}} ti pannakabael a panagaramid iti kabarbaro a pampanid.
Mabalinmo ti agsubli ken urnosen ti adda a panid, wenno [[Special:UserLogin|sumrek wenno agaramid ti pakabilangan]].',
'nocreate-loggedin' => 'Awan ti pammalubosmo nga agpartuat kadagiti baro a panid.',
'sectioneditnotsupported-title' => 'Saan a nasuportaran ti panagurnos ti paset',
'sectioneditnotsupported-text' => 'Saan a nasuportaran ti panag-urnos ti paset iti daytoy a panid.',
'permissionserrors' => 'Biddut ti pammalubos',
'permissionserrorstext' => 'Awan ti pammalubosmo nga agaramid iti dayta, gapu ti sumaganad {{PLURAL:$1|a rason|a rasrason}}:',
'permissionserrorstext-withaction' => 'Awan ti pammalubosmo nga $2, gapu ti sumaganad a {{PLURAL:$1|rason|rasrason}}:',
'recreate-moveddeleted-warn' => "'''Ballaag: Agparpartuatka manen ti dati a naikkat a panid'''

Nasken a siguraduem no maikanatad nga ituloymo nga urnosen daytoy a panid.
Ti pannakaikkat ken pannakaiyalis a listaan para iti daytoy a panid ket adda ditoy a pakakitaan:",
'moveddeleted-notice' => 'Naikkaten daytoy a panid.
Ti listaan a pannakaikkat ken pannakaiyalis ti panid ket naikabil dita baba tapno usaren a reperensia.',
'log-fulllog' => 'Kitaem ti napno a listaan',
'edit-hook-aborted' => 'Ti panag-urnos ket pinasardeng babaen ti kawit.
Awan ti intedna a palawag.',
'edit-gone-missing' => 'Saan a mapabaro daytoy a panid.
Kasla met naikkaten.',
'edit-conflict' => 'Adda kasinnungat ti panag-urnos.',
'edit-no-change' => 'Ti inurnosmo ket saan a naikaskaso, ngamin ket awan ti nasukatan a testo.',
'postedit-confirmation' => 'Ti inurnosmo ket naidulinen.',
'edit-already-exists' => 'Saan a makaaramid ti baro a panid.
Adda met daytoyen.',
'defaultmessagetext' => 'Kasisigud a testo ti mensahe',
'content-failed-to-parse' => 'Napaay a nausig ti $2 a linaon para iti $1 a modelo: $3',
'invalid-content-data' => 'Imbalido a datos ti linaon',
'content-not-allowed-here' => 'Ti "$1" a linaon ket saan a maipalubos idiay panid ti [[$2]]',
'editwarning-warning' => 'Ti ipapanaw iti daytoy a panid ket makapataud ti pannakapukaw kadagiti aniaman a binalbaliwam.
No nakastrekka, mabalinmo nga ibaldado daytoy a ballaag idiay "{{int:prefs-editing}}" a paset kadagiti kakaykayatam.',
'editpage-notsupportedcontentformat-title' => 'Ti pormat ti linaon ket saan a nasuportaran',
'editpage-notsupportedcontentformat-text' => 'Ti pormat ti linaon ti $1 ket saan a nasuportaran babaen ti modelo ti linaon ti $2.',

# Content models
'content-model-wikitext' => 'wikitext',
'content-model-text' => 'naranas a testo',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''Ballaag:''' Daytoy a panid ket adu unay kadagiti nangina a parser a pamay-an  a panagtawtawag.

Adda koman basbasit ngem $2 {{PLURAL:$2|a panagtawtawag|kadagiti panagtawtawag}}, adda {{PLURAL:$1|tattan $1 a panagtawtawag|tattan kadagiti $1 a panagtawtawag}}.",
'expensive-parserfunction-category' => 'Dagiti panid nga adda ti adu unay a nangina a parser a pamay-an a panagtawtawag',
'post-expand-template-inclusion-warning' => "'''Ballaag:''' Dakkel unay ti nairaman a kadakkel ti plantilia.
Adda dagiti plantilia a saanto a mairaman.",
'post-expand-template-inclusion-category' => 'Pampanid nga ayan ti plantilia a nagsobra ti kadakkel ti rukod a nairaman',
'post-expand-template-argument-warning' => "'''Ballaag:''' Daytoy a panid ket aglaon ti saan a basbasit ngem maysa a panangipalawag ti plantilia a dakkel unay ti panagpadakkelna.
Dagitoy a panangipalawag ket naikkaten.",
'post-expand-template-argument-category' => 'Dagiti panid a naglaon ti naikkat a plantilia kadagiti kasinnungat',
'parser-template-loop-warning' => 'Adda nasarakan a silo ti plantilia: [[$1]]',
'parser-template-recursion-depth-warning' => 'Ti kinauneg ti panagdullit ti plantilia ket nagpatingga ti napalabes ($1)',
'language-converter-depth-warning' => 'Ti kauneg ti panagaramid ti pagsasao ket napalabes ti agpatingga a ($1)',
'node-count-exceeded-category' => 'Dagiti panid a simmurok ti bilang ti nodo',
'node-count-exceeded-warning' => 'Ti panid ket nasurokanna ti bilang ti nodo',
'expansion-depth-exceeded-category' => 'Dagiti panid a nasurokan ti kauneg ti panagpadakkel',
'expansion-depth-exceeded-warning' => 'Ti panid ket nasurokanna ti kauneg ti panagpadakkel',
'parser-unstrip-loop-warning' => 'Adda nakita a di-naukisan a silo',
'parser-unstrip-recursion-limit' => 'Ti di-naukisan a panagsumro manen a patingga ket nasurokan ($1)',
'converter-manual-rule-error' => 'Adda biddut a naduktalan idiay manual nga alagaden ti panagbalbaliw ti pagsasao',

# "Undo" feature
'undo-success' => 'Ti panag-urnos ket saan a maisubli.
Pangngaasi a kitaen ti pagipadaan dita baba tapno maamuan no agpaypayso ti kayatmo nga aramiden, ken idulin dagiti sinukatan dita baba tapno malpas ti panagsubli ti inurnos.',
'undo-failure' => 'Ti inurnos ket saan a maipasubli gaputa adda dagiti nakisinnungat a patingnga a naurnos.',
'undo-norev' => 'Saan a maibabawi ti naurnos ngamin ket awan daytoy wenno mabalin a naikkaten.',
'undo-nochange' => 'Ti inurnos ket kasla naibabawin.',
'undo-summary' => 'Ibabawi ti $1 a binaliwan babaen ni [[Special:Contributions/$2|$2]] ([[User talk:$2|tungtungan]])',
'undo-summary-username-hidden' => 'Isubli ti $1 a binaliwan babaen ti nailemmeng nga agar-aramat',

# Account creation failure
'cantcreateaccounttitle' => 'Saan a makaaramid ti pakabilangan',
'cantcreateaccount-text' => "Ti panagaramid ti pakabilangan manipud ti daytoy nga IP a pagtaengan ('''$1''') ket sinerraan babaen ni [[User:$3|$3]].

Ti inted a rason babaen ni $3 ket ''$2''",
'cantcreateaccount-range-text' => "Ti pannakapartuat ti pakabilangan manipud kadagiti pagtaengan ti IP iti sakop ti '''$1''', a mairaman ti IP a pagtaengam ('''$4'''), ket sinerraan babaen ni [[User:$3|$3]].

Ti inted a rason babaen ni $3 ket ''$2''",

# History pages
'viewpagelogs' => 'Kitaen dagiti listaan para iti daytoy a panid',
'nohistory' => 'Awan ti pakasaritaan ti panag-urnos iti daytoy a panid.',
'currentrev' => 'Kinaudi a binaliwan',
'currentrev-asof' => 'Kinaudi a panagbalbaliw manipud idi $1',
'revisionasof' => 'Panagbalbaliw manipud idi $1',
'revision-info' => 'Panagbaliw manipud idi $1 babaen ni $2',
'previousrevision' => '←Daan a panagbalbaliw',
'nextrevision' => 'Nabarbaro a panagbalbaliw→',
'currentrevisionlink' => 'Kinaudi a binaliwan',
'cur' => 'agdama',
'next' => 'sumaruno',
'last' => 'naudi',
'page_first' => 'umuna',
'page_last' => 'naudi',
'histlegend' => 'Panagpili ti diperensia: Markaan dagiti kahon ti radio kadagiti panagbaliw tapno maipada ken pinduten ti serrek wenno ti buton dita baba.<br />
Leyenda: <strong>({{int:cur}})</strong> = naggidiatan ti kinaudi a panagbaliw, <strong>({{int:last}})</strong> = naggidiatan ti sarsarunuen a panagbaliw , <strong>{{int:minoreditletter}}</strong> = bassit a panagbaliw.',
'history-fieldset-title' => 'Agbasabasa ti pakasaritaan',
'history-show-deleted' => 'Naikkat laeng',
'histfirst' => 'kadaanan',
'histlast' => 'kabaruan',
'historysize' => '({{PLURAL:$1|1 byte|dagiti $1 a byte}})',
'historyempty' => '(blanko)',

# Revision feed
'history-feed-title' => 'Pakasaritaan ti panagbalbaliw',
'history-feed-description' => 'Pakasaritaan ti panagbalbaliw para iti daytoy a panid ditoy a wiki',
'history-feed-item-nocomment' => '$1 iti $2',
'history-feed-empty' => 'Awan ti kiniddaw a panid.
Mabalin a naikkat manipud ti daytoy a wiki, wenno nanaganan manen.
Padasem ti [[Special:Search|agbiruk ditoy a wiki]] para kadagiti maitutop a baro a panid.',

# Revision deletion
'rev-deleted-comment' => '(naikkat ti pakabuklan ti inurnos)',
'rev-deleted-user' => '(naikkat ti nagan ti agar-aramat)',
'rev-deleted-event' => '(naikkat ti aramid a listaan)',
'rev-deleted-user-contribs' => '[ti nagan ti agar-aramat wenno IP a pagtaengan ket naikkat - ti inurnos ket nailemmeng kadagiti nagparawad]',
'rev-deleted-text-permission' => "Ti pannakabaliw daytoy a panid ket '''naikkaten'''.
Dagiti salaysay ket mabirukan idiay [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} listaan ti naikkat].",
'rev-deleted-text-unhide' => "Ti pannakabaliw daytoy a panid ket '''naikkaten'''.
Dagiti salaysay ket mabirukan idiay [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} listaan ti naikkat].
Mabalinmo pay a [$1 makita daytoy a panakabaliw] no kayatmo ti agtuloy.",
'rev-suppressed-text-unhide' => "Ti pannakabaliw daytoy a panid ket '''napasardeng'''.
Dagiti salaysay ket mabirukan idiay [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} listaan ti napasardeng].
Mabalinmo pay a [$1 makita daytoy a panakabaliw] no kayatmo ti agtuloy.",
'rev-deleted-text-view' => "Ti pannakabaliw daytoy a panid ket '''naikkaten'''.
Mabalinmo a kitaen; dagiti salaysay ket mabirukan idiay [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} listaan ti naikkat].",
'rev-suppressed-text-view' => "Ti pannakabaliw daytoy a panid ket '''napasardeng'''.
Mabalinmo a kitaen; dagiti salaysay ket mabirukan idiay [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} listaan ti napasardeng].",
'rev-deleted-no-diff' => "Saanmo a makita daytoy a paggiddiatan ngamin ket ti maysa a panagbaliw ket '''naikkat''.
Dagiti salaysay ket mabirukan idiay [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} listaan ti naikkat].",
'rev-suppressed-no-diff' => "Saanmo a makita daytoy a paggiddiatan ngamin ket maysa a panagbaliwan ket '''naikkat''.",
'rev-deleted-unhide-diff' => "Maysa a panagbaliw iti daytoy a paggiddiatan ket '''naikkaten'''.
Dagiti salaysay ket mabirukan idiay [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} listaan ti naikkat].
Mabalinmo pay a [$1 makita daytoy a paggiddiatan] no kayatmo ti agtuloy.",
'rev-suppressed-unhide-diff' => "Maysa a panagbaliw iti daytoy a paggiddiatan ket '''napasardeng'''.
Dagiti salaysay ket mabirukan idiay [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} listaan ti napasardeng].
Mabalinmo pay a [$1 makita daytoy a paggiddiatan] no kayatmo ti agtuloy.",
'rev-deleted-diff-view' => "Maysa a panagbaliw iti daytoy a paggiddiatan ket '''naikkaten'''.
Mabalinmo pay a kitaen daytoy a paggiddiatan; dagiti salaysay ket mabirukan idiay [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} listaan ti naikkat].",
'rev-suppressed-diff-view' => "Maysa a panagbaliw iti daytoy a paggiddiatan ket '''napasardeng'''.
Mabalinmo pay a kitaen daytoy a paggiddiatan; dagiti salaysay ket mabirukan idiay [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} listaan ti napasardeng].",
'rev-delundel' => 'ipakita/ilemmeng',
'rev-showdeleted' => 'ipakita',
'revisiondelete' => 'Ikkaten/isubli dagiti naikkat a panagbaliw',
'revdelete-nooldid-title' => 'Imbalido ti napuntaan a panagbaliw',
'revdelete-nooldid-text' => 'Mabalin a saanmo nga imbaga ti pagpuntaan ti panagbaliw  (dagiti panagbaliwan) ti panagaramid daytoy,
awan ti naibaga a panagbaliw, wenno padpadasem nga ilemlemmeng ti agdama a panagbaliw.',
'revdelete-no-file' => 'Awan dayta nainaganan a papeles.',
'revdelete-show-file-confirm' => 'Sigurado kadi a kayatmo ti mangkita ti naikkat a baliwan ti papeles "<nowiki>$1</nowiki>" a naggapu idi $2 idi $3?',
'revdelete-show-file-submit' => 'Wen',
'revdelete-selected' => "'''{{PLURAL:$2|Napili a nabaliwan|Dagiti napili a nabaliwan}} iti [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Ti napili a listaan ti napasamak|Dagiti napili a listaan ti napasamak}}:'''",
'revdelete-text-text' => 'Dagiti naikkat a rebision ket agparangto pay laeng iti panid ti pakasaritaan, ngem dagiti paset ti linaonda ket saanton a publiko a maserrekan.',
'revdelete-text-file' => 'Dagiti naikkat a bersion ti papeles ket agparangto pay laeng iti pakasaritaan ti papeles, ngem dagiti paset ti linaonda ket saanton a publiko a maserrekan.',
'logdelete-text' => 'Dagiti naikkat a listaan ti pasamak ket agparangto pay laeng kadagiti listaan, ngem dagiti paset ti linaonda ket saanton a publiko a maserrekan.',
'revdelete-text-others' => 'Dagiti sabali nga administrador iti {{SITENAME}} ket mabalindanto pay laeng a maserrekan ti nailemmeng a linaon ken mabalindanto manen ti mangisubli ti pannakaikkat babaen iti daytoy nga isu met laeng nga interface, malaksid no adda dagiti maipatinayon a maisaad a panangigawid.',
'revdelete-confirm' => 'Pangngaasi a pasingkedam a kayatmo nga aramiden daytoy, a maawatam dagiti pagbanagan, ket araramidem daytoy a segun iti [[{{MediaWiki:Policy-url}}|ti annuroten]].',
'revdelete-suppress-text' => "Ti panagdepdep ket usaren '''laeng''' kadagiti sumaganad a kaso;
* Makapataud ti libelo a pakaammo
* Di maiparbeng a personal a pakaammo
* : ''dagiti pagtaengan ken numero ti telepono, dagiti numero ti nailian a pakaipakaammuan, ken dadduma pay.''",
'revdelete-legend' => 'Ikabil dagiti panagiparit ti panagkita',
'revdelete-hide-text' => 'Testo ti binaliwan',
'revdelete-hide-image' => 'Ilemmeng ti linaon ti papeles',
'revdelete-hide-name' => 'Ilemmeng ti aramid ken puntaan',
'revdelete-hide-comment' => 'Pakabuklan ti inurnos',
'revdelete-hide-user' => 'Nagan ti agar-amat/ti IP a pagtaengan',
'revdelete-hide-restricted' => 'Depdepen ti datos a naggapu kadagiti administrador ken dagiti sabsabali',
'revdelete-radio-same' => '(saan a sukatan)',
'revdelete-radio-set' => 'Nailemmeng',
'revdelete-radio-unset' => 'Makita',
'revdelete-suppress' => 'Depdepen ti datos manipud kadagiti administrador ken dagiti sabsabali',
'revdelete-unsuppress' => 'Ikkaten dagiti pannakaiparit kadagiti naisubli a binaliwan',
'revdelete-log' => 'Rason:',
'revdelete-submit' => 'Ipakat {{PLURAL:$1|ti napili a panagbalbaliw|dagiti napili a panagbalbaliw}}',
'revdelete-success' => "'''Balligi ti panagpabaro ti panagkita ti binalbaliwan.'''",
'revdelete-failure' => "'''Saan a napabaro ti panagkita ti binalbaliwan.'''
$1",
'logdelete-success' => "'''Balligi ti panagikabil ti listaan ti panagkita.'''",
'logdelete-failure' => "'''Napaay ti panagikabil ti listaan ti panagkita:'''
$1",
'revdel-restore' => 'sukatan ti panagkita',
'pagehist' => 'Pakasaritaan ti panid',
'deletedhist' => 'Naikkat a pakasaritaan',
'revdelete-hide-current' => 'Biddut ti pannakailemmeng ti banag a napetsado a $2, $1: Daytoy ti kinaudi a panagbaliw
Saan a mabalin a mailemmeng.',
'revdelete-show-no-access' => 'Biddut ti panangipakita ti banag a petsado a $2, $1: Daytoy ket namarkaan a "nakedngan".
Saanmo a mabalin a serrekan.',
'revdelete-modify-no-access' => 'Biddut ti panagpabaro ti banag a petsado a $2, $1: Daytoy ket namarkaan a "nakedngan".
Saanmo a mabalin a serrekan.',
'revdelete-modify-missing' => 'Biddut ti panagpabaro daytoy ID $1: Saan a nasarakan idiay database!',
'revdelete-no-change' => "'''Ballaag:''' Daytoy a banag a napetsado ti  $2, $1 ket addaan ti kiniddaw kadagiti panagkita a kasasaad.",
'revdelete-concurrent-change' => 'Biddut ti panagpabaro daytoy a banag a napetsado ti  $2, $1: Ti panakaikabilna ket mabalin a nasuktanen ti sabsabli idi pinada mo a pinabaro.
Pangngaasi a kitaen dagiti listaan.',
'revdelete-only-restricted' => 'Biddut ti panagilemmeng daytoy banag a napetsado ti $2, $1: Saanmo a maidepdep dagita iti panagkita dagiti adminitrador no saanmo a pilian ti maysa kadagiti pinagpili ti panagkita.',
'revdelete-reason-dropdown' => '*Dagiti kadawyan a rason ti panagikkat
** Panaglabsing ti karbengan ti kopia
** Di maiparbeng a komentario wenno kabukbukodan a pakaammo
** Di maiparbeng a nagan ti agar-aramat
** Adda pannakabalinna a pammadpadakes a pakaammo',
'revdelete-otherreason' => 'Sabali/maipatinayon a rason:',
'revdelete-reasonotherlist' => 'Sabali a rason',
'revdelete-edit-reasonlist' => 'Urnosen dagiti rason ti panagikkat',
'revdelete-offender' => 'Nangsukat a mannurat:',

# Suppression log
'suppressionlog' => 'Listaan ti nadepdepan',
'suppressionlogtext' => 'Dita baba ket addaan dagiti listaan ti pinagikkat ken panagserra a nairaman dagiti linaon a nailemmeng manipud kadagiti administrador.
Kitaen ti [[Special:BlockList|Listaan ti lapden nga IP]] para iti listaan kadagiti agdama nga operasional a panagparit ken panagserra.',

# History merging
'mergehistory' => 'Pagtiponen dagiti pakasaritaan ti pampanid',
'mergehistory-header' => 'Daytoy a panid ket mabalinmo ti agitipon kadagiti pinagbaliwan ti pakasaritaan iti maysa a taudan idiay barbaro a panid.
Masapul a sigaraduem a daytoy a panagsukat ket agsustento ti panakaituloy ti pakasaritaan ti panid.',
'mergehistory-box' => 'Pagtiponen dagiti nasukatan iti dua a pampanid:',
'mergehistory-from' => 'Taudan ti panid:',
'mergehistory-into' => 'Pangipanan a panid:',
'mergehistory-list' => 'Mabalin nga itipon a pakasaritaan ti inurnos',
'mergehistory-merge' => 'Dagiti sumaganad a panagbaliw iti [[:$1]] ket mabalin nga itipon iti [[:$2]].
Usaren ti radio a buton a tukol ti pinagtipon iti laeng panagbaliw a naaramid idiay ken sakbay ti nainagan nga oras.',
'mergehistory-go' => 'Ipakita dagiti mabalin a maitipon a panag-urnos',
'mergehistory-submit' => 'Pagtitiponen dagiti binalbaliwan',
'mergehistory-empty' => 'Awan dagiti mabalin nga itipon ti panagbalbaliw.',
'mergehistory-success' => '$3 {{PLURAL:$3|a binaliwan|dagiti binaliwan}} ti [[:$1]] balligi ti panagitipon idiay [[:$2]].',
'mergehistory-fail' => 'Saan a nakaaramid ti panagtipon ti pakasaritaan, pangngaasi ta kitaen ti panid ken parametro ti oras.',
'mergehistory-no-source' => 'Awan ti taudan ti panid a $1.',
'mergehistory-no-destination' => 'Awan ti papanan ti panid a $1.',
'mergehistory-invalid-source' => 'Masapul nga adda ti umisu a titulo ti taudan ti panid.',
'mergehistory-invalid-destination' => 'Ti pangipanan ti panid ket masapul nga umisu a titulo.',
'mergehistory-autocomment' => 'Naitipon ti [[:$1]] iti [[:$2]]',
'mergehistory-comment' => 'Naitipon ti [[:$1]] iti [[:$2]]: $3',
'mergehistory-same-destination' => 'Ti nagtaudan ken ti pangipanan ti panid ket saan a mabalin nga agpada',
'mergehistory-reason' => 'Rason:',

# Merge log
'mergelog' => 'Listaan ti panagtipon',
'pagemerge-logentry' => 'itipon ti [[$1]] iti [[$2]] (dagiti binaliwan aginggana iti $3)',
'revertmerge' => 'Pagsinaen',
'mergelogpagetext' => 'Adda dita baba ti listaan dagiti kinaudian a panagtipon ti maysa a panid ti pakasaritaan iti maysa a sabali.',

# Diffs
'history-title' => 'Panagbalbaliw a pakasaritaan iti "$1"',
'difference-title' => 'Paggiddiatan a nagbaetan dagiti panagbalbaliw iti "$1"',
'difference-title-multipage' => 'Paggiddiatan a nagbaetan dagiti panid  "$1" ken "$2"',
'difference-multipage' => '(Paggiddiatan dagiti panid)',
'lineno' => 'Linia $1:',
'compareselectedversions' => 'Ipada dagiti pinili a binaliwan',
'showhideselectedversions' => 'Ipakita/ilemmeng dagiti napili a nabaliwan',
'editundo' => 'ibabawi',
'diff-empty' => '(Awan ti paggiddiatan)',
'diff-multi-sameuser' => '({{PLURAL:$1|Maysa nga agtengnga a panagbaliw|Dagiti $1 nga agtengnga a panagbaliw}} babaen ti isu met laeng nga agar-aramat a saan a naipakita)',
'diff-multi-otherusers' => '({{PLURAL:$1|Maysa nga agtengnga a panagbaliw|Dagiti $1 nga agtengnga a panagbaliw}} babaen {{PLURAL:$2|ti maysa a sabali nga agar-aramat|dagiti $2 nga agar-aramat}} a saan a naipakita)',
'diff-multi-manyusers' => '({{PLURAL:$1|Maysa nga agtengnga a panangbalbaliw|Dagiti $1 nga agtengnga a panangbalbaliw}} babaen ti ad-adu ngem $2 {{PLURAL:$2|nga agar-aramat|kadagiti agar-aramat}} ti saan a naipakita)',
'difference-missing-revision' => '{{PLURAL:$2|Maysa a panagbalbaliw|$2 kadagiti panagbalbaliw}} iti daytoy a paggiddiatan ($1) {{PLURAL:$2|ket ti|ket dagiti}} saan a naburikan.

Daytoy ket kadawyan a gapuanan babaen ti sumaganad a nabaak a panilpo tipaggiddiatan ti maysa a panid a naikkaten.
Dagiti salaysay ket mabalin a mabirukan idiay [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} listaan ti panagikkat].',

# Search results
'searchresults' => 'Dagiti nagbanagan ti panagbiruk',
'searchresults-title' => 'Dagiti nabirukan a nagbanagan para iti "$1"',
'toomanymatches' => 'Adu unay ti napasubli nga agpapada, pangngaasi a padasem ti sabali a panagsapul',
'titlematches' => 'Dagiti kapadpada a titulo ti panid',
'textmatches' => 'Dagiti agpapada a testo ti panid',
'notextmatches' => 'Awan dagiti kapadpada a testo ti panid',
'prevn' => 'napalabas {{PLURAL:$1|$1}}',
'nextn' => 'sumaruno {{PLURAL:$1|$1}}',
'prevn-title' => 'Napalabas a $1 {{PLURAL:$1|a nagbanagan|kadagiti nagbanagan}}',
'nextn-title' => 'Sumaruno a $1 {{PLURAL:$1|a nagbanagan|kadagiti nagbanagan}}',
'shown-title' => 'Ipakita ti $1 {{PLURAL:$1|a nagbanagan|kadagiti nagbanagan}}  ti tunggal maysa a panid',
'viewprevnext' => 'Kitaen ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-exists' => "'''Adda panid a nanaganan ti \"[[:\$1]]\" iti daytoy a wiki.'''",
'searchmenu-new' => '<strong>Partuaten ti panid ti "[[:$1]]" iti daytoy a wiki!</strong> {{PLURAL:$2|0=|Kitaen pay ti panid a nabirukan ti panagbirukmo.|Kitaen pay dagiti resulta a nabirukan ti panagbiruk.}}',
'searchprofile-articles' => 'Dagiti naglaon a panid',
'searchprofile-project' => 'Tulong ken Gandat a pampanid',
'searchprofile-images' => 'Sabsabali a midia',
'searchprofile-everything' => 'Amin amin',
'searchprofile-advanced' => 'Napasayaat',
'searchprofile-articles-tooltip' => 'Agbirukka idiay $1',
'searchprofile-project-tooltip' => 'Agbirukka idiay $1',
'searchprofile-images-tooltip' => 'Agbirukka para iti papeles',
'searchprofile-everything-tooltip' => 'Birukem amin a linaon (uray dagiti makipatangan a panid)',
'searchprofile-advanced-tooltip' => 'Agbirukka kadagiti naiduma a "nagan ti espasio"',
'search-result-size' => '$1 ({{PLURAL:$2|iti 1 a balikas|kadagiti $2 a balikas}})',
'search-result-category-size' => '{{PLURAL:$1|1 a kameng| dagiti $1 a kameng}} ({{PLURAL:$2|1 a subkategoria|dagiti $2  a sukategoria}}, {{PLURAL:$3|1 a papeles|dagiti $3 a papeles}})',
'search-result-score' => 'Kaitutopan: $1%',
'search-redirect' => '(ibaw-ing ti $1)',
'search-section' => '(paset $1)',
'search-file-match' => '(maipada ti linaon a papeles)',
'search-suggest' => 'Daytoy kadi: $1',
'search-interwiki-caption' => 'Dagiti kakabsat a gandat',
'search-interwiki-default' => 'Dagiti resulta manipud ti $1:',
'search-interwiki-more' => '(adu pay)',
'search-relatedarticle' => 'Mainaig',
'searcheverything-enable' => 'Agbirukka kadagiti amin a nagan ti espasio',
'searchrelated' => 'mainaig',
'searchall' => 'amin',
'showingresults' => "Maiparang dita baba agingga {{PLURAL:$1|iti '''1''' a nagbanagan|dagiti '''$1''' a nagbanagan}} a mangrugi iti #'''$2'''.",
'showingresultsinrange' => 'Mangipakpakita aginggana {{PLURAL:$1|iti <strong>1</strong> a resulta|dagiti <strong>$1</strong> a resulta}} iti sakop ti #<strong>$2</strong> aginggana ti #<strong>$3</strong>.',
'showingresultsnum' => "Maipakpakita dita baba  {{PLURAL:$3|iti '''1''' a nagbanagan|dagiti '''$3''' a nagbanagan}} a mangrugi iti #'''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Nagbanagan a '''$1''' iti '''$3'''|Dagiti Nagbanagan a '''$1 - $2''' iti '''$3'''}} para iti '''$4'''",
'search-nonefound' => 'Awan ti nagbanagan a kapadpada ti sinapul.',
'powersearch-legend' => 'Napasayat a panagbiruk',
'powersearch-ns' => 'Agbirukka kadagiti nagan ti espasio:',
'powersearch-redir' => 'Ilista dagiti baw-ing',
'powersearch-togglelabel' => 'Markaan:',
'powersearch-toggleall' => 'Amin',
'powersearch-togglenone' => 'Awan',
'search-external' => 'Akinruar a panagbiruk',
'searchdisabled' => 'Ti panagbiruk iti {{SITENAME}} ket nabaldado.
Mabalinmo ti agbiruk idiay Google tattan.
Laglagipem laeng a dagiti pagsurotan nagyan ti {{SITENAME}} ket baka baak.',
'search-error' => 'Adda maysa a biddut  napasamak bayat nga agbirbiruk:$1',

# Preferences page
'preferences' => 'Kakaykayatan',
'mypreferences' => 'Kakaykayatan',
'prefs-edits' => 'Bilang dagiti inurnos:',
'prefsnologintext2' => 'Pangngaasi a $1 tapno mabaliwan dagiti kakaykayatam.',
'prefs-skin' => 'Kudil',
'skin-preview' => 'Ipadas',
'datedefault' => 'Awan ti kakaykayatan',
'prefs-beta' => 'Dagiti beta a langa',
'prefs-datetime' => 'Petsa ken oras',
'prefs-labs' => 'Dagiti subokan a langa',
'prefs-user-pages' => 'Dagiti panid ti agar-aramat',
'prefs-personal' => 'Bariweswes ti agar-aramat',
'prefs-rc' => 'Kinaudi a binalbaliwan',
'prefs-watchlist' => 'Listaan ti bambantayan',
'prefs-watchlist-days' => 'Al-aldaw nga iparang idiay listaan ti bambantayan:',
'prefs-watchlist-days-max' => 'Kapaut nga $1 {{PLURAL:$1|nga aldaw|nga al-aldaw}}',
'prefs-watchlist-edits' => 'Kaadu a bilang ti ipakita kadagiti sinukatan iti napadakkel a bambantayan:',
'prefs-watchlist-edits-max' => 'Kaadu a bilang: 1000',
'prefs-watchlist-token' => 'Tandaan ti bambantayan:',
'prefs-misc' => 'Sabsabali',
'prefs-resetpass' => 'Sukatan ti kontrasenias',
'prefs-changeemail' => 'Sukatan ti esurat a pagtaengan',
'prefs-setemail' => 'Ikabil ti esurat a pagtaengan',
'prefs-email' => 'Pagpilian ti esurat',
'prefs-rendering' => 'Tabas',
'saveprefs' => 'Idulin',
'restoreprefs' => 'Isubli amin dagiti kasisigud a pannakaiyasentar (kadagiti amin a paset)',
'prefs-editing' => 'Ur-urnosen',
'rows' => 'Ar-aray:',
'columns' => 'Tuk-tukol:',
'searchresultshead' => 'Biruken',
'stub-threshold' => 'Pagpatinggaan para iti panagporma ti <a href="#" class="stub">pungol a silpo</a> (dagiti byte):',
'stub-threshold-disabled' => 'Nabaldado',
'recentchangesdays' => 'Al-aldaw nga ipakita dagiti kinaudi a binalbaliwan:',
'recentchangesdays-max' => 'Kapaut nga $1 {{PLURAL:$1|nga aldaw|nga al-aldaw}}',
'recentchangescount' => 'Dagiti bilang dagiti naurnos a kinasigud a maiparang:',
'prefs-help-recentchangescount' => 'Nairaman dagiti kinaudian a baliwan, dagiti pakasaritaan ti panid, ken dagiti listaan.',
'prefs-help-watchlist-token2' => 'Daytoy ti sekreto a tulbek iti pakan ti web iti listaan ti banbantayam.
Ti sinoman a makaammo daytoy ket mabalinda a basaen ti listaan ti banbantayam, isunga saanmo nga ipabingay.
[[Special:ResetTokens|Pindutem ditoy no kayatmo nga iyasentar manen]].',
'savedprefs' => 'Naidulinen dagiti kakaykayatam.',
'timezonelegend' => 'Sona ti oras:',
'localtime' => 'Lokal nga oras:',
'timezoneuseserverdefault' => 'Usaren ti wiki a kasisigud ($1)',
'timezoneuseoffset' => 'Sabsabali (inaganan ti tangdan)',
'servertime' => 'Oras ti server:',
'guesstimezone' => 'Agikabil manipud idiay pabasabasam',
'timezoneregion-africa' => 'Aprika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antartika',
'timezoneregion-arctic' => 'Artiko',
'timezoneregion-asia' => 'Asia',
'timezoneregion-atlantic' => 'Taaw Atlantiko',
'timezoneregion-australia' => 'Australia',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Taaw Indiano',
'timezoneregion-pacific' => 'Taaw Pasipiko',
'allowemail' => 'Pakabaelam ti esurat a naggapu kadagiti sabali nga agar-aramat',
'prefs-searchoptions' => 'Biruken',
'prefs-namespaces' => 'Dagiti nagan ti espasio',
'defaultns' => 'Wenno saan agbirukka kadagitoy a nagan ti espasio:',
'default' => 'kasisigud',
'prefs-files' => 'Dagiti papeles',
'prefs-custom-css' => 'Naiduma a CSS',
'prefs-custom-js' => 'Naiduma a JavaScript',
'prefs-common-css-js' => 'Bingay a CSS/JavaScript dagiti amin a kudil:',
'prefs-reset-intro' => 'Mabalinmo nga usaren daytoy a panid tapno maisublim dagita kakaykayatam iti kasisigud ti daytoy a wiki.
Ngem saanto a mabalinen nga ipasubli.',
'prefs-emailconfirm-label' => 'Pammasingked ti esurat:',
'youremail' => 'Esurat:',
'username' => '{{GENDER:$1|Nagan ti agar-aramat}}:',
'uid' => 'ID ti {{GENDER:$1|Agar-aramat}}:',
'prefs-memberingroups' => '{{GENDER:$2|Kameng}} ti {{PLURAL:$1|a grupo|a grupgrupo}}:',
'prefs-registration' => 'Oras a nagrehistro:',
'yourrealname' => 'Pudno a nagan:',
'yourlanguage' => 'Pagsasao:',
'yourvariant' => 'Linaon ti sabali a pagsasao:',
'prefs-help-variant' => 'Ti kinaykayatmo a kita ti pagsasao wenno sabali a panagsurat a maipakita kadagiti linaon ti panid daytoy a wiki.',
'yournick' => 'Baro a pirma:',
'prefs-help-signature' => 'Dagiti komentario kadagiti tungtungan a panid ket mapirmaan koma iti "<nowiki>~~~~</nowiki>" nga agpabalin ti pirmam ken ti petsa.',
'badsig' => 'Saan a pudno a kilaw a pirma.
Ikur-it dagiti HTML nga etiketa.',
'badsiglength' => 'Atiddog unay ti pirmam.
Masapul a nababbaba ngem $1 {{PLURAL:$1| a karakter|kadagiti karakter}} ti kaatiddogna.',
'yourgender' => 'Kasano kadi ti kayatmo a pannakaibaga?',
'gender-unknown' => 'Kaykayatko a saan nga ibaga',
'gender-male' => 'Isuna ket lalaki nga agur-urnos ti pampanid ti wiki',
'gender-female' => 'Isuna ket babai nga agur-urnos ti pampanid ti wiki',
'prefs-help-gender' => 'Ti panangiyasentar daytoy a kakaykayatan ket saan a nasken.
Ti sopwer ket agus-usar ti pategna daytoy ti panagtawagna kenka ken ti panangibaga ti dadduma ti maitunos gramatika a panangibaga kenka.
Daytoy a pakaammo ket makita ti publiko.',
'email' => 'Esurat',
'prefs-help-realname' => 'Saan a nasken ti pudno a nagan.
Ngem no kayatmo nga ited, maaramat daytoy a kas pammadayaw ken pangpatalged iti obram.',
'prefs-help-email' => 'Ti esurat a pagtaengan ket saan a masapul, ngem masapul no agsukatka ti kontrasenias, no baka malipatam ti kontraseniasmo.',
'prefs-help-email-others' => 'Mabalinmo nga agpili tapno dagiti sabsabali nga agar-aramat ket ma esuratandaka idiay panagsilpo ti panidmo wenno ti panid ti tungtungam.
Ti esurat a pagtaengam ket saan a maipakita kadagiti agar-aramat nga agkontak kenka.',
'prefs-help-email-required' => 'Masapul ti e-surat a pagtaengan.',
'prefs-info' => 'Kangrunaan a pakaammo',
'prefs-i18n' => 'Internasionalisasion',
'prefs-signature' => 'Pirma',
'prefs-dateformat' => 'Kita ti petsa',
'prefs-timeoffset' => 'Tangda ti oras',
'prefs-advancedediting' => 'Dagiti sapasap a pagpilian',
'prefs-editor' => 'Mannurat',
'prefs-preview' => 'Ipadas',
'prefs-advancedrc' => 'Dagiti napasayaat a pagpilian',
'prefs-advancedrendering' => 'Dagiti napasayaat a pagpilian',
'prefs-advancedsearchoptions' => 'Dagiti napasayaat a pagpilian',
'prefs-advancedwatchlist' => 'Dagiti napasayaat a pagpilian',
'prefs-displayrc' => 'Ipakita dagiti pagpilian',
'prefs-displaysearchoptions' => 'Ipakita dagiti pagpilian',
'prefs-displaywatchlist' => 'Ipakita dagiti pagpilian',
'prefs-tokenwatchlist' => 'Tandaan',
'prefs-diffs' => 'Sabali',
'prefs-help-prefershttps' => 'Daytoy a kakaykayatan ket mapakabaelanto iti sumaruno nga iseserrekmo.',
'prefs-tabs-navigation-hint' => 'Pakaammo: Mabalinmo nga usaren dagiti kanigid ken kanawan a tekla ti pana tapno madaliasat ti baetan dagiti etiketa iti listaan dagiti etiketa.',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'Ti esurat a pagtaengan ket kasla umiso',
'email-address-validity-invalid' => 'Ikabil ti umiso nga esurat a pagtaengan',

# User rights
'userrights' => 'Panagtaripato kadagiti karbengan ti agar-aramat',
'userrights-lookup-user' => 'Agtaripato kadagiti grupo ti agar-aramat',
'userrights-user-editname' => 'Mangiserrek iti nagan-agar-aramat:',
'editusergroup' => 'Urnosen dagiti grupo ti agar-aramat',
'editinguser' => "Suksukatan ti karbengan ti agar-aramat a ni '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Urnosen dagiti grupo ti agar-aramat',
'saveusergroups' => 'Idulin dagiti grupo ti agar-aramat',
'userrights-groupsmember' => 'Kameng iti:',
'userrights-groupsmember-auto' => 'Napudno a kameng iti:',
'userrights-groups-help' => 'Mabaliwam dagiti ayan a grupo ti agar-aramat:
* Ti nakur-it a kahon ket kayatna a saoen nga adda ti agar-aramat dita a grupo.
* Ti saan a nakur-it a kahon ket kayatna a saoen nga awan ti agar-aramat dita a grupo.
* A * ti kunana ket saanmo a maikkat ti grupo no nainayonmon, wenno pagbalittaden.',
'userrights-reason' => 'Rason:',
'userrights-no-interwiki' => 'Awan ti pammalubosmo nga agurnos ti karbengan ti agar-aramat kadagiti sabali a wiki.',
'userrights-nodatabase' => 'Awan ti database a $1 wenno saan a lokal.',
'userrights-nologin' => 'Masapul a [[Special:UserLogin|sumrekka]] nga adda pakabilangan nga administrador ti magted kadagiti karbengan ti agar-aramat.',
'userrights-notallowed' => 'Awan ti pammalubos nga agnayon wenno agikkat kadagiti karbengan ti agar-aramat.',
'userrights-changeable-col' => 'Dagiti grupo a mabalinmo a baliwan',
'userrights-unchangeable-col' => 'Dagiti grupo a dimo mabalin a baliwan',
'userrights-conflict' => 'Suppiat dagiti panagbaliw kadagiti karbengan ti agar-aramat! Pangngaasi nga irepasom ken pasingkedam dagiti sinuksukatam.',
'userrights-removed-self' => 'Nagballigika a nagikkat kadagiti karbengam. Isu a kastoyen ket saanmo a mabalin a pastrekan daytoy a panid.',

# Groups
'group' => 'Grupo:',
'group-user' => 'Dagiti agar-aramat',
'group-autoconfirmed' => 'Dagiti automatiko a napasingkedan nga agar-aramat',
'group-bot' => 'Dagiti bot',
'group-sysop' => 'Dagiti administrador',
'group-bureaucrat' => 'Dagiti burokrata',
'group-suppress' => 'Pakapansin',
'group-all' => '(amin)',

'group-user-member' => '{{GENDER:$1|agar-aramat}}',
'group-autoconfirmed-member' => '{{GENDER:$1|automatiko a napasingkedan nga agar-aramat}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-sysop-member' => '{{GENDER:$1|administrador}}',
'group-bureaucrat-member' => '{{GENDER:$1|burokrata}}',
'group-suppress-member' => '{{GENDER:$1|pagpansin}}',

'grouppage-user' => '{{ns:project}}:Dagiti agar-aramat',
'grouppage-autoconfirmed' => '{{ns:project}}:Dagiti automatiko a napasingkedan nga agar-aramat',
'grouppage-bot' => '{{ns:project}}:Dagiti bot',
'grouppage-sysop' => '{{ns:project}}:Dagiti administrador',
'grouppage-bureaucrat' => '{{ns:project}}:Dagiti burokrata',
'grouppage-suppress' => '{{ns:project}}:Pagpansin',

# Rights
'right-read' => 'Basaen dagiti panid',
'right-edit' => 'Agurnos kadagiti panid',
'right-createpage' => 'Agaramid kadagiti panid (saan a pagtutungtongan a pampanid)',
'right-createtalk' => 'Agaramid ti pagtungtungan a pampanid',
'right-createaccount' => 'Agaramid kadagiti baro a pakabilangan ti agar-aramat',
'right-minoredit' => 'Markaan a bassit dagiti inurnos',
'right-move' => 'Iyalis dagiti panid',
'right-move-subpages' => 'Iyalis dagiti panid a kakuyog dagiti subpanidda.',
'right-move-rootuserpages' => 'Iyalis dagiti ramut a panid ti agar-aramat',
'right-movefile' => 'Iyalis dagiti papeles',
'right-suppressredirect' => 'Saan nga agaramid ti baw-ing a naggapo iti taudan no iyalis dagiti panid',
'right-upload' => 'Agipan ti papeles',
'right-reupload' => 'Suratam manen dagiti adda a papeles',
'right-reupload-own' => 'Pasuratam manen dagiti addaan ti pinag-ipanmo a papeles',
'right-reupload-shared' => 'Paawanen dagiti papeles idiay pagbingayan ti nakaikabilan ti midia a lokal',
'right-upload_by_url' => 'Pag-ipan ti papeles a naggapu ti URL',
'right-purge' => 'Purgaen ti pagidulinan ti pagsaadan a ti panid nga awan ti panagpasingked',
'right-autoconfirmed' => 'Saanto a mabanagan babaen dagiti patingga ti gatad a naibatay ti IP',
'right-bot' => 'Matrato a kas automatiko a pamay-an',
'right-nominornewtalk' => 'Nga awanan ti bassit a panagurnos dagiti tungtungan a panid ti mangkalbit dagiti agpakabil ti baro a mensahe',
'right-apihighlimits' => 'Agusar ti nangatngato a patingga kadagiti panagsapul ti API.',
'right-writeapi' => 'Panagusar ti panagsurat nga API',
'right-delete' => 'Ikkaten dagiti panid',
'right-bigdelete' => 'Ikkaten dagiti panid nga adda dagiti dakkel a pakasaritaanna',
'right-deletelogentry' => 'Ikkaten ken isubli ti panagikkat dagiti naisangsangayan a naikabil ti listaan',
'right-deleterevision' => 'Ikkaten ken ipasubli dagiti nainagan a panagbaliw ti panid',
'right-deletedhistory' => 'Kitaen dagiti naikabil a pakasaritaan, nga awan kaniada kadagiti nairaman a testo',
'right-deletedtext' => 'Kitaen dagiti naikkat a testo ken dagiti nasukatan a nagbaetan dagiti binaliwan',
'right-browsearchive' => 'Biruken dagiti naikkat a panid',
'right-undelete' => 'Isubli ti naikkat a panid',
'right-suppressrevision' => 'Kitaen ken ipasubli dagiti binaliwan a nailemmeng manipud kadagiti administrador',
'right-suppressionlog' => 'Kitaen dagita pribado a listaan',
'right-block' => 'Serraan dagiti sabali nga agar-aramat manipud iti panag-urnos',
'right-blockemail' => 'Serraan dagiti agar-aramat nga agpatulod manipud ti esurat',
'right-hideuser' => 'Serraan ti maysa a nagan ti agar-aramat, ilemmeng manipud ti publiko',
'right-ipblock-exempt' => 'Labsan dagiti IP a serra, dagiti automatiko a serra ken dagiti nasakup a serra.',
'right-proxyunbannable' => 'Labsan dagiti automatiko a serra dagiti pannakbagi',
'right-unblockself' => 'Ikkaten ti kabukbukodan a pannaka-serra',
'right-protect' => 'Sukatan dagiti agpang ti salaknib ken urnosen dagiti nasalakniban ti sariap a panid',
'right-editprotected' => 'Urnosen dagiti panid a nasalakniban a kas "{{int:protect-level-sysop}}"',
'right-editsemiprotected' => 'Urnosen dagiti panid a nasalakniban a kas "{{int:protect-level-autoconfirmed}}"',
'right-editinterface' => 'Urnosen ti "interface" ti agar-aramat',
'right-editusercssjs' => 'Urnosen dagiti CSS ken JavaScript a papeles dagiti sabsabali nga agar-aramat',
'right-editusercss' => 'Urnosen dagiti CSS a papeles dagiti sabsabali nga agar-aramat',
'right-edituserjs' => 'Urnosen dagiti JavaScript a papeles dagiti sabsabali nga agar-aramat',
'right-editmyusercss' => 'Urnosem dagiti bukodmo a papeles ti CSS ti agar-aramat',
'right-editmyuserjs' => 'Urnosem dagiti bukodmo a papeles ti JavaScript ti agar-aramat',
'right-viewmywatchlist' => 'Kitaem ti bukodmo a listaan ti banbantayan',
'right-editmywatchlist' => 'Urnosem ti bukodmo a listaan ti agar-aramat. Laglagipen nga adda dagiti tignay a mangnayonto pay laeng ti pampanid urayno awan daytoy a karbengan.',
'right-viewmyprivateinfo' => 'Kitaem ti bukodmo a pribado a datos (kasla ti esurat a pagtaengan, pudno a nagan)',
'right-editmyprivateinfo' => 'Urnosem ti bukodmo a pribado a datos (kasla ti esurat a pagtaengan, pudno a nagan)',
'right-editmyoptions' => 'Urnosem dagiti bukodmo a kakaykayatan',
'right-rollback' => 'Pardasan nga ipasubli dagiti inurnos ti naudi nga agar-aramat a nagurnos ti kakasta a panid',
'right-markbotedits' => 'Markaan dagiti napasubli nga urnos a kas inurnos dagiti bot',
'right-noratelimit' => 'Saan a maaringan kadagiti patingga a pagpataray',
'right-import' => 'Agala ti pampanid manipud kadagiti sabsabali a wiki',
'right-importupload' => 'Agala kadagiti panid a naggapu iti papeles ti pinag-ipan',
'right-patrol' => 'Markaan a kas napatruliaan dagiti inurnos ti dadduma',
'right-autopatrol' => 'Dagiti inurnosmo ket mamarkaan nga automatiko a kas napatruliaan',
'right-patrolmarks' => 'Kitaen dagiti kinaudian a binaliwan a  napatruliaan a marka',
'right-unwatchedpages' => 'Kitaen ti listaan dagiti saan a nabambantayan a panid',
'right-mergehistory' => 'Pagtitiponen ti pakasaritaan dagiti panid',
'right-userrights' => 'Urnosen amin dagiti karbengan ti agar-aramat',
'right-userrights-interwiki' => 'Urnosen dagiti karbengan ti agar-aramat kadagiti agar-aramat iti sabsabali a wiki',
'right-siteadmin' => 'Ikandado ken lukatan ti database',
'right-override-export-depth' => 'Ipan dagiti panid ken iraman dagiti nasilpo a panid iti kauneg nga 5',
'right-sendemail' => 'Agpatulod ti esurat kadagiti sabali nga agar-aramat',
'right-passwordreset' => 'Kitaen dagiti esurat a panangiyasentar manen kadagiti kontrasenias',

# Special:Log/newusers
'newuserlogpage' => 'Listaan dagiti naaramid nga agar-aramat',
'newuserlogpagetext' => 'Daytoy ket listaan ti pannakaramid dagiti agar-aramat.',

# User rights log
'rightslog' => 'Listaan dagiti karbengan ti agar-aramat',
'rightslogtext' => 'Daytoy ket listaan dagiti sinukatan a karbengan ti agar-aramat.',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'basaen datoy a panid',
'action-edit' => 'agurnos iti datoy a panid',
'action-createpage' => 'agpartuat kadagiti panid',
'action-createtalk' => 'agaramid kadagiti pagtungtungan a panid',
'action-createaccount' => 'agpartuat ti pakabilangan daytoy nga agar-aramat',
'action-minoredit' => 'markaam a bassit nga urnos daytoy',
'action-move' => 'iyalis daytoy a panid',
'action-move-subpages' => 'iyalis daytoy a panid, ken dagiti subpanidna',
'action-move-rootuserpages' => 'iyalis dagiti ramut a panid ti agar-aramat',
'action-movefile' => 'iyalis daytoy a papeles',
'action-upload' => 'ikarga daytoy a papeles',
'action-reupload' => 'suratam manen dagiti adda a papeles',
'action-reupload-shared' => 'tuonan daytoy a papeles idiay pagbingayan a repositorio',
'action-upload_by_url' => 'ikarga daytoy a papeles manipud ti URL',
'action-writeapi' => 'usaren ti panagsurat ti API',
'action-delete' => 'ikkaten daytoy a panid',
'action-deleterevision' => 'ikkaten daytoy a binaliwan',
'action-deletedhistory' => 'kitaen dagiti naikkat a pakasaritaan daytoy a panid',
'action-browsearchive' => 'birukem dagiti naikkat a panid',
'action-undelete' => 'isublim ti panakaikkat daytoy a panid',
'action-suppressrevision' => 'kitaen ken ipasubli daytoy nailemmeng a panagbaliw',
'action-suppressionlog' => 'kitaen ti listaan a pribado',
'action-block' => 'serraan daytoy nga agar-aramat manipud ti panag-urnos',
'action-protect' => 'sukatan dagiti lessaad ti salaknib iti daytoy a panid',
'action-rollback' => 'pardasan nga ipasubli dagiti inurnos ti kinaudi nga agar-aramat a nagurnos ti naisangsangayan a panid',
'action-import' => 'agala ti pampanid manipud ti sabali a wiki',
'action-importupload' => 'agala ti pampanid manipud ti naipan a papeles',
'action-patrol' => 'markaan a kas napatruliaan dagiti inurnos ti dadduma',
'action-autopatrol' => 'markaam dagiti napatruliam nga inurnos',
'action-unwatchedpages' => 'kitaen ti listaan dagiti saan a nabambantayan a panid',
'action-mergehistory' => 'pagtitiponen ti pakasaritaan daytoy a panid',
'action-userrights' => 'urnosen amin dagiti karbengan ti agar-aramat',
'action-userrights-interwiki' => 'urnosen dagiti karbengan ti agar-aramat iti agar-aramat kadagiti sabsabali a wiki',
'action-siteadmin' => 'kandaduan wenno lukatan daytoy "database"',
'action-sendemail' => 'agipatulod kadagiti esurat',
'action-editmywatchlist' => 'urnosem ti bukodmo a listaan ti banbantayan',
'action-viewmywatchlist' => 'kitaem ti bukodmo a listaan ti banbantayan',
'action-viewmyprivateinfo' => 'kitaem ti bukodmo a pribado a pakaammo',
'action-editmyprivateinfo' => 'urnosem ti bukodmo a pribado a pakaammo',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|sinukatan|dagiti sinukatan}}',
'enhancedrc-since-last-visit' => '$1 {{PLURAL:$1|manipud idi naudi a panagsarungkar}}',
'enhancedrc-history' => 'pakasaritaan',
'recentchanges' => 'Kaudian a balbaliw',
'recentchanges-legend' => 'Pagpilian kadagiti kaudian a balbaliw',
'recentchanges-summary' => 'Siputen dagiti kinaudi a panagbalbaliw ti wiki iti daytoy a panid.',
'recentchanges-noresult' => 'Awan ti nasuksukatan iti las-ud ti naited a paset ti panawen a kapada dagitoy a kriteria.',
'recentchanges-feed-description' => 'Siputen dagiti kinaudi a panagbalbaliw ti wiki iti daytoy a pakan.',
'recentchanges-label-newpage' => 'Daytoy a panag-urnos ket nakapartuat ti baro a panid',
'recentchanges-label-minor' => 'Daytoy ket bassit a panag-urnos',
'recentchanges-label-bot' => 'Daytoy a panag-urnos ket inaramid babaen ti maysa a bot',
'recentchanges-label-unpatrolled' => 'Daytoy a panag-urnos ket saan pay a napatruliaan',
'recentchanges-label-plusminus' => 'Ti panagbaliw ti kadakkel ti panid babaen ti bilang dagiti byte',
'recentchanges-legend-heading' => "'''Leyenda:'''",
'recentchanges-legend-newpage' => '(kitaen pay ti [[Special:NewPages|listaan ti baro a pampanid]])',
'rcnotefrom' => 'Dita baba ket dagiti sinukatan manipud idi strong>$2</strong> (agingga iti <strong>$1</strong> a naipakita).',
'rclistfrom' => 'Ipakita dagiti kabarbaro a sinukatan a mangrugi manipud idi $1',
'rcshowhideminor' => '$1 dagiti bassit a panag-urnos',
'rcshowhideminor-show' => 'Ipakita',
'rcshowhideminor-hide' => 'Ilemmeng',
'rcshowhidebots' => '$1 dagiti bot',
'rcshowhidebots-show' => 'Ipakita',
'rcshowhidebots-hide' => 'Ilemmeng',
'rcshowhideliu' => '$1 dagiti nakarehistro nga agar-aramat',
'rcshowhideliu-show' => 'Ipakita',
'rcshowhideliu-hide' => 'Ilemmeng',
'rcshowhideanons' => '$1 dagiti di am-ammo nga agar-aramat',
'rcshowhideanons-show' => 'Ipakita',
'rcshowhideanons-hide' => 'Ilemmeng',
'rcshowhidepatr' => '$1 dagiti napatrulian a panag-urnos',
'rcshowhidepatr-show' => 'Ipakita',
'rcshowhidepatr-hide' => 'Ilemmeng',
'rcshowhidemine' => '$1 dagiti inurnosko',
'rcshowhidemine-show' => 'Ipakita',
'rcshowhidemine-hide' => 'Ilemmeng',
'rclinks' => 'Ipakita dagiti naudi a $1 a sinukatan iti kallabes a $2 nga al-aldaw<br />$3',
'diff' => 'sabali',
'hist' => 'saritaan',
'hide' => 'Ilemmeng',
'show' => 'Ipakita',
'minoreditletter' => 'm',
'newpageletter' => 'B',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[$1 nga agbuybuya {{PLURAL:$1|nga agar-aramat|kadagiti agar-aramat}}]',
'rc_categories' => 'Patingga dagiti kategoria (pagsisinaen ti "|")',
'rc_categories_any' => 'Uray ania',
'rc-change-size-new' => '$1 {{PLURAL:$1|a byte|kadagiti byte}} kalpasan ti panag-sukat',
'newsectionsummary' => '/* $1 */ baro a paset',
'rc-enhanced-expand' => 'Ipakita dagiti salaysay',
'rc-enhanced-hide' => 'Ilemmeng dagiti salaysay',
'rc-old-title' => 'kasisigud nga inaramid a kas ti "$1"',

# Recent changes linked
'recentchangeslinked' => 'Mainaig a sinuksukatan',
'recentchangeslinked-feed' => 'Mainaig a sinukatan',
'recentchangeslinked-toolbox' => 'Mainaig a sinuksukatan',
'recentchangeslinked-title' => 'Sinukatan a mainaig iti "$1"',
'recentchangeslinked-summary' => "Listaan daytoy dagiti kaudian a sinukatan kadagiti pampanid a nakasilpo manipud iti maysa a napili a panid (wenno kadagiti kameng ti maysa a nainaganan a kategoria).
Dagiti panid iti [[Special:Watchlist|listaan ti bambantayam]] ket '''napuskol'''.",
'recentchangeslinked-page' => 'Nagan ti panid:',
'recentchangeslinked-to' => 'Ipakita dagiti sinukatan a panid nga embes a naisilpo iti naited a panid',

# Upload
'upload' => 'Mangipan iti papeles',
'uploadbtn' => 'Mangipan iti papeles',
'reuploaddesc' => 'Ukasen ti pag-ipan ken agsubli idiay kabuklan ti pag-ipan',
'upload-tryagain' => 'Ited ti napabaro a panagipalawag ti papeles',
'uploadnologin' => 'Saan a nakastrek',
'uploadnologintext' => 'Nasken ti $1 tapno makaipanka iti papeles.',
'upload_directory_missing' => 'Ti direktorio ti pag-ipan ($1) ket napukaw ken saan a mabalin nga aramiden iti webserver.',
'upload_directory_read_only' => 'Ti pagipanan a direktoria ($1) ket saan a masuratan ti webserver.',
'uploaderror' => 'Biddut ti panang-ipan',
'upload-recreate-warning' => "'''Ballag: Ti papeles babaen ti dayta a nagan ket naikkat wenno naiyalis.'''

Ti listaan ti panagikkat ken panagiyalis para iti daytoy a panid ket adda ditoy tapno makitam:",
'uploadtext' => "Usaren ti kabuklan dita baba ti pinag-ipan ti papeles.
Ti panagkita wenno panagbiruk ti napalubos a pinag-ipan ti papeles mapan ka idiay [[Special:FileList|listaan dagiti napag-ipan a papeles]], dagiti pinag-ipan wenno pinag-ipan manen ket nakalista pay idiay [[Special:Log/upload|listaan ti pinag-ipan]], dagiti panagikkat ket idiay [[Special:Log/delete|listaan ti panagikkat]].

Ti panagikabil ti papeles iti panid, usaren ti panilpo a kas dagiti sumaganad a kabuklan:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>''' ti panag-usar ti dakkel a bersion ti papeles
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|alt text]]</nowiki></code>''' ti agusar ti 200 pixel a kaakaba  a panagparang iti kahon idiay kannigid nga adda 'sabali a testo' ti panagipalpalawag
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>''' ti dagus a panagsilpo idiay papeles nga awan ti panagparang ti papeles",
'upload-permitted' => 'Dagiti mapalubosan a kita ti papeles: $1.',
'upload-preferred' => 'Dagiti mabalbalin a kita ti papeles: $1.',
'upload-prohibited' => 'Dagiti maiparit a kita ti papeles: $1.',
'uploadlog' => 'listaan ti pagipanan',
'uploadlogpage' => 'Listaan ti pagipanan',
'uploadlogpagetext' => 'Adda dita baba ti listaan dagiti kaudian a naipan a papeles.
Kitaen dagiti [[Special:NewFiles|galleria ti baro a papeles]] para iti adu pay a pakabuklan apanagkita.',
'filename' => 'Nagan ti papeles',
'filedesc' => 'Pakabuklan',
'fileuploadsummary' => 'Pakabuklan:',
'filereuploadsummary' => 'Dagiti panagsukat ti papeles:',
'filestatus' => 'Kasasaad ti karbengan ti panagipablaak:',
'filesource' => 'Taudan:',
'uploadedfiles' => 'Naipan a papeles',
'ignorewarning' => 'Di ikaskaso ti ballaag ket idulin latta ti papeles',
'ignorewarnings' => 'Di ikaskaso dagiti ania man a ballaag',
'minlength1' => 'Dagiti nagan ti papeles ket nasken uray a maysa laeng a letra wenno nasursurok.',
'illegalfilename' => 'Ti nagan ti papeles "$1" ket adda nagyan na a kababalin a saan a mabalin kadagiti titulo ti panid.
Pangngaasi ta naganan manen ti papeles ken padasen manen nga ipapan.',
'filename-toolong' => 'Dagiti nagan ti papeles ket saan a mabalin nga at-atiddog ngem dagiti 240 a byte.',
'badfilename' => 'Nasukatan ti nagan ti papeles iti "$1".',
'filetype-mime-mismatch' => 'Ti pagpa-atiddog ti papeles ".$1" ket saan a kapada ti nakitaan a kita ti MIME iti papeles ($2).',
'filetype-badmime' => 'Dagiti papeles a kas MIME a kita "$1" ket saan a mapalubosan a maipan.',
'filetype-bad-ie-mime' => 'Saan a makapag-ipan ti papeles ngamin ket masarakan ti Internet Explorer a kas "$1", a saan a mabalin ken makapataud a dakes a kita ti papeles.',
'filetype-unwanted-type' => "'''\".\$1\"''' ti saan a mapalubusan a kita ti papeles.
Ti mapalubusan  {{PLURAL:\$3|a kita ti papeles ket|kadagiti kita ti papeles ket}} \$2.",
'filetype-banned-type' => 'Ti \'\'\'".$1"\'\'\' {{PLURAL:$4|ket saan a mapalubusan a kita ti papeles|ket dagiti saan a mapalubusan a kita ti papeles}}.
Ti mapalubusan {{PLURAL:$3|a kita ti papeles ket|kadagiti kita ti papeles ket}} $2.',
'filetype-missing' => 'Daytoy a papeles ket awan ti kita na a (kasla ".jpg").',
'empty-file' => 'Ti papeles nga intedmo ket awan ti nagyanna.',
'file-too-large' => 'Ti papeles nga intedmo ket dakkel unay.',
'filename-tooshort' => 'Ti nagan daytoy a papeles ket bassit unay.',
'filetype-banned' => 'Ti kita daytoy a papeles ket maiparit.',
'verification-error' => 'Daytoy a papeles ket saan a nakapasa ti pagsingkedan.',
'hookaborted' => 'Ti panagbabaro a pinadasmo ket napasardeng babaen ti pangpa-atiddog a kawit.',
'illegal-filename' => 'Ti nagan daytoy a papeles ket saan a maipalubos.',
'overwrite' => 'Saan a mabalin a suratan manen iti papeles nga adda ditan.',
'unknown-error' => 'Adda di amammo a biddut.',
'tmp-create-error' => 'Saan a makaaramid ti saan nga agnayon a papeles.',
'tmp-write-error' => 'Biddut ti pannakaisurat dagiti saan nga agnanayon a papeles.',
'large-file' => 'Ti maipatalked a papeles ket saan koma a dakdakkel ngem $1;
daytoy a papeles ket $2.',
'largefileserver' => 'Daytoy a papeles ket dakdakel ngem ti naaramid a mabalin para iti server.',
'emptyfile' => 'Ti papeles nga ipanmo ket kasla awan ti nagyan na.
Baka daytoy ket gapu ti kamali ti inkabil a nagan ti papeles.
Pangngaasi ta kitaem no kayatmo latta nga ipapan daytoy a papeles.',
'windows-nonascii-filename' => 'Daytoy a wiki ket saanna a suportaran dagiti nagan ti papeles nga addaan kadagiti espesial a karakter.',
'fileexists' => 'Ti papeles nga agnagan ti kastoy ket addan, pangngaasi a kitaem ti <strong>[[:$1]]</strong> no saanka a sigurado no kayatmo a sukatan.
[[$1|thumb]]',
'filepageexists' => 'Ti panangipalpalawag a panid para iti daytoy a papeles ket naaramiden idiay <strong>[[:$1]]</strong>, ngem awan ti agdama nga agnagan ti kastoy a papeles.
Ti pakabuklan nga inkabilmo ket saan nga agparang idiay deskripsion ti panid.
Tapno agparang ti pakabuklan idiay, masapul a manual a baliwam.
[[$1|thumb]]',
'fileexists-extension' => 'Adda papeles nga agnagan ti kastoy: [[$2|thumb]]
* Nagan ti naipapan a papeles: <strong>[[:$1]]</strong>
* Nagan ti adda a papeles: <strong>[[:$2]]</strong>
Pangngaasi nga agpili ti sabali a nagan.',
'fileexists-thumbnail-yes' => "Daytoy a papeles ket kasla ladawan a napabassit ''(thumbnail)''.
[[$1|thumb]]
Pangngaasi a kitaem ti papeles a <strong>[[:$1]]</strong>.
No ti nakitam a papeles ket isu ti ladawan iti dati a kadakkel saanen a nasken ti agipan ti maysa a napabassit a ladawan.",
'file-thumbnail-no' => "Ti nagan ti papeles ket mangrugi iti <strong>$1</strong>.
Kasla ladawan a napabassit ''(thumbnail)''.
No addaanka ti napno a resolusion ipanmo daytoy, no saan pangngaasi a sukatam ti nagan ti papeles.",
'fileexists-forbidden' => 'Daytoy a nagan ti papeles ket adda dita, ken saan a mabalin a masuratan manen.
No kayatmo pay latta nga ipan ti papeles, pangngaasi nga agsublika ken usarem ti baro a nagan.
[[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Daytoy a nagan ti papeles ket adda dita pagbingayan a nagikabilan ti papeles.
No kayatmo pay latta nga ipan ti papeles, pangngaasi nga agsublika ken usarem ti baro a nagan.
[[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Daytoy a papeles ket duplikado kadagiti sumaganad a {{PLURAL:$1|papeles|pappapeles}}:',
'file-deleted-duplicate' => 'Ti papeles a kapadpada ti papeles a ([[:$1]]) ket naikkat idin.
Kitaem koma ti pakasaritaan a panakaikkat ti papeles sakbay a mangirugika ti pinag-ipan.',
'file-deleted-duplicate-notitle' => 'Ti papales a kapada ti daytoy a papeles ket dati a naikkat, ken nalapdan ti titulo.
Nasken nga agdamagka ti addaan ti abilidad a mangkita ti nalapdan a datos ti papeles tapno marepaso ti kasasaad sakbay a mapan nga ikarga manen daytoy.',
'uploadwarning' => 'Ballaag iti pinag-ipan',
'uploadwarning-text' => 'Pangngaasi a baliwam ti deskripsion ti papeles ken padasem manen.',
'savefile' => 'Idulin ti papeles',
'uploadedimage' => 'naipanen ti "[[$1]]"',
'overwroteimage' => 'naipan ti baro a bersion ti "[[$1]]"',
'uploaddisabled' => 'Naiddep ti pinag-ipan.',
'copyuploaddisabled' => 'Naiddep ti pinag-ipan iti URL.',
'uploadfromurl-queued' => 'Dagiti pinag-ipanmo ket naikabil ti pinagurayan.',
'uploaddisabledtext' => 'Napawilan ti pinag-ipan iti papeles.',
'php-uploaddisabledtext' => 'Ti pinag-ipan ti papeles ket naiddep idiay PHP.
Panngaasi a kitaem ti pannakaikabil ti pinag-ipan ti papeles.',
'uploadscripted' => 'Daytoy a papeles ket adda nagyanna a HTML wenno panagsurat a kodigo a mabalin nga agpakamali ti panagbasa ti sapot a pagbasabasa.',
'uploadscriptednamespace' => 'Daytoy a papeles ti SVG ket aglaon ti maysa a saan a mabalin a nagan ti espasio ti "$1"',
'uploadinvalidxml' => 'Ti XML iti naikarga a papeles ket saan a maiwaswas.',
'uploadvirus' => 'Addaan ti birus daytoy a papeles! Salaysay: $1',
'uploadjava' => 'Daytoy a papeles ket ZIP a papeles nga adda nagyanna a Java .a kita ti papeles.
Saan a mabalin ti pinag-ipan ti Java a papeles, ngamin ket palabsanda dagiti seguridad a pangrestrikto.',
'upload-source' => 'Taudan ti papeles',
'sourcefilename' => 'Taudan a nagan ti papeles:',
'sourceurl' => 'Taudan ti URL:',
'destfilename' => 'Pangipanan ti nagan ti papeles:',
'upload-maxfilesize' => 'Kadakkel a rukod ti papeles: $1',
'upload-description' => 'Panagipalpalawag ti papeles',
'upload-options' => 'Pagpilian ti pinag-ipan',
'watchthisupload' => 'Bantayan daytoy a papeles',
'filewasdeleted' => 'Ti papeles a nanaganan ti kastoy ket naipapan idin ken napaikkaten.
Kitaem ti $1 sakbay ka nga agi pag-ipan manen.',
'filename-bad-prefix' => "Ti nagan ti papeles nga inpanmo ket mangrugi ti '''\"\$1\"''', ket saan a maipalpalawag a nagan a kayarigan a naipusgan nga automatiko kadagiti digital a pangretrato.
Pangngaasi ti agpili ti maikapalpalawag a nagan ti papelesmo.",
'upload-success-subj' => 'Balligi ti pinag-ipan',
'upload-success-msg' => 'Ti panag-ipan a naggapu idiay [$2] ket naballigi. Ket adda ditoy: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Parikut ti pinag-ipan',
'upload-failure-msg' => 'Addaan ti parikut ti pinag-ipanmo a naggapu idiay [$2]:

$1',
'upload-warning-subj' => 'Ballaag iti pinag-ipan',
'upload-warning-msg' => 'Addaan a parikut ti panag-ipan a naggapu idiay [$2]. Mabalinmo ti agsubli ti [[Special:Upload/stash/$1|nakabuklan ti pag-ipan]] tapno masimpaan ti parikut.',

'upload-proto-error' => 'Saan a husto a protokol',
'upload-proto-error-text' => 'Dagiti adayo a pinag-ipan ket makasapul kadagiti URL a mangrugi iti <code>http://</code> wenno <code>ftp://</code>.',
'upload-file-error' => 'Akin-uneg a biddut',
'upload-file-error-text' => 'Adda biddut a naggapu iti uneg idi padasen ti agaramid ti saan nga agnayon a papeles dita server.
Pangngaasi a kontaken ti [[Special:ListUsers/sysop|administrador]]',
'upload-misc-error' => 'Di ammo a biddut ti panag-ipan',
'upload-misc-error-text' => 'Adda saan nga ammo a biddut ti napasamak idi agdama a nag-ipan.
Pangngaasi a  kitaen ti URL ket umisu  ken maserrekan ken padasem manen.
No ti parikut ket agsubli latta, kontaken ti [[Special:ListUsers/sysop|administrador]].',
'upload-too-many-redirects' => 'Adu unay ti baw-ing daytoy nga URL',
'upload-unknown-size' => 'Di amammo ti kadakkelna',
'upload-http-error' => 'Naka-adda ti biddut ti HTTP: $1',
'upload-copy-upload-invalid-domain' => 'Ti kopia a panagipan ket saan a magun-od manipud iti daytoy a pagturayan.',

# File backend
'backend-fail-stream' => 'Saan a maiwaig ti papeles $1.',
'backend-fail-backup' => 'Saan a maidulin ti papeles $1.',
'backend-fail-notexists' => 'Ti papeles a $1 ket awanen.',
'backend-fail-hashes' => 'Saan a maala dagiti papeles a hash tapno maipada.',
'backend-fail-notsame' => 'Addaan ti saan a kapada ti papeles idiay $1.',
'backend-fail-invalidpath' => '$1 ket imbalido a pagnaan ti pagidulinan.',
'backend-fail-delete' => 'Saan a maikkat ti papeles $1.',
'backend-fail-describe' => 'Saam a mabaliwan ti metadata para iti papeles ti "$1".',
'backend-fail-alreadyexists' => 'Ti papeles $1 ket addan.',
'backend-fail-store' => 'Saan a maidulin ti papeles $1 idiay $2.',
'backend-fail-copy' => 'Saan a makopia ti papeles $1 idiay $2.',
'backend-fail-move' => 'Saan a maiyalis ti papeles $1 idiay $2.',
'backend-fail-opentemp' => 'Saan a malukatan ti temporario a papeles.',
'backend-fail-writetemp' => 'Saan a masuratan ti temporario a papeles.',
'backend-fail-closetemp' => 'Saan a marikpan ti temporario a papeles.',
'backend-fail-read' => 'Saan a mabasa ti papeles $1.',
'backend-fail-create' => 'Saan a masuratan ti papeles $1.',
'backend-fail-maxsize' => 'Saan a masuratan ti papeles $1 gaputa dakdakkel ngem {{PLURAL:$2|maysa a byte|dagiti $2 a byte}}.',
'backend-fail-readonly' => 'Ti pagidulinan a kalikudan ti "$1" ket agdama a mabasa laeng. Ti rason a naited idi ket: "$2"',
'backend-fail-synced' => 'Ti papeles "$1" ket bangking ti kasasaadna iti kinauneg a pagidulinan ti kalikudan',
'backend-fail-connect' => 'Saan a makaikapet idiay pagidulinan a kalikudan  "$1".',
'backend-fail-internal' => 'Adda di amammo a biddut ti napasamak idiay pagidulinan a kalikudan "$1".',
'backend-fail-contenttype' => 'Saan a maammoan ti kita ti linaon ti papeles nga idulin idiay "$1".',
'backend-fail-batchsize' => 'Nagited ti nagipenpenan ti bunggoy iti $1 a papeles {{PLURAL:$1|nga aramid|nga ar-aramid}}; ti patingga ket $2 {{PLURAL:$2|nga aramid|nga ar-aramid}}.',
'backend-fail-usable' => 'Saan a mabasa wenno masuratan ti papeles $1 gaputa awan ti makaanay a pammalubos wenno awan dagiti direktorio/pangikabilan.',

# File journal errors
'filejournal-fail-dbconnect' => 'Saan a maikapet idiay warnakan a database para iti likudan a pagipenpenan "$1".',
'filejournal-fail-dbquery' => 'Saan a makapabaro idiay warnakan a database para iti likudan a pagipenpenan "$1".',

# Lock manager
'lockmanager-notlocked' => 'Saan a malukatan ti "$1"; saan a nakandaduan.',
'lockmanager-fail-closelock' => 'Saan a marikepan ti nakandaduan a papeles para iti "$1".',
'lockmanager-fail-deletelock' => 'Saan a maikkat ti nakandaduan a papeles para iti "$1".',
'lockmanager-fail-acquirelock' => 'Saan a makaala ti kandado para iti "$1".',
'lockmanager-fail-openlock' => 'Saan a malukatan ti kandado ti papeles para iti "$1".',
'lockmanager-fail-releaselock' => 'Saan a maibbatan ti kandado para iti "$1".',
'lockmanager-fail-db-bucket' => 'Saan a makasilpo ti umanay a kandado kadagiti database idiay timba $1.',
'lockmanager-fail-db-release' => 'Saan a maibbatan dagiti kandado idiay database $1.',
'lockmanager-fail-svr-acquire' => 'Saan a makaala kadagiti kandado ti server $1.',
'lockmanager-fail-svr-release' => 'Saan a maibbatan dagiti kandado idiay server $1.',

# ZipDirectoryReader
'zip-file-open-error' => 'Adda biddut a nasarakan idi panaglukat ti papeles ti panagkita a ZIP.',
'zip-wrong-format' => 'Ti nainagan a papeles ket saan a ZIP a papeles.',
'zip-bad' => 'Daytoy a papeles ket nadadael wenno saan a mabasa a kas ZIP a papeles.
Saan a mabalin a nasayaat a makita para iti seguridad.',
'zip-unsupported' => 'Ti papeles ket ZIP a papeles nga agus-usar ti ZIP a langa a saan a sinuportaran babaen ti MediaWiki .
Saan a mabalin a nasayaat a makita para iti seguridad.',

# Special:UploadStash
'uploadstash' => 'Pinag-ipan ti stash',
'uploadstash-summary' => 'Daytoy a panid ket mangted ti panagserrek kadagiti papeles a napag-ipan (wenno nairugi a naipan) ngem saan pay a naipablaak iti wiki. Dagitoy a papeles ket saan a makita ti sabsabali ngem laeng ti agar-aramat a nag-ipan kaniada.',
'uploadstash-clear' => 'Dalusan dagiti na-stash a papeles',
'uploadstash-nofiles' => 'Awan ti na-stash a papelesmo.',
'uploadstash-badtoken' => 'Ti panag-tungpal dayta nga aramid ket napaay, ngamin ta dagiti talekmo ti panag-urnos ket nagpaso. Padasem manen.',
'uploadstash-errclear' => 'Ti panagdalus kadagiti papeles ket napaay.',
'uploadstash-refresh' => 'Pasadiwaam dagiti listaan ti papeles',
'invalid-chunk-offset' => 'Imbalido ti maysa a tangdan',

# img_auth script messages
'img-auth-accessdenied' => 'naiparit ti iseserrek',
'img-auth-nopathinfo' => 'Ti servermo ket mabalin nga agipasa iti daytoy a pakaammo.
Baka met laeng naibasta ti CGI ken saan na a tapayaen ti img_auth.
Kitaen ti https://www.mediawiki.org/wiki/Manual:Image_Authorization .',
'img-auth-notindir' => 'Ti kiniddaw a dalan ket saan a ti naaramid a direktorio ti pag-ipan',
'img-auth-badtitle' => 'Saan a makaaramid ti umisu a titulo a naggapu idiay "$1".',
'img-auth-nologinnWL' => 'Saanka a nakastrek ken ti "$1" ket awan idiay mabalin a listaan.',
'img-auth-nofile' => 'Ti papeles "$1" ket awan dita.',
'img-auth-isdir' => 'Agserserrekka ti direktorio ti papeles "$1".
Ti iseserrek ti papeles ti mabalin laeng.',
'img-auth-streaming' => 'Agwaig "$1".',
'img-auth-public' => 'Ti pamay-an ti img_auth.php ket mangiruar kadagiti papeles manipud ti pribado a wiki.
Daytoy a wiki naipabalin a kas publiko a wiki.
Para iti kangatuan a talinaay, nabaldado ti img_auth.php.',
'img-auth-noread' => 'Ti agar-aramat ket awan ti pammalubosna nga agbasa "$1".',
'img-auth-bad-query-string' => 'Ti URL ket addan ti imbalido a panagbiruk.',

# HTTP errors
'http-invalid-url' => 'Imbalido nga URL: $1',
'http-invalid-scheme' => 'Ti URL nga adda ti "$1" a pamuspusan ket saan a masuportaran.',
'http-request-error' => 'Ti panagkiddaw ti HTTP ket napaay gapu ti di ammo a biddut.',
'http-read-error' => 'Biddut ti panagbasa ti HTTP.',
'http-timed-out' => 'Nagsardeng ti panagkiddaw ti HTTP.',
'http-curl-error' => 'Biddut ti panagala ti URL: $1',
'http-bad-status' => 'Adda pakirut idi las-ud ti panagkiddaw ti HTTP: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Di madanon ti URL',
'upload-curl-error6-text' => 'Ti URL a naited ket saan a madanon.
Pangngaasi a kitaem manen no husto ti URL ken adda dayta a pagsaadan.',
'upload-curl-error28' => 'Nagsardeng ti panag-ipan',
'upload-curl-error28-text' => 'Ti pagsaadan ket nabayag unay a simmungbat.
Pangngaasi a kitaen no naipatakder ti pagsaadan, aguray no madamdama ket padasem manen.
Baka kayatmo a padasen no saan a makumikom nga oras.',

'license' => 'Lisensia:',
'license-header' => 'Lisensia',
'nolicense' => 'Awan ti napili',
'license-nopreview' => '(Saan a mabalin nga ipadas)',
'upload_source_url' => ' (maysa nga umisu, ken maserrekan ti publiko nga URL)',
'upload_source_file' => '(papeles iti kompiutermo)',

# Special:ListFiles
'listfiles-summary' => 'Daytoy nga espesial a panid ket agiparang kadagiti amin a naipan a papeles.',
'listfiles_search_for' => 'Agsapul para iti nagan ti midia:',
'imgfile' => 'papeles',
'listfiles' => 'Listaan ti papeles',
'listfiles_thumb' => 'Bassit a ladawan',
'listfiles_date' => 'Petsa',
'listfiles_name' => 'Nagan',
'listfiles_user' => 'Agar-aramat',
'listfiles_size' => 'Kadakkel',
'listfiles_description' => 'Panagipalpalawag',
'listfiles_count' => 'Dagiti bersion',
'listfiles-show-all' => 'Iraman dagiti daan a bersion dagiti ladawan',
'listfiles-latestversion' => 'Agdama a bersion',
'listfiles-latestversion-yes' => 'Wen',
'listfiles-latestversion-no' => 'Saan',

# File description page
'file-anchor-link' => 'Papeles',
'filehist' => 'Pakasaritaan ti papeles',
'filehist-help' => 'Ipindut ti maysa a petsa/oras tapno makitam ti papeles iti kasisigud a langana iti dayta nga oras.',
'filehist-deleteall' => 'ikkaten amin',
'filehist-deleteone' => 'ikkaten',
'filehist-revert' => 'isubli',
'filehist-current' => 'agdama',
'filehist-datetime' => 'Petsa/Oras',
'filehist-thumb' => 'Bassit a ladawan',
'filehist-thumbtext' => 'Bassit a ladawan para iti bersion manipud idi $1',
'filehist-nothumb' => 'Awan ti napabassit a ladawan',
'filehist-user' => 'Agar-aramat',
'filehist-dimensions' => 'Dagiti rukod',
'filehist-filesize' => 'Kadakkel ti papeles',
'filehist-comment' => 'Komentario',
'filehist-missing' => 'Napukaw ti papeles',
'imagelinks' => 'Panagusar ti papeles',
'linkstoimage' => 'Ti sumaganad {{PLURAL:$1|a silpo ti panid|kadagiti $1 a silpo ti panid}} ditoy a papeles:',
'linkstoimage-more' => 'Ad-adu ngem $1 {{PLURAL:$1|a silsilpo ti panid|silpo ti pampanid}} iti daytoy a papeles.
Ti sumaganad a listaan ket agipakita {{PLURAL:$1|ti umona a silpo ti panid|kadagiti umuna a $1 a silpo ti panid}} iti daytoy laeng a papeles.
Magun-od ti [[Special:WhatLinksHere/$2|kompleto a listaan]].',
'nolinkstoimage' => 'Awan ti pampanid a nakasilpo iti daytoy a papeles.',
'morelinkstoimage' => 'Kitaen ti [[Special:WhatLinksHere/$1|ad-adu pay a silpo]] iti daytoy a papeles.',
'linkstoimage-redirect' => '$1 (baw-ing ti papeles) $2',
'duplicatesoffile' => 'Ti sumaganad a {{PLURAL:$1|papeles ket duplikado|a $1 a pappapeles ket duplikado}} iti daytoy a papeles ([[Special:FileDuplicateSearch/$2|adu pay a salaysay]]):',
'sharedupload' => 'Daytoy a papeles ket naggapu idiay $1 ken mabalin a mausar kadagiti sabsabali a gandat.',
'sharedupload-desc-there' => 'Daytoy a papeles ket naggapu idiay $1 ken mabalin a mausar kadagiti sabsabali a gandat.
Pangngaasi a kitaem ti [$2 pagipalpalawag ti panid] para iti adu pay a pakaammo.',
'sharedupload-desc-here' => 'Daytoy a papeles ket naggapu idiay $1 ken mabalin a mausar kadagiti sabsabali a gandat.
Ti pagipalpalawagna idiay [$2 pagipalpalawag a panid ti papeles ] ket naipakita dita baba.',
'sharedupload-desc-edit' => 'Daytoy a papeles ket naggapu manipud idiay $1 ken mabalin a mausar babaen dagiti sabali a gandat.
Baka kayatmo nga urnosen ti bukodna a deskripsion idiay [$2 deskripsion ti papeles a panid].',
'sharedupload-desc-create' => 'Daytoy a papeles ket naggapu manipud idiay $1 ken mabalin a mausar babaen dagiti sabali a gandat.
Baka kayatmo nga urnosen ti bukodna a deskripsion idiay [$2 deskripsion ti papeles a panid].',
'filepage-nofile' => 'Awan ti agnagan ti kasta a papeles.',
'filepage-nofile-link' => 'Awan ti agnagan ti kastoy a papeles, ngem mabalinmo ti [$1 mangipan].',
'uploadnewversion-linktext' => 'Mangipan ti kabarbaro a bersion iti daytoy a papeles',
'shared-repo-from' => 'Naggapo iti $1',
'shared-repo' => 'iti pagbingbingayan a nagikabilan',
'upload-disallowed-here' => 'Saanmo a masuratan manen daytoy a ladawan.',

# File reversion
'filerevert' => 'Isubli ti $1',
'filerevert-legend' => 'Isubli ti papeles',
'filerevert-intro' => "Mangrugrugika nga agipasubli ti papeles '''[[Media:$1|$1]]''' iti [$4 bersion ti oras ket petsa nga $3, $2].",
'filerevert-comment' => 'Rason:',
'filerevert-defaultcomment' => 'Naisubli ti bersion manipud idi $2, $1',
'filerevert-submit' => 'Isubli',
'filerevert-success' => "Ti '''[[Media:$1|$1]]''' ket naipasubli idiay [$4 bersion ti oras ken petsa $3, $2].",
'filerevert-badversion' => 'Awan ti dati a lokal a bersion daytoy a papeles a naited ti dayta nga oras ken petsa.',

# File deletion
'filedelete' => 'Ikkaten ti $1',
'filedelete-legend' => 'Ikkaten ti papeles',
'filedelete-intro' => "Mangrugrugika nga agikkat ti '''[[Media:$1|$1]]''' ken mairaman amin a pakasaritaanna.",
'filedelete-intro-old' => "Ikikkatem ti bersion iti '''[[Media:$1|$1]]''' manipud idi [$4 $3, $2].",
'filedelete-comment' => 'Rason:',
'filedelete-submit' => 'Ikkaten',
'filedelete-success' => "Naikkaten ti '''$1'''.",
'filedelete-success-old' => "Ti bersion iti '''[[Media:$1|$1]]''' manipud idi $3, $2 ket naikkaten.",
'filedelete-nofile' => "awan ti '''$1''' .",
'filedelete-nofile-old' => "Awan ti naidulin a bersion ti '''$1''' nga addaan ti naited a kakitkitana.",
'filedelete-otherreason' => 'Sabali/maipatinayon a rason:',
'filedelete-reason-otherlist' => 'Sabali a rason',
'filedelete-reason-dropdown' => '*Kadawyan a rasrason ti pannakaikkat
** Panagsalungasing iti karbengan ti panagkopia
** Nadoble a papeles',
'filedelete-edit-reasonlist' => 'Urnosen dagiti rason ti panagikkat',
'filedelete-maintenance' => 'Ti panagikkat ken panagisubli kadagiti papaeles ket nabaldado iti las-ud ti panagtartaripato.',
'filedelete-maintenance-title' => 'Saan a maikkat daytoy a papeles',

# MIME search
'mimesearch' => 'Pagbiruk ti MIME',
'mimesearch-summary' => 'Daytoy a panid ket pakabaelanna ti panagsagat ti papeles iti MIME a kitada.
Ikabil: kita ti nagyan/subtipo, a kas ti <code>image/jpeg</code>.',
'mimetype' => 'Kita ti MIME:',
'download' => 'ikarga',

# Unwatched pages
'unwatchedpages' => 'Di mabambantayan a pampanid',

# List redirects
'listredirects' => 'Listaan dagiti baw-ing',

# Unused templates
'unusedtemplates' => 'Dagiti saan a nausar a plantilia',
'unusedtemplatestext' => 'Daytoy a panid ket ilistana dagiti panid idiay {{ns:template}} a nagan ti espasio a saan a nairaman iti sabali a panid.
Laglagipem ti agkita kadagiti sabsabali a silpo ti plantilia sakbay nga ikkatem ida.',
'unusedtemplateswlh' => 'dagiti sabali a silpo',

# Random page
'randompage' => 'Pugto a panid',
'randompage-nopages' => 'Awan ti pampanid iti sumaganad a {{PLURAL:$2|nagan ti espasio|nagnagan ti espasio}}: $1.',

# Random page in category
'randomincategory' => 'Pugto a panid iti kategoria',
'randomincategory-invalidcategory' => 'Ti "$1" ket saan nga umisu a nagan ti kategoria.',
'randomincategory-nopages' => 'Awan ti pampanid iti [[:Category:$1]].',
'randomincategory-selectcategory' => 'Agala ti pugto a panid manipud ti kategoria: $1 $2.',
'randomincategory-selectcategory-submit' => 'Inkan',

# Random redirect
'randomredirect' => 'Pugto a baw-ing',
'randomredirect-nopages' => 'Awan dagiti baw-ing iti daytoy a nagan ti espasio ti "$1".',

# Statistics
'statistics' => 'Estadistika',
'statistics-header-pages' => 'Estadistika ti panid',
'statistics-header-edits' => 'Estadistika ti inurnos',
'statistics-header-views' => 'Estadistika ti panagkita',
'statistics-header-users' => 'Estadistika ti agar-aramat',
'statistics-header-hooks' => 'Estadistika a sabsabali',
'statistics-articles' => 'Dagiti naglaon a panid',
'statistics-pages' => 'Pampanid',
'statistics-pages-desc' => 'Dagiti amin a panid ti wiki, a mairaman dagiti tungtungan a panid, dagiti baw-ing, ken dadduma pay',
'statistics-files' => 'Ti naipapan a papeles',
'statistics-edits' => 'Dagiti naurnos a panid manipud idi nairugi ti {{SITENAME}}',
'statistics-edits-average' => 'Pagtengngaan nga urnos ti tunggal maysa a panid',
'statistics-views-total' => 'Dagiti dagup ti panagkita',
'statistics-views-total-desc' => 'Saan a naikabil ti panagkita dagiti awan a panid ken dagiti espesial a panid',
'statistics-views-peredit' => 'Panagkita ti tunggal maysa nga urnos',
'statistics-users' => 'Dagiti nakarehistro nga [[Special:ListUsers|agar-aramat]]',
'statistics-users-active' => 'Dagiti nasiglat nga agar-aramat',
'statistics-users-active-desc' => 'Dagiti agar-aramat a nagtungpal ti aramid ti napalabas nga {{PLURAL:$1|aldaw|$1 nga al-aldaw}}',
'statistics-mostpopular' => 'Kaaduan a nabuya a pampanid',

'pageswithprop' => 'Pampanid nga adda maysa a tagikua ti panid',
'pageswithprop-legend' => 'Pampanid nga adda maysa a tagikua ti panid',
'pageswithprop-text' => 'Daytoy a panid ket ilistana ti pampanid nga agus-usar ti naisangayan a tagikua ti panid.',
'pageswithprop-prop' => 'Nagan ti tagikua:',
'pageswithprop-submit' => 'Inkan',
'pageswithprop-prophidden-long' => 'atiddog a testo ti tagikua a nailemmeng ($1)',
'pageswithprop-prophidden-binary' => 'binario a pateg ti tagikua a nailemmeng ($1)',

'doubleredirects' => 'Dagiti namindua a naibaw-ing',
'doubleredirectstext' => 'Daytoy a panid ket ilistana dagiti panid nga agbaw-ing kadagiti sabsabali a baw-ing a pampanid.
Iti tunggal maysa nga aray ket adda nagyanna kadagiti silpo iti umuna ken maikadua a baw-ing, ken iti puntaan iti maikadua a baw-ing, nga isu ti "pudno" a puntaan ti panid, nga ti umuna a baw-ing ket isu ti ipatudona.
<del>Nakurosan</del> dagita naikabil ket napadtuan.',
'double-redirect-fixed-move' => 'Ti [[$1]] ket naiyalisen.
Tattan ket naibaw-ing idiay [[$2]].',
'double-redirect-fixed-maintenance' => 'Simsimpaen dagiti namindua a naibaw-ing a naggapo idiay [[$1]] nga ipan idiay [[$2]].',
'double-redirect-fixer' => 'Panagsimpa ti baw-ing',

'brokenredirects' => 'Dagiti naputed a baw-ing',
'brokenredirectstext' => 'Dagitoy sumaganad a baw-ing ket nakasilpo kadagiti awan a panid:',
'brokenredirects-edit' => 'urnosen',
'brokenredirects-delete' => 'ikkaten',

'withoutinterwiki' => 'Dagiti panid nga awan ti silpona ti pagsasao',
'withoutinterwiki-summary' => 'Dagitoy a pampanid ket saan a nakasilpo ti sabali a bersion ti pagsasao.',
'withoutinterwiki-legend' => 'Pagpasaruno',
'withoutinterwiki-submit' => 'Ipakita',

'fewestrevisions' => 'Dagiti panid nga adda kadagiti kabassitan a panangbalbaliw',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|a byte|dagiti byte}}',
'ncategories' => '$1 {{PLURAL:$1|a kategoria|a katkategoria}}',
'ninterwikis' => '$1 {{PLURAL:$1|nga interwiki|dagiti interwiki}}',
'nlinks' => '$1 {{PLURAL:$1|a silpo|kadagiti silpo}}',
'nmembers' => '$1 {{PLURAL:$1|a kameng|kamkameng}}',
'nmemberschanged' => '$1 → $2 {{PLURAL:$2|kameng|kamkameng}}',
'nrevisions' => '$1 {{PLURAL:$1|a panagbalbaliw|kadagiti panagbalbaliw}}',
'nviews' => '$1 {{PLURAL:$1|a panangkita|kadagiti panangkita}}',
'nimagelinks' => 'Inusar idiay $1 {{PLURAL:$1|a panid|a pampanid}}',
'ntransclusions' => 'inusar idiay $1 {{PLURAL:$1|a panid|a pampanid}}',
'specialpage-empty' => 'Awan dagiti nagbanaganna daytoy a padamag.',
'lonelypages' => 'Dagiti naulila a panid',
'lonelypagestext' => 'Dagiti sumaganad a panid ket saan a nakasilpo idiay wenno naipakita kadagiti sabali a panid idiay {{SITENAME}}.',
'uncategorizedpages' => 'Dagiti saan a nakategoria a panid',
'uncategorizedcategories' => 'Dagiti saan a nakategoria a kategoria',
'uncategorizedimages' => 'Dagiti saan a nakategoria a papeles',
'uncategorizedtemplates' => 'Dagiti saan a nakategoria a plantilia',
'unusedcategories' => 'Dagiti saan a nausar a kategoria',
'unusedimages' => 'Dagiti saan a nausar a papeles',
'popularpages' => 'Dagiti nadayeg a panid',
'wantedcategories' => 'Dagiti makiddaw a kategoria',
'wantedpages' => 'Dagiti makiddaw a panid',
'wantedpages-badtitle' => 'Saan nga umisu a titulo idiay naikabil a pagbanagan: $1',
'wantedfiles' => 'Dagiti makiddaw a papeles',
'wantedfiletext-cat' => 'Dagiti sumaganad a papeles ket maus-usar ngem awanda met. Dagiti papeles a naggapu kadagiti ganganaet a repositorio ket mailista uray pay no addaan da. No adda dagiti kasla adda dagitoy ket <del>maikkat</del> to. A maipanayon pay, dagiti pampanid nga agisengngat kadagiti papeles nga awan ket nailista idiay [[:$1]].',
'wantedfiletext-nocat' => 'Dagiti sumaganad a papeles ket maus-usar ngem awanda met. Dagiti papeles a naggapu kadagiti ganganaet a repositorio ket mailista uray pay no addaan da. No adda dagiti kasla adda dagitoy ket <del>maikkat</del> to.',
'wantedtemplates' => 'Dagiti makiddaw a plantilia',
'mostlinked' => 'Dagiti panid a kaaduan iti nakasilpo',
'mostlinkedcategories' => 'Dagiti kategoria a kaaduan iti nakasilpo',
'mostlinkedtemplates' => 'Dagiti plantilia a kaaduan iti nakasilpo',
'mostcategories' => 'Dagiti panid a kaaduan kadagiti kategoria',
'mostimages' => 'Dagiti papeles a kaaduan iti nakasilpo',
'mostinterwikis' => 'Dagiti panid a kaaduan kadagiti interwiki',
'mostrevisions' => 'Dagiti artikulo a kaaduan ti pannakabalbaliwna',
'prefixindex' => 'Dagiti amin a panid nga addaan iti pasaruno',
'prefixindex-namespace' => 'Amin a panid nga addaan ti pasaruno ($1 a nagan ti espasio)',
'prefixindex-strip' => 'Ikkaten ti pasaruno iti listaan',
'shortpages' => 'Dagiti ababa a panid',
'longpages' => 'Dagiti atiddog a panid',
'deadendpages' => 'Dagiti ngudo a panid',
'deadendpagestext' => 'Dagitoy a pampanid ket saan a nakasilpo ti sabali a pampanid ditoy {{SITENAME}} .',
'protectedpages' => 'Dagiti nasalakniban a panid',
'protectedpages-indef' => 'Inggat ingana a salakniban laeng',
'protectedpages-summary' => 'Daytoy a panid ket ilistana dagiti adda a panid nga agdama a nasalakniban. Para iti listaan dagiti titulo a nasalakniban manipud ti pannakapartuat, kitaen ti [[{{#special:ProtectedTitles}}|{{int:protectedtitles}}]].',
'protectedpages-cascade' => 'Dagiti sariap a salaknib laeng',
'protectedpages-noredirect' => 'Ilemmeng dagiti baw-ing',
'protectedpagesempty' => 'Awan ti pampanid nga agdama a nasalakniban babaen kadagitoy a parametro.',
'protectedpages-timestamp' => 'Petsa ken oras',
'protectedpages-page' => 'Panid',
'protectedpages-expiry' => 'Agpaso',
'protectedpages-performer' => 'Salakniban ti agar-aramat',
'protectedpages-params' => 'Dagiti parametro ti panagsalaknib',
'protectedpages-reason' => 'Rason',
'protectedpages-unknown-timestamp' => 'Di ammo',
'protectedpages-unknown-performer' => 'Di ammo nga agar-aramat',
'protectedtitles' => 'Dagiti nasalakniban a titulo',
'protectedtitles-summary' => 'Daytoy a panid ket ilistana dagiti titulo nga agdama a nasalakniban manipud ti pannakapartuat. Para iti listaan dagiti adda a panid a nasalakniban, kitaen ti [[{{#special:ProtectedPages}}|{{int:protectedpages}}]].',
'protectedtitlesempty' => 'Awan dagiti titulo nga agdama a nasalakniban iti dagitoy a parametro.',
'listusers' => 'Listaan dagiti agar-aramat',
'listusers-editsonly' => 'Ipakita laeng dagiti agar-aramat nga adda inurnosda',
'listusers-creationsort' => 'Ilasin no ania a petsa ti pannakaaramid',
'listusers-desc' => 'Paglalasinen iti agpababa nga urnos',
'usereditcount' => '$1 {{PLURAL:$1|nga inurnos|kadagiti inurnos}}',
'usercreated' => '{{GENDER:$3|Inaramid}} idi $1 idi $2',
'newpages' => 'Baro a pampanid',
'newpages-username' => 'Nagan ti agar-aramat:',
'ancientpages' => 'Dagiti kadaanan a panid',
'move' => 'Iyalis',
'movethispage' => 'Iyalis daytoy a panid',
'unusedimagestext' => 'Adda dagiti sumaganad a papeles ngem saanda a naikabil iti ania man a panid.
Pangngaasi a laglagipen a dagiti sabali a sapot ti pagsaadan  ket makasilpoda ti papeles iti dagus a URL, ken isu pay a nailista da ditoy urayno saanda a naus-usar iti agdama.',
'unusedcategoriestext' => 'Adda dagiti sumaganad a kategoria a panid, ngem awan ti sabali a panid wenno kategoria ti agus-usar kaniada.',
'notargettitle' => 'Awan ti napuntaan',
'notargettext' => 'Saanmo a nainagan ti puntaan a panid wenno agar-aramat ti mangtungpal daytoy nga opisio.',
'nopagetitle' => 'Awan ti kasta a puntaan a panid',
'nopagetext' => 'Awan ti puntaan a panid a nainaganam.',
'pager-newer-n' => '{{PLURAL:$1|nabarbaro 1|dagiti nabarbaro $1}}',
'pager-older-n' => '{{PLURAL:$1|nadadaan 1|nadadaan $1}}',
'suppress' => 'Pakapansin',
'querypage-disabled' => 'Daytoy a nangruna a panid ket nabaldado gapu kadagiti rason a panagtungpal.',

# Book sources
'booksources' => 'Dagiti taudan ti libro',
'booksources-search-legend' => 'Agsapul para kadagiti taudan ti libro',
'booksources-go' => 'Inkan',
'booksources-text' => 'Dita baba ket listaan dagiti silpo ti sabsali a lugar nga aglaklako ti liblibro, ken baka adda pay adu a pakaammoda kadagiti liblibro a kitkitaem:',
'booksources-invalid-isbn' => 'Ti naited nga ISBN ket kasla saan nga umisu; kitaen dagiti biddut ti panagtulad kadagiti naggappuanna a taudan.',

# Special:Log
'specialloguserlabel' => 'Ti nagtungpal:',
'speciallogtitlelabel' => 'Puntaan (titulo wenno agar-aramat):',
'log' => 'Dagiti listaan',
'all-logs-page' => 'Amin a listaan a publiko',
'alllogstext' => 'Naipagtipon a pinagpakita kadagiti amin nga adda a listaan ti {{SITENAME}}.
Mapabassitmo ti pinagpakita no piliam ti kita ti listaan, ti nagan ti agar-aramat (sensitibo ti kadakkel ti letra), wenno ti naapektaran a panid (ket sensitibo met ti kadakkel ti letra).',
'logempty' => 'Awan ti agpada a bagay dita listaan.',
'log-title-wildcard' => 'Agsapul kadagiti titulo nga agrugi iti daytoy a testo',
'showhideselectedlogentries' => 'Ipakita/ilemmeng dagiti napili a naikabil ti listaan',

# Special:AllPages
'allpages' => 'Amin a pampanid',
'alphaindexline' => '$1 iti $2',
'nextpage' => 'sumaruno a panid ($1)',
'prevpage' => 'Napalabas a panid ($1)',
'allpagesfrom' => 'Ipakita dagiti panid a mangrugi iti:',
'allpagesto' => 'Ipakita dagiti panid nga agpatingga iti:',
'allarticles' => 'Amin a pampanid',
'allinnamespace' => 'Amin a pampanid ($1 a nagan ti espasio)',
'allpagessubmit' => 'Inkan',
'allpagesprefix' => 'Iparang dagiti pampanid nga adda pasarunona:',
'allpagesbadtitle' => 'Ti naited a titulo ti panid ket imbalido wenno adda idi ti sabali a pagsasao wenno interwiki a pasarunona.',
'allpages-bad-ns' => 'Awan ti {{SITENAME}} iti nagan ti espasio a "$1".',
'allpages-hide-redirects' => 'Ilemmeng dagiti baw-ing',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Kitkitaem ti naidulin a bersion iti daytoy a panid, nga addan ti kadaanan a $1.',
'cachedspecial-viewing-cached-ts' => 'Kitkitaem ti maysa a naidulin a bersion iti daytoy a panid, a baka daytoy ket saan a kompleto nga agpayso.',
'cachedspecial-refresh-now' => 'Kitaen ti kinaudian.',

# Special:Categories
'categories' => 'Katkategoria',
'categoriespagetext' => 'Ti sumaganad a {{PLURAL:$1|kategoria ket aglaon|katkategoria ket aglaon}} kadagiti panid wenno midia.
[[Special:UnusedCategories|Dagiti saan a nausar a kategoria]] ket saan a maiparang ditoy.
Kitaen met [[Special:WantedCategories|dagiti makiddaw a kategoria]].',
'categoriesfrom' => 'Ipakita dagiti kategoria a mangrugi iti:',
'special-categories-sort-count' => 'paglalasinen babaen ti bilang',
'special-categories-sort-abc' => 'paglalasinen nga alpabetiko',

# Special:DeletedContributions
'deletedcontributions' => 'Dagiti naikkat nga inararamid ti agar-aramat',
'deletedcontributions-title' => 'Dagiti naikkat nga inararamid ti agar-aramat',
'sp-deletedcontributions-contribs' => 'naar-aramid',

# Special:LinkSearch
'linksearch' => 'Dagiti panagbiruk ti ruar a silpo',
'linksearch-pat' => 'Tabas ti panagbiruk:',
'linksearch-ns' => 'Nagan ti espasio:',
'linksearch-ok' => 'Biruken',
'linksearch-text' => 'Ti naataap a tarheta a kas ti "*.wikipedia.org" ket mabalin nga usaren.
Masapul ti kangatuan a pagturayan, a kaspagarigan "*.org".<br />
{{PLURAL:$2|Ti protokol|Dagiti protokol}} a nasuportaran: <code>$1</code> (naipakasigud ti http:// no awan ti protokol a nainaganan).',
'linksearch-line' => 'Ti $1 ket nakasilpo idiay $2',
'linksearch-error' => 'Ti naatap a tarheta ket agparang laeng iti panagrugi ti nagan ti agsangaili.',

# Special:ListUsers
'listusersfrom' => 'Iparang dagiti agar-aramat a mangrugi iti:',
'listusers-submit' => 'Ipakita',
'listusers-noresult' => 'Awan ti nasarakan nga agar-aramat.',
'listusers-blocked' => '(naserraan)',

# Special:ActiveUsers
'activeusers' => 'Listaan dagiti nasiglat nga agar-aramat',
'activeusers-intro' => 'Daytoy ti listaan dagiti agar-aramat nga adda inararamidda kadagiti napalabas a $1 {{PLURAL:$1|nga aldaw|nga al-aldaw}}.',
'activeusers-count' => '$1 {{PLURAL:$1|a tignay|tigtignay}} idi kalpasan ti {{PLURAL:$3|nga aldaw|$3 nga al-aldaw}}',
'activeusers-from' => 'Iparang dagiti agar-aramat a mangrugi iti:',
'activeusers-hidebots' => 'Ilemmeng dagiti bot',
'activeusers-hidesysops' => 'Ilemmeng dagiti administrador',
'activeusers-noresult' => 'Awan ti nasarakan nga agar-aramat.',

# Special:ListGroupRights
'listgrouprights' => 'Dagiti karbengan ti grupo ti agar-aramat',
'listgrouprights-summary' => 'Dagiti sumaganad a listaan ti grupo ti agar-aramat a naipalawag iti daytoy a wiki, a nairaman dagiti karbengan ti panagserrekda.
Adda pay mabalin nga [[{{MediaWiki:Listgrouprights-helppage}}|adu a pakaammo]] a maipapan kadagiti bukbukod a karbengan.',
'listgrouprights-key' => 'Sarita: 
* <span class="listgrouprights-granted">Naited a karbengan</span> 
* <span class="listgrouprights-revoked">Naukas a karbengan</span>',
'listgrouprights-group' => 'Grupo',
'listgrouprights-rights' => 'Dagiti karbengan',
'listgrouprights-helppage' => 'Help:Dagiti karbengan ti grupo',
'listgrouprights-members' => '(listaan ti kamkameng)',
'listgrouprights-addgroup' => 'Agnayon ti {{PLURAL:$2|a grupo|kadagiti grupo}} : $1',
'listgrouprights-removegroup' => 'Aggikkat ti {{PLURAL:$2|a grupo|kadagiti grupo}}: $1',
'listgrouprights-addgroup-all' => 'Inayon amin dagiti grupo',
'listgrouprights-removegroup-all' => 'Ikkatem amin dagiti grupo',
'listgrouprights-addgroup-self' => 'Agnayon ti {{PLURAL:$2|a grupo|kadagiti grupo}} iti bukod a pakabilangan: $1',
'listgrouprights-removegroup-self' => 'Agikkat ti {{PLURAL:$2|a grupo|kadagiti grupo}} manipud ti bukod a pakabilangan: $1',
'listgrouprights-addgroup-self-all' => 'Inayon amin dagiti grupo iti bukod a pakabilangan',
'listgrouprights-removegroup-self-all' => 'Ikkatem amin dagiti grupo manipud ti bukod a pakabilangan',

# Email user
'mailnologin' => 'Awan ti pagipatulodan a pagtaengan',
'mailnologintext' => 'Masapul a [[Special:UserLogin|nakastrekka]] ken adda umisu nga esurat a pagtaengan idiay [[Special:Preferences|kaykayatmo]] ti agipatulod ti esurat kadagiti sabsabali nga agar-aramat.',
'emailuser' => 'Esuratan daytoy nga agar-aramat',
'emailuser-title-target' => 'Esuratam daytoy nga {{GENDER:$1|agar-aramat}}',
'emailuser-title-notarget' => 'Esuratan ti agar-aramat',
'emailpage' => 'Esuratan ti agar-aramat',
'emailpagetext' => 'Mabalinmo nga usaren ti kinabuklan dita baba nga agipatulod ti e-surat a mensahe ti daytoy nga {{GENDER:$1|agar-aramat}}.
Ti e-surat nga inkabilmo idiay  [[Special:Preferences|kakaykayatam]] ket agparang a kas "Naggapu" a pagtaengan ti e-surat, tapno ti nagipatulodam ket makasungbat kenka.',
'usermailererror' => 'Kita ti surat ket nangisubli ti biddut:',
'defemailsubject' => 'Esurat ti {{SITENAME}} a naggapo kenni "$1"',
'usermaildisabled' => 'Saanmo a mabalin ti agipatulod ti esurat',
'usermaildisabledtext' => 'Saanmo a mabalin ti agipatulod ti esurat kadagiti sabali nga agar-aramat ditoy a wiki',
'noemailtitle' => 'Awan ti esurat a pagtaengan',
'noemailtext' => 'Ti agar-aramat ket saan a nanginagan ti umisu nga esurat a pagtaengan.',
'nowikiemailtitle' => 'Saan a maipalubos ti esurat',
'nowikiemailtext' => 'Ti agar-aramat ket mabalinna ti agpili a saan nga umawat iti esurat kadagiti sabali nga agar-aramat.',
'emailnotarget' => 'Awan wenno saan nga umisu a nagan ti agar-aramat para iti nagipatulodan.',
'emailtarget' => 'Ikabil ti nagan ti agar-aramat a pangitulodam',
'emailusername' => 'Nagan ti agar-aramat:',
'emailusernamesubmit' => 'Ited',
'email-legend' => 'Ipatulod ti esurat ti sabali a {{SITENAME}} ti agar-aramat',
'emailfrom' => 'Naggapo kenni:',
'emailto' => 'Para kenni:',
'emailsubject' => 'Suheto:',
'emailmessage' => 'Mensahe:',
'emailsend' => 'Ipatulod',
'emailccme' => 'Esuratannak iti kopia ti mensahek.',
'emailccsubject' => 'Kopia ti mensahem kenni $1: $2',
'emailsent' => 'Naipatuloden ti esurat',
'emailsenttext' => 'Naipatuloden ti esurat a mensahem.',
'emailuserfooter' => 'Daytoy nga esurat ket impatulod ni $1 kenni $2 iti "Esurat" a panagararamid idiay {{SITENAME}}',

# User Messenger
'usermessage-summary' => 'Agibatbati ti mesahe iti sistema.',
'usermessage-editor' => 'Mensahero iti sistema',

# Watchlist
'watchlist' => 'Bambantayan',
'mywatchlist' => 'Bambantayan',
'watchlistfor2' => 'Para iti $1 $2',
'nowatchlist' => 'Awan ti banag iti listaan dagiti bambantayam.',
'watchlistanontext' => 'Pangngaasim ti $1 tapno makitam dagiti inurnosmo dita bambantayam.',
'watchnologin' => 'Saan a nakastrek',
'watchnologintext' => 'Masapul a [[Special:UserLogin|nakastrekka]] tapno mabaliwam dagiti bambantayam a panid.',
'addwatch' => 'Inayon iti bambantayan',
'addedwatchtext' => 'Ti panid iti "[[:$1]]" ket nainayonen idiay [[Special:Watchlist|listaan ti bambantayam]].
Dagiti masakbayan a panagsukat iti daytoy a panid ken dagiti mainaig a tungtunganna a panid ket mailistanto idiay.',
'removewatch' => 'Ikkaten dita bambantayan',
'removedwatchtext' => 'Daytoy a panid  "[[:$1]]" ket naikkat idiay [[Special:Watchlist|bambantayam]].',
'watch' => 'bantayan',
'watchthispage' => 'Bantayan daytoy a panid',
'unwatch' => 'Saanen a bantayan',
'unwatchthispage' => 'Isardeng a bantayan daytoy a panid',
'notanarticle' => 'Saan a naglaon a panid',
'notvisiblerev' => 'Ti panagbalbaliw ti sabali nga agar-aramat ket naikkaten',
'watchlist-details' => '{{PLURAL:$1|$1 panid|$1 dagiti panid}} a bambantayam, saan a mairaman dagiti panid ti tungtungan.',
'wlheader-enotif' => 'Napakabaelan ti panangipakaammo ti esurat.',
'wlheader-showupdated' => "Dagiti panid a nasukatanen manipud ti kinaudi a panagsarungkarmo ket naipakita iti '''napuskol'''",
'watchmethod-recent' => 'kitkitaen dagiti kinaudi nga inurnos kadagiti bambantayan a panid',
'watchmethod-list' => 'kitkitaen dagiti bambantayan a panid kadagiti kinaudi nga inurnos',
'watchlistcontains' => 'Ti listaan ti bambantayam ket aglaon ti $1 {{PLURAL:$1|a panid|a pampanid}}.',
'iteminvalidname' => "Parikut iti banag '$1', imbalido a nagan...",
'wlnote2' => 'Dita baba ket dagiti binalbaliwan {{PLURAL:$1|iti napalabas nga oras|kadagiti napalabas a <strong>$1</strong> nga oras}}, manipud idi $2, $3.',
'wlshowlast' => 'Ipakita dagiti naudi a $1 nga or-oras $2 nga al-aldaw $3',
'watchlist-options' => 'Dagiti pagpilian ti listaan a bambantayan',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Bambantayan...',
'unwatching' => 'Saanen a bantayan...',
'watcherrortext' => 'Adda nagkabiddut idi suksukatam ti kita ti bambantayam "$1".',

'enotif_mailer' => 'Panangipatulod ti pakdaar ti {{SITENAME}}',
'enotif_reset' => 'Markaan amin a pampanid a kas nasarungkaran',
'enotif_impersonal_salutation' => 'Agar-aramat ti {{SITENAME}}',
'enotif_subject_deleted' => 'Ti {{SITENAME}} a panid ti $1 ket inikkat idin babaen ni {{gender:$2|$2}}',
'enotif_subject_created' => 'Ti {{SITENAME}} a panid ti $1 ket napartuat idin babaen ni {{gender:$2|$2}}',
'enotif_subject_moved' => 'Ti {{SITENAME}} panid ti $1 ket naiyalis idin babaen ni {{gender:$2|$2}}',
'enotif_subject_restored' => 'Ti {{SITENAME}} a panid ti $1 ket naipasubli idin babaen ni {{gender:$2|$2}}',
'enotif_subject_changed' => 'Ti {{SITENAME}} a panid ti $1 ket nasukatan idin babaen ni {{gender:$2|$2}}',
'enotif_body_intro_deleted' => 'Ti {{SITENAME}} a panid ti $1 ket {{GENDER:$2|naikkaten}} idiay $PAGEEDITDATE babaen ni $2, kitaen ti $3.',
'enotif_body_intro_created' => 'Ti {{SITENAME}} a panid ti $1 ket napartuat idin idiay $PAGEEDITDATE babaen ni {{gender:$2|$2}}, kitaen ti $3 para iti agdama panagbaliw.',
'enotif_body_intro_moved' => 'Ti {{SITENAME}} a panid ti $1 ket naiyalis idin idiay $PAGEEDITDATE babaen ni {{gender:$2|$2}}, kitaen ti $3 para iti agdama panagbaliw.',
'enotif_body_intro_restored' => 'Ti {{SITENAME}} a panid ti $1 ket naipasubli idi idiay $PAGEEDITDATE babaen ni {{gender:$2|$2}}, kitaen ti $3 para iti agdama panagbaliw.',
'enotif_body_intro_changed' => 'Ti {{SITENAME}} a panid ti $1 ket nasukatan idin idiay $PAGEEDITDATE babaen ni {{gender:$2|$2}}, kitaen ti $3 para iti agdama panagbaliw.',
'enotif_lastvisited' => 'Kitaen ti $1 para iti am-amin a panagsukat sipud ti naudi nga isasarungkarmo.',
'enotif_lastdiff' => 'Kitaen ti $1 tapno mabuya daytoy a panagsukat.',
'enotif_anon_editor' => 'di am-ammo nga agar-aramat $1',
'enotif_body' => 'Nadungngo a $WATCHINGUSERNAME,

$PAGEINTRO $NEWPAGE

Pakabuklan ti mannurat: $PAGESUMMARY $PAGEMINOREDIT

Kontaken ti mannurat:
surat: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Awanton dagiti sabali a pakaammo iti kaso ti adu pay a panagtigtignay malaksid no sarungkaram datoy a panid bayat a nakastrekka. Mabalinmo pay nga iyasentar manen dagiti wagayway ti pakaammo para kadagiti amin a bambantayam a panid idiay listaan ti bambantayam.

Ti mannakigayyem a sistema ti panagpaammo ti {{SITENAME}} 

--
Ti panagsukat ti kasasaad ti esurat a pagpa-ammom, sarungkaram ti
{{canonicalurl:{{#special:Preferences}}}}

Ti panagsukat kadagiti kasasaad ti bambantayam, sarungkaram ti
{{canonicalurl:{{#special:EditWatchlist}}}}

Ti panag-ikkat ti panid kadagiti bambantayam, sarungkaram ti
$UNWATCHURL

Ti makunkunam ken no masapulmo pay ti tulong:
{{canonicalurl:{{MediaWiki:Helppage}}}}',
'created' => 'naaramid',
'changed' => 'nasukatan',

# Delete
'deletepage' => 'Ikkaten ti panid',
'confirm' => 'Pasingkedan',
'excontent' => "ti linaon idi ket: '$1'",
'excontentauthor' => 'ti linaonna idi ket: "$1" (ken ti laeng nakaaramid idi ket ni "[[Special:Contributions/$2|$2]]")',
'exbeforeblank' => 'ti linaon sakbay idi nablanko ket: "$1"',
'exblank' => 'blanko idi ti panid',
'delete-confirm' => 'Ikkaten ti "$1"',
'delete-legend' => 'Ikkaten',
'historywarning' => "'''Ballaag: ''' Ti panid a kayatmo nga ikkaten ket adda pakasaritaanna ti agarup a $1 {{PLURAL:$1|a binaliwan|kadagiti binaliwan}}:",
'confirmdeletetext' => 'Ikkatemon ti maysa a panid agraman am-amin a pakasaritaanna.
Pangngaasim ta pasingkedam a talaga a kayatmo nga aramiden daytoy, a maawatam ti bunga ti panangikkatmo, ken aramidem daytoy kas maiyannugot iti [[{{MediaWiki:Policy-url}}|annuroten]].',
'actioncomplete' => 'Nalpasen a naaramid',
'actionfailed' => 'Napaay ti aramid',
'deletedtext' => 'Naikkaten ti "$1".
Kitaen ti $2 para iti pannakrehistro dagiti naudi a naikkat.',
'dellogpage' => 'Listaan ti panagikkat',
'dellogpagetext' => 'Adda dita baba ti listaan dagiti kaudian a panangikkat.',
'deletionlog' => 'listaan ti panagikkat',
'reverted' => 'Naisubli iti immuna a panagbalbaliw',
'deletecomment' => 'Rason:',
'deleteotherreason' => 'Sabali/maipatinayon a rason:',
'deletereasonotherlist' => 'Sabali a rason',
'deletereason-dropdown' => '* Kadawyan a rasrason ti panagikkat
** Spam
** Bandalismo
** Panaglabsing iti karbengan ti panagipablaak
** Kiddaw ti mannurat
** Naputed a baw-ing',
'delete-edit-reasonlist' => 'Urnosen dagiti rason ti panagikkat',
'delete-toobig' => 'Daytoy a panid ket dakkel ti pakasaritaanna, sumurok a  $1 {{PLURAL:a panagbaliwan|dagiti panagbaliwan}}.
Ti panagikkat ti kastoy a pammpanid ket naparitan tapno mapawilan ti saan nga inkarkaro a pannakadadael ti {{SITENAME}}.',
'delete-warning-toobig' => 'Daytoy a panid ket adda ti dakkel unay a pakasaritaan ti panag-urnos, ti kaadu nga $1 {{PLURAL:$1|panagbaliw|dagiti panagbaliw}}.
Ti panagikkat ket madisturbo ti panagpataray ti database ti {{SITNAME}};
agal-aluadka a mangrugi.',
'deleting-backlinks-warning' => "'''Ballaag:''' [[Special:WhatLinksHere/{{FULLPAGENAME}}|Dagiti dadduma a panid]] ket naisilpo wenno nailak-am manipud ti panid a gangani nga ikkatem.",

# Rollback
'rollback' => 'Isubli dagiti panag-urnos',
'rollback_short' => 'Isubli',
'rollbacklink' => 'isubli',
'rollbacklinkcount' => 'agisubli ti $1 {{PLURAL:$1|nga inurnos|nga inururnos}}',
'rollbacklinkcount-morethan' => 'agisubli ti ad-adu ngem $1 {{PLURAL:$1|nga inurnos|nga inururnos}}',
'rollbackfailed' => 'Napaay ti panangisubli',
'cantrollback' => 'Saan a maisubli ti panagurnos;
ti naudi a nakaaramid ket iti laeng nagsurat daytoy a panid..',
'alreadyrolled' => 'Saan a maipasubli ti kinaudi a panagurnos iti [[:$1]] babaen ni [[User:$2|$2]] ([[User talk:$2|tungtungan]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]);
adda sabali a naurnos wenno nagipasubli ti panid.

Ti kinaudi a panagurnos ti daytoy a panid ket babaen ni [[User:$3|$3]] ([[User talk:$3|tungtungan]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Ti panagurnos a pakabuklan idi ket: \"''\$1''\".",
'revertpage' => 'Insubli ti panagurnos babaen ni [[Special:Contributions/$2|$2]] ([[User talk:$2|tungtungan]]), naisubli ti kinaudi a panagbaliw babaen ni [[User:$1|$1]]',
'revertpage-nouser' => 'Naisubli dagiti inurnos babaen ti nailemmeng nga agar-aramat iti kinaudi a panagbalbaliw babaen ni {{GENDER:$1|[[User:$1|$1]]}}',
'rollback-success' => 'Naibabawi dagiti panag-urnos babaen ni $1;
naisubli manen ti naudi a panagbaliw babaen ni $2.',

# Edit tokens
'sessionfailure-title' => 'Napaay ti gimong',
'sessionfailure' => 'Adda parikut ti gimong ti panagserrekmo;
daytoy nga aramid ket naibabawi a kas pagpawilan ti panaghijack ti gimong.
Agsubli ka ti naggapuam a panid, ikargam ti panid ken padasem manen.',

# Protect
'protectlogpage' => 'Listaan ti panagsalaknib',
'protectlogtext' => 'Dita baba ket adda listaan dagiti sinukatan a salaknib ti panid.
Kitaen ti [[Special:ProtectedPages|listaan kadagiti nasalakniban a panid]] ti listaan kadagiti agdama a panagpataray a panagsalaknib ti panid.',
'protectedarticle' => 'nasalakniban ti "[[$1]]"',
'modifiedarticleprotection' => 'nasukatan ti agpang ti salaknib para iti "[[$1]]"',
'unprotectedarticle' => 'naikkat ti salaknib ti "[[$1]]"',
'movedarticleprotection' => 'iyalis ti kasasaad ti salaknib manipud iti "[[$2]]" idiay "[[$1]]"',
'protect-title' => 'Sukatan ti agpang ti salaknib para iti "$1"',
'protect-title-notallowed' => 'Kitaen ti agpang ti salaknib ti "$1"',
'prot_1movedto2' => '[[$1]] naiyalis iti [[$2]]',
'protect-badnamespace-title' => 'Saan a mabalin a salakniban a nagan ti espasio',
'protect-badnamespace-text' => 'Dagiti panid ditoy a nagan ti espasio ket saan a mabalin a masalakniban.',
'protect-norestrictiontypes-text' => 'Daytoy a panid ket saan a mabalin a masalakniban gaputa awan dagiti maiparit a kita a magun-od.',
'protect-norestrictiontypes-title' => 'Di masalakniban a panid',
'protect-legend' => 'Pasingkedan ti panagsalaknib',
'protectcomment' => 'Rason:',
'protectexpiry' => 'Agpaso:',
'protect_expiry_invalid' => 'Imbalido ti oras a panagpaso.',
'protect_expiry_old' => 'Napalabasen ti oras ti panagpaso.',
'protect-unchain-permissions' => 'Lukatan dagiti pagpilian ti salaknib',
'protect-text' => "Mabalinmo a kitaen ken sukatan ti agpang ti salaknib para iti panid ti '''$1'''.",
'protect-locked-blocked' => "Saanmo a mabalin a sukatan dagiti kita ti salaknib no naserraanka.
Adda ditoy kadagiti agdama a kasasaad ti panid '''$1''':",
'protect-locked-dblock' => "Ti kita ti salaknib ket saan a masukatan gapu ti agdama a kandado ti database.
Adda ditoy kadagiti agdama a kasasaad ti panid '''$1''':",
'protect-locked-access' => "Awan ti pammalubos ti pakabilangam a mangsukat kadagiti lessaad ti salaknib ti panid.
Dagitoy dagiti agdama a kasasaad ti panid a '''$1''':",
'protect-cascadeon' => 'Daytoy a panid ket agdama a nasalakniban gapu ta nairaman kadagiti sumaganad a {{PLURAL:$1|panid, nga addaan|pampanid, nga addaan}} ti sipapakat a salaknib ti amin-amin.
Mabalinmo a sukatan ti lessaad ti salaknib daytoy a panid, ngem saanna a tignayen ti salaknib nga amin-amin.',
'protect-default' => 'Palubosan amin nga agar-aramat',
'protect-fallback' => 'Palubosan laeng dagiti agar-aramat nga adda iti "$1" a pammalubos',
'protect-level-autoconfirmed' => 'Palubosan laeng dagiti automatiko a napasingkedan nga agar-aramat',
'protect-level-sysop' => 'Palubosan laeng dagiti administrador',
'protect-summary-cascade' => 'agsariap',
'protect-expiring' => 'agpaso intono $1 (UTC)',
'protect-expiring-local' => 'agpaso $1',
'protect-expiry-indefinite' => "inggana't inggana",
'protect-cascade' => 'Salakniban dagiti panid a nairaman iti daytoy a panid (babaen ti sariap a salaknib)',
'protect-cantedit' => 'Saanmo a masuktan ti agpang ti salaknib iti daytoy a panid, gapu ta awan ti pammalubosmo nga agurnos iti daytoy.',
'protect-othertime' => 'Sabali nga oras:',
'protect-othertime-op' => 'sabali nga oras',
'protect-existing-expiry' => 'Ti adda a panagpaso ti oras: $3, $2',
'protect-otherreason' => 'Sabali/maipatinayon a rason:',
'protect-otherreason-op' => 'Sabali a rason',
'protect-dropdown' => '*Kadawyan a rasrason ti panagsalaknib
** Adu unay a bandalismo
** Adu unay a panagspam
** Saan a produktibo ti kasinnungat a panag-urnos
** Adu unay nga agbuybuya ti panid',
'protect-edit-reasonlist' => 'Urnosen dagiti rason ti salaknib',
'protect-expiry-options' => '1 nga oras:1 hour,1 nga aldaw:1 day,1 a lawas:1 week,2 a lawas:2 weeks,1 a bulan:1 month,3 a bulan:3 months,6 a bulan:6 months,1 a tawen:1 year,awan inggana:infinite',
'restriction-type' => 'Pammalubos:',
'restriction-level' => 'Agpang ti pannakaiparit:',
'minimum-size' => 'Kinababa a kadakkel:',
'maximum-size' => 'Kinangato a kadakkel:',
'pagesize' => '(dagiti byte)',

# Restrictions (nouns)
'restriction-edit' => 'Urnosen',
'restriction-move' => 'Iyalis',
'restriction-create' => 'Aramiden',
'restriction-upload' => 'Pang-ipan',

# Restriction levels
'restriction-level-sysop' => 'napno a nasalakniban',
'restriction-level-autoconfirmed' => 'nasalakniban bassit',
'restriction-level-all' => 'aniaman nga agpang',

# Undelete
'undelete' => 'Kitaen dagiti naikkat a panid',
'undeletepage' => 'Kitaen ken isubli dagiti naikkat a panid',
'undeletepagetitle' => "'''Ti sumaganad ket buklen dagiti naikkat a panagbaliw ni [[:$1|$1]]'''.",
'viewdeletedpage' => 'Kitaen dagiti naikkat a panid',
'undeletepagetext' => 'Ti sumaganad a {{PLURAL:$1|panid ket naikkaten ngem|$1 pampanid ket naikkaten ngem}} adda pay naarkibo ken mabalin pay a maipasubli .
Ti arkibo ket mabalin a sagpaminsan a madalusan.',
'undelete-fieldset-title' => 'Ipasubli dagiti binaliwan',
'undeleteextrahelp' => "Tapno maipasubli ti intero a pakasaritaan ti panid, ibatim a saan nga nakur-itan dagita kahon ken ipindut ti '''''{{int:undeletebtn}}'''''.
Ti agaramid ti napilian a panagisubli, ikur-it dagita napilim kadagiti kahon ti kayatmo nga ipasubli, ken ipindut ti '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '$1 {{PLURAL:$1|a binalbaliwan|kadagiti binalbaliwan}} ti nailebben',
'undeletehistory' => 'No ipasublim daytoy a panid, amin dagiti pinagbaliwan ket maipasubli idiay pakasaritaan.
Ket no adda baro a panid a kanagnagan na a naaramid ti napalabas a pinagikkat, dagiti naipasubli a pinagbaliwan ket agparang idiay napalabas a pakasaritaan.',
'undeleterevdel' => 'Ti panagikkat ket saan a maaramid no agbanag iti rabaw ti panid, wenno ti pinagbaliwan ti papeles ket maikkatan ti bassit.
Iti kastoy a kaso, masapul nga ikkatem ti kur-it wenno ikkatem ti lemmeng dagiti kabarbaro a naikkat a binalbaliwan.',
'undeletehistorynoadmin' => 'Daytoy a panid ket naikkaten.
Ti rason ti panagikkat ket naipakita ti pakabuklan dita baba, ken dagita dsalaysay ti agar-aramat a nagpabaliw ditoy a panid sakbay a naikkat.
Ti husto a testo ti nabaliwan a panagbaliw ket adda kadagiti administrador laeng.',
'undelete-revision' => 'Naikkat ti binaliwan a $1 (manipud idi $4, idi $5) babaen ni $3:',
'undeleterevision-missing' => 'Imbalido wenno napukaw a panagbaliw.
Addaanka ngata ti madi a silpo, wenno ti panagbaliw ket naipasubli wenno naikkat manipud idiay nailebbeng.',
'undelete-nodiff' => 'Awan ti nasarakan kadagiti dati a nabalbaliwan.',
'undeletebtn' => 'Isubli',
'undeletelink' => 'kitaen/isubli',
'undeleteviewlink' => 'kitaen',
'undeleteinvert' => 'Baliktaden ti napili',
'undeletecomment' => 'Rason:',
'undeletedrevisions' => '{{PLURAL:$1|1 a  binaliwan|dagiti $1 a binaliwan}} ti naisubli',
'undeletedrevisions-files' => '{{PLURAL:$1|1 a binaliwan|dagiti $1 a binaliwan}} ken {{PLURAL:$2|1 a papeles|dagiti $2 a papeles}} ti naisubli',
'undeletedfiles' => '{{PLURAL:$1|1 a papeles|dagiti $1 a papeles}} ti naisubli',
'cannotundelete' => 'Napaay ti panagikkat:
$1',
'undeletedpage' => "'''Naisublin ti $1'''

Binsiren ti [[Special:Log/delete|listaan ti naik-ikkat]] para iti listaan dagiti naudi a naik-ikkat ken naisubsubli.",
'undelete-header' => 'Kitaen [[Special:Log/delete|ti listaan ti pinagikkat]] kadagiti kinaudian a naikkat a panid.',
'undelete-search-title' => 'Biruken dagiti naikkat a panid',
'undelete-search-box' => 'Biruken dagiti naikkat a panid',
'undelete-search-prefix' => 'Ipakita dagiti panid a mangrugi iti:',
'undelete-search-submit' => 'Biruken',
'undelete-no-results' => 'Awan dagiti kapada ti panid a nasarakan idiay lebben ti panagikkat.',
'undelete-filename-mismatch' => 'Saan maisubli ti panagikkat ti pinagbaliwan ti papeles nga adda oras ket petsana a $1: Saan nga agpada ti nagan ti papeles.',
'undelete-bad-store-key' => 'Saan a maisubli ti pinagikkat ti pinagbaliwan ti papeles nga adda oras ket petsana a $1: Ti papeles ket napukaw sakbay a naikkat.',
'undelete-cleanup-error' => 'Biddut ti panagikkat ti saan a naus-usar a naidulin a papeles "$1".',
'undelete-missing-filearchive' => 'Saan a naipabalin ti panagisubli ti ID ti papeles a nailebben $1 ngamin ket awan idiay database.
Mabalin daytoy a naikkaten.',
'undelete-error' => 'Ballaag ti panagisubli ti panagikkat ti panid',
'undelete-error-short' => 'Biddut ti pannakaikkat ti papeles: $1',
'undelete-error-long' => 'Adda nasarakan a biddut idi panagisubli ti panagikkat ti papeles:

$1',
'undelete-show-file-confirm' => 'Sigurado a kayatmo ti mangkita ti naikkat a panagbaliw ti papeles "<nowiki>$1</nowiki>" manipud idi $2 idi $3?',
'undelete-show-file-submit' => 'Wen',

# Namespace form on various pages
'namespace' => 'Nagan ti espasio:',
'invert' => 'Baliktaden ti napili',
'tooltip-invert' => 'Ikur-it daytoy a kahon ti panagilemmeng kadagiti sinukatan a panid iti uneg ti napili a nagan ti espasio (ken ti nairaman a nagan ti espasio no naikur-it)',
'namespace_association' => 'Nairaman a nagan ti espasio',
'tooltip-namespace_association' => 'Ikur-it daytoy a kahon ti panagiraman ti kapatangan wenno suheto ti nagan ti espasio a nairaman kadagiti napili a nagan ti espasio.',
'blanknamespace' => '(Umuna)',

# Contributions
'contributions' => 'Naar-aramid ti {{GENDER:$1|Agar-aramat}}',
'contributions-title' => 'Inar-aramid ti agar-aramat para kenni $1',
'mycontris' => 'Naar-aramid',
'contribsub2' => 'Para kenni {{GENDER:$3|$1}} ($2)',
'nocontribs' => 'Awan ti nasarakan a nasukatan a kapada daytoy a kita.',
'uctop' => '(agdama)',
'month' => 'Manipud iti bulan ti (ken nasapsapa pay):',
'year' => 'Manipud iti tawen (ken nasapsapa pay):',

'sp-contributions-newbies' => 'Iparang dagiti inar-aramid dagiti kabarbaro a pakabilangan laeng',
'sp-contributions-newbies-sub' => 'Para kadagiti kabarbaro a pakabilangan',
'sp-contributions-newbies-title' => 'Dagiti inar-aramid ti agar-aramat iti baro a pakabilangan',
'sp-contributions-blocklog' => 'listaan ti naserraan',
'sp-contributions-deleted' => 'dagiti naikkat nga inar-aramid ti agar-aramat',
'sp-contributions-uploads' => 'dagiti pang-ipan',
'sp-contributions-logs' => 'listaan',
'sp-contributions-talk' => 'tungtungan',
'sp-contributions-userrights' => 'panagtaripato kadagiti karbengan ti agar-aramat',
'sp-contributions-blocked-notice' => 'Naserraan tatta daytoy nga agar-aramat.
Ti naudi a listaan ti pannakaserra ket adda dita baba tapno mausar a reperensia:',
'sp-contributions-blocked-notice-anon' => 'Daytoy nga IP a pagtaengan ket naserraan.
Ti naudi a listaan ti pannakaserra ket adda dita baba tapno mausar a reperensia:',
'sp-contributions-search' => 'Agsapul para kadagiti naar-aramid',
'sp-contributions-suppresslog' => 'pasardengen dagiti kontribusion ti agar-aramat',
'sp-contributions-username' => 'IP a pagtaengan wenno nagan ti agar-aramat:',
'sp-contributions-toponly' => 'Ipakita laeng dagiti inurnos a kinaudian a panagbaliw',
'sp-contributions-newonly' => 'Ipakita laeng dagiti inurnos a pannakapartuat ti pampanid',
'sp-contributions-submit' => 'Biruken',

# What links here
'whatlinkshere' => 'Dagiti nakasilpo ditoy',
'whatlinkshere-title' => 'Pampanid a nakasilpo iti "$1"',
'whatlinkshere-page' => 'Panid:',
'linkshere' => "Dagiti sumaganad a panid ket nakasilpo iti '''[[:$1]]''':",
'nolinkshere' => "Awan ti pampanid a nakasilpo iti '''[[:$1]]'''.",
'nolinkshere-ns' => "Awan ti pampanid a nakasilpo idiay '''[[:$1]]''' iti napili a nagan ti espasio.",
'isredirect' => 'baw-ing a panid',
'istemplate' => 'mailak-am',
'isimage' => 'silpo ti papeles',
'whatlinkshere-prev' => '{{PLURAL:$1|kallabes|kallabes a $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|sumaruno|sumaruno a $1}}',
'whatlinkshere-links' => '← silsilpo',
'whatlinkshere-hideredirs' => '$1 dagiti baw-ing',
'whatlinkshere-hidetrans' => '$1 dagiti mailaklak-am',
'whatlinkshere-hidelinks' => '$1 dagiti silpo',
'whatlinkshere-hideimages' => '$1 a silsilpo ti papeles',
'whatlinkshere-filters' => 'Dagiti sagat',

# Block/unblock
'autoblockid' => 'Auto a panagserra #$1',
'block' => 'Seraan ti agar-aramat',
'unblock' => 'Ikkaten ti serra ti agar-aramat',
'blockip' => 'Serraan ti agar-aramat',
'blockip-legend' => 'Serraan ti agar-aramat',
'blockiptext' => 'Usaren ti kinabuklan dita baba tapno maserraan ti panagsurat manipud iti naisangayan nga IP a pagtaengan wenno nagan ti agar-aramat.
Usaren laeng daytoy tapno pawilan ti bandalismo, ken panagtunos iti [[{{MediaWiki:Policy-url}}|annuroten]].
Ikkan ti naisangayan a rason dita baba (kas pagarigan, dakamaten ti maysa a panid a na-bandalismo) .',
'ipadressorusername' => 'IP a pagtaengan wenno nagan ti agar-aramat:',
'ipbexpiry' => 'Agpaso:',
'ipbreason' => 'Rason:',
'ipbreason-dropdown' => '*Dagiti kadawyan a rason ti panagserra
** Agikabil kadagiti  madi a pakaammo
** Agikkat kadagiti linaon ti pampanid
** Agikabil ti spam a silpo iti ruar
** Agikabil ti minamaag/saan a maawatan a pampanid
** Nabutbuteng a panagkukua /agriribok
** Agab-abuso kadagiti sabsabali a pakabilangan
** Saan a maawat a nagan ti agar-aramat',
'ipb-hardblock' => 'Iparit kadagiti nakastrek nga agar-aramat manipud ti panagurnos manipud ti naggapo ditoy nga IP a pagtaengan',
'ipbcreateaccount' => 'Pawilan ti panagpartuat iti pakabilangan',
'ipbemailban' => 'Pawilan ti agar-aramat nga agipatulod ti esurat',
'ipbenableautoblock' => 'Automatiko ti serra ti naudi nga IP a pagtaengan nga inusar daytoy nga agar-aramat, ken dagiti sumaruno nga IP a pagtaengan a padasenda nga agpabaliw',
'ipbsubmit' => 'Serraan daytoy nga agar-aramat',
'ipbother' => 'Sabali nga oras:',
'ipboptions' => '2 nga oras:2 hours,1 nga aldaw:1 day,3 nga aldaw:3 days,1 a lawas:1 week,2 a lawas:2 weeks,1 a bulan:1 month,3 a bulan:3 months,6 a bulan:6 months,1 a tawen:1 year,awan inggana:infinite',
'ipbhidename' => 'Ilemmeng ti nagan ti agar-aramat kadagiti listaan ken inurnos',
'ipbwatchuser' => 'Bantayan ti panid ti agar-ramat ken panid ti tungtungan daytoy nga agar-aramat',
'ipb-disableusertalk' => 'Pawilan daytoy nga agar-aramat nga agurnos kadagiti bukodda a tungtungan a panid no naserraan',
'ipb-change-block' => 'Serraan manen ti agar-aramat kadagitoy a disso',
'ipb-confirm' => 'Pasingkedan ti serra',
'badipaddress' => 'Imbalido nga IP a pagtaengan',
'blockipsuccesssub' => 'Balligi ti panangserra',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] ket naserraanen.<br />
Kitaen ti [[Special:BlockList|listaan ti lapden nga IP ]] tapno marepaso dagiti serra.',
'ipb-blockingself' => 'Mangrugrugika nga agserra kenka! Sigurado a kayatmo nga aramiden daytoy?',
'ipb-confirmhideuser' => 'Mangrugrugika ti mangserra ti agar-aramat nga adda ti napabalinna nga "ilemmeng ti agar-aramat". Iddeppenna ti nagan daytoy nga agar-aramat kadagiti amin a listaan ken dagiti naikabkabil ti listaan. Siguradoka a kasta ti kayatmo?',
'ipb-confirmaction' => 'No segurado a kayatmo nga aramiden daytoy, pangngaasi a kitaen ti "{{int:ipb-confirm}}" a pagikabilan dita baba.',
'ipb-edit-dropdown' => 'Urnosen dagiti rason ti panagserra',
'ipb-unblock-addr' => 'Lukatan ti serra ni $1',
'ipb-unblock' => 'Lukatan ti serra ti nagan ti agar-aramat wenno IP a pagtaengan',
'ipb-blocklist' => 'Kitaen dagiti adda a serra',
'ipb-blocklist-contribs' => 'Dagiti inaramid ni $1',
'unblockip' => 'Lukatan ti serra ti agar-aramat',
'unblockiptext' => 'Usaren ti porma dita baba ti panangisubli ti panagserrek nga agsurat ti napalabas a naserran nga IP a pagtaengan wenno nagan ti agar-aramat.',
'ipusubmit' => 'Ikkaten daytoy a serra',
'unblocked' => 'Naikkat ti pannakaserra ni [[User:$1|$1]].',
'unblocked-range' => 'Naikkat ti serra ti $1.',
'unblocked-id' => 'Naikkaten ti serra ti $1.',
'blocklist' => 'Dagiti naserraan nga agar-aramat',
'ipblocklist' => 'Dagiti naserraan nga agar-aramat',
'ipblocklist-legend' => 'Agbiruk ti naserraan nga agar-aramat',
'blocklist-userblocks' => 'Ilemmeng dagiti serra ti pakabilangan',
'blocklist-tempblocks' => 'Ilemmeng dagiti temporario a serra',
'blocklist-addressblocks' => 'Ilemmeng ti maysa a serra dagiti IP',
'blocklist-rangeblocks' => 'Ilemmeng dagiti nasakup a serra',
'blocklist-timestamp' => 'Petsa ken oras',
'blocklist-target' => 'Puntaan',
'blocklist-expiry' => 'Agpaso',
'blocklist-by' => 'Ti nagserra nga admin',
'blocklist-params' => 'Parametro ti serra',
'blocklist-reason' => 'Rason',
'ipblocklist-submit' => 'Biruken',
'ipblocklist-localblock' => 'Lokal a serra',
'ipblocklist-otherblocks' => 'Sabali {{PLURAL:$1|a serra|kadagiti serra}}',
'infiniteblock' => "inggana't inggana",
'expiringblock' => 'agpaso intono $1 ti oras nga $2',
'anononlyblock' => 'di am-ammo laeng',
'noautoblockblock' => 'nabaldado ti auto a serra',
'createaccountblock' => 'naserraan ti pannakapartuat ti pakabilangan',
'emailblock' => 'naserraan ti esurat',
'blocklist-nousertalk' => 'saan a mabalin nga agurnos ti bukod a tungtungan a panid',
'ipblocklist-empty' => 'Awan nagyan ti listaan ti serra.',
'ipblocklist-no-results' => 'Ti kiniddaw nga IP a pagtaengan wenno nagan ti agar-aramat ket saan a naserraan',
'blocklink' => 'serraan',
'unblocklink' => 'saanen a naserraan',
'change-blocklink' => 'baliwan  ti serra',
'contribslink' => 'aramid',
'emaillink' => 'ipatulod ti esurat',
'autoblocker' => 'Automatiko a naserraan ngamin ket ti IP a pagtaengam ket naudi nga inusar babaen ni "[[User:$1|$1]]".
Ti inted a rason para iti serra ni $1 ket: "$2"',
'blocklogpage' => 'Listaan ti naserraan',
'blocklog-showlog' => 'Daytoy nga agar-aramat ket dati a naserraan.
Ti listaan ti serra ket naikabil dita baba tapno mausar a reperensia:',
'blocklog-showsuppresslog' => 'Daytoy nga agar-aramat ket dati a naserraan ken nailemmeng.
Ti listaan ti napasardeng ket naikabil dita baba tapno mausar a reperensia:',
'blocklogentry' => 'naserraan ni [[$1]] nga adda ti oras a panagpaso iti $2 $3',
'reblock-logentry' => 'sinukatan ti pannakaserra para kenni [[$1]] nga adda ti oras a panagpaso iti  $2 $3',
'blocklogtext' => 'Daytoy ket listaan ti agar-aramat kadagiti panagserra ken panaglukat ti serra
Dagiti na-atomatiko a panakaserra ti IP a pagtaengan ket saan a nailista.
Kitaen ti [[Special:BlockList|Listaan ti lapden nga IP]] para iti listaan kadagiti agdama a naiparit a pagpataray ken dagiti serra.',
'unblocklogentry' => 'lukatan ti serra ni $1',
'block-log-flags-anononly' => 'dagiti di am-ammo nga agar-aramat laeng',
'block-log-flags-nocreate' => 'nabaldado ti panagpartuat ti pakabilangan',
'block-log-flags-noautoblock' => 'naiddep ti auto-serra',
'block-log-flags-noemail' => 'naserraan ti esurat',
'block-log-flags-nousertalk' => 'saan a mabalin nga agurnos ti bukodna a tungtungan a panid',
'block-log-flags-angry-autoblock' => 'napabalin ti napasayaat nga auto-serra',
'block-log-flags-hiddenname' => 'nailemmeng ti nagan ti agar-aramat',
'range_block_disabled' => 'Ti abilidad ti administrador nga agaramid ti nasakupan a serra ket naiddep.',
'ipb_expiry_invalid' => 'Imbalido ti oras a panagpaso.',
'ipb_expiry_temp' => 'Ti serra ti nagan ti agar-aramat ket masapul a permanente.',
'ipb_hide_invalid' => 'Saan a mapasardeng daytoy a pakabilangan; daytoy ket addaan ti ad-adu ngem {{PLURAL:$1|maysa nga inurnos|dagiti $1 nga inurnos}}.',
'ipb_already_blocked' => ' "$1" ket naserraan',
'ipb-needreblock' => '$1 ket naseraan. Kayatmo a sukatan ti serrana?',
'ipb-otherblocks-header' => 'Sabali {{PLURAL:$1|a naserraan|kadagiti naserraan}}',
'unblock-hideuser' => 'Saanmo a maisubli ti serra daytoy nga agar-aramat, nailemmengen ti nagan daytoy nga agar-aramat.',
'ipb_cant_unblock' => 'Biddut: ID $1 ti serra a nabirukan. Baka nalukatan ti serranan.',
'ipb_blocked_as_range' => 'Ballag: Ti IP a pagtaengan $1 ket saan a dagus a naserraan ken saan a malukatan ti serrana.
Ngem, nupay kasta, naserran a kas paset ti sakup ti $2, a mabalin a malukatan ti serrana.',
'ip_range_invalid' => 'Imbalido a sakup ti IP.',
'ip_range_toolarge' => 'Dagiti serra a nasakup a dakdakkel ngem /$1 ket saan a maipalubos.',
'proxyblocker' => 'Pannakbagi a panagserra',
'proxyblockreason' => 'Ti IP a pagtaengam ket naserraan ngamin ket daytoy ket nakalukat a panakbagi.
Pangngaasi ta kontakem ti agit-ited ti serbisio ti Internetmo wenno teknikal a suporta ti kaurnusam ken ibagam kaniada ti nakaro a parikut ti seguridad.',
'sorbsreason' => 'Ti IP a pagtaengam ket nakalista a kasla "nalukatan a pannakbagi" idiay DNSBL nga inusar ti {{SITNAME}}.',
'sorbs_create_account_reason' => 'Ti IP a pagtaengam ket nakalista a kasla "nalukatan a pannakbagi" idiay DNSBL nga inusar ti {{SITNAME}}.
Saanka a makaaramid ti pakabilangan',
'xffblockreason' => 'Ti maysa nga IP a pagtaengan nga adda iti X-Forwarded-For header, mabalin a kukuam wenno ti pannakbagi a server nga us-usarem, ket naserraan. Ti kasisigud a rason ti pannakaserra idi ket: $1',
'cant-see-hidden-user' => 'Ti agar-aramat a kayatmo a serraan ket naserraan ken nailemmeng.
Ket awan met ti karbengam nga agilemming ti agar-aramat, saan mo a makita wenno mabaliwan ti serra ti agar-aramat.',
'ipbblocked' => 'Saanmo a mabalin ti agserra wenno agikkat ti serra ti sabali nga agar-aramat, ngamin ket naserraan ka met.',
'ipbnounblockself' => 'Saanmo a mabalin a lukatan ti serram',

# Developer tools
'lockdb' => 'Balunetan ti database',
'unlockdb' => 'Lukatan ti database',
'lockdbtext' => 'Ti panagserra ti database ket makaikkat ti abilidad kadagiti amin nga agar-aramat ti agurnos kadagiti panid, ti panagsukat dagiti kaykayatda, ti panagurnos dagiti bambantayanda, ken dagiti sabsabali pay a masapul ti panagsukat idiay database.
Pangngaasi a pasingkedam daytoy no kayatmo nga aramiden, ken luktam dayta database no malpas kan nga agsimpa.',
'unlockdbtext' => 'Ti panaglukat ti database ket mangipasubli ti abilidad dagiti amin nga agar-aramat ti panagurnos kadagiti panid, ti panagsukat dagiti kaykayatda, ti panagurnos dagiti bambantayanda, ken dagiti amin a makasapul ti panagsukat idiay database.
Pangngaasi a pasingkedam a daytoy no kayatmo nga aramiden.',
'lockconfirm' => 'Wen, talaga a kayatko a balunetan ti database.',
'unlockconfirm' => 'Wen, talaga a kayatko a balunetan ti database.',
'lockbtn' => 'Balunetan ti database',
'unlockbtn' => 'Lukatan ti database',
'locknoconfirm' => 'Saanmo nga inkur-it ti kahon ti pagipasingkedan.',
'lockdbsuccesssub' => 'Balligi ti pannakabalunet ti database',
'unlockdbsuccesssub' => 'Naikkaten ti balunet ti database',
'lockdbsuccesstext' => 'Nabalunetan ti database.<br />
Laglagipem nga [[Special:UnlockDB|ikkaten ti balunetna]] kalpasan a malpaska nga agsimpa.',
'unlockdbsuccesstext' => 'Nalukatanen ti database.',
'lockfilenotwritable' => 'Ti serra a papeles ti database ket saan a masuratan.
Ti agserra ken aglukat iti database, masapul a masuratan ti web server.',
'databasenotlocked' => 'Saan a nabalunetan ti database.',
'lockedbyandtime' => '(ni {{GENDER:$1|$1}} idi $2 ti oras $3)',

# Move page
'move-page' => 'Iyalis ti $1',
'move-page-legend' => 'Iyalis ti panid',
'movepagetext' => "Ti panagusar ti kinabuklan dita baba, ket mangnagan manen ti panid, a mangiyalis amin ti pakasaritaanna idiay baro a nagan.
Ti daan a titulo ket agbalin a baw-ing a panid idiay baro a titulo.
Mapabarom a kas automatiko dagiti baw-ing a nakatudo dita kasisigud a titulo.
No agpilika a saanmo a kayat, pasaraduam a kitaen ti [[Special:DoubleRedirects|doble]] wenno [[Special:BrokenRedirects|nadadael a baw-ing]].
Renbbengmo ti mangpatalged nga amin a silpo ket agtultuloy a nakatudo iti nasken a papananda.

Laglagipen a ti panid ket '''saan''' a maiyalis no addan sigud a panid iti baro a titulo, malaksid no ti kinaudi ket maysa a baw-ing ken awan ti napalabas a pakasaritaan ti panag-urnos. 
Kayat a sawen daytoy a mabalinmo a suktan ti nagan ti maysa a panid manipud iti punto ti pannakasukat ti nagan no nagbiddutka, ken saan mo a mabalin a suratan manen ti addaan a panid.

'''Ballaag!'''
Mabalin a maysa daytoy a nakaro ken saan a bigla a panagbaliw iti maysa a nasikat a panid;
pangngaasim a pasingkedam a maawatam ti ibunga daytoy sakbay nga agtuloyka a mangbaliw.",
'movepagetext-noredirectfixer' => "Ti panagusar ti kinabuklan dita baba, ket panaganan ti panid, iyalis na amin ti pakasaritaan na idiay baro a nagan.
Ti daan a titulo ket agbalin baw-ing a panid idiay baro a titulo.
Pasaruduam a kitaen ti [[Special:DoubleRedirects|doble]] wenno [[Special:BrokenRedirects|nadadael a baw-ing]].
Rebbengem ti mangpatalged nga amin a panilpo ket agtultuloy a nakatudo iti nasken a papananda.

Laglagipen a ti panid ket '''saan''' a maiyalis no addan sigud a panid iti baro a titulo, malaksid no awan linaonna wenno no maysa a baw-ing a panid ken awan ti panagbaliw iti pakasaritaan ti napalabas. 
Kayat a sawen daytoy a mabalinmo a suktan ti nagan ti maysa a panid manipud iti punto ti pannakasukat ti nagan no nagbiddutka, ken saan mo a mabalin a suratan manen ti addaan a panid.

'''Ballaag!'''
Mabalin a maysa daytoy a nakaro ken saan a bigla a panagbaliw iti maysa a nasikat a panid;
pangngaasim ta pasingkedam a maawatam ti ibunga daytoy sakbay nga agtuloyka a mangbaliw.",
'movepagetalktext' => "Ti mainaig a tungtungan ti panid ket giddato a maiyalis a karamanna '''malaksid:'''
*No addan sigud nga awan linaonna a tungtungan ti panid babaen ti baro a nagan, wenno
*No ikkatem ti kur-itna ti kahon iti baba.

Kadagitoy a kaso, masapul nga iyalis wenno itiponmo a manual ti panid no kayatmo.",
'movearticle' => 'Iyalis ti panid:',
'moveuserpage-warning' => "'''Ballaag:''' Mangrugrugika nga agiyalis ti panid ti agar-aramat. Pangngaasi a laglapipen a ti panid ket isu laeng ti mabalin nga iyalis ken ti agar-aramat ket ''saan'' a managanan.",
'movenologintext' => 'Masapul a nakarehistroka nga agar-aramat ken [[Special:UserLogin|nakastrek]] tapno makaiyalis iti panid.',
'movenotallowed' => 'Awan ti pammalubosmo nga agiyalis kadagiti panid.',
'movenotallowedfile' => 'Awan ti pammalubosmo nga agiyalis kadagiti papeles.',
'cant-move-user-page' => 'Awan ti pammalubos mo nga agiyalis kadagiti panid ti agar-aramat (malaksid kadaiti subpanid).',
'cant-move-to-user-page' => 'Awan ti pammalubos mo nga agiyalis ti panid idiay panid ti agar-aramat (malaksid kadagiti subpanid ti agar-aramat).',
'newtitle' => 'Iti baro a titulo:',
'move-watch' => 'Bantayan daytoy a panid',
'movepagebtn' => 'Iyalis ti panid',
'pagemovedsub' => 'Balligi ti panangiyalis',
'movepage-moved' => 'Naiyalis ti \'\'\'"$1" iti "$2"\'\'\'',
'movepage-moved-redirect' => 'Napartuaten ti maysa a baw-ing.',
'movepage-moved-noredirect' => 'Ti panagaramid ti baw-ing ket napasardeng.',
'articleexists' => 'Adda panid nga adda ti kasta a nagan, wenno ti nagan a pinilim ket saan a mabalin.
Pangngaasim a mangpilika iti sabali a nagan.',
'cantmove-titleprotected' => 'Saanmo a maiyalis ti panid iti daytoy a lokasion, ngamin ket ti baro a titulo ket nasalakniban para iti panakapartuat.',
'movetalk' => 'Iyalis ti mainaig a panid ti tungtungan',
'move-subpages' => 'Iyalis dagiti subpanid (aginggana ti $1)',
'move-talk-subpages' => 'Iyalis dagiti subpanid ti tungtungan ti panid (aginggana ti $1)',
'movepage-page-exists' => 'Ti panid ti $1 ket addan ken saan a mautomatiko a suratan manen.',
'movepage-page-moved' => 'Naiyalis ti panid a $1 iti $2.',
'movepage-page-unmoved' => 'Saan a maiyalis ti panid $1 iti $2.',
'movepage-max-pages' => 'Ti kaadu iti $1 a {{PLURAL:$1|panid|pampanid}} ket naiyalis ken awanen ti automatiko a maiyalis.',
'movelogpage' => 'Listaan ti naiyalis',
'movelogpagetext' => 'Adda dita baba ti listaan dagiti naiyalis a panid.',
'movesubpage' => '{{PLURAL:$1|Subpanid|Dagiti subpanid}}',
'movesubpagetext' => 'Daytoy a panid ket adda $1 {{PLURAL:$1|a subpanid|kadagiti subpanid}} a naipakita dita baba.',
'movenosubpage' => 'Daytoy a panid ket awan ti subpanidna.',
'movereason' => 'Rason:',
'revertmove' => 'isubli',
'delete_and_move' => 'Ikkaten ken iyalis',
'delete_and_move_text' => '== Masapul nga ikkaten ==
Ti pangipanan ti panid ket "[[:$1]]" addan.
Kayatmo nga ikkaten  tapno makaiyaliska?',
'delete_and_move_confirm' => 'Wen, ikkaten ti panid',
'delete_and_move_reason' => 'Naikkat tapno mawayaan ti pannaka-iyalis idiay "[[$1]]"',
'selfmove' => 'Ti titulo ti taudan ken ti pangipanan ket agpadpada;
saanmo a maiyalis ti panid ti isu met laeng a panid.',
'immobile-source-namespace' => 'Saan a maiyalis dagiti panid idiay nagan ti espasio ti  "$1"',
'immobile-target-namespace' => 'Saan a maiyalis dagiti panid idiay nagan ti espasio ti "$1"',
'immobile-target-namespace-iw' => 'Ti silpo nga interwiki ket saan nga umiso a puntaan para iti panagiyalis ti panid.',
'immobile-source-page' => 'Saan a mabalin nga iyalis daytoy a panid.',
'immobile-target-page' => 'Saan a maiyalis iti dayata a pangipanan a titulo.',
'bad-target-model' => 'Ti kinaykayat a pangipanan ket agus-usar ti sabali a modelo ti linaon. Saan a maipabalin manipud ti $1 iti $2.',
'imagenocrossnamespace' => 'Saan a maiyalis ti papeles idiay saan a papeles a nagan ti espasio',
'nonfile-cannot-move-to-file' => 'Saan a maiyalis ti saan a papeles idiay papeles a nagan ti espasio',
'imagetypemismatch' => 'Ti baro a pagpaatiddog ti papeles ket saan nga agpada ti kitana',
'imageinvalidfilename' => 'Ti puntaan a nagan ti papeles ket imbalido',
'fix-double-redirects' => 'Agpabaro ti amin a baw-ing a mangipatudo ti kasisigud a titulo',
'move-leave-redirect' => 'Mangibati ti baw-ing',
'protectedpagemovewarning' => "'''Ballaag:''' Daytoy a panid ket nasalakniban tapno dagiti laeng agar-aramat nga addaan ti gundaway nga administrador ti makaiyalis.
Ti kinaudi a naikabil ti listaan ket adda dita baba tapno mausar a reperensia:",
'semiprotectedpagemovewarning' => "'''Pakaammo:''' Nasalakniban daytoy a panid tapno dagiti laeng nakarehistro nga agar-aramat ti makaiyalis daytoy.
Ti kinaudi a naikabil ti listaan ket adda iti baba tapno mausar a reperensia:",
'move-over-sharedrepo' => '== Addaan ti papeles ==
[[:$1]] addaan idiay pagbingayan a repositorio. Ti panagiyalis ti papeles iti titulo nga itoy ket paawanenna ti pagbingayan a papeles.',
'file-exists-sharedrepo' => 'Ti napilim a nagan ti papeles ket naususaren idiay pagbingayan a pagikabilan.
Pangngaasi nga agpilika ti sabali a nagan.',

# Export
'export' => 'Agipan kadagiti panid',
'exporttext' => 'Maipanmo ti testo ken pakasaritaan ti inurnos iti maysa a panid wenno pampanid a nabalkut ti XML.
Daytoy ket mabalin a maikabil iti sabali a wiki nga agususar ti MediaWiki nga usaren ti [[Special:Import|pinagala ti panid]].

Ti pinagipan ti panid, ikabil ti titulo dita kahon ti testo dita baba, maysa a titulo iti maysa a linia, ken agpili ka no ti kayatmo ket ti agdama a pinagbaliw ken amin nga daan a panagbalbaliw, nga addaan ti linia ti pakasaritaan ti pampanid, wenno ti agdama a panagbaliw nga addaan ti pakaammo a maipapan ti kinaudi a panagurnos.

No iti kinaudi a kaso mabalinmo nga usaren ti silpo, a kas pagarigan [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] para iti panid "[[{{MediaWiki:Mainpage}}]]".',
'exportall' => 'Ipan amin a pampanid',
'exportcuronly' => 'Iraman laeng ti kinaudi a panagbaliw, saan a ti napno a pakasaritaan',
'exportnohistory' => "----
'''Palagip:''' Ti pagipapan dagiti napno a pakasaritaan dagiti panid iti daytoy a kinabuklan ket nabaldado gapu dagiti pannakalaing ti panagandar a rason.",
'exportlistauthors' => 'Iraman ti amin a listaan kadagiti nagaramid iti tunggal a maysa a panid',
'export-submit' => 'Agipan',
'export-addcattext' => 'Agnayon kadagiti panid a naggapu idiay kategoria:',
'export-addcat' => 'Inayon',
'export-addnstext' => 'Nayunan dagiti panid a naggapu idiay nagan ti espasio:',
'export-addns' => 'Inayon',
'export-download' => 'Idulin a kas papeles',
'export-templates' => 'Mangiraman kadagiti plantilia',
'export-pagelinks' => 'Mangiraman kadagiti nakasilpo a panid iti kauneg iti:',

# Namespace 8 related
'allmessages' => 'Dagiti mensahe ti sistema',
'allmessagesname' => 'Nagan',
'allmessagesdefault' => 'Kasisigud a testo ti mensahe',
'allmessagescurrent' => 'Agdama a testo ti mensahe',
'allmessagestext' => 'Daytoy ti listaan dagiti mensahe ti sistema a magun-od idiay MediaWiki a nagan ti espasio.
Pangngaasi a bisitaen ti [https://www.mediawiki.org/wiki/Localisation Lokalisasion ti MediaWiki] ken [//translatewiki.net translatewiki.net] no kayatmo ti agparawad kadagiti sapasap a panagipatarus ti MediaWiki.',
'allmessagesnotsupportedDB' => "Saan a mausar daytoy a panid ngamin ket ti '''\$wgUseDatabaseMessages''' ket nabaldado.",
'allmessages-filter-legend' => 'Sagat',
'allmessages-filter' => 'Sagaten babaen ti naipaduma a kasasaad:',
'allmessages-filter-unmodified' => 'Saan a nabaliwan',
'allmessages-filter-all' => 'Amin',
'allmessages-filter-modified' => 'Nabaliwan',
'allmessages-prefix' => 'Sagaten babaen ti pasaruno:',
'allmessages-language' => 'Pagsasao:',
'allmessages-filter-submit' => 'Inkan',
'allmessages-filter-translate' => 'Ipatarus',

# Thumbnails
'thumbnail-more' => 'Padakkelen',
'filemissing' => 'Napukaw ti papeles',
'thumbnail_error' => 'Biddut ti panagaramid ti bassit a ladawan: $1',
'thumbnail_error_remote' => 'Biddut a mensahe manipud ti $1: 
$2',
'djvu_page_error' => 'Ti DjVu a panid ket saan a nasakup',
'djvu_no_xml' => 'Saan a naala ti XML iti DjVu a papeles',
'thumbnail-temp-create' => 'Saan a makaaramid ti temporario a bassit a ladawan ti papeles',
'thumbnail-dest-create' => 'Saan a maidulin ti basit a ladawan idiay pagipanan',
'thumbnail_invalid_params' => 'Imbalido a parametro ti bassit a ladawan',
'thumbnail_dest_directory' => 'Saan a nakaaramid ti pangipanan a direktorio.',
'thumbnail_image-type' => 'Daytoy a kita ti ladawan ket saan a nasuportaran.',
'thumbnail_gd-library' => 'Saan a kompleto a GD biblioteka a pannakaaramid: Awan ti opisio ti $1',
'thumbnail_image-missing' => 'Daytoy a papeles ket kasla napukaw: $1',
'thumbnail_image-failure-limit' => 'Adu unayen dagiti nabiit a napaay a panagipadas ($1 wenno ad-adu) a panangiparamg daytoy bassit a ladawan. Pangngaasi a padasen manen intono madamdama.',

# Special:Import
'import' => 'Agala kadagiti panid',
'importinterwiki' => 'Agala ti transwiki',
'import-interwiki-text' => 'Agpilika ti wiki ken titulo ti panid nga alaem.
Dagit panagbaliw a petsa ken dagiti nagan ti mannurat ket maipreserba.
Amin a transwiki nga alaem ket mailista idiay [[Special:Log/import|listaan ti pinagala]].',
'import-interwiki-source' => 'Taudan ti wiki/panid:',
'import-interwiki-history' => 'Kopiaen amin dagiti bersion ti pakasaritaan daytoy a panid',
'import-interwiki-templates' => 'Iraman amin dagiti plantilia',
'import-interwiki-submit' => 'Agala',
'import-interwiki-namespace' => 'Pangipanan a nagan ti espasio:',
'import-interwiki-rootpage' => 'Papanan a ramut ti panid (pagpilian):',
'import-upload-filename' => 'Nagan ti papeles:',
'import-comment' => 'Komentario:',
'importtext' => 'Pangngaasi nga ipanmo ti papeles a naggapu iti nagtaudan a wiki nga agusar ti [[Special:Export|agipan]].',
'importstart' => 'Agal-ala dagiti panid...',
'import-revision-count' => '$1 {{PLURAL:$1|a pinagbaliwan|kadagiti pinagbaliwan}}',
'importnopages' => 'Awan dagiti panid ti maala.',
'imported-log-entries' => 'Naala ti $1 {{PLURAL:$1|a nailista|kadagiti nailista}}.',
'importfailed' => 'Napaay ti panagala: <nowiki>$1</nowiki>',
'importunknownsource' => 'Di amammo a kita ti taudan ti innala',
'importcantopen' => 'Saan a maluktan ti innala a papeles',
'importbadinterwiki' => 'Saan a nasayaat a silpo ti interwiki',
'importnotext' => 'Awan linaon wenno awan ti testo',
'importsuccess' => 'Nalpasen ti pinagala!',
'importhistoryconflict' => 'Adda kasinnungat a pinagbaliw ti pakasaritaan (baka naala daytoy a panid idi)',
'importnosources' => 'Awan ti innala a taudan ti transwiki ti naipalawag ken ti dagus a pakasaritaan ti pinag-ipan ket nabaldado.',
'importnofile' => 'Awan ti inalam a papeles a naipapan.',
'importuploaderrorsize' => 'Ti pinag-ipan ti innala a papeles ket napaay.
Ti papeles ket dakdakel ngem ti mabalin a kadakkel ti pang-ipan.',
'importuploaderrorpartial' => 'Ti pinag-ipan ti innala a papeles ket napaay.
Paset laeng ti papeles ti napag-ipan.',
'importuploaderrortemp' => 'Ti pinag-ipan ti papeles ket napaay.
Awan ti saan nga agnayon a polder.',
'import-parse-failure' => 'Napaay ti pinagala ti XML parse',
'import-noarticle' => 'Awan ti panid a maaala!',
'import-nonewrevisions' => 'Awan dagiti naala panagbalbaliw (mabalin nga adda amin dagitoyen, wenno nalabsan gapu kadagiti biddut).',
'xml-error-string' => '$1 iti linia $2, tukol $3 (byte $4): $5',
'import-upload' => 'Ipan ti XML data',
'import-token-mismatch' => 'Napukaw ti gimong ti datos.
Pangngaasi a padasem manen.',
'import-invalid-interwiki' => 'Saan a makaala dita naited a wiki.',
'import-error-edit' => 'Ti panid ti "$1" ket saan a naala ngamin ket saanmo a mabalin nga urnosen.',
'import-error-create' => 'Ti panid ti "$1" ket saan a naala ngamin ket saanmo a mabalin nga aramiden.',
'import-error-interwiki' => 'Ti panid ti "$1" ket saan a naala ngamin ket ti nagan ket nailasin para iti ruar a panagsilpo (interwiki).',
'import-error-special' => 'Ti panid ti "$1" ket saan a naala ngamin ket bukod ti  espesial a nagan a lugar a saan nga agpalubos ti pampanid.',
'import-error-invalid' => 'Ti panid ti "$1" ket saan a naala ngamin ket ti nagan ket imbalido.',
'import-error-unserialize' => 'Ti panagbaliw ti $2 iti panid ti "$1" ket di maipagsasaruno. Ti panagbalbaliw ket naireporta idi nga agus-usar ti modelo ti $3 a naipagsasaruno a kas $4.',
'import-error-bad-location' => 'Ti panagbaliw ti $2 nga agus-usar ti modelo a linaon ti $3 ket saan a maipenpen iti "$1" iti daytoy a wiki, gapu ta dayta a modelo ket saan a nasuportaran iti dayta a panid.',
'import-options-wrong' => 'Saan a husto {{PLURAL:$2|a pagpilian|a pagpilpilian}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Ti naited a ramut ti panid ket imbalido a titulo.',
'import-rootpage-nosubpage' => 'Ti nagan ti lugar ti "$1" iti ramut ti panid ket saan amangpalubos kadagiti apo ti panid.',

# Import log
'importlogpage' => 'Alaen ti listaan',
'importlogpagetext' => 'Ti administratibo a panagala dagiti panid nga adda ti pakasaritaanna nga urnos kadagiti sabsabali a wiki.',
'import-logentry-upload' => 'innala ti [[$1]] iti papeles a pinag-ipan',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|a pinagbaliwan|kadagiti pinagbaliwan}}',
'import-logentry-interwiki' => 'nai-transwiki ti $1',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|pinagbaliwan|dagiti pinagbaliwan}} manipud iti $2',

# JavaScriptTest
'javascripttest' => 'Subsubokan ti JavaScript',
'javascripttest-title' => 'Agpatpataray ti $1 a subsubokan',
'javascripttest-pagetext-noframework' => 'Daytoy a panid ket nailasin para iti panagpataray ti subsubokan a JavaScript.',
'javascripttest-pagetext-unknownframework' => 'Di amamo a pagsubsubokan a tabas "$1".',
'javascripttest-pagetext-frameworks' => 'Pangngaasi nga agpili ti maysa kadagiti sumaganad a pagsubokan a tabas: $1',
'javascripttest-pagetext-skins' => 'Agpili ti kudil a pangipatarayan ti pagsubokan:',
'javascripttest-qunit-intro' => 'Kitaen ti [ $1 dukomentasion ti panagsubok] idiay mediawiki.org.',
'javascripttest-qunit-heading' => 'MediaWiki JavaScript QUnit test suite',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Panidmo nga agar-aramat',
'tooltip-pt-anonuserpage' => 'Ti panid ti agar-aramat daytoy nga IP a pagtaengan nga urnosem a  kasla',
'tooltip-pt-mytalk' => 'Pakitungtungam a panid',
'tooltip-pt-anontalk' => 'Pakitungtungan a maipapan ti panagurnos a naggapu ditoy nga IP a pagtaengan',
'tooltip-pt-preferences' => 'Dagiti kakaykayatam',
'tooltip-pt-watchlist' => 'Listaan dagiti panid a sipsiputem para iti panakabalbaliw',
'tooltip-pt-mycontris' => 'Listaan dagiti inaramidmo',
'tooltip-pt-login' => 'Maisingasing a sumrekka; nupay kasta, daytoy ket saan a maipapilit',
'tooltip-pt-logout' => 'Rummuar',
'tooltip-ca-talk' => 'Pagtungtungan a maipapan ti linaon ti panid',
'tooltip-ca-edit' => 'Mabalinmo nga urnosen daytoy a panid. Pangngaasi nga aramatem ti buton ti panagipadas sakbay nga agidulin',
'tooltip-ca-addsection' => 'Mangirugi ti baro a paset',
'tooltip-ca-viewsource' => 'Nasalakniban daytoy a panid.
Mabalinmo a kitaen ti taudanna.',
'tooltip-ca-history' => 'Dagiti napalabas a panagbalbaliw iti daytoy a panid.',
'tooltip-ca-protect' => 'Salakniban daytoy a panid',
'tooltip-ca-unprotect' => 'Sukatan ti salaknib daytoy a panid',
'tooltip-ca-delete' => 'Ikkaten daytoy a panid',
'tooltip-ca-undelete' => 'Isubli dagiti inurnos ti daytoy a panid sakbay idi naikkat',
'tooltip-ca-move' => 'Iyalis daytoy a panid',
'tooltip-ca-watch' => 'Inayon daytoy a panid kadagiti bambantayam',
'tooltip-ca-unwatch' => 'Ikkatem daytoy a panid kadagiti bambantayam',
'tooltip-search' => 'Biruken idiay {{SITENAME}}',
'tooltip-search-go' => 'Inka idiay panid nga adda kastoy a naganna no adda',
'tooltip-search-fulltext' => 'Biruken dagiti panid para iti daytoy a testo',
'tooltip-p-logo' => 'Sarungkaran ti umuna a panid',
'tooltip-n-mainpage' => 'Sarungkaran ti umuna a panid',
'tooltip-n-mainpage-description' => 'Sarungkaran ti umuna a panid',
'tooltip-n-portal' => 'Maipapan ti gandat, ti aniaman a maaramidam, no sadino ti pagbirukam kadagiti banbanag',
'tooltip-n-currentevents' => 'Agsapul iti lugar ti likud a pakaammo kadagiti agdama a paspasamak',
'tooltip-n-recentchanges' => 'Listaan dagiti naudi a sinukatan iti wiki.',
'tooltip-n-randompage' => 'Mangiparuar iti pugto a panid',
'tooltip-n-help' => 'Ti lugar a pagsapulan',
'tooltip-t-whatlinkshere' => 'Listaan ti am-amin a pampanid ti wiki a nakasilpo ditoy',
'tooltip-t-recentchangeslinked' => 'Kinaudian a sinukatan  dagiti panid a nakasilpo ditoy a panid',
'tooltip-feed-rss' => 'RSS a pakan para iti daytoy a panid',
'tooltip-feed-atom' => 'Atom a pakan para iti daytoy a panid',
'tooltip-t-contributions' => 'Kitaen ti listaan dagiti naaramid daytoy nga agar-aramat',
'tooltip-t-emailuser' => 'Patulodan ti esurat daytoy nga agar-aramat',
'tooltip-t-upload' => 'Agipan iti papeles',
'tooltip-t-specialpages' => 'Listaan ti amin nga espesial a pampanid',
'tooltip-t-print' => 'Maimaldit a bersion ti panid',
'tooltip-t-permalink' => 'Agnanayon a silpo ti daytoy a panagbaliw ti panid',
'tooltip-ca-nstab-main' => 'Kitaen ti naglaon a panid',
'tooltip-ca-nstab-user' => 'Kitaen ti panid ti agar-aramat',
'tooltip-ca-nstab-media' => 'Kitaen ti panid ti midia',
'tooltip-ca-nstab-special' => 'Maysa daytoy nga espesial a panid, saanmo a mismo a maurnos daytoy a panid',
'tooltip-ca-nstab-project' => 'Kitaen ti panid ti gandat',
'tooltip-ca-nstab-image' => 'Kitaen ti panid ti papeles',
'tooltip-ca-nstab-mediawiki' => 'Kitaen ti mensahe ti sistema',
'tooltip-ca-nstab-template' => 'Kitaen ti plantilia',
'tooltip-ca-nstab-help' => 'Kitaen ti panid ti tulong',
'tooltip-ca-nstab-category' => 'Kitaen ti panid ti kategoria',
'tooltip-minoredit' => 'Markaan daytoy a kas bassit a panag-urnos',
'tooltip-save' => 'Idulin dagiti sinukatam',
'tooltip-preview' => 'Ipadas dagiti sinukatam, pangngaasim nga usarem daytoy sakbay nga idulinmo ti panid!',
'tooltip-diff' => 'Ipakita no ania dagiti sinukatan nga inaramidmo iti testo',
'tooltip-compareselectedversions' => 'Kitaen ti naggidiatan dagiti dua a napili a bersion ti daytoy a panid.',
'tooltip-watch' => 'Inayon daytoy a panid idiay listaan dagiti bambantayam',
'tooltip-watchlistedit-normal-submit' => 'Ikkaten dagiti titulo',
'tooltip-watchlistedit-raw-submit' => 'Pabaruen ti listaan ti bambantayan',
'tooltip-recreate' => 'Aramidem manen ti panid urayno dati a naikkat.',
'tooltip-upload' => 'Rugian ti agip-ipan',
'tooltip-rollback' => '"Baliktaden"   isubli ti inurnos (dagiti inurnos) ti daytoy a panid ti kinaudi a nangaramid iti maysa a takla',
'tooltip-undo' => '"Ibabawi" ipasubli daytoy nga urnos ken lukatanna ti kinabuklan ti urnos iti panagpadas. Agpabalin daytoy a mangikabil ti rason idiay pinakabuklan.',
'tooltip-preferences-save' => 'Idulin dagiti kakaykayatam',
'tooltip-summary' => 'Ikabil ti bassit a pakabuklan',

# Metadata
'notacceptable' => 'Ti server ti wiki ket saan a makaited ti data iti kinabuklan a saan a mabasa ti kliente.',

# Attribution
'anonymous' => 'Di am-ammo {{PLURAL:$1|nga agar-aramat|kadagiti agar-aramat}} iti {{SITENAME}}',
'siteuser' => '{{SITENAME}} nga agar-aramat $1',
'anonuser' => '{{SITENAME}} di amammo nga agar-aramat $1',
'lastmodifiedatby' => 'Daytoy a panid ket naudi a binalbaliwan idi $2, $1 ni $3.',
'othercontribs' => 'Naibasar iti obra ni $1.',
'others' => 'dadduma pay',
'siteusers' => '{{SITENAME}}  {{PLURAL:$2|agar-aramat|dagiti agar-aramat}}  $1',
'anonusers' => '{{SITENAME}} di am-ammo {{PLURAL:$2|nga agar-aramat|a digiti agar-aramat}} $1',
'creditspage' => 'Dagiti pagdaydayaw ti panid',
'nocredits' => 'Awan dagiti pakaammo ti pammadayaw nga adda ditoy a panid.',

# Spam protection
'spamprotectiontitle' => 'Panagsalaknib a sagat  para ti spam',
'spamprotectiontext' => 'Ti testo a kayatmo nga idulin ket sinerraan ti sagat ti spam.
Daytoy ket mabalin a gapuanan babaen ti silpo a naiparit ti akin ruar a pagsaadan.',
'spamprotectionmatch' => 'Ti sumaganad a testo ti nangirugi ti sagat ti spam: $1',
'spambot_username' => 'Panagdalus iti MediaWiki spam',
'spam_reverting' => 'Ipasubli ti kinaudi a panagbaliw nga awan dagiti linaon a silpo idiay $1',
'spam_blanking' => 'Dagiti amin a panagbaliw ket aglaon kadagiti silpo idiay $1, iblanko',
'spam_deleting' => 'Dagiti amin a panagbaliw ket naglaon kadagiti silpo idiay $1, ik-ikkaten',
'simpleantispam-label' => "Kontra-spam a panagkita.
 '''Saan''' a suratan daytoy!",

# Info page
'pageinfo-title' => 'Pakaammo para iti "$1"',
'pageinfo-not-current' => 'Pasensia, saan a mabalin ti mangited ti pakaammo para kadagiti daan a panagbalbaliw.',
'pageinfo-header-basic' => 'Kangrunaan a pakaammo',
'pageinfo-header-edits' => 'Pakasaritaan ti inurnos',
'pageinfo-header-restrictions' => 'Panagsalaknib ti panid',
'pageinfo-header-properties' => 'Tagtagikua ti panid',
'pageinfo-display-title' => 'Iparang ti titulo',
'pageinfo-default-sort' => 'Kasisigud a kangrunaan a panagilasin',
'pageinfo-length' => 'Kaatiddog ti panid (kadagiti byte)',
'pageinfo-article-id' => 'ID ti panid',
'pageinfo-language' => 'Pagsasao ti naglaon a panid',
'pageinfo-content-model' => 'Modelo ti linaon ti panid',
'pageinfo-robot-policy' => 'Panagpasurot babaen dagiti robot',
'pageinfo-robot-index' => 'Maipalubos',
'pageinfo-robot-noindex' => 'Saan a maipalubos',
'pageinfo-views' => 'Bilang dagiti panagkita',
'pageinfo-watchers' => 'Bilang dagiti agbuybuya ti panid',
'pageinfo-few-watchers' => 'Basbassit ngem $1 {{PLURAL:$1|ti agbuybuya|dagiti agbuybuya}}',
'pageinfo-redirects-name' => 'Bilang dagiti baw-ing iti daytoy a panid',
'pageinfo-subpages-name' => 'Bilang dagiti subpanid iti daytoy a panid',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|baw-ing|bawbaw-ing}}; $3 {{PLURAL:$3|saan a baw-ing|saan a bawbaw-ing}})',
'pageinfo-firstuser' => 'Nagpartuat ti panid',
'pageinfo-firsttime' => 'Petsa a pannakapartuat ti panid',
'pageinfo-lastuser' => 'Kinaudi a nagurnos',
'pageinfo-lasttime' => 'Petsa ti kinaudi a panag-urnos',
'pageinfo-edits' => 'Dagup a bilang dagiti inurnos',
'pageinfo-authors' => 'Dagup a bilang dagiti naisangsangayan a mannurat',
'pageinfo-recent-edits' => 'Itay nabiit a bilang dagiti inurnos (ti uneg ti napalabas ti $1)',
'pageinfo-recent-authors' => 'Itay nabiit a bilang dagiti naisangsangayan a mannurat',
'pageinfo-magic-words' => 'Salamangka  {{PLURAL:$1|a balikas|a balbalikas}} ($1)',
'pageinfo-hidden-categories' => 'Nailemmeng {{PLURAL:$1|a kategoria|a katkategoria}} ($1)',
'pageinfo-templates' => 'Nailak-am {{PLURAL:$1|a plantilia|a planplantilia}} ($1)',
'pageinfo-transclusions' => '{{PLURAL:$1|Panid|Pampanid}} a nakailak-aman ($1)',
'pageinfo-toolboxlink' => 'Pakaammo ti panid',
'pageinfo-redirectsto' => 'Maibaw-ing idiay',
'pageinfo-redirectsto-info' => 'pakaammo',
'pageinfo-contentpage' => 'Naibilang a kas naglaon a panid',
'pageinfo-contentpage-yes' => 'Wen',
'pageinfo-protect-cascading' => 'Dagiti panagsalaknib ket agsariap manipud ditoy',
'pageinfo-protect-cascading-yes' => 'Wen',
'pageinfo-protect-cascading-from' => 'Dagiti panagsalaknib ket agsariap manipud idiay',
'pageinfo-category-info' => 'Pakaammo ti kategoria',
'pageinfo-category-pages' => 'Bilang dagiti panid',
'pageinfo-category-subcats' => 'Bilang dagiti subkategoria',
'pageinfo-category-files' => 'Bilang dagiti papeles',

# Patrolling
'markaspatrolleddiff' => 'Markaan a kas napatruliaan',
'markaspatrolledtext' => 'Markaan daytoy a panid a kas napatruliaan',
'markedaspatrolled' => 'Markaan a kas napatruliaan',
'markedaspatrolledtext' => 'Ti napili a panagbaliw iti [[:$1]] ket namarkaan a kas napatrulian.',
'rcpatroldisabled' => 'Nabaldado ti panagpatrulia kadagiti kinaudi a pinagbaliw',
'rcpatroldisabledtext' => 'Dagiti langa a patrulia ti kinaudi a pinagbaliw ket agdama a nabaldado',
'markedaspatrollederror' => 'Madi a mamarkaan a kas napatruliaan',
'markedaspatrollederrortext' => 'Nasken a naganam ti maysa a rebision tapno mamarkaan a kas napatruliaan.',
'markedaspatrollederror-noautopatrol' => 'Saanmo a mabalin a markaan dagita sinukatam a kas napatruliaan.',
'markedaspatrollednotify' => 'Daytoy a panagbaliw ti $1 ket namarkaanen a kas napatruliaan.',
'markedaspatrollederrornotify' => 'Ti panagmarka a kas napatruliaan ket napaay.',

# Patrol log
'patrol-log-page' => 'Listaan ti napatruliaan',
'patrol-log-header' => 'Daytoy ket listaan dagiti napatruliaan a panagbabaliw.',
'log-show-hide-patrol' => '$1 listaan ti napatruliaan',

# Image deletion
'deletedrevision' => 'Naikkat ti daan a binaliwan $1',
'filedeleteerror-short' => 'Biddut ti panakaikkat ti papeles: $1',
'filedeleteerror-long' => 'Adda nasarakan a biddut idi agikikkat ti papeles:

$1',
'filedelete-missing' => 'Ti papeles "$1" ket saan a maikkat, ngamin ket awanen dita.',
'filedelete-old-unregistered' => 'Ti nainagan a pinagbaliw ti papeles "$1" ket awan idiay database.',
'filedelete-current-unregistered' => 'Ti nainagan a papeles "$1" ket awan idiay database.',
'filedelete-archive-read-only' => 'Ti pagidulinan a direktorio "$1" ket saan a masuratan ti webserver.',

# Browsing diffs
'previousdiff' => '← Napalabas a naurnos',
'nextdiff' => 'Sumaruno a naurnos →',

# Media information
'mediawarning' => "'''Ballaag'': Daytoy a papeles ket naglaon ti dakes a kodigo.
No usarem daytoy, baka makompromiso ti sistema.",
'imagemaxsize' => "Ti patingga a kadakkel ti papeles:<br />''(para dagiti pagpalpalawag ti papeles a panid)''",
'thumbsize' => 'Rukod ti bassit a ladawan:',
'widthheightpage' => '$1 × $2, $3 a {{PLURAL:$3|panid|pampanid}}',
'file-info' => 'kadakkel ti papeles: $1, MIME a kita: $2',
'file-info-size' => '$1 × $2 dagiti piksel, kadakkel ti papeles: $3, kita ti  MIME: $4',
'file-info-size-pages' => '$1 × $2 dagiti piksel, kadakkel ti papeles: $3, kita ti MIME: $4, $5 {{PLURAL:$5|panid|pampanid}}',
'file-nohires' => 'Awan ti mabalin a nangatngato a resolusion.',
'svg-long-desc' => 'SVG a papeles, babassit ngem $1 × $2 pixels, kadakkel ti papeles: $3',
'svg-long-desc-animated' => 'Naanimado nga SVG a papeles, babassit ngem  $1 × $2 pixels, kadakkel ti papeles: $3',
'svg-long-error' => 'Saan nga umiso a papeles ti SVG: $1',
'show-big-image' => 'Kasisigud a papeles',
'show-big-image-preview' => 'Kadakkel daytoy a panagipadas: $1.',
'show-big-image-other' => 'Sabali {{PLURAL:$2|a resolusion|kadagiti resolusion}}: $1.',
'show-big-image-size' => '$1 × $2 dagiti piksel',
'file-info-gif-looped' => 'nasiluan',
'file-info-gif-frames' => '$1 {{PLURAL:$1|a kuadro| kadagiti kuadro}}',
'file-info-png-looped' => 'nasiluan',
'file-info-png-repeat' => 'inay-ayam ti $1 {{PLURAL:$1|a beses|a besbeses}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|a kuadro| kadagiti kuadro}}',
'file-no-thumb-animation' => "'''Paammo: Gapu kadagiti teknikal a pannakaipatingga, dagiti bassit a ladawan ti daytoy a papeles ket saanto a maanimado.'''",
'file-no-thumb-animation-gif' => "'''Paammo: Gapu kadagiti teknikal a pannakaipatingga, dagiti bassit a ladawan ti nangato a resolusion dagiti GIF a ladawan a kas daytoy ket saanto a maanimado.'''",

# Special:NewFiles
'newimages' => 'Galeria dagiti kabarbaro a papeles',
'imagelisttext' => "Adda dita baba ti listaan ti ''$1''' {{PLURAL:$1|a papeles|dagiti papeles}} a nailasin a kas $2.",
'newimages-summary' => 'Daytoy nga espesial a panid ket ipakitana ti kinaudi a pinag-ipan kadagiti papeles.',
'newimages-legend' => 'Sagat',
'newimages-label' => 'Nagan ti papeles (wenno paset na) :',
'showhidebots' => '($1 dagiti bot)',
'noimages' => 'Awan ti makita.',
'ilsubmit' => 'Biruken',
'bydate' => 'babaen ti petsa',
'sp-newimages-showfrom' => 'Iparang dagiti baro a papeles mangrugi iti $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 segundo|$1 segundo}}',
'minutes' => '{{PLURAL:$1|$1 minuto|$1 minutos}}',
'hours' => '{{PLURAL:$1|$1 nga oras|$1 nga or-oras}}',
'days' => '{{PLURAL:$1|$1 nga aldaw|$1 nga al-aldaw}}',
'weeks' => '{{PLURAL:$1|$1 a lawas|$1 a law-lawas}}',
'months' => '{{PLURAL:$1|$1 a bulan|$1 a bulbulan}}',
'years' => '{{PLURAL:$1|$1 a tawen|$1 a tawtawen}}',
'ago' => '$1 nagtapos',
'just-now' => 'tatta laeng',

# Human-readable timestamps
'hours-ago' => '$1 nga {{PLURAL:$1|oras|or-oras}} ti napalabas',
'minutes-ago' => '$1 a {{PLURAL:$1|minuto|minutos}} ti napalabas',
'seconds-ago' => '$1 a {{PLURAL:$1|segundo|seg-segundo}} ti napalabas',
'monday-at' => 'Lunes idiay $1',
'tuesday-at' => 'Martes idiay $1',
'wednesday-at' => 'Mierkoles idiay $1',
'thursday-at' => 'Huebes idiay $1',
'friday-at' => 'Biernes idiay $1',
'saturday-at' => 'Sabado idiay $1',
'sunday-at' => 'Dominggo idiay $1',
'yesterday-at' => 'Idi kalman idiay $1',

# Bad image list
'bad_image_list' => 'Ti kinabuklan ket kas iti sumaganad:

Dagiti laeng banag iti listaan (linlinia a mangrugi iti *) ti mabalin.
Ti umuna a silpo iti maysa a linia ket nasken a nakasilpo iti maysa a saan a nasayaat a papeles.
Ania man a sumarsaruno a silsilpo iti isu met laeng a linia ket maikonsidera kas mailaksid, kas pagarigan, dagiti panid a pakasarakan ti papeles a kas nakalinia.',

# Metadata
'metadata' => 'Metadata',
'metadata-help' => 'Daytoy a papeles ket naglaon ti naipatinayon a pakaammo, a mabalin a nainayon manipud ti dihital a kamera wenno skanner a naaramat a pangpartuat wenno pang-digitize itoy.
No ti papeles ket saan a nabalbaliwan manipud iti kasisigud a kasasaad, adda dagiti sumagmamano a salaysay a mabalin a saan a napno a maipakita ti nabaliwan a papeles.',
'metadata-expand' => 'Ipakita dagiti napaatiddog a salaysay',
'metadata-collapse' => 'Ilemmeng dagiti napaatiddog a salaysay',
'metadata-fields' => 'Dagiti metadata a pagikabilana nakalista iti daytoy a mensahe ket mairaman iti maipakita a panid ti imahen no ti metadata a lamisaan ket maipabassit.
Dagiti dadduma ket mailemmeng a kinasigud.
* nagaramid
* modelo
* petsaoraskinasigud
* oras ti pinakaibilag
* f a numero
* iso pateg ti kapaspas
* kaatiddog ti focal
* artista
* karbengan ti kopia
* deskripsion ti imahen
* gpslatitude
* gpslongitude
* gpsaltitude',

# Exif tags
'exif-imagewidth' => 'Kaakaba',
'exif-imagelength' => 'Katayag',
'exif-bitspersample' => 'Dagiti bit tunggal maysa a komponente',
'exif-compression' => 'Kompresion a pamuspusan',
'exif-photometricinterpretation' => 'Pakabuklan ti piksel',
'exif-orientation' => 'Pagturongan',
'exif-samplesperpixel' => 'Bilang dagiti komponente',
'exif-planarconfiguration' => 'Pannaka-urnos ti datos',
'exif-ycbcrsubsampling' => 'Subsampling ratio ti Y iti C',
'exif-ycbcrpositioning' => 'Y ken C a panakaipatakderan',
'exif-xresolution' => 'Horisontal a resolusion',
'exif-yresolution' => 'nakatakder a resolusion',
'exif-stripoffsets' => 'Lokasion ti datos ti imahen',
'exif-rowsperstrip' => 'Bilang ti ar-aray tunggal maysa a strip',
'exif-stripbytecounts' => 'Bytes per compressed strip',
'exif-jpeginterchangeformat' => 'Offset to JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bytes ti JPEG a datos',
'exif-whitepoint' => 'White point chromaticity',
'exif-primarychromaticities' => 'Chromaticities dagiti primarities',
'exif-referenceblackwhite' => 'Reperensia a kuwenta iti agparis a nangisit ken puraw',
'exif-datetime' => 'Panagsukat ti papeles ti petsa ken oras',
'exif-imagedescription' => 'Titulo ti imahen',
'exif-make' => 'Nangpartuat iti kamera',
'exif-model' => 'Modelo ti kamera',
'exif-software' => 'Naaramat a software',
'exif-artist' => 'Mannurat',
'exif-copyright' => 'Nakatengngel iti kaberngan ti kopia',
'exif-exifversion' => 'Exif a bersion',
'exif-flashpixversion' => 'Nasuportaran a Flashpix a bersion',
'exif-colorspace' => 'Kolor ti lugar',
'exif-componentsconfiguration' => 'Ti kayat a saoen ti tunggal maysa a nagyan',
'exif-compressedbitsperpixel' => 'Moda ti kompresion ti imahen',
'exif-pixelydimension' => 'Kaaba ti imahen',
'exif-pixelxdimension' => 'Katayag ti imahen',
'exif-usercomment' => 'Dagiti komentario ti agar-aramat',
'exif-relatedsoundfile' => 'Mainaig nga nangnangeg a papeles',
'exif-datetimeoriginal' => 'Petsa ken oras ti panakaaramid ti datos',
'exif-datetimedigitized' => 'Petsa ken oras ti panang-digitizing',
'exif-subsectime' => 'DateTime subseconds',
'exif-subsectimeoriginal' => 'DateTimeOriginal subseconds',
'exif-subsectimedigitized' => 'DateTimeDigitized subseconds',
'exif-exposuretime' => 'Exposure time',
'exif-exposuretime-format' => '$1 sec ($2)',
'exif-fnumber' => 'F a Numero',
'exif-exposureprogram' => 'Exposure Program',
'exif-spectralsensitivity' => 'Spectral sensitivity',
'exif-isospeedratings' => 'ISO speed rating',
'exif-shutterspeedvalue' => 'APEX Shutter speed',
'exif-aperturevalue' => 'Apex aperture',
'exif-brightnessvalue' => 'Kalawag ti APEX',
'exif-exposurebiasvalue' => 'Exposure bias',
'exif-maxaperturevalue' => 'Maximum land aperture',
'exif-subjectdistance' => 'Kaadayu ti suheto',
'exif-meteringmode' => 'Metering mode',
'exif-lightsource' => 'Paggapuan ti lawag',
'exif-flash' => 'Silap',
'exif-focallength' => 'Lens focal length',
'exif-subjectarea' => 'Paset ti suheto',
'exif-flashenergy' => 'Enerhia ti silap',
'exif-focalplanexresolution' => 'Focal plane X resolution',
'exif-focalplaneyresolution' => 'Focal plane Y resolution',
'exif-focalplaneresolutionunit' => 'Focal plane resolution unit',
'exif-subjectlocation' => 'Lokasion ti suheto',
'exif-exposureindex' => 'Exposure index',
'exif-sensingmethod' => 'Sensing method',
'exif-filesource' => 'Nagtaudan ti papeles',
'exif-scenetype' => 'Scene type',
'exif-customrendered' => 'Custom image processing',
'exif-exposuremode' => 'Exposure mode',
'exif-whitebalance' => 'Pagtimbangan ti puraw',
'exif-digitalzoomratio' => 'Digital zoom ratio',
'exif-focallengthin35mmfilm' => 'Focal length iti 35 mm a film',
'exif-scenecapturetype' => 'Scene capture type',
'exif-gaincontrol' => 'Scene control',
'exif-contrast' => 'Contrast',
'exif-saturation' => 'Saturation',
'exif-sharpness' => 'Kalawag',
'exif-devicesettingdescription' => 'Deskripsion dagiti pannakaidisso ti ramit',
'exif-subjectdistancerange' => 'Nasakup a kaadayo ti suheto',
'exif-imageuniqueid' => 'Naisangsangayan nga ID ti imahen',
'exif-gpsversionid' => 'Etiketa a bersion ti GPS',
'exif-gpslatituderef' => 'Amianan wenno Abagatan a Latitude',
'exif-gpslatitude' => 'Latitude',
'exif-gpslongituderef' => 'Daya wenno Laud a Longitude',
'exif-gpslongitude' => 'Longitude',
'exif-gpsaltituderef' => 'Reperensia ti kangato',
'exif-gpsaltitude' => 'Kangato',
'exif-gpstimestamp' => 'GPS nga oras (atomiko a pagurasan)',
'exif-gpssatellites' => 'Dagiti satelite a naaramat para iti panagrukod',
'exif-gpsstatus' => 'Receiver status',
'exif-gpsmeasuremode' => 'Panagrukod a moda',
'exif-gpsdop' => 'Kasayaat ti panagrukod',
'exif-gpsspeedref' => 'Speed unit',
'exif-gpsspeed' => 'Kapaspas ti GPS receiver',
'exif-gpstrackref' => 'Reperensia iti direksion ti panaggunay',
'exif-gpstrack' => 'Direksion ti kuti',
'exif-gpsimgdirectionref' => 'Reperensia iti direksion ti imahen',
'exif-gpsimgdirection' => 'Direksion ti imahen',
'exif-gpsmapdatum' => 'Naaramat a geodetic survey data',
'exif-gpsdestlatituderef' => 'Reperensia iti latitude a papanan',
'exif-gpsdestlatitude' => 'Latitude ti papanan',
'exif-gpsdestlongituderef' => 'Reperensia iti longitude a papanan',
'exif-gpsdestlongitude' => 'Longitude ti papanan',
'exif-gpsdestbearingref' => 'Reperensia iti dalan a papanan',
'exif-gpsdestbearing' => 'Dalan ti papanan',
'exif-gpsdestdistanceref' => 'Reperensia ti kaadayo  ti papanan',
'exif-gpsdestdistance' => 'Kaadayo iti papanan na',
'exif-gpsprocessingmethod' => 'Nagan ti kastoy a pinagaramid ti GPS',
'exif-gpsareainformation' => 'Nagan ti GPS area',
'exif-gpsdatestamp' => 'Petsa ti GPS',
'exif-gpsdifferential' => 'Nasimpa apaggiddiatan ti GPS',
'exif-jpegfilecomment' => 'Komento ti JPEG a papeles',
'exif-keywords' => 'Nangnangruna a bal-balikas',
'exif-worldregioncreated' => 'Ti parte ti lubong nga nakaalaan ti litrato',
'exif-countrycreated' => 'Ti pagilian nga nakaalaan ti litrato',
'exif-countrycodecreated' => 'Kodigo ti pagilian nga nakaalaan ti litrato',
'exif-provinceorstatecreated' => 'Probinsia wenno estado nga nakaalaan ti litrato',
'exif-citycreated' => 'Ti siudad nga nakaalaan ti litrato',
'exif-sublocationcreated' => 'Sabali pay a lokasion ti siudad a nakaalaan ti retrato',
'exif-worldregiondest' => 'Paset ti lubong a naipakita',
'exif-countrydest' => 'Naipakita a pagilian',
'exif-countrycodedest' => 'Kodigo ti pagilian a naipakita',
'exif-provinceorstatedest' => 'Probinsia wenno estado a naipakita',
'exif-citydest' => 'Naipakita a siudad',
'exif-sublocationdest' => 'Sabali pay a lokasion ti siudad a naipakita',
'exif-objectname' => 'Pandek a titulo',
'exif-specialinstructions' => 'Kangrunaan a panagipalpalawag',
'exif-headline' => 'Paulo',
'exif-credit' => 'Pammadayaw/Nangted',
'exif-source' => 'Taudan',
'exif-editstatus' => 'Panagurnos a kasasaad ti imahen',
'exif-urgency' => 'Ganat',
'exif-fixtureidentifier' => 'Nagan ti naikabit a banag',
'exif-locationdest' => 'Lugar a naibaga',
'exif-locationdestcode' => 'Kodigo ti lugar a naibaga',
'exif-objectcycle' => 'Oras ti aldaw a nairebbeng para iti daytoy a midia',
'exif-contact' => 'Pakaammo ti pagdamagan',
'exif-writer' => 'Mannurat',
'exif-languagecode' => 'Pagsasao',
'exif-iimversion' => 'Bersion ti IIM',
'exif-iimcategory' => 'Kategoria',
'exif-iimsupplementalcategory' => 'Dagiti sabali pay a kategoria',
'exif-datetimeexpires' => 'Saan nga usaren ti kallabes nga',
'exif-datetimereleased' => 'Nakairuar idi',
'exif-originaltransmissionref' => 'Kinasigud a pinagipatulod iti kodigo ti papanan',
'exif-identifier' => 'Panagilasin',
'exif-lens' => 'Lente nga inusar',
'exif-serialnumber' => 'Agsasaruno a numero ti kamera',
'exif-cameraownername' => 'Akinkukua ti kamera',
'exif-label' => 'Etiketa',
'exif-datetimemetadata' => 'Petsa ti kinaudi a panagbaliw ti metadata',
'exif-nickname' => 'Di pormal a nagan ti imahen',
'exif-rating' => 'Pategan (ti maysa kadagiti  5)',
'exif-rightscertificate' => 'Paneknek ti panagtaripatu dagiti karbengan',
'exif-copyrighted' => 'Kasasaad ti karbengan-panagipablaak',
'exif-copyrightowner' => 'Akinkukua ti kaberngan-pinagipablaak',
'exif-usageterms' => 'Panag-uasar a ban-banag',
'exif-webstatement' => 'Sarita ti insao ti karbengan ti kopia nga addan ti online',
'exif-originaldocumentid' => 'Naisangsangyan nga ID iti kinasigud a dokumento',
'exif-licenseurl' => 'URL iti ti karbengan ti kopia a lisensia',
'exif-morepermissionsurl' => 'Sabali a pakaammo ti lisensia',
'exif-attributionurl' => 'No usaren manen daytoy nga obra, pangngaasi nga agisilpo idiay',
'exif-preferredattributionname' => 'No usaren manen daytoy nga obra, pangngaasi a padayawen ni',
'exif-pngfilecomment' => 'Komentario ti PNG a papeles',
'exif-disclaimer' => 'Renunsia',
'exif-contentwarning' => 'Ballaag ti nagyan',
'exif-giffilecomment' => 'Komentario ti GIF a papeles',
'exif-intellectualgenre' => 'Kita ti banag',
'exif-subjectnewscode' => 'Kodigo ti suheto',
'exif-scenecode' => 'Buya ti kodigo nga IPTC',
'exif-event' => 'Paspasamak a naibaga',
'exif-organisationinimage' => 'Kaurnusan a naibaga',
'exif-personinimage' => 'Ti tao a naibaga',
'exif-originalimageheight' => 'Kangato ti imahen sakbay nga naputed',
'exif-originalimagewidth' => 'Kalawa ti imahen sakbay nga naputed',

# Exif attributes
'exif-compression-1' => 'Saan a napespes',

'exif-copyrighted-true' => 'Nakarbengan a kopia',
'exif-copyrighted-false' => 'Saan a naiyasentar ti kasasaad ti karbengan ti kopia',

'exif-unknowndate' => 'Di ammo a petsa',

'exif-orientation-1' => 'Kadawyan',
'exif-orientation-2' => 'Binaliktad a nagilad',
'exif-orientation-3' => 'Naipusipus iti 180°',
'exif-orientation-4' => 'Binaliktad nga agpangato',
'exif-orientation-5' => 'Naipisipus iti 90° CCW ken nabaliktad nga agtindek',
'exif-orientation-6' => 'Naipusipus iti 90° CCW',
'exif-orientation-7' => 'Naipisipus iti 90° CW ken nabaliktad nga agtindek',
'exif-orientation-8' => 'Naipusipus iti 90° CW',

'exif-planarconfiguration-1' => 'chunky format',
'exif-planarconfiguration-2' => 'planar format',

'exif-colorspace-65535' => 'Di-nakalibrar',

'exif-componentsconfiguration-0' => 'awan',

'exif-exposureprogram-0' => 'Saan a naipalpalawag',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Kadawyan a programa',
'exif-exposureprogram-3' => 'Aperture priority',
'exif-exposureprogram-4' => 'Shutter priority',
'exif-exposureprogram-5' => 'Kreatibo a programa (di nalinteg iti  kauneg ti pagikabilan)',
'exif-exposureprogram-6' => 'Aktion a programa (di nalinteg iti kapartak ti napardas a shutter)',
'exif-exposureprogram-7' => 'Retrato a kita (para iti naasideg nga imahen nga addaan ti lugar ti likud a saan a nai-focus)',
'exif-exposureprogram-8' => 'Ladawan ti daga a kita (para iti ladawan ti daga nga imahen nga addaan ti lugar ti likud a pinag- focus)',

'exif-subjectdistance-value' => '$1 a metro',

'exif-meteringmode-0' => 'Di am-ammo',
'exif-meteringmode-1' => 'Napipia',
'exif-meteringmode-2' => 'Napipia nga agtennga a pinadagsenan',
'exif-meteringmode-3' => 'Disso',
'exif-meteringmode-4' => 'Sabsabali a disso',
'exif-meteringmode-5' => 'Alagad',
'exif-meteringmode-6' => 'Sangkapaset laeng',
'exif-meteringmode-255' => 'Sabali',

'exif-lightsource-0' => 'Di ammo',
'exif-lightsource-1' => 'Aldaw',
'exif-lightsource-2' => 'Fluorescent',
'exif-lightsource-3' => 'Tungsten (incandescent light)',
'exif-lightsource-4' => 'Silap',
'exif-lightsource-9' => 'Napintas a panawen',
'exif-lightsource-10' => 'Naulep a panawen',
'exif-lightsource-11' => 'Linong',
'exif-lightsource-12' => 'Daylight fluorescent (D 5700 – 7100K)',
'exif-lightsource-13' => 'Day white fluorescent (N 4600 – 5400K)',
'exif-lightsource-14' => 'Cool white fluorescent (W 3900 – 4500K)',
'exif-lightsource-15' => 'White fluorescent (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Pagalagadan a lawag A',
'exif-lightsource-18' => 'Pagalagadan a lawag B',
'exif-lightsource-19' => 'Pagalagadan a lawag C',
'exif-lightsource-24' => 'ISO studio tungsten',
'exif-lightsource-255' => 'Sabali a nagtaudan ti lawag',

# Flash modes
'exif-flash-fired-0' => 'Saan a nagsilap',
'exif-flash-fired-1' => 'Nagsilap',
'exif-flash-return-0' => 'awan ti opisio nga aglasin ti pinagsubli ti strobe',
'exif-flash-return-2' => 'saan a nalasin ti pinagsubli ti strobe a lawag',
'exif-flash-return-3' => 'nalasin ti pinagsubli ti strobe a lawag',
'exif-flash-mode-1' => 'kinasigud a pinagsilap',
'exif-flash-mode-2' => 'kinasigud a pinagiddep ti pinagsilap',
'exif-flash-mode-3' => 'automatiko',
'exif-flash-function-1' => 'Awan ti silap nga opisio',
'exif-flash-redeye-1' => 'wagas a panagikkat ti panaglabbaga ti mata',

'exif-focalplaneresolutionunit-2' => 'pulgada',

'exif-sensingmethod-1' => 'Saan a naipalpalawag',
'exif-sensingmethod-2' => 'Maysa a-chip sensor ti kolor ti lugar',
'exif-sensingmethod-3' => 'Dua a-chip sensor ti kolor ti lugar',
'exif-sensingmethod-4' => 'Tallo a-chip sensor ti kolor ti lugar',
'exif-sensingmethod-5' => 'Color sequential area sensor',
'exif-sensingmethod-7' => 'Agtallo a linia a sensor',
'exif-sensingmethod-8' => 'Color sequential linear sensor',

'exif-filesource-3' => 'Pinagrettrato a digital',

'exif-scenetype-1' => 'Dagus a naretrato nga imahen',

'exif-customrendered-0' => 'Kadawyan panagaramid',
'exif-customrendered-1' => 'Naiduma a panagaramid',

'exif-exposuremode-0' => 'Automatiko a panakailatakan',
'exif-exposuremode-1' => 'Manual a panakailatakan',
'exif-exposuremode-2' => 'Auto bracket',

'exif-whitebalance-0' => 'Automatiko a panagtimbang ti puraw',
'exif-whitebalance-1' => 'Manual a panagtimbang ti puraw',

'exif-scenecapturetype-0' => 'Pagalagadan',
'exif-scenecapturetype-1' => 'Ladawan ti daga',
'exif-scenecapturetype-2' => 'Retrato',
'exif-scenecapturetype-3' => 'Rabii a buya',

'exif-gaincontrol-0' => 'Awan',
'exif-gaincontrol-1' => 'Ipangato ti nababa a ganab',
'exif-gaincontrol-2' => 'Ipangato ti nangato a ganab',
'exif-gaincontrol-3' => 'Ipababati nababa a ganab',
'exif-gaincontrol-4' => 'High gain down',

'exif-contrast-0' => 'Kadawyan',
'exif-contrast-1' => 'Nalamuyot',
'exif-contrast-2' => 'Natangken',

'exif-saturation-0' => 'Kadawyan',
'exif-saturation-1' => 'Nababa a saturation',
'exif-saturation-2' => 'Nangato a saturation',

'exif-sharpness-0' => 'Kadawyan',
'exif-sharpness-1' => 'Nalamuyot',
'exif-sharpness-2' => 'Natangken',

'exif-subjectdistancerange-0' => 'Di ammo',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'Asideg a pinagkita',
'exif-subjectdistancerange-3' => 'Adayo a pinagkita',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Amianan a latitude',
'exif-gpslatitude-s' => 'Abagatan a latitude',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Daya a longitude',
'exif-gpslongitude-w' => 'Abagatan a longitude',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|a metro|kadagiti metro}} a nangatngato ngem ti baybay',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|a metro|kadagiti metro}} a nababbaba ngem ti baybay',

'exif-gpsstatus-a' => 'Agrukrukoden',
'exif-gpsstatus-v' => 'Panag-rukod ken pannakabin ti pang-usar ti sabali',

'exif-gpsmeasuremode-2' => '2-kalawa pagrukod',
'exif-gpsmeasuremode-3' => '3-kalawa pagrukod',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Dagiti kilometro kada oras',
'exif-gpsspeed-m' => 'Dagiti milia tunggal maysa nga oras',
'exif-gpsspeed-n' => 'Knots',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometro',
'exif-gpsdestdistance-m' => 'Milia',
'exif-gpsdestdistance-n' => 'Nautiko a milia',

'exif-gpsdop-excellent' => 'Napayus ($1)',
'exif-gpsdop-good' => 'Nalaing ($1)',
'exif-gpsdop-moderate' => 'Natimbeng ($1)',
'exif-gpsdop-fair' => 'Nasayaat ($1)',
'exif-gpsdop-poor' => 'Makukurangan ($1)',

'exif-objectcycle-a' => 'Agsapa laeng',
'exif-objectcycle-p' => 'Rabii laeng',
'exif-objectcycle-b' => 'Agsapa ken rabii',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Agpayso a turong',
'exif-gpsdirection-m' => 'Magnetiko a turong',

'exif-ycbcrpositioning-1' => 'Ipatingnga',
'exif-ycbcrpositioning-2' => 'Kaduana nagkita',

'exif-dc-contributor' => 'Dagiti nakaaramid',
'exif-dc-date' => 'Petsa (dagiti petsa)',
'exif-dc-publisher' => 'Nangipablaak',
'exif-dc-relation' => 'Mainaig a midia',
'exif-dc-rights' => 'Dagiti Kaberngan',
'exif-dc-source' => 'Taudan ti midia',
'exif-dc-type' => 'Kita ti midia',

'exif-rating-rejected' => 'Saan a naawat',

'exif-isospeedratings-overflow' => 'Dakdakkel ngem 65535',

'exif-iimcategory-ace' => 'Dagiti arte, kultura ken linglingay',
'exif-iimcategory-clj' => 'Basbasol ken linteg',
'exif-iimcategory-dis' => 'Dagiti disatro ken aksidente',
'exif-iimcategory-fin' => 'Ekonomia ken negosio',
'exif-iimcategory-edu' => 'Edukasion',
'exif-iimcategory-evn' => 'Enbironmento',
'exif-iimcategory-hth' => 'Salun-at',
'exif-iimcategory-hum' => 'Kaykayat ti tattao',
'exif-iimcategory-lab' => 'Trabaho',
'exif-iimcategory-lif' => 'Wagas ti panagbiag ken liwliwa',
'exif-iimcategory-pol' => 'Dagiti politiko',
'exif-iimcategory-rel' => 'Relihion ken pammati',
'exif-iimcategory-sci' => 'Siensia ken teknolohia',
'exif-iimcategory-soi' => 'Bambanag a sosial',
'exif-iimcategory-spo' => 'Ay-ayam',
'exif-iimcategory-war' => 'Gubat, ringgor ken gulgulo',
'exif-iimcategory-wea' => 'Panawen',

'exif-urgency-normal' => 'Kadawyan ($1)',
'exif-urgency-low' => 'Nababa ($1)',
'exif-urgency-high' => 'Nangato ($1)',
'exif-urgency-other' => 'Inpalawag ti agar-aramat a prioridad ($1)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'amin',
'namespacesall' => 'amin',
'monthsall' => 'amin',

# Email address confirmation
'confirmemail' => 'Pasingkedan ti esurat a pagtaengam',
'confirmemail_noemail' => 'Awan ti umisu nga e-surat a pagtaengam a naikabil idiay [[Special:Preferences|kaykayat ti agar-aramat]].',
'confirmemail_text' => 'Ti {{SITNAME}} ket masapulna a pasingkedam ti esurat a pagtaengam sakbay nga agusar ti esurat a langa.
Ipabalinmo dita baba a buton ti panagitulod ti pasingkedan a surat dita a pagtaengam.
Ti surat ket mangiraman ti panilpo nga aglaon ti maysa a kodigo;
ikabil ti panilpo dita pagbasabasam tapno mapasingkedam a ti esurat a pagtaengam ket umisu.',
'confirmemail_pending' => 'Ti pasingkedan a kodigo ket naipatulod kenkan:
no kadamdama ka a nangaramid ti pakabilangam, aguray ka pay ti mano a minutos a sumangpet sakbay ka nga agpadas ti agkiddaw ti baro a kodigo.',
'confirmemail_send' => 'Agipatulod ti pasingkedan a kodigo',
'confirmemail_sent' => 'Naipatuloden ti pammasingked nga esurat.',
'confirmemail_oncreate' => 'Ti pakasingkedan a kodigo ket naipatulod dita e-surat a pagtaengam.
Daytoy a kodigo ket saan a masapul ti sumrek, ngem masapulmo nga ited sakbay ka nga agpabalin kadagiti e-surat a langa ti wiki.',
'confirmemail_sendfailed' => 'Ti {{SITENAME}} ket saan a makaipatulod ti pammasingked a surat.
Pangngaasi a kitaem ti esurat a pagtaengam para kadagiti imbalido a karakter.

Insubli ti nangisurat: $1',
'confirmemail_invalid' => 'Imbalido a kodigo ti pammasingked.
Mabalin a nagpaso daytoy a kodigo.',
'confirmemail_needlogin' => 'Masapulmo ti $1 tapno mapasingkedan ti esurat a pagtaengam.',
'confirmemail_success' => 'Napasingkedanen ti esurat a pagtaengam.
Mabalinmo tattan ti [[Special:UserLogin|sumrek]] ken nanamen ti wiki.',
'confirmemail_loggedin' => 'Napasingkedanen ti esurat a pagtaengam.',
'confirmemail_subject' => 'Pammasingked ti esurat a pagtaengan ti {{SITENAME}}',
'confirmemail_body' => 'Addaan, baka sika, ti naggapu ti IP a pagtaengan $1,
ket nagrehistro ti pakabilangan "$2" iti daytoy nga esurat a pagtaengan idiay {{SITENAME}}

Tapno mapasingkedan a daytoy a pakabilangan ket kukuam ken ti 
pinagpabalin ti esurat a kita idiay {{SITENAME}}, lukatam daytoy a panilpo dita pabasabasam:

$3

No *saanmo* nga inrehistro ti pakabilangam, surotem daytoy a panilpo
ta pasardengem ti pinakasingkedan ti esurat a  pagtaengam:

$5

Daytoy a pammasingked a kodigo ket agpaso iti $4.',
'confirmemail_body_changed' => 'Addaan, baka sika, ti naggapu ti IP a pagtaengam $1,
ket nangsukat ti esurat a pagtaengan ti pakabilangan "$2" iti daytoy a pagtaengan idiay {{SITENAME}}

Tapno mapasingkedan daytoy a pakabilangan ket kukuam ken ti 
panagpabalin ti esurat a kita idiay {{SITENAME}}, lukatam daytoy a panilpo dita pabasabasam:

$3

No *saanmo* nga inrehistro ti pakabilangam, surutem daytoy a panilpo
ta pasardengem ti pinakasingkedan ti esurat a pagtaengam:

$5

Daytoy a kodigo a pasingkedan ket agpaso iti $4.',
'confirmemail_body_set' => 'Addaan, baka sika met laeng, manipud ti IP a pagtaengan ti $1,
ket nangikabil ti esurat a pagtaengan ti pakabilangan ti "$2" iti daytoy a pagtaengan idiay {{SITENAME}}

Tapno mapasingkedan daytoy a pakabilangan ket agpayso a kukuam ken 
pakabaelan dagiti esurat a langa idiay {{SITENAME}}, lukatam daytoy a silpo idiay pabasabasam:

$3

No daytoy a pakabilangan ket *saanmo* a kukua, surutem daytoy a silpo
tapno ukasen ti panagpasingked ti esurat a pagtaengan:

$5

Daytoy a panagpasingked ti kodigo ket agpaso intono $4.',
'confirmemail_invalidated' => 'Naukas ti pammasingked ti e-surat a pagtaengam',
'invalidateemail' => 'Ukasen ti pammasingked ti e-surat',

# Scary transclusion
'scarytranscludedisabled' => '[Nabaldado ti Interwiki panagiraman]',
'scarytranscludefailed' => '[Napaay ti panagala ti plantilia para iti $1]',
'scarytranscludefailed-httpstatus' => '[Napaay ti panagala ti plantilia para iti $1: HTTP $2]',
'scarytranscludetoolong' => '[Atiddog unay ti URL]',

# Delete conflict
'deletedwhileediting' => "'''Ballaag''': Naikkaten daytoy a panid kalpasan a rinugiam nga agurnos!",
'confirmrecreate' => "Ti ([[User talk:$1|patungtungan]]) ti agar-aramat [[User:$1|$1]] ket inikkatna daytoy a panid kalpasan ti panagrugim nga agurnos nga adda rason:
: ''$2''
Pangngaasi a pasingkedam nga agpayso a kayatmo a partuten manen daytoy a panid.",
'confirmrecreate-noreason' => 'Ti ([[User talk:$1|patungtungan]]) ti agar-aramat [[User:$1|$1]] ket inikkat na daytoy a panid idi kalkalpas mo a magirugi ti agurnos. Pangngaasi ta pasingkedam a kayatmo nga aramiden manen daytoy a panid.',
'recreate' => 'Partuaten manen',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top' => 'Dalusan ti cache daytoy a panid?',
'confirm-purge-bottom' => 'Ti panagpurga ti panid ket dalusanna ti cache ken pursaranna nga agparang dagiti kinaudi a panagbaliw.',

# action=watch/unwatch
'confirm-watch-button' => 'OK',
'confirm-watch-top' => 'Inayon daytoy a panid kadagiti bambantayam',
'confirm-unwatch-button' => 'OK',
'confirm-unwatch-top' => 'Ikkatem daytoy a panid ti bambantayam',

# Multipage image navigation
'imgmultipageprev' => '← napalabas a panid',
'imgmultipagenext' => 'sumaruno a panid →',
'imgmultigo' => 'Inkan!',
'imgmultigoto' => 'Mapan iti panid $1',

# Language selector for translatable SVGs
'img-lang-default' => '(kasisigud a pagsasao)',
'img-lang-info' => 'Ipaay daytoy a ladawan iti $1. $2',
'img-lang-go' => 'Inkan',

# Table pager
'ascending_abbrev' => 'asc',
'descending_abbrev' => 'desc',
'table_pager_next' => 'Sumaruno a panid',
'table_pager_prev' => 'Napalabas a panid',
'table_pager_first' => 'Umuna a panid',
'table_pager_last' => 'Maudi a panid',
'table_pager_limit' => 'Mangipakita iti $1 a banag tunggal maysa  a panid',
'table_pager_limit_label' => 'Banag tunggal maysa a panid:',
'table_pager_limit_submit' => 'Inkan',
'table_pager_empty' => 'Awan dagiti nagbanagan',

# Auto-summaries
'autosumm-blank' => 'Naikkat amin ti linaon ti panid',
'autosumm-replace' => "Sinukatan ti linaon iti '$1'",
'autoredircomment' => 'Naibaw-ing ti panid iti [[$1]]',
'autosumm-new' => 'Pinartuat ti panid iti "$1"',

# Live preview
'livepreview-loading' => 'Maikarkarga…',
'livepreview-ready' => 'Maikarkarga… Agsagana!',
'livepreview-failed' => 'Napaay ti agdama a panagipadas! 
Padasem ti kadawyan a panagipadas.',
'livepreview-error' => 'Napaay a sumilpo: $1 "$2". Padasem ti normal a pinagpadas',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Dagiti panangbalbaliw a nabarbaro ngem $1 {{PLURAL:$1|a segundo|kadagiti segundo}} ket mabalin a saan a maiparang itoy a listaan.',
'lag-warn-high' => 'Gapu ti kinabuntog ti database server, dagiti nasukatan a barbaro ngem $1 {{PLURAL:$1|a segundo|kadagiti segundo}} ket mabalin a saan nga agparang ditoy a listaan.',

# Watchlist editor
'watchlistedit-numitems' => 'Addaan ti listaan ti bambantayam  {{PLURAL:$1|iti1 a titulo|kadagiti $1 a titulo}}, a di mairaman dagiti patungtungan a panid.',
'watchlistedit-noitems' => 'Ti listaan ti banbantayam ket saan a naglaon kadagiti titulo.',
'watchlistedit-normal-title' => 'Urnosem ti listaan ti bambantayan',
'watchlistedit-normal-legend' => 'Ikkaten dagiti titulo manipud ti listaan ti bambantayam',
'watchlistedit-normal-explain' => 'Dagiti titulo ti listaan ti bambantayam ket naipakita dita baba.
Ti mangikkat ti titulo, ikur-it ti kaaripingna a kahon, ken agtakla ti "{{int:Watchlistedit-normal-submit}}".
Mabalinmo pay nga [[Special:EditWatchlist/raw|urnosen ti kilaw a listaan]].',
'watchlistedit-normal-submit' => 'Ikkaten dagiti titulo',
'watchlistedit-normal-done' => '{{PLURAL:$1|1 ti titulo a|$1 dagiti titulo a}} naikkat iti listaan ti bambantayam:',
'watchlistedit-raw-title' => 'Urnosen ti kilaw a listaan ti bambantayan',
'watchlistedit-raw-legend' => 'Urnosen ti kilaw a listaan ti bambantayan',
'watchlistedit-raw-explain' => 'Dagiti titulo ti listaan ti bambantayam ket naipakita dita baba, ken mabaliwam nga urnosen babaen ti panagnayon ken panagkissay manipud ti listaan;
maysa a titulo tunggal maysa a linia.
No malpaska, itakla ti "{{int:Watchlistedit-raw-submit}}".
Mabalinmo pay nga [[Special:EditWatchlist|usaren ti dati a panagurnos]].',
'watchlistedit-raw-titles' => 'Dagiti titulo:',
'watchlistedit-raw-submit' => 'Pabaruen ti listaan ti bambantayan',
'watchlistedit-raw-done' => 'Napabaro ti listaan ti bambantayam.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 a titulo ti|dagiti $1 a titulo ti}} nainayon:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 a titulo ti|dagiti $1 dagiti titulo ti}} naikkat:',

# Watchlist editing tools
'watchlisttools-view' => 'Kitaen dagiti maitunos a sinukatan',
'watchlisttools-edit' => 'Kitaen ken urnosen ti listaan ti bambantayan',
'watchlisttools-raw' => 'Urnosen ti kilaw a listaan ti bambantayan',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|tungtungan]])',

# Core parser functions
'unknown_extension_tag' => 'Di ammo a pagpaatiddog nga etiketa "$1"',
'duplicate-defaultsort' => '\'\'\'Ballaag:\'\'\' Kinasigud a panagilasin ti "$2" ket sukatanna ti immuna a kinasigud a panagilasin "$1".',

# Special:Version
'version' => 'Bersion',
'version-extensions' => 'Dagiti naisaad a pagpaatiddog',
'version-specialpages' => 'Espesial a pampanid',
'version-parserhooks' => 'Dagiti parser a kawit',
'version-variables' => 'Nadumaduma a kita',
'version-antispam' => 'Pawilan ti spam',
'version-skins' => 'Dagiti Kudil',
'version-other' => 'Sabali',
'version-mediahandlers' => 'Agtengtengngel kadagiti midia',
'version-hooks' => 'Dagiti kawit',
'version-parser-extensiontags' => 'Dagiti parser a pagpaatiddog nga etiketa',
'version-parser-function-hooks' => 'Parser a pamay-an dagiti kawit',
'version-hook-name' => 'Nagan ti kawit',
'version-hook-subscribedby' => 'Umanamong babaen ti',
'version-version' => '($1)',
'version-license' => 'Lisensia ti MediaWiki',
'version-ext-license' => 'Lisensia',
'version-ext-colheader-name' => 'Pagpaatiddog',
'version-ext-colheader-version' => 'Bersion',
'version-ext-colheader-license' => 'Lisensia',
'version-ext-colheader-description' => 'Deskripsion',
'version-ext-colheader-credits' => 'Dagiti mannurat',
'version-license-title' => 'Lisensia para iti $1',
'version-license-not-found' => 'Awan ti nabirukan a naisalaysay a pakaammo ti lisensia para iti daytoy a pagpaatiddog.',
'version-credits-title' => 'Dagiti pammadayaw para iti $1',
'version-credits-not-found' => 'Awan dagiti nabirukan a naisalaysay a pammadayaw para iti daytoy a pagpaatiddog.',
'version-poweredby-credits' => "Daytoy a wiki ket pinaandar ti '''[https://www.mediawiki.org/ MediaWiki]''', karbengan a kopia © 2001-$1 $2.",
'version-poweredby-others' => 'dadduma pay',
'version-poweredby-translators' => 'agipatpatarus ti translatewiki.net',
'version-credits-summary' => 'Kayatmi koma a pammadayawan dagiti sumaganad a tao para kadagiti inparawadda iti [[Special:Version|MediaWiki]].',
'version-license-info' => 'Ti MediaWiki ket nawaya a sopwer; maiwarasmo ken/wenno mabaliwam babaen ti banag iti GNU General Public License a naipablaak babaen ti Free Software Foundation; nupay iti bersion 2 iti Lisensia, wenno (ti panagpilim) ti  aniaman a bersion.

Ti MediaWiki ket naiwarwaras nga adda ti namnama a makatulong, ngem AWAN TI ANIA MAN A GARANTIA; nga awan pay ti naibagbaga a PANAKAILAKO wenno KALAINGAN NA ITI DAYTOY A PANGGEP. Kitaen ti GNU Sapasap a Publiko a Lisensia para kadagiti adu pay a salaysay.

Naka-awatka koman ti [{{SERVER}}{{SCRIPTPATH}}/COPYING kopia iti GNU Sapasap a  Publiko a Lisensia] a nairaman iti daytoy a programa; no saan, agsuratka idiay Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA wenno [//www.gnu.org/licenses/old-licenses/gpl-2.0.html basaem idiay online].',
'version-software' => 'Naisaad a sopwer',
'version-software-product' => 'Produkto',
'version-software-version' => 'Bersion',
'version-entrypoints' => 'Pagserrekan a puntos dagiti URL',
'version-entrypoints-header-entrypoint' => 'Pagserrekan a puntos',
'version-entrypoints-header-url' => 'URL',

# Special:Redirect
'redirect' => 'Ibaw-ing babaen ti papeles, agar-aramat, panid wenno ID ti panagbaliw',
'redirect-legend' => 'Ibaw-ing iti papeles wenno panid',
'redirect-summary' => 'Daytoy nga espesial a panid ket maibaw-ing iti papeles (iti nagan ti papeles), ti panid (iti ID wenno panid ti panagbaliw), wenno ti panid ti agar-aramat (iti numeriko nga ID ti agar-aramat). Panag-usar:
[[{{#Special:Redirect}}/file/Example.jpg]], 
[[{{#Special:Redirect}}/page/64308]], 
[[{{#Special:Redirect}}/revision/328429]], wenno
[[{{#Special:Redirect}}/user/101]].',
'redirect-submit' => 'Inkan',
'redirect-lookup' => 'Kitaen:',
'redirect-value' => 'Pateg:',
'redirect-user' => 'ID ti agar-aramat',
'redirect-page' => 'ID ti panid',
'redirect-revision' => 'Panagbaliw ti panid',
'redirect-file' => 'Nagan ti papeles',
'redirect-not-exists' => 'Saan a nabirukan ti pateg',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Agbiruk kadagiti duplikado a papeles',
'fileduplicatesearch-summary' => 'Agbiruk kadagiti duplikado a papeles a naibatay kadagiti "hash" a pateg.',
'fileduplicatesearch-legend' => 'Agsapul iti duplikado',
'fileduplicatesearch-filename' => 'Nagan ti papeles:',
'fileduplicatesearch-submit' => 'Biruken',
'fileduplicatesearch-info' => '$1 × $2 pixel<br />Rukod ti papeles: $3<br />Kita ti MIME: $4',
'fileduplicatesearch-result-1' => 'Awan ti kapadpadana a duplikado ti papeles a "$1".',
'fileduplicatesearch-result-n' => 'Ti papeles a "$1" ket addaan {{PLURAL:$2|1 nga agpadpada a duplikado|dagiti $2  nga agpadpada a duplikado}}.',
'fileduplicatesearch-noresults' => 'Awan ti nagan ti papeles a "$1" ti nabirukan.',

# Special:SpecialPages
'specialpages' => 'Espesial a pampanid',
'specialpages-note-top' => 'Leyenda',
'specialpages-note' => '* Kadawyan nga espesial a pampanid.
* <span class="mw-specialpagerestricted">Nagawidan nga espesial a pampanid.</span>',
'specialpages-group-maintenance' => 'Dagiti padamag ti panagtaripato',
'specialpages-group-other' => 'Sabsabali pay nga espesial a pampanid',
'specialpages-group-login' => 'Sumrek / agaramid ti pakabilangan',
'specialpages-group-changes' => 'Kaudian a sinukatan ken listaan',
'specialpages-group-media' => 'Dagiti padamag ti midia ken panag-ipan',
'specialpages-group-users' => 'Dagiti agar-aramat ken karkarbengan',
'specialpages-group-highuse' => 'Adu ti pannaka-usar a pampanid',
'specialpages-group-pages' => 'Listaan dagiti panid',
'specialpages-group-pagetools' => 'Ramramit ti panid',
'specialpages-group-wiki' => 'Datos ken ramramit',
'specialpages-group-redirects' => 'Panangibaw-ing kadagiti espesial a pampanid',
'specialpages-group-spam' => 'Ramramit ti spam',

# Special:BlankPage
'blankpage' => 'Blanko a panid',
'intentionallyblankpage' => 'Daytoy a panid  ket naigagara a blanko.',

# External image whitelist
'external_image_whitelist' => ' #Baybayan daytoy a linia a kastoy<pre>
#Ikabil ti "regular expression fragments" (idiay laeng paset nga ikabil ti tengnga ti  //) dita baba
#Dagitoy ipada na ti URLs ti ruar (ti napudot a naikapet) imahen 
#Dagiti agpada ket agparang nga  imahen, ket no saan ti panilpo ti imahen ti agparang laeng
#Dagiti linia nga umuna iti # ket maipabalin a komentario
#Daytoy ket "sensetibo ti kadakkel ti letra"

#Ikabil dagita "regex fragment" ti ngato daytoy a linia. Baybay-an a kastoy daytoy a linia</pre>',

# Special:Tags
'tags' => 'Umisu a sukatan dagiti etiketa',
'tag-filter' => '[[Special:Tags|Ti etiketa]] a sagat:',
'tag-filter-submit' => 'Sagat',
'tag-list-wrapper' => '([[Special:Tags|{{PLURAL:$1|Etiketa|Et-etiketa}}]]: $2)',
'tags-title' => 'Dagiti etiketa',
'tags-intro' => 'Daytoy a panid ket ilistana dagiti etiketa nga usaren ti sopwer nga agmarka ti panag-urnos, ken dagiti kaibuksilanda.',
'tags-tag' => 'Nagan ti etiketa',
'tags-display-header' => 'Tabas dagiti listaan ti panagsukat',
'tags-description-header' => 'Napno a panangipalpalawag iti kayatna a saoen.',
'tags-active-header' => 'Aktibo?',
'tags-hitcount-header' => 'Dagiti etiketa a sinukatan',
'tags-active-yes' => 'Wen',
'tags-active-no' => 'Saan',
'tags-edit' => 'urnosen',
'tags-hitcount' => '$1 {{PLURAL:$1|a sinukatan|kadagiti sinukatan}}',

# Special:ComparePages
'comparepages' => 'Ipada dagiti panid',
'compare-page1' => 'Panid 1',
'compare-page2' => 'Panid 2',
'compare-rev1' => 'Panagbaliw 1',
'compare-rev2' => 'Panagbaliw 2',
'compare-submit' => 'Ipada',
'compare-invalid-title' => 'Ti titulo nga intedmo ket imbalido.',
'compare-title-not-exists' => 'Awan met dayta titulo a nainaganam.',
'compare-revision-not-exists' => 'Awan met ti pinagbaliw dayta titulo a nainaganam.',

# Database error messages
'dberr-header' => 'Adda ti pakirutna daytoy a wiki',
'dberr-problems' => 'Pasensian a! Daytoy a pagsaadan ket agdadama ti teknikal a pagrigrigatan.',
'dberr-again' => 'Padasem ti agururay to manu a minutos ken agikarga.',
'dberr-info' => '(Saan a makontak ti database server: $1)',
'dberr-info-hidden' => '(Saan a makontak ti database server)',
'dberr-usegoogle' => 'Padasem  ti agbiruk idiay Google tatta.',
'dberr-outofdate' => 'Palagip a dagiti listaan da kadagiti kukuami a nagyan ket baka nagpaso.',
'dberr-cachederror' => 'Daytoy ket naidulin a kopia ti kiniddawmo a panid, ken mabalin a saan a kabarbaro.',

# HTML forms
'htmlform-invalid-input' => 'Adda pakirut kadagiti inkabilmo',
'htmlform-select-badoption' => 'Ti kuwenta a nainaganam ket saan a mabalin a pagpilian.',
'htmlform-int-invalid' => 'Ti kuwenta a nainaganam ket saan a sibubukel.',
'htmlform-float-invalid' => 'Ti kuwenta a nainaganam ket saan a numero.',
'htmlform-int-toolow' => 'Ti kuwenta a nainaganam ket baba ti mabalin a kababaan ti $1',
'htmlform-int-toohigh' => 'Ti kuwenta a nainaganam ket ngato ti mabalin a kangatuan ti $1',
'htmlform-required' => 'Masapul daytoy a kuwenta',
'htmlform-submit' => 'Ited',
'htmlform-reset' => 'Ibabawi ti sinukatan',
'htmlform-selectorother-other' => 'Sabali',
'htmlform-no' => 'Saan',
'htmlform-yes' => 'Wen',
'htmlform-chosen-placeholder' => 'Agpili ti pagpilian',

# SQLite database support
'sqlite-has-fts' => '$1 adda ti suporta ti napno a testo ti panagbiruk',
'sqlite-no-fts' => '$1 awan ti suporta ti napno a testo ti panagbiruk',

# New logging system
'logentry-delete-delete' => 'Ni $1 ket {{GENDER:$2|inikkatna}} ti panid ti $3',
'logentry-delete-restore' => 'Ni $1 ket {{GENDER:$2|insublina}} ti panid ti $3',
'logentry-delete-event' => 'Ni $1 ket {{GENDER:$2|binaliwanna}} ti panagkita {{PLURAL:$5|iti listaan ti pasamak |dagiti $5 a listaan ti pasamak }} iti $3: $4',
'logentry-delete-revision' => 'Ni $1 ket {{GENDER:$2|binaliwanna}} ti panagkita  {{PLURAL:$5|iti panagbaliw |dagiti $5 a panagbaliw}} iti panid $3: $4',
'logentry-delete-event-legacy' => 'Ni $1 ket {{GENDER:$2|binaliwanna}} ti panagkita ti listaan dagiti pasamak idiay $3',
'logentry-delete-revision-legacy' => 'Ni $1 ket {{GENDER:$2|binaliwanna}} ti panagkita dagiti panagbaliw idiay panid $3',
'logentry-suppress-delete' => 'Ni $1 ket {{GENDER:$2|pinasardengna}} ti panid ti $3',
'logentry-suppress-event' => 'Ni $1 ket sekreto a {{GENDER:$2|binaliwanna}} ti panagkita {{PLURAL:$5|iti listaan ti pasamak |dagiti $5 a listaan ti pasamak }} iti $3: $4',
'logentry-suppress-revision' => 'Ni $1 ket sekreto a {{GENDER:$2|binaliwanna}} ti panagkita {{PLURAL:$5|iti panagbaliw |dagiti $5 a panagbaliw}} iti panid $3: $4',
'logentry-suppress-event-legacy' => 'Ni $1 ket sekreto a {{GENDER:$2|binaliwanna}} ti panagkita ti listaan dagiti pasamak idiay $3',
'logentry-suppress-revision-legacy' => 'Ni $1 ket sekreto a {{GENDER:$2|binaliwanna}} ti panagkita dagiti panagbaliw idiay panid $3',
'revdelete-content-hid' => 'nailemmeng ti nagyanna',
'revdelete-summary-hid' => 'nailemmeng ti pakabuklan a naurnos',
'revdelete-uname-hid' => 'nailemmeng ti nagan ti agar-aramat',
'revdelete-content-unhid' => 'saan a nailemmeng ti nagyanna',
'revdelete-summary-unhid' => 'saan a nailemmeng ti  pakabuklan a naurnos',
'revdelete-uname-unhid' => 'saan a nailemmeng ti nagan ti agar-aramat',
'revdelete-restricted' => 'naipakat dagiti pammarit kadagiti administrador',
'revdelete-unrestricted' => 'naikkat dagiti pammarit para kadagiti administrador',
'logentry-move-move' => 'Ni $1 ket {{GENDER:$2|inyalisna}} ti panid $3 idiay $4',
'logentry-move-move-noredirect' => 'Ni $1 ket {{GENDER:$2|inyalisna}} ti panid ti $3 idiay $4 a saan a nangibati ti baw-ing',
'logentry-move-move_redir' => 'Ni $1 ket {{GENDER:$2|inyalisna}} ti panid ti $3 idiay $4 nga adda iti maysa a baw-ing',
'logentry-move-move_redir-noredirect' => 'Ni $1 ket {{GENDER:$2|inyalisna}} ti panid ti $3 idiay $4 nga adda iti maysa a baw-ing a saan a nangibati ti baw-ing',
'logentry-patrol-patrol' => 'Ni $1 ket {{GENDER:$2|minarkaanna}} ti panagbaliw a $4 ti panid ti $3 a napatruliaan',
'logentry-patrol-patrol-auto' => 'Ni $1 ket automatiko a {{GENDER:$2|minarkaanna}} ti panagbaliw a $4 ti panid ti $3 a napatruliaan',
'logentry-newusers-newusers' => 'Ti pakabilangan idi ni $1 ket {{GENDER:$2|napartuat}}',
'logentry-newusers-create' => 'Ti pakabilangan idi ni $1 ket {{GENDER:$2|napartuat}}',
'logentry-newusers-create2' => 'Ti pakabilangan ti agar-aramat $3 ket {{GENDER:$2|napartuat}} idi babaen ni $1',
'logentry-newusers-byemail' => 'Ti pakabilangan a $3 ket {{GENDER:$2|pinartuat}} idi babaen ni $1 ken ti kontrasenias ket naipatulod idi babaen ti esurat',
'logentry-newusers-autocreate' => 'Ti pakabilangan ti agar-aramat ni $1 ket automatiko a {{GENDER:$2|napartuat}}',
'logentry-rights-rights' => 'Ni $1 ket {{GENDER:$2|binaliwanna}} ti grupo a pannakaikameng para kenni $3 manipud ti $4 iti $5',
'logentry-rights-rights-legacy' => 'Ni $1 ket {{GENDER:$2|binaliwanna}} ti grupo a pannakaikameng para kenni $3',
'logentry-rights-autopromote' => 'Ni $1 ket automatiko idi a {{GENDER:$2|naipangato}} manipud ti $4 iti $5',
'rightsnone' => '(awan)',

# Feedback
'feedback-bugornote' => 'No agsagana kan nga agibaga ti teknikal a pakirut a naisalaysay pangngaasi nga [$1 ireporta ti kiteb].
Nupay kasta, mau-sarmo ti nakabuklan dita baba. Ti komentario nga itedmo ket mainayon iti panid "[$3 $2], a mairaman ti naganmo nga agar-aramat ken no ania ti pagbasabasa nga us-sarem.',
'feedback-subject' => 'Suheto:',
'feedback-message' => 'Mensahe:',
'feedback-cancel' => 'Ukasen',
'feedback-submit' => 'Agited ti Pagipagarupan',
'feedback-adding' => 'Agnaynayon ti pagipagarupan iti panid...',
'feedback-error1' => 'Biddut: Saan a malasin dagiti nagbanagan manipud iti API',
'feedback-error2' => 'Biddut: Napaay ti panagurnos',
'feedback-error3' => 'Biddut: Awan ti sungbat manipud iti API',
'feedback-thanks' => 'Agyaman! Ti panangparupaam ket naipablaak iti panid "[$2 $1]".',
'feedback-close' => 'Nalpasen',
'feedback-bugcheck' => 'Nasayaaten! Kitaem tapno saan a dagiti adda idin a [$1 nga amammo a kitkiteb].',
'feedback-bugnew' => 'Kinitak. Ireporta ti baro a kiteb',

# Search suggestions
'searchsuggest-search' => 'Biruken',
'searchsuggest-containing' => 'naglaon ti...',

# API errors
'api-error-badaccess-groups' => 'Saanmo a mabalin ti agipan kadagiti papeles iti daytoy a wiki.',
'api-error-badtoken' => 'Kinauneg a biddut: Dakes a tandaan.',
'api-error-copyuploaddisabled' => 'Ti mangipan babaen ti URL ket nabaldado ditoy a server.',
'api-error-duplicate' => 'Adda {{PLURAL:$1|ket [$2 a sabali a papeles] |dagiti [$2 sabsabali a papeles]}} nga addan ditoy a pagsaadan nga agpada ti nagyanda.',
'api-error-duplicate-archive' => 'Adda {{PLURAL:$1|idi [$2 sabali a papeles]|dagidi [$2 sabali a papeles]}} nga adda ditoy a pagsaadan nga agpada ti nagyan da, ngem {{PLURAL:$1|daytoy|dagitoy}} ket naikkat.',
'api-error-duplicate-archive-popup-title' => 'Duplikado {{PLURAL:$1|ti papeles|dagiti papeles}} a naikkaten.',
'api-error-duplicate-popup-title' => 'Duplikado {{PLURAL:$1|ti papeles|dagiti papeles}}.',
'api-error-empty-file' => 'Ti papeles nga intedmo ket awan ti nagyanna.',
'api-error-emptypage' => 'Agar-aramid ti baro, dagiti awan ti linaonna a panid ket saan a maipalubos.',
'api-error-fetchfileerror' => 'Kinauneg a biddut: Addaan ti dakes a napasamak idi agalala ti papeles.',
'api-error-fileexists-forbidden' => 'Ti papeles nga agnagan ti "$1" ket addan, ken saan a mabalin a masuratan manen.',
'api-error-fileexists-shared-forbidden' => 'Ti papeles nga agnagan ti "$1" ket adda idiay pagbibingayan a repositorio ti papeles, ken saan a mabalin a masuratan manen.',
'api-error-file-too-large' => 'Ti papeles nga intedmo ket dakkel unay.',
'api-error-filename-tooshort' => 'Ti nagan daytoy a papeles ket bassit unay.',
'api-error-filetype-banned' => 'Ti kita daytoy a papeles ket maiparit.',
'api-error-filetype-banned-type' => 'Ti $1 {{PLURAL:$4|ket saan a mapalubusan a kita ti papeles|ket dagiti saan a mapalubusan a kita ti papeles}}. Ti mapalubusan {{PLURAL:$3|a kita ti papeles ket|kadagiti kita ti papeles ket}} $2.',
'api-error-filetype-missing' => 'Ti papeles ket agkurang ti pagpa-atiddog.',
'api-error-hookaborted' => 'Ti panagbabaro a pinadasmo ket napasardeng iti pangpa-atiddog a kawit.',
'api-error-http' => 'Kinauneg a biddut: Saan a makaikabit idiay server.',
'api-error-illegal-filename' => 'Ti nagan daytoy a papeles ket saan a maipalubos.',
'api-error-internal-error' => 'Kinauneg a biddut: Addaan ti dakes a napasamak ti panagaramid ti panagipanmo iti daytoy a wiki.',
'api-error-invalid-file-key' => 'Kinauneg a biddut: Saan a nabirukan ti papeles idiay temporario a nagidulinan.',
'api-error-missingparam' => 'Kinauneg a biddut: Kurang dagiti parametro iti kiddaw.',
'api-error-missingresult' => 'Kinauneg a biddut: Saan a na-ammoan no ti kopia ket nagballigi.',
'api-error-mustbeloggedin' => 'Masapul a nakastrek ka tapno makaipan ka kadagiti papeles.',
'api-error-mustbeposted' => 'Kinauneg a biddut: Ti kiddaw ket masapul ti HTTP POST.',
'api-error-noimageinfo' => 'Balligi ti panag-ipan, ngem ti server ket saan a nagited kadakami ti pakaammo a maipanggep iti daytoy a papeles.',
'api-error-nomodule' => 'Kinauneg a biddut: Awan ti panagipan a modulo a disso.',
'api-error-ok-but-empty' => 'Kinauneg a biddut: Awan ti sungbat manipud idiay server.',
'api-error-overwrite' => 'Saan a mabalin a suratan manen iti papeles nga adda ditan.',
'api-error-stashfailed' => 'Kinauneg a biddut: Napaay ti server ti agidulin ti temporario a papeles',
'api-error-publishfailed' => 'Kinauneg a biddut: Napaay ti server a nagipablaak ti temporario a papeles.',
'api-error-stasherror' => 'Adda maysa a biddut bayat nga agikarkarga ti papeles iti stash.',
'api-error-timeout' => 'Saan a simmungbat ti server iti nanamnama nga oras.',
'api-error-unclassified' => 'Adda di amammo a biddut a rumsua.',
'api-error-unknown-code' => 'Di am-ammo a biddut: "$1".',
'api-error-unknown-error' => 'Kinauneg a biddut: Addaan ti dakes a napasamak idi nagipadaska ti agipan ti papelesmo.',
'api-error-unknown-warning' => 'Di am-ammo a ballaag: "$1".',
'api-error-unknownerror' => 'Di am-ammo a biddut: "$1".',
'api-error-uploaddisabled' => 'Nabaldado ti mangipapan iti daytoy a wiki.',
'api-error-verification-error' => 'Dakes ngata daytoy a papeles, wenno addaan ti madi a pagpa-atiddog.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|segundo|seg-segundo}}',
'duration-minutes' => '$1 {{PLURAL:$1|minuto|min-minuto}}',
'duration-hours' => '$1 {{PLURAL:$1|oras|or-oras}}',
'duration-days' => '$1 {{PLURAL:$1|aldaw|al-aldaw}}',
'duration-weeks' => '$1 {{PLURAL:$1|lawas|law-lawas}}',
'duration-years' => '$1 {{PLURAL:$1|tawen|taw-tawen}}',
'duration-decades' => '$1 {{PLURAL:$1|dekada|dek-dekada}}',
'duration-centuries' => '$1 {{PLURAL:$1|siglo|sig-siglo}}',
'duration-millennia' => '$1 {{PLURAL:$1|milenio|mil-milenio}}',

# Image rotation
'rotate-comment' => 'Ti ladawan ket napusipos babaen ti $1 {{PLURAL:$1|a degrado|a degdegrado}} nga agpakanawan',

# Limit report
'limitreport-title' => 'Panagbariweswes a datos ti parser:',
'limitreport-cputime' => 'Panagusar nga oras ti CPU',
'limitreport-cputime-value' => '$1 {{PLURAL:$1|segundo|seg-segundo}}',
'limitreport-walltime' => 'Pudno nga oras a panagusar',
'limitreport-walltime-value' => '$1 {{PLURAL:$1|segundo|seg-segundo}}',
'limitreport-ppvisitednodes' => 'Nabisita a bilang ti nodo ti preproseso',
'limitreport-ppgeneratednodes' => 'Napataud a bilang ti nodo ti preproseso',
'limitreport-postexpandincludesize' => 'Pannakairaman a kadakkel ti kalpasan a panagpadakkel',
'limitreport-postexpandincludesize-value' => '$1/$2 {{PLURAL:$2|a byte|kadagiti byte}}',
'limitreport-templateargumentsize' => 'Argumento a kadakkel ti plantilia',
'limitreport-templateargumentsize-value' => '$1/$2 {{PLURAL:$2|a byte|kadagiti byte}}',
'limitreport-expansiondepth' => 'Kangatuan a panagpadakkel ti kauneg',
'limitreport-expensivefunctioncount' => 'Bilang ti nangina nga annong ti parser',

# Special:ExpandTemplates
'expandtemplates' => 'Palawaen dagiti plantilia',
'expand_templates_intro' => 'Daytoy nga espesial a panid ket agala ti testo ken palawaenna amin dagiti plantilia iti unegna a minaig iti daytoy.
Palawaenna pay dagiti nasuportaran a parser a pamay-an a kas ti
<code><nowiki>{{</nowiki>#language:…}}</code> ken dagiti nadumaduma a kita a kas ti
<code><nowiki>{{</nowiki>CURRENTDAY}}</code>. 
Iti kinapudno, palawaenna amin dagiti adda ti doble a tukol.',
'expand_templates_title' => 'Titulo ti kontesto, para iti {{FULLPAGENAME}} kdpy.:',
'expand_templates_input' => 'Maikabil a testo:',
'expand_templates_output' => 'Nagbanagan',
'expand_templates_xml_output' => 'XML a maiparang',
'expand_templates_html_output' => 'Naata a maiparuar a HTML',
'expand_templates_ok' => 'OK',
'expand_templates_remove_comments' => 'Ikkaten dagiti komentario',
'expand_templates_remove_nowiki' => 'Parmeken dagiti <nowiki> nga etiketa kadagiti nagbanagan',
'expand_templates_generate_xml' => 'Iparang ti XML parse a kayo',
'expand_templates_generate_rawhtml' => 'Ipakita ti naata a HTML',
'expand_templates_preview' => 'Pamadasan',

);
