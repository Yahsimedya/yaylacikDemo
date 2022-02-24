<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a style="width: 50%;" class="nav-item nav-link active  text-center p-0 m-0" id="super-lig-tab"
           data-toggle="tab"
           href="#super-lig" role="tab" aria-controls="super-lig" aria-selected="true"><img
                src="<?php echo e(asset('image/Spor-Toto-Super-lig.png')); ?>" class="lazyload img_fluid "></a>
        
        
        
        <a style="width: 50%;border:none;" class="nav-item nav-link  text-center  p-0 m-0 d-block my-auto border-none"
           id="birinci-lig-tab" data-toggle="tab"
           href="#fikstur" role="tab" aria-controls="birinci-lig" aria-selected="false"><span
                class="d-inline-block my-auto" style="color: black"> Fikstür</span></a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent"  >
    <div class="tab-pane fade show active" id="super-lig" role="tabpanel" aria-labelledby="super-lig-tab">
        <div class="table-responsive">
            <table class="table table-striped table-spor puan_durumu shadow-sm" >
                <thead class="table-spor__baslik">
                <tr align="center">
                    <th scope="col">S</th>

                    <th scope="col-2">Takım</th>
                    <!-- <th  scope="col">forma</th> -->
                    <th scope="col">G</th>
                    <th scope="col">B</th>
                    <th scope="col">M</th>
                    <th scope="col">Av</th>
                    <th scope="col">P</th>

                </tr>
                </thead>
                <tbody>

                <!-- SÜPER LİG  BEYAZ GROUP-->
                <?php echo $__env->make('main.body.lig', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </tbody>

            </table>
            <div class="row ">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-3 col-md-1 col-sm-1 col-1" style="background-color:green;height: 24px;">

                        </div>
                        <div class="col-lg-9 col-md-4 col-sm-4 col-5">
                            <p class="text-sm-left" style="font-size: 12px">
                                Şampiyonlar Ligi Eleme
                            </p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-6 text-center">
                    <div class="row">
                        <div class="col-lg-2 col-md-1 col-sm-1 col-1" style="background-color:red;height: 24px;">

                        </div>
                        <div class="col-lg-10 col-md-4 col-sm-4 col-2">
                            <p class="text-sm-left " style="font-size: 12px">
                                Alt Lig
                            </p>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
    <div class="tab-pane fade" id="fikstur" role="tabpanel" aria-labelledby="birinci-lig-tab">







        <table class="table table-striped table-spor puan_durumu shadow-sm">
            <thead class="table-spor__baslik">
            <tr align="center">
                <th scope="col-2">#</th>

                <th scope="col-2">Tarih</th>
                <th scope="col-2">Stadyum</th>
                <th scope="col">Evsahibi</th>
                <th scope="col">Misafir</th>
            </tr>
            </thead>
            <tbody>

            <?php echo $__env->make('main.body.fikstur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </tbody>
        </table>









    </div>
 </div>

</div>
<?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/main/body/puan-durumu.blade.php ENDPATH**/ ?>