<main>
    <section id="albums">
        <div class="g-5 row row-cols-2 row-cols-md-3 row-cols-lg-4">
        <?php foreach($decodedData as $key => $value){ ?>
            <div class="cs_album card">
                <img class="card-img-top" src="<?php echo $value['poster']; ?>" alt="poster">
                <div class="card-body">
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
        <?php } ?>
        </div>
    </section>
</main>