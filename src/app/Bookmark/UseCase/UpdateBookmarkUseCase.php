<?php

namespace App\Bookmark\UseCase;

use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

final class UpdateBookmarkUseCase
{
    public function handle(string $id, string $comment, int $category)
    {
        $model = Bookmark::query()->findOrFail($id);

        if ($model->can_not_delete_or_edit) {
            throw ValidationException::withMessages([
                'can_edit' => 'ブックマーク後24時間経過したものは編集できません'
            ]);
        }

        if ($model->user_id !== Auth::id()) {
            abort(403);
        }

        $model->category_id = $category;
        $model->comment = $comment;
        $model->save();
    }
}