<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item):
        if($item['item_id'] == $item_id):
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image']??"./assets/10.png"?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                        <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart'))??[] )){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">Added in the Cart</button>';

                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Card</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']?? "Unknown"; ?></h5>
                <small><?php echo $item['item_brand']?? "Brand";?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-arvo font-size-14">20,534 ratings | 1000+ answered questions</a>
                </div>
                <hr class="m-0">
                <table class="my-3">
                    <tr class="font-arvo font-size-12">
                        <td>M.R.P</td>
                        <td><strike>sh12000</strike></td>
                    </tr>
                    <tr class="font-arvo font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-16 text-danger">sh<span><?php echo $item['item_price']?? 0;?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of Taxes</small></td>
                    </tr>
                    <tr class="font-arvo font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger">sh12000</span></td>
                    </tr>
                </table>
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-arvo font-size-12">7 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-arvo font-size-12">David <br> Delivered</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-arvo font-size-12">1 Year <br> waranty</a>
                        </div>
                    </div>
                </div>
                <hr>

                <div id="oder-details" class="font-arvo d-flex flex-column text-dark">
                    <small>Delivery by : Dec 17 - Jan 15</small>
                    <small>Sold by <a href="#">Tecno Mob.</a>(4.0 out of 5 | 17.456 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primar"></i>&nbsp;&nbsp; Deliver to Customer - 349548</small>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-h2txt-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-btn2-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="size my-3">
                    <h6 class="font-baloo">Size:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-arvo border p-2">
                            <button class="btn p-0 font-size-14">None</button>
                        </div>
                        <div class="font-arvo border p-2">
                            <button class="btn p-0 font-size-14">None</button>
                        </div>
                        <div class="font-arvo border p-2">
                            <button class="btn p-0 font-size-14">None</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12">
                <h6 class="font-arvo">Product description</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</section>
<?php
        endif;
        endforeach;
        ?>