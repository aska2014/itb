<?php

use Kareem3d\Controllers\FreakController;

class FreakVideoController extends FreakController {

    /**
     * @var Video
     */
    protected $videos;

    /**
     * @param Video $videos
     */
    public function __construct( Video $videos )
    {
        $this->videos = $videos;

        $this->usePackages( 'Image' );

        $this->setExtra(array(
            'image-group-name'  => 'Video.Main',
            'image-type'        => 'main',
        ));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        $videos = $this->videos->get();

        return View::make('panel::videos.data', compact('videos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getShow($id)
    {
        $video = $this->videos->find( $id );

        $this->setPackagesData($video);

        return View::make('panel::videos.detail', compact('video', 'id'));
    }

    /**
     * Show the add for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        $video = $this->videos;

        $this->setPackagesData($video);

        return View::make('panel::videos.add', compact('video'));
    }

    /**
     * Show the add for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getEdit($id)
    {
        $video = $this->videos->find( $id );

        $this->setPackagesData($video);

        return $this->getCreate()->with('video', $video);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCreate()
    {
        $video = $this->videos->findOrNew(Input::get('insert_id'))->fill(Input::get('Video'));

        return $this->jsonValidateResponse( $video );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function postEdit($id)
    {
        $video = $this->videos->find($id)->fill(Input::get('Video'));

        return $this->jsonValidateResponse( $video );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getDelete($id)
    {
        $this->videos->find($id)->delete();

        return $this->redirectBack('Video deleted successfully.');
    }
}