

<head>
    <title>Testing connection to MySQL</title>
</head>

<body>
    <?php
 $db = new mysqli('smcse-stuproj00.city.ac.uk', 'adbt117', '200012740', 'adbt117');
 if ($db->connect_errno) {
 printf("Connection failed: %s\n", $db->connect_error);
 exit();
 } else {
 echo "Database connected successfully!";
 }
 ?>
</body>
