<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

$string['modulename'] = 'Contingut interactiu';
$string['modulename_help'] = 'El mòdul d\'activitat H5P us permet crear continguts com ara vídeos interactius, qüestionaris, activitats d\'arrossegar i deixar anar, preguntes de resposta múltiple, presentacions i molt més.

A més de tractar-se d\'una eina d\'autor per a contingut enriquit, l\'H5P us permet importar i exportar fitxers H5P, facilitant així que les activitats es puguin reutilitzar i compartir d\'una manera fàcil.

El mòdul fa un seguiment mitjançant xAPI de la interacció amb els usuaris i les puntuacions obtingudes, que queden enregistrades al mòdul de qualificacions de Moodle.

Podeu afegir contingut interactiu H5P creant-lo amb l\'eina d\'autor o bé carregant fitxers H5P generats en altres plataformes compatibles.';
$string['modulename_link'] = 'https://h5p.org/moodle-more-help';
$string['modulenameplural'] = 'Contingut interactiu';
$string['pluginadministration'] = 'H5P';
$string['pluginname'] = 'H5P';
$string['intro'] = 'Introducció';
$string['h5pfile'] = 'Fitxer H5P';
$string['fullscreen'] = 'Pantalla completa';
$string['disablefullscreen'] = 'Desactiva la pantalla completa';
$string['download'] = 'Baixa-ho';
$string['copyright'] = 'Drets d\'ús';
$string['embed'] = 'Incrusta';
$string['showadvanced'] = 'Mostra les opcions avançades';
$string['hideadvanced'] = 'Amaga les opcions avançades';
$string['resizescript'] = 'Inseriu aquest script al vostre lloc web si voleu que el contingut incrustat s\'ajusti dinàmicament a la mida disponible:';
$string['size'] = 'Mida';
$string['close'] = 'Tanca';
$string['title'] = 'Títol';
$string['author'] = 'Autor';
$string['year'] = 'Any';
$string['source'] = 'Font';
$string['license'] = 'Llicència';
$string['thumbnail'] = 'Miniatura';
$string['nocopyright'] = 'No hi ha informació de copyright disponible per a aquest contingut.';
$string['downloadtitle'] = 'Baixa aquest contingut en un fitxer H5P.';
$string['copyrighttitle'] = 'Mostra la informació de copyright per a aquest contingut.';
$string['embedtitle'] = 'Mostra el codi d\'incrustació per a aquest contingut.';
$string['h5ptitle'] = 'Visiteu H5P.org per trobar més continguts interessants.';
$string['contentchanged'] = 'Aquest contingut ha canviat des de la darrera vegada que el vau utilitzar.';
$string['startingover'] = "Haureu de tornar a començar.";
$string['confirmdialogheader'] = 'Confirmeu l\'acció';
$string['confirmdialogbody'] = 'Si us plau, confirmeu que realment voleu fer-ho. Aquesta acció no és reversible.';
$string['cancellabel'] = 'Cancel·la';
$string['confirmlabel'] = 'Confirma';
$string['noh5ps'] = 'No hi ha cap contingut interactiu en aquest curs.';

$string['lookforupdates'] = 'Cerca actualitzacions de l\'H5P';
$string['updatelibraries'] = 'Actualitza totes les biblioteques';
$string['removetmpfiles'] = 'Elimina els fitxers temporals antics de l\'H5P';
$string['removeoldlogentries'] = 'Elimina les entrades de registre antigues de l\'H5P';

// Admin settings.
$string['displayoptionnevershow'] = 'No ho mostris mai';
$string['displayoptionalwaysshow'] = 'Mostra-ho sempre';
$string['displayoptionpermissions'] = 'Mostra-ho només si l\'usuari té permís per exportar continguts H5P';
$string['displayoptionauthoron'] = 'Controlat per l\'autor, activat per defecte';
$string['displayoptionauthoroff'] = 'Controlat per l\'autor, desactivat per defecte';
$string['displayoptions'] = 'Opcions de visualització';
$string['enableframe'] = 'Mostra la barra d\'accions i el marc';
$string['enabledownload'] = 'Botó de baixades';
$string['enableembed'] = 'Botó incrustat';
$string['enablecopyright'] = 'Botó de Copyright';
$string['enableabout'] = 'Botó "Quant a l\'H5P"';
$string['hubsettingsheader'] = 'Tipus de contingut';
$string['enablehublabel'] = 'Ús de l\'"H5P Hub"';
$string['disablehubdescription'] = "It's strongly encouraged to keep this option enabled. The H5P Hub provides an easy interface for getting new content types and keeping existing content types up to date. In the future, it will also make it easier to share and reuse content. If this option is disabled you'll have to install and update content types through file upload forms.";
$string['empty'] = 'Empty';
$string['reveal'] = 'Reveal';
$string['hide'] = 'Hide';
$string['sitekey'] = 'Site Key';
$string['sitekeydescription'] = 'The site key is a secret that uniquely identifies this site with the Hub.';

$string['sendusagestatistics'] = 'Contribute usage statistics';
$string['sendusagestatistics_help'] = 'Usage statistics numbers will automatically be reported to help the developers better understand how H5P is used and to determine potential areas of improvement.';
$string['enablesavecontentstate'] = 'Save content state';
$string['enablesavecontentstate_help'] = 'Automatically save the current state of interactive content for each user. This means that the user may pick up where he left off.';
$string['contentstatefrequency'] = 'Save content state frequency';
$string['contentstatefrequency_help'] = 'In seconds, how often do you wish the user to auto save their progress. Increase this number if you\'re having issues with many ajax requests';
$string['enabledlrscontenttypes'] = 'Enable LRS dependent content types';
$string['enabledlrscontenttypes_help'] = 'Makes it possible to use content types that rely upon a Learning Record Store to function properly, like the Questionnaire content type.';

// Admin menu.
$string['contenttypecacheheader'] = 'Content Type Cache';
$string['settings'] = 'H5P Settings';
$string['libraries'] = 'H5P Libraries';

// Content type cache section.
$string['ctcacheconnectionfailed'] = "Couldn't communicate with the H5P Hub. Please try again later.";
$string['ctcachenolibraries'] = 'No content types were received from the H5P Hub. Please try again later.';
$string['ctcachesuccess'] = 'Library cache was successfully updated!';
$string['ctcachelastupdatelabel'] = 'Last update';
$string['ctcachebuttonlabel'] = 'Update content type cache';
$string['ctcacheneverupdated'] = 'Never';
$string['ctcachetaskname'] = 'Update content type cache';
$string['ctcachedescription'] = 'Making sure the content type cache is up to date will ensure that you can view, download and use the latest libraries. This is different from updating the libraries themselves.';

// Upload libraries section.
$string['uploadlibraries'] = 'Upload Libraries';
$string['options'] = 'Options';
$string['onlyupdate'] = 'Only update existing libraries';
$string['disablefileextensioncheck'] = 'Disable file extension check';
$string['disablefileextensioncheckwarning'] = "Warning! Disabling the file extension check may have security implications as it allows for uploading of php files. That in turn could make it possible for attackers to execute malicious code on your site. Please make sure you know exactly what you're uploading.";
$string['upload'] = 'Upload';

// Installed libraries section.
$string['installedlibraries'] = 'Installed Libraries';
$string['invalidtoken'] = 'Invalid security token.';
$string['missingparameters'] = 'Missing parameters';
$string['nocontenttype'] = 'No content type was specified.';
$string['invalidcontenttype'] = 'The chosen content type is invalid.';
$string['installdenied'] = 'You do not have permission to install content types. Contact the administrator of your site.';
$string['downloadfailed'] = 'Downloading the requested library failed.';
$string['validationfailed'] = 'The requested H5P was not valid';
$string['validatingh5pfailed'] = 'Validating h5p package failed.';

// H5P library list headers on admin page.
$string['librarylisttitle'] = 'Title';
$string['librarylistrestricted'] = 'Restricted';
$string['librarylistinstances'] = 'Instances';
$string['librarylistinstancedependencies'] = 'Instance dependencies';
$string['librarylistlibrarydependencies'] = 'Library dependencies';
$string['librarylistactions'] = 'Actions';

// H5P library page labels.
$string['addlibraries'] = 'Add libraries';
$string['installedlibraries'] = 'Installed libraries';
$string['notapplicable'] = 'N/A';
$string['upgradelibrarycontent'] = 'Upgrade library content';

// Upgrade H5P content page.
$string['upgrade'] = 'Upgrade H5P';
$string['upgradeheading'] = 'Upgrade {$a} content';
$string['upgradenoavailableupgrades'] = 'There are no available upgrades for this library.';
$string['enablejavascript'] = 'Please enable JavaScript.';
$string['upgrademessage'] = 'You are about to upgrade {$a} content instance(s). Please select upgrade version.';
$string['upgradeinprogress'] = 'Upgrading to %ver...';
$string['upgradeerror'] = 'An error occurred while processing parameters:';
$string['upgradeerrordata'] = 'Could not load data for library %lib.';
$string['upgradeerrorscript'] = 'Could not load upgrades script for %lib.';
$string['upgradeerrorcontent'] = 'Could not upgrade content %id:';
$string['upgradeerrorparamsbroken'] = 'Parameters are broken.';
$string['upgradedone'] = 'You have successfully upgraded {$a} content instance(s).';
$string['upgradereturn'] = 'Return';
$string['upgradenothingtodo'] = "There's no content instances to upgrade.";
$string['upgradebuttonlabel'] = 'Upgrade';
$string['upgradeinvalidtoken'] = 'Error: Invalid security token!';
$string['upgradelibrarymissing'] = 'Error: Your library is missing!';

// Results / report page.
$string['user'] = 'User';
$string['score'] = 'Score';
$string['maxscore'] = 'Maximum Score';
$string['finished'] = 'Finished';
$string['loadingdata'] = 'Loading data.';
$string['ajaxfailed'] = 'Failed to load data.';
$string['nodata'] = "There's no data available that matches your criteria.";
$string['currentpage'] = 'Page $current of $total';
$string['nextpage'] = 'Next page';
$string['previouspage'] = 'Previous page';
$string['search'] = 'Search';
$string['empty'] = 'No results available';
$string['viewreportlabel'] = 'Report';
$string['dataviewreportlabel'] = 'View Answers';
$string['invalidxapiresult'] = 'No xAPI results were found for the given content and user id combination';
$string['reportnotsupported'] = 'Not supported';
$string['reportingscorelabel'] = 'Score:';
$string['reportingscaledscorelabel'] = 'Gradebook score:';
$string['reportingscoredelimiter'] = 'out of';
$string['reportingscaledscoredelimiter'] = ',';

// Editor.
$string['javascriptloading'] = 'Waiting for JavaScript...';
$string['action'] = 'Action';
$string['upload'] = 'Upload';
$string['create'] = 'Create';
$string['editor'] = 'Editor';

$string['invalidlibrary'] = 'Invalid library';
$string['nosuchlibrary'] = 'No such library';
$string['noparameters'] = 'No parameters';
$string['invalidparameters'] = 'Invalid Parameters';
$string['missingcontentuserdata'] = 'Error: Could not find content user data';

$string['maximumgrade'] = 'Maximum grade';
$string['maximumgradeerror'] = 'Please enter a valid positive integer as the max points available for this activity';

// Capabilities.
$string['hvp:addinstance'] = 'Add a new H5P Activity';
$string['hvp:restrictlibraries'] = 'Restrict a H5P library';
$string['hvp:updatelibraries'] = 'Update the version of an H5P library';
$string['hvp:userestrictedlibraries'] = 'Use restricted H5P libraries';
$string['hvp:savecontentuserdata'] = 'Save H5P content user data';
$string['hvp:saveresults'] = 'Save result for H5P content';
$string['hvp:viewresults'] = 'View result for own questions in course';
$string['hvp:viewallresults'] = 'View result for all users in course';
$string['hvp:getcachedassets'] = 'Get cached H5P content assets';
$string['hvp:getcontent'] = 'Get/view content of H5P file in course';
$string['hvp:getexport'] = 'Get export file from H5P in course';
$string['hvp:installrecommendedh5plibraries'] = 'Install recommended H5P libraries';

// Capabilities error messages.
$string['nopermissiontoupgrade'] = 'You do not have permission to upgrade libraries.';
$string['nopermissiontorestrict'] = 'You do not have permission to restrict libraries.';
$string['nopermissiontosavecontentuserdata'] = 'You do not have permission to save content user data.';
$string['nopermissiontosaveresult'] = 'You do not have permission to save result for this content.';
$string['nopermissiontoviewresult'] = 'You do not have permission to view results for this content.';

// Editor translations.
$string['noziparchive'] = 'Your PHP version does not support ZipArchive.';
$string['noextension'] = 'The file you uploaded is not a valid HTML5 Package (It does not have the .h5p file extension)';
$string['nounzip'] = 'The file you uploaded is not a valid HTML5 Package (We are unable to unzip it)';
$string['noparse'] = 'Could not parse the main h5p.json file';
$string['nojson'] = 'The main h5p.json file is not valid';
$string['invalidcontentfolder'] = 'Invalid content folder';
$string['nocontent'] = 'Could not find or parse the content.json file';
$string['librarydirectoryerror'] = 'Library directory name must match machineName or machineName-majorVersion.minorVersion (from library.json). (Directory: {$a->%directoryName} , machineName: {$a->%machineName}, majorVersion: {$a->%majorVersion}, minorVersion: {$a->%minorVersion})';
$string['missingcontentfolder'] = 'A valid content folder is missing';
$string['invalidmainjson'] = 'A valid main h5p.json file is missing';
$string['missinglibrary'] = 'Missing required library {$a->@library}';
$string['missinguploadpermissions'] = "Note that the libraries may exist in the file you uploaded, but you're not allowed to upload new libraries. Contact the site administrator about this.";
$string['invalidlibraryname'] = 'Invalid library name: {$a->%name}';
$string['missinglibraryjson'] = 'Could not find library.json file with valid json format for library {$a->%name}';
$string['invalidsemanticsjson'] = 'Invalid semantics.json file has been included in the library {$a->%name}';
$string['invalidlanguagefile'] = 'Invalid language file {$a->%file} in library {$a->%library}';
$string['invalidlanguagefile2'] = 'Invalid language file {$a->%languageFile} has been included in the library {$a->%name}';
$string['missinglibraryfile'] = 'The file "{$a->%file}" is missing from library: "{$a->%name}"';
$string['missingcoreversion'] = 'The system was unable to install the <em>{$a->%component}</em> component from the package, it requires a newer version of the H5P plugin. This site is currently running version {$a->%current}, whereas the required version is {$a->%required} or higher. You should consider upgrading and then try again.';
$string['invalidlibrarydataboolean'] = 'Invalid data provided for {$a->%property} in {$a->%library}. Boolean expected.';
$string['invalidlibrarydata'] = 'Invalid data provided for {$a->%property} in {$a->%library}';
$string['invalidlibraryproperty'] = 'Can\'t read the property {$a->%property} in {$a->%library}';
$string['missinglibraryproperty'] = 'The required property {$a->%property} is missing from {$a->%library}';
$string['invalidlibraryoption'] = 'Illegal option {$a->%option} in {$a->%library}';
$string['addedandupdatelibraries'] = 'Added {$a->%new} new H5P libraries and updated {$a->%old} old.';
$string['addednewlibraries'] = 'Added {$a->%new} new H5P libraries.';
$string['updatedlibraries'] = 'Updated {$a->%old} H5P libraries.';
$string['missingdependency'] = 'Missing dependency {$a->@dep} required by {$a->@lib}.';
$string['invalidstring'] = 'Provided string is not valid according to regexp in semantics. (value: \"{$a->%value}\", regexp: \"{$a->%regexp}\")';
$string['invalidfile'] = 'File "{$a->%filename}" not allowed. Only files with the following extensions are allowed: {$a->%files-allowed}.';
$string['invalidmultiselectoption'] = 'Invalid selected option in multi-select.';
$string['invalidselectoption'] = 'Invalid selected option in select.';
$string['invalidsemanticstype'] = 'H5P internal error: unknown content type "{$a->@type}" in semantics. Removing content!';
$string['unabletocreatedir'] = 'Unable to create directory.';
$string['unabletogetfieldtype'] = 'Unable to get field type.';
$string['filetypenotallowed'] = 'File type isn\'t allowed.';
$string['invalidfieldtype'] = 'Invalid field type.';
$string['invalidimageformat'] = 'Invalid image file format. Use jpg, png or gif.';
$string['filenotimage'] = 'File is not an image.';
$string['invalidaudioformat'] = 'Invalid audio file format. Use mp3 or wav.';
$string['invalidvideoformat'] = 'Invalid video file format. Use mp4 or webm.';
$string['couldnotsave'] = 'Could not save file.';
$string['couldnotcopy'] = 'Could not copy file.';

// Welcome messages.
$string['welcomeheader'] = 'Welcome to the world of H5P!';
$string['welcomegettingstarted'] = 'To get started with H5P and Moodle take a look at our <a {$a->moodle_tutorial}>tutorial</a> and check out the <a {$a->example_content}>example content</a> at H5P.org for inspiration.';
$string['welcomecommunity'] = 'We hope you will enjoy H5P and get engaged in our growing community through our <a {$a->forums}>forums</a> and chat room <a {$a->gitter}>H5P at Gitter</a>';
$string['welcomecontactus'] = 'If you have any feedback, don\'t hesitate to <a {$a}>contact us</a>. We take feedback very seriously and are dedicated to making H5P better every day!';
$string['missingmbstring'] = 'The mbstring PHP extension is not loaded. H5P need this to function properly';
$string['wrongversion'] = 'The version of the H5P library {$a->%machineName} used in this content is not valid. Content contains {$a->%contentLibrary}, but it should be {$a->%semanticsLibrary}.';
$string['invalidlibrary'] = 'The H5P library {$a->%library} used in the content is not valid';

// Setup errors.
$string['oldphpversion'] = 'Your PHP version is outdated. H5P requires version 5.2 to function properly. Version 5.6 or later is recommended.';
$string['maxuploadsizetoosmall'] = 'Your PHP max upload size is quite small. With your current setup, you may not upload files larger than {$a->%number} MB. This might be a problem when trying to upload H5Ps, images and videos. Please consider to increase it to more than 5MB.';
$string['maxpostsizetoosmall'] = 'Your PHP max post size is quite small. With your current setup, you may not upload files larger than {$a->%number} MB. This might be a problem when trying to upload H5Ps, images and videos. Please consider to increase it to more than 5MB';
$string['sslnotenabled'] = 'Your server does not have SSL enabled. SSL should be enabled to ensure a secure connection with the H5P hub.';
$string['hubcommunicationdisabled'] = 'H5P hub communication has been disabled because one or more H5P requirements failed.';
$string['reviseserversetupandretry'] = 'When you have revised your server setup you may re-enable H5P hub communication in H5P Settings.';
$string['disablehubconfirmationmsg'] = 'Do you still want to enable the hub ?';
$string['nowriteaccess'] = 'A problem with the server write access was detected. Please make sure that your server can write to your data folder.';
$string['uploadsizelargerthanpostsize'] = 'Your PHP max upload size is bigger than your max post size. This is known to cause issues in some installations.';
$string['sitecouldnotberegistered'] = 'Site could not be registered with the hub. Please contact your site administrator.';
$string['hubisdisableduploadlibraries'] = 'The H5P Hub has been disabled until this problem can be resolved. You may still upload libraries through the "H5P Libraries" page.';
$string['successfullyregisteredwithhub'] = 'Your site was successfully registered with the H5P Hub.';
$string['sitekeyregistered'] = 'You have been provided a unique key that identifies you with the Hub when receiving new updates. The key is available for viewing in the "H5P Settings" page.';

// Ajax messages.
$string['hubisdisabled'] = 'The hub is disabled. You can re-enable it in the H5P settings.';
$string['invalidh5ppost'] = 'Could not get posted H5P.';
$string['filenotfoundonserver'] = 'File not found on server. Check file upload settings.';
$string['failedtodownloadh5p'] = 'Failed to download the requested H5P.';
$string['postmessagerequired'] = 'A post message is required to access the given endpoint';

// Licensing.
$string['copyrightinfo'] = 'Copyright information';
$string['years'] = 'Year(s)';
$string['undisclosed'] = 'Undisclosed';
$string['attribution'] = 'Attribution 4.0';
$string['attributionsa'] = 'Attribution-ShareAlike 4.0';
$string['attributionnd'] = 'Attribution-NoDerivs 4.0';
$string['attributionnc'] = 'Attribution-NonCommercial 4.0';
$string['attributionncsa'] = 'Attribution-NonCommercial-ShareAlike 4.0';
$string['attributionncnd'] = 'Attribution-NonCommercial-NoDerivs 4.0';
$string['gpl'] = 'General Public License v3';
$string['pd'] = 'Public Domain';
$string['pddl'] = 'Public Domain Dedication and Licence';
$string['pdm'] = 'Public Domain Mark';
$string['copyrightstring'] = 'Copyright';
$string['by'] = 'by';
$string['showmore'] = 'Show more';
$string['showless'] = 'Show less';
$string['sublevel'] = 'Sublevel';
$string['noversionattribution'] = 'Attribution';
$string['noversionattributionsa'] = 'Attribution-ShareAlike';
$string['noversionattributionnd'] = 'Attribution-NoDerivs';
$string['noversionattributionnc'] = 'Attribution-NonCommercial';
$string['noversionattributionncsa'] = 'Attribution-NonCommercial-ShareAlike';
$string['noversionattributionncnd'] = 'Attribution-NonCommercial-NoDerivs';
$string['licenseCC40'] = '4.0 International';
$string['licenseCC30'] = '3.0 Unported';
$string['licenseCC25'] = '2.5 Generic';
$string['licenseCC20'] = '2.0 Generic';
$string['licenseCC10'] = '1.0 Generic';
$string['licenseGPL'] = 'General Public License';
$string['licenseV3'] = 'Version 3';
$string['licenseV2'] = 'Version 2';
$string['licenseV1'] = 'Version 1';
$string['licenseCC010'] = 'CC0 1.0 Universal (CC0 1.0) Public Domain Dedication';
$string['licenseCC010U'] = 'CC0 1.0 Universal';
$string['licenseversion'] = 'License Version';
