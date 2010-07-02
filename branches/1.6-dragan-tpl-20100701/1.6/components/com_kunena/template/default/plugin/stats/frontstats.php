<?php
/**
* @version $Id$
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2010 Kunena Team All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.com
*
* Based on FireBoard Component
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
*
* Based on Joomlaboard Component
* @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF & Jan de Graaff
**/

// Dont allow direct linking
defined( '_JEXEC' ) or die();

if ($this->showgenstats > 0)
{
	$this->loadGenStats();

	$kunena_config = KunenaFactory::getConfig ();

	$userlist1 = CKunenaLink::GetUserlistLink('', $this->totalmembers);
	$userlist2 = CKunenaLink::GetUserlistLink('', JText::_('COM_KUNENA_STAT_USERLIST').' &raquo;');

    	?>
<div class="kblock">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close"  rel="frontstats_tbody"></a></span>
		<h2><span><?php echo CKunenaLink::GetStatsLink($kunena_config->board_title.' '.JText::_('COM_KUNENA_STAT_FORUMSTATS'), ''); ?></span></h2>
	</div>
	<div class="kcontainer" id="frontstats_tbody">
		<div class="kbody">
        	<table class = "kblocktable" id ="kfrontstats">
                <tr class="krow1">
                    <td class = "kfirst" width="1%">
						<div class="kstatsicon"></div>
                    </td>
                    <td class="kmiddle km">
                    	<ul id="kstatslistright" class="fltrt kright">
                    		<li><?php echo JText::_('COM_KUNENA_STAT_TOTAL_USERS'); ?>: <strong><?php echo $userlist1; ?></strong> <span class="divider">|</span> <?php echo JText::_('COM_KUNENA_STAT_LATEST_MEMBERS'); ?>:<strong> <?php echo CKunenaLink::GetProfileLink($this->lastestmemberid, $this->lastestmember, '', $rel='nofollow'); ?></strong></li>
                    		<li>&nbsp;</li>
                    		<li><?php echo $userlist2; ?></li>
                    		<li><?php if ($kunena_config->showpopuserstats || $kunena_config->showpopsubjectstats) echo CKunenaLink::GetStatsLink(JText::_('COM_KUNENA_STAT_MORE_ABOUT_STATS').' &raquo;');?></li>
                    	</ul>
                    	<ul id="kstatslistleft" class="fltlft">
                    		<li><?php echo JText::_('COM_KUNENA_STAT_TOTAL_MESSAGES'); ?>: <strong> <?php echo $this->totalmsgs; ?></strong> <span class="divider">|</span> <?php echo JText::_('COM_KUNENA_STAT_TOTAL_SUBJECTS'); ?>: <strong><?php echo $this->totaltitles; ?></strong></li>
                    		<li><?php echo JText::_('COM_KUNENA_STAT_TOTAL_SECTIONS'); ?>: <strong><?php echo $this->totalcats; ?></strong> <span class="divider-stat">|</span> <?php echo JText::_('COM_KUNENA_STAT_TOTAL_CATEGORIES'); ?>: <strong><?php echo $this->totalsections; ?></strong></li>
                    		<li><?php echo JText::_('COM_KUNENA_STAT_TODAY_OPEN_THREAD'); ?>: <strong><?php echo $this->todayopen; ?></strong> <span class="divider">|</span> <?php echo JText::_('COM_KUNENA_STAT_YESTERDAY_OPEN_THREAD'); ?>: <strong><?php echo $this->yesterdayopen; ?></strong></li>
                    		<li><?php echo JText::_('COM_KUNENA_STAT_TODAY_TOTAL_ANSWER'); ?>: <strong><?php echo $this->todayanswer; ?></strong> <span class="divider">|</span> <?php echo JText::_('COM_KUNENA_STAT_YESTERDAY_TOTAL_ANSWER'); ?>: <strong><?php echo $this->yesterdayanswer; ?></strong></li>
                    	</ul>
                    </td>
                </tr>
        	</table>
        </div>
	</div>
</div>

<?php
}

