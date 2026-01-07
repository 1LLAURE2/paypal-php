<section class="cart-section section-b-space" id="pnlcart">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <button id="btnagregar" class="btn btn-solid"> Agregar Producto</button>
                    <br>
                    <br>
                <div>
                <div class="col-sm-12">
                    <div class="cart_counter">
                        <div class="countdownholder">
                            Su carrito expira en <span id="timer"></span> minutes!
                        </div>
                        <a href="checkout.html" class="cart_checkout btn btn-solid btn-xs">Pagar</a>
                    </div>
                </div>
                <div class="col-sm-12 table-responsive-xs">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">Imagen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Accion</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody id="listdetalle">
                            <!-- <tr>
                                <td>
                                    <a href="#"><img src="../../assets/images/pro3/2.jpg" alt=""></a>
                                </td>
                                <td><a href="#">cotton shirt</a>
                                    
                                </td>
                                <td>
                                    <h2>$63.00</h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                                <td>
                                    <h2 class="td-color">$4539.00</h2>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                    <div class="table-responsive-md">
                        <table class="table cart-table ">
                            <tfoot>
                                <tr>
                                    <td>Precio Total :</td>
                                    <td>
                                        <h2 id="vent_total_cart">USD 00.00</h2>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row cart-buttons">
                <!-- <div class="col-6"><a href="#" class="btn btn-solid">continue shopping</a></div> -->
                <div class="col-6"><a href="#" class="btn btn-solid" id="btnpagar">Pagar</a></div>
            </div>
        </div>
    </section>