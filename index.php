<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<html>
<title>Zagyva generátor</title>
<style type="text/css">
<!--
.zagyva {
        font-family: "Trebuchet MS";
        font-size: 13px;
        color: #555555;
        text-decoration: none;
}
.toltelek {
        font-family: "Trebuchet MS";
        font-size: 13px;
        color: #333333;
        text-decoration: none;
        font-style: italic;
        background-position: center;
}
.cimsor {
        font-family: "Trebuchet MS";
        font-size: 26px;
        color: #1A85D7;
        font-weight: bold;
}
.copyright {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
        color: #000000;
}
-->
</style>
</head>

<body bgcolor="#f1f0df" leftmargin="0" topmargin="20" marginwidth="0" marginheight="0">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="center" valign="top">

<table width="75%" height="100%" border="0" align="center" cellpadding="3" cellspacing="0" bordercolor="#ffffff" bgcolor="#fafafa"
style="border: 1px solid #cccccc";>
  <tr>
    <td bgcolor="#ffffff"><div align="left" class="cimsor">
      <div align="center">Zagyva generátor 1.0 </div>
    </div></td>
  </tr>
  <tr>
	    
	<td bgcolor="#ffffff"><span class="toltelek"><div align="center">Az oldalon egy csomó zagyvalék található. Ezt egy véletlen szó generátor állította elő.<br />
      Ha új zagyvalékra vágysz, csak nyomd meg az F5 billentyűt! A szavak sorrendje mindentől,<br />
      és mindenkitől teljessen független. Ezért ha némelyik szóösszetétel valaki számára esetleg<br />
      sértõ, akkor bocsánat.
      Az oldalon elõállított szöveg szabadon felhasználható bármire!<br />
      A felhasznált szólista a sourceforge.net/projects/wordlist-hu/ oldalról letölthető.</div></span>
      <hr align=center width=75% size=1px /></td></tr>
  <tr>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <td><div align="left"><span class="zagyva">
      <?php
  //Zanyva mondat generátor. A szólista a sourceforge.net/projects/wordlist-hu/
  $filename ="freedict";  //A szavakat tartalmazó fájl
  $file = fopen($filename, "r") or die ("A $filename állományt nem lehet megnyítni!");
  $word = array();  //Létrehozunk egy üres tömbböt
  for ($a = 1; $a <= 70249; $a++)  //Feltöltjük a tömböt
    {
      $word[$a] = fgets($file);
    }
  for ($a = 1; $a <= 5; $a++)  //A bekezdések száma -> 10
    {
      for ($b = 1; $b <= 200; $b++)  //A tömbbõl kiolvasott szavak száma
         {
           $num = rand(1, 70249);  //Véletlenszám generálása
           print $word[$num];  //Kiírjuk a szavat
         }
    print "<br><br>";  //Az egyes bekezdések után két sort kihagy
    }
  fclose($file);
?>
    </span></div></td>
  </tr>
  <tr>
    <td bgcolor="#ffffff"><div align="left" class="copyright">
      <div align="right">Más ötlete alapján készítette: ergate </div>
    </div></td>
  </tr>
</table>

</td>
</tr>
</table>
</body>
</html>
