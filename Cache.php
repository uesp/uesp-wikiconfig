<?php
# WARNING: This file is publically viewable on the web. Do not put private data here.
#
# This file contains cache/Squid related settings.
# It is included by LocalSettings.php.
#

$wgMainCacheType = CACHE_MEMCACHED;
//$wgSessionsInObjectCache = false;
$wgSessionCacheType = CACHE_DB;
$wgObjectCacheSessionExpiry = 100000;
$wgMemCachedServers = array($UESP_SERVER_MEMCACHED . ":11000");

$wgCacheEpoch = 20250911170041;

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
	
	$wgSquidServersNoPurge[] = "172.70.230.0/24";
	$wgSquidServersNoPurge[] = "103.21.244.0/22";
	$wgSquidServersNoPurge[] = "103.22.200.0/22";
	$wgSquidServersNoPurge[] = "103.31.4.0/22";
	$wgSquidServersNoPurge[] = "104.16.0.0/13";
	$wgSquidServersNoPurge[] = "104.24.0.0/14";
	$wgSquidServersNoPurge[] = "108.162.192.0/18";
	$wgSquidServersNoPurge[] = "131.0.72.0/22";
	$wgSquidServersNoPurge[] = "141.101.64.0/18";
	$wgSquidServersNoPurge[] = "162.158.0.0/15";
	$wgSquidServersNoPurge[] = "172.64.0.0/13";
	$wgSquidServersNoPurge[] = "173.245.48.0/20";
	$wgSquidServersNoPurge[] = "188.114.96.0/20";
	$wgSquidServersNoPurge[] = "190.93.240.0/20";
	$wgSquidServersNoPurge[] = "197.234.240.0/22";
	$wgSquidServersNoPurge[] = "198.41.128.0/17";
	$wgSquidServersNoPurge[] = "2400:cb00::/32";
	$wgSquidServersNoPurge[] = "2606:4700::/32";
	$wgSquidServersNoPurge[] = "2803:f800::/32";
	$wgSquidServersNoPurge[] = "2405:b500::/32";
	$wgSquidServersNoPurge[] = "2405:8100::/32";
	$wgSquidServersNoPurge[] = "2a06:98c0::/29";
	$wgSquidServersNoPurge[] = "2c0f:f248::/32";
}

