<?php



//调用sc.ini是否存在
   
include("./ini/sc_ini.php");
$inina="sc.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
$iniFile = new iniFile($file);
$wnys=($iniFile->getItem('商城数量','401'));
$wnyssl=2;//需要钥匙的数量
$ysid=401;
$ysmz="〖万能钥匙〗";

if($wnys >=$wnyssl){
$wpsy=2;//使用成功
$ysmz1="〖银宝箱〗";
echo "<font color=black>恭喜你！打开了".$ysmz1."</font><br>";



$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////云南白药（超大捆）/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="云南白药（超大捆）";//需要的到某个物品的名字    // 
$wwpid=250;                   //需要的到某个物品的id      //
$wwpsl=5;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////云南白药（超大捆）/////////////////////////////////////////
} else{
} 


$bz= rand(1, 100);
if($bz >=1&&$bz <=60){
$dd=$dd+1;	
//////////////////////////////////////////////////〖百年魔珠〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖百年魔珠〗";//需要的到某个物品的名字    // 
$wwpid=331;                   //需要的到某个物品的id      //
$wwpsl=15;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖百年魔珠〗/////////////////////////////////////////
} else{
} 

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖金豆〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖金豆〗";//需要的到某个物品的名字    // 
$wwpid=127;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖金豆〗/////////////////////////////////////////
} else{
} 


$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$dd=$dd+1;	
//////////////////////////////////////////////////小幸运草/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="小幸运草";//需要的到某个物品的名字    // 
$wwpid=126;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////小幸运草/////////////////////////////////////////
} else{
} 




$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////〖冰火丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖冰火丹〗";//需要的到某个物品的名字    // 
$wwpid=211;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖冰火丹〗/////////////////////////////////////////
} else{
} 


$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////〖鬼面丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖鬼面丹〗";//需要的到某个物品的名字    // 
$wwpid=212;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖鬼面丹〗/////////////////////////////////////////
} else{
} 


$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////〖混世丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖混世丹〗";//需要的到某个物品的名字    // 
$wwpid=213;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖混世丹〗/////////////////////////////////////////
} else{
} 




$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////〖金银丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖金银丹〗";//需要的到某个物品的名字    // 
$wwpid=214;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖金银丹〗/////////////////////////////////////////
} else{
} 


$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////〖金兜丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖金兜丹〗";//需要的到某个物品的名字    // 
$wwpid=215;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖金兜丹〗/////////////////////////////////////////
} else{
} 


$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////〖魔牛丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖魔牛丹〗";//需要的到某个物品的名字    // 
$wwpid=216;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖魔牛丹〗/////////////////////////////////////////
} else{
} 

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖凤仙丸〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖凤仙丸〗";//需要的到某个物品的名字    // 
$wwpid=217;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖凤仙丸〗/////////////////////////////////////////
} else{
} 

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖麒麟丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖麒麟丹〗";//需要的到某个物品的名字    // 
$wwpid=218;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖麒麟丹〗/////////////////////////////////////////
} else{
} 


$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖玉华丸〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖玉华丸〗";//需要的到某个物品的名字    // 
$wwpid=219;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖玉华丸〗/////////////////////////////////////////

} else{
} 



$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖莲花金丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖莲花金丹〗";//需要的到某个物品的名字    // 
$wwpid=540;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖莲花金丹〗/////////////////////////////////////////

} else{
} 


$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖黑龙金丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖黑龙金丹〗";//需要的到某个物品的名字    // 
$wwpid=541;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖黑龙金丹〗/////////////////////////////////////////

} else{
} 

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖修炼攻击仙丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖修炼攻击仙丹〗";//需要的到某个物品的名字    // 
$wwpid=542;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖修炼攻击仙丹〗/////////////////////////////////////////

} else{
} 

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖修炼魔攻仙丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖修炼魔攻仙丹〗";//需要的到某个物品的名字    // 
$wwpid=543;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖修炼魔攻仙丹〗/////////////////////////////////////////

} else{
} 

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖修炼防御仙丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖修炼防御仙丹〗";//需要的到某个物品的名字    // 
$wwpid=544;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖修炼防御仙丹〗/////////////////////////////////////////

} else{
} 




$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖修炼生命仙丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖修炼生命仙丹〗";//需要的到某个物品的名字    // 
$wwpid=545;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖修炼生命仙丹〗/////////////////////////////////////////

} else{
} 




















	if($dd >=1){

} else{
echo "<font color=black>居然人品大爆发了居然是个空箱子</font>"."<br>";
	} 		

////////////////////////////////////////////////扣除钥匙//////////////////////////////
//ini文件名字
$inina="sc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$wnys1=$wnys-$wnyssl;
if($wnys1 ==0){
//扣除钥匙
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "delete from $q2 where wpid=$ysid ";//物品id号必改值
$result = mysql_query($strsql);


# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$ysid));
# 删除一个子项
$iniFile->delItem('商城id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $ysid);
# 删除一个子项
$iniFile->delItem('商城数量', $ysid);
# 删除一个子项
$iniFile->delItem('商城名字', $ysid);

} else{
//扣除钥匙
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$wnys1 where wpid=$ysid";//物品id号必改值
$result = mysql_query($strsql);


# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('商城数量', [$ysid => $wnys1]);


}	
//////////////////////////////////////////////扣除钥匙////////////////////////////////////


echo "<font color=black>失去".$ysmz."x".$wnyssl."</font><br>";

} else{
$wpsy=1;//使用失败
echo "<font color=black>对不起！你需要".$ysmz."x".$wnyssl."才能打开</font><br>";

}


//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>

