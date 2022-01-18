@extends('layout.header')
@section('container')
<div class="container mt-5">

    <div class="container-fluid">
        <!-- Start Page Content -->       
                <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <form action='add' method='post'>
                            @csrf
                            <div class="form-body">
                               
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" name="nama" class="form-control" placeholder="nama">
                                           </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Select Gender</label>
                                            <select name="gender" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                <option>--Select Gender--</option>
                                                <option value="0">Perempuan</option>
                                                <option value="1">Laki - Laki</option>
                                             </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="email@email.com">
                                           </div>
                                    </div>
                                    <!--/span-->
                                    <!--/span-->
                                </div>
                                <hr>
                                <!--/row-->
                                <h3 class="box-title m-t-40">Alamat</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            
                                            <textarea name="alamat" type="text" style="height:100px;" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>                
                                    <!--/span-->
                                    
                              
                            
                                    <!--/span-->
                                
                            </div>
                            <div class="form-actions">
                                <input type="submit" name="submit" class="btn btn-success" value="save"> 
                                <a href="dashboard.php" class="btn btn-inverse">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
        </div>
    
    
</div>

@endsection