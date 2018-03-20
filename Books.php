<?php
$genre = array('Detective', 'Poetry', 'Biography', 'Adventure');
$author = array('Mario Puzo', 'Edgar Allan Poe', 'Ingo Walter', 'Jack london');
$name = array('The Godfather', 'Poems', 'Vincent Van Gogh', 'White Fang');
$bprice = array('110.00 hr', '99.99 hr', '50.00 hr', '69.70 hr');
$book = array($genre, $author, $name, $bprice);
echo ("List of books:");
echo '<table cellpadding="5" cellspacing="0" border="1">  <tr> 
      <th>Book 1</th><th>Book 2</th><th>Book 3</th><th>Book 4</th>
      </tr>';

foreach ($book as $key => $value) {
    echo "<tr>";
    foreach ($value as $data)
        echo "<td>".$data."</td>";
    echo "</tr>";
}
echo "</table>";