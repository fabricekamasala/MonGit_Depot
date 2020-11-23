<div class="container" style="margin-left:500px;margin-top:100px">
      <div class="row">
         <div class="col-lg-4">
             <fieldset class="well">
                  <h2 class="page-header">Log In</h2>
                  <form action="#" method="post">
                            <div class="form-group">
                                Email
                                <input type="text" name="txt_un" class="form-control">
                                <span class="help-block" id="span_nom" style="display:none">Pas de vide s'il vous plait</span>                 
                            </div>

                            <div class="form-group">
                                Mot de passe
                                <input type="password" name="txt_pw" class="form-control">
                                <span class="help-block" id="span_pw" style="display:none">Pas de vide s'il vous plait</span>                 
                            </div>
                            <div class="form-group" style="text-align:center">
                                <button type="submit" class="btn btn-primary" style="width:320px" name="btn1">Connexion</button> 
                                <?php
                                  if(isset($_POST["btn1"]))
                                  {
                                    get_Connect_user();
                                  }
                                  
                                ?>
                                <hr>         
                            </div>
                            <div class="form-group" style="text-align:center">
                                 <a class="btn btn-link" style="text-align:center" href="#mod" data-toggle="modal">S'inscrire</a>
                                               
                            </div>
                              
                  </form>
                  <div class="modal fade" id="mod">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                          <h2 class="page-header">S'inscrire</h2>
                                          <form action="" method="post">
                                          <div class="form-group">
                                Email
                                <input type="text" name="txt_un" class="form-control">
                                <span class="help-block" id="span_nom" style="display:none">Pas de vide s'il vous plait</span>                 
                            </div>

                            <div class="form-group">
                                Mot de passe
                                <input type="password" name="txt_pw" class="form-control">
                                <span class="help-block" id="span_pw" style="display:none">Pas de vide s'il vous plait</span>                 
                            </div>
                            <div class="form-group" style="text-align:center">
                                <button type="submit" class="btn btn-primary" style="width:320px" name="btn1">Valider</button> 

                                <hr>         
                            </div>
                                          </form> 
                                    </div>
                                  </div>
                                 </div> 

             </fieldset>
         </div>
      </div>
</div>