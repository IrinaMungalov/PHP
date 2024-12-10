<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Redirect;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    // protected function afterCreate(): \Illuminate\Http\RedirectResponse
    // {
    //     return Redirect::route('filament.resources.posts.index');
    // }
}

