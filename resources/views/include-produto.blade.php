<form method="post" 
                          action="{{route('product.store')}}" 
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div>              
                            <label for="name">Nome</label>
                            <input type="text" name="name" 
                                    class="form-control" 
                                    required>
                        </div>   
                        
                        <div>
                            <label for="description">Descrição</label>
                            <input type="text" name="description" 
                                    class="form-control" 
                                    required>
                        </div>
                        
                        <div>
                            <label for="quantity">Quantidade</label>
                            <input type="number" name="quantity" 
                                    class="form-control" 
                                    required>
                        </div>    
                                         
                        <div>
                            <label for="price"> Preço </label>
                            <input type="text" name="price"                               
                                    class="form-control">
                        </div>

                        <div>                   
                            <button type="reset">
                                Limpar
                            </button>
                            <button type="submit" 
                                    class="btn btn-warning" id="black">
                                Cadastrar
                            </button>
                        </div>
                    </form>             
