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
 * Attendance report block
 *
 * @package   block_naplan_results_report
 * @copyright 2021 Veronica Bermegui
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();


if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_heading(
        'block_naplan_results_report',
        '',
        get_string('pluginname_desc', 'block_naplan_results_report')
    ));

    $options = array('', "mysqli", "oci", "pdo", "pgsql", "sqlite3", "sqlsrv");
    $options = array_combine($options, $options);

    $settings->add(new admin_setting_configselect(
        'block_naplan_results_report/dbtype',
        get_string('dbtype', 'block_naplan_results_report'),
        get_string('dbtype_desc', 'block_naplan_results_report'),
        '',
        $options
    ));

    $settings->add(new admin_setting_configtext('block_naplan_results_report/dbhost', get_string('dbhost', 'block_naplan_results_report'), get_string('dbhost_desc', 'block_naplan_results_report'), 'localhost'));

    $settings->add(new admin_setting_configtext('block_naplan_results_report/dbuser', get_string('dbuser', 'block_naplan_results_report'), '', ''));

    $settings->add(new admin_setting_configpasswordunmask('block_naplan_results_report/dbpass', get_string('dbpass', 'block_naplan_results_report'), '', ''));

    $settings->add(new admin_setting_configtext('block_naplan_results_report/dbname', get_string('dbname', 'block_naplan_results_report'), '', ''));

    $settings->add(new admin_setting_configtext('block_naplan_results_report/dbspnaplanresult', get_string('dbspnaplanresult', 'block_naplan_results_report'), get_string('dbspnaplanresult_desc', 'block_naplan_results_report'), ''));
    
    $settings->add(new admin_setting_configtext('block_naplan_results_report/profileurl', get_string('profileurl', 'block_naplan_results_report'), get_string('profileurl_desc', 'block_naplan_results_report'), ''));
    
    $settings->add(new admin_setting_configtext('block_naplan_results_report/bcyear3', get_string('bcyear3', 'block_naplan_results_report'), get_string('bcyear3_desc', 'block_naplan_results_report'), 'rgba(255, 99, 132, 0.2)'));
    
    $settings->add(new admin_setting_configtext('block_naplan_results_report/bcyear5', get_string('bcyear5', 'block_naplan_results_report'), get_string('bcyear5_desc', 'block_naplan_results_report'), 'rgba(255, 206, 86, 0.2)'));

    $settings->add(new admin_setting_configtext('block_naplan_results_report/bcyear7', get_string('bcyear7', 'block_naplan_results_report'), get_string('bcyear7_desc', 'block_naplan_results_report'), 'rgba(153, 102, 255, 0.2)'));

    $settings->add(new admin_setting_configtext('block_naplan_results_report/bcyear9', get_string('bcyear9', 'block_naplan_results_report'), get_string('bcyear9_desc', 'block_naplan_results_report'), 'rgba(153, 102, 255, 0.2)'));

    
}
