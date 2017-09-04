<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Mobile Detect</title>
<?php
//llamada a la clase Mobile_Detect:
include 'Mobile_Detect.php';

//se crea una instancia:
$detect = new Mobile_Detect();

if (!$detect->isMobile() && !$detect->isTablet()) {
echo('<link rel="stylesheet" href="css/pc.css">');//pc
}

if ($detect->isMobile() && !$detect->isTablet()) {
echo('<link rel="stylesheet" href="css/movil.css">');//movil
}

if ($detect->isTablet()) {
echo('<link rel="stylesheet" href="css/tablet.css">');//tablet
}
?>
</head>

<body>

<h1>
<?php
if (!$detect->isMobile() && !$detect->isTablet()) {
echo("Detecta PC (no es móvil-tableta)");
}

if ($detect->isMobile() && !$detect->isTablet()) {
echo("Detecta que es un móvil");
}

if ($detect->isTablet()) {
echo("Detecta que es un tablet");
}

if ($detect->isAndroidOS()) {
echo(" [Android]");
}

if ($detect->isiOS()){
echo(" [IOS]");
}

?>
</h1>
<hr>
<h3>Supported methods (mas info: <a href="https://github.com/serbanghita/Mobile-Detect">https://github.com/serbanghita/Mobile-Detect</a>)</h3>
<table cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <th colspan="2">Basic detection methods</th>
    </tr>
    <tr>
      <td>isMobile()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isTablet()</td>
      <td>bool(false)</td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th colspan="2">Custom detection methods</th>
    </tr>
    <tr>
      <td>isiPhone()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isBlackBerry()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isHTC()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isNexus()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isDell()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isMotorola()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isSamsung()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isSony()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isAsus()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isPalm()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isVertu()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isPantech()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isGenericPhone()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isBlackBerryTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isiPad()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isNexusTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isKindle()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isSamsungTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isHTCtablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isMotorolaTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isAsusTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isNookTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isAcerTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isToshibaTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isYarvikTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isMedionTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isArnovaTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isArchosTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isAinolTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isSonyTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isCubeTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isCobyTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isTelstraTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isGenericTablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isAndroidOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isBlackBerryOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isPalmOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isSymbianOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isWindowsMobileOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isWindowsPhoneOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isiOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isFlashLiteOS()</td>
      <td>NULL</td>
    </tr>
    <tr>
      <td>isMeeGoOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isMaemoOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isJavaOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>iswebOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isbadaOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isBREWOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isChrome()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isDolfin()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isOpera()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isSkyfire()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isIE()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isFirefox()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isBolt()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isTeaShark()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isBlazer()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isSafari()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isTizen()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isUCBrowser()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isDiigoBrowser()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isGenericBrowser()</td>
      <td>bool(false)</td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th colspan="2">Experimental version() method</th>
    </tr>
    <tr>
      <td>version(Version)</td>
      <td>float(5.17)</td>
    </tr>
    <tr>
      <td>version(Safari)</td>
      <td>float(5.17)</td>
    </tr>
    <tr>
      <td>version(Webkit)</td>
      <td>float(534.572)</td>
    </tr>
    <tr>
      <td>version(Gecko)</td>
      <td>int(0)</td>
    </tr>
    <tr>
      <td>version(Windows NT)</td>
      <td>float(6)</td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th colspan="2">Other tests</th>
    </tr>
    <tr>
      <td>isiphone()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isIphone()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>istablet()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isIOS()</td>
      <td>bool(false)</td>
    </tr>
    <tr>
      <td>isWhateverYouWant()</td>
      <td>bool(false)</td>
    </tr>
  </tbody>
</table>
</body>
</html>