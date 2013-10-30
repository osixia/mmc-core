<?php
/**
 * (c) 2004-2007 Linbox / Free&ALter Soft, http://linbox.com
 * (c) 2007-2013 Mandriva, http://www.mandriva.com
 *
 * $Id$
 *
 * This file is part of Mandriva Management Console (MMC).
 *
 * MMC is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * MMC is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with MMC; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

require("graph/navbar.inc.php");
require("localSidebar.php");

/* DEBUG 
//print_r(getPluginsWithReports());
print '<pre>';
//print_r(getAllReports());
print_r($_POST);
print '</pre>';
//*/

$p = new TabbedPageGenerator();

$p->setSideMenu($sidemenu);

// Tabbed page main title
$p->addTop(_T("Reporting Management", 'report'), "modules/report/report/header.php");

// Add tabs
$p->addTab("manual_report", _T('Manual Report', 'report'), _T('Manual Report', 'report'), "modules/report/report/manual_report.php", array());
$p->addTab("automatic_report", _T('Automatic Report', 'report'), _T('Automatic Report', 'report'), "modules/report/report/automatic_report.php", array());

$p->display();
?>
<script type="text/javascript" src="modules/report/lib/pygal/svg.jquery.js"></script>
<script type="text/javascript" src="modules/report/lib/pygal/pygal-tooltips.js"></script>