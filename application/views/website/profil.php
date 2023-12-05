<div class="row mt-5"></div>
<div class="row mt-5"></div>
    <h2 class="display-4 text-center mb-5">Hai <span><?php echo $profil->name; ?></span></h2>


    <div class="container px-4 mt-8">
        <div class="row">
            <div class="col-xl">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Informasi Akun</div>
                    <div class="card-body">
                        <table class="table user-view-table m-0">
                            <tbody>
                                <tr>
                                    <td>Username :</td>
                                    <td><?php echo $profil->username; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama :</td>
                                    <td><?php echo $profil->name; ?></td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td><?php echo $profil->email; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat :</td>
                                    <td><?php echo $profil->address; ?></td>
                                </tr>
                                <tr>
                                    <td>Telfon :</td>
                                    <td><?php echo $profil->phone; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="<?php echo site_url('home/edit_profil');?>" class="btn btn-primary mt-2" type="button">Edit Profile</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>