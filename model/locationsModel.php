<?php
/**
*
*/
class locationsModel
{

public function getAllRows() {
  $connection = getDbConnection();
  $sth = $connection->prepare("SELECT * FROM Locations");
  $sth->execute();
  $result = $sth->fetchAll(PDO::FETCH_ASSOC);

  // foreach ($result as $row) {
  //   echo $row['id'];
  //   echo $row['location'];
  // }
  return $result;
}
}


?>
