<?php

/**
 * Pages Controller
 */
class PagesController
{

    /**
     * Action "home"
     * URL: /index.php?controller=pages&action=home
     */
    public function home()
    {
        // load views
        loadView('theme/header');
        loadView('pages/home', [
          'name' => 'Tom',
          'age' => '18',
        ]);
        loadView('theme/footer');
    }

    /**
     * Action "about"
     * URL: /index.php?controller=pages&action=about
     */
    public function about()
    {
        // load views
        loadView('theme/header');
        loadView('/pages/about');
        loadview('/theme/footer');
    }

}
