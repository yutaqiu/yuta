<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Intervention\Image\ImageManagerStatic as Image;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    static public function makeAvatar($char){

        $bgs = ['467FCF', 'CD201F', '2BCBBA', '45AAF2', 'FD9644', '17A2B8', '6574CD', 'F1C40F', '868E96', 'A55EEA', '7BD235', '343A40', 'F66D9B', '5EBA00'];
        $bg = $bgs[array_rand($bgs)];

        $img = Image::canvas(400, 400, '#'.$bg);
        $img->text($char, 215, 200, function($font){
            $font->file(storage_path('app/fonts/simyou.ttf'));
            $font->size(250);
            $font->valign('middle');
            $font->align('center');
            $font->color('#FFFFFF');
        });
        $img->save(public_path('storage/avatars/'.str_random(10).'.jpg'));
        return $img->basename;
    }

    public function getAvatarAttribute($value){
        return url('storage/avatars/' . $value);
    }
}
