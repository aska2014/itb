<?php

use Illuminate\Support\MessageBag;
use Kareem3d\Ecommerce\Order;
use Kareem3d\Membership\UserInfo;

class OrderController extends BaseController {

    /**
     * @var Order
     */
    protected $orders;

    /**
     * @var Product
     */
    protected $products;

    /**
     * @var Illuminate\Support\MessageBag
     */
    protected $errors;

    /**
     * @param Kareem3d\Ecommerce\Order $orders
     * @param Product $products
     * @param User $users
     * @param UserInfo $usersInfo
     * @param Illuminate\Support\MessageBag $errors
     */
    public function __construct( Order $orders, Product $products, User $users, UserInfo $usersInfo, MessageBag $errors )
    {
        $this->orders = $orders;
        $this->products = $products;

        $this->users = $users;
        $this->usersInfo = $usersInfo;

        $this->errors = $errors;
    }

    /**
     * @param $productId
     */
    public function buyProduct( $productId )
    {
        $product = $this->products->find( $productId );

        $userInfo = $this->createUser(Input::get('User'));

        // If no errors then create order..
        if($this->errors->isEmpty())
        {
            $order = $this->orders->newInstance(Input::get('Order'));

            $order->setUserInfo( $userInfo );

            $order->addProduct( $product, 1 );

            return Redirect::back()->with('success', trans('messages.order_sent'));
        }

        else
        {
            $previousUrl = Redirect::back()->getTargetUrl() . '#send';

            return Redirect::to( $previousUrl )->withErrors($this->errors)->withInput();
        }
    }

    /**
     * @param array $inputs
     * @return UserInfo|null
     */
    protected function createUser(array $inputs = array())
    {
        $validator = Validator::make($inputs, array(
            'contact_email'          => 'required|email',
            'mobile'                 => 'required'
        ), array(
            'contact_email.required' => trans('validation.email'),
            'contact_email.email'    => trans('validation.email'),
            'mobile.required'        => trans('validation.mobile'),
        ));

        if($validator->fails())
        {
            $this->errors->merge($validator->errors()->toArray());
        }

        else
        {
            return $this->usersInfo->create($inputs);
        }
    }

}