<?php
# WARNING: This file is publically viewable on the web. Do not put private data here.
#
# This file contains namespace related settings.
# It is included by LocalSettings.php.
#


$wgExtraNamespaces =
array(	100 => 'Tamold',             101 => 'Tamold_talk',
		102 => 'Arena',              103 => 'Arena_talk',
		104 => 'Daggerfall',         105 => 'Daggerfall_talk',
		106 => 'Battlespire',        107 => 'Battlespire_talk',
		108 => 'Redguard',           109 => 'Redguard_talk',
		110 => 'Morrowind',          111 => 'Morrowind_talk',
		112 => 'Tribunal',           113 => 'Tribunal_talk',
		114 => 'Bloodmoon',          115 => 'Bloodmoon_talk',
		116 => 'Oblivion',           117 => 'Oblivion_talk',
		118 => 'General',            119 => 'General_talk',
		120 => 'Review',             121 => 'Review_talk',
		122 => 'Morrowind_Mod',      123 => 'Morrowind_Mod_talk',
		124 => 'Oblivion_Mod',       125 => 'Oblivion_Mod_talk',
		126 => 'Shivering',          127 => 'Shivering_talk',
		128 => 'Shadowkey',          129 => 'Shadowkey_talk',
		130 => 'Lore',               131 => 'Lore_talk',
		132 => 'Dawnstar',           133 => 'Dawnstar_talk',
		134 => 'Skyrim',             135 => 'Skyrim_talk',
		136 => 'OBMobile',           137 => 'OBMobile_talk',
		138 => 'Stormhold',          139 => 'Stormhold_talk',
		140 => 'Books',              141 => 'Books_talk',
		142 => 'Skyrim_Mod',         143 => 'Skyrim_Mod_talk',
		144 => 'Online',             145 => 'Online_talk',
		146 => 'Dragonborn',         147 => 'Dragonborn_talk',
		148 => 'ESO_Mod',            149 => 'ESO_Mod_talk',
		150 => 'Legends',            151 => 'Legends_talk',
		152 => 'Blades',             153 => 'Blades_talk',
		154 => 'Arena_Mod',          155 => 'Arena_Mod_talk',
		156 => 'Daggerfall_Mod',     157 => 'Daggerfall_Mod_talk',
		158 => 'Call_to_Arms',       159 => 'Call_to_Arms_talk',
		160 => 'Mod',                161 => 'Mod_talk',
		162 => 'Merchandise',        163 => 'Merchandise_talk',
		164 => 'Pinball',            165 => 'Pinball_talk',
		166 => 'SkyrimVSE',          167 => 'SkyrimVSE_talk',
		168 => 'Tamriel_Data',       169 => 'Tamriel_Data_talk',
		170 => 'Tamriel_Rebuilt',    171 => 'Tamriel_Rebuilt_talk',
		172 => 'Project_Tamriel',    173 => 'Project_Tamriel_talk',
		174 => 'Better_Cities',      175 => 'Better_Cities_talk',
		176 => 'Morrowind_Rebirth',  177 => 'Morrowind_Rebirth_talk',
		178 => 'Beyond_Skyrim',      179 => 'Beyond_Skyrim_talk',
		180 => 'DFU_Mod',            181 => 'DFU_Mod_talk',
		182 => 'SkyrimTAG',          183 => 'SkyrimTAG_talk',
		184 => 'Castles',            185 => 'Castles_talk',
		186 => 'Betrayal',           187 => 'Betrayal_talk',
		200 => 'Dapel',              201 => 'Dapel_talk');

$wgNamespaceAliases =
array(	'UESP' => NS_PROJECT,     'UESP_talk' => NS_PROJECT+1,
		'DF' => 104,              'DF_talk' => 105,
		'BS' => 106,              'BS_talk' => 107,
		'RG' => 108,              'RG_talk' => 109,
		'MW' => 110,              'MW_talk' => 111,
		'TR' => 112,              'TR_talk' => 113,
		'BM' => 114,              'BM_talk' => 115,
		'OB' => 116,              'OB_talk' => 117,
		'OBR' => 116,             'OBR_talk' => 117,
		'GEN' => 118,             'GEN_talk' => 119,
		'T3' => 122,              'T3_talk' => 123,
		'Tes3Mod' => 122,         'Tes3Mod_talk' => 123,
		'T4' => 124,              'T4_talk' => 125,
		'Tes4Mod' => 124,         'Tes4Mod_talk' => 125,
		'SI' => 126,              'SI_talk' => 127,
		'Shivering_Isles' => 126, 'Shivering_Isles_talk' => 127,
		'SK' => 128,              'SK_talk' => 129,
		'LO' => 130,              'LO_talk' => 131,
		'Tamriel' => 130,         'Tamriel_talk' => 131,
		'DS' => 132,              'DS_talk' => 133,
		'SR' => 134,              'SR_talk' => 135,
		'OM' => 136,              'OM_talk' => 137,
		'SH' => 138,              'SH_talk' => 139,
		'BK' => 140,              'BK_talk' => 141,
		'T5' => 142,              'T5_talk' => 143,
		'Tes5Mod' => 142,         'Tes5Mod_talk' => 145,
		'ON' => 144,              'ON_talk' => 145,
		'ESO' => 144,             'ESO_talk' => 145,
		'TESO' => 144,            'TESO_talk' => 145,
		'DB' => 146,              'DB_talk' => 147,
		'ESOMod' => 148,          'ESOMod_talk' => 149,
		'Online_Mod' => 148,      'Online_Mod_talk' => 149,
		'ONMOD' => 148,           'ONMOD_talk' => 149,
		'LG' => 150,              'LG_talk' => 151,
		'BL' => 152,              'BL_talk' => 153,
		'T1' => 154,              'T1_talk' => 155,
		'Tes1Mod' => 154,         'Tes1Mod_talk' => 155,
		'Tes2Mod' => 156,         'Tes2Mod_talk' => 157,
		'T2' => 156,              'T2_talk' => 157,
		'CA' => 158,              'CA_talk' => 159,
		'CtA' => 158,             'CtA_talk' => 159,
		'Call' => 158,            'Call_talk' => 159,
		'TOther' => 160,          'TOther_talk' => 161,
		'TesOtherMod' => 160,     'TesOtherMod_talk' => 161,
		'VSE' => 166,             'VSE_talk' => 167,
		'TD3' => 168,             'TD3_talk' => 169,
		'TR3' => 170,             'TR3_talk' => 171,
		'PT3' => 172,             'PT3_talk' => 173,
		'BC4' => 174,             'BC4_talk' => 175,
		'MR3' => 176,             'MR3_talk' => 177,
		'BS5' => 178,             'BS5_talk' => 179,
		'DFUMod' => 180,          'DFUMod_talk' => 181,
		'CT' => 184,              'CT_talk' => 185,
		'BT' => 186,              'BT_talk' => 187,
);

$wgNamespacesWithSubpages = array(
		 -1 => 0,
		  0 => 0,   1 => 1,   2 => 1,   3 => 1,   4 => 1,   5 => 1,   6 => 0,   7 => 1,   8 => 1,   9 => 1,
		 10 => 1,  11 => 1,  12 => 1,  13 => 1,  14 => 0,  15 => 1,
		100 => 1, 101 => 1, 102 => 1, 103 => 1, 104 => 1, 105 => 1, 106 => 1, 107 => 1, 108 => 1, 109 => 1,
		110 => 1, 111 => 1, 112 => 1, 113 => 1, 114 => 1, 115 => 1, 116 => 1, 117 => 1, 118 => 1, 119 => 1,
		120 => 1, 121 => 1, 122 => 1, 123 => 1, 124 => 1, 125 => 1, 126 => 1, 127 => 1, 128 => 1, 129 => 1,
		130 => 1, 131 => 1, 132 => 1, 133 => 1, 134 => 1, 135 => 1, 136 => 1, 137 => 1, 138 => 1, 139 => 1,
		140 => 1, 141 => 1, 142 => 1, 143 => 1, 144 => 1, 145 => 1, 146 => 1, 147 => 1, 148 => 1, 149 => 1,
		150 => 1, 151 => 1, 152 => 1, 153 => 1, 154 => 1, 155 => 1, 156 => 1, 157 => 1, 158 => 1, 159 => 1,
		160 => 1, 161 => 1, 162 => 1, 163 => 1, 164 => 1, 165 => 1, 166 => 1, 167 => 1, 168 => 1, 169 => 1,
		170 => 1, 171 => 1, 172 => 1, 173 => 1, 174 => 1, 175 => 1, 176 => 1, 177 => 1, 178 => 1, 179 => 1,
		180 => 1, 181 => 1, 182 => 1, 183 => 1, 184 => 1, 185 => 1, 186 => 1, 187 => 1,
		200 => 1, 201 => 1);

$wgNamespacesToBeSearchedDefault = array(
		 -1 => 0,
		  0 => 1,   1 => 0,   2 => 0,   3 => 0,   4 => 0,   5 => 0,   6 => 0,   7 => 0,   8 => 0,   9 => 0,
		 10 => 0,  11 => 0,  12 => 0,  13 => 0,  14 => 0,  15 => 0,
		100 => 0, 101 => 0, 102 => 1, 103 => 0, 104 => 1, 105 => 0, 106 => 1, 107 => 0, 108 => 1, 109 => 0,
		110 => 1, 111 => 0, 112 => 1, 113 => 0, 114 => 1, 115 => 0, 116 => 1, 117 => 0, 118 => 1, 119 => 0,
		120 => 1, 121 => 0, 122 => 1, 123 => 0, 124 => 1, 125 => 0, 126 => 1, 127 => 0, 128 => 1, 129 => 0,
		130 => 1, 131 => 0, 132 => 1, 133 => 0, 134 => 1, 135 => 0, 136 => 1, 137 => 0, 138 => 1, 139 => 0,
		140 => 1, 141 => 0, 142 => 1, 143 => 0, 144 => 1, 145 => 0, 146 => 1, 147 => 0, 148 => 1, 149 => 0,
		150 => 1, 151 => 0, 152 => 1, 153 => 0, 154 => 1, 155 => 0, 156 => 1, 157 => 0, 158 => 1, 159 => 0,
		160 => 1, 161 => 0, 162 => 1, 163 => 0, 164 => 1, 165 => 0, 166 => 1, 167 => 0, 168 => 1, 169 => 0,
		170 => 1, 171 => 0, 172 => 1, 173 => 0, 174 => 1, 175 => 0, 176 => 1, 177 => 0, 178 => 1, 179 => 0,
		180 => 1, 181 => 0, 182 => 1, 183 => 0, 184 => 1, 185 => 0, 186 => 1, 187 => 0,
		200 => 0, 201 => 0);

$wgContentNamespaces = array(
		NS_MAIN, 102, 104, 106, 108,
		110, 112, 114, 116, 118,
		120, 122, 124, 126, 128, 
		130, 132, 134, 136, 138,
		140, 142, 144, 146, 148,
		150, 152, 154, 156, 158,
		160, 162, 164, 166, 168,
		170, 172, 174, 176, 178,
		180, 182, 184, 186);

$wgExtraSignatureNamespaces[] = NS_PROJECT;

/* Translation Namespaces: If there's a better way to do this let me know! */
if ($wgLanguageCode == "fr")
{
	$wgExtraNamespaces[118] = "Général";
	$wgExtraNamespaces[119] = "Général_discussion";
	$wgNamespaceAliases['General'] = 118;
	$wgNamespaceAliases['General_talk'] = 119;
	
	$wgExtraNamespaces[140] = "Livres";
	$wgExtraNamespaces[141] = "Livres_discussion";
	$wgNamespaceAliases['Books'] = 140;
	$wgNamespaceAliases['Books_talk'] = 141;
	
	$wgExtraNamespaces[162] = "Produits_dérivés";
	$wgExtraNamespaces[163] = "Produits dérivés_discussion";
	$wgNamespaceAliases['Merchandise'] = 162;
	$wgNamespaceAliases['Merchandise_talk'] = 163;
	
	$wgExtraNamespaces[101] = 'Tamold_discussion';
	$wgNamespaceAliases['Tamold_talk'] = 101;
	$wgExtraNamespaces[103] = 'Arena_discussion';
	$wgNamespaceAliases['Arena_talk'] = 103;
	$wgExtraNamespaces[105] = 'Daggerfall_discussion';
	$wgNamespaceAliases['Daggerfall_talk'] = 105;
	$wgExtraNamespaces[107] = 'Battlespire_discussion';
	$wgNamespaceAliases['Battlespire_talk'] = 107;
	$wgExtraNamespaces[109] = 'Redguard_discussion';
	$wgNamespaceAliases['Redguard_talk'] = 109;
	$wgExtraNamespaces[111] = 'Morrowind_discussion';
	$wgNamespaceAliases['Morrowind_talk'] = 111;
	$wgExtraNamespaces[113] = 'Tribunal_discussion';
	$wgNamespaceAliases['Tribunal_talk'] = 113;
	$wgExtraNamespaces[115] = 'Bloodmoon_discussion';
	$wgNamespaceAliases['Bloodmoon_talk'] = 115;
	$wgExtraNamespaces[117] = 'Oblivion_discussion';
	$wgNamespaceAliases['Oblivion_talk'] = 117;
	$wgExtraNamespaces[121] = 'Review_discussion';
	$wgNamespaceAliases['Review_talk'] = 121;
	$wgExtraNamespaces[123] = 'Morrowind_Mod_discussion';
	$wgNamespaceAliases['Morrowind_Mod_talk'] = 123;
	$wgExtraNamespaces[125] = 'Oblivion_Mod_discussion';
	$wgNamespaceAliases['Oblivion_Mod_talk'] = 125;
	$wgExtraNamespaces[127] = 'Shivering_discussion';
	$wgNamespaceAliases['Shivering_talk'] = 127;
	$wgExtraNamespaces[129] = 'Shadowkey_discussion';
	$wgNamespaceAliases['Shadowkey_talk'] = 129;
	$wgExtraNamespaces[131] = 'Lore_discussion';
	$wgNamespaceAliases['Lore_talk'] = 131;
	$wgExtraNamespaces[133] = 'Dawnstar_discussion';
	$wgNamespaceAliases['Dawnstar_talk'] = 133;
	$wgExtraNamespaces[135] = 'Skyrim_discussion';
	$wgNamespaceAliases['Skyrim_talk'] = 135;
	$wgExtraNamespaces[137] = 'OBMobile_discussion';
	$wgNamespaceAliases['OBMobile_talk'] = 137;
	$wgExtraNamespaces[139] = 'Stormhold_discussion';
	$wgNamespaceAliases['Stormhold_talk'] = 139;
	$wgExtraNamespaces[143] = 'Skyrim_Mod_discussion';
	$wgNamespaceAliases['Skyrim_Mod_talk'] = 143;
	$wgExtraNamespaces[145] = 'Online_discussion';
	$wgNamespaceAliases['Online_talk'] = 145;
	$wgExtraNamespaces[147] = 'Dragonborn_discussion';
	$wgNamespaceAliases['Dragonborn_talk'] = 147;
	$wgExtraNamespaces[149] = 'Online_Mod_discussion';
	$wgNamespaceAliases['Online_Mod_talk'] = 149;
	$wgExtraNamespaces[151] = 'Legends_discussion';
	$wgNamespaceAliases['Legends_talk'] = 151;
	$wgExtraNamespaces[153] = 'Blades_discussion';
	$wgNamespaceAliases['Blades_talk'] = 153;
	$wgExtraNamespaces[155] = 'Arena_Mod_discussion';
	$wgNamespaceAliases['Arena_Mod_talk'] = 155;
	$wgExtraNamespaces[157] = 'Daggerfall_Mod_discussion';
	$wgNamespaceAliases['Daggerfall_Mod_talk'] = 157;
	$wgExtraNamespaces[159] = 'Call_to_Arms_discussion';
	$wgNamespaceAliases['Call_to_Arms_talk'] = 159;
	$wgExtraNamespaces[161] = 'Mod_discussion';
	$wgNamespaceAliases['Mod_talk'] = 161;
	$wgExtraNamespaces[165] = 'Pinball_discussion';
	$wgNamespaceAliases['Pinball_talk'] = 165;
	$wgExtraNamespaces[167] = 'SkyrimVSE_discussion';
	$wgNamespaceAliases['SkyrimVSE_talk'] = 167;
	$wgExtraNamespaces[169] = 'Tamriel_Data_discussion';
	$wgNamespaceAliases['Tamriel_Data_talk'] = 169;
	$wgExtraNamespaces[171] = 'Tamriel_Rebuilt_discussion';
	$wgNamespaceAliases['Tamriel_Rebuilt_talk'] = 171;
	$wgExtraNamespaces[173] = 'Project_Tamriel_discussion';
	$wgNamespaceAliases['Project_Tamriel_talk'] = 173;
	$wgExtraNamespaces[175] = 'Better_Cities_discussion';
	$wgNamespaceAliases['Better_Cities_talk'] = 175;
	$wgExtraNamespaces[177] = 'Morrowind_Rebirth_discussion';
	$wgNamespaceAliases['Morrowind_Rebirth_talk'] = 177;
	$wgExtraNamespaces[179] = 'Beyond_Skyrim_discussion';
	$wgNamespaceAliases['Beyond_Skyrim_talk'] = 179;
	$wgExtraNamespaces[181] = 'DFU_Mod_discussion';
	$wgNamespaceAliases['DFU_Mod_talk'] = 181;
	$wgExtraNamespaces[183] = 'SkyrimTAG_discussion';
	$wgNamespaceAliases['SkyrimTAG_talk'] = 183;
	$wgExtraNamespaces[185] = 'Castles_discussion';
	$wgNamespaceAliases['Castles_talk'] = 185;
	$wgExtraNamespaces[187] = 'Betrayal_discussion';
	$wgNamespaceAliases['Betrayal_talk'] = 187;
}
