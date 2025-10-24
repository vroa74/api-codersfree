<?php

// Script to create complete users_data.sql file
$usersData = "INSERT INTO `users` (`id`, `name`, `rfc`, `curp`, `direction`, `position`, `sex`, `lvl`, `tipo`, `status`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES\n";

// Add all the user data here - this is a template
// You would need to add all 233 users from your data

$usersData .= "(1, 'DALILA DEL CARMEN MATA PEREZ', 'AACL508851', 'AACL508851', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'AACL@inbox.com', '2025-06-24 17:15:31', '\$2y\$12\$cFR6BjIW4XzvyixwPyh3jOCPSZPNlU0TfyrF5RkL5k4tlg1RXaVGi', NULL, NULL, NULL, '41Uf7ENsbL', NULL, 'profile-photos/OQTYf967b24VURD339gJHrheNLeyYwPoO72CXaRo.png', '2025-06-24 17:15:31', '2025-09-02 18:35:44'),\n";

// Write to file
file_put_contents('database/seeders/users_data.sql', $usersData);

echo "SQL file created successfully!\n";
