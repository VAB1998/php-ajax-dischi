<main>
    <section id="albums">
        <div class="container">
            <div class="g-5 row row-cols-2 row-cols-md-3 row-cols-lg-4">
            <?php foreach($decodedData as $key => $value){ ?>
                <div  class="col text-center">
                    <div class="cs_album card p-3 h-100">
                        <img class="card-img-top" src="<?php echo $value['poster']; ?>" alt="poster">
                        <div class="card-body pb-0  px-0">
                            <h4>
                            <?php echo $value['title']; ?>
                            </h4>
                            <p>
                                <?php echo $value['author']; ?>
                            </p>
                            <p>
                                <?php echo $value['year']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
</main>