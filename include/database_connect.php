<?php
$conn = mysqli_connect("sql201.epizy.com", "ifo_40389580_pglife_user", "Mahboob@1124", "ifo_40389580_pglife_db");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}


