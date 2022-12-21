<form method="post">
    <input name = "Start" type = "test"
    Start = "<?php 
    echo isset($_POST['Start'])
    ? $_POST['Start']
    : ""; ?>">

    <input name = "End" type = "test"
    End = "<?php 
    echo isset($_POST['End'])
    ? $_POST['End']
    : ""; ?>">
    <button type = "submit">Submit</button>
</form>

<table>
<?php
$a = isset($_POST['Start'])
    ? $_POST['Start']
    : 1;
$b = isset($_POST['End'])
    ? $_POST['End']
    : 2;

for ($i==$a  ; $i >= $b ; $i++){
    f ($i % 2 == 0) {
        echo "$i is even<br>";
      } else {
        echo "$i is odd<br>";
      }
}
?>
</table>
