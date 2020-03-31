<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span class="pe-7s-close" aria-hidden="true"></span>
   </button>
   <div class="modal-dialog modal-quickview-width" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <div class="qwick-view-left">
               <div class="quick-view-learg-img">
                  <div class="quick-view-tab-content tab-content">
                     <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                        <img src="assets/img/quick-view/l1.jpg" alt="">
                     </div>
                     <div class="tab-pane fade" id="modal2" role="tabpanel">
                        <img src="assets/img/quick-view/l2.jpg" alt="">
                     </div>
                     <div class="tab-pane fade" id="modal3" role="tabpanel">
                        <img src="assets/img/quick-view/l3.jpg" alt="">
                     </div>
                  </div>
               </div>
               <div class="quick-view-list nav" role="tablist">
                  <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true"
                     aria-controls="home1">
                     <img src="assets/img/quick-view/s1.jpg" alt="">
                  </a>
                  <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                     <img src="assets/img/quick-view/s2.jpg" alt="">
                  </a>
                  <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                     <img src="assets/img/quick-view/s3.jpg" alt="">
                  </a>
               </div>
            </div>
            <div class="qwick-view-right">
               {{-- @foreach ($products as $product) --}}

               <div class="qwick-view-content">
                  <h3>{{$product->id}}</h3>
                  <div class="price">
                     <span class="new">$90.00</span>
                     <span class="old">$120.00 </span>
                  </div>
                  <div class="rating-number">
                     <div class="quick-view-rating">
                        <i class="pe-7s-star"></i>
                        <i class="pe-7s-star"></i>
                        <i class="pe-7s-star"></i>
                        <i class="pe-7s-star"></i>
                        <i class="pe-7s-star"></i>
                     </div>
                     <div class="quick-view-number">
                        <span>2 Ratting (S)</span>
                     </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore
                     magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                  <div class="quick-view-select">
                     <div class="select-option-part">
                        <label>Size*</label>
                        <select class="select">
                           <option value="">- Please Select -</option>
                           <option value="">900</option>
                           <option value="">700</option>
                        </select>
                     </div>
                     <div class="select-option-part">
                        <label>Color*</label>
                        <select class="select">
                           <option value="">- Please Select -</option>
                           <option value="">orange</option>
                           <option value="">pink</option>
                           <option value="">yellow</option>
                        </select>
                     </div>
                  </div>
                  {{-- @endforeach --}}
                  <div class="quickview-plus-minus">
                     <div class="cart-plus-minus">
                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                     </div>
                     <div class="quickview-btn-cart">
                        <a class="btn-hover-black" href="#">add to cart</a>
                     </div>
                     <div class="quickview-btn-wishlist">
                        <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>