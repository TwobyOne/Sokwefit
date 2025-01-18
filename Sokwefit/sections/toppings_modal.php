<!--##################################################################################### 
        when the client click on addToCart button
        a popup modal appears -> let the client choose his favorites toppings
    ##################################################################################### -->

<div id="addToCart_modal" class="modal fade" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    	<div class="modal-content">

            <!-- modal title -->
            <div class="modal-header">
                <h3 class="modal-title" id="ITEM_NAME"></h3>
	      	</div>

            <!--  modal body -->
	      	<div class="modal-body">   

	        	<div class="items">
                    <div class="items_info">
                        <div class="image">
                            <img id="ITEM_IMAGE" src="">
                        </div>

                        <h3 id="ITEM_QUANTITY"></h3>
                    </div>



                </div>

	        	<div class="modal-footer">
                    <button type="button" class="btn-secondary" id="btn-close" data-dismiss="modal">Close</button>
                    <button type="button" class="btn-primary" id="btn-addToCart" > <i class="fas fa-cart-plus"></i> Cart</button>
                </div>
	      	</div>
    	</div>
  	</div>
</div>