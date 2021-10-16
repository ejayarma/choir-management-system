<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CounselingMaterial extends Model
{
    use HasFactory;

    public function imageUrl()
    {
        return Storage::disk('images')->url('/counseling-materials' . $this->image);
    }
}
