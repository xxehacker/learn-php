<?php
$db = new SQLite3('form.db');
$results = $db->query("SELECT * FROM users ORDER BY id DESC");

echo "<h2>All Submissions</h2><ul>";
while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    $created = $row['created_at'] ?? '';  // Avoid undefined key warning
    echo "<li><strong>{$row['name']}</strong> ({$row['email']}) - $created</li>";
}
echo "</ul><a href='index.php'>← Back to form</a>";
?>