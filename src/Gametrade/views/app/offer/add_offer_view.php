<div id="content-wrapper-parent">
    <div id="content-wrapper">

        <div id="content" class="container clearfix">
            <section class="row content">
                <div id="col-main" class="clearfix">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="container typo">

                                <h3 style="margin-top:75px">Add new offer</h3>
                                <div class="row">
                                    <form method="post" action="<?= base_url('offer/save'); ?>" enctype='multipart/form-data' id="create_game" accept-charset="UTF-8">

                                        <label class="control-label" for="game_id">Select a game <span class="req">*</span></label>
                                        <select name="game_id">
                                            <?php foreach ($this->all_games as $game): ?>
                                                <option value="<?= $game['game_id']; ?>"><?= $game['gamename']; ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                        <input type="hidden" value="<?= $this->user_id; ?>" name="user_id" id="user_id" class="form-control" required>

                                        <button class="btn btn-1" type="submit">Create New Offer</button>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>