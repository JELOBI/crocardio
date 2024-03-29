@extends('main-doctor.layout.master')
@section('parentPageTitle', 'Patients')
@section('title', 'All Patients')

@section('content')

    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card patients-list">
                <div class="header">
                    <h2><strong>Patients</strong> List</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs padding-0">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#All">All</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#opatija">OPATIJA</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ustanova2">USTANOVA 2</a></li>
                    </ul>
                        
                    <!-- Tab panes -->
                    <div class="tab-content m-t-10">
                        <div class="tab-pane table-responsive active" id="All">
                            <table class="table m-b-0 table-hover">
                                <thead>
                                    <tr>                                       
                                        <th>Media</th>
                                        <th>Patients ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Number</th>
                                        <th>Last Visit</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00598</span></td>
                                        <td>Daniel</td>
                                        <td>32</td>
                                        <td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
                                        <td>404-447-6013</td>
                                        <td>11 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00258</span></td>
                                        <td>Alexander</td>
                                        <td>22</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>15 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar3.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00369</span></td>
                                        <td>Richard</td>
                                        <td>26</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>16 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar4.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00147</span></td>
                                        <td>Samuel</td>
                                        <td>45</td>
                                        <td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
                                        <td>404-447-6013</td>
                                        <td>17 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar5.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00123</span></td>
                                        <td>Stephen</td>
                                        <td>55</td>
                                        <td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
                                        <td>404-447-6013</td>
                                        <td>18 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>27</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td>19 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00789</span></td>
                                        <td>Cameron</td>
                                        <td>38</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>19 Jan 2018</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar3.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00987</span></td>
                                        <td>Alex</td>
                                        <td>39</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>20 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar4.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00951</span></td>
                                        <td>James</td>
                                        <td>32</td>
                                        <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>404-447-6013</td>
                                        <td>22 Jan 2018</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00953</span></td>
                                        <td>charlie</td>
                                        <td>51</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>22 Jan 2018</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar5.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00984</span></td>
                                        <td>William</td>
                                        <td>35</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>22 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00934</span></td>
                                        <td>thomas</td>
                                        <td>26</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>29 Jan 2018</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                        <div class="tab-pane table-responsive" id="opatija">
                            <table class="table m-b-0 table-hover">
                                <thead>
                                    <tr>                                       
                                        <th>Media</th>
                                        <th>Patients ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Number</th>
                                        <th>Last Visit</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00598</span></td>
                                        <td>Daniel</td>
                                        <td>32</td>
                                        <td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
                                        <td>404-447-6013</td>
                                        <td>11 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00258</span></td>
                                        <td>Alexander</td>
                                        <td>22</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>15 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>                                       
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>27</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td>19 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00789</span></td>
                                        <td>Cameron</td>
                                        <td>38</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>19 Jan 2018</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar3.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00987</span></td>
                                        <td>Alex</td>
                                        <td>39</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>20 Jan 2018</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar4.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00951</span></td>
                                        <td>James</td>
                                        <td>32</td>
                                        <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>404-447-6013</td>
                                        <td>22 Jan 2018</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar1.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00953</span></td>
                                        <td>charlie</td>
                                        <td>51</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>22 Jan 2018</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img class="patients-img" src="../assets/images/xs/avatar2.jpg" alt=""></span></td>
                                        <td><span class="list-name">KU 00934</span></td>
                                        <td>thomas</td>
                                        <td>26</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-6013</td>
                                        <td>29 Jan 2018</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop