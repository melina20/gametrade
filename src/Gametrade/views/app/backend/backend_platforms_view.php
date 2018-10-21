<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div id="content" class="container clearfix">
            <section class="row content">
                <div id="col-main" class="clearfix">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="container typo">
                                <h3 class="demo">Platfomrs listing</h3>
                                <div class="span12 wrap-table">
                                    <div class="col-md-16">
                                    <table class="table-hover">
                                        <thead>
                                        <th>Platform id</th>
                                        <th>Platform Name</th>
                                        <th>Platform Description</th>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($this->games_platforms as $platform): ?>
                                            <tr>
                                                <td><?= $platform['platform_id']; ?></td>
                                                <td><?= $platform['platform_name']; ?></td>
                                                <td><?= $platform['platform_description']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
            </section>
        </div>
    </div>
</div>