<div class="isi">
  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
       <div class="wrapper wrapper--w680">
           <div class="card card-4">
               <div class="card-body">
                   <h2 class="title">Tambah Data</h2>
                   <form action="simpan"method="POST" role="form">
                     <div class="row row-space">
                          <div class="col-5">
                              <div class="input-group">
                                  <label class="label">Nama Mobil</label>
                                  <input class="input--style-4" type="text" name="nama" required>
                              </div>
                          </div>
                          <div class="col-5">
                            <label class="label">Merk</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                  <select name="merk" required>
                                    <option disabled="disabled" selected="selected">Pilih Merk Mobil</option>
                                    <option>Toyota</option>
                                    <option>Honda</option>
                                    <option>Suzuki</option>
                                    <option>Nissan</option>
                                    <option>Mitsubishi</option>
                                    <option>Daihatsu</option>
                                    <option>Mazda</option>
                                    <option>Hino</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                          </div>
                      </div>
                       <div class="row row-space">
                           <div class="col-5">
                               <div class="input-group">
                                   <label class="label">Type</label>
                                   <input class="input--style-4" type="text" name="type"required>
                               </div>
                           </div>
                           <div class="col-5">
                               <div class="input-group">
                                   <label class="label">Warna</label>
                                   <input class="input--style-4" type="text" name="warna"required>
                               </div>
                           </div>
                       </div>
                       <div class="row row-space">
                           <div class="col-5">
                               <div class="input-group">
                                   <label class="label">No Polisi</label>
                                   <input class="input--style-4" type="text" name="no_polisi"required >
                               </div>
                           </div>
                           <div class="col-5">
                               <div class="input-group">
                                   <label class="label">Model</label>
                                   <input class="input--style-4" type="text" name="model"required>
                               </div>
                           </div>
                       </div>
                       <div class="row row-space">
                           <div class="col-5">
                               <div class="input-group">
                                   <label class="label">Bahan Bakar</label>
                                   <input class="input--style-4" type="text" name="bahan_bakar"required>
                               </div>
                           </div>
                           <div class="col-5">
                               <div class="input-group">
                                   <label class="label">Harga</label>
                                   <input class="input--style-4" type="number" name="harga"required>
                               </div>
                           </div>
                       </div>
                       <div class="row row-space">
                           <div class="col-5">
                               <div class="input-group">
                                   <label class="label">Tahun</label>
                                   <input class="input--style-4" type="number" name="tahun"required>
                               </div>
                           </div>
                           <div class="col-5">
                               <div class="input-group">
                                   <label class="label">Transmisi</label>
                                   <div class="p-t-10">
                                       <label class="radio-container m-r-45">AT
                                           <input type="radio" checked="checked" name="transmisi"value="AT">
                                           <span class="checkmark"></span>
                                       </label>
                                       <label class="radio-container">MT
                                           <input type="radio" name="transmisi" value="MT">
                                           <span class="checkmark"></span>
                                       </label>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row row-space">
                           <div class="col-5">
                             <div class="input-group">
                                 <label class="label">Masa Berlaku STNK</label>
                                   <input class="input--style-5" type="date" name="masa_berlaku" min="2010-12-31" placeholder="01-01-2010"required >
                             </div>
                           </div>
                           <div class="col-5">
                             <div class="input-group">
                                 <label class="label">Kapasitas Mesin</label>
                                 <input class="input--style-4" type="number" name="kapasitas" placeholder="100cc" min="0"required>
                             </div>
                           </div>
                       </div>
                       <div class="row row-space">
                           <div class="col-5">
                                 <div class="input-group">
                                     <label class="label">Gambar 1</label>
                                     <input class="input--style-4" type="text" name="gambar1"required>
                                 </div>
                             </div>
                              <div class="col-5">
                               <div class="input-group">
                                   <label class="label">Gambar 2</label>
                                   <input class="input--style-4" type="text" name="gambar2"required>
                               </div>
                           </div>
                       </div>
                       <div class="row row-space">
                           <div class="col-5">
                               <div class="input-group">
                                   <label class="label">Gambar 4</label>
                                   <input class="input--style-4" type="text" name="gambar4"required>
                               </div>
                           </div>
                           <div class="col-5">
                               <div class="input-group">
                                   <label class="label">Gambar 3</label>
                                   <input class="input--style-4" type="text" name="gambar3"required>
                               </div>
                           </div>
                       </div>
                       <div class="row row-space">
                           <div class="col-8">
                               <div class="input-group">
                                   <label class="label">Deskripsi</label>
                                   <textarea class="input--style-4" name="desc" rows="8" cols="80"required></textarea>
                               </div>
                           </div>
                       </div>
                       <div class="p-t-15">
                           <button class="btn btn--radius-2 btn--blue" type="submit">Simpan</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>

</div>
