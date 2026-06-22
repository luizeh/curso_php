<?php 
$pessoa = [
    'nome' => 'Pedro',
    'idade' => '27',
    'profissao' => 'Assistente',
    'raça' => 'negro',
];

$pessoa2 = [
    'nome' => 'Rafael',
    'idade' => '15',
    'profissao' => 'Jogador de futebol',
    'raça' => 'negro',
]; 


?>
<style>
    table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
  font-family: sans-serif;
  font-size: 16px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  overflow: hidden;
}

th {
  background-color: #007bff;
  color: white;
  text-align: left;
  font-weight: bold;
  padding: 12px 15px;
}

td {
  padding: 12px 15px;
  border-bottom: 1px solid #dddddd;
  color: #333333;
}
tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}
tbody tr:hover {
  background-color: #f1f7ff;
  cursor: pointer;
}
tbody tr:last-of-type td {
  border-bottom: none;
}
</style>

<table>
  <thead>
    <tr>
        <?php 
        foreach($pessoa as $carac => $value):?>  <th><?php echo $carac?></th>
           <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
        foreach($pessoa as $carac => $value):?>  <td><?php echo $value?></td>
           <?php endforeach; ?>
    </tr>
    <tr>
       <?php 
        foreach($pessoa2 as $carac => $value):?>  <td><?php echo $value?></td>
           <?php endforeach; ?>
    </tr>
  </tbody>
</table>