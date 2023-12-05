


    <div class="container px-4 mt-4">

        <div class="row mt-5 py-4">
        <h2 class="display-4 text-center">Edit Profile</h2>

            <div class="col-xl-">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Edit Profil</div>
                    <div class="card-body">
                        <form method="post" name="editprofil" action="<?php echo site_url('home/edit_profil_action');?>">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username</label>
                                <input name="username" class="form-control" id="inputUsername" type="text"
                                    placeholder="Masukkan Username" value="<?php echo $profil->username; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Nama</label>
                                <input name="name" class="form-control" id="inputUsername" type="text" placeholder="Masukkan Nama"
                                    value="<?php echo $profil->name; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input name="email" class="form-control" id="inputEmailAddress" type="email"
                                    placeholder="Masukkan Email" value="<?php echo $profil->email; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Alamat</label>
                                <input name="address" class="form-control" id="inputUsername" type="text" placeholder="Masukkan Alamat"
                                    value="<?php echo $profil->address; ?>">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Telfon</label>
                                <input name="phone" class="form-control" id="inputUsername" type="tel"
                                    placeholder="Maukkan No Telfon" value="<?php echo $profil->phone; ?>">
                            </div>
                            <!-- Save changes button-->
                            <a class="btn btn-primary" type="submit">Simpan</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>