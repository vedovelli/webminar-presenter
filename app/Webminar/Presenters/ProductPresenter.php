<?php

namespace Webminar\Presenters;

class ProductPresenter extends BasePresenter
{
    public function shortDescription($quantity = 100)
    {
        return substr($this->description, 0, $quantity) . '...';
    }

    public function status()
    {
        $status = 'Publicado';

        if ($this->published_at == '0000-00-00 00:00:00') {
            $status = 'Não publicado';
        }

        return $status;
    }
}
