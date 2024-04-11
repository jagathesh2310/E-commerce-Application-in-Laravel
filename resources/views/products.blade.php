@extends('layouts.app')
@section('content')
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10 text-center">
                <h3 class="ltext-103 cl5 mb-4">
                    Products
                </h3>
            </div>


            <div class="row isotope-grid">
                @foreach($products as $product)
                    <div class="col-md-4 mb-4 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="{{asset($product->image)}}" alt="IMG-PRODUCT">

                                <a href="{{route('products.show',['product'=>$product->id])}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                     View
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="{{route('user-panel.products.show',['product'=>$product->id])}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{$product->name}}
                                    </a>

                                    <span class="stext-105 cl3">
									₹{{$product->price}}
								</span>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            <div class="text-center">
                {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>


        </div>
    </section>
@endsection
