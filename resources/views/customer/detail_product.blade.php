@extends('index')
@section('noidung')
<div class="detail-product">
	<div class="container">
		<div class="row-detail">
			<div class="col-left col-detail">
				<div class="zoom-img-pr">
					<img src="{{ URL('public/updates/product/' . $detail_product->image_product) }}" alt="{{$detail_product->image_product}}" class="img-large img-responsive" id="imgzoompr" xoriginal="{ URL('public/updates/product/' . $related_product->image_product) }}" style="width: 100% !important;">
					<div class="zoom-thumbs-row">
						
						<div class="zoom-thumbs-col" style="width: calc(25% - 3px);">
							<img src="{{ URL('public/updates/product/' . $detail_product->detail1_image_product) }}" alt="{{$detail_product->detail1_image_product}}" class="thumbs-img" onclick="openModal();currentSlide(1)" >				
						</div>
						<div class="zoom-thumbs-col" style="width: calc(25% - 3px);">
							<img src="{{ URL('public/updates/product/' . $detail_product->detail2_image_product) }}" alt="{{$detail_product->detail2_image_product}}" class="thumbs-img" onclick="openModal();currentSlide(2)">
						</div>
						<div class="zoom-thumbs-col" style="width: calc(25% - 3px);">
							<img src="{{ URL('public/updates/product/' . $detail_product->detail3_image_product) }}" alt="{{$detail_product->detail3_image_product}}" class="thumbs-img" onclick="openModal();currentSlide(3)">
						</div>
						<div class="zoom-thumbs-col" style="width: calc(25% - 3px);">
							<img src="{{ URL('public/updates/product/' . $detail_product->detail4_image_product) }}" alt="{{$detail_product->detail4_image_product}}" class="thumbs-img" onclick="openModal();currentSlide(4)">
						</div>
					</div>

					<div id="myModal" class="modal">
						<span class="close cursor" style="color: #fff" onclick="closeModal()">&times;</span>
						<div class="modal-content">

							<div class="mySlides">
								<div class="numbertext">1 / 4</div> 
								<img src="{{ URL('public/updates/product/' . $detail_product->detail1_image_product) }}" alt="{{$detail_product->detail1_image_product}}" style="width:100% !important">
							</div>

							<div class="mySlides">
								<div class="numbertext">2 / 4</div>
								<img src="{{ URL('public/updates/product/' . $detail_product->detail2_image_product) }}" alt="{{$detail_product->detail2_image_product}}"  style="width:100% !important">
							</div>

							<div class="mySlides">
								<div class="numbertext">3 / 4</div>
								<img src="{{ URL('public/updates/product/' . $detail_product->detail3_image_product) }}"alt="{{$detail_product->detail3_image_product}}"  style="width:100% !important">
							</div>

							<div class="mySlides">
								<div class="numbertext">4 / 4</div>
								<img src="{{ URL('public/updates/product/' . $detail_product->detail4_image_product) }}"  alt="{{$detail_product->detail4_image_product}}" style="width:100% !important">
							</div>

							<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							<a class="next" onclick="plusSlides(1)">&#10095;</a>


							<div class="column">
								<img class="demo cursor"src="{{ URL('public/updates/product/' . $detail_product->detail1_image_product) }}"  alt="{{$detail_product->detail1_image_product}}"style="width:100% !important" onclick="currentSlide(1)" >
							</div>
							<div class="column">
								<img class="demo cursor" src="{{ URL('public/updates/product/' . $detail_product->detail2_image_product) }}"  alt="{{$detail_product->detail2_image_product}}" style="width:100% !important" onclick="currentSlide(2)">
							</div>
							<div class="column">
								<img class="demo cursor" src="{{ URL('public/updates/product/' . $detail_product->detail3_image_product) }}"  alt="{{$detail_product->detail3_image_product}}" style="width:100% !important" onclick="currentSlide(3)" >
							</div>
							<div class="column">
								<img class="demo cursor" src="{{ URL('public/updates/product/' . $detail_product->detail4_image_product) }}"  alt="{{$detail_product->detail4_image_product}}" style="width:100% !important" onclick="currentSlide(4)" >>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-right col-detail" >
				<div class="name-pr-detail">
					<span>{{$detail_product->name_product}}</span>
				</div>
				<hr  width="100%" align="center" />
				<div class="price-pr-detail">
                    @if ($detail_product->discount_price_product > 0)
                    Gi???m gi??:<span class="price-discount">{{ number_format($detail_product->price_product - ($detail_product->price_product / 100) * $detail_product->discount_price_product) . ' ' . 'VND' }}</span>
					<div class="price-right">
						Gi??:<span class="price-main">{{ number_format($detail_product->price_product) . ' ' . 'VND' }}</span>
					</div> 
                    @else
                        
                        <span class="price-discount">{{ number_format($detail_product->price_product) . ' ' . 'VND' }}</span>
                    @endif
					
				</div>
				<hr  width="100%" align="center" />
				<div class="detail-description">
					{{$detail_product->desc_product}}
				</div>
				<hr  width="100%" align="center" />
				<div class="information-detail">
					<div>T??nh tr???ng:<span> C??n h??ng</span></div>
					<div>Th????ng hi???u:<span> {{$detail_product->brand->name_brand}}</span></div>
					<div>Gi???i t??nh:
                        @if ($detail_product->classify_product == 0)
                        <span>Kh??ng</span>
                        @elseif ($detail_product->classify_product == 1)
                        <span>Nam</span>
                        @else
                        <span>N???</span>
                        @endif
                    </div>
					<div>Lo???i m??y:<span> Automatic</span></div>
				</div>
				<hr  width="100%" align="center" />
				<form action="#" enctype="multipart/form-data">
					<div class="detail__soluong">

						<div class="num-block skin-2">

							<div class="num-in">
								<span class="minus dis"></span>
								<input type="text" class="in-num" value="1" min="1" max="99" readonly="">
								<span class="plus"></span>
							</div>
						</div>
					</div>
					<hr  width="100%" align="center" />
					<div class="detail-button">
						<button class="detail-cart"><a href="#">Th??m v??o gi??? h??ng</a></button>
						<button class="detail-buy-now"><a href="#">Mua ngay</a></button>
					</div>
				</form>
				<hr  width="100%" align="center" />

				<div class="detail-pr-holine">
					G???i ?????t mua: <span><a href="tel:034 998 3657" >034 998 3657</a></span> (8:00-1:30)
				</div>
			</div>
		</div>



		<!-- danh gia -->
		<div class="group-tabs">
			<!-- Nav tabs -->


			<ul class="nav nav-tabs">
				<li  class="active"><a href="#home" aria-controls="home"  data-toggle="tab"><i class="fa fa-pencil-square-o" style="margin-right: 5px;"></i>M?? t???</a></li>
				<li><a href="#profile" aria-controls="profile"   data-toggle="tab"><i class="far fa-user-md-chat" style="margin-right: 5px;"></i>Nh???n x??t (1)</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">

				<div role="tabpanel" class="tab-pane fade in active" id="home">
                    {{$detail_product->content_product}}
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<div class="comment-user">
						<div class="user-img-user-name">
							<img src="images/bg-3.jpg" alt="#" width="30px" height="30px">
							<span>Nguy???n C??ng Th???c</span>
						</div>

						<div class="user-content">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab facere vero necessitatibus numquam, dolores, ducimus harum inventore blanditiis voluptas! Commodi quaerat accusamus, est temporibus. Iure ipsa quisquam hic, perspiciatis cum!
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab facere vero necessitatibus numquam, dolores, ducimus harum inventore blanditiis voluptas! Commodi quaerat accusamus, est temporibus. Iure ipsa quisquam hic, perspiciatis cum!
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab facere vero ecessitatibus numquam, dolores, ducimus harum inventore blanditiis voluptas! Commodi quaerat accusamus, est temporibus. Iure ipsa quisquam hic, perspiciatis cum!
							
						</div>
						<div class="feedback-time-comment">
							<span><a href="#">Tr??? l???i</a></span>
							<span>- 2 gi??? tr?????c</span>
						</div>


						<div class="manager-feedback">
							<div class="manager-img-manager-name">
								<img src="images/bg-3.jpg" alt="#" width="30px" height="30px">
								<span>Nguy???n C??ng Th???c 1</span>
								<span class="quantrivien">Qu???n tr??? vi??n</span>
							</div>
							<div class="manager-content">
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab facere vero necessitatibus numquam, dolores, ducimus harum inventore blanditiis voluptas! Commodi quaerat accusamus, est temporibus. Iure ipsa quisquam hic, perspiciatis cum!

							</div>
							<div class="feedback-time-comment">
								<span><a href="#">Tr??? l???i</a></span>
								<span>- 2 gi??? tr?????c</span>
							</div>
						</div>
						

						<div class="form__nhanxet">
							<form action="#" method="POST">
								<label for="#">Nh???n x??t c???a b???n</label>
								<textarea rows="4" cols="50" required class="nhanxet__textarea form-control"></textarea>

									<label for="#">T??n*</label>
									<input type="text" required class="nhanxet__name form-control">

									<label for=""#>Email*</label>
									<input type="email" required class="nhanxet__email form-control">
									<button type="submit" class="nhanxet__button">G???i</button>
								</form>
							</div>



						</div>
					</div>
				</div>
			</div>
			<!-- end -->
			<div class="sanpham-noibat">
				<div class="swiper-container">
					<div id='nz-div'>
						<h3 class="tde">      
							<span class="null">S???n ph???m li??n quan</span>  
						</h3>
					</div>
					<div class="swiper-wrapper">
                        @foreach ($related as $key => $related_product)

                        <div class="swiper-slide">
                            <div class="sanpham-index">
                                <div class="body-sanpham-index">

                                    <div class="img-pr">
                                        <img src="{{ URL('public/updates/product/' . $related_product->image_product) }}"
                                            alt="{{$related_product->image_product}}">
                                    </div>
                                    <div class="bao-pr">
                                        <div class="name-price-pr">
                                            @if ($related_product->discount_price_product > 0)
                                                <div class="pt-discount">
                                                    <span>-{{ $related_product->discount_price_product }}%</span>
                                                </div>
                                            @endif
                                            <span class="name_product">{{ $related_product->name_product }} -
                                                @if ($related_product->classify_product === 0)
                                                    Kh??ng
                                                @elseif($related_product->classify_product === 1)
                                                    ?????ng h??? Nam
                                                @else
                                                    ?????ng h??? N???
                                                @endif
                                            </span>

                                        </div>
                                        <div class="price-discount">

                                            @if ($related_product->discount_price_product > 0)
                                                <span
                                                    style="color:red;font-weight:bold">{{ number_format($related_product->price_product - ($related_product->price_product / 100) * $related_product->discount_price_product) . ' ' . 'VND' }}</span>
                                                <span
                                                    class="discount">{{ number_format($related_product->price_product) . ' ' . 'VND' }}</span>
                                            @else
                                                <span>{{ number_format($related_product->price_product) . ' ' . 'VND' }}</span>
                                            @endif

                                        </div>

                                        <div class="btn-cart-detail">
                                            <a href=""><button class="pr-cart"> <i class="fal fa-shopping-cart"></i></button></a>
                                            <a href="{{URL('detail-product/' . $related_product->id) }}"><button class="pr-detail">Chi ti???t <i class="far fa-angle-double-right"></i></button></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
					</div>
					<!-- Add Navigation -->
					<div class="navigation">
						<div class="swiper-button-prev swiper-button-white"></div>
						<div class="swiper-button-next swiper-button-white"></div>

					</div>
				</div>
			</div>
		</div>
	</div>

    @endsection