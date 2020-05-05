@extends('layouts.adminmain')
@section('content')
<section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Hi, Tahaj</h2>
            <p class="section-lead">
              aelole asek asek joss
            </p>

            <div class="row">
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                      @csrf
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>Nama Pertama</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Nama Terakhir</label>
                            <input type="text" class="form-control" value="Maman" required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="ujang@maman.com" required="">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Telepon</label>
                            <input type="tel" class="form-control" value="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Bio</label>
                            <textarea class="form-control summernote-simple" style="min-height: 300px">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                          </div>
                        </div>
                        <!-- <div class="row">
                          <div class="form-group mb-0 col-12">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                              <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                              <div class="text-muted form-text">
                                You will get new information about products, offers and promotions
                              </div>
                            </div>
                          </div>
                        </div> -->
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
            </div>

              <div class="col-12 col-md-12 col-lg-5">
                    <div class="card">
                      <div class="card-body">
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class=" profile-widget-picture" style="width:100%;" id="preview">
                        <div class="form-group">
                          <label>* Foto Baru</label> <br>
                          <input type="file" name="foto" id="foto" onchange="tampilkanPreview(this,'preview')" required />
                      </div> 
                      </div>
                    </div>
              </div>
              
            </div>
          </div>
        </section>
        <script>
  function tampilkanPreview(foto,idpreview)
  { //membuat objek gambar
    var gb = foto.files;
    //loop untuk merender gambar
    for (var i = 0; i < gb.length; i++)
    { //bikin variabel
      var gbPreview = gb[i];
      var imageType = /image.*/;
      var preview=document.getElementById(idpreview);            
      var reader = new FileReader();
      if (gbPreview.type.match(imageType)) 
      { //jika tipe data sesuai
        preview.file = gbPreview;
        reader.onload = (function(element) 
        {
          return function(e) 
          {
            element.src = e.target.result;
          };
        })(preview);
        //membaca data URL gambar
        reader.readAsDataURL(gbPreview);
      }
        else
        { //jika tipe data tidak sesuai
          alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
        }
    }    
  }
</script>
        @endsection()