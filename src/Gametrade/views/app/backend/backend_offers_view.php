<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div id="content" class="container clearfix">
            <section class="row content">
                <div id="col-main" class="clearfix">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="container typo">
                                <h3 class="demo">Offers listing</h3>
                                <div class="span12 wrap-table">
                                    <div class="col-md-11">
                                        <table class="table-hover">
                                            <thead>
                                            <th>Offer id</th>
                                            <th>Game Name</th>
                                            <th>From user</th>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($this->offers as $offer): ?>
                                                <tr>
                                                    <td><?= $offer['offer_id']; ?></td>
                                                    <td><?= $offer['gamename']; ?></td>
                                                    <td><?= $offer['email']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>