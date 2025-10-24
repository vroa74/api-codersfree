<?php

// This script will create a complete UserSeeder with all the users
// Run this script to generate the complete seeder

$usersData = "INSERT INTO `users` (`id`, `name`, `rfc`, `curp`, `direction`, `position`, `sex`, `lvl`, `tipo`, `status`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'DALILA DEL CARMEN MATA PEREZ', 'AACL508851', 'AACL508851', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'AACL@inbox.com', '2025-06-24 17:15:31', '\$2y\$12\$cFR6BjIW4XzvyixwPyh3jOCPSZPNlU0TfyrF5RkL5k4tlg1RXaVGi', NULL, NULL, NULL, '41Uf7ENsbL', NULL, 'profile-photos/OQTYf967b24VURD339gJHrheNLeyYwPoO72CXaRo.png', '2025-06-24 17:15:31', '2025-09-02 18:35:44'),
(2, 'ENA AMERICA GARCIA GARCIA', 'ACAA367505', 'ACAA367505', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'ACAA@live.com', '2025-06-24 17:15:31', '\$2y\$12\$CAnloBXqWRY2ZJiMp0sXN.m3P8gG/nRBXoI5kxBE.PuszEI07Wjfe', NULL, NULL, NULL, 'Km0zO0alub', NULL, 'profile-photos/aLu18bDcSs1mZptiN3ifnUZDq1ldza1jGi0PPgsg.png', '2025-06-24 17:15:31', '2025-09-02 18:35:45'),
(3, 'MAYDA ARACELY MAS TUN', 'ULLA104543', 'ULLA104543', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'ULLA@inbox.com', '2025-06-24 17:15:31', '\$2y\$12\$qFVKGWIszWZkUbjj0crJKO69/77G82CuO95Yki0M/muZCxADgf2i6', NULL, NULL, NULL, 'gP4yxdvGh6', NULL, 'profile-photos/RAWr9ccGfriAlhPl02eVUEZ054eEPY52lbXDpIkY.png', '2025-06-24 17:15:31', '2025-09-02 18:35:46'),
(4, 'GLADYS SOFIA RIVERA LOPEZ', 'RLIO536855', 'RLIO536855', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'RLIO@icloud.com', '2025-06-24 17:15:32', '\$2y\$12\$2BH9ZKh16H5uj2NKjI7P/.rWmQF4PxMGDLwC6Uiwi1aqpGDCFOZB2', NULL, NULL, NULL, 'Fg9loOQ5Hc', NULL, 'profile-photos/ya2uLqKz79MJW3Ks7m4HCEKof9DkVMxtmLaPypqH.png', '2025-06-24 17:15:32', '2025-09-02 18:35:47'),
(5, 'VERONICA MARGARITA ROCA MENDEZ', 'CVCO569436', 'CVCO569436', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'CVCO@hotmail.com', '2025-06-24 17:15:32', '\$2y\$12\$po6pNhnm6FYzwjPkAuSDMeevfO4Q5aBirplH/X.ZhkFlNqT.QCWli', NULL, NULL, NULL, 'nS9GVDAERH', NULL, 'profile-photos/N2UD2ZMaMIMoHQA4x00N4m8gN40LP58i29IgZxY6.png', '2025-06-24 17:15:32', '2025-09-02 18:35:51'),
(6, 'FRANCISCA ZARATE LOPEZ', 'AEEZ817458', 'AEEZ817458', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'AEEZ@icloud.com', '2025-06-24 17:15:32', '\$2y\$12\$lZamHPYYkEWulRrBQvayAuayjWgrS7Z.4IPjVwtx04b8ncrcWF3q.', NULL, NULL, NULL, 'VC98tXe7rj', NULL, 'profile-photos/bG5q5KfLYwgdc3BWN7sCW9dCxDaPyHIxKrmvcOhB.png', '2025-06-24 17:15:32', '2025-09-02 18:35:50'),
(7, 'DIANA LUISA AGUILAR RUELAS', 'AAGR447174', 'AAGR447174', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'AAGR@rocketmail.com', '2025-06-24 17:15:32', '\$2y\$12\$O404Ft7pig64v8YQqpzQEudCeKwam8M7.z9rvq5zge1fRrKt9Y0/a', NULL, NULL, NULL, 'OglesmHywd', NULL, 'profile-photos/KmAqIWaLegZfkSdqbeUgvgdZr5SytJmqMUQUGEFU.png', '2025-06-24 17:15:32', '2025-09-02 18:35:49'),
(8, 'TANIA DOMINGUEZ FERNANDEZ', 'EAMA248358', 'EAMA248358', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'EAMA@live.com', '2025-06-24 17:15:33', '\$2y\$12\$UGNgYqIOJ2p4hAGeDxS79ur6QJPnePz.TM5pLOi1ibzDIkWEQ6dCa', NULL, NULL, NULL, '4jno0ntw8M', NULL, 'profile-photos/76H29u3TAQKBvFWOmQVloRdx2tQAk8R14ZJCV62D.png', '2025-06-24 17:15:33', '2025-09-02 18:35:48'),
(9, 'TANIA GONZALEZ PEREZ', 'AEEP590404', 'AEEP590404', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'AEEP@hushmail.com', '2025-06-24 17:15:33', '\$2y\$12\$0RLM9PLp2zicDRh5py4faeg/eoml4NCvmSUzGFqsnHCS/6AfWvkJK', NULL, NULL, NULL, 'cm26wfVIG4', NULL, 'profile-photos/LzMA7aHDAL38jbRRNMelwJ8XTeJGXM4bN1h5fnxB.png', '2025-06-24 17:15:33', '2025-09-02 18:35:54'),
(10, 'DELMA DEL CARMEN RABELO CUEVAS', 'ERAE002651', 'ERAE002651', 'CONGRESO DEL ESTADO', 'DIPUTADO', 'femenino', '1', 3, 0, 'ERAE@pm.me', '2025-06-24 17:15:33', '\$2y\$12\$/7XU8z8XheNBk1PMI4P/iOLR07hfo7HRlEvvZkylgfDVDEib7xRIO', NULL, NULL, NULL, '8KetOB5i80', NULL, 'profile-photos/95QvG2auBe48yfnTZONeaxrxgTGa0PawErHMspmQ.png', '2025-06-24 17:15:33', '2025-09-02 18:35:53');";

// Write to SQL file
file_put_contents('database/seeders/users_data.sql', $usersData);

echo "SQL file created with sample users. You need to add all 233 users from your data.\n";
echo "To add all users, you can:\n";
echo "1. Copy all the INSERT statements from your data\n";
echo "2. Replace the content of database/seeders/users_data.sql\n";
echo "3. Run: php artisan db:seed --class=UserSeeder\n";