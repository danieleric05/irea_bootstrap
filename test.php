<div id="signupbox" style="margin-left:auto; margin-right: auto;"
    class="mainbox mt-5 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" role="tab" data-toggle="tab" href="#terrain">Terrain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#habitat">Lieu
                        d'habitation/Professionnel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#plantation">Plantation</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="terrain">
                <div id="terrain" class="card-body">
                    <h5 class="card-title">Devis</h5>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputTerrain">Terrain</label>
                                <select id="terrain1" class="form-control">
                                    <option selected>Urbain</option>
                                    <option>Rural</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmplacement">Emplacment</label>
                                <select id="emplacement" class="form-control">
                                    <option selected>Abidjan</option>
                                    <option>Intérieur</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNom">Nom</label>
                            <input type="text" class="form-control" id="nom" placeholder="Nom de famille">
                        </div>
                        <div class="form-group">
                            <label for="inputPrenom">Prénoms</label>
                            <input type="text" class="form-control" id="prenoms" placeholder="Prénoms">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email du client">
                        </div>
                        <!--<div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check this out
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>-->
                    </form>

                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="habitat">
                <p>on va vous orienter vers le sécretariat</p>
            </div>
            <div role="tabpanel" class="tab-pane" id="plantation">3</div>
        </div>
    </div>
</div>

</div>