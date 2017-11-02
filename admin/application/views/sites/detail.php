            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-user"></i>Client's Detail</h1>
                    </div>
                </div>
                <!-- END Page Title -->

               <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo base_url()?>">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>sites">Sites</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">sites</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-content">
                                <?php if ( ! $site->num_rows()): ?>
                                <h3 class="text-center">Sites tidak ditemukan!</h3>
                                <?php else: ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3><strong>Site details</strong></h3>
                                        <?php 
                                        $siteData = $site->result()[0];

                                        $sites = array(
                                                'Site Name' => $siteData->name_site,
                                                'Address' => $siteData->address_site,
                                                'Description' => $siteData->description_site,
                                                'Date Registered' => $siteData->date_registered
                                            );
                                        ?>

                                        <?php foreach($sites as $key => $value): ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?= $key; ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><?= $value; ?></p>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>

                                        <?php
                                        $clients = array(
                                                'Full name' => $client->fullname,
                                                'Company name' => $client->company_name,
                                                'Phone' => $client->phone,
                                                'Email' => $client->email,
                                                'Address 1' => $client->address_1,
                                                'Address 2' => $client->address_2,
                                                'City' => $client->city,
                                                'Region' => $client->region,
                                                'Kode pos' => $client->zip_code,
                                                'Tanggal register' => $client->date_registered,
                                                'Tipe user' => $this->userType[$client->type]
                                            );
                                        ?>
                                        <h3><strong>Client details</strong></h3>
                                        
                                        <?php foreach($clients as $key => $value): ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong><?= $key; ?></strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><?= $value; ?></p>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->