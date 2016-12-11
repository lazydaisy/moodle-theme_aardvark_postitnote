<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   theme_aardvard_postit
 * @copyright 2012 Mary Evans
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

<div id="profilename">
    <ul>
        <li>
            <a href="<?php echo $CFG->wwwroot.'/user/view.php?id='.$USER->id.'&amp;course='.$COURSE->id;?>"><?php echo $USER->firstname; ?></a>
        </li>
        <li>
            <a id="toggle" href="javascript:toggle5('profilebar', 'toggle');" title="show &#9660;/hide &#9650;">&#9660;</a>
        </li>
    </ul>
</div>
</div><!-- END #headerwrap -->

<div id="profilebar" style="display: none;">
<div id="profilebar-innerwrap">

    <ul id="navlist">
        <li><a class="my" href="<?php echo $CFG->wwwroot; ?>/my">
        <?php echo get_string('mycourses');?></a>
        </li>

        <li><a class="myp" href="<?php echo $CFG->wwwroot; ?>/user/profile.php">
        <?php echo get_string('myprofile');?></a>
        </li>

        <li><a class="myf" href="<?php echo $CFG->wwwroot; ?>/user/files.php">
        <?php echo get_string('myfiles');?></a>
        </li>

        <li><a class="cal" href="<?php echo $CFG->wwwroot; ?>/calendar/view.php?view=month">
        <?php echo get_string('calendar','calendar');?></a>
        </li>

        <?php if ($hasemailurl) { ?>
        <li><a class="mail" href="<?php echo $PAGE->theme->settings->emailurl;?>">
        <?php echo get_string('email','theme_aardvark_postitnote');?></a>
        <?php } ?>
        </li>

        <li><a class="log" href="<?php echo $CFG->wwwroot . '/login/logout.php?sesskey=' . sesskey(); ?>">
        <?php echo get_string('logout');?></a>
        </li>
        <?php
    if ($haspostitnote1 || $haspostitnote2 || $haspostitnote3 ) { ?>
        <li><a href=""><?php echo $PAGE->theme->settings->postitnote1; ?></a></li>
        <li><a href=""><?php echo $PAGE->theme->settings->postitnote2; ?></a></li>
        <li><a href=""><?php echo $PAGE->theme->settings->postitnote3; ?></a></li>
    <?php } ?>
    </ul>
</div>
<div class="clearfix"></div>
</div>
<div class="profilebar-clear"></div>
