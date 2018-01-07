<?php

return [
	'main-title'                      => 'Panic Help Desk',
	'not-yet-installed'               => '<b>Current status:</b> The package installation <b>hasn\'t finished yet</b>.',
	'welcome'                         => 'Welcome to the <b>Panic Help Desk installation menu!</b>',
	'setup-list'                      => 'Once you click on "Install now!" button, the following tasks will be done:',
    'initial-setup'                   => 'Initial Setup',
	
	'setup-list-migrations'           => '<b>:num</b> migration files will be published to Laravel app and installed',
	'setup-migrations-more-info'      => 'View migrations detail',
	'setup-migrations-less-info'      => 'Hide migrations detail',
	
	'setup-list-settings'             => 'PanicHD settings table will be filled up with it\'ts default values stored in SettingsTableSeeder.php',
	'setup-list-admin'                => 'Your user account (:name &lt;:email>) will be added as Panic Help Desk administrator. You may add other administrators later.',
    'setup-list-public-assets'        => 'All the imperative css, js... package files will be copied to  "public\vendor\panichd" Laravel folder.',
	'optional-config'                 => 'Optional configuration',
	'optional-quickstart-data'        => 'Add quickstart configuration:<ul><li>Add essential priorities, statuses and a new category.</li><li>Current user will be added as an agent on that category.</li><li>All of them are editable after installation.</li></ul>',
	'install-now'                     => 'Install now!',
	
	'just-installed'                  => 'Congratulations! You have Panic Help Desk <b>installed and configured</b>.',
	'installed-package-options'       => 'From now you may access whenever you want to :panichd to control package status. Some actions you may do now are:',
	'package-link-categories'         => 'Manage ticket categories',
	'package-link-new-ticket'         => 'Create a new ticket',
	
	'package-requires-update'         => 'Panic Help Desk requires to <b>configure an upgrade</b>',
	'package-requires-update-info'    => 'The administrator has installed a Panic Help Desk upgrade but has not finished configuring it. Please wait until the process has ended',
	
	'status-out-of-date'              => '<b>Current status: Offline</b> until the the upgrade is configured',
	'about-to-update'                 => 'This is the Panic Help Desk <b>upgrade menu</b>',
	'about-to-update-description'     => 'Once you click on the "Upgrade now" button, the following changes are going to be done:',
	'all-tables-migrated'             => 'There are no pending database updates, so no migration will be executed',
	'upgrade-now'                     => 'Upgrade now!',
	
	
	'package-status-ok'               => 'The package is correctly configured',
	
	'master-template-file'            => 'Master template file',
    'master-template-other-path'      => 'Other path to the master template file',
    'master-template-other-path-ex'   => 'ex. views/layouts/app.blade.php',
    'migrations-to-be-installed'      => 'These migrations will be installed:',
    
    'another-file'                    => 'another File',
    'upgrade'                         => 'Panic Help Desk version upgrade', // New v0.2.3
    'settings-to-be-installed'        => 'These settings will be installed:', // New v0.2.3
    'all-settings-installed'          => 'All needed settings are installed', // New v0.2.3
];
