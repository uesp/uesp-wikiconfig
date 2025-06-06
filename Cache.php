<?php
# WARNING: This file is publically viewable on the web. Do not put private data here.
#
# This file contains cache/Squid related settings.
# It is included by LocalSettings.php.
#

$wgMainCacheType = CACHE_MEMCACHED;
$wgSessionsInObjectCache = false;
$wgSessionCacheType = CACHE_DB;
$wgObjectCacheSessionExpiry = 100000;
$wgMemCachedServers = array($UESP_SERVER_MEMCACHED . ":11000");

$wgFileCacheDirectory = "/mnt/uesp/filecache";
$wgUseFileCache = true;

if ($uespIsDev)
{
	$wgUseFileCache = false;
	$wgCacheDirectory = "/home/uesp/cache/dev";
	$wgMemCachedServers = array($UESP_SERVER_BACKUP1 . ":11000");
	$wgCookiePrefix = "uesp_net_wikidev";
}
else
{
	$wgFileCacheDirectory = "/mnt/uesp/filecache" . $uespLanguageSuffix;
	$wgCacheDirectory = "/home/uesp/cache/" . $uespLanguageSuffix;
	$wgSquidMaxage = 86400;
	$wgSquidServers = array($UESP_SERVER_SQUID1);
	$wgUseSquid = true;
	$wgUsePrivateIPs = true;
}
