<div class="container-fluid section-separator" id="clients">&nbsp;</div>
<div class="container-fluid gap">&nbsp;</div>
<div class="container-fluid">

    <div class="container">

        <div class="row">

            <div class="col-xs-12 section-title text-center" id="clients-title">Our Clients</div>

        </div>


    </div>


</div>
<div class="container-fluid">

    <div class="container">

        <div class="row">

            <?php
            foreach ($clients as $c)
            {
                ?>

                <div class="col-xs-12 col-sm-6 col-md-3 text-center section-body-scroll">

                    <?php
                    if ($c[0] != "")
                    {
                        ?>
                        <div class="clients">

                            <div align="center"><img src="img/clients/<?php echo $c[0]; ?>" class="img-responsive" /></div>
                            <div class="gap">&nbsp;</div>
                            <div align="center" class="clients-name"><strong><?php echo $c[1]; ?></strong></div>

                        </div>
                        <div class="gap">&nbsp;</div>
                    <?php
                    }
                    ?>

                </div>
            <?php
            }
            ?>

        </div>


    </div>

</div>
<div class="container-fluid gap">&nbsp;</div>
<div class="container-fluid gap">&nbsp;</div>
<div class="container-fluid">

    <div class="container">

        <div class="row" align="center">

            <button class="btn btn-default">Full List of Our Clients</button>

        </div>

    </div>

</div>
<div class="container-fluid gap">&nbsp;</div>
<div class="container-fluid gap">&nbsp;</div>