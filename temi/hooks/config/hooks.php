<?php //Create hooks php8.5 phile
$hook['pre_system'] = function () {
    // Code to execute before the system starts
    if (!defined('BASEPATH')) {
        exit('No direct script access allowed');
    }
};
$hook['post_system'] = function () {
    if (!defined('BASEPATH')) {
        exit('No direct script access allowed');
    }
};
$hook[''] = function () {
    if (!defined('BASEPATH')) {
        exit('No direct script access allowed');
    }
};
//<title><?php echo $pre_system ?? 'My App'; ?></title>