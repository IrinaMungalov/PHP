<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Redirect;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    // protected function afterUpdate(): \Illuminate\Http\RedirectResponse
    // {
    //     return Redirect::route('filament.resources.posts.index');
    // }

    // protected function afterDelete(): \Illuminate\Http\RedirectResponse
    // {
    //     return Redirect::route('filament.resources.posts.index');
    // }
}

