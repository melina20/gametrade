<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div id="content" class="container clearfix">
            <section class="row content">
                <div id="col-main" class="clearfix">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="container typo">
                                <h3 class="demo">Games listing</h3>
                                <div class="span8 wrap-table">
                                    <form method="post" action="<?= base_url('game/add'); ?>" enctype='multipart/form-data' id="create_game" accept-charset="UTF-8">
                                        <table class="table-hover">
                                            <thead>
                                            <th>Name</th>
                                            <th>Company Name</th>
                                            <th>Game description</th>
                                            <th>Year Published</th>
                                            <th>Thumb</th>
                                            <th>Game categories</th>
                                            <th>Platforms</th>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($this->games as $game): ?>
                                                    <tr>
                                                        <td><?= $game['gamename']; ?></td>
                                                        <td><?= $game['company_name']; ?></td>
                                                        <td><?= $game['gamedescription']; ?></td>
                                                        <td><?= $game['year_published']; ?></td>
                                                        <td><img src="<?= base_url($game['image']); ?>"/></td>
                                                        <td>
                                                            <?php foreach ($game['categories'] as $game_category_id => $category_name) : ?>
                                                                <?= $category_name; ?> <br/>
                                                            <?php endforeach; ?>
                                                        </td>
                                                        <td>
                                                            <?php foreach ($game['platforms'] as $game_platform_id => $platform_name) : ?>
                                                                <?= $platform_name; ?> <br/>
                                                            <?php endforeach; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <button class="btn btn-1" type="submit">Add new game</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>