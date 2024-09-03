<?php
$xml = simplexml_load_file('data.xml');
echo '<table border="0">
 <tr>
 <th>id</th>
 <th>name (latin name)</th>
 <th>Light</th>
 <th>Price</th>
 <th>image</th>
 </tr>';
foreach ($xml->plant as $plant) {
echo '<tr>';
echo '<td>' . $plant['id'] . '</td>'; 
echo '<td>' . $plant->common . ' (' . $plant->botanical . ')' . '</td>';
echo '<td><img src="' . $plant->light['icon'] . '" alt="' . $plant->light . 
'" width="40">' . $plant->light . '</td>';
echo '<td>' . $plant->price . '</td>';
echo '<td><img src="' . $plant->img . '" alt="' . $plant->common . '" 
width="80"></td>';
echo '</tr>';
}
echo '</table>';
?>