<?php
# WARNING: This file is publically viewable on the web. Do not put private data here.
#
# This file contains search related settings.
# It is included by LocalSettings.php.
#

wfLoadExtension( "Elastica" );
require_once( "$IP/extensions/CirrusSearch/CirrusSearch.php" );
$wgDisableSearchUpdate = false;
$wgCirrusSearchServers = array( "content2.uesp.net" );
$wgSearchType = 'CirrusSearch';

# Can't enable this until plguin installed on the Elastica server
# $wgCirrusSearchUseExperimentalHighlighter = true;
# $wgCirrusSearchOptimizeIndexForExperimentalHighlighter = true;

$wgDebugLogGroups['CirrusSearch'] = "/var/log/httpd/cirrussearch.log";
