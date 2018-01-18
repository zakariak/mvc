<?php

/**
 *
 */
class LocationsController
{

  public function overview() {
    // load views

    require_once APP_PATH . '/model/locationsModel.php';

    $locationModel = new locationsModel();
    $locations = $locationModel->getAllRows();

    loadView('theme/header');
    loadView('locations/overview', [
      'locations' => $locations,
    ]);
    loadView('theme/footer');
  }

}


 ?>
