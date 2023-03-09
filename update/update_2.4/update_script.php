<?php
$CI = get_instance();
$CI->load->database();
$CI->load->dbforge();



// INSERT VERSION NUMBER INSIDE SETTINGS TABLE
$settings_data = array( 'description' => '2.4');
$CI->db->where('type', 'version');
$CI->db->update('settings', $settings_data);
?>
