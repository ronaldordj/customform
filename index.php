<?php get_header(); ?>   

<div class="container">
    <p align="center"><h2>Para buscar o endereço, digite o CEP.</h2></p>
    <div class="form-group">
        <form method="get" action=".">
            <div class="row">
                <div class="col-xs-12 col-md-2 col-lg-2">
                    <label>CEP</label>
                    <input name="cep" type="text" id="cep" class="form-control" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" />
                </div>
            </div>    
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <label>Logradouro</label>
                    <input name="rua" type="text" id="rua" class="form-control" size="60" readonly />                            
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <label>Bairro</label>
                    <input name="bairro" type="text" id="bairro" class="form-control" size="40" readonly />
                </div>    
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <label>Cidade</label>
                    <input name="cidade" type="text" id="cidade" class="form-control" size="40" readonly />
                </div>
                <div class="col-xs-12 col-md-2 col-lg-2">
                    <label>Estado</label>
                    <input name="uf" type="text" id="uf" class="form-control" size="2" readonly />
                </div>    
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-2 col-lg-2">
                    <label>Cód. IBGE</label>
                    <input name="ibge" type="text" id="ibge" class="form-control" size="8" readonly />
                </div>
            </div>  
        </form>    
    </div>    
</div>

<?php get_footer(); ?>