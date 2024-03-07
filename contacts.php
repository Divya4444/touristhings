<?php
$contacts = file_get_contents('/Applications/XAMPP/xamppfiles/htdocs/touristthings/contacts.txt');
?>

<div class="container">
    <h2>Contact Information </h2>
    <pre><?php echo $contacts; ?></pre>
</div>
