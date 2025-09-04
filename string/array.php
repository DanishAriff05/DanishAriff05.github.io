<?php
$student = [];
$student = ['siti','aisyah'];
$student[] = 'Ali';
$student[2] = 'Abu';

echo "<pre>";
print_r($student);
echo "</pre>";

var_dump($student);
echo "<br>";
echo $student[2];
?>

<table width="70%" border="1">
    <tr>
        <td>Bil</td>
        <td>Nama</td>
    </tr>
<?php 
$bil = 0;
for($bil ; $bil < count($student); $bil++) { ?>

<tr>
    <td><?php echo $bil + 1 ?></td>
    <td><?php echo $student[$bil] ?></td>
</tr>
<?php } ?>
</table>

<hr>

<?php
$status_list = [
    "pending" => "Pending",
    "in-progress" => "In Progress",
    "completed" => "Completed",
];

$current_status = "in-progress";
?>
<form>
    <label for="status">Choose Status:</label>
    <select name="status" id="status">
        <?php foreach ($status_list as $key => $label): ?>
            <option value="<?= $key ?>" <?= ($key == $current_status) ?> <? 'selected' : ''?><?=$label ?>> </option>
        <?php endforeach; ?>
        </select>
        </form>