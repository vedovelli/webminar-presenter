<?php

namespace Webminar\Presenters;

use Laracasts\Presenter\Presenter;

abstract class BasePresenter extends Presenter
{
    public function createdAt()
    {
        return $this->created_at->format('d/m/Y');
    }
}
