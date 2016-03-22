<?php
/*
Possible values for IPModus

HideIP
ShowFullIP
ShowLast1ByteOfIP
ShowLast2ByteOfIP
ShowLast3ByteOfIP

*/

$Service     = array();
$CallingHome = array();
$PageOptions = array();

$PageOptions['ContactEmail']                         = 'dvc@rlx.lu';			// Support E-Mail address

$PageOptions['DashboardVersion']                     = '2.2.2';       			// Dashboard Version

$PageOptions['PageRefreshActive']                    = true;          			// Activate automatic refresh, true or false
$PageOptions['PageRefreshDelay']                     = '10000';       			// Page refresh time in miliseconds


$PageOptions['RepeatersPage'] = array();
$PageOptions['RepeatersPage']['LimitTo']             = 99;            			// Number of Repeaters to show
$PageOptions['RepeatersPage']['IPModus']             = 'ShowFullIP';  			// See possible options above
$PageOptions['RepeatersPage']['MasqueradeCharacter'] = '*';           			// Character used for masquerade


$PageOptions['PeerPage'] = array();
$PageOptions['PeerPage']['LimitTo']                  = 99;            			// Number of peers to show
$PageOptions['PeerPage']['IPModus']                  = 'ShowFullIP';  			// See possible options above
$PageOptions['PeerPage']['MasqueradeCharacter']      = '*';           			// Character used for masquerade


$PageOptions['ModuleNames'] = array();                                			// Module description
$PageOptions['ModuleNames']['A']                     = 'Int.';
$PageOptions['ModuleNames']['B']                     = 'Regional';
$PageOptions['ModuleNames']['C']                     = 'National';
$PageOptions['ModuleNames']['D']                     = '';


$PageOptions['MetaDescription']                      = 'XLX is a D-Star Reflector System for Ham Radio Operators.';  // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaKeywords']                         = 'Ham Radio, D-Star, XReflector, XLX, XRF, DCS, REF, ';        // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaAuthor']                           = 'YOURCALL';                                                   // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRevisit']                          = 'After 30 Days';                                              // Meta Tag Values, usefull for Search Engine
$PageOptions['MetaRobots']                           = 'index,follow';                                               // Meta Tag Values, usefull for Search Engine



$Service['PIDFile']                                  = '/var/log/xlxd.pid';
$Service['XMLFile']                                  = '/var/log/xlxd.xml';

$CallingHome['Active']                               = false;			                             //xlx phone home, true or false
$CallingHome['MyDashBoardURL']                       = 'http://your_dashboard';	                     //dashboard url
$CallingHome['ServerURL']                            = 'http://xlxapi.rlx.lu/api.php';               //database server, do not change !!!!
$CallingHome['PushDelay']                            = 600;  	                                     //push delay in seconds
$CallingHome['Country']                              = "your_country";                               //Country
$CallingHome['Comment']                              = "your_comment";                               //Comment. Max 100 character

?>