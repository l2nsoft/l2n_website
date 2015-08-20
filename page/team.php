<div class="container-fluid section-separator" id="team">&nbsp;</div>
<div class="container-fluid gap">&nbsp;</div>
<div class="container-fluid">

    <div class="container">

        <div class="row">

            <div class="col-xs-12 section-title text-center" id="team-title">Meet The Experts</div>

        </div>


    </div>


</div>
<div class="container-fluid">

    <div class="container">

        <div class="row">

            <?php
            $i = 0;
            foreach ($experts as $e)
            {
                $i++;
            ?>

            <div class="col-xs-12 col-sm-6 col-md-3 <?php if ($i == 5){?> col-md-offset-3 <?php }  ?> text-center section-body-scroll">

                <?php
                if ($e[0] != "")
                {
                ?>
                    <div class="experts">

                        <div align="center"><img src="img/team/<?php echo $e[0]; ?>" class="img-responsive" /></div>
                        <div class="gap">&nbsp;</div>
                        <div align="center"><strong><?php echo $e[1]; ?></strong></div>
                        <div align="center"><?php echo $e[2]; ?></div>
                        <div align="center"><?php echo $e[3]; ?></div>
                        <div align="center"><?php echo $e[4]; ?></div>

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
<div class="container-fluid section-separator" id="team-others">&nbsp;</div>
<div class="container-fluid gap">&nbsp;</div>
<div class="container-fluid">

    <div class="container">

        <div class="row">

            <div class="col-xs-12 section-title text-center" id="team-title-second">Other Members</div>

        </div>


    </div>


</div>
<div class="team section-body-scroll" align="center">

    <?php
    foreach ($team as $t)
    {
        ?>
        <div>

            <img src="img/team/<?php echo $t[0]; ?>" class="img-responsive" />
            <div class="gap">&nbsp;</div>
            <div align="center"><strong><?php echo $t[1]; ?></strong></div>
            <div align="center"><?php echo $t[2]; ?></div>

        </div>
    <?php
    }
    ?>

</div>
<div class="container-fluid gap">&nbsp;</div>
<div class="container-fluid gap">&nbsp;</div>