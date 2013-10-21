<?php

use Kareem3d\Controllers\FreakController;

class FreakFooterController extends FreakController {

    /**
     * @var Footer
     */
    protected $footer;

    /**
     * @param Footer $footer
     */
    public function __construct( Footer $footer )
    {
        $this->footer = $footer;
    }

    /**
     * Show the add for creating a new resource.
     *
     * @return Response
     */
    public function getCreate()
    {
        $footer = $this->footer->getOnlyOne();

        return View::make('panel::footer.add', compact('footer'));
    }

    /**
     * @param $id
     * @return Response
     */
    public function getEdit( $id )
    {
        return $this->getCreate();
    }

    /**
     * @param $id
     * @return Response
     */
    public function postEdit( $id )
    {
        return $this->postCreate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCreate()
    {
        $footer = $this->footer->getOnlyOne()->fill(Input::get('Footer'));

        return $this->jsonValidateResponse( $footer );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getDelete($id)
    {
        $this->footer->find($id)->delete();

        return $this->redirectBack('Footer deleted successfully.');
    }
}