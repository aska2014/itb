<?php

use Kareem3d\Code\Code;
use Kareem3d\Images\Group;
use Kareem3d\Images\Specification;

class ImageSeeder extends \Illuminate\Database\Seeder {

    public function run()
    {
        Group::query()->delete();
        Specification::query()->delete();





        $group = Group::create(array(
            'name' => 'Product.Gallery'
        ));

        $group->specs()->create(array(
            'directory' => 'albums/products/gallery'
        ))->setCode(new Code(array(
            'code' => '$image->crop(200, 230); return $image;'
        )));







        $group = Group::create(array(
            'name' => 'Product.Main'
        ));

        $group->specs()->create(array(
            'directory' => 'albums/products/115x115'
        ))->setCode(new Code(array(
                'code' => '$image->grab(115, 115); return $image;'
            )));

        $group->specs()->create(array(
            'directory' => 'albums/products/200x230'
        ))->setCode(new Code(array(
                'code' => '$image->grab(220, 245); return $image;'
            )));







        $group = Group::create(array(
            'name' => 'Video.Main'
        ));

        $group->specs()->create(array(
            'directory' => 'albums/videos/150x160'
        ))->setCode(new Code(array(
                'code' => '$image->crop(150, 160); return $image;'
            )));








        $group = Group::create(array(
            'name' => 'Category.Main'
        ));

        $group->specs()->create(array(
            'directory' => 'albums/categories/main'
        ))->setCode(new Code(array(
                'code' => '$image->crop(114, 115); return $image;'
            )));
    }
}