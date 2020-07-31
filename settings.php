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
 * Plugin settings
 *
 * @copyright   2019 onwards Conn Warwicker
 * @package     assignfeedback_gradetracker
 * @version     1.0
 * @author      Conn Warwicker <conn@cmrwarwicker.com>
 */

defined('MOODLE_INTERNAL') or die();

$settings->add(new admin_setting_configcheckbox('assignfeedback_gradetracker/default',
                new lang_string('default', 'assignfeedback_gradetracker'),
                new lang_string('default_help', 'assignfeedback_gradetracker'), 0));

