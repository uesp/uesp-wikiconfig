<?php
# WARNING: This file is publically viewable on the web. Do not put private data here.
#
# This file contains extension includes and settings.
# It is included by LocalSettings.php.
#

#
# Keep this array updated as extensions are added or removed. It is currently only used when
# upgrading MediaWiki in order to automatically upgrade extensions as needed.
#
#   EXTENSION_DIRECTORY => VALUE,
#
$UESP_EXT_DEFAULT = 0;		// Included with the MW extension
$UESP_EXT_UPGRADE = 1;		// Upgrade with the uesp-getmwext script
$UESP_EXT_OTHER = 2;		// Needs a manual upgrade
$UESP_EXT_NONE = 3;			// Doesn't need an upgrade
$UESP_EXT_IGNORE = 4;		// Don't do anything

$UESP_SKIN_INFO = [
	"MinervaNeue" => $UESP_EXT_UPGRADE,
	"MonoBook" => $UESP_EXT_DEFAULT,
	"Vector" => $UESP_EXT_DEFAULT,
	"UespMonoBook" => $UESP_EXT_NONE,
	"UespVector" => $UESP_EXT_NONE,
];	

$UESP_EXTENSION_INFO = [
	"AbuseFilter" => $UESP_EXT_UPGRADE,
	"AntiSpoof" => $UESP_EXT_UPGRADE,
	"AudioButton" => $UESP_EXT_OTHER,
	"Backup" => $UESP_EXT_IGNORE,
	"CharInsert" => $UESP_EXT_UPGRADE,
	"CheckUser" => $UESP_EXT_UPGRADE,
	"CirrusSearch" => $UESP_EXT_UPGRADE,
	"Cite" => $UESP_EXT_DEFAULT,
	"CiteThisPage" => $UESP_EXT_DEFAULT,
	"CodeEditor" => $UESP_EXT_UPGRADE,
	"CodeMirror" => $UESP_EXT_UPGRADE,
	"ConfirmEdit" => $UESP_EXT_DEFAULT,
	"CSS" => $UESP_EXT_UPGRADE,
	"DaedricFont" => $UESP_EXT_NONE,
	"DailyEdits" => $UESP_EXT_NONE,
	"DeleteBatch" => $UESP_EXT_UPGRADE,
	"Description2" => $UESP_EXT_UPGRADE,
	"DisableAccount" => $UESP_EXT_UPGRADE,
	"Disambiguator" => $UESP_EXT_UPGRADE,
	"DismissableSiteNotice" => $UESP_EXT_UPGRADE,
	"DragonFont" => $UESP_EXT_NONE,
	"DwemerFont" => $UESP_EXT_NONE,
	"Editcount" => $UESP_EXT_NONE,
	"Elastica" => $UESP_EXT_UPGRADE,
	"EmbedVideo" => $UESP_EXT_OTHER,		//1.29
	"EsoCharData" => $UESP_EXT_NONE,
	"FakeGraph" => $UESP_EXT_NONE,
	"FalmerFont" => $UESP_EXT_NONE,
	"Gadgets" => $UESP_EXT_DEFAULT,
	"Graph" => $UESP_EXT_UPGRADE,
	"ImageMap" => $UESP_EXT_DEFAULT,
	"InputBox" => $UESP_EXT_DEFAULT,
	"Interwiki" => $UESP_EXT_DEFAULT,
	"JobQueue" => $UESP_EXT_NONE,
	"JsonConfig" => $UESP_EXT_UPGRADE,
	"LabeledSectionTransclusion" => $UESP_EXT_UPGRADE,
	"LocalisationUpdate" => $UESP_EXT_DEFAULT,
	"LogPageRenderTimes" => $UESP_EXT_NONE,
	"MediaFunctions" => $UESP_EXT_UPGRADE,
	"MetaTemplate" => $UESP_EXT_NONE,
	"MobileFrontend" => $UESP_EXT_UPGRADE,
	"Mpdf" => $UESP_EXT_IGNORE,
	"NativeSvgHandler" => $UESP_EXT_NONE,		// Doesn't have versions available before 1.35
	"NSInfo" => $UESP_EXT_NONE,
	"Nuke" => $UESP_EXT_DEFAULT,
	"PageImages" => $UESP_EXT_UPGRADE,
	"PageSpeedLog" => $UESP_EXT_NONE,
	"ParserFunctions" => $UESP_EXT_DEFAULT,
	"ParserHelper" => $UESP_EXT_NONE,
	"Patroller" => $UESP_EXT_UPGRADE,
	"PdfHandler" => $UESP_EXT_DEFAULT,
	"Poem" => $UESP_EXT_DEFAULT,
	"Popups" => $UESP_EXT_UPGRADE,
	//"ProtectSection" => $UESP_EXT_NONE,
	"RecentPopularPages" => $UESP_EXT_NONE,
	"RegexFunctions" => $UESP_EXT_UPGRADE,
	"Renameuser" => $UESP_EXT_DEFAULT,
	"Riven" => $UESP_EXT_NONE,
	"Scribunto" => $UESP_EXT_UPGRADE,
	"SearchLog" => $UESP_EXT_NONE,
	"SpamBlacklist" => $UESP_EXT_DEFAULT,
	"SyntaxHighlight_GeSHi" => $UESP_EXT_DEFAULT,
	"Tabs" => $UESP_EXT_UPGRADE,
	"TextExtracts" => $UESP_EXT_UPGRADE,
	"TemplateStyles" => $UESP_EXT_UPGRADE,
	"TimedMediaHandler" => $UESP_EXT_UPGRADE,
	"TitleBlacklist" => $UESP_EXT_DEFAULT,
	"TorBlock" => $UESP_EXT_UPGRADE,
	"UespBreadCrumb" => $UESP_EXT_NONE,
	"UespCustomCode" => $UESP_EXT_NONE,
	//"UespCustomNew" => $UESP_EXT_NONE,
	"UespEsoData" => $UESP_EXT_NONE,
	"UespEsoItemLink" => $UESP_EXT_NONE,
	"UespEsoSkills" => $UESP_EXT_NONE,
	"UespGameMap" => $UESP_EXT_NONE,
	"UespLegendsCards" => $UESP_EXT_NONE,
	"UespMap" => $UESP_EXT_NONE,
	"UespPatreon" => $UESP_EXT_NONE,
	"UespShortLinks" => $UESP_EXT_NONE,
	"UniversalLanguageSelector" => $UESP_EXT_UPGRADE,
	"UploadWizard" => $UESP_EXT_UPGRADE,
	"UsersEditCount" => $UESP_EXT_NONE,
	"WikiEditor" => $UESP_EXT_DEFAULT,
	"WikiTextLoggedInOut" => $UESP_EXT_UPGRADE,
	"WikiAppApi" => $UESP_EXT_NONE,
];

if (isset($UESP_UPGRADING_MW) && $UESP_UPGRADING_MW == 1) return;

wfLoadExtension( 'AbuseFilter' );
$wgAbuseFilterEmergencyDisableThreshold['default'] = 0.5;

wfLoadExtension( 'AntiSpoof' );
wfLoadExtension( 'AudioButton' );
wfLoadExtension( "CharInsert" );
wfLoadExtension( "CheckUser" );
wfLoadExtension( "Cite" );
wfLoadExtension( "CiteThisPage" );

// Based on http://thingelstad.com/stopping-mediawiki-spam-with-dynamic-questy-captchas/
wfLoadExtensions([ 'ConfirmEdit', 'ConfirmEdit/QuestyCaptcha' ]);

# Now a more complicated one
# Generate a random string 10 characters long
$myChallengeLength = rand(2, 5);
$myChallengeIndex = rand(0, 12 - $myChallengeLength);
$myChallengeString = md5(uniqid(mt_rand(), true));
$prefix = substr($myChallengeString, 0, $myChallengeIndex);
$answer = substr($myChallengeString, $myChallengeIndex, $myChallengeLength);
$suffix = substr($myChallengeString, $myChallengeIndex + $myChallengeLength, 12 - $myChallengeIndex + $myChallengeLength);
$myChallengeString = "<span style='background-color:white'>$prefix</span><span style='background-color:lightgreen'>$answer</span><span style='background-color:lightgrey'>$suffix</span>";
# Pick a random location in the string

# Build the question/anwer
$wgCaptchaQuestions[] = array (
    'question' => "Please enter the characters highlighted in green in the following sequence: <code>$myChallengeString</code>",
    'answer' => $answer
);
// ------------------
$wgCaptchaTriggers['addurl'] = false;

wfLoadExtension( 'CSS' );
require_once( "$IP/extensions/DailyEdits/DailyEdits.php" );
$wgDailyEditsGraphFile = "//content3.uesp.net/w/extensions/UespCustomCode/files/dailyedits.png";

require_once( "$IP/extensions/DeleteBatch/DeleteBatch.php" );
wfLoadExtension( "Disambiguator" );
wfLoadExtension( 'DismissableSiteNotice' );
wfLoadExtension( 'Editcount' );
wfLoadExtension( "Gadgets" );
wfLoadExtension( "ImageMap" );
wfLoadExtension( "InputBox" );
require_once( "$IP/extensions/JobQueue/JobQueue.php" );
wfLoadExtension( 'LabeledSectionTransclusion' );
require_once( "$IP/extensions/MediaFunctions/MediaFunctions.php" );

wfLoadExtension( 'MobileFrontend' );
//$wgMFRemovableClasses['base'] = array_diff($wgMFRemovableClasses['base'], ['.navbox']);
$wgMFRemovableClasses = array(
  // These rules will be used for all transformations in the beta channel of the site
    "beta" => array(),
  // These rules will be used for all transformations
    "base" => array(
        ".navbox",
        ".vertical-navbox",
        ".nomobile"
	)
);


wfLoadSkin( 'MinervaNeue' );
$wgMFDefaultSkinClass = 'SkinMinervaNeue';
$wgMobileFrontendLogo = $wgScriptPath . '/extensions/MobileFrontend/stylesheets/images/uesp-mobile-logo.png';
$wgMFAutodetectMobileView = true;
$wgMFCollapseSectionsByDefault = false;
$wgMFContentNamespace = "NS_MAIN|102|104|106|108|110|112|114|116|118|120|122|124|126|128|130|132|134|136|138|140|142|144|146|148|150|152|154|156|158|160|162|164|166|168|170|172|174|176|178";
$wgMFMobileMainPageCss = true;

wfLoadExtension( "ParserFunctions" );
$wgPFEnableStringFunctions = true;
$wgPFStringLengthLimit = 30000;

wfLoadExtension( 'Patroller' );

// Very old extension never updated...do we even use it?
//require_once( "$IP/extensions/ProtectSection/ProtectSection.php" );
//$egProtectSectionNoAddAbove = true;

require_once( "$IP/extensions/RegexFunctions/RegexFunctions.php" );
wfLoadExtension( "Renameuser" );
wfLoadExtension( "SpamBlacklist" );
wfLoadExtension( 'TemplateStyles' );
$wgTemplateStylesAllowedUrls['image'] = ["<^(https:)?//images\\.uesp\\.net/>"];
wfLoadExtension( "TitleBlacklist" );

wfLoadExtension( 'TorBlock' );
$wgTorOnionooCA = false; // Current certificate isn't validating correctly, though it hasn't changed in 11 years.
$wgGroupPermissions['user']['torunblocked'] = false;

// $egRestrictBlockLength = 6 * 3600;
//require_once( "$IP/extensions/UespMap/UespMap.php" );
wfLoadExtension( 'UsersEditCount' );
wfLoadExtension ( "WikiTextLoggedInOut" );
wfLoadSkin( "UespMonoBook" );
wfLoadSkin( "UespVector" );
require_once( "$IP/extensions/EsoCharData/EsoCharData.php" );

require_once( "$IP/extensions/UespEsoItemLink/UespEsoItemLink.php" );
require_once( "$IP/extensions/UespEsoSkills/UespEsoSkills.php" );

wfLoadExtension( "TimedMediaHandler" );
$wgEnableTranscode = true;
$wgTranscodeBackgroundTimeLimit = 60 * 5;
	# Use custom compiled version instead of default one at /usr/bin/
$wgFFmpegLocation = '/home/uesp/ffmpeg/ffmpeg';

require_once( "$IP/extensions/UespLegendsCards/UespLegendsCards.php" );

wfLoadExtension( 'JsonConfig' );
wfLoadExtension("FakeGraph");
$wgEnableGraphParserTag = true;

require_once( "$IP/extensions/RecentPopularPages/RecentPopularPages.php");
require_once( "$IP/extensions/Tabs/Tabs.php" );

//wfLoadExtension( 'UniversalLanguageSelector' );
wfLoadExtension( 'UploadWizard' );

$wgMessagesDirs['UploadWizard'] = array(
		"$IP/extensions/UploadWizard/i18n",
		"$IP/extensions/UespCustomCode/uploadWizard-i18n"
); 
$wgUploadWizardConfig['uwLanguages'] = array( 'en' => 'English' );
$wgUploadWizardConfig['enableCategoryCheck'] = false;
$wgUploadWizardConfig['maxUploads'] = 1000;
$wgUploadWizardConfig['minAuthorLength'] = 0;
$wgUploadWizardConfig['minSourceLength'] = 0;
$wgUploadWizardConfig['minDescriptionLength'] = 0;
$wgUploadWizardConfig['defaults']['description'] = 'Uploaded by UploadWizard';
//unset($wgUploadWizardConfig['licensing']['ownWork']['template']);
$wgUploadWizardConfig['licensing']['ownWork']['defaults'] = 'uesp-cc-by-sa-2.5';
$wgUploadWizardConfig['licensing']['thirdParty']['defaults'] = 'uesp-cc-by-sa-2.5';

$wgUploadWizardConfig['licensing']['ownWork']['licenses'] = array(
		'uesp-cc-by-sa-2.5', 
		'uesp-cc-by-2.5',
		'uesp-cc-by-sa-nc-2.5',
		//'uesp-gfdl',
		//'uesp-none',
		//'uesp-dontknow',
		'uesp-pd',
		//'uesp-esimage-direwolf',
		//'uesp-esimage-modipihius',
		//'uesp-esimage',
		//'uesp-zenimage',
		'uesp-usedwithpermission',
		//'uesp-uespimage',
		//'uesp-uespimage-zos',
);

$wgUploadWizardConfig['licensing']['thirdParty']['licenseGroups'] = array(
		array(
				'head' => 'mwe-upwiz-license-none-head',
				'licenses' => array(
						'uesp-none',
						'uesp-dontknow',
				)
		),
		array(
				'head' => 'mwe-upwiz-license-publicdomain-head',
				'licenses' => array(
						'uesp-pd',
				)
		),
		array(
				'head' => 'mwe-upwiz-license-cc-head',
				'licenses' => array(
						'uesp-cc-by-sa-2.5', 
						'uesp-cc-by-2.5',
						'uesp-cc-by-sa-nc-2.5',
						'uesp-gfdl',
				)
		),
		array(
				'head' => 'mwe-upwiz-license-nonfree-head',
				'licenses' => array(
						'uesp-esimage-direwolf',
						'uesp-esimage-modipihius',
						'uesp-esimage',
						'uesp-zenimage',
						'uesp-usedwithpermission',
				)
		),
		array(
				'head' => 'mwe-upwiz-license-screenshots-head',
				'licenses' => array(
						'uesp-uespimage',
						'uesp-uespimage-zos',
				)
		),
);

$wgUploadWizardConfig['licenses']['uesp-none'] = array(
		'msg' => 'mwe-upwiz-license-uesp-none',
		'templates' => array( 'nolicense' ),
);
$wgUploadWizardConfig['licenses']['uesp-dontknow'] = array(
		'msg' => 'mwe-upwiz-license-uesp-dontknow',
		'templates' => array( 'nolicense' ),
);
$wgUploadWizardConfig['licenses']['uesp-pd'] = array(
		'msg' => 'mwe-upwiz-license-uesp-pd',
		'templates' => array( 'publicdomain' ),
		'icons' => array( 'cc-zero' )
);
$wgUploadWizardConfig['licenses']['uesp-cc-by-sa-2.5'] = array(
		'msg' => 'mwe-upwiz-license-uesp-cc-by-sa-2.5',
		'templates' => array( 'cc-by-sa-2.5' ),
		'icons' => array( 'cc-by', 'cc-sa' )
);
$wgUploadWizardConfig['licenses']['uesp-cc-by-2.5'] = array(
		'msg' => 'mwe-upwiz-license-uesp-cc-by-2.5',
		'templates' => array( 'cc-by-2.5' ),
		'icons' => array( 'cc-by' )
);
$wgUploadWizardConfig['licenses']['uesp-cc-by-sa-nc-2.5'] = array(
		'msg' => 'mwe-upwiz-license-uesp-cc-by-sa-nc-2.5',
		'templates' => array( 'cc-by-sa-nc-2.5' ),
		'icons' => array( 'cc-by', 'cc-sa' )
);
$wgUploadWizardConfig['licenses']['uesp-gfdl'] = array(
		'msg' => 'mwe-upwiz-license-uesp-gfdl',
		'templates' => array( 'GFDL' ),
);
$wgUploadWizardConfig['licenses']['uesp-esimage-direwolf'] = array(
		'msg' => 'mwe-upwiz-license-uesp-esimage-direwolf',
		'templates' => array( 'esimage|Dire Wolf Digital' ),
);
$wgUploadWizardConfig['licenses']['uesp-esimage-modipihius'] = array(
		'msg' => 'mwe-upwiz-license-uesp-esimage-modipihius',
		'templates' => array( 'esimage|Modipihius Entertainment' ),
);
$wgUploadWizardConfig['licenses']['uesp-esimage'] = array(
		'msg' => 'mwe-upwiz-license-uesp-esimage',
		'templates' => array( 'esimage' ),
);
$wgUploadWizardConfig['licenses']['uesp-zenimage'] = array(
		'msg' => 'mwe-upwiz-license-uesp-zenimage',
		'templates' => array( 'zenimage' ),
);
$wgUploadWizardConfig['licenses']['uesp-usedwithpermission'] = array(
		'msg' => 'mwe-upwiz-license-uesp-usedwithpermission',
		'templates' => array( 'usedwithpermission' ),
);
$wgUploadWizardConfig['licenses']['uesp-uespimage'] = array(
		'msg' => 'mwe-upwiz-license-uesp-uespimage',
		'templates' => array( 'uespimage' ),
);
$wgUploadWizardConfig['licenses']['uesp-uespimage-zos'] = array(
		'msg' => 'mwe-upwiz-license-uesp-uespimage-zos',
		'templates' => array( 'uespimage|Zenimax Online Studios' ),
);

$wgResourceModules['ext.uploadWizardUesp']['messages'] = array(
		"mwe-upwiz-source-ownwork-assert-uesp-cc-by-sa-2.5",
		"mwe-upwiz-source-ownwork-uesp-cc-by-sa-2.5-explain",
		"mwe-upwiz-license-uesp-cc-by-sa-2.5",
		"mwe-upwiz-license-uesp-cc-by-2.5",
		"mwe-upwiz-license-uesp-cc-by-sa-nc-2.5",
		"mwe-upwiz-license-uesp-pd",
		"mwe-upwiz-license-uesp-usedwithpermission",
		"mwe-upwiz-license-uesp-gfdl",
		"mwe-upwiz-license-uesp-none",
		"mwe-upwiz-license-uesp-dontknow",
		"mwe-upwiz-license-uesp-esimage-direwolf",
		"mwe-upwiz-license-uesp-esimage-modipihius",
		"mwe-upwiz-license-uesp-esimage",
		"mwe-upwiz-license-uesp-zenimage",
		"mwe-upwiz-license-uesp-uespimage",
		"mwe-upwiz-license-uesp-uespimage-zos",
		"mwe-upwiz-license-publicdomain-head",
		"mwe-upwiz-license-nonfree-head",
		"mwe-upwiz-license-screenshots-head",
);

# wfLoadExtension( 'DisableAccount' );
# $wgGroupPermissions['bureaucrat']['disableaccount'] = true;
# $wgGroupPermissions['sysop']['disableaccount'] = true;

# Temporarily disabled extensions (enable with caution)
# require_once( "$IP/extensions/SearchLog/SearchLog.php" );
# require_once( "$IP/extensions/LogPageRenderTimes/LogPageRenderTimes.php" );

# RM: Things to consider adding
# wfLoadExtension( "Interwiki" );
# wfLoadExtension( "Nuke" );

wfLoadExtension( "WikiEditor" );
$wgDefaultUserOptions['usebetatoolbar'] = 0;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 0;
$wgDefaultUserOptions['wikieditor-preview'] = 0;
$wgDefaultUserOptions['wikieditor-publish'] = 0;

wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';

wfLoadExtension( "PageSpeedLog" );
$wgPageSpeedLogFile = "/var/log/httpd/pagespeed.log";

wfLoadExtension( "UespPatreon" );
$wgSharedTables[] = 'patreon_user';	//Should be in extension but is not working
wfLoadExtension( "SyntaxHighlight_GeSHi" );
wfLoadExtension( "UespShortLinks" );
wfLoadExtension( 'WikiAppApi');

require_once( "$IP/extensions/NativeSvgHandler/NativeSvgHandler.php" );
$wgNativeSvgHandlerEnableLinks = true;

wfLoadExtension( "UespGameMap" );
wfLoadExtension( "UespEsoData" );

wfLoadExtension( "EmbedVideo" );

wfLoadExtension( 'PageImages' );
$wgPageImagesNamespaces = [NS_MAIN, 102, 104, 106, 108,
		110, 112, 114, 116, 118,
		120, 122, 124, 126, 128, 
		130, 132, 134, 136, 138,
		140, 142, 144, 146, 148,
		150, 152, 154, 156, 158,
		160, 162, 164, 166, 168,
		170, 172, 174, 176, 178];
$wgPageImagesOpenGraphFallbackImage = "https://images.uesp.net/4/40/NewUESPLogo1.png";

wfLoadExtension( "TextExtracts" );
wfLoadExtension( "Popups" );
$wgPopupsReferencePreviewsBetaFeature = false;

wfLoadExtension( 'ParserHelper' );
wfLoadExtension( 'MetaTemplate' ); // Dependent on ParserHelper
wfLoadExtension( 'NSInfo' ); // Dependent on ParserHelper
wfLoadExtension( 'Riven' ); // Dependent on ParserHelper
wfLoadExtension( 'UespBreadCrumb' ); // Dependent on ParserHelper
$egBreadCrumbSavePropertyAs = 'html';

wfLoadExtension( 'CodeMirror' );
$wgDefaultUserOptions["usecodemirror"] = 1;
### Enable bracket matching in CodeMirror
$wgCodeMirrorEnableBracketMatching = true;

wfLoadExtension( 'CodeEditor' );

wfLoadExtension( 'Description2' );
$wgEnableMetaDescriptionFunctions = true;

wfLoadExtension( 'UespCustomCode' );

$egAnonBlockedSpecialPages = ['WantedPages','MostLinkedCategories'];