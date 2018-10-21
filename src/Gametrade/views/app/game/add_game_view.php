<div id="content-wrapper-parent">
    <div id="content-wrapper">

        <div id="content" class="container clearfix">
            <section class="row content">
                <div id="col-main" class="clearfix">
                    <div class="container">
                        <h3>Add new game</h3>
                        <div class="row">

                            <form method="post" action="<?= base_url('game/save');?>" enctype='multipart/form-data' id="create_game" accept-charset="UTF-8">
                                <ul id="game-form" class="row list-unstyled">
                                    <li id="game_name" class="col-md-11 col-md-push-1">
                                        <label class="control-label" for="game_name">Game Name <span class="req">*</span></label>
                                        <input type="text" value="" name="game_name" id="game_name" class="form-control" required>
                                    </li>
                                    <li id="game_description" class="col-md-11 col-md-push-1">
                                        <label class="control-label" for="game_description">Game description <span class="req">*</span></label>
                                        <input type="text" value="" name="game_description" id="game_description" class="form-control" required>
                                    </li>
                                    <li id="year_published" class="col-md-11 col-md-push-1">
                                        <label class="control-label" for="year_published">year_published <span class="req">*</span></label>
                                        <input type="text" value="" name="year_published" id="year_published" class="form-control" required>
                                    </li>

                                    <li id="company_id" class="col-md-11 col-md-push-1">
                                        <label class="control-label" for="company_id">Company of the game <span class="req">*</span></label>
                                        <select name="company_id">

                                            <?php if (is_array($this->companies)):?>
                                                <?php foreach ($this->companies as $company):?>
                                                    <option value="<?= $company['company_id'];?>"><?= $company['company_name'];?></option>
                                                <?php endforeach;?>

                                            <?php else:?>
                                                <option value="0">Unknown</option>
                                            <?php endif;?>
                                        </select>

                                    </li>
                                    <li id="game_categories" class="col-md-11 col-md-push-1">
                                        <label class="control-label" for="game_categories">Game categories <span class="req">*</span></label>
                                        <select name="game_categories[]" multiple>
                                            <?php if (is_array($this->games)):?>
                                                <?php foreach ($this->games as $category):?>
                                                    <option value="<?= $category['category_id'];?>"><?= $category['category_name'];?></option>
                                                <?php endforeach;?>
                                            <?php else:?>
                                                <option value="0">Unknown</option>
                                            <?php endif;?>
                                        </select>

                                    </li>
                                    <li id="game_platforms" class="col-md-11 col-md-push-1">
                                        <label class="control-label" for="game_platforms">Game platforms <span class="req">*</span></label>
                                        <select name="game_platforms[]" multiple>
                                            <?php if (is_array($this->platforms)):?>
                                                <?php foreach ($this->platforms as $platform):?>
                                                    <option value="<?= $platform['platform_id'];?>"><?= $platform['platform_name'];?></option>
                                                <?php endforeach;?>
                                            <?php else:?>
                                                <option value="0">Unknown</option>
                                            <?php endif;?>
                                        </select>
                                    </li>
                                    <li id="file_upload" class="col-md-11 col-md-push-1">
                                        <label class="control-label" for="file_upload">Image upload <span class="req">*</span></label>
                                        <input type="file" name="file_upload" />
                                    </li>
                                    <li class="col-md-11 col-md-push-1 unpadding-top">
                                        <button class="btn btn-1" type="submit">Create New Game</button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>