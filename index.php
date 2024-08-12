<!DOCTYPE html>
<html>
	<head>
		<title>Linux Distributions</title>
		<link href=".css" rel="stylesheet">
	</head>
	<body>
		<center><h1> Linux Distributions </h1></center>
		<form method="post">
			<center>
				<table>
					<tr><th colspan="13"><h1> Filter </h1></th></tr>
					<tr>
						<th>
							<div style="padding: 0px 45px;">
								Base
							</div>
						</th>
						<th>
							<div style="padding: 0px 20px;">
								OS Type
							</div>
						</th>
						<th>
							<div style="padding: 0px 25px;">
								Category
							</div>
						</th>
						<th> Architecture </th>
						<th>
							<div style="padding: 0px 20px;">
								Status
							</div>
						</th>
						<th> Default Interface </th>
						<th>
							<div style="padding: 0px 30px;">
								Desktop Environment
							</div>
						</th>
						<th> Released Year </th>
						<th>
							<div style="padding: 0px 20px;">
								Install Size
							</div>
						</th>
						<th>
							<div style="padding: 0px 60px;">
								Release Model
							</div>
						</th>
						<th>
							<div style="padding: 0px 5px;">
								Package Management
							</div>
						</th>
						<th>
							<div style="padding: 0px 20px;">
								Init System
							</div>
						</th>
						<th>
							<div style="padding: 0px 10px;">
								Image Type
							</div>
						</th>
					</tr>
					<tr>
						<td>
							<input type="checkbox" value="Alpine" name="base[]"> Alpine </input><br/>
							<input type="checkbox" value="Arch" name="base[]"> Arch </input><br/>
							<input type="checkbox" value="CentOS" name="base[]"> CentOS </input><br/>
							<input type="checkbox" value="CRUX" name="base[]"> CRUX </input><br/>
							<input type="checkbox" value="Damn small" name="base[]"> Damn small </input><br/>
							<input type="checkbox" value="Debian" name="base[]"> Debian </input><br/>
							<input type="checkbox" value="Fedora" name="base[]"> Fedora </input><br/>
							<input type="checkbox" value="FreeBSD" name="base[]"> FreeBSD </input><br/>
							<input type="checkbox" value="Gentoo" name="base[]"> Gentoo </input><br/>
							<input type="checkbox" value="Independent" name="base[]"> Independent </input><br/>
							<input type="checkbox" value="LFS" name="base[]"> LFS </input><br/>
							<input type="checkbox" value="LibreELEC" name="base[]"> LibreELEC </input><br/>
							<input type="checkbox" value="LineageOS" name="base[]"> LineageOS </input><br/>
							<input type="checkbox" value="Manjaro" name="base[]"> Manjaro </input><br/>
							<input type="checkbox" value="NethServer" name="base[]"> NethServer </input><br/>
							<input type="checkbox" value="OpenBSD" name="base[]"> OpenBSD </input><br/>
							<input type="checkbox" value="OpenSUSE" name="base[]"> OpenSUSE </input><br/>
							<input type="checkbox" value="Raspbian" name="base[]"> Raspbian </input><br/>
							<input type="checkbox" value=" Red Hat" name="base[]">  Red Hat </input><br/>
							<input type="checkbox" value="ROCK" name="base[]"> ROCK </input><br/>
							<input type="checkbox" value="Slackware" name="base[]"> Slackware </input><br/>
							<input type="checkbox" value="Solaris" name="base[]"> Solaris </input><br/>
							<input type="checkbox" value="Ubuntu" name="base[]"> Ubuntu </input>
						</td>
						<td>
							<input type="checkbox" value="BSD" name="ostype[]"> BSD </input><br/>
							<input type="checkbox" value="GRUB" name="ostype[]"> GRUB </input><br/>
							<input type="checkbox" value="Linux" name="ostype[]"> Linux </input><br/>
							<input type="checkbox" value="Other" name="ostype[]"> Other </input><br/>
							<input type="checkbox" value="Solaris" name="ostype[]"> Solaris </input>
						</td>
						<td>
							<input type="checkbox" value="Data Rescue" name="category[]"> Data Rescue </input><br/>
							<input type="checkbox" value="Desktop" name="category[]"> Desktop </input><br/>
							<input type="checkbox" value="Firewall" name="category[]"> Firewall </input><br/>
							<input type="checkbox" value="Gaming" name="category[]"> Gaming </input><br/>
							<input type="checkbox" value="Live Medium" name="category[]"> Live Medium </input><br/>
							<input type="checkbox" value="Mobile" name="category[]"> Mobile </input><br/>
							<input type="checkbox" value="Multimedia" name="category[]"> Multimedia </input><br/>
							<input type="checkbox" value="No Desktop" name="category[]"> No Desktop </input><br/>
							<input type="checkbox" value="Server" name="category[]"> Server </input><br/>
							<input type="checkbox" value="Source Based" name="category[]"> Source Based </input><br/>
							<input type="checkbox" value="Telephony" name="category[]"> Telephony </input><br/>
							<input type="checkbox" value="Web" name="category[]"> Web </input>
						</td>
						<td>
							<input type="checkbox" value="aarch64" name="arch[]"> aarch64 </input><br/>
							<input type="checkbox" value="armhf" name="arch[]"> armhf </input><br/>
							<input type="checkbox" value="i386" name="arch[]"> i386 </input><br/>
							<input type="checkbox" value="x86_64" name="arch[]"> x86_64 </input>
						</td>
						<td>
							<input type="checkbox" value="1" name="status[]"> Active </input><br/>
							<input type="checkbox" value="0" name="status[]"> Inactive </input>
						</td>
						<td>
							<input type="checkbox" value="GUI" name="defaultinterface[]"> GUI </input><br/>
							<input type="checkbox" value="none" name="defaultinterface[]"> none </input><br/>
							<input type="checkbox" value="TTY" name="defaultinterface[]"> TTY </input><br/>
							<input type="checkbox" value="Web" name="defaultinterface[]"> Web </input>
						</td>
						<td>
							<input type="checkbox" value="AfterStep" name="de[]"> AfterStep </input><br/>
							<input type="checkbox" value="Bliss" name="de[]"> Bliss </input><br/>
							<input type="checkbox" value="Budgie" name="de[]"> Budgie </input><br/>
							<input type="checkbox" value="CDE" name="de[]"> CDE </input><br/>
							<input type="checkbox" value="Chrome" name="de[]"> Chrome </input><br/>
							<input type="checkbox" value="Chromium" name="de[]"> Chromium </input><br/>
							<input type="checkbox" value="Cinnamon" name="de[]"> Cinnamon </input><br/>
							<input type="checkbox" value="Cosmic" name="de[]"> Cosmic </input><br/>
							<input type="checkbox" value="Deepin" name="de[]"> Deepin </input><br/>
							<input type="checkbox" value="Enlightenment" name="de[]"> Enlightenment </input><br/>
							<input type="checkbox" value="Fluxbox" name="de[]"> Fluxbox </input><br/>
							<input type="checkbox" value="FVWM" name="de[]"> FVWM </input><br/>
							<input type="checkbox" value="Gnome" name="de[]"> Gnome </input><br/>
							<input type="checkbox" value="Haiku" name="de[]"> Haiku </input><br/>
							<input type="checkbox" value="helloDesktop" name="de[]"> helloDesktop </input><br/>
							<input type="checkbox" value="i3" name="de[]"> i3 </input><br/>
							<input type="checkbox" value="IceWM" name="de[]"> IceWM </input><br/>
							<input type="checkbox" value="JWM" name="de[]"> JWM </input><br/>
							<input type="checkbox" value="KDE" name="de[]"> KDE </input><br/>
							<input type="checkbox" value="Kodi" name="de[]"> Kodi </input><br/>
							<input type="checkbox" value="LXDE" name="de[]"> LXDE </input><br/>
							<input type="checkbox" value="LXQt" name="de[]"> LXQt </input><br/>
							<input type="checkbox" value="MATE" name="de[]"> MATE </input><br/>
							<input type="checkbox" value="none" name="de[]"> none </input><br/>
							<input type="checkbox" value="NX Desktop" name="de[]"> NX Desktop </input><br/>
							<input type="checkbox" value="Omxplayer" name="de[]"> Omxplayer </input><br/>
							<input type="checkbox" value="Openbox" name="de[]"> Openbox </input><br/>
							<input type="checkbox" value="Pantheon" name="de[]"> Pantheon </input><br/>
							<input type="checkbox" value="Pinboard" name="de[]"> Pinboard </input><br/>
							<input type="checkbox" value="ReactOS Explorer" name="de[]"> ReactOS Explorer </input><br/>
							<input type="checkbox" value="RetroArch" name="de[]"> RetroArch </input><br/>
							<input type="checkbox" value="Trinity" name="de[]"> Trinity </input><br/>
							<input type="checkbox" value="Unity" name="de[]"> Unity </input><br/>
							<input type="checkbox" value="Weston" name="de[]"> Weston </input><br/>
							<input type="checkbox" value="WMaker" name="de[]"> WMaker </input><br/>
							<input type="checkbox" value="Xfce" name="de[]"> Xfce </input>
						</td>
						<td>
							<input type="checkbox" name="releasedyear[]" value="1994"> 1994 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="1996"> 1996 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="1997"> 1997 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="1998"> 1998 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="1999"> 1999 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2000"> 2000 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2001"> 2001 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2002"> 2002 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2003"> 2003 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2004"> 2004 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2005"> 2005 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2006"> 2006 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2007"> 2007 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2008"> 2008 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2009"> 2009 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2010"> 2010 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2011"> 2011 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2012"> 2012 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2013"> 2013 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2014"> 2014 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2015"> 2015 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2016"> 2016 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2017"> 2017 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2018"> 2018 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2019"> 2019 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2020"> 2020 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2021"> 2021 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2022"> 2022 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2023"> 2023 </input><br/>
							<input type="checkbox" name="releasedyear[]" value="2024"> 2024 </input><br/>
						</td>
						<td>
							<input type="checkbox" name="installsize[]" value="16M"> 16M </input><br/>
							<input type="checkbox" name="installsize[]" value="50M"> 50M </input><br/>
							<input type="checkbox" name="installsize[]" value="78M"> 78M </input><br/>
							<input type="checkbox" name="installsize[]" value="90M"> 90M </input><br/>
							<input type="checkbox" name="installsize[]" value="100M"> 100M </input><br/>
							<input type="checkbox" name="installsize[]" value="140M"> 140M </input><br/>
							<input type="checkbox" name="installsize[]" value="200M"> 200M </input><br/>
							<input type="checkbox" name="installsize[]" value="250M"> 250M </input><br/>
							<input type="checkbox" name="installsize[]" value="270M"> 270M </input><br/>
							<input type="checkbox" name="installsize[]" value="300M"> 300M </input><br/>
							<input type="checkbox" name="installsize[]" value="400M"> 400M </input><br/>
							<input type="checkbox" name="installsize[]" value="426M"> 426M </input><br/>
							<input type="checkbox" name="installsize[]" value="460M"> 460M </input><br/>
							<input type="checkbox" name="installsize[]" value="500M"> 500M </input><br/>
							<input type="checkbox" name="installsize[]" value="532M"> 532M </input><br/>
							<input type="checkbox" name="installsize[]" value="595M"> 595M </input><br/>
							<input type="checkbox" name="installsize[]" value="600M"> 600M </input><br/>
							<input type="checkbox" name="installsize[]" value="631M"> 631M </input><br/>
							<input type="checkbox" name="installsize[]" value="640M"> 640M </input><br/>
							<input type="checkbox" name="installsize[]" value="660M"> 660M </input><br/>
							<input type="checkbox" name="installsize[]" value="700M"> 700M </input><br/>
							<input type="checkbox" name="installsize[]" value="730M"> 730M </input><br/>
							<input type="checkbox" name="installsize[]" value="800M"> 800M </input><br/>
							<input type="checkbox" name="installsize[]" value="816M"> 816M </input><br/>
							<input type="checkbox" name="installsize[]" value="870M"> 870M </input><br/>
							<input type="checkbox" name="installsize[]" value="900M"> 900M </input><br/>
							<input type="checkbox" name="installsize[]" value="930M"> 930M </input><br/>
							<input type="checkbox" name="installsize[]" value="1G"> 1G </input><br/>
							<input type="checkbox" name="installsize[]" value="1.1G"> 1.1G </input><br/>
							<input type="checkbox" name="installsize[]" value="1.2G"> 1.2G </input><br/>
							<input type="checkbox" name="installsize[]" value="1.3G"> 1.3G </input><br/>
							<input type="checkbox" name="installsize[]" value="1.4G"> 1.4G </input><br/>
							<input type="checkbox" name="installsize[]" value="1.5G"> 1.5G </input><br/>
							<input type="checkbox" name="installsize[]" value="1.6G"> 1.6G </input><br/>
							<input type="checkbox" name="installsize[]" value="1.7G"> 1.7G </input><br/>
							<input type="checkbox" name="installsize[]" value="1.8G"> 1.8G </input><br/>
							<input type="checkbox" name="installsize[]" value="1.9G"> 1.9G </input><br/>
							<input type="checkbox" name="installsize[]" value="2G"> 2G </input><br/>
							<input type="checkbox" name="installsize[]" value="2.07G"> 2.07G </input><br/>
							<input type="checkbox" name="installsize[]" value="2.1G"> 2.1G </input><br/>
							<input type="checkbox" name="installsize[]" value="2.2G"> 2.2G </input><br/>
							<input type="checkbox" name="installsize[]" value="2.3G"> 2.3G </input><br/>
							<input type="checkbox" name="installsize[]" value="2.4G"> 2.4G </input><br/>
							<input type="checkbox" name="installsize[]" value="2.5G"> 2.5G </input><br/>
							<input type="checkbox" name="installsize[]" value="2.6G"> 2.6G </input><br/>
							<input type="checkbox" name="installsize[]" value="2.7G"> 2.7G </input><br/>
							<input type="checkbox" name="installsize[]" value="2.8G"> 2.8G </input><br/>
							<input type="checkbox" name="installsize[]" value="2.9G"> 2.9G </input><br/>
							<input type="checkbox" name="installsize[]" value="3G"> 3G </input><br/>
							<input type="checkbox" name="installsize[]" value="3.1G"> 3.1G </input><br/>
							<input type="checkbox" name="installsize[]" value="3.2G"> 3.2G </input><br/>
							<input type="checkbox" name="installsize[]" value="3.3G"> 3.3G </input><br/>
							<input type="checkbox" name="installsize[]" value="3.4G"> 3.4G </input><br/>
							<input type="checkbox" name="installsize[]" value="3.5G"> 3.5G </input><br/>
							<input type="checkbox" name="installsize[]" value="3.6G"> 3.6G </input><br/>
							<input type="checkbox" name="installsize[]" value="3.7G"> 3.7G </input><br/>
							<input type="checkbox" name="installsize[]" value="3.8G"> 3.8G </input><br/>
							<input type="checkbox" name="installsize[]" value="3.9G"> 3.9G </input><br/>
							<input type="checkbox" name="installsize[]" value="4G"> 4G </input><br/>
							<input type="checkbox" name="installsize[]" value="4.1G"> 4.1G </input><br/>
							<input type="checkbox" name="installsize[]" value="4.2G"> 4.2G </input><br/>
							<input type="checkbox" name="installsize[]" value="4.3G"> 4.3G </input><br/>
							<input type="checkbox" name="installsize[]" value="4.4G"> 4.4G </input><br/>
							<input type="checkbox" name="installsize[]" value="4.5G"> 4.5G </input><br/>
							<input type="checkbox" name="installsize[]" value="4.6G"> 4.6G </input><br/>
							<input type="checkbox" name="installsize[]" value="4.7G"> 4.7G </input><br/>
							<input type="checkbox" name="installsize[]" value="4.8G"> 4.8G </input><br/>
							<input type="checkbox" name="installsize[]" value="4.9G"> 4.9G </input><br/>
							<input type="checkbox" name="installsize[]" value="5.1G"> 5.1G </input><br/>
							<input type="checkbox" name="installsize[]" value="5.2G"> 5.2G </input><br/>
							<input type="checkbox" name="installsize[]" value="5.4G"> 5.4G </input><br/>
							<input type="checkbox" name="installsize[]" value="5.7G"> 5.7G </input><br/>
							<input type="checkbox" name="installsize[]" value="5.8G"> 5.8G </input><br/>
							<input type="checkbox" name="installsize[]" value="6.2G"> 6.2G </input><br/>
							<input type="checkbox" name="installsize[]" value="6.8G"> 6.8G </input><br/>
							<input type="checkbox" name="installsize[]" value="15G"> 15G </input><br/>
							<input type="checkbox" name="installsize[]" value="22G"> 22G </input><br/>
							<input type="checkbox" name="installsize[]" value="unknown"> unknown </input>
						</td>
						<td>
							<input type="checkbox" value="Fixed Release" name="releasemodel[]"> Fixed Release </input><br/>
							<input type="checkbox" value="Rolling Release" name="releasemodel[]">
								Rolling Release
							</input><br/>
							<input type="checkbox" value="Semi-Rooling Release" name="releasemodel[]">
								Semi-Rooling Release
							</input>
						</td>
						<td>
							<input type="checkbox" value="apk" name="packagemanagement[]"> apk </input><br/>
							<input type="checkbox" value="apt" name="packagemanagement[]"> apt </input><br/>
							<input type="checkbox" value="cards" name="packagemanagement[]"> cards </input><br/>
							<input type="checkbox" value="Click" name="packagemanagement[]"> Click </input><br/>
							<input type="checkbox" value="dports" name="packagemanagement[]"> dports </input><br/>
							<input type="checkbox" value="emerge" name="packagemanagement[]"> emerge </input><br/>
							<input type="checkbox" value="flatpack" name="packagemanagement[]"> flatpack </input><br/>
							<input type="checkbox" value="Guix" name="packagemanagement[]"> Guix </input><br/>
							<input type="checkbox" value="ips" name="packagemanagement[]"> ips </input><br/>
							<input type="checkbox" value="kpkg" name="packagemanagement[]"> kpkg </input><br/>
							<input type="checkbox" value="mports" name="packagemanagement[]"> mports </input><br/>
							<input type="checkbox" value="nix" name="packagemanagement[]"> nix </input><br/>
							<input type="checkbox" value="none" name="packagemanagement[]"> none </input><br/>
							<input type="checkbox" value="pacman" name="packagemanagement[]"> pacman </input><br/>
							<input type="checkbox" value="pakfire" name="packagemanagement[]"> pakfire </input><br/>
							<input type="checkbox" value="PET" name="packagemanagement[]"> PET </input><br/>
							<input type="checkbox" value="PiSi" name="packagemanagement[]"> PiSi </input><br/>
							<input type="checkbox" value="PKG" name="packagemanagement[]"> PKG </input><br/>
							<input type="checkbox" value="pkgman" name="packagemanagement[]"> pkgman </input><br/>
							<input type="checkbox" value="pkgsrc" name="packagemanagement[]"> pkgsrc </input><br/>
							<input type="checkbox" value="portage" name="packagemanagement[]"> portage </input><br/>
							<input type="checkbox" value="rpm" name="packagemanagement[]"> rpm </input><br/>
							<input type="checkbox" value="rpm-ostree" name="packagemanagement[]"> rpm-ostree </input><br/>
							<input type="checkbox" value="scratch" name="packagemanagement[]"> scratch </input><br/>
							<input type="checkbox" value="slapt-get" name="packagemanagement[]"> slapt-get </input><br/>
							<input type="checkbox" value="snap" name="packagemanagement[]"> snap </input><br/>
							<input type="checkbox" value="SRC" name="packagemanagement[]"> SRC </input><br/>
							<input type="checkbox" value="swupd" name="packagemanagement[]"> swupd </input><br/>
							<input type="checkbox" value="tazpkg" name="packagemanagement[]"> tazpkg </input><br/>
							<input type="checkbox" value="TCE" name="packagemanagement[]"> TCE </input><br/>
							<input type="checkbox" value="TGZ" name="packagemanagement[]"> TGZ </input><br/>
							<input type="checkbox" value="TLZ" name="packagemanagement[]"> TLZ </input><br/>
							<input type="checkbox" value="TXZ" name="packagemanagement[]"> TXZ </input><br/>
							<input type="checkbox" value="unknown" name="packagemanagement[]"> unknown </input><br/>
							<input type="checkbox" value="upkg" name="packagemanagement[]"> upkg </input><br/>
							<input type="checkbox" value="xbps" name="packagemanagement[]"> xbps </input>
						</td>
						<td>
							<input type="checkbox" value="busybox" name="initsystem[]"> busybox </input><br/>
							<input type="checkbox" value="none" name="initsystem[]"> none </input><br/>
							<input type="checkbox" value="openrc" name="initsystem[]"> openRC </input><br/>
							<input type="checkbox" value="RC" name="initsystem[]"> RC </input><br/>
							<input type="checkbox" value="runit" name="initsystem[]"> runit </input><br/>
							<input type="checkbox" value="s6" name="initsystem[]"> s6 </input><br/>
							<input type="checkbox" value="Shepherd" name="initsystem[]"> Shepherd </input><br/>
							<input type="checkbox" value="systemd" name="initsystem[]"> systemd </input><br/>
							<input type="checkbox" value="SysV" name="initsystem[]"> SysV </input><br/>
							<input type="checkbox" value="UFS" name="initsystem[]"> UFS </input><br/>
							<input type="checkbox" value="unknown" name="initsystem[]"> unknown </input>
						</td>
						<td>
							<input type="checkbox" value="img" name="imagetype[]"> IMG </input><br/>
							<input type="checkbox" value="iso" name="imagetype[]"> ISO </input><br/>
							<input type="checkbox" value="script" name="imagetype[]"> script </input><br/>
							<input type="checkbox" value="ova" name="imagetype[]"> OVA </input>
						</td>
					</tr>
					<tr>
						<td colspan="14">
							<div style="float:right;">
								<button name="default" value="none"> Show All </button>
								<button name="submit" value="filter"> Submit </button>
							</div>
						</td>
					</tr>
				</table>
			</center>
		</form>
		<br/><br/><br/>
		<?php
			include('init.php');
			include('filter.php');
		?>
	<body>
</html>
