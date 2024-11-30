<style type="text/css">
.perso {
	background-color: #639;
	border: solid 1px #FF3333;
	border-radius: 10px;
	height: 30px;
	color: #FFF;
}
.btapp {
	color: #333;
	background-color: #6C6;
	border: solid 1px #FF3333;
	border-radius: 10px;
	height: 30px;
}
#multiple-column-form .row .col-12 .card .card-header .card-title {
	color: #F00;
}
</style>
<section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">UPLOAD DE BACKGROUNDS</h4>
					<p class="px-0"><b>Tamanho recomendado (1980px x 1080px).png ou jpg</b>
					
                </div>
                <div class="card-body">
<center><p class="px-0"><b>AQUI FAZ UPLOAD DO LOGO PAINEL.</b></p></center>
<div class="alert-info">						
</div>
<p> 
</p>     
<form method="post" enctype="multipart/form-data" action="recebeBkrv.php">
       
	  <center><input name="arquivo" type="file" class="perso" />
       <input type="submit" class="btapp" value="Salvar" /> </center><br/>
	   <p>
				</p>
    </form>
</div>
<center><p class="px-0"><b>AQUI FAZ UPLOAD DA LOGO ADMIN.</b></p></center>
<div class="alert-info">						
</div>
<p> 
</p>     
<form method="post" enctype="multipart/form-data" action="recebeBkad.php">
       
	  <center><input name="arquivo" type="file" class="perso" />
       <input type="submit" class="btapp" value="Salvar" /> </center><br/>
	   <p>
				</p>		
    </form>
</br>	
<center><p class="px-0"><b>AQUI FAZ UPLOAD DO BACKGROUND DA LOJA.</b></p></center>
<div class="alert-info">						
</div>
<p> 
</p>     
<form method="post" enctype="multipart/form-data" action="recebeStore.php">
       
	  <center><input name="arquivo" type="file" class="perso" />
       <input type="submit" class="btapp" value="Salvar" /> </center><br/>
    </form>	
                </div>
            </div>
        </div>
    </div>	
</section>