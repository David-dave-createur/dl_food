<section class="py-5 overflow-hidden bg-primary" id="home">
    <div class="container">
      <div class="row flex-center">
        <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="#!"><img class="img-fluid" src="{{ asset('assets3/img/gallery/hero-header.png') }}" alt="hero-header" /></a></div>
        <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
          <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Êtes-vous affamés ?</h1>
          <h1 class="text-800 mb-5 fs-4">En quelques clics, trouvez des repas qui<br class="d-none d-xxl-block" />sont accessibles près de chez vous</h1>
          <div class="card w-xxl-75">
            <div class="card-body">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-motorcycle me-2"></i>Livraison</button>
                  <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-shopping-bag me-2"></i>Pickup</button>
                </div>
              </nav>
              <div class="tab-content mt-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <form class="row gx-2 gy-2 align-items-center">
                    <div class="col">
                      <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                        <label class="visually-hidden" for="inputDelivery">Adresse</label>
                        <input class="form-control input-box form-foodwagon-control" id="inputDelivery" type="text" placeholder="Enter Your Address" />
                      </div>
                    </div>
                    <div class="d-grid gap-3 col-sm-auto">
                      <button class="btn btn-danger" type="submit">Trouver de la nourriture</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <form class="row gx-4 gy-2 align-items-center">
                    <div class="col">
                      <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                        <label class="visually-hidden" for="inputPickup">Adresse</label>
                        <input class="form-control input-box form-foodwagon-control" id="inputPickup" type="text" placeholder="Enter Your Address" />
                      </div>
                    </div>
                    <div class="d-grid gap-3 col-sm-auto">
                      <button class="btn btn-danger" type="submit">Trouver de la nourriture</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
