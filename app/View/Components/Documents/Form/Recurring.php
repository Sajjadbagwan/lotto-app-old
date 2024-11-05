<?php

namespace App\View\Components\Documents\Form;

use App\Abstracts\View\Components\Documents\Form as Component;

class Recurring extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.documents.form.recurring');
    }
}
