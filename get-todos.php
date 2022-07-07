<?php

include 'config.php';

$sql = "SELECT * FROM todos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
<li>
    <span class="text"><?php echo $row['description']; ?></span>
    <button class="btn" id="removeBtn" data-id="<?php echo $row['id']; ?>"><i>Remove</i></button>
</li>
<?php
    }
}
?>