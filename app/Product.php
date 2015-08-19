<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Product extends Model
{
    use PresentableTrait;

    protected $presenter = \Webminar\Presenters\ProductPresenter::class;

}
