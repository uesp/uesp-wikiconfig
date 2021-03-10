<?php
# WARNING: This file is publically viewable on the web. Do not put private data here.
#
# This file contains extension includes and settings.
# It is included by LocalSettings.php.
#

require_once( "$IP/extensions/AbuseFilter/AbuseFilter.php" );
$wgAbuseFilterEmergencyDisableThreshold['default'] = 0.5;

require_once( "$IP/extensions/AntiSpoof/AntiSpoof.php" );
wfLoadExtension( "CharInsert" );
wfLoadExtension( "CheckUser" );
wfLoadExtension( "Cite" );
wfLoadExtension( "CiteThisPage" );

// Based on http://thingelstad.com/stopping-mediawiki-spam-with-dynamic-questy-captchas/
wfLoadExtension( "ConfirmEdit" );
require_once("$IP/extensions/ConfirmEdit/QuestyCaptcha.php");
$wgCaptchaClass = 'QuestyCaptcha';

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

require_once( "$IP/extensions/DailyEdits/DailyEdits.php" );
$wgDailyEditsGraphFile = "//content3.uesp.net/w/extensions/UespCustomCode/files/dailyedits.png";

require_once( "$IP/extensions/DeleteBatch/DeleteBatch.php" );
wfLoadExtension( "Disambiguator" );
require_once( "$IP/extensions/DismissableSiteNotice/DismissableSiteNotice.php" );
require_once( "$IP/extensions/Editcount/Editcount.php" );
wfLoadExtension( "Gadgets" );
wfLoadExtension( "ImageMap" );
wfLoadExtension( "InputBox" );
require_once( "$IP/extensions/JobQueue/JobQueue.php" );
require_once( "$IP/extensions/LabeledSectionTransclusion/LabeledSectionTransclusion.php" );
require_once( "$IP/extensions/MediaFunctions/MediaFunctions.php" );
require_once( "$IP/extensions/MetaTemplate/MetaTemplate.php" );

require_once( "$IP/extensions/MobileFrontend/MobileFrontend.php" );
$wgMobileFrontendLogo = $wgScriptPath . '/extensions/MobileFrontend/stylesheets/images/uesp-mobile-logo.png';
$wgMFAutodetectMobileView = true;

wfLoadExtension( "ParserFunctions" );
$wgPFEnableStringFunctions = true;
$wgPFStringLengthLimit = 30000;

require_once( "$IP/extensions/Patroller/Patroller.php" );
require_once( "$IP/extensions/ProtectSection/ProtectSection.php" );
$egProtectSectionNoAddAbove = true;
require_once( "$IP/extensions/RegexFunctions/RegexFunctions.php" );
wfLoadExtension( "Renameuser" );

wfLoadExtension( "SpamBlacklist" );
wfLoadExtension( "TitleBlacklist" );

require_once( "$IP/extensions/TorBlock/TorBlock.php" );
$wgGroupPermissions['user']['torunblocked'] = false;

require_once( "$IP/extensions/UespCustomCode/SiteCustomCode.php" );
require_once( "$IP/extensions/UespMap/UespMap.php" );
require_once( "$IP/extensions/UsersEditCount/UsersEditCount.php" );
require_once( "$IP/extensions/WikiTextLoggedInOut/WikiTextLoggedInOut.php" );
wfLoadSkin( "UespMonoBook" );
wfLoadSkin( "UespVector" );
require_once( "$IP/extensions/EsoCharData/EsoCharData.php" );

require_once( "$IP/extensions/UespEsoItemLink/UespEsoItemLink.php" );
require_once( "$IP/extensions/UespEsoSkills/UespEsoSkills.php" );

require_once( "$IP/extensions/MwEmbedSupport/MwEmbedSupport.php" );
require_once( "$IP/extensions/TimedMediaHandler/TimedMediaHandler.php" );
$wgEnableTranscode = true;
$wgTranscodeBackgroundTimeLimit = 60 * 5;
	# Use custom compiled version instead of default one at /usr/bin/
$wgFFmpegLocation = '/home/uesp/ffmpeg/ffmpeg';

require_once( "$IP/extensions/UespLegendsCards/UespLegendsCards.php" );

require_once( "$IP/extensions/JsonConfig/JsonConfig.php" );
require_once( "$IP/extensions/Graph/Graph.php" );
$wgEnableGraphParserTag = true;

require_once( "$IP/extensions/RecentPopularPages/RecentPopularPages.php");
require_once( "$IP/extensions/Tabs/Tabs.php" );

require_once( "$IP/extensions/UploadWizard/UploadWizard.php" );

$wgMessagesDirs['UploadWizard'] = array(
		"$IP/extensions/UploadWizard/i18n",
		"$IP/extensions/UespCustomCode/uploadWizard-i18n"
); 
$wgUploadWizardConfig['uwLanguages'] = array( 'en' => 'English' );
$wgUploadWizardConfig['enableCategoryCheck'] = false;
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

$wgResourceModules['ext.uploadWizard']['messages'] = array_merge($wgResourceModules['ext.uploadWizard']['messages'], array(
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
));


# wfLoadExtension( 'DisableAccount' );
# $wgGroupPermissions['bureaucrat']['disableaccount'] = true;
# $wgGroupPermissions['sysop']['disableaccount'] = true;

# Temporarily disabled extensions (enable with caution)
# require_once( "$IP/extensions/SearchLog/SearchLog.php" );
# require_once( "$IP/extensions/LogPageRenderTimes/LogPageRenderTimes.php" );

# RM: Things to consider adding
# wfLoadExtension( "Interwiki" );
# wfLoadExtension( "Nuke" );
# wfLoadExtension( "WikiEditor" );

wfLoadExtension( "PageSpeedLog" );
wfLoadExtension( "UespPatreon" );
$wgSharedTables[] = 'patreon_user';	//Should be in extension but is not working
wfLoadExtension( "SyntaxHighlight_GeSHi" );
wfLoadExtension( "UespShortLinks" );

