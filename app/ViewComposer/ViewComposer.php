<?php

namespace App\ViewComposer;

use App\Models\Dashboard;
use App\Models\Page;
use Illuminate\View\View;

class ViewComposer
{
    private $setting;
    private $page;

    public function __construct(Dashboard $_setting, Page $_page)
    {
        $this->setting = $_setting;
        $this->page = $_page;
    }
    public function compose(View $view)
    {

        $settings = $this->setting->first();
        $allPages = $this->page->get();
        $view->with([
            'dashboard_composer' => $settings,
            'dashboard_pages' => $allPages,
        ]);
    }
}
