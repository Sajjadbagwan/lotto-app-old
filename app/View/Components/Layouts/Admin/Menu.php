<?php

namespace App\View\Components\Layouts\Admin;

use App\Abstracts\View\Component;
// use App\Events\Menu\NotificationsCreated;

class Menu extends Component
{
    /** array */
    public $companies = [];

    public $notification_count;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {

        $this->notification_count = $this->getNotificationCount();

        return view('components.layouts.admin.menu');
    }


    public function getNotificationCount()
    {
        // Get nofitications
        $notifications = new \stdClass();
        $notifications->notifications = collect();
        $notifications->keyword = '';

        // event(new NotificationsCreated($notifications));

        return $notifications->notifications->count();
    }
}
