<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\models\Series;

interface SeriesRepository
{
    public function add(SeriesFormRequest $request): Series;
}