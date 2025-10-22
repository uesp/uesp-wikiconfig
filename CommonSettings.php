<?php
# WARNING: This file is publically viewable on the web. Do not put private data here.
#
# This file contains wiki settings common to *all* UESP wikis. Note that some settings
# may be overridden in a site dependant config file.
# It is included by LocalSettings.php.
#

$wgSitename = "UESPWiki";

$wgEnableCanonicalServerLink = true;
$wgCanonicalServer = "https://$wgLanguageCode.uesp.net";

$wgScriptPath       = "/w";
$wgScriptExtension  = ".php";
$wgStylePath = "$wgScriptPath/skins";

$wgLogo = "//images.uesp.net/4/40/NewUESPLogo1.png";

$wgEnableEmail = true;
$wgEnableUserEmail = true;
$wgEnotifUserTalk = true;
$wgEnotifWatchlist = true;
$wgEmailAuthentication = true;

$wgEmergencyContact = "dave@uesp.net";
$wgPasswordSender   = "password@uesp.net";

$wgCacheDirectory = "/cache" . $uespLanguageSuffix;

$wgEnableUploads = true;
$wgAllowExternalImages = true;
$wgUploadPath       = "//images.uesp.net";
$wgUploadDirectory  = "$IP/images";
$wgUseInstantCommons = false;
$wgRestrictDisplayTitle = false;

$wgUseImageMagick = true;
$wgImageMagickTempDir = "/imagetmp";
$wgImageMagickConvertCommand = '/usr/bin/convert';
# $wgImageMagickConvertCommand = '/home/uesp/imagemagick/bin/convert';
$wgSVGConverters['ImageMagick'] = '$path/convert -background "#ffffff00" -thumbnail $widthx$height\! $input PNG:$output';
# $wgSVGConverters['ImageMagick'] = $wgImageMagickConvertCommand . ' -background "#ffffff00" -thumbnail $widthx$height\! $input PNG:$output';

$wgHashedUploadDirectory = true;
array_push($wgFileExtensions, 'ogg', 'zip', 'pcx', 'tga', 'apng', 'svg', 'webm', 'webp');
$wgThumbnailEpoch = '20090624000000';
$wgUseSharedUploads = false;

# Special settings for translation wikis
if ($uespLanguageSuffix != "")
{
	$wgUseSharedUploads = true;
	$wgSharedUploadPath = '//images.uesp.net';
	$wgSharedUploadDirectory = '/home/uesp/www/w/images/';
	$wgHashedSharedUploadDirectory = true;
	$wgUploadNavigationUrl = "//en.uesp.net/wiki/Special:Upload";
	$wgUploadMissingFileUrl= "//en.uesp.net/wiki/Special:Upload";
	$wgRepositoryBaseUrl = "https://en.uesp.net/wiki/File:";
}

if ($uespLanguageSuffix == "_ar")
{
	$wgLogo = "//images.uesp.net/6/69/UESP_Logo_Arabic.png";
}

$wgShellLocale = "en_US.utf8";

$wgSecretKey = $uespWikiSecretKey;

$wgThumbLimits = array(
   120,
   150,
   180,
   200,
   220,
   250,
   300,
   400
   );

$wgDefaultSkin = 'uespmonobook';
$wgDefaultUserOptions['thumbsize'] = 3; // thumb size 200
$wgGalleryOptions['imageWidth'] = 200;
$wgGalleryOptions['imageHeight'] = 200;
$wgGalleryOptions['mode'] = 'nolines';

$wgRightsPage = "UESPWiki:Copyright_and_Ownership";
$wgRightsUrl = "http://creativecommons.org/licenses/by-sa/2.5/";
$wgRightsText = "Attribution-ShareAlike 2.5 License";
$wgRightsIcon = "//images.uesp.net/4/4d/Somerights.png";
//$wgCopyrightIcon = "<a href=\"//en.uesp.net/wiki/UESPWiki:Copyright_and_Ownership\"><img src=\"//en.uesp.net/w/images/4/4d/Somerights.png\" style=\"border: none;\" alt=\"[Content is available under Attribution-ShareAlike]\" /></a>";
$wgFooterIcons['copyright']['copyright'] = array(
		"src" => "//en.uesp.net/w/images/4/4d/Somerights.png",
		"url" => "//en.uesp.net/wiki/UESPWiki:Copyright_and_Ownership",
		"alt" => "[Content is available under Attribution-ShareAlike]"
);
$wgFooterIcons['poweredby']['twelveworlds'] = array(
		"src" => "//images.uesp.net/e/ed/TwelveWorldsSmallLogo.png",
		"url" => "//twelveworlds.net",
		"alt" => "[Proudly Hosted by Twelve Worlds]",
);

$wgDiff3 = "/usr/bin/diff3";
//$wgExternalDiffEngine = "wikidiff2";

$wgAccountCreationThrottle = 2; // Workaround for possible 1.27 issue; can be reset to 1 for 1.28+.
$wgAjaxSearch = true;
$wgAllowUserCss = true;
$wgAllowUserJs  = true;
$wgArticlePath  = "/wiki/$1";
$wgAutoConfirmAge = 3600*24*4;
$wgAutoConfirmCount = 10;
$wgBlockAllowsUTEdit = true;
$wgCookieDomain = ".uesp.net";
$wgCookiePrefix = "uesp_net_wiki5"; # Don't change as it affects the session name used
$wgObjectCacheSessionExpiry = 7*3600;
$wgDisableCounters = true;
$wgShowIPinHeader = false;
$wgExpensiveParserFunctionLimit = 1000;
$wgFavicon = '/favicon.ico';
$wgJobRunRate = 0;
$wgLocaltimezone = "UTC";
$wgMaxArticleSize = 8192;
$wgMaxShellMemory = 1310720;
$wgMaxShellFileSize = 1310720;
$wgResourceLoaderMaxage = array(
		'versioned' => array(
				'server' => 30 * 24 * 60 * 60,
				'client' => 30 * 24 * 60 * 60,
		),
		'unversioned' => array(
				'server' => 300,
				'client' => 300,
		),
);
$wgTmpDirectory = "/imagetmp";
$wgUseETag = false;
$wgUsePathInfo  = true;
$wgUseSquid = true;
$wgUseTidy = true;
$wgUseXVO = true;

$wgAllowSiteCSSOnRestrictedPages = true;

# When you make changes to this configuration file, change this date if
# required to make sure that cached pages are cleared.
$wgCacheEpoch = '2025074090600';
$wgInvalidateCacheOnLocalSettingsChange = false;

//$wgReadOnly = ( PHP_SAPI === 'cli' ) ? false : 'This wiki is currently being upgraded to a newer software version. Please check back shortly.';
//$wgIgnoreImageErrors = true;
$wgReadOnlyFile = "$wgUploadDirectory/UESP_LOCK_DB";

$wgApplyIpBlocksToXff = true;

$wgSkipSkins = array( 'monobook', 'vector' );

set_time_limit(60);

$wgCookieSecure = false;
$wgMaxImageArea = 6e7;

$wgLogAutopatrol = true;

if ($uespIsDev)
{
	$wgUploadPath = "//dev.uesp.net/w/images";
	$wgLogo = "//images.uesp.net/e/e2/UESP_Wiki_Dev_Logo.png";
}

