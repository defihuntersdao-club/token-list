#!/usr/bin/php
<?php

error_reporting(0);
$now_time = time();

$f_ver = __FILE__.".ver";
$f_time = __FILE__.".time";

$time = file_get_contents($f_time);
//file_put_contents($f_time,$t);


$o[name] = "DeFi Hanters DAO token list";
$o[name] = "DDAO token list";
$o[timestamp] = date("Y-m-d",$time)."T".date("H:i:s",$time)."+02:00";
$timestamp = date("Y-m-d",$now_time)."T".date("H:i:s",$now_time)."+02:00";

$a = file_get_contents($f_ver);
$o[version] = json_decode($a,1);

//$o[keywords][1] = "https://nftindex.tech/";
//$o[keywords][] = "https://defihuntersdao.club/";


//$o[tags][] = "GOVERNANCE TOKEN";
//$o[tags][] = "NFT Index";
//$o[tags][] = "METAVERSE Index";


//$n = "nfti";
$n = 0;
$tkns[$n][address] 	= "0xe5feeaC09D36B18b3FA757E5Cf3F8dA6B8e27F4C";
$tkns[$n][chainId] 	= 1;
$tkns[$n][name]		= "NFT INDEX";
$tkns[$n][symbol]	= "NFTI";
$tkns[$n][decimals]	= 18;

$n++;
$tkns[$n][address] 	= "0x83C92e1a4a824CD42F94012B7b50AFf372E4d25f";
$tkns[$n][chainId]	= 137;
$tkns[$n][name]		= "CMI Index";
$tkns[$n][symbol]	= "CMI";
$tkns[$n][decimals]	= 18;


$n++;
$tkns[$n][address] 	= "0xeFC996CE8341cd36c55412B51DF5BBCa429a7617";
$tkns[$n][chainId]	= 1;
$tkns[$n][name]		= "METAVERSE INDEX";
$tkns[$n][symbol]	= "METAI";
$tkns[$n][decimals]	= 18;

$n++;
$tkns[$n][address] 	= "0x90F3edc7D5298918F7BB51694134b07356F7d0C7";
$tkns[$n][chainId]	= 137;
$tkns[$n][name]		= "DEFI HUNTERS DAO Token";
$tkns[$n][symbol]	= "DDAO";
$tkns[$n][decimals]	= 18;

$n++;
$tkns[$n][address] 	= "0xE58e8391BA17731C5671F9c6E00e420608Dca10e";
$tkns[$n][chainId]	= 137;
$tkns[$n][name]		= "GNFT";
$tkns[$n][symbol]	= "GNFT";
$tkns[$n][decimals]	= 18;

$n++;
$tkns[$n][address] 	= "0xc502002aEB1b9309FcCb016adF50507987Fc6C2b";
$tkns[$n][chainId]	= 1;
$tkns[$n][name]		= "GNFT";
$tkns[$n][symbol]	= "GNFT";
$tkns[$n][decimals]	= 18;

$o[tokens] = $tkns;


$t = pathinfo(__FILE__);
$f = __DIR__."/".$t[filename].".json";
$b = json_encode($o,192);
$a = file_get_contents($f);
print $a;
print "\n==========a =======\n";
print $b;
print "\n==========b =======\n";
print md5($a)."\n";
print md5($b)."\n";
if(md5($a) != md5($b))
{



$o[version][minor]++;
$o[timestamp] = $timestamp;

$t = json_encode($o[version],192);
file_put_contents($f_ver,$t);

file_put_contents($f_time,$now_time);

$b = json_encode($o,192);

file_put_contents($f,$b);
//print $a;
}
print_r($o);

