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
        ));







        $group = Group::create(array(
            'name' => 'Product.Main'
        ));

        $group->specs()->create(array(
            'directory' => 'albums/products/xx103'
        ))->setCode(new Code(array(
                'code' => '$image->resize(null, 103, true); return $image;'
            )));

        $group->specs()->create(array(
            'directory' => 'albums/products/normal'
        ));






        $group = Group::create(array(
            'name' => 'Video.Main'
        ));

        $group->specs()->create(array(
            'directory' => 'albums/videos/150x160'
        ))->setCode(new Code(array(
                'code' => '$image->grab(150, 160); return $image;'
            )));








        $group = Group::create(array(
            'name' => 'Category.Main'
        ));

        $group->specs()->create(array(
            'directory' => 'albums/categories/main'
        ))->setCode(new Code(array(
                'code' => '$image->grab(114, 115); return $image;'
            )));
    }
}