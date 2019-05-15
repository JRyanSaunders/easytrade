<!-- DONE WITH CSS -->
<!--
quote1
author1
quote2
author2
quote3
author3
-->
<div class="col-sm-12">
    <div id="quote-block" class="carousel slide quote-block" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#quote-block" data-slide-to="0" class="active"></li>
            <li data-target="#quote-block" data-slide-to="1"></li>
            <li data-target="#quote-block" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <h2>'' <?php echo $quote1 ?> ''</h2>
                <h3><?php echo $author1 ?></h3>
            </div>

            <div class="item">
                <h2>'' <?php echo $quote2 ?> ''</h2>
                <h3><?php echo $author2 ?></h3>
            </div>

            <div class="item">
                <h2>'' <?php echo $quote3 ?> ''</h2>
                <h3><?php echo $author3 ?></h3>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#quote-block" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#quote-block" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>