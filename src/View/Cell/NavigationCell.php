<?php

namespace App\View\Cell;
use Cake\View\Cell;

/**
 * Navigation cell
 */
class NavigationCell extends Cell
{

    /**
     * pageHead method.
     *
     * Prepares breadcrumb for an interface and display.
     * 
     * @return void
     */
//    public function pageHead($navOptions = [])
//    {
//        $default = [
//            'title' => __('Home'),
//            'routeName' => 'dashboard'
//        ];
//        array_unshift($navOptions, $default);
//        $this->set(compact('navOptions'));
//    }

    /**
     * pageTitle method.
     * 
     * Prepares page title for the page.
     * 
     * @param array $titleArr Page title in array format
     */
    public function pageTitle($titleArr = [])
    {
        if (!is_array($titleArr)) {
            $titleArr = [];
        }
        array_push($titleArr, ADMIN_PAGE_TITLE);
        $title = implode(ADMIN_PAGE_TITLE_SEPARATOR, $titleArr);
        $this->set(compact('title'));
    }
}
