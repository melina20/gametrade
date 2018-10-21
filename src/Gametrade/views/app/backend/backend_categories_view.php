<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div id="content" class="container clearfix">
            <section class="row content">
                <div id="col-main" class="clearfix">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="container typo">
                                <h3 class="demo">Categories listing</h3>
                                <div class="span12 wrap-table">
                                    <div class="col-md-16">
                                        <table class="table-hover">
                                            <thead>
                                            <th>Category id</th>
                                            <th>Category Name</th>
                                            <th>Category Description</th>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($this->games_categories as $category): ?>
                                                <tr>
                                                    <td><?= $category['category_id']; ?></td>
                                                    <td><?= $category['category_name']; ?></td>
                                                    <td><?= $category['category_description']; ?></td>
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